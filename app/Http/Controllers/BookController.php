<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    public function index()
    {
    $books = Book::with('genres')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->save();
        
        $selectedGenres = $request->input('genres');
        $book->genres()->attach($selectedGenres);

        return redirect()->route('books.index');
    }
}
