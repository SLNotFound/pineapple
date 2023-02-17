<?php
// No.1 打印PHP的配置信息
//echo phpinfo();


// No.2 打印时间 date(string $format, ?int $timestamp)
// 默认为格林威治时间，可以在php.ini中设置时区。
//echo date('Y-m-d H:i:s');


// No.3 打印当前执行的PHP文件名
// __FILE__为php预定义的常量 参考预定义常量.md
//echo __FILE__;


// No.4 单引号和双引号
//$test = 'hello';
//echo 'test';
//echo "test$test";


// No.5 变量
//$num = 1;
//$str = 'alice';
//echo $str;
//echo $num;


// No.6 使用变量输出Hello World
//$str1 = "Hello";
//$str2 = "World";
//echo  $str1." ".$str2;


// No.7 使用常量计算圆的面积
//define("PI",3.1415);
//$r = 100;
//echo "半径为100的圆的面积是".PI*($r*$r);