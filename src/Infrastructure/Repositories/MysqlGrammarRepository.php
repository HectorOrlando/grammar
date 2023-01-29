<?php

declare(strict_types=1);

namespace Infrastructure\Repositories;

use Infrastructure\Connections\Mysql\Connection;
use Domain\WhQuestion;
use Domain\WhQuestionRepository;

require_once("/xampp/htdocs/grammar/src/Infrastructure/Connections/Mysql/Connection.php");
require_once("/xampp/htdocs/grammar/src/Domain/WhQuestion.php");
require_once("/xampp/htdocs/grammar/src/Domain/WhQuestionRepository.php");

class MysqlGrammarRepository implements WhQuestionRepository
{
    private $PDO;

    public function __construct()
    {
        $con = new Connection();
        $this->PDO = $con->connection();
    }

    public function getAllWhQuestion(): array
    {
        $sql = "SELECT * FROM wh_question";
        $stm = $this->PDO->query($sql);
        $whQuestionList = $stm->fetchAll();

        $whQuestions = [];
        foreach ($whQuestionList as $whQuestion) {
            $whQuestions[] = new WhQuestion(
                $whQuestion['id'],
                $whQuestion['question_type'],
                $whQuestion['name_in_english'],
                $whQuestion['name_in_spanish'],
                $whQuestion['success'],
                $whQuestion['failures'],
                $whQuestion['average']
            );
        }
        return $whQuestions;
    }
}
