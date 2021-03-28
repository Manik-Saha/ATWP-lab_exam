<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All user list</title>
</head>

<body>
<p style="color: red; font-size: 15px;">{{session('msg')}}</p>
    <form>
        <table border="1">
            <tr>
            <th>Remove</th>
                <th>User ID</th>
                <th>User name</th>
                <th>Role</th>
                <th>Full name</th>
                <th>Address</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
            </tr>
            <tr>
                @for($i=0; $i < count($list); $i++) @if($list[$i]['role']=='Scout' || $list[$i]['role']=='General user'
                    ) <tr>
                    <td>{{$list[$i]['user_id']}}</td>
                    <td> <a href="{{ route('admin.delete', [$list[$i]['user_id']]) }}">Delete</a></td>
                    <td>{{$list[$i]['username']}}</td>
                    <td>{{$list[$i]['role']}}</td>
                    <td>{{$list[$i]['fullname']}}</td>
                    <td>{{$list[$i]['address']}}</td>
                    <td>{{$list[$i]['email']}}</td>
                    <td>{{$list[$i]['phone']}}</td>
                    <td>{{$list[$i]['city']}}</td>
                    <td>{{$list[$i]['country']}}</td>
            </tr>
            @endif
            @endfor
            </tr>
        </table>
    </form>
</body>

</html>