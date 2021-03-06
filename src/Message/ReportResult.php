<?php

namespace App\Message;

class ReportResult
{
    public $game;
    public $leftScore;
    public $rightScore;

    public function __construct(
        string $game,
        int $leftScore,
        int $rightScore
    )
    {
        $this->game = $game;
        $this->leftScore = $leftScore;
        $this->rightScore = $rightScore;
    }
}
