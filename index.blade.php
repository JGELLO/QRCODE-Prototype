@extends('first.layout')

@section('content')

<!-- ROUTING TO CREATE -->
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lists.create') }}"> Attendance</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- DISPLAY DATABASE -->
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>TIMEIN</th>
           
        </tr>
        @foreach ($first as $lists)
        <tr>
            <td>{{ $lists->name }}</td>
            <td>{{ $lists->class }}</td>
            <td>{{ $lists->created_at }}</td>
            <td>
                <form action="{{ route('lists.destroy',$lists->id) }}" method="POST">
                   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $first->links() }}

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
