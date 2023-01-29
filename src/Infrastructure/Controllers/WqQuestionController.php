<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repositories\MysqlGrammarRepository;
use Application\ReadAllWhQuestion;
use Application\AddWhQuestion;

require_once("/xampp/htdocs/grammar/src/Infrastructure/Repositories/MysqlGrammarRepository.php");
require_once("/xampp/htdocs/grammar/src/Application/ReadAllWhQuestion.php");
require_once("/xampp/htdocs/grammar/src/Application/AddWhQuestion.php");

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

    public function addWhQuestions()
    {
        $readService = new AddWhQuestion($this->whQuestionRepository);
        return $readService->addWhQuestion();
    }
}
