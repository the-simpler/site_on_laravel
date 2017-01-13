@extends('layouts.base')
@section('title')
{{$text->name}}
@endsection
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$text->name}}</div>
                        @for($text as $one)
                            if ($one->picture == ' - ')
                                <img src = '{{asset("/media/photos/no_photo.jpg")}}' />
                            @else
                                <img src = '{{asset("/media/photos/$one->picture")}}' />
                            @endif
                        @endfor
                <div class="panel-body">
                   {{$text->body}} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
