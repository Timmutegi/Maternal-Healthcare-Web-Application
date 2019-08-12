<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\BCGVaccines;
use App\Immunization;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function analytics(){
        $bcg = Immunization::where('bcg_at_birth', '>', 0)->count();
        $opv = Immunization::where('opv_at_birth', '>', 0)->count();

        $chart = new BCGVaccines;

        $chart->labels(['BCG', 'OPV']);
        $chart->dataset('Vaccines Given', 'column', [$bcg, $opv])->options([
            'color' => '#008080',
        ]);

        return view('pages.analytics', [
            'chart' => $chart
        ]);
    }
}
