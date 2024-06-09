<?php
require_once __DIR__ . "/products.php";
require_once __DIR__ . "/category.php";

class TypeProducts extends Products {
    private string $typeName;
    private Category $category;

    // costruttore
    public function __construct(string $_name, string $_image, int $_price, string $_typeName, Category $category)
    {
        parent::__construct($_name, $_image, $_price);

        $this->typeName = $_typeName;
        $this->category = $category;

    }

    // getter
    public function getType() {
        return $this->typeName;
    }

    public function getCategory() {
        return $this->category;
    }
}

?>