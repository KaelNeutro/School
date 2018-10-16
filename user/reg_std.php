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
  <!-- Angular -->
  <script src="//code.angularjs.org/snapshot/angular.min.js"></script>
  <script src="//code.angularjs.org/snapshot/angular-animate.js"></script>
  <script src="..\js\angular\angular-animate.js"></script>
   <script src="..\js\angular\angular.min.js"></script>
  <!-- CSS--> 
  <link type="text/css" rel="stylesheet" href="..\css\style.css">
  <!-- Jquery--> 
  <script src="..\js\jquery.min.js"></script>
  <script src="..\js\function.js"></script>
  <title>Register Students</title>
</head>
<body>
  <div class="container"> <!-- FORMULARIO DE REGISTRO DE ESTUDANTES-->
    <div class="row"> 

      <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-success">  
          <div class="panel-heading">  
            <h3 class="panel-title">Registration Students</h3>  
          </div>

          <div id="" class="panel-body">
            <form role="form" id="form_register_std" name="form_register_std" method="post" action="reg_std.php">
              <fieldset>
                <div class="form-group">  
                  <input class="form-control" placeholder="Name Student" name="nameStd" id="nameStd" type="text" autofocus>  
                </div> 
                <div class="form-group">  
                  <input class="form-control" placeholder="Date of Birth" name="birthStd" id="birthStd" type="text" onfocus="(this.type='date')" onblur="(this.type='text')">  
                </div>
                <div ng-app="switchExample" > <!-- Usei Angular Switch -->
                  <div ng-controller="GradeController" >
                    <div class="form-group">
                      <select class="form-control" ng-model="selection" placeholder="Education" ng-options="item for item in items" id="eduStd" required>
                         <option value="" disabled selected hidden> Education</option>
                      </select>
                    </div>
                    
                    <div class="animate-switch-container"
                    ng-switch on="selection">
                    <div class="animate-switch form-group" ng-switch-when="Elementary School" ng-switch-when-separator="|">
                      <select class="form-control" id="gradeStd" required>
                        <option value="" disabled selected hidden> Grade</option>
                        <option value="1st grade" > 1st grade </option>
                        <option value="2nd grade" > 2nd grade </option>
                        <option value="3rd grade" > 3rd grade </option>
                        <option value="4th grade" > 4th grade </option>
                        <option value="5th grade" > 5th grade </option>

                      </select>
                    </div>
                    <div class="animate-switch form-group" ng-switch-when="Middle School" ng-switch-when-separator="|">
                      <select class="form-control" id="gradeStd" required>
                        <option value="" disabled selected hidden> Grade</option>
                        <option value="6th grade" > 6th grade </option>
                        <option value="7th grade" > 7th grade </option>
                        <option value="8th grade" > 8th grade </option>
                        <option value="9th grade" > 9th grade </option>       
                      </select>
                    </div>
                    <div class="animate-switch form-group" ng-switch-when="High School" ng-switch-when-separator="|">
                      <select class="form-control" id="gradeStd" required>
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
                <select class="form-control" id="lastyear" required>
                  <option value="" disabled selected hidden>Last year's situation </option>
                  <option>Approved</option>
                  <option>Classified</option>
                  <option>Disapproved</option>
                  <option>First year of study</option>
                  <option>Stopped going</option>
                </select>
              </div>  

              <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="registerStd" >
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>