<?php

namespace Prototype;

abstract class BookPrototype
{
    protected $title;
    protected $subject;
    protected $holderName;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): BookPrototype
    {
        $this->title = $title;
        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): BookPrototype
    {
        $this->subject = $subject;
        return $this;
    }

    public function getHolderName(): string
    {
        return $this->holderName;
    }

    public function setHolderName(string $holderName): BookPrototype
    {
        $this->holderName = $holderName;
        return $this;
    }
}