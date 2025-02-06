<?php
class Calculation{
    public $a, $b, $c;
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$c1 = new Calculation();
$c1->a = 10;
$c1->b = 20;
// cheo $c1->sum();

// checking the result, what will happen if i put some value in empty() function
// echo "empty(0)\n";
// var_dump(empty(0));
// echo "empty('0')";
// var_dump(empty("0"));
// echo "empty(null)";
// var_dump(empty(null));
// echo "empty(false)";
// var_dump(empty(false));
// echo "empty([])";
// var_dump(empty([]));
// echo "empty('')";
// var_dump(empty(""));
// echo "empty(' ')";
// var_dump(empty(" "));
// echo "empty('hello')";
// var_dump(empty("hello"));

?>
