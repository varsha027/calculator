<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style>
		*
		{
			margin: 0;
			padding: 0;
		}
		.background
		{
			background-color: lightseagreen;
			height: 100vh;

		}
		.container
		{
			top: 25%;
			left: 25%;
			position: absolute;
			margin: auto;
            width: 50%;
            height: 50%;
            border-radius: 20px;
            background: #73AD21;
           
 
 


		}
		.screen
		{


		}
		.app-group showdata
		{
			
		}
		.screen-body-item left
		{
			
			
		}
		.app-form
		{
			top: 25%;
			left: 60%;
			position: absolute;
			font-size: 20px;
            
		}
		.app-title
		{
			top: 40%;
			left: 8%;
			position: absolute;
			font-size: 30px;
			font-family: 'Merriweather' ;
			text-shadow: -3px -2px blueviolet;
			box-shadow: -3px 0px red;

		}
		.animated infinite pulse
		{

		}
		p
		{

			
   
    margin-top:  250px;
    margin-left: 200px;
   
		}
	</style>
<div class="background">
	<div class="container">
		<div class="screen">
			<div class="screen-body">
				<div class="screen-body-item left">
					<div class="app-title">
						<div class="animated infinite pulse">
							PHP <br> CALCULATOR <br>
						</div>
					</div>
				</div>
				<div class="screen-body-item">
					<div class="app-form">
						<form method="POST">
							<div class="app-form-group">Enter Number<br>
								<input type="text" class="app-form-group" placeholder="" name="num1">
							</div>
							<div class="app-form-group">Enter Number<br>
								<input type="text" class="app-form-group" placeholder="" name="num2">
							</div>
							<div class="select-style">
								<select name="operation">
									<option value="add">ADD</option>
									<option value="sub">SUB</option>
									<option value="mult">MULTI</option>
									<option value="div">DIV</option>
									
								</select>
							</div>
							<div>
								<input type="submit" name= "submit" value="submit" class="app-form-button">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="app-group showdata">
				<p> 
					<?php
					if (isset($_POST['submit'])) {
						$num1 =$_POST['num1'];
						$num2 =$_POST['num2'];
						//echo "{$num1} {$num2}";
						$operation = $_POST['operation'];
						switch ($operation) {
							case 'add': $sum=$num1+$num2;
								echo "The addition of two number is $sum";
								break;
							case 'sub': $sub=$num1-$num2;
								echo "The subtraction of two number is $sub";
								break;
							case 'mult': $mult=$num1*$num2;
								echo "The multipication of two number is $mult";
								break;	
							case 'div': $div=$num1/$num2;
								echo "The division of two number is $div";
								break;		
							default:
								echo"sorry not exitss";
								break;
						}
					}


 
					?>


				</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>