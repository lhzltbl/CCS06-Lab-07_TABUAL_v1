<?php

require "vendor/autoload.php";

session_start();

// 4.

use App\QuestionManager;

$score = null;
try {
    $manager = new QuestionManager;
    $manager->initialize();

    $_SESSION["answers"]=$_POST;

    if (!isset($_SESSION['answers'])) {
        throw new Exception('Missing answers');
    }
    $score = $manager->computeScore($_SESSION['answers']);
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
</head>
<body>

<h1>Thank You</h1>

<p style="color: gray">
    You've completed the exam.
</p>

<h3>
    Congratulations, <?php echo $_SESSION['user_fullname']; ?> (<?php echo $_SESSION['user_email']; ?>)! <br>
    Score: <mark class="score"><?php echo $score; ?></mark> out of <?php echo $manager->getQuestionSize();?> <br>
</h3>

Your answers: <br>

<?php $ex = $manager->Question($_SESSION["answers"]);?>

</body>
</html>

<!-- DEBUG MODE 
<pre>
<?php
var_dump($_SESSION);
?>
</pre>
-->