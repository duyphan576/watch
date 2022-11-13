<?php

namespace App\Http\Controllers\Admin\Import;

use App\Http\Controllers\Controller;
use App\Models\Import;
use Illuminate\Http\Request;

class ImportHistoryController extends Controller {
    public function index() {
        $imports = Import::all();

        return view('admin.import.importHistory', [
            'imports' => $imports,
        ]);
    }

    public function importDetail($importID) {
        $import = Import::find($importID);

        return view('admin.import.importHistoryDetail', [
            'import' => $import,
        ]);
    }
}
