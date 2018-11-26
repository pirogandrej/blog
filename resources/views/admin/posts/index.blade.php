@extends('admin.layouts.template')

@section('styles')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Посты
            </h1>
        </section>
        <section class="content">
            <div class="box">
                @include('admin.errors')
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{ route('posts.create') }}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Категория</th>
                                <th>Теги</th>
                                <th>Картинка</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->getCategoryTitle()}}</td>
                                    <td>{{$post->getTagsTitles()}}</td>
                                    <td>
                                        <img src="{{$post->getImage()}}" alt="" width="100">
                                    </td>
                                    <td>
                                        <a href="{{route('posts.edit', $post->id)}}" class="fa fa-pencil"></a>
                                        {{--{{dd($post->id)}}--}}
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method'=>'delete']) !!}
                                            <button onclick="return confirm('Вы уверены?')" type="submit" class="button-delete">
                                                <i class="fa fa-remove"></i>
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection