@extends('layouts_backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>नयाँ कार्यालय प्रविष्टि</h1>
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
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">कार्यालय विवरण</h3>
                            </div>

                            <form method="POST" action="{{ route('header.store') }}">
                                @csrf()
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gov_level_np">सरकारको तह</label>
                                                <input type="text" class="form-control" id="gov_level_np" name="gov_level_np"
                                                    placeholder="Enter Government Level">
                                            </div>
                                            <div class="form-group">
                                                <label for="ministryname_np">मन्त्रालयको नाम </label>
                                                <input type="text" class="form-control" id="ministryname_np" name="ministryname_np"
                                                    placeholder="Enter Ministry Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="officename_np">कार्यालयको नाम </label>
                                                <input type="text" class="form-control" id="officename_np" name="officename_np"
                                                    placeholder="Enter Office Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="provincename_np">प्रदेशको नाम</label>
                                                <input type="text" class="form-control" id="provincename_np" name="provincename_np"
                                                    placeholder="Enter Province Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="officecode_np">कार्यालयको कोड</label>
                                                <input type="text" class="form-control" id="officecode_np" name="officecode_np"
                                                    placeholder="Enter Office Code">
                                            </div>
            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gov_level">Government Level</label>
                                                <input type="text" class="form-control" id="gov_level" name="gov_level"
                                                    placeholder="Enter Government Level">
                                            </div>
                                            <div class="form-group">
                                                <label for="ministryname">Ministry Name </label>
                                                <input type="text" class="form-control" id="ministryname" name="ministryname"
                                                    placeholder="Enter Ministry Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="officename">Office Name </label>
                                                <input type="text" class="form-control" id="officename" name="officename"
                                                    placeholder="Enter Office Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="provincename">Province Name</label>
                                                <input type="text" class="form-control" id="provincename" name="provincename"
                                                    placeholder="Enter Province Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="officecode">Office Code</label>
                                                <input type="text" class="form-control" id="officecode" name="officecode"
                                                    placeholder="Enter Office Code">
                                            </div>
            
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="col-md-4">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Remarks</h3>
                            </div>
                            <div class='card-body'>
                                @if ($errors->any())
                                <div class="text-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            </div>
                        </div>
                        <!-- /.col -->
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.col -->
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
