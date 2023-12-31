@extends('layouts_backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>कर्मचारी प्रविष्टि</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Header Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">

                                <h3 class="card-title">कर्मचारी विवरण</h3>
                                <a href="{{ route('employee.create') }}"
                                    class="card-title btn btn-primary btn-sm float-right">नयाँ
                                    थप्नुहोस्</a>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">क्र.स.</th>
                                            <th>संकेत नं.</th>
                                            <th>कर्मचारीको नाम</th>
                                            <th>दर्जा</th>
                                            <th>सम्पर्क नं.</th>
                                            <th>कार्यालयको नाम</th>
                                            <th>कार्य</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->sanketno_np }}</td>
                                                <td>{{ $d->emp_name_np }}</td>
                                                <td>{{ $d->emp_post_np }}</td>
                                                <td>{{ $d->contact_no_np }}</td>
                                                <td>{{ $d->office_name_np }}</td>
                                                <td>{{ $d->officecode_np }}</td>
                                                <td>
                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                    <a href="#"><i class="fas fa-edit"></i></a>
                                                    <a href="#"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">

                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
