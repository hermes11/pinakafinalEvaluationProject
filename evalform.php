<html>  
    <head>  
        <title>excel evaluation system</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		
    </head>  

    <body style="background-color:beige;">  

    	<center><h1 style="color:darkgreen;">Excel Training Skills and Career Center Inc.</h1>
    	<table style="width: 700px; border: 0;" cellpadding="4" cellspacing="0">
<tr> <td colspan="2">
<br />
</td> </tr> <tr> <td colspan="2">

</td> </tr> <tr> <td>
<label for="Instructorname">Instructor Name:</label>
<select class="nobox" name="instructor"  maxlength="100" style="width: 300px;" />
<option></option>
<option value="option">Sir Jonathan Estacio</option>
<option>Ma'am Sharon Cuneta</option>
<option>Ma'am Maliit na Bata</option>
</select>
</td> <td>
	<label for="StudentName">Date:</label>
<input  class="nobox" name="date" type="date" maxlength="100" style="width: 300px;" />
</td> </tr> <tr><td>

<label for="Course">Course Teaching:</label>
<select  class="nobox" name="Course"  maxlength="100" style="width: 300px;" />
<option></option>
<option value="option">Web Development</option>
<option value="Creative Web Design Level 3">Creative Web Design Level 3</option>
</select>
</td><td>

<label for="Schedule">Schedule:</label>
<select  class="nobox" name="Schedule" type="text" maxlength="100" style="width: 300px;" />
<option></option>
<option>Mon-fri / 8am - 5pm</option>
</td></tr>
<br><table></center>
        <div class="container">  
            <br />  
            <br />
			<br />
			<h3 align="center" style="color:red; font-size:25px;">QUESTIONS ABOUT INSTRUCTOR</h3><br />
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="q2_form">
						<h3 style="color:darkblue;">1. Does s/he start his/her class on time?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q2_option" class="q2_option" value="Strongly Satisfied" />  Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q2_button" id="q2_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q2_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>
		<hr>
 <div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q1_form">
						<h3 style="color:darkblue;">2. Does s/he carry him/her self well? Is s/he groomed and properly attired</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q1_option" class="q1_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q1_button" id="q1_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q1_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>
<hr>
<div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q3_form">
						<h3 style="color:darkblue;">3. Does s/he have clear and audible voice?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q3_option" class="q3_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q3_button" id="q3_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q3_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>
		<hr>
<div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q4_form">
						<h3 style="color:darkblue;">4. Does s/he attend classes regulary?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q4_option" class="q4_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q4_button" id="q4_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q4_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>

		<hr>
<div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q5_form">
						<h3 style="color:darkblue;">5. Does s/he move around to assist each student during activities/laboratory?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q5_option" class="q5_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q5_button" id="q5_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q5_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>

		<hr>
