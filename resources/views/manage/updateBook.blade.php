<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- Form thêm sản phẩm -->
        <h1>Update A Book</h1>
        <form method="POST" action="{{route('book.update',$oldBook->idBook)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- id to update --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="productName">Name book</label>
                        <input value="{{$oldBook->nameBook}}" type="text" name="bookName" id="bookName" class="form-control" placeholder="Name Book" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Book description</label>
                        <textarea type="text" name="bookDes" id="bookDes" class="form-control" placeholder="Book Description" aria-describedby="helpId">{{$oldBook->Description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <select name="author" id="author">
                            @foreach ($authors as $author)
                            @if ($oldBook->idAuthor == $author->id)
                            <option selected value="{{$author->id}}">{{$author->nameAuthor}}</option>
                            @else
                            <option value="{{$author->id}}">{{$author->nameAuthor}}</option>
                            @endif;
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categories">Category</label>
                        <select name="categories" id="categories">
                            @foreach ($categories as $cate)
                            @if ($oldBook->idCategory == $cate->id)
                            <option selected value="{{$cate->id}}">{{$cate->nameCategory}}</option>
                            @else
                            <option value="{{$cate->id}}">{{$cate->nameCategory}}</option>
                            @endif;
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Book price</label>
                        <input value="{{$oldBook->price}}" type="number" name="bookPrice" id="bookPrice" class="form-control" placeholder="book Price" aria-describedby="helpId" value="1000">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Sale price</label>
                        <input value="{{$oldBook->salePrice}}" type="number" name="salePrice" id="salePrice" class="form-control" placeholder="sale Price" aria-describedby="helpId" value="1000">
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="productPhoto">Rate</label>
                        <input value="{{$oldBook->rate}}" type="number" name="bookRate" id="bookRate" class="form-control" placeholder="Rate" aria-describedby="helpId" min="1" max="5" value="1">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Book Sold</label>
                        <input value="{{$oldBook->SoldBooks}}" type="number" name="bookSold" id="bookSold" class="form-control" placeholder="BookSold" aria-describedby="helpId" min="1" max="100000" value="1">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Quantity</label>
                        <input value="{{$oldBook->Quantity}}" type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantity" aria-describedby="helpId" min="1" max="1000" value="1">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Feature</label>
                        <input value="{{$oldBook->Feature}}" type="number" name="feature" id="feature" class="form-control" placeholder="Feature" aria-describedby="helpId" min="0" max="1" value="0">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Book Image</label>
                        <input type="file" name="bookPhoto" id="bookPhoto" class="form-control" aria-describedby="helpId" value="{{url('images/books')}}/{{$oldBook->image}}.jpg">
                        <img src="{{url('images/books')}}/{{$oldBook->image}}" width="150">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>