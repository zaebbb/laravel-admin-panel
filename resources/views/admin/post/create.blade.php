@extends('layouts.admin_layout')

@section('title')Статья @endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создать статью</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="content-fluid">

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название статьи</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Введите название статьи" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название статьи</label>
                                    <textarea rows="8" type="text" class="form-control editor" name="text" id="exampleInputEmail1" placeholder="Введите название категории" required>Введите текст здесь</textarea>
                                </div>

                                <style>.active_images{width: 200px;height: 130px; display: block;object-fit: cover;border-radius:4px;}</style>

                                <div class="form-group">
                                    <label for="feature_image">Выберите изображение статьи</label>
                                    <img src="" alt="" class="img-uploaded mb-2">
                                    <input type="text" id="feature_image" name="img" class="form-control" required value="">
                                    <a href="" class="popup_selector btn btn-primary mt-2" data-inputid="feature_image">Выбрать изображение</a>
                                </div>

                                <div class="form-group">
                                    <label>Выбрать категорию</label>
                                        <select class="custom-select" name="cat_id" required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <!-- /.card-body -->



                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
