<?php

namespace App\Http\Controllers\Admin\Import;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Import;

class ImportController extends Controller {
    public function index() {
        $imports = Import::all();
        return view('admin.import.managerImport', [
            'imports' => $imports,
        ]);
    }

}
