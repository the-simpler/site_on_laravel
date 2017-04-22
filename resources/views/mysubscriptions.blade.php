@extends('layouts.base')
@section('title')
    My Subscriptions
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">My Subscriptions</div>

                    <div class="panel-body">
                        <h3>@foreach($sub as $one)

                                <p>{{$one}}</p>
                                @endforeach
                        </h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection