<?php

namespace MirfeesFrameWork\Models\EmpathySkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\Characters\Character;

class EmpathySkills extends AbstractSkills
{
    /**
     * @var int
     */
    protected int $humanPerception;

    /**
     * @var int
     */
    protected int $interview;

    /**
     * @var int
     */
    protected int $leadership;

    /**
     * @var int
     */
    protected int $seduction;

    /**
     * @var int
     */
    protected int $social;

    /**
     * @var int
     */
    protected int $persuasionFastTalk;

    /**
     * @var int
     */
    protected int $perform;

    /**
     * @return int
     */
    public function getHumanPerception(): int
    {
        return $this->humanPerception;
    }

    /**
     * @return int
     */
    public function getInterview(): int
    {
        return $this->interview;
    }

    /**
     * @return int
     */
    public function getLeadership(): int
    {
        return $this->leadership;
    }

    /**
     * @return int
     */
    public function getSeduction(): int
    {
        return $this->seduction;
    }

    /**
     * @return int
     */
    public function getSocial(): int
    {
        return $this->social;
    }

    /**
     * @return int
     */
    public function getPersuasionFastTalk(): int
    {
        return $this->persuasionFastTalk;
    }

    /**
     * @return int
     */
    public function getPerform(): int
    {
        return $this->perform;
    }

    /**
     * @param int $humanPerception
     */
    public function setHumanPerception(int $humanPerception): void
    {
        $this->humanPerception = $humanPerception;
    }

    /**
     * @param int $interview
     */
    public function setInterview(int $interview): void
    {
        $this->interview = $interview;
    }

    /**
     * @param int $leadership
     */
    public function setLeadership(int $leadership): void
    {
        $this->leadership = $leadership;
    }

    /**
     * @param int $seduction
     */
    public function setSeduction(int $seduction): void
    {
        $this->seduction = $seduction;
    }

    /**
     * @param int $social
     */
    public function setSocial(int $social): void
    {
        $this->social = $social;
    }

    /**
     * @param int $persuasionFastTalk
     */
    public function setPersuasionFastTalk(int $persuasionFastTalk): void
    {
        $this->persuasionFastTalk = $persuasionFastTalk;
    }

    /**
     * @param int $perform
     */
    public function setPerform(int $perform): void
    {
        $this->perform = $perform;
    }

    public static function createFromArray(array $fields, Character $character): static
    {
        extract($fields);

        $empathySkills = new EmpathySkills();

        $empathySkills->setCharacterId($character->getId());
        $empathySkills->setHumanPerception($human_perception);
        $empathySkills->setInterview($interview);
        $empathySkills->setLeadership($leadership);
        $empathySkills->setSeduction($seduction);
        $empathySkills->setSocial($social);
        $empathySkills->setPersuasionFastTalk($persuasion_fast_talk);
        $empathySkills->setPerform($perform);

        $empathySkills->save();

        return $empathySkills;
    }

    public function updateFromArray(array $fields): static
    {
        extract($fields);

        $this->setHumanPerception($human_perception);
        $this->setInterview($interview);
        $this->setLeadership($leadership);
        $this->setSeduction($seduction);
        $this->setSocial($social);
        $this->setPersuasionFastTalk($persuasion_fast_talk);
        $this->setPerform($perform);

        $this->save();

        return $this;
    }

    protected static function getTableName(): string
    {
        return 'empathy_skills';
    }
}