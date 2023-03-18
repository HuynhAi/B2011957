<?php
    class fruit{
        public $name;
        public $color;

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function __construct($name){
            $this->name = $name;
        }

        function __destruct(){
            echo 'the fruit is ' . $this->name .'<br>';
        }
    }
    $apple = new fruit('Aplle');
    $banana = new fruit('banana');

    echo $apple->get_name(); 
    echo'<br>';
    echo $banana->get_name();
    echo'<br>';
?>