@extends('layouts.main')

@section('content')
<form  action="{{ route('store') }}" method="post">
    @csrf
    <h3 for="exampleFormControlTextarea1">Add a story</h3>
    <textarea class="form-control mb-3 w-50" id="exampleFormControlTextarea1" rows="3" name="story"></textarea>
    <input style="width: 100px;" type="submit" class="btn btn-primary w-10" value="Add">    

</form>
@endsection
