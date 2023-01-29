<?php

declare(strict_types=1);

namespace Domain;

class WhQuestion
{
    private $id;
    private $question_type;
    private $name_in_english;
    private $name_in_spanish;
    private $success;
    private $failures;
    private $average;

    public function __construct($id, $question_type, $name_in_english , $name_in_spanish , $success , $failures, $average)
    {
        $this->id = $id;
        $this->question_type = $question_type;
        $this->name_in_english = $name_in_english;
        $this->name_in_spanish = $name_in_spanish;
        $this->success = $success;
        $this->failures = $failures;
        $this->average = $average;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuestionType()
    {
        return $this->question_type;
    }

    public function getNameInEnglish()
    {
        return $this->name_in_english;
    }

    public function getNameInSpanish()
    {
        return $this->name_in_spanish;
    }

    public function getSuccess()
    {
        return $this->success;
    }

    public function getFailures()
    {
        return $this->failures;
    }

    public function getAvarage()
    {
        return $this->average;
    }

    public static function create($id, $question_type, $name_in_english , $name_in_spanish , $success , $failures, $average): WhQuestion
    {
        return new WhQuestion($id, $question_type, $name_in_english , $name_in_spanish , $success , $failures, $average);
    }

}