<div class="container">  
           
			<h2 align="center"></h2><br />
		<div class="row">
				<div class="col-md-6">
					<form method="post" id="q6_form">
						<h3 style="color:darkblue;">6. Does s/he accomodate participant's questions patiently?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Strongly Dissatisfied" /> Strongly Dissatisfied</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Dissatisfied" /> Dissatisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Neutral" /> Neutral</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Satisfied" /> Satisfied</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="q6_option" class="q6_option" value="Strongly Satisfied" /> Strongly Satisfied</h4></label>
						</div>
						<br />
						<input type="submit" name="q6_button" id="q6_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q6_result"></div>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>
		<hr>
		     <br />  
            <br />
			<br />
			<h3 align="center" style="color:red; font-size:25px;">TRAINING QUESTIONS</h3><br />
			 <div class="container">  
           
			<h2 align="center"></h2><br />
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="q7_form">
						<h3 style="color:darkblue;">1. Are the materials and equipment available befores/he starts the class?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q7_option" class="q7_option" value="YES" />Yes</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q7_option" class="q7_option" value="NO" />No</h4></label>
						</div>
						
						<br />
						<input type="submit" name="q7_button" id="q7_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q7_result"></div>
				</div>
			</div>
			</div>
			
			<br />
			<br />
			<br />
		</div>
		<hr>
		     <br />  
            <br />
			<br />
			 <div class="container">  
           
			<h2 align="center"></h2><br />
		
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="q8_form">
						<h3 style="color:darkblue;">2. Are the printed learning materials clear, up-to-date and well organized?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q8_option" class="q8_option" value="YES" />Yes</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q8_option" class="q8_option" value="NO" />No</h4></label>
						</div>
						
						<br />
						<input type="submit" name="q8_button" id="q8_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q8_result"></div>
				</div>
			</div>
			</div>
			
			<br />
			<br />
			<br />
		</div>

		<hr>
		     <br />  
            <br />
			<br />
			 <div class="container">  
           
			<h2 align="center"></h2><br />
		
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="q9_form">
						<h3 style="color:darkblue;">3. Do you feel adequately prepared to complete the exercises based on the lecture?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q9_option" class="q9_option" value="YES" />Yes</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q9_option" class="q9_option" value="NO" />No</h4></label>
						</div>
						
						<br />
						<input type="submit" name="q9_button" id="q9_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q9_result"></div>
				</div>
			</div>
		</div>
			
			
			<br />
			<br />
			<br />
		</div>
		<hr>
		     <br />  
            <br />
			<br />
		 <div class="container">  
           
			<h2 align="center"></h2><br />
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="q10_form">
						<h3 style="color:darkblue;">4. Do you have enough time to complete each activity without feeling rushed?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q10_option" class="q10_option" value="YES" />Yes</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q10_option" class="q10_option" value="NO" />No</h4></label>
						</div>
						
						<br />
						<input type="submit" name="q10_button" id="q10_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q10_result"></div>
				</div>
			</div>
			
			</div>
			<br />
			<br />
			<br />
		</div>
		<hr>
		     <br />  
            <br />
			<br />
			 <div class="container">  
           
			<h2 align="center"></h2><br />
		
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="q11_form">
						<h3 style="color:darkblue;">5. Do the exercises help you to illustrate the lecture topics?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q11_option" class="q11_option" value="YES" />Yes</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q11_option" class="q11_option" value="NO" />No</h4></label>
						</div>
						
						<br />
						<input type="submit" name="q11_button" id="q11_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q11_result"></div>
				</div>
			</div>
			
			</div>
			<br />
			<br />
			<br />
		</div>
		<hr>
		     <br />  
            <br />
			<br />
			 <div class="container">  
           
			<h2 align="center"></h2><br />
		
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="q12_form">
						<h3 style="color:darkblue;">6. Are you satisfied with the training?</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="q12_option" class="q12_option" value="YES" />Yes</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="q12_option" class="q12_option" value="NO" />No</h4></label>
						</div>
						
						<br />
						<input type="submit" name="q12_button" id="q12_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4 style="color:orange;">EVALUATION RESULT</h4><br />
					<div id="q12_result"></div>
				</div>
			</div>
			</div>
			
			<br />
			<br />
			<br />
		</div>

		<hr>
		<h3 align="center" style="color:purple; font-size:25px;">ADDITIONAL COMMENTS and SUGGESTIONS</h3><br><br>
<div class="container">
	<div class="col-md-6">

<label><span  style="position: left; color:cyan;">Comments: </span></label>
<textarea style="margin-right:5%; background-color:silver" name="WhatDistinguishes" rows="7" cols="40" style="width: 200px; height:30px;"></textarea>
</div>
<div class="col-md-6">

<label><span  style="position: left; color:cyan;">Suggestions: </span></label>
<textarea style="margin-right:5%; background-color:silver" name="WhatDistinguishes" rows="7" cols="40" style="width: 200px; height:30px;"></textarea>
</div>
</div>
<br><br>
    </body>  
