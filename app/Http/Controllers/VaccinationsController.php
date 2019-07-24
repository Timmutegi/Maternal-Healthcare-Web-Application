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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccinations = Immunization::paginate(10);
        return view('vaccinations.index')->with('vaccinations', $vaccinations);
        // return vaccinationResource::collection($vaccinations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccinations.createparent');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        // $vaccination = new Immunization;

        // $vaccination->child_id = $request->input('child_id');
        // $vaccination->bcg_at_birth = $request->input('bcg_at_birth');
        // $vaccination->opv_at_birth = $request->input('opv_at_birth');
        // $vaccination->opv_at_6_weeks = $request->input('opv_at_6_weeks');
        // $vaccination->opv_at_10_weeks = $request->input('opv_at_10_weeks');
        // $vaccination->opv_at_14_weeks = $request->input('opv_at_14_weeks');
        // $vaccination->dpt_at_6_weeks = $request->input('dpt_at_6_weeks');
        // $vaccination->dpt_at_10_weeks = $request->input('dpt_at_10_weeks');
        // $vaccination->dpt_at_14_weeks = $request->input('pt_at_14_weeks');
        // $vaccination->pcv_at_6_weeks = $request->input('pcv_at_6_weeks');
        // $vaccination->pcv_at_10_weeks = $request->input('pcv_at_10_weeksd');
        // $vaccination->pcv_at_14_weeks = $request->input('pcv_at_14_weeks');
        // $vaccination->yellow_fever_at_9_months = $request->input('yellow_fever_at_9_months');
        // $vaccination->measles_fever_at_9_months = $request->input('measles_fever_at_9_months');

        
        // $vaccination->save();

        // return redirect('vaccinations');
        // $vaccination = $request->isMethod('put') ? Immunization::findOrFail
        // ($request->immunization_id) : new Immunization;

        // $vaccination->id = $request->input('immunization_id');
        // $vaccination->child_id = $request->input('child_id');
        // $vaccination->bcg_at_birth = $request->input('bcg_at_birth');
        // $vaccination->opv_at_6_weeks = $request->input('opv_at_6_weeks');
        // $vaccination->opv_at_10_weeks = $request->input('opv_at_10_weeks');
        // $vaccination->opv_at_14_weeks = $request->input('opv_at_14_weeks');
        // $vaccination->dpt_at_6_weeks = $request->input('dpt_at_6_weeks');
        // $vaccination->dpt_at_10_weeks = $request->input('dpt_at_10_weeks');
        // $vaccination->dpt_at_14_weeks = $request->input('pt_at_14_weeks');
        // $vaccination->pcv_at_6_weeks = $request->input('pcv_at_6_weeks');
        // $vaccination->pcv_at_10_weeks = $request->input('pcv_at_10_weeksd');
        // $vaccination->pcv_at_14_weeks = $request->input('pcv_at_14_weeks');
        // $vaccination->yellow_fever_at_9_months = $request->input('yellow_fever_at_9_months');
        // $vaccination->measles_fever_at_9_months = $request->input('measles_fever_at_9_months');

        // if($vaccination->save()){
        //     return new vaccinationResource($vaccination);
        // }
    }

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaccination = Immunization::findorfail($id);

        if($vaccination->delete()){
            return new VaccinationResource($vaccination);
        }
        
    }
}
