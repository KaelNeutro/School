<?php
session_start();//session starts here
 $std_guardian=$_SESSION['l_user'];
         if($std_guardian=='') // Se o não estiver logado voltar para login novamente
        {  
            echo"<script>alert('Please login to continue!')</script>"; 
            echo"<script>window.open('../Logout.php','_self')</script>";  
            exit();//caso este passo nao seja valido ele retornara ao formulario  
        }
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- tela respansiva -->  
    <!-- Bootstrap-->  


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <!-- Jquery--> 
    <script src="..\js\jquery.min.js"></script>
    <script src="..\js\function.js"></script>
    <!-- CSS--> 
    <link type="text/css" rel="stylesheet" href="..\css\style.css">
    <title>View students</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>

<div class="table-scrol">
    <h1 align="center">Vacancies Canceled</h1>

<div class="container"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-responsive  table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            
            <th>Data Request</th>
            <th>School</th>
            <th>Grade</th>
            <th>Education</th>
            <th>Data Answer</th>
        </tr>
        </thead>

        <?php
        include("../database/db_conection.php");
        $std=$_POST['std'];
        $view_students_query="SELECT c.code, c.request_date, a.name,b.grade,b.education,c.date_answer FROM pendency c INNER JOIN vacancies b ON (c.vacancy = b.code) INNER JOIN school a ON (b.school = a.code) WHERE c.situation='canceled' AND c.students='$std'";//select query for viewing students.
        $run=mysqli_query($dbcon,$view_students_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $code=$row[0];
            $date_req=$row[1];
            $school=$row[2];
            $grade=$row[3];
            $edu=$row[4];
            $answer=$row[5];


        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $date_req;  ?></td>
            <td><?php echo $school;  ?></td>
            <td><?php echo $grade;  ?></td>
            <td><?php echo $edu;  ?></td>
            <td><?php echo $answer;  ?></td>
        </tr>

        <?php } ?>

    </table>
        <button class="btn btn-lg btn-danger center-block" onclick="window.location.href='menuU.php'">BACK</button>
        </div>
</div>


</body>

</html>