</html>  
<script>  
$(document).ready(function(){
	
	fetch_q2_data();
	function fetch_q2_data()
	{
		$.ajax({
			url:"fetch_q2_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q2_result').html(data);
			}
		});
	}
	
	$('#q2_form').on('submit', function(event){
		event.preventDefault();
		var q2_option = '';
		$('.q2_option').each(function(){
			if($(this).prop("checked"))
			{
				q2_option = $(this).val();
			}
		});
		if(q2_option != '')
		{
			$('#q2_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q2_form')[0].reset();
					$('#q2_button').attr('disabled', false);
					fetch_q2_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q1_data();
	function fetch_q1_data()
	{
		$.ajax({
			url:"fetch_q1_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q1_result').html(data);
			}
		});
	}
	
	$('#q1_form').on('submit', function(event){
		event.preventDefault();
		var q1_option = '';
		$('.q1_option').each(function(){
			if($(this).prop("checked"))
			{
				q1_option = $(this).val();
			}
		});
		if(q1_option != '')
		{
			$('#q1_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q1_form')[0].reset();
					$('#q1_button').attr('disabled', false);
					fetch_q1_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q3_data();
	function fetch_q3_data()
	{
		$.ajax({
			url:"fetch_q3_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q3_result').html(data);
			}
		});
	}
	
	$('#q3_form').on('submit', function(event){
		event.preventDefault();
		var q3_option = '';
		$('.q3_option').each(function(){
			if($(this).prop("checked"))
			{
				q3_option = $(this).val();
			}
		});
		if(q3_option != '')
		{
			$('#q3_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q3_form')[0].reset();
					$('#q3_button').attr('disabled', false);
					fetch_q3_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q4_data();
	function fetch_q4_data()
	{
		$.ajax({
			url:"fetch_q4_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q4_result').html(data);
			}
		});
	}
	
	$('#q4_form').on('submit', function(event){
		event.preventDefault();
		var q4_option = '';
		$('.q4_option').each(function(){
			if($(this).prop("checked"))
			{
				q4_option = $(this).val();
			}
		});
		if(q4_option != '')
		{
			$('#q4_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q4_form')[0].reset();
					$('#q4_button').attr('disabled', false);
					fetch_q4_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q5_data();
	function fetch_q5_data()
	{
		$.ajax({
			url:"fetch_q5_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q5_result').html(data);
			}
		});
	}
	
	$('#q5_form').on('submit', function(event){
		event.preventDefault();
		var q5_option = '';
		$('.q5_option').each(function(){
			if($(this).prop("checked"))
			{
				q5_option = $(this).val();
			}
		});
		if(q5_option != '')
		{
			$('#q5_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q5_form')[0].reset();
					$('#q5_button').attr('disabled', false);
					fetch_q5_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q6_data();
	function fetch_q6_data()
	{
		$.ajax({
			url:"fetch_q6_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q6_result').html(data);
			}
		});
	}
	
	$('#q6_form').on('submit', function(event){
		event.preventDefault();
		var q6_option = '';
		$('.q6_option').each(function(){
			if($(this).prop("checked"))
			{
				q6_option = $(this).val();
			}
		});
		if(q6_option != '')
		{
			$('#q6_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q6_form')[0].reset();
					$('#q6_button').attr('disabled', false);
					fetch_q6_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>
<script>  
$(document).ready(function(){
	
	fetch_q7_data();
	function fetch_q7_data()
	{
		$.ajax({
			url:"fetch_q7_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q7_result').html(data);
			}
		});
	}
	
	$('#q7_form').on('submit', function(event){
		event.preventDefault();
		var q7_option = '';
		$('.q7_option').each(function(){
			if($(this).prop("checked"))
			{
				q7_option = $(this).val();
			}
		});
		if(q7_option != '')
		{
			$('#q7_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q7_form')[0].reset();
					$('#q7_button').attr('disabled', false);
					fetch_q7_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>
<script>  
$(document).ready(function(){
	
	fetch_q8_data();
	function fetch_q8_data()
	{
		$.ajax({
			url:"fetch_q8_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q8_result').html(data);
			}
		});
	}
	
	$('#q8_form').on('submit', function(event){
		event.preventDefault();
		var q8_option = '';
		$('.q8_option').each(function(){
			if($(this).prop("checked"))
			{
				q8_option = $(this).val();
			}
		});
		if(q8_option != '')
		{
			$('#q8_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q8_form')[0].reset();
					$('#q8_button').attr('disabled', false);
					fetch_q8_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>
<script>  
$(document).ready(function(){
	
	fetch_q9_data();
	function fetch_q9_data()
	{
		$.ajax({
			url:"fetch_q9_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q9_result').html(data);
			}
		});
	}
	
	$('#q9_form').on('submit', function(event){
		event.preventDefault();
		var q9_option = '';
		$('.q9_option').each(function(){
			if($(this).prop("checked"))
			{
				q9_option = $(this).val();
			}
		});
		if(q9_option != '')
		{
			$('#q9_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q9_form')[0].reset();
					$('#q9_button').attr('disabled', false);
					fetch_q9_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>

<script>  
$(document).ready(function(){
	
	fetch_q10_data();
	function fetch_q10_data()
	{
		$.ajax({
			url:"fetch_q10_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q10_result').html(data);
			}
		});
	}
	
	$('#q10_form').on('submit', function(event){
		event.preventDefault();
		var q10_option = '';
		$('.q10_option').each(function(){
			if($(this).prop("checked"))
			{
				q10_option = $(this).val();
			}
		});
		if(q10_option != '')
		{
			$('#q10_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q10_form')[0].reset();
					$('#q10_button').attr('disabled', false);
					fetch_q10_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>
<script>  
$(document).ready(function(){
	
	fetch_q11_data();
	function fetch_q11_data()
	{
		$.ajax({
			url:"fetch_q11_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q11_result').html(data);
			}
		});
	}
	
	$('#q11_form').on('submit', function(event){
		event.preventDefault();
		var q11_option = '';
		$('.q11_option').each(function(){
			if($(this).prop("checked"))
			{
				q11_option = $(this).val();
			}
		});
		if(q11_option != '')
		{
			$('#q11_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q11_form')[0].reset();
					$('#q11_button').attr('disabled', false);
					fetch_q11_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>
<script>  
$(document).ready(function(){
	
	fetch_q12_data();
	function fetch_q12_data()
	{
		$.ajax({
			url:"fetch_q12_data.php",
			method:"POST",
			success:function(data)
			{
				$('#q12_result').html(data);
			}
		});
	}
	
	$('#q12_form').on('submit', function(event){
		event.preventDefault();
		var q12_option = '';
		$('.q12_option').each(function(){
			if($(this).prop("checked"))
			{
				q12_option = $(this).val();
			}
		});
		if(q12_option != '')
		{
			$('#q12_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#q12_form')[0].reset();
					$('#q12_button').attr('disabled', false);
					fetch_q12_data();
					alert("Choice Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>







