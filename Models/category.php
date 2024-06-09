<?php
require_once __DIR__ . "/icon.php";
class Category {
    use Icon;

    private string $name;
    // private string $icon;

    // costruttore
    public function __construct(string $_name)
    {
        $this->name = $_name;
    }

    // getter
    public function getCategoryName() {
        return $this->name;
    }

}


?>