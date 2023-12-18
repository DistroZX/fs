    <!-- protected access define -->
    <?php
        class rbi{
            protected $amount;

            public function __construct($amount){
                $this->amount =$amount;

            }
            protected function lendingMoney(){
                echo "Credited $";
            }
        }
        class hdfc extends rbi{
            protected $customerName;

            public function __construct($amount, $customerName){
                parent::__construct($amount);
                $this->customerName = $customerName;
            
            }
            public function lendMoney(){
                $this->lendingMoney();
                    echo "$this->amount to $this->customerName";
            }

        }
        $bank = new hdfc (1000, "Salman");
        $bank->lendMoney();
    ?>
