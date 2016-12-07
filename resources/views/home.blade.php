@extends('layouts.base')
@section('title')
Home
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Новая новость</div>
                <div class="panel-body">
                    
                    @if(count($errors))
                        @foreach($errors->all() as $one)
                            <div class="alert alert-danger">
                                {{$one}}
                            </div>
                        @endforeach
                    @endif

                    <form action = "home" method="post">
                    {{csrf_field()}}


					   <div class="form-group">
                            <label for="name"> 
                                Название
                            </label>

                            <input type="text" id="name" class="form-control"  name="name">
                       </div>


						<div class="form-group">
                            <label for="category_id"> 
                                Категория
                            </label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($cats->all() as $one)
                                <option value="1">
                                {{$one->name}}
                                </option>
                                 @endforeach  
                            </select>
                        </div>


                       <div class="form-group">
                            <label for="body"> 
                                Тело
                            </label>
							<textarea name='body' id='body' class='form-control'> </textarea>  
                            
                       </div>

                     

                       <div class="form-group">
                            <label for="pic"> 
                                Картинка
                            </label>

                            <input type="file" id="pic" class="input-pic form-control"   name="pic"  />
                       </div>

        
					   <button type="submit" class="btn btn-default btn-block">
                           Добавить
                       </button>
                    </form>
                <div>
                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

