<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Results;
use App\Models\medicine;
use App\Models\indication;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminResult extends Controller
{
    function index (){
        $results = Results::all();
        $indications = indication::all();
        $medicines = medicine::all();
        $array = [
            'results' => $results,
            'indications' => $indications,
            'medicines' => $medicines, 
        ];
        return view('pages.admin-layout.result.result', $array);
    }
    function delete_result($id){
        Results::where('id', $id)->delete();
        return redirect()->route('result-admin');
    }
    function report_result(){
        $results = Results::all();
        $array = [
            'results' => $results,
        ];
        $pdf = Pdf::loadView('pages.admin-layout.result.report-result', $array);
        return $pdf->download('report-results-' .Carbon::now()->timestamp.'.pdf');
    }
}
