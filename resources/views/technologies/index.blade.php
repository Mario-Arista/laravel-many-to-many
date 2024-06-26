@extends('layouts.admin')

@section('title')
    Tecnologie caricate
@endsection

@section('content')
<div class="container py-5">

    <button class="btn btn-danger mt-1 mb-5" >
        <a class="text-decoration-none text-white text-capitalize" href="{{route('admin.types.create')}}">{{__('CREA NUOVA TIPOLOGIA')}}</a>
    </button>

    <h1>Tipologie caricate</h1>

    <div class="row mt-5">

        @foreach ($technologies as $technology)
        <div class="col-lg-3 col-md-3 mb-3 border border-1 border-danger p-5">

            <div class="types d-flex flex-column align-items-center justify-content-between gap-2">
                <div>
                    <Strong class="text-danger">Nome tecnologia:</Strong>
                    {{$technology->name}}
                </div>
                <button class="btn btn-danger" >
                    <a class="text-decoration-none text-white text-uppercase" href="{{route('admin.technologies.show', $technology->id)}}">{{__('Modifica / elimina')}}</a>
                </button>
            </div>
            
        </div>
        @endforeach
    </div>
    

</div>

@endsection