<?php

namespace MirfeesFrameWork\Models\Articles;

use MirfeesFrameWork\Exceptions\InvalidArgumentException;
use MirfeesFrameWork\Models\Users\User;
use MirfeesFrameWork\Models\ActiveRecordEntity\ActiveRecordEntity;
use MirfeesFrameWork\Services\Db;

class Article extends ActiveRecordEntity
{
    /** @var string */
    protected string $name;

    /** @var string */
    protected string $text;

    /** @var int */
    protected int $authorId;

    /** @var string */
    protected string $createdAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setAuthor(User $author): void
    {
        $this->authorId = $author->id;
    }

    public function getAuthor(): ?User
    {
        return User::getById($this->authorId);
    }

    public static function createFromArray(array $fields, User $author): Article
    {
        extract($fields);

        if(empty($name)) {
            throw new InvalidArgumentException('Не передано название статьи');
        }

        if(empty($text)) {
            throw new InvalidArgumentException('Не передан текст статьи');
        }

        $article = new Article();

        $article->setAuthor($author);
        $article->setName($name);
        $article->setText($text);

        $article->save();

        $article->setCreatedAt(Article::findOneByColumn('id', $article->getId())->getCreatedAt());

        return $article;
    }

    public function updateFromArray(array $fields): Article
    {
        extract($fields);

        if (empty($name)) {
            throw new InvalidArgumentException('Не передано название статьи');
        }

        if (empty($text)) {
            throw new InvalidArgumentException('Не передан текст статьи');
        }

        $this->setName($name);
        $this->setText($text);

        $this->save();

        return $this;
    }
}