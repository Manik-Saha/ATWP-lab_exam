<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin profile</title>
</head>

<body>
    <h1>My Profile</h1>
    <p style="color: red; font-size: 15px;"> <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </p>

    <p style="color: red; font-size: 15px;"><?php echo e(session('msg')); ?></p>
    <form method="post">
        <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td>User ID :</td>
                <td>
                    <input type="text" name="user_id" value="<?php echo e($user[0]->user_id); ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    Full name :
                </td>
                <td>
                    <input type="text" name="fullname" value="<?php echo e($user[0]->fullname); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" name="username" value="<?php echo e($user[0]->username); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password" value="<?php echo e($user[0]->password); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Confirm password :
                </td>
                <td>
                    <input type="password" name="Cpassword" value="<?php echo e($user[0]->password); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Home address :
                </td>
                <td>
                    <input type="text" name="address" value="<?php echo e($user[0]->address); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    E-mail :
                </td>
                <td>
                    <input type="text" name="email" value="<?php echo e($user[0]->email); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Contact no. :
                </td>
                <td>
                    <input type="text" name="phone" value="<?php echo e($user[0]->phone); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    City :
                </td>
                <td>
                    <input type="text" name="city" value="<?php echo e($user[0]->city); ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Country :
                </td>
                <td>
                    <input type="text" name="country" value="<?php echo e($user[0]->country); ?>">
                </td>
            </tr>
            <tr>
                <td><label for="role">Select role:</label></td>
                <td><select name="role" id="role" name="role">
                        <option> </option>
                        <option value="Admin" <?php if($user[0]->role == 'Admin'): ?> selected <?php endif; ?>> Admin</option>
                        <option value="Scout" <?php if($user[0]->role == 'Scout'): ?> selected <?php endif; ?>> Scout</option>
                        <option value="General user" <?php if($user[0]->role == 'General user'): ?> selected <?php endif; ?>> General user
                        </option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Save">
    </form>
</body>

</html><?php /**PATH D:\ATP-3 ( Web Technology )\lab_exam\resources\views/admin/profile.blade.php ENDPATH**/ ?>