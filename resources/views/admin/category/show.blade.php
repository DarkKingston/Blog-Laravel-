@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0">{{$category->title}}</h1>
                        <a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="fas fa-pencil-alt pl-3"></i></a>
                        <form action="{{route('admin.category.delete', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0" style="background: transparent;">
                                <i class="text-danger fas fa-trash" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.category.index')}}">Категории</a></li>
                            <li class="breadcrumb-item active">{{$category->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">

                        <div class="card">

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$category->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{$category->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Дата создания</td>
                                            <td>{{$category->created_at}}</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Назад</a>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
