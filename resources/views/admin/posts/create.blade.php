@extends('admin.layouts.template')

@section('styles')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Добавить новую статью
            </h1>
        </section>
        <section class="content">
            {!! Form::open([
                'route' => 'posts.store',
                 'files' => true
            ])!!}

            <div class="box">
                @include('admin.errors')
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем статью</h3>
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">
                        </div>
                        <div class="form-group">
                            <label>Категории</label>
                            {{Form::select(
                                'category_id',
                                $categories,
                                null,
                                ['class' => 'form-control select2']
                            )}}
                        </div>
                        <div class="form-group">
                            <label>Теги</label>
                            {{Form::select(
                                'tags[]',
                                $tags,
                                null,
                                [
                                    'class' => 'form-control select2',
                                    'multiple' => 'multiple',
                                    'data-placeholder' => 'Выберите теги'
                                 ]
                            )}}
                        </div>
                        <div class="form-group">
                            <label>Дата:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="dateOfPost" value="{{old('date')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" name="is_features">
                            </label>
                            <label>
                                Рекомендовать
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" name="status">
                            </label>
                            <label>
                                Черновик
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Полный текст</label>
                            <textarea id="" cols="30" rows="10" class="form-control" name="content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-success pull-right">Добавить</button>
                </div>
            </div>
            {{Form::close()}}
        </section>
    </div>

@endsection