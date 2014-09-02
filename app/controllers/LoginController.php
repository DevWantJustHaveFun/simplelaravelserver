<?php

class LoginController extends \BaseController  {

    public function index()
    {
		// l'authentification est transmise dans les headers de la requete http et gerer en amont par le routage de laravel
		// si on arrive la c'est que le login est ok
		// j'ai honte de pas gerer d'erreur ou de validation
		// pire la requete est passée en GET... 
        return "AuthOK";
    }
}
