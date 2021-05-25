
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
        <form action="<?php echo e(route('book.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
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
                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                        <option value="<?php echo e($author->id); ?>"><?php echo e($author->nameAuthor); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="categories">Category</label>
                <select name="categories" id="categories">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                        <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->nameCategory); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="productPhoto">Book price</label>
                <input type="number" name="bookPrice" id="bookPrice" class="form-control" placeholder="book Price" aria-describedby="helpId"value="1000">
            </div> 
            <div class="form-group">
                <label for="productPhoto">Sale price</label>
                <input type="number" name="salePrice" id="salePrice" class="form-control" placeholder="sale Price" aria-describedby="helpId"value="1000">
            </div> 
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\be2\library\resources\views/manage/createBook.blade.php ENDPATH**/ ?>