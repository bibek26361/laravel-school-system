@extends('layout/master')
@section('content')
<body id="page-top">

<div id="page-wrapper">
    
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Semester Add</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="semester_add.php" method="Post">
                                    <div class="form-group">
                                            <label>Select Course</label>
                                            <select class="form-control" name="selectcourse">


                                           
                                                <option value="MBBS">MBBS</option>
                                                <option value="MBA">MBA</option>
                                                <option value="Bsc Nursing">Bsc Nursing</option>
                                                <option value="Bsc Csit">Bsc Csit</option>
                                                <option value="B Tech">B Tech</option>
                                                                                           
                                            </select>
                                        </div>
                                    <div class="form-group">
                                            <label>Select Section</label>
                                            <select class="form-control" name="selectsection">


                                           
                                                <option value="MBBS">MBBS</option>
                                                <option value="MBA">MBA</option>
                                                <option value="Bsc Nursing">Bsc Nursing</option>
                                                <option value="Bsc Csit">Bsc Csit</option>
                                                <option value="B Tech">B Tech</option>
                                                                                           
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Your Semester</label>
                                            <input class="form-control" name="semestername" required>
                                        </div>
                                        <div class="form-group"> 
                                            <label>Status:</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline1" value="Active" required>Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline2" value="Deactive"required>Deactive
                                            </label>
                                            
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
@endsection