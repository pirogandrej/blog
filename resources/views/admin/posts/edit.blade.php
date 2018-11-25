@extends('admin.layouts.template')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Изменить статью
            </h1>
        </section>
        <section class="content">
            {{Form::open([
                'route' => ['posts.update', $post->id],
                'files' => true,
                'method' => 'put'
            ])}}

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновляем статью</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text"
                                   class="form-control"
                                   id="exampleInputEmail1"
                                   placeholder=""
                                   value="{{ $post->title }}"
                                   name="title">
                        </div>

                        <div class="form-group">
                            <img src="{{ $post->getImage() }}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select(
                                'category_id',
                                $categories,
                                $post->category->id,
                                ['class' => 'form-control select2']
                            )}}
                        </div>

                        <div class="form-group">
                            <label>Теги</label>
                            {{Form::select(
                                'tags[]',
                                $tags,
                                $selectedTags,
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
                                <input  type="text"
                                        class="form-control pull-right"
                                        id="datepicker"
                                        value="{{ $post['dateOfPost'] }}"
                                        name="dateOfPost"
                                >
                            </div>
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" checked>
                            </label>
                            <label>
                                Рекомендовать
                            </label>
                        </div>
                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal">
                            </label>
                            <label>
                                Черновик
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Полный текст</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum omnis error quae dicta quidem illo atque quisquam a enim accusantium molestias iste, consectetur voluptas reiciendis impedit doloribus ea mollitia, excepturi commodi ipsam aperiam, itaque explicabo.

Et dolore, unde non quod sint, blanditiis doloribus corporis quibusdam tempora commodi itaque cumque, velit officiis assumenda eveniet sed ad. Impedit voluptatibus excepturi ipsa, quidem architecto nulla, explicabo, ex eius quo nesciunt tempore dicta fugiat suscipit ipsum alias iste, vel consequatur optio libero doloremque fuga voluptas nam deleniti sint? Omnis vero voluptatum esse reiciendis veniam, animi quasi assumenda, delectus ut labore culpa pariatur fuga.

Est suscipit praesentium nihil, aliquid dolore minus, cupiditate natus ipsa magni consequatur animi nisi necessitatibus repellendus, incidunt eveniet atque facere, asperiores quos iste quam debitis eaque reiciendis. Iusto rem laudantium, laboriosam in similique maxime nulla eos, voluptatum sint optio esse dolorem ducimus saepe architecto repellendus. Incidunt cumque aliquam porro et eos?
              </textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>@endsection