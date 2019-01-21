<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    
    //permet au model d'accepter de ne pas se planter lors d'un create par exemple et de prendre que les données qui l'interesse
    //Etudiant::create($request->all()
    //Ou on lui envoi toutes données du request genre le token qui ne fait pas partie du model

    protected $guarded = array();

    //indique que la table mappé par la classe Etudiant n'a pas de champs created_at et updated_at
    public $timestamps = false;
}
