@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
			<div class="form-group">
				<strong>Id  : </strong>
				{{ $etudiant->id}}

			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Nom :</strong>
				{{$etudiant->nom}}
			</div>
	</div>
    <div class="row">
			<div class="form-group">
				<strong>Nom :</strong>
				{{$etudiant->prenom}}
			</div>
	</div>

	

	<div class="row">
         <a href="{{ route('home') }}" class="btn btn-primary" >Retour Liste etudiants</a>
	</div>
</div>



@endsection