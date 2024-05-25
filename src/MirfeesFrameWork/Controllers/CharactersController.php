<?php

namespace MirfeesFrameWork\Controllers;

use MirfeesFrameWork\Exceptions\ForbiddenException;
use MirfeesFrameWork\Exceptions\NotFoundException;
use MirfeesFrameWork\Exceptions\UnauthorizedException;
use MirfeesFrameWork\Models\AttractionSkills\AttractionSkills;
use MirfeesFrameWork\Models\BodySkills\BodySkills;
use MirfeesFrameWork\Models\CoolSkills\CoolSkills;
use MirfeesFrameWork\Models\Characters\Character;
use MirfeesFrameWork\Models\SpecialSkills\SpecialSkills;
use MirfeesFrameWork\Models\Stats\Stats;


class CharactersController extends AbstractController
{

    public function view(int $characterId)
    {
        $character = Character::getById($characterId);
        $stats = Stats::getByCharacterId($characterId);
        $attractionSkills = AttractionSkills::getByCharacterId($characterId);
        $bodySkills = BodySkills::getByCharacterId($characterId);
        $coolSkills = CoolSkills::getByCharacterId($characterId);
        $specialSkills = SpecialSkills::getByCharacterId($characterId);

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

        $character->delete();

        header('Location /', true, 200);
        exit();
    }

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

            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('errors/403.php', ['error' => $e->getMessage()]);
                return;
            }

            header('Location: /characters/' . $character->getId(), true, 302);
            exit();
        }
    }
}