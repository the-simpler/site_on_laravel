@extends('layouts.base')
@section('title')
{{$product->name}}
@endsection
@section('content') 

  
        
            <div class="panel panel-default">
                <div class="panel-heading">{{$product->name}}</div>
                       
                <div class="panel-body">
                <h3>{{$product->name}}</h3>
                        @if ($product->picture == '-')
                                <img src = '{{asset("/media/photos/no_photo.jpg")}}' />
                            @else
                                <img src = '{{asset("/uploads/$product->picture")}}' />
                            @endif
                            <div>{{$product->body}}</div>
                
      
     
    </div>
</div>
@endsection


