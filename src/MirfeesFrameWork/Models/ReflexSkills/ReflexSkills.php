<?php

namespace MirfeesFrameWork\Models\ReflexSkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\Characters\Character;

class ReflexSkills extends AbstractSkills
{

    /**
     * @var int
     */
    protected int $archery;

    /**
     * @var int
     */
    protected int $athletics;

    /**
     * @var int
     */
    protected int $brawling;

    /**
     * @var int
     */
    protected int $dance;

    /**
     * @var int
     */
    protected int $dodgeEscape;

    /**
     * @var int
     */
    protected int $driving;

    /**
     * @var int
     */
    protected int $fencing;

    /**
     * @var int
     */
    protected int $handgun;

    /**
     * @var int
     */
    protected int $heavyWeapon;

    /**
     * @var int
     */
    protected int $materialArtsOne;

    /**
     * @var int
     */
    protected int $materialArtsTwo;

    /**
     * @var int
     */
    protected int $materialArtsThree;

    /**
     * @var int
     */
    protected int $melee;

    /**
     * @var int
     */
    protected int $motorcycle;

    /**
     * @var int
     */
    protected int $heavyMachine;

    /**
     * @var int
     */
    protected int $pilotGyro;

    /**
     * @var int
     */
    protected int $pilotFixWing;

    /**
     * @var int
     */
    protected int $pilotDirigible;

    /**
     * @var int
     */
    protected int $pilotAv;

    /**
     * @var int
     */
    protected int $riffle;

    /**
     * @var int
     */
    protected int $stealth;

    /**
     * @var int
     */
    protected int $submachinegun;

    /**
     * @return int
     */
    public function getArchery(): int
    {
        return $this->archery;
    }

    /**
     * @return int
     */
    public function getAthletics(): int
    {
        return $this->athletics;
    }

    /**
     * @return int
     */
    public function getBrawling(): int
    {
        return $this->brawling;
    }

    /**
     * @return int
     */
    public function getDance(): int
    {
        return $this->dance;
    }

    /**
     * @return int
     */
    public function getDodgeEscape(): int
    {
        return $this->dodgeEscape;
    }

    /**
     * @return int
     */
    public function getDriving(): int
    {
        return $this->driving;
    }

    /**
     * @return int
     */
    public function getFencing(): int
    {
        return $this->fencing;
    }

    /**
     * @return int
     */
    public function getHandgun(): int
    {
        return $this->handgun;
    }

    /**
     * @return int
     */
    public function getHeavyWeapon(): int
    {
        return $this->heavyWeapon;
    }

    /**
     * @return int
     */
    public function getMaterialArtsOne(): int
    {
        return $this->materialArtsOne;
    }

    /**
     * @return int
     */
    public function getMaterialArtsTwo(): int
    {
        return $this->materialArtsTwo;
    }

    /**
     * @return int
     */
    public function getMaterialArtsThree(): int
    {
        return $this->materialArtsThree;
    }

    /**
     * @return int
     */
    public function getMelee(): int
    {
        return $this->melee;
    }

    /**
     * @return int
     */
    public function getMotorcycle(): int
    {
        return $this->motorcycle;
    }

    /**
     * @return int
     */
    public function getHeavyMachine(): int
    {
        return $this->heavyMachine;
    }

    /**
     * @return int
     */
    public function getPilotGyro(): int
    {
        return $this->pilotGyro;
    }

    /**
     * @return int
     */
    public function getPilotFixWing(): int
    {
        return $this->pilotFixWing;
    }

    /**
     * @return int
     */
    public function getPilotDirigible(): int
    {
        return $this->pilotDirigible;
    }

    /**
     * @return int
     */
    public function getPilotAv(): int
    {
        return $this->pilotAv;
    }

    /**
     * @return int
     */
    public function getRiffle(): int
    {
        return $this->riffle;
    }

    /**
     * @return int
     */
    public function getStealth(): int
    {
        return $this->stealth;
    }

    /**
     * @return int
     */
    public function getSubmachinegun(): int
    {
        return $this->submachinegun;
    }

    /**
     * @param int $archery
     */
    public function setArchery(int $archery): void
    {
        $this->archery = $archery;
    }

    /**
     * @param int $athletics
     */
    public function setAthletics(int $athletics): void
    {
        $this->athletics = $athletics;
    }

    /**
     * @param int $brawling
     */
    public function setBrawling(int $brawling): void
    {
        $this->brawling = $brawling;
    }

    /**
     * @param int $dance
     */
    public function setDance(int $dance): void
    {
        $this->dance = $dance;
    }

    /**
     * @param int $dodgeEscape
     */
    public function setDodgeEscape(int $dodgeEscape): void
    {
        $this->dodgeEscape = $dodgeEscape;
    }

    /**
     * @param int $driving
     */
    public function setDriving(int $driving): void
    {
        $this->driving = $driving;
    }

    /**
     * @param int $fencing
     */
    public function setFencing(int $fencing): void
    {
        $this->fencing = $fencing;
    }

    /**
     * @param int $handgun
     */
    public function setHandgun(int $handgun): void
    {
        $this->handgun = $handgun;
    }

