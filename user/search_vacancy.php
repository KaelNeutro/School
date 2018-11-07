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
	<!-- Jquery--> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="..\js\jquery.min.js"></script>
	<script src="..\js\function.js"></script>
	<!-- Angular -->
	<script src="//code.angularjs.org/snapshot/angular.min.js"></script>
	<script src="//code.angularjs.org/snapshot/angular-animate.js"></script>
	<script src="..\js\angular\angular.min.js"></script>
	<script src="..\js\angular\angular-animate.js"></script>
	<title>Search Vacancies</title>
</head>
<body id="rgVac">
	<div class="container"> <!-- FORMULARIO DE REGISTRO DE ESTUDANTES-->
		<div class="row"> 

			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-success">  
					<div class="panel-heading">  
						<h3 class="panel-title">Search Vacancies</h3>  
					</div>

					<div class="panel-body">
						<form role="form" id="form_Search_Vac" name="form_Search_Vac" method="post" action="choose_vac.php">
							<fieldset>
								<div ng-app="switch_regVac" > <!-- Usei Angular Switch -->
									<div ng-controller="GradeController" >
										<div class="form-group">
											<select class="form-control" ng-model="selection" placeholder="Education" ng-options="item for item in items" id="eduVac1" name="eduVac1" value={{selection}} required>
												<option value="" disabled selected hidden> Education</option>
											</select>
										</div>

										<div class="animate-switch-container"
										ng-switch on="selection">
										<div class="animate-switch form-group" ng-switch-when="Elementary School" ng-switch-when-separator="|">
											<select class="form-control" id="gradeVac1" name="gradeVac1" required>
												<option value="" disabled selected hidden> Grade</option>
												<option value="1st grade" > 1st grade </option>
												<option value="2nd grade" > 2nd grade </option>
												<option value="3rd grade" > 3rd grade </option>
												<option value="4th grade" > 4th grade </option>
												<option value="5th grade" > 5th grade </option>

											</select>
										</div>
										<div class="animate-switch form-group" ng-switch-when="Middle School" ng-switch-when-separator="|">
											<select class="form-control" id="gradeVac1" name="gradeVac1" required>
												<option value="" disabled selected hidden> Grade</option>
												<option value="6th grade" > 6th grade </option>
												<option value="7th grade" > 7th grade </option>
												<option value="8th grade" > 8th grade </option>
												<option value="9th grade" > 9th grade </option>       
											</select>
										</div>
										<div class="animate-switch form-group" ng-switch-when="High School" ng-switch-when-separator="|">
											<select class="form-control" id="gradeVac1" name="gradeVac1" required>
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
								<select class="form-control" id="uf"  name="uf" required>
									
								</select>
							</div>
							<div class="form-group"  id="idCity">
								<select class="form-control" id="city" name="city" >
								</select>
							</div>  
							<input type="hidden" name="l_user" value="<?php echo $_SESSION['l_user'];?>">
							<input class="btn btn-lg btn-success btn-block" type="submit" value="Search" name="SearchVac" >

						</fieldset>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript">
	// Switch Registe Students

(function(angular) {
		'use strict';
		angular.module('switch_regVac', ['ngAnimate'])
		.controller('GradeController', ['$scope', function($scope) {
			$scope.items = ['Elementary School', 'Middle School', 'High School'];
    //$scope.selection = $scope.items[0];
}]);
	})(window.angular);

</script>
</html>