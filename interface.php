<!-- interface -->
<?php
    interface animal {
        public function makeSound();
    }
    class cat  implements animal {
    
        public function makeSound(){
            echo "Meow";
        }

    }
    $animal = new cat();
    $animal->makeSound();
?>
