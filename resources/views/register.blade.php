<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action={{ route('reg') }} method="POST">
        @csrf
        <input type="text" placeholder="USERNAME" name="name" id="">
        <input type="text" placeholder="EMAIL"  name="email" id="">
        <input type="text" placeholder="Password" name="password" id="">

        <button>Submit</button>
    </form>
    @if (isset($message))
        
        <p>{{$message}}</p>
    
        
    @endif
</body>
</html>