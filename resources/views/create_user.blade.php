<h1>Create User</h1>
<form action="store" method="POST">
    @csrf
    Name:<input type='text' name='name'><br>
    Phone:<input type='text' name="phone"><br>
    Age:<input type="text" name="age"><br>
    <input type="submit"  value="create_user">
</form>
