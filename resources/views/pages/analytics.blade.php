@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <header>
            <div class="banner">
                <br>
                <h1 Class="whitetitle">Analytics</h1>
            </div>
        </header><br>
        <div class="chart">
            <div class="col-md-6">
            {!! $chart->container() !!}
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
     {!! $chart->script() !!}
</body>
@endsection()