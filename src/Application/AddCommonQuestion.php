<?php

declare(strict_types=1);

namespace Application;

use Domain\WhQuestionRepository;

require_once("/xampp/htdocs/grammar/src/Domain/WhQuestionRepository.php");

class AddCommonQuestion
{
    private $commonQuestionRepository;
    
    public function __construct(WhQuestionRepository $whQuestionRepository)
    {
        $this->commonQuestionRepository = $whQuestionRepository;
    }
    public function AddCommonQuestion()
    {
        return $this->commonQuestionRepository->addCommonQuestion();
    }
}