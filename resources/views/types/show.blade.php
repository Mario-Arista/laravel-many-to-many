@extends('layouts.admin')

@section('title')
    Mostra tipologia
@endsection

@section('content')
    <main>

        <div class="container py-5">

            <div class="d-flex align-items-center gap-2 p-3 text-white">
                

                <div>
                    <div class="p-1">
                        <h1>
                            <strong>Nome tipogia: </strong>{{$type->name}}
                        </h1>
                        
                    </div>
                </div>


            </div>
        </div>

        <div class="container">
            <div class="d-flex justify-content-center align-items-center gap-3">
                <button class="btn btn-danger mt-5 p-3">
                    <a class="text-decoration-none text-white text-uppercase" href="{{route('admin.types.edit', $type->id)}}">{{__('Modifica tipologia')}}</a>
                </button>
                <button type="button" class="btn btn-danger mt-5 text-uppercase p-3"  data-bs-toggle="modal" data-bs-target="#deleteModal">
                    {{__('Elimina tipologia')}}
                </button>
            </div>


        </div>

        <!-- MODALE BOOTSTRAP -->

        <div class="modal fade bg-dark" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina la tipologia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare questa tipologia? 
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary p-2 fw-bold p-3 border border-0 rounded-0" data-bs-dismiss="modal">ANNULLA</button>
                    <form action="{{route('admin.types.destroy', $type->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
            
                        <button class="btn btn-danger text text-white p-2 fw-bold p-3 border border-0">ELIMINA</button>
                    </form>

                </div>

                
            </div>
        </div>

    </main>
@endsection