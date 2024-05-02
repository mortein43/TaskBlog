<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <form action="{{route('request-code')}}" method="post">
        @csrf
        <div class="d-flex justify-content-between mt-2">
            <label for="email" class="text-primary p-0 col-1">Email:</label>
            <input type="text" name="email" class="form-control" required placeholder="Enter your email for registration">
        </div>
        <button type="submit" class="btn btn-primary col-12 mt-2">Request Code</button>
    </form>
    <form action="{{route('login-user')}}" method="post">
        @csrf
        <div class="d-flex justify-content-between mt-2">
            <label for="code" class="text-primary col-1">Code:</label>
            <input type="text" name="code" class="form-control" required placeholder="Enter the code you received in the mail in order to enter.">
        </div>
        <button type="submit" class="btn btn-success col-12 mt-2">Login</button>
    </form>
</div>

</body>
</html>
