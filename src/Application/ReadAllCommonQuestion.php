<?php

declare(strict_types=1);

namespace Application;

use Domain\WhQuestionRepository;

require_once("/xampp/htdocs/grammar/src/Domain/WhQuestionRepository.php");

class ReadAllCommonQuestion
{
    private $commonQuestionRepository;
    
    public function __construct(WhQuestionRepository $whQuestionRepository)
    {
        $this->commonQuestionRepository = $whQuestionRepository;
    }

    public function run()
    {
        return $this->commonQuestionRepository->getAllCommonQuestion();
    }
}