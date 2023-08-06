@extends('layouts.master')

@section('content')
<form action="{{ url('admin/item') }}" method="POST">
  @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Brand</label>
    <input type="text" name="brand" class="form-control" id="exampleFormControlInput1" placeholder="brand@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">company</label>
    <input type="text" name="company" class="form-control" id="exampleFormControlInput1" placeholder="company@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">subcategory</label>
    <input type="text" name="subcategory" class="form-control" id="exampleFormControlInput1" placeholder="subcategory@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-success">save</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>
</form>

@endsection