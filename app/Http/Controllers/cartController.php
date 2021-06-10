<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\orders;
use App\Models\book_orders;
use Cart;

class cartController extends Controller
{
    //
    public function index()
    {
        $allcategory = Category::all();
        $dataCart = Cart::content();
        $top3Author = Author::orderBy('publishedBooks', 'desc')->limit(3)->get();
        return view('template.cart')->with(compact('dataCart'))->with(compact('allcategory'))->with(compact('top3Author'));
    }
    public function addItem($id)
    {
        $idBook = '';
        $nameBook = '';
        $priceBook = '';
        $linkImage = '';
        $bookItem = DB::table('book')->where('idBook', $id)->get();
        foreach ($bookItem as $item) {
            $idBook = $item->idBook;
            $nameBook = $item->nameBook;
            $priceBook = $item->price;
            $linkImage = $item->image;
        }
        $data = Cart::add([
            'id' => $idBook,
            'name' => $nameBook,
            'qty' => 1,
            'price' => $priceBook,
            'weight' => 0,
            'options' => [
                'img' => $linkImage,
            ]
        ]);
        if ($data) {
            return back()->with('success', 'You added book sucessfull.');
        }
    }
    public function removeItem($id)
    {
        Cart::remove($id);
        return back()->with('success', 'You deleted sucessfull');
    }
    public function inceaseItem($id)
    {
        $data = Cart::get($id);
        $inQty = $data->qty + 1;
        Cart::update($id, $inQty);
        return back();
    }
    public function deceaseItem($id)
    {
        $data = Cart::get($id);
        $deQty = $data->qty - 1;
        Cart::update($id, $deQty);
        return back();
    }
    //Checkout 
    public function checkout()
    {
        orders::createOrder();
        $allcategory = Category::all();
        $dataCart = Cart::content();
        $top3Author = Author::orderBy('publishedBooks', 'desc')->limit(3)->get();
        return view('template.checkout')->with(compact('dataCart'))->with(compact('allcategory'))->with(compact('top3Author'));
    }
    //history
    public function  historycart()
    {
        $user = auth()->user();
        // $order = DB::select('select * from orders where user_id = ?', [$user->id]);
        $order= DB::table('orders')->where('user_id','like',$user->id)->orderBy('created_at', 'desc')->paginate(5);
        $count = DB::table('orders')->where('user_id', [$user->id])->count();
        $allcategory = Category::all();
        $top3Author = Author::orderBy('publishedBooks', 'desc')->limit(3)->get();
        return view('template.historycart')->with(compact('allcategory'))->with(compact('top3Author'))->with(compact('order'))->with(compact('count'));
    }
    //history detail
    public function  historydetail($id)
    {
        $book=new Book;
        $dataDetail = DB::select('select  book_orders.id, book_orders.orders_id, book_orders.qty, book_orders.total, book.image, book.price, book.nameBook,book.idBook FROM book_orders, 
        book where book_orders.book_id= book.idBook AND book_orders.orders_id=?', [$id]);
        $allcategory = Category::all();
        $top3Author = Author::orderBy('publishedBooks', 'desc')->limit(3)->get();
        return view('template.historydetail')->with(compact('allcategory'))->with(compact('top3Author'))->with(compact('dataDetail'))->with(compact('book'));
    }
}
