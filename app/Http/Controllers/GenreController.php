<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $genre = new Genre();
        $genre->name = $request->input('name');
        $genre->save();

        return redirect()->route('genres.index');
    }

    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }
}