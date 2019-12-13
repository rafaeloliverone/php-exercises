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

<input class="form-control form-control-lg md-3" name="search" type="text" placeholder="">

<table class="table mt-4">
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


<div class="d-flex justify-content-around">
  
  <a href="{{ route('vacancies.create') }}" class="btn btn-primary mr-4" role="button">Add vacancy</a>
  
  {{ $jobs->links() }}


  <form action="{{ route('vacancies.index') }}">
    <div class="form-group">
      <label for="exampleFormControlSelect1"></label>
      <select class="form-control" name="per_page" id="exampleFormControlSelect1" onchange="this.form.submit()">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
      </select>
    </div>
  </form>

</div>

@endsection