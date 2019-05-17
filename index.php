<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ Project - GPA Calculator</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="html/js/score1.js"></script>
<script type="text/javascript" src="html/js/score2.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.11.2/jquery-ui.js?ver=4.3.1"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="html/css/style.css" rel="stylesheet">
</head>
<html>
<body>
	<div class="container">
		<center>
		<div id="calcframe" class="calcframeh wg-calc wg-high-school-calc">   
			<div class="input">
				<b>Complete the fields below to calculate your GPA</b>
				<div class="calc-header">    
					<span class="grade-name-head wide-column">Course</span>    
					<span class="credits-head small-column">Credit Hours</span>    
					<span class="grade-head small-column">Grade</span>    
					<span class="honors-head small-column">Check here if it is a AP/Honors Class</span>
				</div>
				<div class="calcrow calcrowh">    
					<input class="grade-name wide-column" type="text" placeholder="Enter course name">   
					<input class="credits small-column" type="text" placeholder="Credit Hours">   
					<div class="styled-select-wrapper grade small-column">    
						<select class="grade gradeh">     
						<option value="-1">Select</option>     
						<option value="4">A</option>
						<option value="3.7">A-</option>
						<option value="3.3">B+</option>     
						<option value="3">B</option>
						<option value="2.7">B-</option>
						<option value="2.3">C+</option>     
						<option value="2">C</option>
						<option value="1.7">C-</option>
						<option value="1.3">D+</option>
						<option value="0">F</option>     
						<option value="1">D</option>     
						<option value="0.7">D-</option>    
						</select>    
					</div>   
					<div class="honors-wrapper small-column">    
						<input type="checkbox">   
					</div>  
				</div>
				<div class="calcrow calcrowh">    
					<input class="grade-name wide-column" type="text" placeholder="Enter course name">   
					<input class="credits small-column" type="text" placeholder="Credit Hours">  
					<div class="styled-select-wrapper grade small-column">    
						<select class="grade gradeh">     
						<option value="-1">Select</option>
						<option value="4">A</option>
						<option value="3.7">A-</option>
						<option value="3.3">B+</option>
						<option value="3">B</option>
						<option value="2.7">B-</option>
						<option value="2.3">C+</option>
						<option value="2">C</option>
						<option value="1.7">C-</option>
						<option value="1.3">D+</option>
						<option value="0">F</option>
						<option value="1">D</option>
						<option value="0.7">D-</option>
						</select>    
					</div>   
					<div class="honors-wrapper small-column">    
						<input type="checkbox">   
					</div>  
				</div>
				<div class="calcrow calcrowh">    
					<input class="grade-name wide-column" type="text" placeholder="Enter course name">   
					<input class="credits small-column" type="text" placeholder="Credit Hours">   
					<div class="styled-select-wrapper grade small-column">    
						<select class="grade gradeh">     
						<option value="-1">Select</option>     
						<option value="4">A</option>
						<option value="3.7">A-</option>
						<option value="3.3">B+</option>
						<option value="3">B</option>
						<option value="2.7">B-</option>
						<option value="2.3">C+</option>
						<option value="2">C</option>
						<option value="1.7">C-</option>
						<option value="1.3">D+</option>
						<option value="0">F</option>
						<option value="1">D</option>
						<option value="0.7">D-</option>
						</select>    
					</div>   
					<div class="honors-wrapper small-column">    
						<input type="checkbox">   
					</div>  
				</div>
				<div class="calcrow calcrowh">    
					<input class="grade-name wide-column" type="text" placeholder="Enter course name">   
					<input class="credits small-column" type="text" placeholder="Credit Hours">   
					<div class="styled-select-wrapper grade small-column">    
						<select class="grade gradeh">     
						<option value="-1">Select</option>
						<option value="4">A</option>
						<option value="3.7">A-</option>
						<option value="3.3">B+</option>
						<option value="3">B</option>
						<option value="2.7">B-</option>
						<option value="2.3">C+</option>
						<option value="2">C</option>
						<option value="1.7">C-</option>
						<option value="1.3">D+</option>
						<option value="0">F</option>
						<option value="1">D</option>
						<option value="0.7">D-</option>
						</select>    
					</div>   
				<div class="honors-wrapper small-column">    
					<input type="checkbox">   
				</div>  
				</div>
				<div class="calcrow calcrowh">    
					<input class="grade-name wide-column" type="text" placeholder="Enter course name">   
					<input class="credits small-column" type="text" placeholder="Credit Hours">   
					<div class="styled-select-wrapper grade small-column">    
					<select class="grade gradeh">     
					<option value="-1">Select</option>
					<option value="4">A</option>
					<option value="3.7">A-</option>
					<option value="3.3">B+</option>
					<option value="3">B</option>
					<option value="2.7">B-</option>
					<option value="2.3">C+</option>
					<option value="2">C</option>
					<option value="1.7">C-</option>
					<option value="1.3">D+</option>
					<option value="1">D</option>
					<option value="0.7">D-</option>
					<option value="0">F</option>
					</select>    
				</div>   
					<div class="honors-wrapper small-column">    
					<input type="checkbox">   
				</div>  
			</div>
			</div>   
			<div class="add-wrapper">    
				<button type="button" class="calc-add calc-addh">Click Here To Add Another Class</button>
			</div>   
			<div class="result-wrapper">   	 
				<div class="sidebar sidebar-score"> 
					<div class="score-circle" style="">       
						<h4 style="background-color: rgb(84, 183, 37);" class="score-outer">        
							<span class="score-inner">         
								<span>Your GPA is:</span>
								<span class="score"></span>        
							</span>       
						</h4>      
					</div>
				</div>
			</div>
		</div>
		</center></div>
</body>
</html>
