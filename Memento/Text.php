<?php

namespace Memento;

class Text
{
    protected $text;
    protected $careTakerText;

    public function __construct()
    {
        $this->careTakerText = new CareTakerText();
        $this->text = '';
    }

    public function writeText(string $text): void
    {
        $this->careTakerText->addMemento(new TextMemento($this->text));
        $this->text .= $text;
    }

    public function undoWriting(): void
    {
        $this->text = $this
            ->careTakerText
            ->getLastSavedState()
            ->getText();
    }

    public function returnText(): string
    {
        return $this->text;
    }
}