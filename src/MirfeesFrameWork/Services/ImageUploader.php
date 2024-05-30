<?php

namespace MirfeesFrameWork\Services;

use MirfeesFrameWork\Exceptions\ForbiddenException;
use MirfeesFrameWork\Exceptions\InvalidArgumentException;

class ImageUploader
{

    private static $instance;

    private static string $pathToMedia = __DIR__ . '/../../../public/media';

    /**
     * @return string
     */
    public static function getPathToMedia(): string
    {
        return self::$pathToMedia;
    }

    /**
     * @param string $pathToMedia
     */
    public static function setPathToMedia(string $pathToMedia): void
    {
        self::$pathToMedia = $pathToMedia;
    }

    public static function getInstance(): self
    {
        if( self::$instance === null ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return string
     */
    public function uploadImage($image): string
    {
        $file = $image;
        $srcFileName = $file['name'];
        $newFilePath = $this->getPathToMedia() . '/' . sha1(rand()) . $srcFileName;

        $allowedExtensions = ['png', 'jpeg', 'jpg', 'gif', 'webp'];
        $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
        if (!in_array($extension, $allowedExtensions)) {
            $error = 'Загрузка файлов с таким расширением запрещена!';
            throw new InvalidArgumentException($error);
        }
        if ($file['error'] !== UPLOAD_ERR_OK) {
            $error = 'Ошибка при загрузке файла.';
            throw new ForbiddenException($error);
        }
        if (file_exists($newFilePath)) {
            $error = 'Файл с таким именем уже существует';
            throw new InvalidArgumentException($error);
        }
        if (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
            $error = 'Ошибка при загрузке файла';
            throw new InvalidArgumentException($error);
        }
        $result = '/public/media/' . $srcFileName;

        return $result;
    }
}