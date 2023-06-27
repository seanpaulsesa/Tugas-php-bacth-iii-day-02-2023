<?php
    class car 
    {
        public $color;
        public $model;
        public function _contruct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        public function message()
        {
            return "my car is a " .  $this->color . " ".  $this->model . "!";
        }
    }
    $myCar = new Car('Blue','Avanza');
    echo $myCar->message();

    $myCar = new Car('Merah','BMW');
    echo $myCar->message();
?>