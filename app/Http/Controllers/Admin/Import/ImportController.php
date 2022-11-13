<?php

namespace App\Http\Controllers\Admin\Import;

use App\Http\Controllers\Controller;
use App\Models\Import;
use App\Models\ImportDetail;
use App\Models\Product;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class ImportController extends Controller {
    public function index() {
        $products = Product::all();

        return view('admin.import.import', [
            'products' => $products,
        ]);
    }

    public function cart() {
        return view('admin.import.importCart');
    }

    public function add(Request $request) {
        $product = Product::find($request->productID);
        Cart::instance('import')->add($product->ProductID, $product->ProductName, $request->quantity, $product->Price);
        return back()->with('success', 'Item added to cart');
    }

    public function remove(Request $request) {
        Cart::instance('import')->remove($request->rowId);
        return back()->with('success', 'Item removed from cart');
    }

    public function placeOrder(Request $request) {
        DB::beginTransaction();
        try {
            $import = new Import();
        $import->StaffID = Auth::guard('admin')->id();
        $import->TotalQuantity = Cart::instance('import')->count();
        $import->Date = date('y/m/d');

        $import->save();

        foreach (Cart::instance('import')->content() as $item) {
            $importDetail = new ImportDetail();
            $importDetail->ProductID = $item->id;
            $importDetail->Quantity = $item->qty;

            $import->importDetail()->save($importDetail);
            $product = Product::find($importDetail->ProductID);
            $product->Quantity = $product->Quantity + $importDetail->Quantity;
            $product->save();
        }
        DB::commit();
        Cart::instance('import')->destroy();
        return redirect('/admin/import-history');
        } catch (Exception $e) {
           DB::rollback();
           throw new Exception($e->getMessage());
        }
    }
}
