<?php

namespace MirfeesFrameWork\Controllers;

use MirfeesFrameWork\Controllers\AbstractController;
use MirfeesFrameWork\Exceptions\NotFoundException;
use MirfeesFrameWork\Models\Characters\Character;

class CharactersController extends AbstractController
{

    public function view(int $characterId)
    {


        $character = Character::getById($characterId);

        if ($character === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('characters/view.php', [
            'character' => $character,
        ]);
    }





}