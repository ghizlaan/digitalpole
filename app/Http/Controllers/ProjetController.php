<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\projet;
use App\Models\estimation; // Ajoutez cette ligne


class ProjetController extends Controller
{
    public function show()
    {
        return view('projet');
    }

    public function store(Request $request)
    {
        // Validation des données reçues
        $request->validate([
            'nom' => 'required|string',
            'type_projet' => 'required|string',
            'description' => 'required|array',
            'technologies' => 'nullable|string',
            'design_preference' => 'required|string',
            'pages' => 'required|array',
            'additional_pages' => 'required|integer',
            'nomc' => 'required|string',
            'prenomc' => 'required|string',
            'emailc' => 'required|email',
            'phonec' => 'required|string',
        ]);

        // Création du client
        $client = Client::create([
            'nomc' => $request->nomc,
            'prenomc' => $request->prenomc,
            'emailc' => $request->emailc,
            'phonec' => $request->phonec,
        ]);

        // Création du projet en le liant au client
        $project= Projet::create([
            'nom' => $request->nom,
            'type_projet' => $request->type_projet,
            'description' =>json_encode($request->description) , // Convertir en JSON
            'technologies' => $request->technologies,
            'design_preference' => $request->design_preference,
            'pages' => json_encode($request->pages), // Convertir en JSON
            'additional_pages' => $request->additional_pages,
            'client_id' => $client->id, // Lier le projet au client
        ]);
            


      // Calcul des estimations
    $temps = $this->calculateTemps(
        $request->type_projet,
        $request->description,
        $request->technologies ?? [],
        $request->design_preference,
        $request->pages,
        $request->additional_pages
    );
    $cout = $this->calculateCout(
        $request->type_projet,
        $request->description,
        $request->technologies ?? [],
        $request->design_preference,
        $request->pages,
        $request->additional_pages
    );
    if (is_null($temps)) {
        return redirect()->back()->withErrors(['error' => 'Le calcul du temps a échoué. Veuillez vérifier les données saisies.']);
    }


        // Enregistrez les résultats de l'estimation dans la base de données
        estimation::updateOrCreate(
            ['id_client' => $client->id, 'id_projet' => $project->id],
            ['cout' => $cout, 'délais' => $temps]
        );
    
        // Redirigez vers la vue estimation avec les nouvelles valeurs
        return view('estimation', compact('project', 'temps', 'cout'));
    }
    


private function calculateTemps($typeProjet, $descriptionProjet, $technologies, $styleDesign ,$pages, $nombrePages)
{
    $temps = 0;


        // Calculer le temps en fonction du type de projet
        switch ($typeProjet) {
            case "Site Web Vitrine":
                $temps += 95;
                break;
            case "Application Web":
                $temps += 300;
                break;
            case "E-commerce":
                $temps += 410;
                break;
        }

        // Calculer le temps en fonction de la description du projet
          // Convertir $technologies en tableau si ce n'est pas déjà le cas
            $descriptionArray = is_array($descriptionProjet) ? $descriptionProjet : explode(',', $descriptionProjet);
          // Calculer le temps en fonction des technologies
            $temps += in_array("Français", $descriptionArray) ? 40 : 0;
            $temps += in_array("Anglais", $descriptionArray) ? 40 : 0;
            $temps += in_array("Espagnol", $descriptionArray) ? 40 : 0;
            $temps += in_array("Autre", $descriptionArray) ? 40 : 0;

        // Convertir $technologies en tableau si ce n'est pas déjà le cas
        $technologiesArray = is_array($technologies) ? $technologies : explode(',', $technologies);
    // Calculer le temps en fonction des technologies
        $temps += in_array("PHP", $technologiesArray) ? 80 : 0;
        $temps += in_array("Python", $technologiesArray) ? 80 : 0;
        $temps += in_array("Java", $technologiesArray) ? 100 : 0;
        $temps += in_array("C / C++", $technologiesArray) ? 700 : 0;

    // Calculer le temps en fonction du style de design
    switch ($styleDesign) {
    case "simple":
        $temps += 20;
        break;
    case "Moderne":
        $temps += 25;
        break;
    case "Classique":
        $temps += 40;
        break;
    }

     // Ajouter le temps pour les pages spécifiques
        if (in_array($pages, ["Accueil", "Page éditoriale", "Nos services", "Réalisations", "Actualités", "Événements", "Offres d'emploi", "Contact"])) {
        $temps += 10;
    }

            // Calculer le temps en fonction du nombre de pages
            $temps += intval($nombrePages) * 10;

           // Diviser le temps total par 8
            $temps /= 8;

            return $temps;
}
private function calculateCout($typeProjet, $descriptionProjet, $technologies, $styleDesign ,$pages, $nombrePages)
{
    $cout = 0;

    // Calculer le coût en fonction du type de projet
    switch ($typeProjet) {
        case "Site Web Vitrine":
            $cout += 4750;
            break;
        case "Application Web":
            $cout += 15000;
            break;
        case "E-commerce":
            $cout += 20500;
            break;
    }

    // Calculer le coût en fonction de la description du projet
   // Convertir $technologies en tableau si ce n'est pas déjà le cas
    $descriptionArray = is_array($descriptionProjet) ? $descriptionProjet: explode(',', $descriptionProjet);
   // Calculer le coût en fonction des technologies
    $cout += in_array("Français", $descriptionArray) ? 200 : 0;
    $cout += in_array("Anglais", $descriptionArray) ? 200 : 0;
    $cout += in_array("Espagnol", $descriptionArray) ? 200 : 0;
    $cout += in_array("Autre", $descriptionArray) ? 200 : 0;

    // Convertir $technologies en tableau si ce n'est pas déjà le cas
    $technologiesArray = is_array($technologies) ? $technologies : explode(',', $technologies);
    // Calculer le coût en fonction des technologies
    $cout += in_array("PHP", $technologiesArray) ? 4000 : 0;
    $cout += in_array("Python", $technologiesArray) ? 4000 : 0;
    $cout += in_array("Java", $technologiesArray) ? 5000 : 0;
    $cout += in_array("C / C++", $technologiesArray) ? 100000  : 0;


        // Calculer le coût en fonction du style de design
        switch ($styleDesign) {
            case "simple":
                $cout += 1000;
                break;
            case "Moderne":
                $cout += 1200;
                break;
            case "Classique":
                $cout += 2000;
                break;
        }
  // Ajouter le coût pour les pages spécifiques
if ($pages === "Accueil" || $pages === "Page éditoriale" || $pages === "Nos services" || $pages === "Réalisations" || $pages === "Actualités" || $pages === "Événements" || $pages === "Offres d'emploi" || $pages === "Contact") {
    $cout += 150;
}



          // Calculer le coût en fonction du nombre de pages
          $cout += intval($nombrePages) * 150;

        return $cout;
}


