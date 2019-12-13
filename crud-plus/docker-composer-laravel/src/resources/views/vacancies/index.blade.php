@extends('layout')

@section('title', 'Jobs')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company</th>
      <th scope="col">Address</th>
      <th scope="col">Office</th>
      <th scope="col">Linkedin</th>
      <th scope="col">Actions</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    @foreach($jobs as $job)
    <tr>
      <th scope="row">{{$job->id}}</th>
      <td>{{$job->name_company}}</td>
      <td>{{$job->address}}</td>
      <td>{{$job->office}}</td>
      <td>{{$job->linkedin}}</td>
      <td><a href="{{ route('vacancies.edit', $job->id) }}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="{{ route('vacancies.destroy', $job->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

<a href="{{ route('vacancies.create') }}" class="btn btn-primary" role="button">Add vacancy</a>
@endsection