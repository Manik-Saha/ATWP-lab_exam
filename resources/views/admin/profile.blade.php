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
    <p style="color: red; font-size: 15px;"> @foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach </p>

    <p style="color: red; font-size: 15px;">{{session('msg')}}</p>
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>User ID :</td>
                <td>
                    <input type="text" name="user_id" value="{{ $user[0]->user_id  }}" >
                </td>
            </tr>
            <tr>
                <td>
                    Full name :
                </td>
                <td>
                    <input type="text" name="fullname" value="{{ $user[0]->fullname  }}">
                </td>
            </tr>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" name="username" value="{{ $user[0]->username  }}">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password" value="{{ $user[0]->password  }}">
                </td>
            </tr>
            <tr>
                <td>
                    Confirm password :
                </td>
                <td>
                    <input type="password" name="Cpassword" value="{{ $user[0]->password  }}">
                </td>
            </tr>
            <tr>
                <td>
                    Home address :
                </td>
                <td>
                    <input type="text" name="address" value="{{ $user[0]->address  }}">
                </td>
            </tr>
            <tr>
                <td>
                    E-mail :
                </td>
                <td>
                    <input type="text" name="email" value="{{ $user[0]->email  }}">
                </td>
            </tr>
            <tr>
                <td>
                    Contact no. :
                </td>
                <td>
                    <input type="text" name="phone" value="{{ $user[0]->phone }}">
                </td>
            </tr>
            <tr>
                <td>
                    City :
                </td>
                <td>
                    <input type="text" name="city" value="{{ $user[0]->city  }}">
                </td>
            </tr>
            <tr>
                <td>
                    Country :
                </td>
                <td>
                    <input type="text" name="country" value="{{ $user[0]->country  }}">
                </td>
            </tr>
            <tr>
                <td><label for="role">Select role:</label></td>
                <td><select name="role" id="role" name="role">
                        <option> </option>
                        <option value="Admin" @if($user[0]->role == 'Admin') selected @endif> Admin</option>
                        <option value="Scout" @if($user[0]->role == 'Scout') selected @endif> Scout</option>
                        <option value="General user" @if($user[0]->role == 'General user') selected @endif> General user
                        </option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Save">
    </form>
</body>

</html>