<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\rating;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    public function index(){
        $data = Book::all();
        $data1 = Book::where('idBook','=','2')->first();
        $temp1= new Category;
        $temp= new Author;
        $featureArrayBook=Book::orderBy('Rate','desc')->limit(4)->get();
        $allcategory=Category::all();
        $threenewstbook = Book::orderBy('created_at','desc')->limit(3)->get();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return
        
        return view('template.index')->with(compact('data'))->with(compact('data1'))
        ->with(compact('allcategory'))->with(compact('temp1'))->with(compact('temp'))
        ->with(compact('threenewstbook')) ->with(compact('featureArrayBook')) ->with(compact('top3Author'));
    }
    public function contactus(){
        $category= new Category;
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        return view ('email')->with(compact('category'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }


    public function r404error(){
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        return view ('template.404error')->with(compact('allcategory')) ->with(compact('top3Author'));
    }
    public function aboutus(){
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        $category= new Category;
        return view ('template.aboutus')->with(compact('category'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }
    public function authors(){
        $category= new Category;
        $allcategory=Category::all();
        $temp1= new Author;
        $allAuthor=Author::paginate(2);
        $bookOfAuthor =new Book;
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        $temp=$bookOfAuthor->where("idAuthor","=",1)->get();


        return view('template.authors')->with(compact('allAuthor'))->with(compact('bookOfAuthor'))->with(compact('category'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }
    public function authordetail(){
        $temp= new Author;
        $book=new Book;
        $temp1= new Category;
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        $allcategory=$temp1->all();
        //return

        return view ('template.authordetail')->with(compact('temp'))->with(compact('book'))->with(compact('temp1'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }
    public function book_detail(){
        $temp= new Author;
        $book=new Book;
        $temp1= new Category;
        $allcategory=$temp1->all(); //
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        $review=rating::all();
        $bookData=$book->all();
        //return

        return view ('template.book_detail')->with(compact('review'))->with(compact('temp'))->with(compact('book'))->with(compact('temp1'))->with(compact('bookData'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }
    public function category(){
        $temp= new Author;
        $book=new Book;
        $temp1= new Category;
        $allcategory=$temp1->all();
        $allBook=Book::paginate(2);
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        return view ('template.category_book')->with(compact('allBook'))->with(compact('temp'))->with(compact('book'))->with(compact('temp1'))->with(compact('allcategory')) ->with(compact('top3Author'));


    }
    public function cart(){
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        $category= new Category;
                //return

        return view ('template.cart')->with(compact('category'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }
    public function category_book(){
        return view ('template.category_book');
    }
    public function handleCart(){
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        $category= new Category;
                //return

        return view ('template.handleCart')->with(compact('category'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }
    public function new_book(){
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        return view ('template.new_book') ->with(compact('top3Author'));
    }

    public function update(Request $request,$id)
    {
        // //xu ly va upload anh
        $rate = new rating;
        $rate->where('id',5)->update([
            'idBook'=>$request->idBook,
            'rate' => $request->star,
            'comment'=>$request->comment,


        ]);
        return redirect()->route('template.index');
    }
    //KHI NAO MA USER RATE LAN DAU THI VAO STORE BANG LENH FINDORFAIL
       public function store(Request $request)
    {
        $rate = new rating;
        $rate->idBook=$request->idBook;
        $rate->rate=$request->star;
        $rate->comment=$request->comment;
        $rate->save();
        return redirect()->back();
    }
    //getAUth
    public function getAuth(){
        $role=Auth::user()->role;
        if($role=='1'){
            return view('book');
        }
        else{
            return redirect()->route('template.index');
        }
    }
}
