@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <br>
 
    <header>
        <div class="banner">
            <br>
            <h1 Class="whitetitle">MamaFair</h1>
        </div>
    </header>
    <br>
        <form action="{{ action('VaccinationController@store')}}" method="post" >
        {{ csrf_field() }}

        <div class="card border-dark mb-3">
            <div class="card-header">At Birth</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-6">
                        <label>BCG*</label>
                        <input type="date" name="bcg_at_birth" class="form-control" id="bcg_at_birth">
                    </div>
                    <div class="col-md-6">
                        <label>OPV*</label>
                        <input type="date" name="opv_at_birth" class="form-control" id="opv_at_birth">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card border-dark mb-3">
            <div class="card-header">6 Weeks</div>
            <div class="card-body">
               <div class="form-row">
                    <div class="col-md-4">
                        <label>OPV</label>
                        <input type="date" name="opv_at_6_weeks" class="form-control" id="opv_at_6_weeks">
                    </div>
                    <div class="col-md-4">
                        <label>DPT</label>
                        <input type="date" name="dpt_at_6_weeks" class="form-control" id="dpt_at_6_weeks">
                    </div>
                    <div class="col-md-4">
                        <label>PCV</label>
                        <input type="date" name="pcv_at_6_weeks" class="form-control" id="pcv_at_6_weeks">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card border-dark mb-3">
            <div class="card-header">10 Weeks</div>
            <div class="card-body">
               <div class="form-row">
                    <div class="col-md-4">
                        <label>OPV</label>
                        <input type="date" name="opv_at_10_weeks" class="form-control" id="opv_at_10_weeks">
                    </div>
                    <div class="col-md-4">
                        <label>DPT</label>
                        <input type="date" name="dpt_at_10_weeks" class="form-control" id="dpt_at_10_weeks">
                    </div>
                    <div class="col-md-4">
                        <label>PCV</label>
                        <input type="date" name="pcv_at_10_weeks" class="form-control" id="pcv_at_10_weeks">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card border-dark mb-3">
            <div class="card-header">14 Weeks</div>
            <div class="card-body">
               <div class="form-row">
                    <div class="col-md-4">
                        <label>OPV</label>
                        <input type="date" name="opv_at_14_weeks" class="form-control" id="opv_at_14_weeks">
                    </div>
                    <div class="col-md-4">
                        <label>DPT</label>
                        <input type="date" name="dpt_at_14_weeks" class="form-control" id="dpt_at_14_weeks">
                    </div>
                    <div class="col-md-4">
                        <label>PCV</label>
                        <input type="date" name="pcv_at_14_weeks" class="form-control" id="pcv_at_14_weeks">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card border-dark mb-3">
            <div class="card-header">9 Months</div>
            <div class="card-body">
               <div class="form-row">
                    <div class="col-md-6">
                        <label>Measles</label>
                        <input type="date" name="measles_at_9_months" class="form-control" id="measles_at_9_months">
                    </div>
                    <div class="col-md-6">
                        <label>Yellow Fever</label>
                        <input type="date" name="yellow_fever_at_9_months" class="form-control" id="yellow_fever_at_9_months">
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>       
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
</body>
@endsection()