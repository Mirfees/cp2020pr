<?php

namespace MirfeesFrameWork\Models\Stats;

use MirfeesFrameWork\Models\AbstractSkills\Skills;
use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\ActiveRecordEntity\ActiveRecordEntity;
use MirfeesFrameWork\Models\Characters\Character;
use MirfeesFrameWork\Services\Db;

class Stats extends AbstractSkills
{
    /**
     * @var int
     */
    protected $characterId;

    /**
     * @var int
     */
    protected $intelligence;

    /**
     * @var int
     */
    protected $reflex;

    /**
     * @var int
     */
    protected $technic;

    /**
     * @var int
     */
    protected $cool;

    /**
     * @var int
     */
    protected $attraction;

    /**
     * @var int
     */
    protected $lift;

    /**
     * @var int
     */
    protected $empathy;

    /**
     * @var int
     */
    protected $body;

    /**
     * @var int
     */
    protected $movement_allowance;

    /**
     * @var int
     */
    protected $run;

    /**
     * @var int
     */
    protected $leap;

    /**
     * @var int
     */
    protected $luck;

    public function getCharacterId(): int {
        return $this->characterId;
    }

    public function getIntelligence(): int {
        return $this->intelligence;
    }

    public function getReflex(): int {
        return $this->reflex;
    }

    public function getTechnic(): int {
        return $this->technic;
    }

    public function getCool(): int {
        return $this->cool;
    }

    public function getAttraction(): int {
        return $this->attraction;
    }

    public function getLift(): int {
        return $this->lift;
    }

    public function getEmpathy(): int {
        return $this->empathy;
    }

    public function getBody(): int {
        return $this->body;
    }

    public function getMovementAllowance(): int {
        return $this->movement_allowance;
    }

    public function getRun(): int {
        return $this->run;
    }

    public function getLeap(): int {
        return $this->leap;
    }

    public function getLuck(): int {
        return $this->luck;
    }

    public function setCharacterId(int $characterId): void {
        $this->characterId = $characterId;
    }

    public function setIntelligence(int $intelligence): void {
        $this->intelligence = $intelligence;
    }

    public function setReflex(int $reflex): void {
        $this->reflex = $reflex;
    }

    public function setTechnic(int $technic): void {
        $this->technic = $technic;
    }

    public function setCool(int $cool): void {
        $this->cool = $cool;
    }

    public function setAttraction(int $attraction): void {
        $this->attraction = $attraction;
    }

    public function setLift(int $lift): void {
        $this->lift = $lift;
    }

    public function setEmpathy(int $empathy): void {
        $this->empathy = $empathy;
    }

    public function setBody(int $body): void {
        $this->body = $body;
    }

    public function setMovementAllowance(int $movement_allowance): void {
        $this->movement_allowance = $movement_allowance;
    }

    public function setRun(int $run): void {
        $this->run = $run;
    }

    public function setLeap(int $leap): void {
        $this->leap = $leap;
    }

    public function setLuck(int $luck): void {
        $this->luck = $luck;
    }

    public static function createFromArray(array $fields, Character $character): Stats
    {
        extract($fields);

        $stats = new Stats();

        $stats->setCharacterId($character->getId());
        $stats->setBody($body);
        $stats->setCool($cool);
        $stats->setEmpathy($empathy);
        $stats->setAttraction($attraction);
        $stats->setLeap($leap);
        $stats->setLift($lift);
        $stats->setLuck($luck);
        $stats->setIntelligence($intelligence);
        $stats->setMovementAllowance($movement_allowance);
        $stats->setReflex($reflex);
        $stats->setRun($run);
        $stats->setTechnic($technic);

        $stats->save();

        return $stats;
    }

    public static function getTableName(): string
    {
        return 'stats';
    }
}
