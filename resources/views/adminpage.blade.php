<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class = "container">
    <a href="/create"><button>create</button></a>
     @foreach($data as $date) 
    <div class="border border-primary mt-3 p-4 w-50">
    <h1>{{$date->name}}</h1>
    <h1>{{$date->price}}</h1>
    <h1>{{$date->quantity}}</h1>
    <img src="/storage/{{$date->image}}">
    
    
    <a href="/edit/{{$date->id}}"><button>edit</button></a>
    <a href="/view/{{$date->id}}"><button>view</button></a>
    
</div>
    @endforeach
    
</div>
    
</body>
</html>