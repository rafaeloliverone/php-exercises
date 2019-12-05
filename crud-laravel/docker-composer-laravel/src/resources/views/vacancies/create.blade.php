@extends('layout')

@section('title', 'Create Vacancy')

@section('content')
<div class="card">
  <div class="card-header">
    Add Vacancy
  </div>
  <div class="card-body">
    
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form method="post" action="{{ route('vacancies.store') }}">
      <div class="form-group">
        @csrf
        <label for="name_company">Name Company:</label>
        <input type="text" class="form-control" id="name_company" name="name_company" />
      </div>
      
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" />
      </div>

      <div class="form-group">
        <label for="office">Office:</label>
        <input type="text" class="form-control" id="office" name="office" />
      </div>


      <div class="form-group">
        <label for="linkedin">Linkedin:</label>
        <input type="text" class="form-control" id="linkedin" name="linkedin" />
      </div>

      <button type="submit" class="btn btn-primary">Create Vacancy</button>
    </form>
  </div>
</div>
@endsection