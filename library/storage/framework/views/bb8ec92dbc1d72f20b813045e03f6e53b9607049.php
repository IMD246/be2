
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

        <!-- Xuất thông báo -->    
        <div class="row">
            <div class="col-6">
                <h1>Manage Category</h1>
            </div>      
        </div>       
        <table class="table">
            <thead>
                <td>ID</td>
                <td>Category Name</td>
                               
            </thead>  
            <form action='<?php echo e(route('category.create')); ?>' method="GET">
                <button type="submit" class="btn btn-success"  style="margin-left: 70%">Thêm Category Mới</button>
            </form>                   
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>               
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->nameCategory); ?></td>
                <td>                   
                    
                    
                    <form action='<?php echo e(route('category.edit',$item->id)); ?>' method="GET">
                        <button type="submit" class="btn btn-danger">Update </button>
                    </form>   

                    
                    <form action="<?php echo e(route('category.destroy',$item->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>       
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
        </table>    
    </div>
</body>
</html>
<?php /**PATH C:\wamp64\www\be2\library\resources\views/manage/manageCategory.blade.php ENDPATH**/ ?>