<?php
$user = auth()->user();
if (isset($user)) {
    $role = $user->role;
    if ($role == 0) {
        return redirect()->to('./')->send();
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="tg-middlecontainer">
        @include('manage.headerLevel2')
    </div>
    <div class="container" style="margin-top: 30px">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="../book">Books</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="../author">Authors</a>
                    </li>
                    <li class="nav-item  active">
                        <a class="nav-link" href="../category">Category</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="productName">Name book</label>
                        <input type="text" name="bookName" id="bookName" class="form-control" placeholder="Name Book" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Book description</label>
                        <textarea type="text" name="bookDes" id="bookDes" class="form-control" placeholder="Book Description" aria-describedby="helpId"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <select name="author" id="author">
                            @foreach ($authors as $author)
                            <option value="{{$author->id}}">{{$author->nameAuthor}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categories">Category</label>
                        <select name="categories" id="categories">
                            @foreach ($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->nameCategory}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Book price</label>
                        <input type="number" name="bookPrice" id="bookPrice" class="form-control" placeholder="book Price" aria-describedby="helpId" value="1000">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Sale price</label>
                        <input type="number" name="salePrice" id="salePrice" class="form-control" placeholder="sale Price" aria-describedby="helpId" value="1000">
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="productPhoto">Rate</label>
                        <input type="number" name="bookRate" id="bookRate" class="form-control" placeholder="Rate" aria-describedby="helpId" min="1" max="5" value="1">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Book Sold</label>
                        <input type="number" name="bookSold" id="bookSold" class="form-control" placeholder="BookSold" aria-describedby="helpId" min="1" max="100000" value="1">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantity" aria-describedby="helpId" min="1" max="1000" value="1">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Feature</label>
                        <input type="number" name="feature" id="feature" class="form-control" placeholder="Feature" aria-describedby="helpId" min="0" max="1" value="0">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Book Image</label>
                        <input type="file" name="bookPhoto" id="productPhoto" class="form-control" placeholder="Book photo" aria-describedby="helpId">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Add book</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>