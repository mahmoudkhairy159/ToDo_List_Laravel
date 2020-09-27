@extends("layouts.app")
@section("title","Update todo")
@section("content")
<h1>Update todo</h1>
<form action="{{  route('todo.store')}}" method="post">
    <div class="form-group">
        @csrf
      <label>Text</label>
      <input type="text" name="text"class="form-control" value="{{ $todo->text }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Due</label>
        <input type="date" name="due" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{  $todo->due}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Body</label>
        <textarea class="form-control" name="body"id="exampleFormControlTextarea1"  placeholder="{{ $todo->body }}"  value="old({{$todo->body }})" rows="3"></textarea>
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
