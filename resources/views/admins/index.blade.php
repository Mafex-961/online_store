@extends ('layouts.master')

@section('content')

<div class="card-header"><a href="{{ url('admin/admin/create')}}"><button class="btn btn-primary">create</button></a></div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
      </tr>
    </thead>
    <tbody>
      @foreach($admin as $value)
      <tr>
        <th scope="row">{{ $value->id }}</th>
        <td>{{ $value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->password}}</td>
        <th>
          <a href="{{ url('admin/admin/'.$value->id.'/edit')}}"><button class="btn btn-warning">edit</button></a>
          <a href="{{ url('admin/admin/'.$value->id)}}"><button class="btn btn-secondary">show</button></a>

          <form action="{{ url('admin/admin/'.$value->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="sumbit" class="btn btn-danger">Delete</button>


          </form>
          
        </th>
      </tr>
      @endforeach
   
    </tbody>
  </table>
  
@endsection