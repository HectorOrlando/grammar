<?php

declare(strict_types=1);

namespace Application;

use Domain\WhQuestionRepository;

require_once("/xampp/htdocs/grammar/src/Domain/WhQuestionRepository.php");

class ReadAllWhQuestion
{
    private $whQuestionRepository;
    public function __construct(WhQuestionRepository $whQuestionRepository)
    {
        $this->whQuestionRepository = $whQuestionRepository;
    }

    public function getAllWhQuestion()
    {
        return $this->whQuestionRepository->getAllWhQuestion();
    }
}