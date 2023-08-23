<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>email</th>
            <th>Mobile</th>
            <th>address</th>
            <th>role</th>
            <th>Actions</th>
        </tr>

    </thead>
    <?php $__currentLoopData = $allPassengers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
            <td> <?php echo e($person->passenger_id); ?> </td>
            <td> <?php echo e($person->name); ?> </td>
            <td> <?php echo e($person->username); ?> </td>
            <td> <?php echo e($person->email); ?> </td>
            <td> <?php echo e($person->mobile); ?> </td>
            <td> <?php echo e($person->address); ?> </td>
            <td> <?php echo e($person->role); ?> </td>
            <td> 
                <a href="<?php echo e(route('profile.show',$person->passenger_id)); ?>" role="button">Afficher Plus</a>
            </td>
            
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</table>
<?php /**PATH C:\Projects\booking\resources\views/profile/profiles.blade.php ENDPATH**/ ?>