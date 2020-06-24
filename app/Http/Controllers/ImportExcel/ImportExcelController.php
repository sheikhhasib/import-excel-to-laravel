<?php

namespace App\Http\Controllers\ImportExcel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ImportContacts;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    public function index()
    {
        return view('import_excel.index');
    }
    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
        Excel::import(new ImportContacts, request()->file('import_file'));
        return back()->with('success', 'Contacts imported successfully.');
    }
}
