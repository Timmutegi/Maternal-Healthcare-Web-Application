@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <br><header>
        <div class="banner">
            <br>
            <h1 Class="whitetitle">MamaFair</h1>
        </div>
    </header><br>
    @if( Session::has("success") )
        <div class="alert alert-success alert-block" role="alert">
        <button class="close" data-dismiss="alert"></button>
        {{ Session::get("success") }}
        </div>
    @endif
    
    <form action="{{ action('ChildController@store')}}" method="post" >
        {{ csrf_field() }}

        <div class="card border-dark mb-3">
            <div class="card-header">Child Details</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4">
                        <label>First Name*</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" value="{{ old('firstname') }}">
                    </div>
                    <div class="col-md-4">
                        <label>Last Name*</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" value="{{ old('lastname') }}">
                    </div>
                    <div class="col-md-4">
                        <label>Surname</label>
                        <input type="text" name="surname" class="form-control" id="surname" value="{{ old('surname') }}">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-3">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Date of Birth*</label>
                        <input type="date" name="dob" class="form-control" id="dob" value="{{ old('dob') }}">
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        <button type="submit" class="btn btn-primary">Next Step</button>
    </form>
</div>
</body>
@endsection()