@extends('first.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YOUR CODE</title>
    
</head>
<body>

    
<!--output for create cr code via qrcontroller/index-->

    <div style="width:800px; margin:0 auto;">
        <form action="{!! route('qr.index'), QrCode::size(400)->eye('circle')->backgroundColor(100, 200, 255)->generate("{$code}"); !!}

        
    </div>

    <a href="/qrt" class="btn btn-success ">Return</a>
      
</body>
</html>


@endsection