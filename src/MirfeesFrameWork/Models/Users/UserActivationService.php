<?php

namespace MirfeesFrameWork\Models\Users;

use MirfeesFrameWork\Services\Db;


class UserActivationService
{

    private const TABLE_NAME = 'users_activation_codes';

    public static function createActivationCode(User $user): string
    {
        $code = bin2hex(random_bytes(16));

        $db = Db::getInstance();
        $db->query(
            'INSERT INTO ' . self::TABLE_NAME . ' (user_id, code) VALUES (:user_id, :code)',
            [
                'user_id' => $user->getId(),
                'code' => $code
            ]
        );

        return $code;

    }

    public static function checkActivationCode(User $user, string $code): bool
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT * FROM ' . self::TABLE_NAME . ' WHERE user_id = :user_id AND code = :code',
            [
                'user_id' => $user->getId(),
                'code' => $code
            ]
        );
        return !empty($result);
    }

    public static function deleteActivationCode(User $user): void
    {
        $db = Db::getInstance();
        $user_id = $user->getId();

        $result = $db->query(
            'DELETE FROM ' . static::TABLE_NAME . ' WHERE user_id = :user_id;',
            [
                'user_id' => $user_id
            ]
        );
    }


}