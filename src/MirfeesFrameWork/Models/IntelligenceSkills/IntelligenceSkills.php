<?php

namespace MirfeesFrameWork\Models\IntelligenceSkills;

use MirfeesFrameWork\Models\AbstractSkills\AbstractSkills;
use MirfeesFrameWork\Models\Characters\Character;

class IntelligenceSkills extends AbstractSkills
{

    /**
     * @var int
     */
    protected int $accounting;

    /**
     * @var int
     */
    protected int $awarenessNotice;

    /**
     * @var int
     */
    protected int $biology;

    /**
     * @var int
     */
    protected int $botany;

    /**
     * @var int
     */
    protected int $chemistry;

    /**
     * @var int
     */
    protected int $composition;

    /**
     * @var int
     */
    protected int $diagnosisIllness;

    /**
     * @var int
     */
    protected int $education;

    /**
     * @var int
     */
    protected int $expert;

    /**
     * @var int
     */
    protected int $gamble;

    /**
     * @var int
     */
    protected int $geology;

    /**
     * @var int
     */
    protected int $hideEvade;

    /**
     * @var int
     */
    protected int $history;

    /**
     * @var int
     */
    protected int $langKnowOne;

    /**
     * @var int
     */
    protected int $langKnowTwo;

    /**
     * @var int
     */
    protected int $langKnowThree;

    /**
     * @var int
     */
    protected int $librarySearch;

    /**
     * @var int
     */
    protected int $math;

    /**
     * @var int
     */
    protected int $physics;

    /**
     * @var int
     */
    protected int $programming;

    /**
     * @var int
     */
    protected int $shadowTrack;

    /**
     * @var int
     */
    protected int $stockMarket;

    /**
     * @var int
     */
    protected int $systemKnowledge;

    /**
     * @var int
     */
    protected int $anthropology;

    /**
     * @var int
     */
    protected int $teaching;

    /**
     * @var int
     */
    protected int $wildSurvival;

    /**
     * @var int
     */
    protected int $zoology;

    /**
     * @return int
     */
    public function getAccounting(): int
    {
        return $this->accounting;
    }

    /**
     * @return int
     */
    public function getAwarenessNotice(): int
    {
        return $this->awarenessNotice;
    }

    /**
     * @return int
     */
    public function getBiology(): int
    {
        return $this->biology;
    }

    /**
     * @return int
     */
    public function getChemistry(): int
    {
        return $this->chemistry;
    }

    /**
     * @return int
     */
    public function getComposition(): int
    {
        return $this->composition;
    }

    /**
     * @return int
     */
    public function getDiagnosisIllness(): int
    {
        return $this->diagnosisIllness;
    }

    /**
     * @return int
     */
    public function getEducation(): int
    {
        return $this->education;
    }

    /**
     * @return int
     */
    public function getExpert(): int
    {
        return $this->expert;
    }

    /**
     * @return int
     */
    public function getGamble(): int
    {
        return $this->gamble;
    }

    /**
     * @return int
     */
    public function getGeology(): int
    {
        return $this->geology;
    }

    /**
     * @return int
     */
    public function getHideEvade(): int
    {
        return $this->hideEvade;
    }

    /**
     * @return int
     */
    public function getHistory(): int
    {
        return $this->history;
    }

    /**
     * @return int
     */
    public function getLangKnowOne(): int
    {
        return $this->langKnowOne;
    }

    /**
     * @return int
     */
    public function getLangKnowTwo(): int
    {
        return $this->langKnowTwo;
    }

    /**
     * @return int
     */
    public function getLangKnowThree(): int
    {
        return $this->langKnowThree;
    }

    /**
     * @return int
     */
    public function getLibrarySearch(): int
    {
        return $this->librarySearch;
    }

    /**
     * @return int
     */
    public function getMath(): int
    {
        return $this->math;
    }

    /**
     * @return int
     */
    public function getPhysics(): int
    {
        return $this->physics;
    }

    /**
     * @return int
     */
    public function getProgramming(): int
    {
        return $this->programming;
    }

