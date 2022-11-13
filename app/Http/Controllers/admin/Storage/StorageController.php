<?php

namespace App\Http\Controllers\Admin\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Storage;

class StorageController extends Controller {
    public function index() {
        $storages = Storage::all();
        return view('admin.storage.managerStorage', [
            'storages' => $storages,
        ]);
    }

}
