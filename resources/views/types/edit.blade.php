@extends('layouts.admin')

@section('title')
    Cambia Tipologia
@endsection

@section('content')

    <div class="container mt-5">
        <div class="col-3">
            <div class="text-white">
              <h1>
                <strong class="text-danger">Nome tipologia: </strong>{{$type->name}}
              </h1>
              
            </div>
        </div>
    </div>


    <div class="container py-5">

        <div class="col-lg-12 col-md-12 mb-4">

          <form action="{{route('admin.types.update', $type->id)}}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                  <label for="name" class="form-label">Nome nuovo da assegnare:</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $type->name  }}">
                  @error('name')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>

              <button type="submit" class="btn btn-danger mt-5 mb-5">Cambia</button>

          </form>
 
      </div>


    </div>
@endsection