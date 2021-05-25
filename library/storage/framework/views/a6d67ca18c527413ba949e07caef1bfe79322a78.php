
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
        <h1>Update A Category</h1>
        <form method="POST" action="<?php echo e(route('category.update',$category->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>         
            <div class="form-group">
                <label for="productName">Name Category</label>
                <input type="text" name="nameCategory" id="nameCategory" class="form-control" placeholder="name Author" aria-describedby="helpId" value="<?php echo e($category->nameCategory); ?>">
            </div>            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\be2\library\resources\views/manage/updateCategory.blade.php ENDPATH**/ ?>