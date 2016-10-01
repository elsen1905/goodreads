<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Book;
use App\Author;
use Carbon\Carbon;
use Auth;

class PageController extends Controller
{
    public function homepage(){
        $current = Carbon::now(); 
        $lastbook = Book::orderBy('created_at', 'DESC')->take(20)->get();
        $mostread = Book::orderBy('seen', 'DESC')->take(3)->get();
    	return view('main', compact('lastbook', 'current', 'mostread'));
    }

    public function profile($id){
        $user = User::find($id);
    	return view('profile', compact('user'));
    }
    public function show_book($id){
        $book = Book::find($id);
        $book_seen = $book->seen += 1;
        $book->update([
            'seen' => $book_seen
        ]);
        return view('viewbook', compact('book'));
    }
    public function search(Request $request){
        $any = $request->search;
        $post = Book::where('name', 'LIKE', '%'.$request->search.'%')->orWhere('author', 'LIKE', '%'.$request->search.'%')->get();
    	return view('search', compact('post', 'any'));
    }

    public function settings($id){
        $user = User::find($id);
        if(Auth::user()->id == $user->id){
            return view('accountsettings', compact('user'));
        }else{
            return redirect('/profile/'.$id);
        }
    }

    public function user_take(){
        $data=User::all();
        return $data;
    }

    public function profile_update(Request $request, $id){
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'surname' => $request->surname
        ]);
        // $user->save();
        return redirect('profile/'.$id);
    }

    public function upload_picture(Request $request, $id){
        $user = User::find($id);
        $destinationPath = 'images/users'; // upload path
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = $destinationPath."/".rand(11111,99999).'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName); // 
        $user->photo = $fileName;
        $user->save();
        return back();
    }
    public function view_author($id){
        $author = Author::find($id);
        return view('viewauthor', compact('author'));
    }
}
