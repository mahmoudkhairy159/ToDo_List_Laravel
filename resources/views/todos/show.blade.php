@extends('layouts.app')
@section('title')
{{ $todo->text }}
@endsection

@section('content')
<a href="/" class="btn btn-default border-2 border-info bg-danger p-2  float-right"> Go back</a>
<div class="card-header" id="headingOne">
    <h2 class="  text-heading mb-2 border-bottom-2">
       {{ $todo->text}}
    </h2>
    <p> {{ $todo->body}}</p>
    Due: <span class="bg-light"> {{$todo->due  }}</span>
  </div>

@endsection
