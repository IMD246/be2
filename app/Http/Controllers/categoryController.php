<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = new Category;
        $data = $category->all();
        return view('manage.manageCategory')->with(compact('data'));
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
        return view('manage.createCategory')
        ->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->nameCategory = $request->nameCategory;        
        $category->save();
        return redirect()->route('category.create')->with('msg','them thanh cong');
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
        $category = $dataCategory->where('id',$id)->first();
        return view('manage.updateCategory')
        ->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = new Category;
        $category->where('id',$id)->update([            
            'nameCategory' => $request->nameCategory,            
        ]);       
        return redirect()->route('category.index')->with('msg','Update Thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = new Category;
        $category->where('id','=',$id)->delete();

        $book = new Book;
        $dataBook = $book->where('idCategory',$id)->get();
        foreach ($dataBook as $book1) 
        {
           $book1->where('idCategory',$id)->delete();
        }
        return redirect()->route('category.index')->with('msg','xoa thanh cong');
    }
}
