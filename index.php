<?php
    Class Car{
       public function color (){
        echo 'red';
        }

        public function engine(){
            echo '4000cc';
        }

        public function model(){
            echo 'B346Y';
        }
    }

    // new Car(); //object

    // variable
    $objectCar = new Car();

    $objectCar->color();
    echo'<br>';
    $objectCar->model();
    echo'<br>';
    $objectCar->engine();


    Class Calculator {
        public function sum(){
            $x = 20;
            $y = 30;
            $result = $x+$y;
            return $result;
            // echo '$result'
        }
        public function sub(){
            $x = 40;
            $y = 30;
            $result = $x-$y;
            return $result;
            // echo '$result'
        }
    }
    
     $objectCalculator = new Calculator();

        echo 'Calculator Class <br>';

        echo $objectCalculator->sum();
        echo'<br>';

        // $objectCalculator->sum();
        echo $objectCalculator->sub();
?>