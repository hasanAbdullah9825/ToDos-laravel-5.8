@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card card-default">
        

            <div class="card-header">
                <h1 class="text-center" >Edit Todos</h1>
            </div>
        <form action="/todos/{{$todo->id}}/update-todo" method="POST">
    @csrf
            <div class="card-body">

            @if($errors->any())
           <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <div class="list-group-item">
                    {{$error}}
                </div>
                    
                @endforeach
            </ul>
           </div>
                
            @endif
                <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$todo->name}}">
                </div>
                <div class="form-group">
                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description"> {{$todo->description}}</textarea>

                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success " type="submit" >
                        Update
                    </button>
                </div>
    
            </div>
        </form>
        </div>
    
</div>





    
@endsection