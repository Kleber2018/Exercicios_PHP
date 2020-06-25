<?php
    trait HelloTrait {
        public function hello() {
            echo "Hello!";
        }
    }

    class Tarefa {
        use HelloTrait;
        public function msg(){
            echo $this->hello();
        }
    }
?>