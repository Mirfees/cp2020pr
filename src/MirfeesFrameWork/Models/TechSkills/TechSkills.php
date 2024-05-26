<?php

namespace MirfeesFrameWork\Models\TechSkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\Characters\Character;

class TechSkills extends AbstractSkills
{

    /**
     * @var int
     */
    protected int $avTech;

    /**
     * @var int
     */
    protected int $basicTech;

    /**
     * @var int
     */
    protected int $cryotankOperation;

    /**
     * @var int
     */
    protected int $cyberdeck;

    /**
     * @var int
     */
    protected int $demolitions;

    /**
     * @var int
     */
    protected int $disguise;

    /**
     * @var int
     */
    protected int $electronics;

    /**
     * @var int
     */
    protected int $electronicsSecurity;

    /**
     * @var int
     */
    protected int $firstAid;

    /**
     * @var int
     */
    protected int $forgery;

    /**
     * @var int
     */
    protected int $gyroTech;

    /**
     * @var int
     */
    protected int $paintOrDraw;

    /**
     * @var int
     */
    protected int $photoAndFilm;

    /**
     * @var int
     */
    protected int $pharmacuticals;

    /**
     * @var int
     */
    protected int $pickLock;

    /**
     * @var int
     */
    protected int $pickPocket;

    /**
     * @var int
     */
    protected int $playInstruments;

    /**
     * @var int
     */
    protected int $weaponsmith;

    /**
     * @var int
     */
    protected int $cybertech;

    /**
     * @return int
     */
    public function getAvTech(): int
    {
        return $this->avTech;
    }

    /**
     * @return int
     */
    public function getBasicTech(): int
    {
        return $this->basicTech;
    }

    /**
     * @return int
     */
    public function getCryotankOperation(): int
    {
        return $this->cryotankOperation;
    }

    /**
     * @return int
     */
    public function getCyberdeck(): int
    {
        return $this->cyberdeck;
    }

    /**
     * @return int
     */
    public function getDemolitions(): int
    {
        return $this->demolitions;
    }

    /**
     * @return int
     */
    public function getDisguise(): int
    {
        return $this->disguise;
    }

    /**
     * @return int
     */
    public function getElectronics(): int
    {
        return $this->electronics;
    }

    /**
     * @return int
     */
    public function getElectronicsSecurity(): int
    {
        return $this->electronicsSecurity;
    }

    /**
     * @return int
     */
    public function getFirstAid(): int
    {
        return $this->firstAid;
    }

    /**
     * @return int
     */
    public function getForgery(): int
    {
        return $this->forgery;
    }

    /**
     * @return int
     */
    public function getGyroTech(): int
    {
        return $this->gyroTech;
    }

    /**
     * @return int
     */
    public function getPaintOrDraw(): int
    {
        return $this->paintOrDraw;
    }

    /**
     * @return int
     */
    public function getPhotoAndFilm(): int
    {
        return $this->photoAndFilm;
    }

    /**
     * @return int
     */
    public function getPharmacuticals(): int
    {
        return $this->pharmacuticals;
    }

    /**
     * @return int
     */
    public function getPickLock(): int
    {
        return $this->pickLock;
    }

    /**
     * @return int
     */
    public function getPickPocket(): int
    {
        return $this->pickPocket;
    }

    /**
     * @return int
     */
    public function getPlayInstruments(): int
    {
        return $this->playInstruments;
    }

    /**
     * @return int
     */
    public function getWeaponsmith(): int
    {
        return $this->weaponsmith;
    }

    /**
     * @return int
     */
    public function getCybertech(): int
    {
        return $this->cybertech;
    }

    /**
     * @param int $avTech
     */
    public function setAvTech(int $avTech): void
    {
        $this->avTech = $avTech;
    }

    /**
     * @param int $basicTech
     */
    public function setBasicTech(int $basicTech): void
    {
        $this->basicTech = $basicTech;
    }

    /**
     * @param int $cryotankOperation
     */
    public function setCryotankOperation(int $cryotankOperation): void
    {
        $this->cryotankOperation = $cryotankOperation;
    }

    /**
     * @param int $cyberdeck
     */
    public function setCyberdeck(int $cyberdeck): void
    {
        $this->cyberdeck = $cyberdeck;
    }

    /**
     * @param int $demolitions
     */
    public function setDemolitions(int $demolitions): void
    {
        $this->demolitions = $demolitions;
    }

    /**
     * @param int $disguise
     */
    public function setDisguise(int $disguise): void
    {
        $this->disguise = $disguise;
    }

