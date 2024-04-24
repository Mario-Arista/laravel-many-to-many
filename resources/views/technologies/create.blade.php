@extends('layouts.admin')

@section('title')
    Creare nuova tecnologia
@endsection

@section('content')
<div class="container py-5">
    <h1>Crea nuova Tecnologia</h1>
    <div class="row mt-5">

        <div class="col-lg-12 col-md-12 mb-4">

            <form action="{{route('admin.types.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome nuova tecnologia</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-danger mt-5 mb-5">Salva</button>

            </form>
   
        </div>
        
    </div>
</div>
@endsection