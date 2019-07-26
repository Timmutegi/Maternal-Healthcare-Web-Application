<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Immunization;
use App\parents;
use App\Http\Resources\vaccination as vaccinationResource;

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
        $vaccination = Immunization::findorfail($id);
        return new VaccinationResource($vaccination);
    }
}
