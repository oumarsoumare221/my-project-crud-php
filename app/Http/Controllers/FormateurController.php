<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Models\Formateur;

class FormateurController extends Controller
{
    //
    public function index()
    {
        $formateurs = Formateur::all();
        return view('index', compact('formateurs'));
    }

    public function showForm()
    {
        return view('ajouter');
    }

    public function ajouterFormateur(Request $request)
    {
        $formateur = new Formateur();
        $formateur->nom = $request->input('nom');
        $formateur->prenom = $request->input('prenom');
        $formateur->filiere = $request->input('filiere');
        $formateur->matieres = $request->input('matieres');
        $formateur->save();

        Session::flash('success', 'Enregistrement réussi avec succès.');

        return redirect('/formateurs')->with('success', 'Le formateur a été ajouté avec succès.');
    }
    public function modifierFormateur($id)
    {
        $formateur = Formateur::find($id);
        return view('modifier', compact('formateur'));
    }

    public function updateFormateur(Request $request, $id)
    {
        // Valider les champs du formulaire (vous pouvez ajouter une validation similaire à celle que nous avons utilisée pour l'ajout)

        // Mettre à jour les informations du formateur
        $formateur = Formateur::find($id);
        $formateur->nom = $request->input('nom');
        $formateur->prenom = $request->input('prenom');
        $formateur->filiere = $request->input('filiere');
        $formateur->matieres = $request->input('matieres');
        $formateur->save();

        return redirect('/formateurs')->with('success', 'Le formateur a été mis à jour avec succès.');
    }
    public function supprimerFormateur($id)
{
    // Trouver le formateur par son ID
    $formateur = Formateur::find($id);

    // Vérifier si le formateur existe
    if (!$formateur) {
        return redirect('/formateurs')->with('error', 'Formateur non trouvé.');
    }

    // Supprimer le formateur
    $formateur->delete();

    return redirect('/formateurs')->with('success', 'Le formateur a été supprimé avec succès.');
}
}
