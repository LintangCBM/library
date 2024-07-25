<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function borrow(Book $book)
    {
        Borrow::create([
            'book_id' => $book->id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('books.show', $book)->with('success', 'Book borrowed successfully!');
    }

    public function return(Book $book)
    {
        $borrow = Borrow::where('book_id', $book->id)->where('user_id', Auth::id())->first();
        if ($borrow) {
            $borrow->update(['returned_at' => now()]);
        }

        return redirect()->route('books.show', $book)->with('success', 'Book returned successfully!');
    }
}
