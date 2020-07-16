<?php 
include('quiz_me.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

	<div class="home-box custom-box">
		<p>
		<strong><h2>Test Process for Learner’s license test in India</h2></strong> <br>
The basic test process for getting a learner’s license is mostly the same as above. You as a learner needs to appear for an online exam if the online driving license application is made or a written test that will measure your acquaintance about the traffic rules and safety symbols. Important points to note here as below:
<ol><br>
<li>You to be present at the test venue minimum half an hour before the chosen slot</li><br>
<li>Generally, RTOs gives a printed notice having vital points on the rules and various signals on which they will be tested</li><br>
<li>Submission of the confirmation slip at the designated counter is needed to be done by you with the payment for the test</li><br>
<li>If you are unable to pass the test, you can repeat the test after a week</li><br>
<li>You may apply for a Driving License 30 days post the date of issue of the Learner’s License. The application for permanent Driving License needs to be filed within 180 days of the date of issue of the Learner’s License as mentioned above.</li>
</ol>
	</p>
		<h3><strong> <br>Instruction:</strong></h3>
		<p>Total number of questions: <span class="total-question"></span><br><br>

			<?php 
				if (isset($_SESSION['username'])) : ?>
					Hey,<strong> 
                    <?php echo $_SESSION['username']; ?> 
                </strong> Practice yourself for pre-driving licence test:<br>
             <?php endif ?> 

             Score more than <strong>9 marks</strong> to get preapare for your Learning-licence Test: 
		</p>

		<button type="button" class="btn" onclick="startQuiz()">Start Quiz</button>
	</div>
	
	<div class="quiz-box custom-box hide">
		<div class="question-number">

		</div>
		<div class="question-text">

		</div>
		<div class="option-container">
			
		</div>
		<div class="next-question-btn">
			<button type="button" class="btn" onclick="next()">Next</button>
		</div>
		<div class="answers-indicator">
			
		</div>
	</div>
	<div class="result-box custom-box hide">
		<h1>Quiz Result</h1>
		<table>
			<tr>
				<td>Total Questions</td>
				<td><span class="total-question"></span></td>
			</tr>
			<tr>
				<td>Attempt</td>
				<td><span class="total-attempt"></span></td>
			</tr>
			<tr>
				<td>Correct</td>
				<td><span class="total-correct"></span></td>
			</tr>
			<tr>
				<td>Incorrect</td>
				<td><span class="total-wrong"></span></td>
			</tr>
			<tr>
				<td>Percentage</td>
				<td><span class="percentage"></span></td>
			</tr>
			<tr>
				<td>Your Total Score</td>
				<td><span class="total-score"></span></td>
			</tr>
		</table>
		<button type="button" class="btn" onclick="tryAgainQuiz()">Try Again</button>
		<a href="welcome.php"><button type="button" class="btn">Go to Home</button></a>
	</div>
	
	
<script src="js/questions.js"></script>	
<script src="js/app.js"></script>	
</body>
</html>