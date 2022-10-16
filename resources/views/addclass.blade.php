<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Management</title>
<!-- ---------- icon -----------  -->
<link rel="icon" href="{{asset('public/image/favicon.png')}}">
    <!-- Custom fonts for this template-->
    <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>



<body id="page-top">

<div id="page-wrapper">
    
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Class Add</h1>
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
                                    <form role="form" action="class_add.php" method="Post">
                                    <div class="form-group">
                                            <label>Select Course</label>
                                            <select class="form-control" name="selectcourse">


                                           
                                                <option value="A section">A section</option>
                                                <option value="MBA">MBA</option>
                                                <option value="Bsc Nursing">Bsc Nursing</option>
                                                <option value="Bsc Csit">Bsc Csit</option>
                                                <option value="B Tech">B Tech</option>
                                                                                           
                                            </select>
                                        </div>
                                    <div class="form-group">
                                            <label>Select Section</label>
                                            <select class="form-control" name="selectsection">


                                           
                                                <option value="MBBS">A section</option>
                                                <option value="MBA">MBA</option>
                                                <option value="Bsc Nursing">Bsc Nursing</option>
                                                <option value="Bsc Csit">Bsc Csit</option>
                                                <option value="B Tech">B Tech</option>
                                                                                           
                                            </select>
                                        </div>
                                    <div class="form-group">
                                            <label>Select Semester</label>
                                            <select class="form-control" name="selectsemester">


                                           
                                                <option value="first semester">first semester</option>
                                                <option value="second semester">second semester</option>
                                                <option value="third semseter">third semseter</option>
                                                <option value="fourth semester">fourth semester</option>
                                                <option value="fifth semester">fifth semester</option>
                                                <option value="six semester">six semester</option>
                                                <option value="seven semester">seven semester</option>
                                                <option value="eight semester">eight semester</option>
                                                    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Your Class</label>
                                            <input class="form-control" name="classname" required>
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
     

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>

</body>

</html>