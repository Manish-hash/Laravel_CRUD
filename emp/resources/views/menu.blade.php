<script src="{{url('script.js')}}"></script>

<rel="stylesheet" type="text/css" href="{{url('style.css')}}">
<h2>Menu Page:</h2>
<style>
    .heading{
    color:red;
    font-size:20;
background-color: blanchedalmond;
}

.menu{
    background-color: yellow;
}

    </style>
<table width="100%">

<tr class="heading">
<td colspan="4">Coding Technology: Employee management system</td>
<td width:"30px">Logged In : {{session('sun')}}</td>
</tr>
<tr class="menu">
    <td><a href="/empblade">Emp</a></td>
    <td><a href="/employee">Add Employee</a></td>
    <td><a href="/list">List</a></td>
    <td><a href="/login">log in</a></td>
    <td><a href="/logout">Log out</a></td>
</tr>

</table>