@extends('layouts.app')

@section('content')
<body>
<div class="container">
	              
	@if (session('message'))
		<div class="alert alert-dark alert-dismissible fade show" role="alert">
			<strong>Hey !</strong> You are now logged in.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif

       
    
	<header>
        <div class="banner">
            <br>
            <h1 Class="whitetitle">MamaFair</h1>
        </div>
    </header>
	<br>
	<div class="about-div">
		<div class="about">
			<hr>
			<p style="font-size:1.875em; ">Welcome to  MamaFair</p>
			<hr>
			<p style=" max-width:720px; font-size:1.38em;">Mama Fair is a web application that is aimed at improving maternal health care services and eventually reducing the maternal and infant mortality rate.</p>
		</div>
	</div><br>
	<div class="row">
		<div class="col-sm-4">
			<div class="card mb-3">
			<img src="{{URL::asset('/images/form.jpg')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><strong>Online Immunization Form</strong></h5>
					<p style="font-size:1.1em;" class="card-text">The online immunization form makes it easier to manage maternal healthcare records. 
					This module provides functionality such as the ability easily create, update and delete records.</p>
					<a href="/vaccinations" class="btn btn-primary">Vaccinations</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card mb-3">
			<img src="{{URL::asset('/images/analytics1.jpg')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><strong>Analytics</strong></h5>
					<p style="font-size:1.1em;" class="card-text">Are you interested with up to date statistics and information about the state of maternal healthcare in Kenya?
					You can now easily access this information on this platform by clicking on the link below.</p>
					<a href="/analytics" class="btn btn-primary">Analytics</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card mb-3">
			<img src="{{URL::asset('/images/reminder.jpg')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><strong>Reminders</strong></h5>
					<p style="font-size:1.1em;" class="card-text">In addition to the online immunization form, our platform enable you as a healthcare worker to send reminders
					to patients through E-mail and SMS to remind them of the next hospital visit.</p>
					<a href="/vaccinations" class="btn btn-primary">Vaccinations</a>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="about-div">
		<div class="facts">
			<div style="position:relative; background-color: #F8F8F8; height: 150px; width: 100%;">	
				<div style="max-width:600px;">
					<p style="font-size:1.38em ;">"The maternal mortality and infant mortality rate in Kenya have been found to be
						<strong>362</strong> per <strong>100, 000 live births </strong> and <strong> 22 </strong> per <strong> 1,000 live births </strong> respectively."</p>
					<p style="font-size:1.2em;">Gitobu. Gichangi & Mwanda, (2018)</p>
				</div> 
			</div>
		</div>
	</div>
</div>
</body>
        
@endsection
    
