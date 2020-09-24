<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Goal Sheets</title>
	<link rel="stylesheet" href="./goalSheetCss/goalsheet-page.css">
</head>
<body>	
	<div id="container" class="container page-break">
	
	@foreach($arr as $gs)    
		<div class="golasheet-header">
			<h1 class="goalsheet-header-heading">
				<span class="heading-name">{{$gs["student_name"]}}</span>{{substr($gs["student_name"], -1) == 's' ? "' " : "'s "}} Writing Goal
			</h1>
			<img src="images/GoalSheetLogo.png" alt="scriibi" class="goalsheet-header-logo">	
		</div>
			<div class="finding-ideas">
				<h3>{{$gs["skill_name"]}}</h3>
				<p>
				<?php echo($gs["student_definiton"]) ?>
				</p>
			</div>
	
			<div class="goal-heading-purpose">
			<img src="images/goal-sheet-heading.png" alt="goal-sheet-heading" style="width:695px;height:73px">	
			
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
				<div class="">
					<?php echo($gs["strategy"]) ?>
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
		@if($gs != end($arr))
			<div class="page-break page-break-screen"></div>
		@endif
	@endforeach
	</div>
	
	<div class=" col-12 col-sm-10 col-md-10" style="float:left">
        <input  type="button" id="btn" onclick="printDiv('container')" value="Print" style="background-color: #2db72b;color: white;float:left">              
	</div>
	
	<script>

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
   











