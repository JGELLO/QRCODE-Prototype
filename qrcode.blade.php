@extends('first.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate QR Code</title>
   
  
</head>
<body class="bg">
    <div class="container" id="panel">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel-heading">
                    <h1>Generate QR-code</h1>
                </div>
                <hr>
                <form action="{{ route('qr.index') }}" method="get">
                    <input type="text" name="qwery" id="text" autocomplete="off" class="form-control" placeholder="" value="">
                    <br>
                    <input type="submit" class="btn btn-md btn-danger btn-block" value="Generate">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

@endsection