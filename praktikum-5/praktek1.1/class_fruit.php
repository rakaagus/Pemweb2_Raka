<?php


class Fruit{
    public $name;
    public $color;
    public $weight;


    function set_name($name){ // a public function (default)
        $this->name = $name;
    }

    protected function set_color($color){
        $this->color = $color;
    }

    private function set_weight($weight){
        $this->weight = $weight;
    }
}

$manggo = new Fruit();
$manggo->set_name("Mangga");
$manggo->set_color("Kuning");
$manggo->set_weight("300");


?>