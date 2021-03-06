@extends('layouts.app')


@section('content')
    
<h1 class="text-center">Edit  Todos</h1>


<form action="/todos/{{ $todo->id }}/update-todos" method="POST">
 
@csrf

<div class="row justify-content-center">
<div class="col-md-8">
<div class="card card-default">
    <div class="card-header"> Edit todo</div>
    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif


        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}">
        </div>

       <div class="form-group my-3">
            <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control">{{ $todo->description }} </textarea>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Update  Todo </button>  
        </div>

    </div>
</div>
</div>
</div>
   

   

<form

@endsection