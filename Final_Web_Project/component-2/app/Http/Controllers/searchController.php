<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;
class searchController extends Controller
{
    
    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            // where
            $books = Book::where('author', 'LIKE',"%$search%")->orWhere('title', 'LIKE',"%$search%")->get();
        }else{
            $books =Book::all();
        }

        return view('books.index', compact('books'));
    
    }
    public function gamesearch(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            // where
            $books = Game::where('author', 'LIKE',"%$search%")->orWhere('title', 'LIKE',"%$search%")->get();
        }else{
            $books =Game::all();
        }

        return view('games.index', compact('books'));
    
    }
    public function cdsearch(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            // where
            $books = CD::where('author', 'LIKE',"%$search%")->orWhere('title', 'LIKE',"%$search%")->get();
        }else{
            $books =CD::all();
        }

        return view('cds.index', compact('books'));
    
    }
}
