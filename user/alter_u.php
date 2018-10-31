<?php
session_start();//session starts here

?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- tela respansiva -->  
    <!-- Bootstrap-->  
    <link type="text/css" rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link type="text/css" rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script src="..\bootstrap\js\bootstrap.js"></script>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Locaweb style
    <link type="text/css" rel="stylesheet" href="edge\stylesheets\locastyle.css">
    <script src="edge\javascripts\locastyle.js"></script>-->
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css">
    <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script> 
    <!-- Jquery--> 
    <script src="..\js\jquery.min.js"></script>
    <script src="..\js\function.js"></script>
    <!-- CSS--> 
    <link type="text/css" rel="stylesheet" href="..\css\style.css">
    <title>Alter date user</title>
</head>

<body>
   <div class="container"> <!-- FORMULARIO DE REGISTRO DE USUARIO-->
    <div class="row"> 

        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Update Date</h3>  
                </div>

                <div class="tab-content">

                    <!-- Formulario de Usuario -->
                    <div id="regUser" class="panel-body tab-pane fade in active">  
                        <form role="form" id="form_register_user" name="form_register_user" method="post" action="registration.php" >  
                            <fieldset>
                                <?php
                                include("../database/db_conection.php");
                                $a_user=$_SESSION['l_user'];

                                    $$view_user_query="select * from user WHERE cpf='$a_user'";//select query for viewing students.
                                    
                                    
                                    $run=mysqli_query($dbcon,$$view_user_query);//here run the sql query.
                                    $cont = 0;
                                    while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                                    { error_reporting(E_ALL);

                                        $u_cpf=$row[0];
                                        $u_name=$row[1];
                                        $u_pass=$row[2];
                                        $u_birth=$row[3];
                                        $u_cep=$row[4];
                                        $u_addr=$row[5];
                                        $u_num=$row[6];
                                        $u_comp=$row[7];
                                        $u_dist=$row[8];
                                        $u_city=$row[9];
                                        $u_sta=$row[10];
                                        $u_ph1=$row[11];
                                        $u_ph2=$row[12];
                                ?>
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Username" name="name" id="name" type="text" autofocus>  
                                </div>  

                                <div class="form-group">  
                                    <input class="form-control cpf-mask" placeholder="CPF" name="cpf" id="cpf" type="text"  autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="pass" id="pass" type="password" value="" >  
                                </div>
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Confirm Password" name="cpass" id="cpass" type="password" value="" >  
                                </div> 

                                <div class="form-group">  
                                    <input class="form-control" placeholder="Date of Birth" name="birth" id="birth" type="date" autofocus>  
                                </div>
                                <div class="form-group">  
                                    <input class="form-control" placeholder="CEP" name="cep" id="cep" type="text" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Address" name="address" id="address" type="text" autofocus >  
                                </div> 
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Number" name="number" id="number" type="tel" autofocus >  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Complement" name="compl" id="compl" type="text" autofocus >  
                                </div> 
                                <div class="form-group">  
                                    <input class="form-control" placeholder="District" name="district" id="district"  type="text" autofocus >  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="City" name="city" id="city" type="text" autofocus >  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="State" name="state" id="state" type="text" autofocus >  
                                </div>
                                <div class="form-group">  
                                    <input class="form-control phone-ddd-mask" placeholder="Phone 01-(DDD) XXXX-XXXX" name="phone1" id="phone1" type="text" autofocus >  
                                </div>
                                <div class="form-group">  
                                    <input class="form-control cel-sp-mask" placeholder="Phone 02-(DDD) XXXX-XXXX" name="phone2" id="phone2" type="text" autofocus >  
                                </div>

                                <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  

                            </fieldset>  
                        </form>  


                    </div>

                </div>  
            </div>  
        </div>  
    </div>  
</div>  

</body>  

</html>  
