<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repositories\MysqlGrammarRepository;
use Application\ReadAllWhQuestion;
use Application\ReadWhQuestionBySelect;
use Application\AddWhQuestion;
use Application\AddCommonQuestion;

require_once("/xampp/htdocs/grammar/src/Infrastructure/Repositories/MysqlGrammarRepository.php");
require_once("/xampp/htdocs/grammar/src/Application/ReadAllWhQuestion.php");
require_once("/xampp/htdocs/grammar/src/Application/ReadWhQuestionBySelect.php");
require_once("/xampp/htdocs/grammar/src/Application/AddWhQuestion.php");
require_once("/xampp/htdocs/grammar/src/Application/AddCommonQuestion.php");


class WqQuestionController
{
    private $whQuestionRepository;
    public function __construct()
    {
        $this->whQuestionRepository = new MysqlGrammarRepository();
    }

    public function readAllWhQuestion()
    {
        $readService = new ReadAllWhQuestion($this->whQuestionRepository);
        return $readService->getAllWhQuestion();
    }

    public function readWhQuestionBySelect()
    {
        $selectionType = $_POST["select"];
        $readService = new ReadWhQuestionBySelect($this->whQuestionRepository);
        return $readService->getWhQuestionBySelect($selectionType);
    }

    public function addWhQuestions()
    {
        $readService = new AddWhQuestion($this->whQuestionRepository);
        return $readService->addWhQuestion();
    }

    public function addCommonQuestions()
    {
        $readService = new AddCommonQuestion($this->whQuestionRepository);
        return $readService->AddCommonQuestion();
    }
}
