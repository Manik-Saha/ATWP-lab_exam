

<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
</head>

<body>
    <h1>Login Page</h1>
    
    
    <form method="post">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>E-mail</td>
                    <td><input type="text" name="email">
                        
                    </td>
                </tr>
                <tr>
                <td></td>
                <td><p style="color: red; font-size: 15px;"><?php echo e($errors->first('email')); ?></p></td>
                </tr>
                <tr>
                    <p style="color: red; font-size: 15px;"><?php echo e(session('msg')); ?></p>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password">
                        
                    </td>
                </tr>
                <tr>
                <td></td>
                <td><p style="color: red; font-size: 15px;"><?php echo e($errors->first('password')); ?></p></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Login"></td>
                    <td></td>
                </tr>
                <tr>
				<td><br>
                Do not have an account?  <a href="<?php echo e(route('registration')); ?>">Sign up</a></td>
				</tr>
            </table>
        </fieldset>

    </form>

</body>

</html>

</html><?php /**PATH D:\ATP-3 ( Web Technology )\lab_exam\resources\views/login/index.blade.php ENDPATH**/ ?>