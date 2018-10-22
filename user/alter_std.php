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
    <!-- Jquery--> 
    <script src="..\js\jquery.min.js"></script>
    <script src="..\js\function.js"></script>
    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    <script src="..\js\angular\angular.min.js"></script>
    <script src="..\js\angular\angular-animate.js"></script>
    
    <title>Alter Students Data</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alter Data Students</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="alter_std.php">
                            <fieldset>
                                <?php
                                include("../database/db_conection.php");
                                    $view_students_query="select * from students";//select query for viewing students.
                                    $run=mysqli_query($dbcon,$view_students_query);//here run the sql query.
                                    $cont = 0;
                                    while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                                    {
                                        
                                        $std_code=$row[0];
                                        $std_name=$row[1];
                                        $std_birth=$row[2];
                                        $std_grade=$row[3];
                                        $std_edu=$row[4];
                                        $std_last=$row[5];
                                ?>
                                        <!-- Opções Alunos -->
                                        <button class="btn btn-primary btn-block btn-sm" type="button" data-toggle="collapse" data-target="<?php echo '#alter'.$cont.'std'; ?>" aria-expanded="false" aria-controls="<?php echo 'alter'.$cont.'std'; ?>" style="white-space:normal; width:100%; ">
                                         <?php echo $std_name; ?>
                                        </button>

                                        <div class="collapse btn-block" id="<?php echo 'alter'.$cont.'std'; ?>">
                                            <div class="form-group">  
                                                <input class="form-control" placeholder="Name Student" name="nameStd" id="nameStd" type="text" autofocus>  
                                            </div> 
                                            <div class="form-group">  
                                                <input class="form-control" placeholder="Date of Birth" name="birthStd" id="birthStd" type="text" onfocus="(this.type='date')" onblur="(this.type='text')">  
                                            </div>
                                            <div ng-app=<?php echo "switch".$cont."altStd";?> > <!-- Usei Angular Switch -->
                                                <div ng-controller=<?php echo "Grade".$cont; ?> >
                                                    <div class="form-group">
                                                        <select class="form-control" ng-model="selection" ng-options="item for item in items" id="eduStd" name="eduStd" value={{selection}} required>
                                                        <option value="" disabled selected hidden> Education</option>
                                                        </select>
                                                    </div>

                                                    <div class="animate-switch-container"
                                                ng-switch on="selection">
                                                        <div class="animate-switch form-group" ng-switch-when="Elementary School" ng-switch-when-separator="|">
                                                            <select class="form-control" id="gradeStd" name="gradeStd" required>
                                                                <option value="" disabled selected hidden> Grade</option>
                                                                <option value="1st grade" > 1st grade </option>
                                                                <option value="2nd grade" > 2nd grade </option>
                                                                <option value="3rd grade" > 3rd grade </option>
                                                                <option value="4th grade" > 4th grade </option>
                                                                <option value="5th grade" > 5th grade </option>

                                                            </select>
                                                        </div>
                                                        <div class="animate-switch form-group" ng-switch-when="Middle School" ng-switch-when-separator="|">
                                                            <select class="form-control" id="gradeStd" name="gradeStd" required>
                                                                <option value="" disabled selected hidden> Grade</option>
                                                                <option value="6th grade" > 6th grade </option>
                                                                <option value="7th grade" > 7th grade </option>
                                                                <option value="8th grade" > 8th grade </option>
                                                                <option value="9th grade" > 9th grade </option>       
                                                            </select>
                                                        </div>
                                                        <div class="animate-switch form-group" ng-switch-when="High School" ng-switch-when-separator="|">
                                                            <select class="form-control" id="gradeStd" name="gradeStd" required>
                                                                <option value="" disabled selected hidden> Grade</option>
                                                                <option value="1st grade" > 1st grade </option>
                                                                <option value="2nd grade" > 2nd grade </option>
                                                                <option value="3rd grade" > 3rd grade </option> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="lastyear" name="lastyear" required>
                                                    <option value="" disabled selected hidden>Last year's situation </option>
                                                    <option>Approved</option>
                                                    <option>Classified</option>
                                                    <option>Disapproved</option>
                                                    <option>First year of study</option>
                                                    <option>Stopped going</option>
                                                </select>
                                            </div>  

                                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="registerStd" > 
                                        </div>
                                <?php
                                echo "<script>
                                (function(angular) {
                                  'use strict';
                                  angular.module('";
                                  echo "switch".$cont."altStd";
                                  echo "', ['";
                                  echo "ngAnimate";
                                  echo "'])";
                                  echo ".controller(";
                                  echo "'";
                                  echo "Grade".$cont;
                                  echo "', ['";
                                  echo "$";
                                  echo "scope";
                                  echo "', function(";
                                  echo "$";
                                  echo "scope";
                                  echo ") {";
                                  echo  "$";
                                  echo "scope.items = [";
                                  echo "'Elementary School', 'Middle School', 'High School'];";
    //$scope.selection = $scope.items[0];
                                  echo "}]);
                              })(";
                              echo "window.angular";
                              echo "); </script>";
                                        $cont = $cont + 1;
                                    }
                                ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
        // Switch Alter Students

for (var i = 0; i <= <?php echo $cont; ?>; i++) {
   
    //$(document).ready(function(){
        
  //});
}
</script>