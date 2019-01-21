@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('etudiant.titremodification') }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                                {{session('status')}}
                        </div>
                    @endif
                    @include('etudiant._form')
                    
                    
                </div>
            </div>

            <div class="row">
                        <a href="{{ route('home') }}" class="btn btn-primary" >Retour Liste etudiants</a>
                    </div>
        </div>
    </div>
</div>
@endsection
