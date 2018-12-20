@extends('admin.layouts.template')

@section('styles')
@endsection

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Подписчики
            </h1>
        </section>

        <section class="content">

            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">Список подписчиков</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('subscribers.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($subs as $subscriber)
                            <tr>
                                <td>
                                    {{$subscriber->id}}
                                </td>
                                <td>
                                    {{$subscriber->email}}
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['subscribers.destroy', $subscriber->id], 'method'=>'delete']) !!}
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