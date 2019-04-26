<?php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function linkImport(Request $request){

        $path = $request->file('file')->store('public');
        $filePath = 'storage/app/'.$path;

        Excel::selectSheets('Sheet1')->load($filePath, function($reader) {

            $reader->ignoreEmpty();
            $data = $reader->get();
            dd($data);
           foreach ($data as $v=>$k){
               dd($k);
           }

        }, 'UTF-8');
        return response()->json($path);
    }

}