@include('menu')
<h3>List Template::</h3>

<table width="100%" border="2">

<tr>
    <td>S.N</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Salary</td>
    <td>Age</td>
    <td>Email</td>
    <td>Action</td>
    
</tr>
<?php $count=1;?>
@foreach($emps as $e)
<tr>
    <td>{{$count++}}</td>
    <td>{{$e->firstName}}</td>
    <td>{{$e->lastName}}</td>
    <td>{{$e->salary}}</td>
    <td>{{$e->age}}</td>
    <td>{{$e->email}}</td>
    <td>
        <a href="{{'updemp/'.$e->id}}">Update</a>
        <a href="{{'delemp/'.$e->id}}">Delete</a>
        <a href="{{'invalidate/'.$e->id}}">test invalid</a>
    </td>
    
</tr>
@endforeach

</table>