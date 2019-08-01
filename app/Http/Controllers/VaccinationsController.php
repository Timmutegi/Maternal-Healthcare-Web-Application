<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Immunization;
use App\parents;
use App\child;
use App\Http\Resources\vaccination;

class VaccinationsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new vaccination(Immunization::find($id));
    }

    public function view(Request $request)
    {
        $id = $request->input('id');

        $vaccination = Immunization::find($id);
    
        return view('vaccinations.viewschedule', [
            'vaccination' => $vaccination
        ]);
    }
}
