<?php

trait ReturnOne {
    public function method (){
        return 1;
    }
}
trait ReturnTwo {
    public function method (){
        return 2;
    }
}
trait ReturnThree {
    public function method (){
        return 3;
    }
}

class Test  {
    use ReturnOne,ReturnTwo,ReturnThree{
        ReturnOne::method insteadof ReturnTwo;
        ReturnTwo::method insteadof ReturnThree;
        ReturnOne::method as one;
        ReturnTwo::method as two;
        ReturnThree::method as three;
    }
    public function getSum(){
        return $this->one() + $this->two() + $this->three();
    }
}
$Test = new Test();
echo $Test->getSum();