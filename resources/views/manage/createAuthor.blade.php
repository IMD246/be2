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
        @include('manage.headerLevel2')
        <form action="{{route('author.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="productPhoto">PublishedBooks</label>
                        <input type="number" name="publishedBooks" id="publishedBooks" class="form-control" placeholder="publishedBooks" aria-describedby="helpId" value="1" min="1" max="1000000">
                    </div>
                    <div class="form-group">
                        <label for="productName">Name Author</label>
                        <input type="text" name="nameAuthor" id="nameAuthor" class="form-control" placeholder="name Author" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Author description</label>
                        <textarea type="text" name="authorDes" id="authorDes" class="form-control" placeholder="Author Description" aria-describedby="helpId"></textarea>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="productName">Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" placeholder="facebook" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="productName">Twitter</label>
                        <input type="text" name="twitter" id="twitter" class="form-control" placeholder="twitter" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="productPhoto">Image</label>
                        <input type="file" name="authorPhoto" id="authorPhoto" class="form-control" placeholder="author Photo" aria-describedby="helpId">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Add author</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>