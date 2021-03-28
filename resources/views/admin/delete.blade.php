<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete profile</title>
</head>

<body>
    <h1>DeleteProfile</h1>
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>User ID :</td>
                <td>
                   {{ $user['user_id']  }}
                </td>
            </tr>
            <tr>
                <td>
                    Full name :
                </td>
                <td>
                   {{ $user['fullname']  }}
                </td>
            </tr>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    {{ $user['username']  }}
                </td>
            </tr>
            <tr>
                <td>
                    Home address :
                </td>
                <td>
                   {{ $user['address']  }}
                </td>
            </tr>
            <tr>
                <td>
                    E-mail :
                </td>
                <td>
                    {{ $user['email']  }}
                </td>
            </tr>
            <tr>
                <td>
                    Contact no. :
                </td>
                <td>
                    {{ $user['phone'] }}
                </td>
            </tr>
            <tr>
                <td>
                    City :
                </td>
                <td>
                    {{ $user['city']  }}
                </td>
            </tr>
            <tr>
                <td>
                    Country :
                </td>
                <td>
                    {{ $user['country']  }}
                </td>
            </tr>
            <tr>
                <td>Role: </td>
                <td>{{ $user['role'] }}</td>
            </tr>
        </table>
        <br><input type="submit" name="submit" value="Remove employee">
    </form>
</body>

</html>