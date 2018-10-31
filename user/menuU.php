<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- tela respansiva --> 
    <!-- Bootstrap --> 
    <link type="text/css" rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSS--> 
    <link type="text/css" rel="stylesheet" href="..\css\style.css">
    <title>Menu User</title>

</head>
    


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Menu Usuário</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                            <fieldset>
                                <!-- Opções Alunos -->
                                <button class="btn btn-success btn-block btn-lg" type="button" data-toggle="collapse" data-target="#menu-std" aria-expanded="false" aria-controls="menu-std">
                                    Students
                                </button>

                                <div class="collapse btn-block" id="menu-std">
                                    <button type="button" class="btn  btn-primary btn-block" onclick="window.location.href='reg_std.php'"> Register  </button>
                                    <button type="button" class="btn  btn-primary btn-block" onclick="window.location.href='alter_std.php'"> Alter Data  </button>
                                    <button type="button" class="btn  btn-warning btn-block" onclick="window.location.href='view_std.php'"> Remove  </button>

                                </div>
                                <!-- Opções Vagas-->
                                <button class="btn btn-success btn-block btn-lg" type="button" data-toggle="collapse" data-target="#menu-va" aria-expanded="false" aria-controls="menu-va">
                                    Vacancies
                                </button>
                                <div class="collapse btn-block" id="menu-va">
                                    <button type="button" class="btn  btn-primary btn-block"> Vacancy </button>
                                    <button type="button" class="btn  btn-primary btn-block"> Situation  </button>

                                </div>
                                <!-- Opções Usuario-->
                                <button class="btn btn-success btn-block btn-lg" type="button" data-toggle="collapse" data-target="#menu-us" aria-expanded="false" aria-controls="menu-us">
                                    User
                                </button>
                                 <div class="collapse btn-block" id="menu-us">
                                    <button type="button" class="btn  btn-primary btn-block"> Edit Account </button>
                                    <button type="button" class="btn  btn-warning btn-block"> Remove Account  </button>

                                </div>

                                <button class="btn btn-danger btn-block btn-lg" type="button" data-toggle="collapse"aria-expanded="false" onclick="location.href='../Logout.php'" >
                                    Logout
                                </button>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>