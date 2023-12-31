@extends('layouts.master')

@section('content')
<form action="{{ url('admin/sub_category') }}" method="POST">
@csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text"  name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Category_id</label>
    <select name="category_id" id="" class="form-control">
      @forelse ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
          
      @empty
          
      @endforelse
    </select>
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