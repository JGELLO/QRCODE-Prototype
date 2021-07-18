@extends('first.layout')

@section('content')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<h2>Student Time In</h2>


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


@endsection
