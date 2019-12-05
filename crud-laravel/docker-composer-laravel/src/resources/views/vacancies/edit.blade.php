@extends('layout')

@section('title', 'Edit Vacancy')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Vacancy
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

    <form method="post" action="{{ route('vacancies.update', $vacancy->id) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="name_company">Name Company:</label>
        <input type="text" class="form-control" id="name_company" name="name_company" value="{{ $vacancy->name_company }}" />
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $vacancy->address }}" />
      </div>

      <div class="form-group">
        <label for="office">Office:</label>
        <input type="text" class="form-control" id="office" name="office" value="{{ $vacancy->office }}" />
      </div>

      <div class="form-group">
        <label for="linkedin">Linkedin:</label>
        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $vacancy->linkedin }}" />
      </div>

      <button type="submit" class="btn btn-primary">Update Vacancy</button>
    
    </form>
  </div>
</div>
@endsection