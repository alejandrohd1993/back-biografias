<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biography;

class BiographyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Biography::with('occupation')->orderBy('full_name');

        //Filtro por búsqueda general (nombre o biografía)
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                    ->orWhere('biography', 'like', "%{$search}%");
            });
        }

        // Filtro por ocupación (por ID)
        if ($request->has('occupation_id')) {
            $query->where('occupation_id', $request->get('occupation_id'));
        }

        // O por nombre de la ocupación (opcional)
        if ($request->has('occupation_name')) {
            $query->whereHas('occupation', function ($q) use ($request) {
                $q->where('name', $request->get('occupation_name'));
            });
        }

        // Respuesta paginada (útil si hay más de 1000 registros)
        $biographies = $query->paginate(50);

        return response()->json($biographies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $biography = Biography::with('occupation')->findOrFail($id);
        return response()->json($biography);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
