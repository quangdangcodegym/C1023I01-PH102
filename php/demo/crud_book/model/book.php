<?php

namespace Model;

use \DateTime;

class Book              // Danh từ, chữ cái đầu viết hoa, ko chứa kí đặc biệt - Pascal Case
{
    private int $id;
    private string $title;
    private string $author;
    private DateTime $createAt;     // camel case: viết thường chữ dầu, viết hoa chữ cái tiếp theo


    public function __construct(int $id, string $title, string $author, DateTime $createAt)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->createAt = $createAt;
    }

    /*
    public function __construct(private int $id, private string $title, private string $author, private DateTime $createAt)
    {
    }
    */


    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getCreateAt(): DateTime
    {
        return $this->createAt;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function setCreateAt(DateTime $createAt): void
    {
        $this->createAt = $createAt;
    }
}
