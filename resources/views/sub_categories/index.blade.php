@extends ('layouts.master')

@section('content')

<div class="card-header"><a href="{{ url('admin/sub_category/create')}}"><button class="btn btn-primary">create</button></a></div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">category_id</th>
        <th scope="col">description</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">button</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sub_category as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->name}}</td>
        <td>{{$value->category_id}}</td>
        <td>{{$value->description}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
        <th>
          <a href="{{ url('admin/sub_category/'.$value->id.'/edit')}}"><button class="btn btn-warning">edit</button></a>
          <a href="{{ url('admin/sub_category/'.$value->id )}}"><button class="btn btn-secondary">show</button></a>

          <form action="{{ url('admin/sub_category/'.$value->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="sumbit" class="btn btn-danger">Delete</button>


          </form>
          
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$sub_category}}

@endsection