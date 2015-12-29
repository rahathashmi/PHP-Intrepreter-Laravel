@extends('app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Users Code</h3></div>
        <div class="panel-body">
            @foreach($codes as $code)
                <div class="well well-lg">{{ $code->code }}</div>
            @endforeach
        </div>
    </div>
@endsection