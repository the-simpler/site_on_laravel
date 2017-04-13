
@extends('layouts.base')
@section('title')
{{$cat->name}}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$cat->name}}</div>
                <div class="panel-body">
                  @foreach($news as $one)
                    <h3><a href="{{asset($one->id)}}">{{$one->name}}</a></h3>
                        <div class="picture_catalog">


                                                        @if ($one->picture == '-')
                                <img src = '{{asset("/media/photos/no_photo.jpg")}}' />
                            @else
                                <img  src = '{{asset("/uploads/medium/$one->picture")}}'  />
                            @endif
                            </div>
                      <h4>{{substr($one->body, 0, 16)}}...<a href="{{asset($one->id)}}">читать далее</a></h4>
                        <hr>
                  <!--<p>{{$one->url}}<p>-->
                  @endforeach 
                  <div class="links">{{$news->links()}}</div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
