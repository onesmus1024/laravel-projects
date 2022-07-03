<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    {{$errors}}
    <form action="logincontroller" method="post">
    @csrf
        <label for="username">username</label>
        <input type="text" name="username" id="username" placeholder="enter your username"> <br>
        <span>@error('username'){{$message}}@enderror</span><br>
        <label for="password">password</label>
        <input type="password" name="userpassword" id="password"> <br>
        <button type="submit">login</button>
    
    </form>
</body>
</html>