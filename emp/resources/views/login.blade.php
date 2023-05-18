<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1>Login Page</h1>

        <form method="POST" action="/submitted">
            @csrf

            <div>
                <label for="text">username</label>
                <input id="username" type="email" name="username" value="" >
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" >
            </div>

           

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</html>
