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
						<form role="form" id="form_Search_Vac" name="form_Search_Vac" method="post" action="search_vacancy.php">
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

							<input class="btn btn-lg btn-success btn-block" type="submit" value="Search" name="SearchVac" >

							<div class="is-divider" data-content="OR"></div>


<?php
	include("../database/db_conection.php");//Conectando com o banco
	error_reporting(E_ALL);
	if(isset($_POST['SearchVac'])){

		$Vac_edu= $_POST['eduVac1'];  
		$Vac_grade=$_POST['gradeVac1'];
		$Vac_uf=$_POST['uf'];
		$Vac_city=$_POST['city'];
		$Vac_guardian=$_SESSION['l_user'];

		$position = strpos($Vac_edu,":");
		$Vac_edu = substr($Vac_edu, $position + 1);
		// validando campos vazios
		
		if($Vac_guardian=='') // Se o não estiver logado voltar para login novamente
        {  
        	echo"<script>alert('Please login to continue!')</script>"; 
        	echo"<script>window.open('../Logout.php','_self')</script>";  
	        exit();//caso este passo nao seja valido ele retornara ao formulario  
	        
	    } 
		if($Vac_edu=='') 
		{  
			echo"<script>alert('Please enter the Education')</script>";  
        	exit();//caso este passo nao seja valido ele retornara ao formulario  
        }
        if($Vac_grade=='') 
        {  
        	echo"<script>alert('Please enter the Grade')</script>";  
        	exit();//caso este passo nao seja valido ele retornara ao formulario  
        }
        if($Vac_city=='') 
        {  
        	echo"<script>alert('Please enter the UF')</script>";  
	        exit();//caso este passo nao seja valido ele retornara ao formulario  
	        
	    }
	    if($Vac_uf=='') // Se o não estiver logado voltar para login novamente
        {  
        	echo"<script>alert('Please enter the City')</script>";
        	  
	        exit();//caso este passo nao seja valido ele retornara ao formulario  
	        
	    }

    	//inserir usuario em banco de dados. 
	    $search_Vac="SELECT `vacancies`.`education`, `vacancies`.`grade`, `school`.`name`, `school`.`phone1` FROM `vacancies` INNER JOIN `school` ON vacancies.school=school.code WHERE vacancies.grade='$Vac_grade' AND vacancies.education='$Vac_edu' AND school.state='$Vac_uf' AND school.city='$Vac_city'";
	    $run=mysqli_query($dbcon,$search_Vac);//here run the sql query.
	    $cont = 0;
	    if (mysqli_num_rows($run)<=0) {
	    	# code...
	    } else {
	    	while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
	    	{
	    		$sec_edu=$row[0];
	    		$sec_grade=$row[1];
	    		$sec_name=$row[2];
	    		$sec_ph1=$row[3];

        	

?>
							<div class="btn btn-block form-group">
								<button class=" btn-primary btn-lg " type="button" data-toggle="collapse" data-target="<?php echo '#sea'.$cont; ?>" aria-expanded="false" aria-controls="<?php echo 'sea'.$cont; ?>" style="white-space:normal; width:100%; ">
									<?php echo $sec_name; ?>
								</button>
							</div>
							
							<div class="collapse btn-block btn-sm"	 id="<?php echo 'sea'.$cont; ?>" >
								
							</div>
							<?php
										$cont = $cont +1;
        							} //fim do Whiler
        						} // fim do else
        					?>
						</fieldset>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<?php
       

	    if(mysqli_query($dbcon,$search_Vac))  
	    {  
	    	 
	    	//echo"<script>window.open('MenuU.php','_self')</script>";  
	    } else{
	    	echo "Error: " . $search_Vac . "<br>" . mysqli_error($dbcon);
	    }
	    mysqli_close($dbcon);  

	}
?>
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