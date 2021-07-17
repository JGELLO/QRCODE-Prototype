@extends('first.layout')

@section('content')
<title>Attendance</title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<!--<link rel="stylesheet" href="css/styles.css"> stylesheet pra sa css-->

<!-- ROUTING TO INDEX -->
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Attendance</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('lists.index') }}"> View Attendance</a>
        </div>
    </div>


<!-- ERROR CHECKER -->
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- POST IN DATABASE -->
<form action="{{ route('lists.store') }}" method="POST">
    @csrf
    <video id="preview" width="55%"></video>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" id="text" readonyy="" placeholder="Scanned QR" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <strong>Class:</strong>
            <input type="text" name="class" id="text" readonyy="" placeholder="Classroom" class="form-control">
        </div>
    </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                
        </div>
    </div>

</form>

 
  

<!-- camera script to scan qr -->
<script>
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
        Instascan.Camera.getCameras().then(function(cameras){
        if(cameras.length > 0 ){
            scanner.start(cameras[0]);
                } else{
                    alert('No cameras found');
                }
                    }).catch(function(e) {
                        console.error(e);
                    });

scanner.addListener('scan',function(c){
document.getElementById('text').value=c;
});

        </script>





@endsection