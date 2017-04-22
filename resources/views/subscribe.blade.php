@extends('layouts.base')
@section('title')
    Subscribe
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Sibscribe succesful</div>

                    <div class="panel-body">
                        <h3>E-mail {{$obj->email}} has been succesfuly subscribed!</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection