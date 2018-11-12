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
    <title>Students Pending</title>

</head>
    


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Students pending</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                            include("../database/db_conection.php");
                            $std_guardian=$_SESSION['l_user'];
                            if($std_guardian=='') // Se o não estiver logado voltar para login novamente
                            {  
                                echo"<script>alert('Please login to continue!')</script>"; 
                                echo"<script>window.open('../Logout.php','_self')</script>";  
                                exit();//caso este passo nao seja valido ele retornara ao formulario  
                            } 
                            $view_students_query="select * from students WHERE guardianUser='$std_guardian'";//select query for viewing students.
                            $run=mysqli_query($dbcon,$view_students_query);//here run the sql query.
                            $cont = 0;
                            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                            {
                                $std_code=$row[0];
                                $std_name=$row[1];
                        ?>
                        <form role="form" method="post" action="">
                            <fieldset>
                                <!-- Alunos -->
                                <input type="hidden" name="<?php echo 's'.$cont; ?>" value="<?php echo $std_code; ?>">
                                <button class="btn btn-primary btn-block btn-lg" type="submit">
                                    <?php echo $std_name;  ?>
                                </button>
                            </fieldset>
                        </form>
                        <?php
                                $cont = $cont + 1;
                            }        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>