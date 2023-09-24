@extends('layouts.master')

@section('content')
<form action="{{ url('admin/admin') }}" method="POST">
  @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">email</label>
    <input type="text" name="email" class="form-control" id="exampleFormControlInput1" >
  </div>
  
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">password</label>
    <input type="text" name="password" class="form-control" id="exampleFormControlInput1" >
  </div>
 
  
  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-success">save</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>
</form>

@endsection