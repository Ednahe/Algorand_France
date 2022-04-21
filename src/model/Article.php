<?php

class Article {

    private int $id;
    private string $content;
    private ?string $title;
    private ?string $published_date;

    public function __construct() {

    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function getPublishedDate(): string {
        return $this->published_date;
    }

    public function setPublishedDate(string $published_date): void {
        $this->published_date = $published_date;
    }
}