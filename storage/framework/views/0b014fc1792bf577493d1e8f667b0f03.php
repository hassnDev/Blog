
<?php $__env->startSection('title'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('Allposts'); ?>
    All Post
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">POSTED BY <?php echo e($post->Posted_by); ?></li>
                                <li class="list-group-item">DESCRIPTION <?php echo e($post->description); ?></li>
                                <li class="list-group-item">CREATE AT <?php echo e($post->create_at); ?></li>
                            </ul>
                        </div>
                        !-->
    <div class="container mt-5">
        <h2>Post Data</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created at </th>
                </tr>
                <th scope="row"><?php echo e($post->id); ?></th>
                <th scope="row"><?php echo e($post->Title); ?></th>
                <th scope="row"><?php echo e($post->description); ?></th>
                <th scope="row"><?php echo e($post->user_id == null ? 'not found' : $post->user->name); ?></th>
                <th scope="row"><?php echo e($post->user_id == null ? 'not found' : $post->user->email); ?></th>
                <th scope="row"><?php echo e($post->created_at); ?></th>
            </thead>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LCT\Desktop\project\resources\views/show.blade.php ENDPATH**/ ?>