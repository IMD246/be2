
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
        <h1>CREATE A Book</h1>
        <form action="<?php echo e(route('author.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>           
            <div class="form-group">
                <label for="productPhoto">publishedBooks</label>
                <input type="number" name="publishedBooks" id="publishedBooks" class="form-control" placeholder="publishedBooks" aria-describedby="helpId"value="1" min="1" max="1000000">
            </div>
            <div class="form-group">
                <label for="productName">Name Author</label>
                <input type="text" name="nameAuthor" id="nameAuthor" class="form-control" placeholder="name Author" aria-describedby="helpId">
            </div> 
            <div class="form-group">
                <label for="productDescription">Author description</label>
                <textarea type="text" name="authorDes" id="authorDes" class="form-control" placeholder="Author Description" aria-describedby="helpId"></textarea>
            </div>                
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\be2\library\resources\views/manage/createAuthor.blade.php ENDPATH**/ ?>