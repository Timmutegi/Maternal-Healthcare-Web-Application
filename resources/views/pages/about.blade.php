@extends('layouts.app')

@section('content')
<body>
	<div class="container">
        <header>
            <div class="banner">
                <br>
                <h1 Class="whitetitle">About MamaFair</h1>
            </div>
        </header><br>
        <div class="about-div">
			<div class="about">
				<hr>
				<p style="font-size:1.875em; ">What is MamaFair?</p>
				<hr>
				<p style=" max-width:720px; font-size:1.38em;">Mama Fair is a web application that is aimed at improving maternal health care services and eventually reducing the maternal and infant mortality rate.</p>
			</div>
		</div><br>
        <div class="row">
			<div class="col-sm-4">
				<div class="card mb-3">
				<img src="{{URL::asset('/images/form.jpg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Online Immunization Form</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<br>
			<div class="col-sm-4">
				<div class="card mb-3">
				<img src="{{URL::asset('/images/analytics1.jpg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Analytics</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card mb-3">
				<img src="{{URL::asset('/images/reminder.jpg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Reminders</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
		<br><br>
        <div class="about-div">
			<div class="facts">
                <div style="position:relative; background-color: #F8F8F8; height: 280px; width: 100%;">	
                	<div style="max-width:600px;">
                        <p style="font-size:1.38em ;">"<strong>45</strong> out of <strong>1000</strong> children in Kenya die before reaching 5 years due to preventable diseases like measles."</p>
                        <p style="font-size:1.2em;">-UNICEF</p>
                	</div> 
                </div>
        	</div>
        </div>
	</div>
</body>      
@endsection
    
