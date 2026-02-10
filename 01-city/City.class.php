<?php

/**
 * Classe représentant une Ville.
 */
class City {
    public $name;
    public $departmentName;

    public function __construct(string $name, string $departmentName) {
        $this->name = $name;
        $this->departmentName = $departmentName;
    }

    public function __toString(): string {
        return $this->name . ' (' . $this->departmentName . ')';
    }
}

