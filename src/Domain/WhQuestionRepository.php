<?php

declare(strict_types=1);

namespace Domain;

use Domain\WhQuestion;

interface WhQuestionRepository
{
    public function getAllWhQuestion(): array;
    public function addWhQuestion(): void;
}