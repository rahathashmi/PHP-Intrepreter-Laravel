@extends('app')
@section('content')
    <div class="container">
        <div class="content-wrapper">
            <div class="">
                <div class="code-outer">
                    <h3>Write Code Below</h3>
                    @include('_ide')
                </div>
                <div class="output-outer">
				
         {{--@include('out')--}} 
                </div>
            </div>
        </div>
    </div>
@endsection