@extends('layouts.app')
@section('title','Todo List')
@section('content')
<div class="card">
    @if (count($todos)>0)
    @foreach($todos as $todo)
    <div class="card-header" id="headingOne">
        <h3 class="mb-0">
           <a href="{{  route('todo.show', $todo->id  )}}">{{ $todo->text}}</a>
        </h3>
        <span> {{$todo->due  }}</span>
        <div class="btn-group float-right" role="group" aria-label="Basic example">

            <a href="{{  route('todo.edit',$todo->id )}}" class="btn btn-secondary">Update</a>
            <form class="float-right ml-2"
                      action="{{route('todo.destroy', $todo->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                          <button class="btn btn-danger">
                            Delete
                        </button>
                      </form>
         </div>
         </div>



    @endforeach

    @endif
</div>




@endsection


