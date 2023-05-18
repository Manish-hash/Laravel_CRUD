@include('menu')
<h3>Save Employee Records</h3>
<form action="sEmployee" method="post">
    @csrf
    <table>
        <tr>
        <td> FirstName:</td>
        <td> <input type="text"  name="firstName" id="fn"></td>
        </tr>
        <tr>
        <td> LastName:</td>
        <td> <input type="text"  name="lastName" id="ln"></td>
        </tr>
        <tr>
        <td> Salary:</td>
        <td> <input type="text"  name="salary" id="salary" ></td>
        </tr>
        <tr>
        <td> Age:</td>
        <td> <input type="text"  name="age" id="age" ></td>
        </tr>
        <tr>
        <td> Email:</td>
        <td> <input type="text"  name="email" id="email"></td>
        </tr>
        <tr>
        <td> <input type="submit" onClick="validate();" name="submit" value="Submit" ></td>
        </tr>
    </table>

</form>