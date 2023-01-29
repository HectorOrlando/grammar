<?php

declare(strict_types=1);

use Infrastructure\Controllers\WqQuestionController;

require_once("/xampp/htdocs/grammar/src/view/layouts/header.php");
require_once("/xampp/htdocs/grammar/src/Infrastructure/Controllers/WqQuestionController.php");

$controller = new WqQuestionController();
$whQuestions = $controller->readAllWhQuestion();
?>

<h2 class="text-center">WH QUESTION</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">QUESTION TYPE</th>
            <th scope="col">NAME IN ENGLISH</th>
            <th scope="col">NAME IN SPANISH</th>
            <th scope="col">SUCCESS</th>
            <th scope="col">FAILURES</th>
            <th scope="col">AVARAGE</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($whQuestions) : ?>
            <?php foreach ($whQuestions as $whQuestion) { ?>
                <tr>
                    <td scope="row"><?= $whQuestion->getId() ?></td>
                    <td><?= $whQuestion->getQuestionType() ?></td>
                    <td><?= $whQuestion->getNameInEnglish() ?></td>
                    <td><?= $whQuestion->getNameInSpanish() ?></td>
                    <td><?= $whQuestion->getSuccess() ?></td>
                    <td><?= $whQuestion->getFailures() ?></td>
                    <td><?= $whQuestion->getAvarage() ?></td>
                    <td>
                        <a class="btn btn-success" href="./show.php?id=<?= $whQuestion->getId() ?>">UPDATE</a>
                        <a class="btn btn-danger" href="./delete.php?id=<?= $whQuestion->getId() ?>">DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        <?php else : ?>
            <tr>
                <td colspan="5" class="text-center text-danger"><strong>
                        <h2>NO PRODUCTS</h2>
                    </strong></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("/xampp/htdocs/grammar/src/view/layouts/footer.php");
?>