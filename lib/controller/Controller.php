<?php

abstract class Controller {

    private string $path;

    public function __construct(string $path) {
        $this->path = $path;
    }

    public function setPath(string $path) {
        $this->path = $path;
    }

    public function renderView(array $options = ["Page non trouvée"]) {
        require $this->path;
    }
}