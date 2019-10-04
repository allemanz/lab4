<?php
$spider = $_POST['spider'];
$centipede = $_POST['centipede'];
$ant = $_POST['ant'];
$bee = $_POST['bee'];
$millipede = $_POST['millipede'];

echo "Your answers were: " . "<br>" . "<br>";
$score = 100;
echo "Question 1: How many legs does a spider have?" . "<br>";
echo "Your answer: " . $spider . "<br>" . "Correct Answer: 8" . "<br>". "<br>";
echo "Question 2: How many legs does a centipede have?" . "<br>";
echo "Your answer: " . $centipede . "<br>" . "Correct Answer: 100" . "<br>". "<br>";
echo "Question 3: How many legs does an ant have?" . "<br>";
echo "Your answer: " . $ant . "<br>" . "Correct Answer: 6" . "<br>". "<br>";
echo "Question 4: How many legs does a bee have?" . "<br>";
echo "Your answer: " . $bee . "<br>" . "Correct Answer: 6" . "<br>". "<br>";
echo "Question 2: How many legs does a millipede have?" . "<br>";
echo "Your answer: " . $millipede . "<br>" . "Correct Answer: 750" . "<br>". "<br>";
if($spider != 8)
{
  $score = $score - 20;
}
if($centipede != 100)
{
  $score = $score - 20;
}
if($ant != 6)
{
  $score = $score - 20;
}
if($bee != 6)
{
  $score = $score - 20;
}
if($millipede != 750)
{
  $score = $score - 20;
}
echo "You scored " . $score . "% on this quiz.";

?>
