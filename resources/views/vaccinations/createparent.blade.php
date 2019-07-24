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
    <form action="{{ action('ParentController@store')}}" method="post" >
        {{ csrf_field() }}

        <div class="card border-dark mb-3">
            <div class="card-header">Parent Details</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="firstname">First Name*</label>
                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" value="{{ old('firstname') }}">
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Last Name*</label>
                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" value="{{ old('lastname') }}">
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Surname</label>
                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="surname" value="{{ old('surname') }}">
                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-4">
                        <label>Phone Number*</label>
                        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                        <label>Email*</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-2">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-0">
                    <a style="margin:20px;" href="{{ url()->previous() }}" class="btn btn-primary">Back</a>  
                    <button type="submit" class="btn btn-primary">Next Step</button>
                </div>
            </div> 
    </form>
</div>
</body>
@endsection()