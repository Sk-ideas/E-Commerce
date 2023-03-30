<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
<div class = "container">
    
    @foreach($data as $date)
    <div class="border border-primary mt-3 p-4 w-50">
    <?php echo ($data = session()->get('name'));?>
    <h1>{{$date->name}}</h1>
    <h1>{{$date->price}}</h1>
    <h1>{{$date->quantity}}</h1>
    <img src="/storage/{{$date->image}}">
    
    <a href="/buy"><button>buy</button></a>
    @endforeach

    
</body>
</html>