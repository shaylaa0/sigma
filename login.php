<?php 
session_start();
if(isset($_SESSION['auther1'])){
    if($_SESSION['auther1'] ==1){      
        header("location:admin.php");
    }
}else{
    if(isset($_COOKIE['auther2'])){
        if($_COOKIE['auther2']==true){
            header("location:admin.php");
        }
    }
}

// db connect
include "database/database.php";

$alert=null;
if(isset($_POST['logbtn'])){
    $email= $_POST['logemail'];
    $pass=md5($_POST['logpass']);
    $keeploggedin=isset($_POST['keeploggedin'])?1:0;
    $loginfo="SELECT * FROM admintable WHERE admin_email='$email' AND admin_password='$pass'";
    $resultLogin= $database -> query($loginfo);

    if($resultLogin -> num_rows > 0 ){
        while($result=$resultLogin -> fetch_assoc()){
            $username=$result['name'];
        }
        $_SESSION['username'] =$username;
        $_SESSION['auther1']=1;
        if($keeploggedin==1){
            setcookie('auther2', true, time()+(60*60*24*15), '/');
        }
        header("location:admin.php");
    }else{
        $alert="invalid email or password!";
    }
   

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/custom.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/technoProVer3.css" rel="stylesheet">

</head>

<body class="cbg">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-5 col-md-7" style="background:transparent;">

                <div class="card o-hidden border-0 shadow-lg my-5" style="background:transparent;">
                    <div class="card-body p-0" style="background:transparent;">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="p-5 lpage">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hello There</h1>
                                    </div>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="user">
                                        <div class="form-group">
                                            <input type="email" name="logemail" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="logpass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="keeploggedin" class="custom-control-input"
                                                    id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="logbtn" class="btn btncustom btn-user btn-block">
                                            Sign-in
                                        </button>
                                        
                                    </form>
                                    <?php 
                                    if($alert==null){
                                        echo "<div class='alert alert-info alert-dismissible fade show mt-3' role='alert'>
                                    Enter email and password to login.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                    </button>
                                  </div>";
                                    }else{
                                    echo "<div class='alert alert-warning alert-dismissible fade show mt-3' role='alert'>
                                    $alert
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                    </button>
                                  </div>";
                                    }
                                    ?>
                                    <hr>
                                    
                                    <div class="text-center">
                                        <a class="small" href="index.php">Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>