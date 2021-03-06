<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\rating;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\RelationNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    public function index(){
        $data = Book::all();
        $data1 = Book::orderBy('rate','desc')->limit(3)->get();
        $bookList = Book::orderBy('rate','desc')->limit(5)->get();

        $temp1= new Category;
        $temp= new Author;
        $featureArrayBook=Book::orderBy('Rate','desc')->limit(4)->get();
        $allcategory=Category::all();
        $threenewstbook = Book::orderBy('created_at','desc')->limit(3)->get();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        return view('template.index')->with(compact('data'))->with(compact('data1'))
        ->with(compact('allcategory'))->with(compact('temp1'))->with(compact('temp'))
        ->with(compact('threenewstbook')) ->with(compact('featureArrayBook')) ->with(compact('top3Author'))->with(compact('bookList'));
    }
    public function contactus(){
        $category= new Category;
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        return view ('email')->with(compact('category'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }


    public function r404error(){

        //return

        return view ('template.404error');
    }
    public function r405footer(){

        //return

        return view ('template.405footer');

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



        return view('template.authors')->with(compact('allAuthor'))->with(compact('bookOfAuthor'))->with(compact('category'))->with(compact('allcategory')) ->with(compact('top3Author'));
    }
    //authordetail
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
        $allBook=Book::paginate(5);
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        //return

        return view ('template.category_book')->with(compact('allBook'))->with(compact('temp'))->with(compact('book'))->with(compact('temp1'))->with(compact('allcategory')) ->with(compact('top3Author'));


    }
    public function category_book(){
        return view ('template.category_book');
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
            return redirect()->route('book.index');
        }
        else{
            return redirect()->route('template.index');
        }
    }
    //Search
    public function new_book(Request $request){
        $allcategory=Category::all();
        $book=new Book;
        $temp1= new Category;
        $allcategory=$temp1->all();
        $search = $request->input('search');
        $temp= new Author;
        $data= DB::table('book')->where('nameBook','like','%'.$search.'%')->paginate(5);
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        return view ('template.search')->with(compact('book'))->with(compact('allcategory'))->with(compact('data'))->with(compact('temp'))->with(compact('top3Author'));
    }
    //logout
    public function logoutUser(){
        Auth::logout();
        return redirect()->route('template.index');
    }
     //profile
     public function profileUser($id){
        $category= new Category;
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        $data = User::find($id);
        //return
        return view ('template.profile')->with(compact('category'))->with(compact('allcategory')) ->with(compact('top3Author'))->with(compact('data'));
    }
    public function updateProfile(Request $req){
        $category= new Category;
        $allcategory=Category::all();
        $top3Author=Author::orderBy('publishedBooks','desc')->limit(3)->get();
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->address=$req->address;
        try{
            $data->save();
            return back()->with('success', 'You updated infomation successfull');
           
        }catch(Exception $exception){
            return back()->with('error', 'Phone number already exists');
        }
       
    }
}
