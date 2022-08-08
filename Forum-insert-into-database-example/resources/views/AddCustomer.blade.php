<h1>Add customer</h1.>
<form action="add" method="POST">
    @csrf
    <input type="text" name="first_name"><br></br>
    <input type="text" name="last_name"><br></br>
    <button type="submit">Add customer</button>
</form>