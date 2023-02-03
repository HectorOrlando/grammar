<?php

declare(strict_types=1);

namespace Domain;

class CommonQuestion
{
    private $id;
    private $common_questions_in_spanish;
    private $common_questions;
    private $response;

    public function __construct($id, $common_questions_in_spanish, $common_questions, $response)
    {
        $this->id = $id;
        $this->common_questions_in_spanish = $common_questions_in_spanish;
        $this->common_questions = $common_questions;
        $this->response = $response;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCommonQuestionsInSpanish()
    {
        return $this->common_questions_in_spanish;
    }

    public function getCommonQuestions()
    {
        return $this->common_questions;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public static function create($id, $common_questions_in_spanish, $common_questions, $response): CommonQuestion
    {
        return new CommonQuestion($id, $common_questions_in_spanish, $common_questions, $response);
    }
}
