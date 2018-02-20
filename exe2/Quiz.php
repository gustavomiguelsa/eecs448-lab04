<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$answer1 = (isset($_POST['answer1']) ? $_POST['answer1'] : null);
$answer2 = (isset($_POST['answer2']) ? $_POST['answer2'] : null);
$answer3 = (isset($_POST['answer3']) ? $_POST['answer3'] : null);
$answer4 = (isset($_POST['answer4']) ? $_POST['answer4'] : null);
$answer5 = (isset($_POST['answer5']) ? $_POST['answer5'] : null);


if (isset($_POST['submit'])) {

	$total = 0;

	echo "<p>Question 1: What is the capital of Portugal?</p>";
	echo "<p style='padding-left:2em'>You answered: " . $answer1 . "</p>";
	echo "<p style='padding-left:2em'>Correct answer: Lisbon</p>";

	echo "<p>Question 2: Which of the following is not a dog breed?</p>";
	echo "<p style='padding-left:2em'>You answered: " . $answer2 . "</p>";
	echo "<p style='padding-left:2em'>Correct answer: Monkey Face</p>";

	echo "<p>Question 3: Is Europe a continent?</p>";
	echo "<p style='padding-left:2em'>You answered: " . $answer3 . "</p>";
	echo "<p style='padding-left:2em'>Correct answer: Yes</p>";

	echo "<p>Question 4: Tweety bird tawt he taw a what?</p>";
	echo "<p style='padding-left:2em'>You answered: " . $answer4 . "</p>";
	echo "<p style='padding-left:2em'>Correct answer: He tawt he taw a Puddy Tat</p>";

	echo "<p>Question 5: Is this quiz awesome?</p>";
	echo "<p style='padding-left:2em'>You answered: " . $answer5 . "</p>";
	echo "<p style='padding-left:2em'>Correct answer: Yes</p>";

	if($answer1 == "Lisbon")
		$total++;

	if($answer2 == "Monkey Face")
		$total++;

	if($answer3 == "Yes")
		$total++;

	if($answer4 == "He tawt he taw a Puddy Tat")
		$total++;

	if($answer5 == "Yes")
		$total++;

	echo "<p>Total score (correct answers): " . $total . " out of 5</p>";
	echo "<p>Percentage score: " . 100*($total/5) . "%</p>";

}

//submission(){
	
//}

?>
