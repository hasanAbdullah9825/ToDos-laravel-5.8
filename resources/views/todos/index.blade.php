
     @extends('layouts.app')
     @section('content')
     <h1 class="text-center my-5">Todos page</h1>


     <div class="card card-default">
      <div class="card-header">
          Todo
      </div>
 
      <div class="card-body">
         <ul class="list-group" >
             @foreach($todos as $todo)
             <li class="list-group-item ">
             {{$todo->name}}
             @if (!$todo->completed)
             <a href="/todos/{{$todo->id}}/completed" class="btn btn-warning float-right btn-xs ml-2"> Completed  </a>
             @endif
           
             <a href="/todos/{{$todo->id}}" class="btn btn-primary float-right btn-xs">
                 View
             </a>
             
             </li>
             @endforeach
             </ul>
 
      </div>
 
     </div>
    
 </div>
 



     @endsection

     

     
