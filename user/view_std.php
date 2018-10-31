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
    <h1 align="center">All the Students</h1>

<div class="table-responsive container"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered  table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Grade</th>
            <th>Education</th>
            <th>Last Year</th>
            <th>Delete std</th>
        </tr>
        </thead>

        <?php
        include("../database/db_conection.php");
        $view_students_query="select * from students";//select query for viewing students.
        $run=mysqli_query($dbcon,$view_students_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $std_code=$row[0];
            $std_name=$row[1];
            $std_birth=$row[2];
            $std_grade=$row[3];
            $std_edu=$row[4];
            $std_last=$row[5];



        ?>

        <tr>
<!--here showing results in the table -->
            
            <td><?php echo $std_name;  ?></td>
            <td><?php echo $std_birth;  ?></td>
            <td><?php echo $std_grade;  ?></td>
            <td><?php echo $std_edu;  ?></td>
            <td><?php echo $std_last;  ?></td>
            <td><a href="delete_std.php?del=<?php echo $std_code ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
        <button class="btn btn-lg btn-primary center-block">BACK</button>
        </div>
</div>


</body>

</html>
