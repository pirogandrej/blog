@extends('admin.layouts.template')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Пользователи</h1>
        </section>

        <section class="content">
            <div class="box">
                {!! Form::open(['route' => 'users.store', 'files' => true]) !!}
                    <div class="box-header with-border">
                        <h3 class="box-title">Добавляем пользователя</h3>
                        @include('admin.errors')
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Пароль</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Аватар</label>
                                <input type="file" id="exampleInputFile" name="avatar">

                                <p class="help-block">Формат изображения: jpeg, png, bmp, gif или svg.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('users.index')}}" class="btn btn-default">Назад</a>
                        <button class="btn btn-success pull-right">Добавить</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </section>
    </div>
@endsection