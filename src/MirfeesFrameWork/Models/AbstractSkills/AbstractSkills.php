<?php

namespace MirfeesFrameWork\Models\AbstractSkills;

use MirfeesFrameWork\Models\ActiveRecordEntity\ActiveRecordEntity;
use MirfeesFrameWork\Services\Db;

abstract Class AbstractSkills extends ActiveRecordEntity
{
    public static function getByCharacterId($characterId)
    {
        $db = Db::getInstance();
        $entities = $db->query(
            'SELECT * FROM `' . static::getTableName() . '` WHERE character_id=:id;',
            [':id' => $characterId],
            static::class
        );
        return $entities ? $entities[0] : null;
    }
}