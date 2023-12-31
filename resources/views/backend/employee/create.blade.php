@extends('layouts_backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>नयाँ कर्मचारी प्रविष्टि</h1>
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
                                <h3 class="card-title">कर्मचारी विवरण</h3>
                            </div>

                            <form method="POST" action="{{ route('employee.store') }}">
                                @csrf()

                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Nepali Input</h2>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="संकेत नं.">संकेत नं. </label>
                                                <input type="text" class="form-control" id="संकेत नं." name="sanketno_np"
                                                    placeholder="Enter Government Level">
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_name_np">कर्मचारीको नाम </label>
                                                <input type="text" class="form-control" id="emp_name_np"
                                                    name="emp_name_np" placeholder="Enter Ministry Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_post_np">दर्जा </label>
                                                <input type="text" class="form-control" id="emp_post_np" name="emp_post_np"
                                                    placeholder="Enter Office Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_no_np">सम्पर्क नं.</label>
                                                <input type="text" class="form-control" id="contact_no_np"
                                                    name="contact_no_np" placeholder="Enter Province Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="office_name_np">कार्यालयको नाम</label>
                                                <input type="text" class="form-control" id="office_name_np" name="office_name_np"
                                                    placeholder="Enter Office Code">
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_type_np">कर्मचारीको प्रकार</label>
                                                <select name="emp_type_np" id="emp_type_np" class="form-control">
                                                    <option value="">---Select a Value---</option>
                                                    <option value="1">पेश गर्ने</option>
                                                    <option value="2">सिफारिस गर्ने</option>
                                                    <option value="3">स्वीकृत गर्ने</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <h2>English Input</h2>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="sanketno">Employee ID </label>
                                                <input type="text" class="form-control" id="sanketno" name="sanketno"
                                                    placeholder="Enter Government Level">
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_name">Employee Name </label>
                                                <input type="text" class="form-control" id="emp_name"
                                                    name="emp_name" placeholder="Enter Ministry Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_post">Designation</label>
                                                <input type="text" class="form-control" id="emp_post" name="emp_post"
                                                    placeholder="Enter Office Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_no">Contact Number</label>
                                                <input type="text" class="form-control" id="contact_no"
                                                    name="contact_no" placeholder="Enter Province Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="office_name">Office Name</label>
                                                <input type="text" class="form-control" id="office_name" name="office_name"
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
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        @endsection
