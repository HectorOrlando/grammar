<?php

declare(strict_types=1);

namespace Infrastructure\Repositories;

use Infrastructure\Connections\Mysql\Connection;
use Domain\WhQuestion;
use Domain\WhQuestionRepository;
use Domain\CommonQuestion;

require_once("/xampp/htdocs/grammar/src/Infrastructure/Connections/Mysql/Connection.php");
require_once("/xampp/htdocs/grammar/src/Domain/WhQuestion.php");
require_once("/xampp/htdocs/grammar/src/Domain/WhQuestionRepository.php");
require_once("/xampp/htdocs/grammar/src/Domain/CommonQuestion.php");

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

    public function getWhQuestionBySelect(string $select): array
    {
        $sql = "SELECT * FROM wh_question WHERE question_type = :select";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(":select", $select);
        $stmt->execute();
        $whQuestionList = $stmt->fetchAll();
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

    public function addWhQuestion(): void
    {
        // TRUNCATE TABLE wh_question;
        $add = $_GET['add'];
        if ($add) {
            /* Leer y recorrer el fichero */
            $csv = file('/xampp/htdocs/grammar/src/Infrastructure/Connections/Mysql/wh_question.csv');
            foreach ($csv as $value) {
                $line = str_getcsv($value, ",");
                $success = (int)$line[3];
                $failures = (int)$line[4];
                $sql = "INSERT INTO wh_question (question_type, name_in_english, name_in_spanish, success, failures, average) 
                        VALUES ('$line[0]','$line[1]','$line[2]',$success,$failures,'$line[5]')";
                // $this->PDO->query($sql);
                // TODO: LO COMENTO PARA NO VOLVER A MACHACAR LA TABLA.
            }
        }
        // BORRAR ESTO SI QUIERO LLENAR LA TABLA
        var_dump("Descomentar codigo para poder actualizar la tabla... en el archivo: MysqlGrammarRepository <hr>");
    }

    public function addCommonQuestion(): void
    {
        // TRUNCATE TABLE common_questions;
        $add = $_GET['add'];
        if ($add) {
            /* Leer y recorrer el fichero */
            $csv = file('/xampp/htdocs/grammar/src/Infrastructure/Connections/Mysql/common-questions.csv');
            foreach ($csv as $value) {
                $line = str_getcsv($value, ",");
                $sql = "INSERT INTO common_questions (common_questions_in_spanish, common_questions, response) 
                        VALUES ('$line[0]','$line[1]','$line[2]')";
                // $this->PDO->query($sql);
                // TODO: LO COMENTO PARA NO VOLVER A MACHACAR LA TABLA.
            }
        }
        // BORRAR ESTO SI QUIERO LLENAR LA TABLA
        var_dump("Descomentar codigo para poder actualizar la tabla... en el archivo: MysqlGrammarRepository <hr>");
    }

    public function getAllCommonQuestion(): array
    {
        $sql = "SELECT * FROM common_questions";
        $stm = $this->PDO->query($sql);
        $commonQuestionList = $stm->fetchAll();

        $whQuestions = [];
        foreach ($commonQuestionList as $commonQuestion) {
            $whQuestions[] = new CommonQuestion(
                $commonQuestion['id'],
                $commonQuestion['common_questions_in_spanish'],
                $commonQuestion['common_questions'],
                $commonQuestion['response']
            );
        }
        return $whQuestions;
    }
}