    /**
     * @return int
     */
    public function getShadowTrack(): int
    {
        return $this->shadowTrack;
    }

    /**
     * @return int
     */
    public function getStockMarket(): int
    {
        return $this->stockMarket;
    }

    /**
     * @return int
     */
    public function getSystemKnowledge(): int
    {
        return $this->systemKnowledge;
    }

    /**
     * @return int
     */
    public function getAnthropology(): int
    {
        return $this->anthropology;
    }

    /**
     * @return int
     */
    public function getWildSurvival(): int
    {
        return $this->wildSurvival;
    }

    /**
     * @return int
     */
    public function getZoology(): int
    {
        return $this->zoology;
    }

    /**
     * @return int
     */
    public function getBotany(): int
    {
        return $this->botany;
    }

    /**
     * @return int
     */
    public function getTeaching(): int
    {
        return $this->teaching;
    }

    /**
     * @param int $accounting
     */
    public function setAccounting(int $accounting): void
    {
        $this->accounting = $accounting;
    }

    /**
     * @param int $awarenessNotice
     */
    public function setAwarenessNotice(int $awarenessNotice): void
    {
        $this->awarenessNotice = $awarenessNotice;
    }

    /**
     * @param int $biology
     */
    public function setBiology(int $biology): void
    {
        $this->biology = $biology;
    }

    /**
     * @param int $chemistry
     */
    public function setChemistry(int $chemistry): void
    {
        $this->chemistry = $chemistry;
    }

    /**
     * @param int $composition
     */
    public function setComposition(int $composition): void
    {
        $this->composition = $composition;
    }

    /**
     * @param int $diagnosisIllness
     */
    public function setDiagnosisIllness(int $diagnosisIllness): void
    {
        $this->diagnosisIllness = $diagnosisIllness;
    }

    /**
     * @param int $education
     */
    public function setEducation(int $education): void
    {
        $this->education = $education;
    }

    /**
     * @param int $expert
     */
    public function setExpert(int $expert): void
    {
        $this->expert = $expert;
    }

    /**
     * @param int $gamble
     */
    public function setGamble(int $gamble): void
    {
        $this->gamble = $gamble;
    }

    /**
     * @param int $geology
     */
    public function setGeology(int $geology): void
    {
        $this->geology = $geology;
    }

    /**
     * @param int $hideEvade
     */
    public function setHideEvade(int $hideEvade): void
    {
        $this->hideEvade = $hideEvade;
    }

    /**
     * @param int $history
     */
    public function setHistory(int $history): void
    {
        $this->history = $history;
    }

    /**
     * @param int $langKnowOne
     */
    public function setLangKnowOne(int $langKnowOne): void
    {
        $this->langKnowOne = $langKnowOne;
    }

    /**
     * @param int $langKnowTwo
     */
    public function setLangKnowTwo(int $langKnowTwo): void
    {
        $this->langKnowTwo = $langKnowTwo;
    }

    /**
     * @param int $langKnowThree
     */
    public function setLangKnowThree(int $langKnowThree): void
    {
        $this->langKnowThree = $langKnowThree;
    }

    /**
     * @param int $librarySearch
     */
    public function setLibrarySearch(int $librarySearch): void
    {
        $this->librarySearch = $librarySearch;
    }

    /**
     * @param int $math
     */
    public function setMath(int $math): void
    {
        $this->math = $math;
    }

    /**
     * @param int $physics
     */
    public function setPhysics(int $physics): void
    {
        $this->physics = $physics;
    }

    /**
     * @param int $programming
     */
    public function setProgramming(int $programming): void
    {
        $this->programming = $programming;
    }

    /**
     * @param int $shadowTrack
     */
    public function setShadowTrack(int $shadowTrack): void
    {
        $this->shadowTrack = $shadowTrack;
    }

    /**
     * @param int $stockMarket
     */
    public function setStockMarket(int $stockMarket): void
    {
        $this->stockMarket = $stockMarket;
    }

