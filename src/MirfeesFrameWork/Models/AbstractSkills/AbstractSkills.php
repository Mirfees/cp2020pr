<?php

namespace MirfeesFrameWork\Models\AbstractSkills;

use MirfeesFrameWork\Models\ActiveRecordEntity\ActiveRecordEntity;
use MirfeesFrameWork\Models\Characters\Character;
use MirfeesFrameWork\Services\Db;

abstract Class AbstractSkills extends ActiveRecordEntity
{
    /**
     * @var int
     */
    protected $characterId;

    public function getCharacterId(): int {
        return $this->characterId;
    }

    public function setCharacterId(int $characterId): void {
        $this->characterId = $characterId;
    }

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

    abstract public static function createFromArray(array $fields,  Character $character): static;
}