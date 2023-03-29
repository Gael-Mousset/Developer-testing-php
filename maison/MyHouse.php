<?php
class MyHouse {
    protected $color;
    protected $size;

    public function __construct($color, $size) {
        $this->color = $color;
        $this->size = $size;
    }

    public function generate() {
        return '<div class="house ' . $this->color . '" style="width:' . $this->size . 'px; height:' . $this->size . 'px;"></div>';
    }
}
