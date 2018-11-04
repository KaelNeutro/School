<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- tela respansiva --> 
    <link type="text/css" rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css\style.css">
    <title>Login</title>
</head>
<style>
.login-panel {
    margin-top: 150px;

</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="radio-line" type="radio" name="tpuser" id="tpuser" value="user" checked="">
                                    <label for="tpuser">Users</label>
                                    <input class="radio-line" type="radio" name="tpuser" id="tpschool" value="school">
                                    <label for="tpschool">School</label>
                                </div>

                                <div class="form-group"  >
                                    <input class="form-control" placeholder="login" name="log" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>

                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                                <!-- Ir para o formulario de cadastro -->
                                <center></br><b>No account yet? </b> <br></b><a href="Registration.php">Sign up here!</a></center>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_log=$_POST['log'];
    $user_pass=$_POST['pass'];
    $user_type=$_POST['tpuser'];

    if ($user_type == "user") {
        # code...
        $check_user="select * from user WHERE cpf='$user_log'AND password='$user_pass'";
        $run=mysqli_query($dbcon,$check_user);
        if(mysqli_num_rows($run))
        {

            $_SESSION['l_user']=$user_log;//here session is used and value of $user_email store in $_SESSION.
            echo "<script>window.open('user/menuU.php','_self')</script>";

        }
        else
        {
            echo "<script>alert('User CPF or password is incorrect !')</script>";
        }
    } else if($user_type == "school"){
        # code...
        $check_user="select * from school WHERE code='$user_log'AND password='$user_pass'";
        $run=mysqli_query($dbcon,$check_user);
        if(mysqli_num_rows($run))
        {
            echo "<script>window.open('school/menuS.php','_self')</script>";

            $_SESSION['l_user']=$user_log;//here session is used and value of $user_email store in $_SESSION.

        }
        else
        {
            echo "<script>alert('School Code or password is incorrect !')</script>";
        }
    }

}
?>