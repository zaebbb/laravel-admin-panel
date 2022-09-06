<?php

?>

@extends('layouts.admin_layout')

@section('title')Все категории @endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все категории</h1>
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
                                    <a class="btn-tool" href="{{ route('category.create') }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body p-0" style="display: block;">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 1%">
                                        ID
                                    </th>
                                    <th style="width: 50%">
                                        Название категории
                                    </th>
                                    <th style="width: 30%">
                                        Время создания
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categoriesAll as $category)
                                        <tr>
                                            <td>
                                                {{ $category['id'] }}
                                            </td>
                                            <td>
                                                {{ $category['title'] }}
                                            </td>
                                            <td>
                                                {{ $category['created_at'] }}
                                            </td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category['id']) }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Редактировать
                                                </a>
                                                <form action="{{ route('category.destroy', $category['id']) }}" method="POST" style="display: inline-block">
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
