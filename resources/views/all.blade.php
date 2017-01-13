
@extends('layouts.base')
@section('title')
{{$cat->name}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$cat->name}}</div>
                <div class="panel-body">
                  @foreach($news as $one)
                    <h3>{{$one->name}}</h3>

                            @if ($one->picture == '-')
                                <img src = '{{asset("/media/photos/no_photo.jpg")}}' />
                            @else
                                <img src = '{{asset("/media/photos/s_$one->picture")}}' />
                            @endif
                      <h4>{{$one->body}}</h4>
                        
                  <!--<p>{{$one->url}}<p>-->
                  @endforeach 
                  <div class="links">{{$news->links()}}</div> 
                      }
                      }
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
