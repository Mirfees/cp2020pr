<?php

namespace MirfeesFrameWork\Models\CoolSkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\Characters\Character;

class CoolSkills extends AbstractSkills
{

    /**
     * @var int
     */
    protected int $interrogation;

    /**
     * @var int
     */
    protected int $intimidate;

    /**
     * @var int
     */
    protected int $oratory;

    /**
     * @var int
     */
    protected int $resist_to_drugs;

    /**
     * @var int
     */
    protected int $streetwise;

    /**
     * @return int
     */
    public function getInterrogation(): int
    {
        return $this->interrogation;
    }

    /**
     * @return int
     */
    public function getIntimidate(): int
    {
        return $this->intimidate;
    }

    /**
     * @return int
     */
    public function getOratory(): int
    {
        return $this->oratory;
    }

    /**
     * @return int
     */
    public function getResistToDrugs(): int
    {
        return $this->resist_to_drugs;
    }

    /**
     * @return int
     */
    public function getStreetwise(): int
    {
        return $this->streetwise;
    }

    /**
     * @param int $interrogation
     */
    public function setInterrogation(int $interrogation): void
    {
        $this->interrogation = $interrogation;
    }

    /**
     * @param int $intimidate
     */
    public function setIntimidate(int $intimidate): void
    {
        $this->intimidate = $intimidate;
    }

    /**
     * @param int $oratory
     */
    public function setOratory(int $oratory): void
    {
        $this->oratory = $oratory;
    }

    /**
     * @param int $resist_to_drugs
     */
    public function setResistToDrugs(int $resist_to_drugs): void
    {
        $this->resist_to_drugs = $resist_to_drugs;
    }

    /**
     * @param int $streetwise
     */
    public function setStreetwise(int $streetwise): void
    {
        $this->streetwise = $streetwise;
    }

    public static function createFromArray(array $fields, Character $character): static
    {
        extract($fields);

        $coolSkills = new CoolSkills();

        $coolSkills->setCharacterId($character->getId());
        $coolSkills->setInterrogation($interrogation);
        $coolSkills->setIntimidate($intimidate);
        $coolSkills->setOratory($oratoty);
        $coolSkills->setResistToDrugs($resist_to_drugs);
        $coolSkills->setStreetwise($streetwise);

        $coolSkills->save();

        return $coolSkills;
    }

    public function updateFromArray(array $fields): static
    {
        extract($fields);

        $this->setInterrogation($interrogation);
        $this->setIntimidate($intimidate);
        $this->setOratory($oratoty);
        $this->setResistToDrugs($resist_to_drugs);
        $this->setStreetwise($streetwise);

        $this->save();

        return $this;
    }

    protected static function getTableName(): string
    {
        return 'cool_skills';
    }
}