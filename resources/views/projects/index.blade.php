@extends('layouts.admin')

@section('title')
    Progetti caricati
@endsection

@section('content')
<div class="container py-5">

    <button class="btn btn-danger mt-1 mb-5" >
        <a class="text-decoration-none text-white text-capitalize" href="{{route('admin.projects.create')}}">{{__('CREA NUOVO PROGETTO')}}</a>
    </button>

    <h1>Progetti caricati</h1>

    <div class="row">

        @foreach ($projects as $project)
        <div class="col-lg-3 col-md-3 mb-3">

            <div class="project d-flex flex-column align-items-center justify-content-between gap-2">
                <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->name}}" style="max-height: 300px;">
                <div>
                    <Strong class="text-danger">Nome:</Strong>
                    {{$project->name}}
                </div>
                <button class="btn btn-danger" >
                    <a class="text-decoration-none text-white text-uppercase" href="{{route('admin.projects.show', $project->id)}}">{{__('Modifica / elimina')}}</a>
                </button>
            </div>
            
        </div>
        @endforeach
    </div>
    

</div>

@endsection