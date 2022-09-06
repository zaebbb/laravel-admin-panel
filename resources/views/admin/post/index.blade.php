<?php

?>

@extends('layouts.admin_layout')

@section('title')Все статьи @endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все статьи</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->


            @if(session('success'))
                <div class="alert alert-info" role="alert">
                    <button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-info"></i>{{ session('success') }}</h4>
                </div>
            @endif


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                                <a class="btn-tool" href="{{ route('post.create') }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body p-0" style="display: block;">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 1%">
                                        ID
                                    </th>
                                    <th style="width: 20%">
                                        Название статьи
                                    </th>
                                    <th style="width: 25%">
                                        Время создания статьи
                                    </th>
                                    <th style="width: 20%">
                                       Категория
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allPosts as $post)
                                    <tr>
                                        <td>
                                            {{ $post['id'] }}
                                        </td>
                                        <td>
                                            {{ $post['title'] }}
                                        </td>
                                        <td>
                                            {{ $post['created_at'] }}
                                        </td>
                                        <td>
                                            {{ $post->category['title'] }}
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{ route('post.edit', $post['id']) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>
                                            <form action="{{ route('post.destroy', $post['id']) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Удалить
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection
