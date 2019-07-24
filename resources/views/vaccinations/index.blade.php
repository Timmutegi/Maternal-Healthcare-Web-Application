@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <header>
        <div class="banner">
            <br>
            <h1 Class="whitetitle">MamaFair</h1>
        </div>
    </header>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('record-deleted'))
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>The record has been deleted</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row mb-2">
        <div class="col-md-6 offset-md-1">
            <button type="button" class="btn btn-primary" onclick="window.location='{{ route('parent')}}'">
                {{ __('Create Vaccination Record') }}
            </button>
        </div>
    </div>
    <center>
    @if(count($vaccinations) > 0)
            <table id="table" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Parent's Full Name</th>
                        <th>Child's Full Name</th>
                        <th>Gender</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>                    
                    @foreach ($vaccinations as $vaccination)
                    <tr>
                        <td>{{$loop->iteration}}</td>                
                        <td>{{$vaccination->child->parents->firstname}} {{$vaccination->child->parents->lastname}} {{$vaccination->child->parents->surname}}</td>
                        <td>{{$vaccination->child->firstname}} {{$vaccination->child->lastname}} {{$vaccination->child->surname}}</td>
                        <td>{{$vaccination->child->gender}}</td>
                        <td>
                        <a style="margin:5px;" class='btn btn-primary' href= "{{route('edit', ['id' => $vaccination->id,'child_id'=>$vaccination->child->id, 'parent_id' => $vaccination->child->parent_id])}}">EDIT</a>
                        <a style="margin:5px;" class='btn btn-primary' href= "{{route('view', ['id' => $vaccination->id, 'child_id'=>$vaccination->child->id, 'parent_id' => $vaccination->child->parent_id])}}">VIEW</a> 
                        <a style="margin:5px;" class='btn btn-primary' href= "{{route('delete', ['id' => $vaccination->id])}}">DEL</a>                         
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> 
            <br>
            <div class="form-group row mb-2">
                <div class="col-md-6 offset-md-1">
                    {{ $vaccinations->links() }}
                </div>
            </div>            
                          
    </center>   
    @else
        <p>No vaccinations found</p>
    @endif
</div>
</body>
@endsection()
