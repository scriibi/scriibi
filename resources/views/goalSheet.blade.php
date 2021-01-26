<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Goal Sheets</title>
	<link rel="stylesheet" href="./goalSheetCss/goalsheet-page.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

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
			</div>
			&nbsp;
		@if($gs != end($arr))
			<div class="page-break page-break-screen"></div>
		@endif
	@endforeach
	</div>

	<div class="Print-btn-styling">
		<input class="Print-button"  type="button" id="btn" onclick="printDiv('container')" value="Print or save as PDF" >
		<img class="generate-image">
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












