<!-- Reading datas from database and writen it on page -->

<!DOCTYPE html>
<html>
<head>List user</head>
<body>
<h1>List User</h1>
<table>
    <thead>
        <th>ID<th>
        <th>Name<th>
        <th>Age<th>
        <th>Phone<th>
        <th>Edit</th>
        <th>Delete</th>
    <thead>
    <tbody>
        <tr>
        @foreach($users as $user)
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->phone}}</td>
        <td><a href="edit/{{$user->id}}">Edit</a></td>
        <td><a href="delete/{{$user->id}}">Delete</a>"</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>