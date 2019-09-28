<?php

echo '<pre>';

var_dump(0== "a"); // 0==0 -> true
var_dump("1"== "01"); // 1==1 -> true
var_dump("10"== "1e1"); // 10==10 -> true
var_dump(100== "1e2"); // 100==100 -> true

//interger
var_dump(1<=>1); //0
var_dump(1<=>2); //-1
var_dump(2<=>1); //1







?>
