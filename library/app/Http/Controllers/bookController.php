<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Book = new Book;
        $databook = $Book->all();
        return view('manage.manageBook')->with(compact('databook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataCategory = new Category;
        $categories = $dataCategory->all();
        $dataAuthor = new Author;
        $authors = $dataAuthor->all();
        return view('manage.createBook')
        ->with(compact('categories'))
        ->with(compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $book = new Book;
        $book->nameBook = $request->bookName;
        $book->price = $request->bookPrice;
        $book->idAuthor = $request->author;
        $book->idCategory = $request->categories;
        $book->salePrice = $request->salePrice;
        $book->SoldBooks = $request->bookSold;
        $book->rate = $request->bookRate;
        $book->Description = $request->bookDes;
        $book->Quantity = $request->quantity;
        $book->Feature = $request->feature;
        //Xu ly upload
        $request->validate([
            'bookPhoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
            //xu ly va upload anh
        $imageName = $request->bookPhoto->getClientOriginalName();
        $request->bookPhoto->move(public_path('images').'/books', $imageName);
        $book->image = $imageName;
        $book->save();

        return redirect()->route('book.create')->with('msg','them thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataCategory = new Category;
        $categories = $dataCategory->all();
        $dataAuthor = new Author;
        $authors = $dataAuthor->all();

        $book = new Book;
        $oldBook = $book->where('idBook',$id)->first();
        return view('manage.updateBook')
        ->with(compact('oldBook'))
        ->with(compact('categories'))
        ->with(compact('authors'));
    }
       /**
     * Update the specified rate in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'bookPhoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // //xu ly va upload anh
        $imageName = $request->bookPhoto->getClientOriginalName();
        $request->bookPhoto->move(public_path('images').'/books', $imageName);
        $book = new Book;
        $book->where('idBook',$id)->update([
            'nameBook' => $request->bookName,
            'idAuthor' => $request->author,
            'idCategory' => $request->categories,
            'rate' => $request->star,
            'SoldBooks' => $request->bookSold,
            'quantity' => $request->quantity,
            'feature' => $request->feature,
            'salePrice' => $request->salePrice,
            'price' => $request->bookPrice,
            'Description' => $request->bookDes,
            'image' => $imageName
        ]);
        return redirect()->route('book.index')->with('msg','Update Thanh cong');            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $book = new Book;
         $book->where('idBook',$id)->delete();
         return redirect()->route('book.index')->with('success',"Delete successful!");
    }
}
