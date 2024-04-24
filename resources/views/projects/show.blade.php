@extends('layouts.admin')

@section('title')
    {{$project->name}}
@endsection

@section('content')
    <main>

        <div class="container py-5">

            <div class="d-flex align-items-center gap-2 p-3 text-white">
            
                <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->name}}" style="max-height: 300px;">
                

                <div>
                    <span class="{{ $project->type?->name ? 'bg-danger' : '' }} p-1">{{ $project->type?->name }}</span>
                    <div class="p-1"><strong>Nome: </strong>{{$project->name}}</div>
                    <div class="p-1"><strong>Descrizione: </strong>{{$project->description}}</div>
                </div>


            </div>
        </div>

        <div class="container py-5">
            <div class="d-flex justify-content-center align-items-center gap-3">
                <button class="btn btn-danger mt-5 p-3">
                    <a class="text-decoration-none text-white text-uppercase" href="{{route('admin.projects.edit', $project->id)}}">{{__('Modifica progetto')}}</a>
                </button>
                <button type="button" class="btn btn-danger mt-5 text-uppercase p-3"  data-bs-toggle="modal" data-bs-target="#deleteModal">
                    {{__('Elimina progetto')}}
                </button>
            </div>


        </div>

        <!-- MODALE BOOTSTRAP -->

        <div class="modal fade bg-dark" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina il progetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare il progetto {{$project->name}}? 
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary p-2 fw-bold p-3 border border-0 rounded-0" data-bs-dismiss="modal">ANNULLA</button>
                    <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
            
                        <button class="btn btn-danger text text-white p-2 fw-bold p-3 border border-0">ELIMINA</button>
                    </form>

                </div>

                
            </div>
        </div>

    </main>
@endsection