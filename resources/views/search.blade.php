@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Результаты поиска</div>

                <div class="panel-body">
                    @foreach($all as $one)
                     <p>
                         <a href="{{asset('/'.$one->url)}}">
                             {{$one->name}}

                         </a>
                         <p></p>
                         {{$one->body}}
                     </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
