<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index()
    {
         // Récupérer tous les magazines principaux
         $magazinesPrincipaux ="prinsipale";// Magazine::whereNull('principal_id')->get();

         // Récupérer tous les magazines secondaires
         $magazinesSecondaires ="secandaires";// Magazine::whereNotNull('principal_id')->get();
 
         return view('addMagazines', compact('magazinesPrincipaux', 'magazinesSecondaires'));
    }
}
