<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(Request $request){
        if($request-> has('search')){
            return view('index',[
                'pagetitle' => 'Home',
                'maintitle' => 'Writers in My Library',
                'writers' => Writer::where('nama', 'like', '%'.$request->search.'%')->paginate(5),
                'books' => Book::whereRelation('writer', 'nama', 'like', '%'.$request->search.'%')->get()
                
            ]);
        }else{

        
        return view('index',[
            'pagetitle' => 'Home',
            'maintitle' => 'Writers in My Library',
            'writers' => Writer::paginate(5),
            'books' => Book::all()
            
        ]);
        }
    }
    public function show(Writer $writer){
        // menggunakan route model binding
        $writer->load('books');
        // tanpa route model binding
        // Writer::find(1)->with('books')->get();
        
        return view('show',[
            'pagetitle' => 'Writer',
            'maintitle' => 'The Writer',
            'writer' => $writer
    
        ]);
    }
    public function about(){
        return view('about',[
            'pagetitle' => 'About',
            'maintitle' => 'About page'
        ]);
    }
    public function contact(){
        return view('contact',[
            'pagetitle' => 'Contact',
            'maintitle' => 'Contact page'
        ]);
    }
    
}