    public function modifier($id)
    {
        $project = Projet::find($id);
        $client = $project->client; // Récupérer les données du client associé au projet
    
        return view('modifier_estimation', compact('project', 'client'));
}
    

public function update(Request $request, $id)
{
    // Validation des données reçues
    $request->validate([
        'nom' => 'required|string',
        'type_projet' => 'required|string',
        'description' => 'required|array',
        'description.*' => 'string',
        'technologies' => 'nullable|array',
        'technologies.*' => 'string',
        'design_preference' => 'required|string',
        'pages' => 'required|array',
        'additional_pages' => 'required|integer',
        'nomc' => 'required|string',
        'prenomc' => 'required|string',
        'emailc' => 'required|email',
        'phonec' => 'required|string',
    ]);


    

    // Mise à jour des informations du client
    $client = Client::create([
        'nomc' => $request->nomc,
        'prenomc' => $request->prenomc,
        'emailc' => $request->emailc,
        'phonec' => $request->phonec,
    ]);
    
     // Mise à jour des champs du projet
    $project->update([
    'nom' => $request->nom,
    'type_projet' => $request->type_projet,
    'description' =>json_encode ($request->description) , // Convertir en JSON
    'technologies' => $request->technologies ? implode(',', $request->technologies) : null,
    'design_preference' => $request->design_preference,
    'pages' => json_encode($request->pages), // Convertir en JSON
    'additional_pages' => $request->additional_pages,
    ]);

    // Recalculez les estimations après modification
    $temps = $this->calculateTemps(
    $request->type_projet,
    $request->description,
    $request->technologies ?? [],
    $request->design_preference,
    $request->pages,
    $request->additional_pages
    );
    $cout = $this->calculateCout(
    $request->type_projet,
    $request->description,
    $request->technologies ?? [],
    $request->design_preference,
    $request->pages,
    $request->additional_pages
    );

    // Redirigez vers la vue estimation avec les nouvelles valeurs
    return view('estimation', compact('project', 'temps', 'cout'));
}
}