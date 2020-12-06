<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>{{ $todos->title }}</title>
</head>

<body>


    <h1> Todo List </h1>

    <h4>Title : {{ $todos->title }}</h4>

    <h5>AssignedTo : {{ $todos->assigned_to }}</h5>

    <h6>Duration : {{ $todos->duration }}</h6>

    <blockquote> Description : {{ $todos->description }}</blockquote>


</body>

</html>
