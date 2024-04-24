@extends('layouts.admin')

@section('title')
    Cambia Progetto
@endsection

@section('content')

    <div class="container mt-5">
        <div class="col-3">
            <img class="img-gallery img-fluid" src="{{$project->image}}" alt="{{$project->title}}">
            <div class="text-white"><strong>Nome Progetto:</strong>{{$project->name}}</div>
        </div>
    </div>


    <div class="container py-5">
        <h1>Cambia progetto</h1>

        <form action="{{route('admin.projects.update', $project->id)}}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome progetto:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $project->name  }}">
                @error('name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Tipologia:</label>
                <select name="type_id" id="type_id">
                  <option value=""></option>
                  @foreach ($types as $type)
                    <option value="{{$type->id}}" {{ $type->id == old('type_id', $project->type ? $project->type->id : '') ? 'selected' : '' }}>{{ $type->name }}</option>
                  @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="link_github" class="form-label">Link progetto:</label>
                <input type="text" class="form-control @error('link_github') is-invalid @enderror" id="link_github" name="link_github" value="{{ old('link_github') ?? $project->link_github }}">
                @error('link_github')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->name}}" class="mb-2" style="max-height: 100px;">
                <label for="image" class="form-label">Immagine di copertina</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old('description') ?? $project->description  }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-danger mt-5 mb-5 text-uppercase">Modifica</button>

        </form>

    </div>
@endsection