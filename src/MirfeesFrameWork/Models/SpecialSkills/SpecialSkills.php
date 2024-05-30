<?php

namespace MirfeesFrameWork\Models\SpecialSkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\Characters\Character;

class SpecialSkills extends AbstractSkills
{

    /**
     * @var int
     */
    protected int $authority;

    /**
     * @var int
     */
    protected int $charismatic_leadership;

    /**
     * @var int
     */
    protected int $combat_sense;

    /**
     * @var int
     */
    protected int $credibility;

    /**
     * @var int
     */
    protected int $family;

    /**
     * @var int
     */
    protected int $interface;

    /**
     * @var int
     */
    protected int $jury_rig;

    /**
     * @var int
     */
    protected int $medical_tech;

    /**
     * @var int
     */
    protected int $resources;

    /**
     * @var int
     */
    protected int $streetdeal;

    /**
     * @return int
     */
    public function getAuthority(): int
    {
        return $this->authority;
    }

    /**
     * @return int
     */
    public function getCharismaticLeadership(): int
    {
        return $this->charismatic_leadership;
    }

    /**
     * @return int
     */
    public function getCombatSense(): int
    {
        return $this->combat_sense;
    }

    /**
     * @return int
     */
    public function getCredibility(): int
    {
        return $this->credibility;
    }

    /**
     * @return int
     */
    public function getFamily(): int
    {
        return $this->family;
    }

    /**
     * @return int
     */
    public function getInterface(): int
    {
        return $this->interface;
    }

    /**
     * @return int
     */
    public function getJuryRig(): int
    {
        return $this->jury_rig;
    }

    /**
     * @return int
     */
    public function getMedicalTech(): int
    {
        return $this->medical_tech;
    }

    /**
     * @return int
     */
    public function getStreetdeal(): int
    {
        return $this->streetdeal;
    }

    /**
     * @return int
     */
    public function getResources(): int
    {
        return $this->resources;
    }

    /**
     * @param int $authority
     */
    public function setAuthority(int $authority): void
    {
        $this->authority = $authority;
    }

    /**
     * @param int $charismatic_leadership
     */
    public function setCharismaticLeadership(int $charismatic_leadership): void
    {
        $this->charismatic_leadership = $charismatic_leadership;
    }

    /**
     * @param int $combat_sense
     */
    public function setCombatSense(int $combat_sense): void
    {
        $this->combat_sense = $combat_sense;
    }

    /**
     * @param int $credibility
     */
    public function setCredibility(int $credibility): void
    {
        $this->credibility = $credibility;
    }

    /**
     * @param int $family
     */
    public function setFamily(int $family): void
    {
        $this->family = $family;
    }

    /**
     * @param int $interface
     */
    public function setInterface(int $interface): void
    {
        $this->interface = $interface;
    }

    /**
     * @param int $jury_rig
     */
    public function setJuryRig(int $jury_rig): void
    {
        $this->jury_rig = $jury_rig;
    }

    /**
     * @param int $medical_tech
     */
    public function setMedicalTech(int $medical_tech): void
    {
        $this->medical_tech = $medical_tech;
    }

    /**
     * @param int $resources
     */
    public function setResources(int $resources): void
    {
        $this->resources = $resources;
    }

    /**
     * @param int $streetdeal
     */
    public function setStreetdeal(int $streetdeal): void
    {
        $this->streetdeal = $streetdeal;
    }

    public static function createFromArray(array $fields, Character $character): static
    {
        extract($fields);

        $specialSkills = new SpecialSkills();

        $specialSkills->setCharacterId($character->getId());
        $specialSkills->setAuthority($authority);
        $specialSkills->setCharismaticLeadership($charismatic_leadership);
        $specialSkills->setCombatSense($combat_sense);
        $specialSkills->setFamily($family);
        $specialSkills->setInterface($interface);
        $specialSkills->setJuryRig($jury_rig);
        $specialSkills->setCredibility($credibility);
        $specialSkills->setMedicalTech($medical_tech);
        $specialSkills->setResources($resources);
        $specialSkills->setStreetdeal($streetdeal);

        $specialSkills->save();

        return $specialSkills;
    }

    public function updateFromArray(array $fields): static
    {
        extract($fields);

        $this->setAuthority($authority);
        $this->setCharismaticLeadership($charismatic_leadership);
        $this->setCombatSense($combat_sense);
        $this->setFamily($family);
        $this->setInterface($interface);
        $this->setJuryRig($jury_rig);
        $this->setCredibility($credibility);
        $this->setMedicalTech($medical_tech);
        $this->setResources($resources);
        $this->setStreetdeal($streetdeal);

        $this->save();

        return $this;
    }

    protected static function getTableName(): string
    {
        return 'special_skills';
    }
}