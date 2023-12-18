<?php
    class cook {
        protected function kanniMaking(){
            echo"fresh kanni";
        }
    }
    class food extends cook{
        public function kanni(){
            $this->kannimaking();
        }
    }
    $lucnch = new food();
    $lucnch->kanni();
?>