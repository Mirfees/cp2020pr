<?php

namespace MirfeesFrameWork\Controllers;

use MirfeesFrameWork\Exceptions\ForbiddenException;
use MirfeesFrameWork\Exceptions\InvalidArgumentException;
use MirfeesFrameWork\Exceptions\NotFoundException;
use MirfeesFrameWork\Exceptions\UnauthorizedException;
use MirfeesFrameWork\Models\AttractionSkills\AttractionSkills;
use MirfeesFrameWork\Models\BodySkills\BodySkills;
use MirfeesFrameWork\Models\CoolSkills\CoolSkills;
use MirfeesFrameWork\Models\Characters\Character;
use MirfeesFrameWork\Models\EmpathySkills\EmpathySkills;
use MirfeesFrameWork\Models\IntelligenceSkills\IntelligenceSkills;
use MirfeesFrameWork\Models\ReflexSkills\ReflexSkills;
use MirfeesFrameWork\Models\SpecialSkills\SpecialSkills;
use MirfeesFrameWork\Models\Stats\Stats;
use MirfeesFrameWork\Models\TechSkills\TechSkills;


class CharactersController extends AbstractController
{

    /**
     * @throws NotFoundException
     */
    public function view(int $characterId)
    {
        $character = Character::getById($characterId);
        $stats = Stats::getByCharacterId($characterId);
        $attractionSkills = AttractionSkills::getByCharacterId($characterId);
        $bodySkills = BodySkills::getByCharacterId($characterId);
        $coolSkills = CoolSkills::getByCharacterId($characterId);
        $specialSkills = SpecialSkills::getByCharacterId($characterId);
        $empathySkills = EmpathySkills::getByCharacterId($characterId);
        $intelligenceSkills = IntelligenceSkills::getByCharacterId($characterId);
        $reflexSkills = ReflexSkills::getByCharacterId($characterId);
        $techSkills = TechSkills::getByCharacterId($characterId);

        if ($character === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('characters/view.php', [
            'character' => $character,
            'stats' => $stats,
            'attractionSkills' => $attractionSkills,
            'bodySkills' => $bodySkills,
            'coolSkills' => $coolSkills,
            'specialSkills' => $specialSkills,
            'empathySkills' => $empathySkills,
            'intelligenceSkills' => $intelligenceSkills,
            'reflexSkills' => $reflexSkills,
            'techSkills' => $techSkills,
        ]);
    }

    public function delete(int $characterId): void
    {
        $character = Character::getById($characterId);

        if ($character === null) {
            throw new NotFoundException('Такого персонажа не существует :(');
        }

        if ($this->user === null) {
            throw new UnauthorizedException('Чтобы удалить персонажа, нужно войти в аккаунт :(');
        }

        if ($this->user->getId() !== $character->getUserId()) {
            throw new ForbiddenException('Недостаточно прав!');
        }

        if ($this->user->getRole() !== 'admin') {
            throw new ForbiddenException('Недостаточно прав!');
        }

        Stats::getByCharacterId($characterId)->delete();
        AttractionSkills::getByCharacterId($characterId)->delete();
        BodySkills::getByCharacterId($characterId)->delete();
        CoolSkills::getByCharacterId($characterId)->delete();
        EmpathySkills::getByCharacterId($characterId)->delete();
        IntelligenceSkills::getByCharacterId($characterId)->delete();
        ReflexSkills::getByCharacterId($characterId)->delete();
        SpecialSkills::getByCharacterId($characterId)->delete();
        TechSkills::getByCharacterId($characterId)->delete();
        $character->delete();


        header('Location /', true, 200);
        exit();
    }

    /**
     * @throws UnauthorizedException
     */
    public function add(): void
    {
        if ($this->user === null) {
            throw new UnauthorizedException('Необходимо авторизироваться');
        }

        if (!empty($_POST)) {
            try {
                $character = Character::createFromArray($_POST, $this->user);
                $stats = Stats::createFromArray($_POST, $character);
                $attractionSkills = AttractionSkills::createFromArray($_POST, $character);
                $bodySkills = BodySkills::createFromArray($_POST, $character);
                $coolSkills = CoolSkills::createFromArray($_POST, $character);
                $specialSkills = SpecialSkills::createFromArray($_POST, $character);
                $empathySkills = EmpathySkills::createFromArray($_POST, $character);
                $intelligenceSkills = IntelligenceSkills::createFromArray($_POST, $character);
                $reflexSkills = ReflexSkills::createFromArray($_POST, $character);
                $techSkills = TechSkills::createFromArray($_POST, $character);

            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('errors/403.php', ['error' => $e->getMessage()]);
                return;
            }

            header('Location: /characters/' . $character->getId(), true, 302);
            exit();
        }
    }

    public function edit(int $characterId): void
    {
        $character = Character::getById($characterId);

        if ($character === null) {
            throw new NotFoundException();
        }

        if ($this->user === null) {
            throw new UnauthorizedException('Необходимо зарегистрироваться');
        }

        if ($this->user->getId() !== $character->getUserId()) {
            throw new ForbiddenException('Недостаточно прав!');
        }

        if ($this->user->getRole() !== 'admin') {
            throw new ForbiddenException('Недостаточно прав!');
        }

        if (!empty($_POST)) {
            try {
                $character->updateFromArray($_POST);
                Stats::getByCharacterId($characterId)->updateFromArray($_POST);
                AttractionSkills::getByCharacterId($characterId)->updateFromArray($_POST);
                BodySkills::getByCharacterId($characterId)->updateFromArray($_POST);
                CoolSkills::getByCharacterId($characterId)->updateFromArray($_POST);
                EmpathySkills::getByCharacterId($characterId)->updateFromArray($_POST);
                IntelligenceSkills::getByCharacterId($characterId)->updateFromArray($_POST);
                ReflexSkills::getByCharacterId($characterId)->updateFromArray($_POST);
                TechSkills::getByCharacterId($characterId)->updateFromArray($_POST);

            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('errors/403.php', ['error' => $e->getMessage()]);
            }

            header('Location: /characters/' . $character->getId(), true, 302);
            exit();
        }
        $this->view->renderHtml('characters/edit.php', ['character' => $character]);
    }
}