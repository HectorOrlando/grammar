<?php

declare(strict_types=1);

use Infrastructure\Controllers\WqQuestionController;

require_once("/xampp/htdocs/grammar/src/view/layouts/header.php");
require_once("/xampp/htdocs/grammar/src/Infrastructure/Controllers/WqQuestionController.php");

$controller = new WqQuestionController();
$whQuestions = $controller->readAllWhQuestion();
?>

<h2 class="text-center">WHAT QUESTION</h2>