<?php

namespace MirfeesFrameWork\Models\AttractionSkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;

class AttractionSkills extends AbstractSkills
{

    protected static function getTableName(): string
    {
        return 'attraction_skills';
    }
}