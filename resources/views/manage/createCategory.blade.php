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
        <h1>CREATE A Category</h1>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="productName">Name Category</label>
                <input type="text" name="nameCategory" id="nameCategory" class="form-control" placeholder="name Category" aria-describedby="helpId">
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Add category</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>