    /**
     * @param int $systemKnowledge
     */
    public function setSystemKnowledge(int $systemKnowledge): void
    {
        $this->systemKnowledge = $systemKnowledge;
    }

    /**
     * @param int $anthropology
     */
    public function setAnthropology(int $anthropology): void
    {
        $this->anthropology = $anthropology;
    }

    /**
     * @param int $teaching
     */
    public function setTeaching(int $teaching): void
    {
        $this->teaching = $teaching;
    }

    /**
     * @param int $wildSurvival
     */
    public function setWildSurvival(int $wildSurvival): void
    {
        $this->wildSurvival = $wildSurvival;
    }

    /**
     * @param int $zoology
     */
    public function setZoology(int $zoology): void
    {
        $this->zoology = $zoology;
    }

    /**
     * @param int $botany
     */
    public function setBotany(int $botany): void
    {
        $this->botany = $botany;
    }

    public static function createFromArray(array $fields, Character $character): static
    {
        extract($fields);

        $intelligenceSkills = new IntelligenceSkills();

        $intelligenceSkills->setCharacterId($character->getId());
        $intelligenceSkills->setAccounting($accounting);
        $intelligenceSkills->setAwarenessNotice($awareness_notice);
        $intelligenceSkills->setBiology($biology);
        $intelligenceSkills->setBotany($botany);
        $intelligenceSkills->setChemistry($chemistry);
        $intelligenceSkills->setComposition($composition);
        $intelligenceSkills->setDiagnosisIllness($diagnosis_illness);
        $intelligenceSkills->setEducation($education);
        $intelligenceSkills->setExpert($expert);
        $intelligenceSkills->setGamble($gamble);
        $intelligenceSkills->setGeology($geology);
        $intelligenceSkills->setHideEvade($hide_evade);
        $intelligenceSkills->setHistory($history);
        $intelligenceSkills->setLangKnowOne($lang_know_one);
        $intelligenceSkills->setLangKnowTwo($lang_know_two);
        $intelligenceSkills->setLangKnowThree($lang_know_three);
        $intelligenceSkills->setLibrarySearch($library_search);
        $intelligenceSkills->setMath($math);
        $intelligenceSkills->setPhysics($physics);
        $intelligenceSkills->setProgramming($programming);
        $intelligenceSkills->setShadowTrack($shadow_track);
        $intelligenceSkills->setStockMarket($stock_market);
        $intelligenceSkills->setSystemKnowledge($system_knowledge);
        $intelligenceSkills->setAnthropology($anthropology);
        $intelligenceSkills->setTeaching($teaching);
        $intelligenceSkills->setWildSurvival($wild_survival);
        $intelligenceSkills->setZoology($zoology);

        $intelligenceSkills->save();

        return $intelligenceSkills;
    }

    public function updateFromArray(array $fields): static
    {
        extract($fields);

        $this->setAccounting($accounting);
        $this->setAwarenessNotice($awareness_notice);
        $this->setBiology($biology);
        $this->setBotany($botany);
        $this->setChemistry($chemistry);
        $this->setComposition($composition);
        $this->setDiagnosisIllness($diagnosis_illness);
        $this->setEducation($education);
        $this->setExpert($expert);
        $this->setGamble($gamble);
        $this->setGeology($geology);
        $this->setHideEvade($hide_evade);
        $this->setHistory($history);
        $this->setLangKnowOne($lang_know_one);
        $this->setLangKnowTwo($lang_know_two);
        $this->setLangKnowThree($lang_know_three);
        $this->setLibrarySearch($library_search);
        $this->setMath($math);
        $this->setPhysics($physics);
        $this->setProgramming($programming);
        $this->setShadowTrack($shadow_track);
        $this->setStockMarket($stock_market);
        $this->setSystemKnowledge($system_knowledge);
        $this->setAnthropology($anthropology);
        $this->setTeaching($teaching);
        $this->setWildSurvival($wild_survival);
        $this->setZoology($zoology);

        $this->save();

        return $this;
    }

    protected static function getTableName(): string
    {
        return 'intelligence_skills';
    }
}