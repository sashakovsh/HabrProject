<?php

namespace Alex\Habr\Post;

use Alex\Habr\User\User;

class Post
{
    private int $id;
    private User $username;
    private string $header;
    private string $text;

    public function __construct(User $username, string $header, string $text)
    {
        $this->username = $username;
        $this->header = $header;
        $this->text = $text;
    }

    public function __toString(): string
    {
        return $this->username . ' сказал: ' . $this->header . ' ' . $this->text;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    public function getHeader(): string
    {
        return $this->header;
    }

    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }
}