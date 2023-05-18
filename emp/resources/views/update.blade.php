@include('menu')
<h3>Update Employee Record</h3>
<form action="/updemployee" method="POST"><!-- action ma path ko name -->
    @csrf <!-- it generates id -->
    <table border = "1" cellspacing = "0" width = "100%">
        <tr>
            <th>First Name: </th>
            <td><input type = "text" name="firstName" value="{{$e->firstName}}"></td>
</tr><input type = "hidden" name = "id" value = "{{$e->id}}">
<tr>
            <th>Last Name: </th>
            <td><input type = "text" name = "lastName" value="{{$e->lastName}}"></td>
</tr>
<tr>
            <th>Salary: </th>
            <td><input type = "text" name = "salary" value="{{$e->salary}}"></td>
</tr>
<tr>
            <th>Age: </th>
            <td><input type = "text" name = "age" value="{{$e->age}}"></td>
</tr>
<tr>
            <th>Email: </th>
            <td><input type = "text" name = "email" value="{{$e->email}}"></td>
</tr>
<tr>
    <th></th>
    <td><input type = "submit" value = "Update Employee" ></td>
</tr>
</table>
</form>