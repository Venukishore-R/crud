<h1>Edit User</h1>
<form action="{{url('update/'.$user->id)}}" method="POST">
    @csrf
    Name:<input type='text' name='name' value="{{$user->name}}"><br>
    Phone:<input type='text' name="phone" value="{{$user->phone}}"><br>
    Age:<input type="text" name="age" value="{{$user->age}}"><br>
    <input type="submit" value="edit_user">
</form>
