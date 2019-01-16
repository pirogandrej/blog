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

                <div class="box-header">
                    <h3 class="box-title">Список постов</h3>
                </div>

                @include('admin.errors')

                <div class="box-body">

                    <div class="form-group">
                        <a href="{{ route('posts.create') }}" class="btn btn-success">Добавить</a>
                    </div>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Картинка</th>
                                <th>Название</th>
                                <th>Категория</th>
                                <th>Теги</th>
                                <th>Статус</th>
                                <th>Избранный</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>
                                        <img src="{{$post->getImage()}}" alt="" width="100">
                                    </td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->getCategoryTitle()}}</td>
                                    <td>{{$post->getTagsTitles()}}</td>
                                    <td>

                                        @if($post->status == 1)
                                            <a href="/admin/posts/toggle/{{$post->id}}" class="fa fa-lock"></a>
                                        @else
                                            <a href="/admin/posts/toggle/{{$post->id}}" class="fa fa-thumbs-o-up"></a>
                                        @endif

                                        {{--<switch-component></switch-component>--}}

                                    </td>
                                    <td>
                                        @if($post->is_featured == 1)
                                            <a href="/admin/posts/toggleFeatured/{{$post->id}}" class="fa fa-lock"></a>
                                        @else
                                            <a href="/admin/posts/toggleFeatured/{{$post->id}}" class="fa fa-thumbs-o-up"></a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('posts.edit', $post->id)}}" class="fa fa-pencil"></a>
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

