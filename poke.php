<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('myToken');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$limitnf=5000; 
$stat= json_decode(auto('https://graph.facebook.com/me/friends?access_token='.$token.'&offset=0&limit=50'),true);
for($i=1;$i<=count($stat[data]);$i++){ 
set_time_limit(0);

echo auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/pokes?method=post&access_token='.$token.'');
}
}
echo "Success Pokes";
function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>