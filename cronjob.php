<?php
$yx = opendir('myToken');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,name,from,comments&limit=5&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
set_time_limit(0);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$nama = ''.$stat[data][$i-1][from][name].'';
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$adminID = '100011750240363';
$admin='@['.$adminID.':1]';

$emo=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☝','👆','👇','✌','🤞','🖖','🤘','🤙','🖐','✋','👌','👍','👎','✊','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon=$emo[rand(0,count($emo)-1)];

$text = array(
''.$emoticon.' Owner Mujahid Khan & Ayesha Khan '.$emoticon.'',
);

$comments = $text[rand(0,count($text)-1)];

$site = '';

$return = '
'.$comments.'';

$reaction = $react[rand(0,count($react)-1)];

$stickers = array(
'919273981556651',
);

$sticker=$stickers[rand(0,count($stickers)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($return).'&access_token='.$token.'&method=POST');
}
}
echo '<center>Refresh Done</center>';
function auto($url) {
$curl = curl_init();
curl_setopt($curl,
CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,
CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>