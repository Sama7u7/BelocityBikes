<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
class CategoriaController extends Controller
{
    
    public function index()
    {
        $categorias = Categoria::all();
    
        return view('categorias', compact('categorias'));
    }
public function create()
{
    return view('categoria.crear');
}

    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255|unique:categorias,nombre', // Asegúrate de que el nombre sea único
    ]);

    // Crear la nueva categoría
    Categoria::create([
        'nombre' => $request->nombre,
    ]);

    // Redireccionar de vuelta a la página de categorías con un mensaje de éxito
    return redirect()->route('categorias.index')->with('success', 'Categoría creada correctamente.');
}

public function delete()
{
    return view('categoria.eliminar');
}

public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada correctamente');
    }

}