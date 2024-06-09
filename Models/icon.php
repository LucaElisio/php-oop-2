<?php

trait Icon {
  private string $icon;

  public function getIcon(): string  
  {
    return $this->icon;
  }

  public function setIcon(string $icon): void {
    $this->icon = $icon;
  }

}

?>