

     @extends('layouts.app')
@section('content')

<h1 class="text-center">
    {{$todo->name}}
</h1>
<div class="row">
    <div class="container">

        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                   {{ $todo->description}}
                   
                </div>
              
            
            </div>
        
        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info  my-2">Edit</a>
        <a href="/todos/{{ $todo->id }}/delete" class="btn btn-info btn-danger  my-2">Delete</a>
        </div>
    </div>
</div>
@endsection
