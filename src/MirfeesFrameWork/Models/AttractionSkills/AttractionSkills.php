<?php

namespace MirfeesFrameWork\Models\AttractionSkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\Characters\Character;

class AttractionSkills extends AbstractSkills
{

    /**
     * @var int
     */
    protected $personalGrooming;

    /**
     * @var int
     */
    protected $wardrobeStyle;

    public function getPersonalGrooming(): int
    {
        return $this->personalGrooming;
    }

    public function getWardrobeStyle(): int
    {
        return $this->wardrobeStyle;
    }

    public function setPersonalGrooming(int $personalGrooming): void
    {
        $this->personalGrooming = $personalGrooming;
    }

    public function setWardrobeStyle(int $wardrobeStyle): void
    {
        $this->wardrobeStyle = $wardrobeStyle;
    }

    public static function createFromArray(array $fields, Character $character): static
    {
        extract($fields);

        $attractionSkills = new AttractionSkills();

        $attractionSkills->setCharacterId($character->getId());
        $attractionSkills->setPersonalGrooming($personal_grooming);
        $attractionSkills->setWardrobeStyle($wardrobe_style);

        $attractionSkills->save();

        return $attractionSkills;
    }

    protected static function getTableName(): string
    {
        return 'attraction_skills';
    }
}