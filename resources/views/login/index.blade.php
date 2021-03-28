

<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
</head>

<body>
    <h1>Login Page</h1>
    {{-- @csrf --}}
    {{--  {{csrf_field()}} --}}
    <form method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

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
                <td><p style="color: red; font-size: 15px;">{{ $errors->first('email') }}</p></td>
                </tr>
                <tr>
                    <p style="color: red; font-size: 15px;">{{session('msg')}}</p>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password">
                        
                    </td>
                </tr>
                <tr>
                <td></td>
                <td><p style="color: red; font-size: 15px;">{{ $errors->first('password') }}</p></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Login"></td>
                    <td></td>
                </tr>
                <tr>
				<td><br>
                Do not have an account?  <a href="{{route('registration')}}">Sign up</a></td>
				</tr>
            </table>
        </fieldset>

    </form>

</body>

</html>

</html>