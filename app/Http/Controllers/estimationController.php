<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimationController extends Controller
{
    const type_projet = [
        'site_web_vitrine' => ['temps' => 20, 'cout' => 1000],
        'application_web' => ['temps' => 40, 'cout' => 2000],
        'ecommerce' => ['temps' => 60, 'cout' => 3000],
    ];

    const TECHNOLOGIES = [
        'PHP' => ['temps' => 15, 'cout' => 750],
        'Python' => ['temps' => 20, 'cout' => 1000],
        'Java' => ['temps' => 30, 'cout' => 1500],
        'HTML/CSS/JavaScript' => ['temps' => 10, 'cout' => 500],
    ];

    const STYLE_DESIGN = [
        'simple' => ['temps' => 10, 'cout' => 500],
        'moderne' => ['temps' => 15, 'cout' => 750],
        'classique' => ['temps' => 12, 'cout' => 600],
    ];

    public function showEstimation()
    {
        return view('estimation');
    }

    public function calculateEstimation(Request $request)
    {
        $request->validate([
            'type_projet' => 'required|string|in:site_web_vitrine,application_web,ecommerce',
            'description_projet' => 'required|string|max:1000',
            'technologies' => 'required|array',
            'technologies.*' => 'string|in:PHP,Python,Java,HTML/CSS/JavaScript',
            'style_design' => 'required|string|in:simple,moderne,classique',
            'nombre_pages' => 'required|integer|min:1',
        ]);

        $typeProjet = $request->input('type_projet');
        $descriptionProjet = $request->input('description_projet');
        $technologies = $request->input('technologies');
        $styleDesign = $request->input('style_design');
        $nombrePages = $request->input('nombre_pages');

        $temps = 0;
        $cout = 0;

        $temps += self::TYPE_PROJET[$typeProjet]['temps'];
        $cout += self::TYPE_PROJET[$typeProjet]['cout'];

        $temps += strlen($descriptionProjet) / 10;
        $cout += strlen($descriptionProjet) / 2;

        foreach ($technologies as $technology) {
            if (isset(self::TECHNOLOGIES[$technology])) {
                $temps += self::TECHNOLOGIES[$technology]['temps'];
                $cout += self::TECHNOLOGIES[$technology]['cout'];
            }
        }

        if (isset(self::STYLE_DESIGN[$styleDesign])) {
            $temps += self::STYLE_DESIGN[$styleDesign]['temps'];
            $cout += self::STYLE_DESIGN[$styleDesign]['cout'];
        }

        $temps += $nombrePages * 3;
        $cout += $nombrePages * 150;

        return response()->json([
            'temps' => $temps,
            'cout' => $cout
        ]);
    }
}
