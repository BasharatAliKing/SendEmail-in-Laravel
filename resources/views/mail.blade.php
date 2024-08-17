<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h3{
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{$mailmessage}}</h1>
        <h2>{{$subject}}</h2>
        <h3 class="text-green">Name: {{$details['name']}}</h3>
        <h3>Product: {{$details['product']}}</h3>
        <h3>Price: {{$details['price']}}</h3>
    </div>
</body>
</html>