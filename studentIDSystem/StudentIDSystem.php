<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Student ID System</title>
</head>
<body>
	<div class="wrapper">
		<div class="title">Student ID System</div>
		<form class="form" action="" method="GET">

			<!--Student's Information-->

			<div class="sub-title">Student Information</div>
			<div class="inputfield">
				<label>First Name</label>
				<input type="text" class="input" name="firstname" maxlength="15" placeholder="Enter your First Name" required>
			</div>
			<div class="inputfield">
				<label>Middle Initial</label>
				<input type="text" class="input" name="middlein" maxlength="1" placeholder="Enter your Middle Initial" required>
			</div>
			<div class="inputfield">
				<label>Surname</label>
				<input type="text" class="input" name="surname" maxlength="15" placeholder="Enter your Surname" required>
			</div>
			<div class="inputfield">
	            <label>ID Number (include dashes)</label>
	            <input type="text" class="input" name="idnum" minlength="11" maxlength="11" placeholder="Enter your ID Number" required>
	        </div>

	        <div class="inputfield">
	        	<label>Course</label>
	            <div class="custom_select">
            		<select name="course" required>
				        <optgroup label="College Information Technology and Computer Science">
				        	<option value="" disabled selected hidden>Select Course</option>
				        	<option value="act">Associate in Computer Technology</option>
					        <option value="bsit">Bachelor of Science in Information Technology</option>
					        <option value="bscs">Bachelor of Science in Computer Science</option>
					        <option value="bsda">Bachelor of Science in Data Analytics</option>
					        <option value="blis">Bachelor of Library and Information Science</option>
				    	</optgroup>
            		</select>
          		</div>
	        </div>

	        <div class="inputfield">
          		<label>Address</label>
          		<textarea name="address" class="textarea" maxlength="125" required></textarea>
       		</div> 

       		<!--Contact Person Information-->

       		<div class="sub-title">Contact Information</div>
	        <div class="inputfield">
				<label>Contact Person</label>
				<input type="text" class="input" name="contactper" maxlength="30" placeholder="Enter Full Name" required>
			</div>

			<div class="inputfield">
	        	<label>Relationship</label>
	            <div class="custom_select">
            		<select name="relationship" required>
				        <optgroup label="Family Relationship">
				        	<option value="" disabled selected hidden>Select Relationship</option>
				        	<option value="grandfather">Grandfather</option>
					        <option value="grandmother">Grandmother</option>
					        <option value="father">Father</option>
					        <option value="mother">Mother</option>
					        <option value="aunt">Uncle</option>
					        <option value="aunt">Aunt</option>
				    	</optgroup>
            		</select>
          		</div>
	        </div>

	        <div class="inputfield">
	            <label>Contact Number</label>
	            <input type="text" class="input" name="contactnum" minlength="11" maxlength="11" placeholder="Enter Contact Number" required>
	        </div>
	        
	        <!--Submit-->

			<div class="inputfield">
	          	<input type="submit" class="btn" value="Submit">
	        </div>
		</form>
	</div>



	<?php
	$course = filter_input(INPUT_GET, 'course', FILTER_SANITIZE_STRING);
	$relationship = filter_input(INPUT_GET, 'relationship', FILTER_SANITIZE_STRING);

	if(!empty($_GET)){
	    $student = [];
	    $student['First_Name'] = $_GET['firstname'];
	    $student['Middle_Initial'] = $_GET['middlein'];
	    $student['Surname'] = $_GET['surname'];
	    $student['ID_Number'] = $_GET['idnum'];
	    $student['Course'] = $course;
	    $student['Address'] = $_GET['address'];
	    $student['Contact_Person'] = $_GET['contactper'];
	    $student['Relationship'] = $relationship;
	    $student['Contact_Number'] = $_GET['contactnum'];
    
	    $studentArray = [];
	    array_push($studentArray, $student);
	    $str = print_r($studentArray, true);
	    file_put_contents('student.txt', $str, FILE_APPEND);
	}
	?>
</body>
</html>