    /**
     * @param int $electronics
     */
    public function setElectronics(int $electronics): void
    {
        $this->electronics = $electronics;
    }

    /**
     * @param int $electronicsSecurity
     */
    public function setElectronicsSecurity(int $electronicsSecurity): void
    {
        $this->electronicsSecurity = $electronicsSecurity;
    }

    /**
     * @param int $firstAid
     */
    public function setFirstAid(int $firstAid): void
    {
        $this->firstAid = $firstAid;
    }

    /**
     * @param int $forgery
     */
    public function setForgery(int $forgery): void
    {
        $this->forgery = $forgery;
    }

    /**
     * @param int $gyroTech
     */
    public function setGyroTech(int $gyroTech): void
    {
        $this->gyroTech = $gyroTech;
    }

    /**
     * @param int $paintOrDraw
     */
    public function setPaintOrDraw(int $paintOrDraw): void
    {
        $this->paintOrDraw = $paintOrDraw;
    }

    /**
     * @param int $photoAndFilm
     */
    public function setPhotoAndFilm(int $photoAndFilm): void
    {
        $this->photoAndFilm = $photoAndFilm;
    }

    /**
     * @param int $pharmacuticals
     */
    public function setPharmacuticals(int $pharmacuticals): void
    {
        $this->pharmacuticals = $pharmacuticals;
    }

    /**
     * @param int $pickLock
     */
    public function setPickLock(int $pickLock): void
    {
        $this->pickLock = $pickLock;
    }

    /**
     * @param int $pickPocket
     */
    public function setPickPocket(int $pickPocket): void
    {
        $this->pickPocket = $pickPocket;
    }

    /**
     * @param int $playInstruments
     */
    public function setPlayInstruments(int $playInstruments): void
    {
        $this->playInstruments = $playInstruments;
    }

    /**
     * @param int $weaponsmith
     */
    public function setWeaponsmith(int $weaponsmith): void
    {
        $this->weaponsmith = $weaponsmith;
    }

    /**
     * @param int $cybertech
     */
    public function setCybertech(int $cybertech): void
    {
        $this->cybertech = $cybertech;
    }

    public static function createFromArray(array $fields, Character $character): static
    {
        extract($fields);

        $techSkills = new TechSkills();

        $techSkills->setCharacterId($character->getId());
        $techSkills->setAvTech($av_tech);
        $techSkills->setBasicTech($basic_tech);
        $techSkills->setCryotankOperation($cryotank_operation);
        $techSkills->setCyberdeck($cyberdeck);
        $techSkills->setDemolitions($demolitions);
        $techSkills->setDisguise($disguise);
        $techSkills->setElectronics($electronics);
        $techSkills->setElectronicsSecurity($electronics_security);
        $techSkills->setFirstAid($first_aid);
        $techSkills->setForgery($forgery);
        $techSkills->setGyroTech($gyro_tech);
        $techSkills->setPaintOrDraw($paint_or_draw);
        $techSkills->setPhotoAndFilm($photo_and_film);
        $techSkills->setPharmacuticals($pharmacuticals);
        $techSkills->setPickLock($pick_lock);
        $techSkills->setPickPocket($pick_pocket);
        $techSkills->setPlayInstruments($play_instruments);
        $techSkills->setWeaponsmith($weaponsmith);
        $techSkills->setCybertech($cybertech);

        $techSkills->save();

        return $techSkills;
    }

    public function updateFromArray(array $fields): static
    {
        extract($fields);

        $this->setAvTech($av_tech);
        $this->setBasicTech($basic_tech);
        $this->setCryotankOperation($cryotank_operation);
        $this->setCyberdeck($cyberdeck);
        $this->setDemolitions($demolitions);
        $this->setDisguise($disguise);
        $this->setElectronics($electronics);
        $this->setElectronicsSecurity($electronics_security);
        $this->setFirstAid($first_aid);
        $this->setForgery($forgery);
        $this->setGyroTech($gyro_tech);
        $this->setPaintOrDraw($paint_or_draw);
        $this->setPhotoAndFilm($photo_and_film);
        $this->setPharmacuticals($pharmacuticals);
        $this->setPickLock($pick_lock);
        $this->setPickPocket($pick_pocket);
        $this->setPlayInstruments($play_instruments);
        $this->setWeaponsmith($weaponsmith);
        $this->setCybertech($cybertech);

        $this->save();

        return $this;
    }

    protected static function getTableName(): string
    {
        return 'tech_skills';
    }
}