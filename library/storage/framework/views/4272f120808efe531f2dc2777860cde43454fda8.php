
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
        <form action="<?php echo e(route('category.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>                 
            <div class="form-group">
                <label for="productName">Name Category</label>
                <input type="text" name="nameCategory" id="nameCategory" class="form-control" placeholder="name Category" aria-describedby="helpId">
            </div>            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\be2\library\resources\views/manage/createCategory.blade.php ENDPATH**/ ?>