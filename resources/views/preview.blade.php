<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Goal Sheets</title>
	<link rel="stylesheet" href="./goalSheetCss/goalsheet-page.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

</head>
<body>

<div id="container" class="content page-break">    
		<div class="golasheet-header">
			<h1 class="goalsheet-header-heading">
				<span class="heading-name"> Student Name</span> Writing Goal
			</h1>
			<img src="images/GoalSheetLogo.png" alt="scriibi" class="goalsheet-header-logo">	
		</div>
		
			<div class="finding-ideas">
				<h3>Skill Name</h3>
				<p id="goal-def">
				
				</p>
			</div>

			<div class="goal-heading-purpose">
			<img src="images/goal-sheet-heading.png" alt="goal-sheet-heading" style="height:70px">	
			
			</div>
			<!--
			<div class="goal-heading">
				<h5>My Progress</h5>
			</div>
	
			<div class="strategies">
				<div class="progress-one">
					<strong> Can you confidently use this skill in your writing?</strong>
				</div>

				<div class="progress-two">
					<img src="images/goal-sheet.png">
				</div>
			</div>
			-->
				
			<div class="goal-heading">
				<h5>Strategies to help me</h5>	
			</div>

			<div class="strats">	
				<div id="Strat">
					
				</div>
			</div>

			<div class="reflection">
				<strong>
					<div class="goal-heading">

						<span class="reflection-heading">Reflection</span>

						<span class="reflection-span">
							<span>1) How has this goal helped with your writing?</span>
							&nbsp; &nbsp; &nbsp; &nbsp;
							<span>2) Do you think you're ready for a new goal?</span>
						</span>
					</div>
				</strong>
				<div class="lines">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;  </p>
				</div>
				<!--
				<div class="sign">
					<div class="checked-peer cp1">
						<strong><p>Checked by Peer</p></strong>
						<p class="signature">&nbsp;</p>
					</div>
	
					<div class="checked-peer cp2">
						<strong><p>Checked by Teacher</p></strong>
						<p class="signature">&nbsp;</p>
					</div>
				</div>
				-->	
			</div>
		&nbsp;
</div>
		<div class="preview">
		<div >
								
				<textarea name = "goals" rows=3 id="goals">

				</textarea>			
			</div>						
			<div>				
				<textarea name = "strategies" rows=30 id="strategies">			


				</textarea>
			</div>
			<div>
				<input type="button" id="btn" value="Preview" style="background-color: #2db72b;color: white;"> 
				<input  type="button" id="btn" onclick="printDiv('container')" value="Print" style="background-color: #2db72b;color: white;">             
            </div>
		</div>

		<!--js script for handling the preview-->
		<script>
			
			// Get the Textbox 1
			var textbox1 = document.getElementById("goals");

			// Get the Textbox 2			
			var textbox2 = document.getElementById("strategies");

			// Get the <P> of Goal Defination
			var goal_def = document.getElementById("goal-def");

			// Get the <div> of Strategies
			var strats = document.getElementById("Strat");

			// Get the button that load the data into form
			var Preview_btn = document.getElementById("btn");

			// When the user clicks the button, load the data in the form
			Preview_btn.onclick= function() 
			{
				goal_def.innerHTML= textbox1.value;
				strats.innerHTML=textbox2.value;					   
			}

			// To select the div which you want to print on button click	
			function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}					
		</script>
</body>
</html>
   











