<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Book;   
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin', compact('user'));
    }



    public function user_info($id){
        $user = User::find($id);
        return view('user', compact('user'));
    }

    public function update($id){
        $user = User::find($id);
        return view('adminupdateuser', compact('user'));
    }

    public function actions(){
        $user = User::all();
        return view('usersactions', compact('user'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function edit(Request $request, $id){
        $user = User::find($id);
        $user->admin = $request->admin;
        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
        ]);
        $user->save();
        return redirect('admin/actions');
    }

    public function book(){
        $books = DB::table('book')->get();
        return view('book', compact('books'));
    }

    public function book_create(){
        return view('createnewbook');
    }

    public function book_actions(){
        $books = DB::table('book')->get();
        return view('bookactions', compact('books'));
    }
    public function book_delete($id){
        $book =Book::find($id);
        $book->delete();
        return back();
    }
    public function create_new_book(Request $request){
        $book = new Book;
        $destinationPath = 'images/books'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = $destinationPath."/".rand(11111,99999).'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName); // 

       
        $book->name = $request->name;
        $book->isbn = $request->isbn;
        $book->icon = $fileName;
        $book->category = $request->category;
        $book->author = $request->author;
        $book->language = $request->language;
        $book->description = $request->description;
        
        $book->save();
        return redirect('admin/books');
    }

    public function update_book($id){
        $book = Book::find($id);
        return view('booksupdate', compact('book'));
    }

    public function edit_book(Request $request, $id){
        $book = Book::find($id);
        // $file = $request->image;
        $destinationPath = 'images/books'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = $destinationPath."/".rand(11111,99999).'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName);

        $book->update([
            'name' => $request->name,
            'isbn' => $request->isbn,
            'author' => $request->author,
            'icon' => $fileName,
            'language' => $request->language,
            'description' => $request->description
        ]);
        $book->save();
        return redirect('admin/books/actions');
    }
}
