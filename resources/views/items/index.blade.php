@extends ('layouts.master')

@section('content')

<div class="card-header"><a href="{{ url('admin/item/create')}}"><button class="btn btn-primary">create</button></a></div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">brand</th>
        <th scope="col">company</th>
        <th scope="col">subcategory</th>
        <th scope="col">description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($item as $value)
      <tr>
        <th scope="row">{{ $value->id }}</th>
        <td>{{ $value->name}}</td>
        <td>{{$value->brand}}</td>
        <td>{{$value->company}}</td>
        <td>{{$value->subcategory}}</td>
        <td>{{ $value->description}}</td>
      
        <th>
          <a href="{{ url('admin/item/1/edit')}}"><button class="btn btn-warning">edit</button></a>
          <a href="{{ url('admin/item/1')}}"><button class="btn btn-secondary">show</button></a>
          
        </th>
      </tr>
      @endforeach
    
    </tbody>
  </table>
@endsection