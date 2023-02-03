<?php

declare(strict_types=1);

use Infrastructure\Controllers\WqQuestionController;

require_once("/xampp/htdocs/grammar/src/view/layouts/header.php");
require_once("/xampp/htdocs/grammar/src/Infrastructure/Controllers/WqQuestionController.php");

$controller = new WqQuestionController();
$commonQuestions = $controller->readAllCommonQuestions();
$size = count($commonQuestions);
$commonQuestions = $commonQuestions[rand(0, $size - 1)];
?>

<form>
    <h2 class="text-center">Common Question Id: <?= $commonQuestions->getId() ?> </h2>
    <div class="mb-3">
        <label for="exampleInputSpanish" class="form-label">Spanish Question</label>
        <input class="form-control" type="text" value="<?= $commonQuestions->getCommonQuestionsInSpanish() ?>" aria-label="readonly input example" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleInputEnglish" class="form-label">English Question</label>
        <!-- <input class="form-control form-control-sm" type="text" placeholder="<?= $commonQuestions->getCommonQuestions() ?>" aria-label=".form-control-sm example"> -->
        <input class="form-control form-control-sm" type="text" placeholder="Add Question" aria-label=".form-control-sm example">
    </div>
    <div class="mb-3">
        <label for="exampleInputEnglish" class="form-label">Response</label>
        <!-- <input class="form-control form-control-sm" type="text" placeholder="<?= $commonQuestions->getResponse() ?>" aria-label=".form-control-sm example"> -->
        <input class="form-control form-control-sm" type="text" placeholder="Add Response" aria-label=".form-control-sm example">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="table-responsive">
    <h2 class="text-center">Response</h2>
    <table class="table  align-middle table-dark">
        <thead>
            <tr class="table-dark align-bottom">
                <th scope="col">ID</th>
                <th scope="col">COMMON QUESTIONS IN SPANISH</th>
                <th scope="col">COMMON QUESTIONS</th>
                <th scope="col">RESPONSE</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-info align-bottom">
                <td scope="row" class="table-info"><?= $commonQuestions->getId() ?></td>
                <td class="table-info text-right"><?= $commonQuestions->getCommonQuestionsInSpanish() ?></td>
                <td class="table-info text-right"><?= $commonQuestions->getCommonQuestions() ?></td>
                <td class="table-info text-right"><?= $commonQuestions->getResponse() ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
require_once("/xampp/htdocs/grammar/src/view/layouts/footer.php");
?>