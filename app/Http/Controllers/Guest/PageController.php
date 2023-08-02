<?php

namespace App\Http\Controllers\Guest;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function books() {
        //chiedere i dati al database

        //il Controller chiama il Model
        $collBooks = Book::all();//SELECT * FROM books

        //il Controller chiama la View passando dei dati
        return view('books', compact('collBooks'));

        // return view('books', [
        //     'collBooks' => $books,
        // ]);
    }
}