    /**
     * @param int $heavyWeapon
     */
    public function setHeavyWeapon(int $heavyWeapon): void
    {
        $this->heavyWeapon = $heavyWeapon;
    }

    /**
     * @param int $materialArtsOne
     */
    public function setMaterialArtsOne(int $materialArtsOne): void
    {
        $this->materialArtsOne = $materialArtsOne;
    }

    /**
     * @param int $materialArtsTwo
     */
    public function setMaterialArtsTwo(int $materialArtsTwo): void
    {
        $this->materialArtsTwo = $materialArtsTwo;
    }

    /**
     * @param int $materialArtsThree
     */
    public function setMaterialArtsThree(int $materialArtsThree): void
    {
        $this->materialArtsThree = $materialArtsThree;
    }

    /**
     * @param int $melee
     */
    public function setMelee(int $melee): void
    {
        $this->melee = $melee;
    }

    /**
     * @param int $motorcycle
     */
    public function setMotorcycle(int $motorcycle): void
    {
        $this->motorcycle = $motorcycle;
    }

    /**
     * @param int $heavyMachine
     */
    public function setHeavyMachine(int $heavyMachine): void
    {
        $this->heavyMachine = $heavyMachine;
    }

    /**
     * @param int $pilotGyro
     */
    public function setPilotGyro(int $pilotGyro): void
    {
        $this->pilotGyro = $pilotGyro;
    }

    /**
     * @param int $pilotFixWing
     */
    public function setPilotFixWing(int $pilotFixWing): void
    {
        $this->pilotFixWing = $pilotFixWing;
    }

    /**
     * @param int $pilotDirigible
     */
    public function setPilotDirigible(int $pilotDirigible): void
    {
        $this->pilotDirigible = $pilotDirigible;
    }

    /**
     * @param int $pilotAv
     */
    public function setPilotAv(int $pilotAv): void
    {
        $this->pilotAv = $pilotAv;
    }

    /**
     * @param int $riffle
     */
    public function setRiffle(int $riffle): void
    {
        $this->riffle = $riffle;
    }

    /**
     * @param int $stealth
     */
    public function setStealth(int $stealth): void
    {
        $this->stealth = $stealth;
    }

    /**
     * @param int $submachinegun
     */
    public function setSubmachinegun(int $submachinegun): void
    {
        $this->submachinegun = $submachinegun;
    }

    public static function createFromArray(array $fields, Character $character): static
    {
        extract($fields);

        $reflexSkills = new ReflexSkills();

        $reflexSkills->setCharacterId($character->getId());
        $reflexSkills->setArchery($archery);
        $reflexSkills->setAthletics($athletics);
        $reflexSkills->setBrawling($brawling);
        $reflexSkills->setDance($dance);
        $reflexSkills->setDodgeEscape($dodge_escape);
        $reflexSkills->setDriving($driving);
        $reflexSkills->setFencing($fencing);
        $reflexSkills->setHandgun($handgun);
        $reflexSkills->setHeavyWeapon($heavy_weapon);
        $reflexSkills->setMaterialArtsOne($material_arts_one);
        $reflexSkills->setMaterialArtsTwo($material_arts_two);
        $reflexSkills->setMaterialArtsThree($material_arts_three);
        $reflexSkills->setMelee($melee);
        $reflexSkills->setMotorcycle($motorcycle);
        $reflexSkills->setHeavyMachine($heavy_machine);
        $reflexSkills->setPilotGyro($pilot_gyro);
        $reflexSkills->setPilotFixWing($pilot_fix_wing);
        $reflexSkills->setPilotDirigible($pilot_dirigible);
        $reflexSkills->setPilotAv($pilot_av);
        $reflexSkills->setRiffle($riffle);
        $reflexSkills->setStealth($stealth);
        $reflexSkills->setSubmachinegun($submachinegun);

        $reflexSkills->save();

        return $reflexSkills;
    }

    public function updateFromArray(array $fields): static
    {
        extract($fields);

        $this->setArchery($archery);
        $this->setAthletics($athletics);
        $this->setBrawling($brawling);
        $this->setDance($dance);
        $this->setDodgeEscape($dodge_escape);
        $this->setDriving($driving);
        $this->setFencing($fencing);
        $this->setHandgun($handgun);
        $this->setHeavyWeapon($heavy_weapon);
        $this->setMaterialArtsOne($material_arts_one);
        $this->setMaterialArtsTwo($material_arts_two);
        $this->setMaterialArtsThree($material_arts_three);
        $this->setMelee($melee);
        $this->setMotorcycle($motorcycle);
        $this->setHeavyMachine($heavy_machine);
        $this->setPilotGyro($pilot_gyro);
        $this->setPilotFixWing($pilot_fix_wing);
        $this->setPilotDirigible($pilot_dirigible);
        $this->setPilotAv($pilot_av);
        $this->setRiffle($riffle);
        $this->setStealth($stealth);
        $this->setSubmachinegun($submachinegun);

        $this->save();

        return $this;
    }

    protected static function getTableName(): string
    {
        return 'reflex_skills';
    }
}