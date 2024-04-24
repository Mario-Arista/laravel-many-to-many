@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard di amministrazione') }}</div>

                <div class="card-body">

                    <h2>Ciao {{ Auth::user()->name }}</h2>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __("Sei dentro, ce l'hai fatta!") }}
                    
                </div>


            </div>

            <button class="btn btn-danger mt-5" >
                <a class="text-decoration-none text-white text-capitalize" href="{{route('admin.projects.index')}}"">{{__('Vedi i progetti caricati')}}</a>
                
            </button>

            <button class="btn btn-danger mt-5" >
                <a class="text-decoration-none text-white text-capitalize" href="{{route('admin.types.index')}}">{{__('Modifica Tipologie Progetti')}}</a>
                
            </button>

        </div>
    </div>
</div>
@endsection
