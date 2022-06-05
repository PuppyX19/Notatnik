<?php

class Notes
{
    private $noteId;
    private $userId;
    private $title;
    private $text;

    public function __construct($title, $text, $userId, $noteId = null)
    {
        $this->noteId = $noteId;
        $this->title = $title;
        $this->text = $text;
        $this->userId = $userId;

    }

    public function getNoteId()
    {
        return $this->noteId;
    }

    public function setNoteId($noteId): void
    {
        $this->noteId = $noteId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }

}