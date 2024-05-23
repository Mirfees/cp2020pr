<?php

namespace MirfeesFrameWork\Models\Characters;

use MirfeesFrameWork\Models\ActiveRecordEntity\ActiveRecordEntity;

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

    public static function getTableName(): string {
        return 'characters';
    }
}