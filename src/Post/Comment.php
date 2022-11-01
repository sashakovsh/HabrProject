<?php

namespace Alex\Habr\Post;

use Alex\Habr\User\User;

class Comment
{
    private int $id;
    private User $userId;
    private int $postId;
    private string $text;

    public function __construct(User $userId, int $postId, string $text)
    {
        $this->userId = $userId;
        $this->postId = $postId;
        $this->text = $text;
    }

    public function __toString()
    {
        return $this->userId . ' прокомментировал пост №' . $this->postId . ' ' . $this->text;
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

    public function getPostId(): int
    {
        return $this->postId;
    }

    public function setPostId(int $postId): void
    {
        $this->postId = $postId;
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