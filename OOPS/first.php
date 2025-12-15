<?php 

    class calculation{
        public $a, $b, $c;

        function sum()
        {
            $this->c = $this->a + $this->b;
            return $this->c;
        }

        function sub()
        {
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }