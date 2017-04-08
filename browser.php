<?php
$address = 'qq.com';  // 网站地址
$port = 80;      // 端口
$dongu = 50;   //循环次数
if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
        echo "HaHa\n";
    }
 
    if (socket_bind($sock, $address, $port) === false) {       // 连接端口
        echo "HaHa\n";
    }
 
    if (socket_listen($sock, 5) === false) {
        echo "HaHa\n";
    }
        $msg = "HTTP/1.1 GET /".PHP_EOL."Host:".'http://localhost/test/phpddos54df/client.php'.PHP_EOL."Connection: close".PHP_EOL;
        socket_write($msg);
        socket_close($sock);
        $sayi++;   // 循环一次 变量sayi 加1
        echo "Goodbye...".$sayi;   // 输出循环次数
