<?php

namespace MirfeesFrameWork\Models\BodySkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\Characters\Character;

class BodySkills extends AbstractSkills
{

    /**
     * @var int
     */
    protected int $endurance;

    /**
     * @var int
     */
    protected int $strengthFeat;

    /**
     * @var int
     */
    protected int $swimming;

    public function getEndurance(): int
    {
        return $this->endurance;
    }

    public function getStrengthFeat(): int
    {
        return $this->strengthFeat;
    }

    public function getSwimming(): int
    {
        return $this->swimming;
    }

    /**
     * @param int $endurance
     */
    public function setEndurance(int $endurance): void
    {
        $this->endurance = $endurance;
    }

    /**
     * @param int $strengthFeat
     */
    public function setStrengthFeat(int $strengthFeat): void
    {
        $this->strengthFeat = $strengthFeat;
    }

    /**
     * @param int $swimming
     */
    public function setSwimming(int $swimming): void
    {
        $this->swimming = $swimming;
    }

    public static function createFromArray(array $fields, Character $character): static
    {
        extract($fields);

        $bodySkills = new BodySkills();

        $bodySkills->setCharacterId($character->getId());
        $bodySkills->setEndurance($endurance);
        $bodySkills->setStrengthFeat($strength_feat);
        $bodySkills->setSwimming($swimming);

        $bodySkills->save();

        return $bodySkills;
    }

    public function updateFromArray(array $fields): static
    {
        extract($fields);

        $this->setEndurance($endurance);
        $this->setStrengthFeat($strength_feat);
        $this->setSwimming($swimming);

        $this->save();

        return $this;
    }


    protected static function getTableName(): string
    {
        return 'body_skills';
    }
}