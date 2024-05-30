<?php

namespace MirfeesFrameWork\Models\Characters;

use MirfeesFrameWork\Models\ActiveRecordEntity\ActiveRecordEntity;
use MirfeesFrameWork\Models\Users\User;
use MirfeesFrameWork\Exceptions\InvalidArgumentException;
use MirfeesFrameWork\Services\Db;
use MirfeesFrameWork\Services\ImageUploader;

class Character extends ActiveRecordEntity
{
    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $role;

    /**
     * @var int
     */
    protected $reputation;

    /**
     * @var string
     */
    protected $currentIp;

    /**
     * @var int
     */
    protected $humanity;

    /**
     * @var string
     */
    protected $img;

    /**
     * @var string
     */
    protected $style;

    /**
     * @var string
     */
    protected $familyBackground;

    /**
     * @var int
     */
    protected $siblings;

    /**
     * @var string
     */
    protected $lifepath;

    /**
     * @var string
     */
    protected $cyberimplants;

    /**
     * @var string
     */
    protected $gear;

    /**
     * @var string
     */
    protected $weaponsArmor;

    public function getUserId(): int {
        return $this->userId;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function getReputation(): int {
        return $this->reputation;
    }

    public function getCurrentIp(): string {
        return $this->currentIp;
    }

    public function getHumanity(): int {
        return $this->humanity;
    }

    public function getImg(): string {
        return $this->img;
    }

    public function getStyle(): string {
        return $this->style;
    }

    public function getFamilyBackground(): string {
        return $this->familyBackground;
    }

    public function getSiblings(): int {
        return $this->siblings;
    }

    public function getLifepath(): string {
        return $this->lifepath;
    }

    public function getCyberimplants(): string {
        return $this->cyberimplants;
    }

    public function getGear(): string {
        return $this->gear;
    }

    public function getWeaponsArmor(): string {
        return $this->weaponsArmor;
    }

    // Setters
    public function setUserId(int $userId): void {
        $this->userId = $userId;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }

    public function setReputation(int $reputation): void {
        $this->reputation = $reputation;
    }

    public function setCurrentIp(string $currentIp): void {
        $this->currentIp = $currentIp;
    }

    public function setHumanity(int $humanity): void {
        $this->humanity = $humanity;
    }

    public function setImg(string $img): void {
        $this->img = $img;
    }

    public function setStyle(string $style): void {
        $this->style = $style;
    }

    public function setFamilyBackground(string $familyBackground): void {
        $this->familyBackground = $familyBackground;
    }

    public function setSiblings(int $siblings): void {
        $this->siblings = $siblings;
    }

    public function setLifepath(string $lifepath): void {
        $this->lifepath = $lifepath;
    }

    public function setCyberimplants(string $cyberimplants): void {
        $this->cyberimplants = $cyberimplants;
    }

    public function setGear(string $gear): void {
        $this->gear = $gear;
    }

    public function setWeaponsArmor(string $weaponsArmor): void {
        $this->weaponsArmor = $weaponsArmor;
    }

    public static function createFromArray(array $fields, User $author): Character
    {
        extract($fields);

        if(empty($name)) {
            throw new InvalidArgumentException('Назовите своего персонажа');
        }

        if(empty($role)) {
            throw new InvalidArgumentException('Выберите роль');
        }

        $character = new Character();

        $character->setUserId($author->getId());
        $character->setName($name);
        $character->setRole($role);
        $character->setReputation($reputation);
        $character->setCurrentIp($current_ip);
        $character->setHumanity($humanity);
        $character->setSiblings($siblings);

        if ($_FILES['img']) {
            $character->setImg(ImageUploader::getInstance()->uploadImage($_FILES['img']));
        } else {
            $character->setImg('');
        }

        if ($style) {
            $character->setStyle($style);
        } else {
            $character->setStyle('');
        }

        if ($family_background) {
            $character->setFamilyBackground($family_background);
        } else {
            $character->setFamilyBackground('');
        }

        if ($lifepath) {
            $character->setLifepath($lifepath);
        } else {
            $character->setLifepath('');
        }

        if ($cyberimplants) {
            $character->setCyberimplants($cyberimplants);
        } else {
            $character->setCyberimplants('');
        }

        if ($gear) {
            $character->setGear($gear);
        } else {
            $character->setGear('');
        }

        if ($weapons_armor) {
            $character->setWeaponsArmor($weapons_armor);
        } else {
            $character->setWeaponsArmor('');
        }

        $character->save();

        return $character;
    }

    public function updateFromArray(array $fields): Character
    {

        extract($fields);

        if(empty($name)) {
            throw new InvalidArgumentException('Назовите своего персонажа');
        }

        if(empty($role)) {
            throw new InvalidArgumentException('Выберите роль');
        }

        $this->setName($name);
        $this->setRole($role);
        $this->setReputation($reputation);
        $this->setCurrentIp($current_ip);
        $this->setHumanity($humanity);
        $this->setSiblings($siblings);

        if ($_FILES['img']) {
            $this->setImg(ImageUploader::getInstance()->uploadImage($_FILES['img']));
        } else {
            $this->setImg($this->getImg());
        }

        if ($style) {
            $this->setStyle($style);
        } else {
            $this->setStyle('');
        }

        if ($family_background) {
            $this->setFamilyBackground($family_background);
        } else {
            $this->setFamilyBackground('');
        }

        if ($lifepath) {
            $this->setLifepath($lifepath);
        } else {
            $this->setLifepath('');
        }

        if ($cyberimplants) {
            $this->setCyberimplants($cyberimplants);
        } else {
            $this->setCyberimplants('');
        }

        if ($gear) {
            $this->setGear($gear);
        } else {
            $this->setGear('');
        }

        if ($weapons_armor) {
            $this->setWeaponsArmor($weapons_armor);
        } else {
            $this->setWeaponsArmor('');
        }

        $this->save();

        return $this;
    }

    public static function getTableName(): string {
        return 'characters';
    }
}