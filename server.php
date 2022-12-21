<?php 
ob_start();
$token = "5601545486:AAHXLHoxsxUeq9xUtY2dSFgr8I9SYRjukNU"; 
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$BBI4BB = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$BBI4BB";
$BBI4BB = file_get_contents($url);
return json_decode($BBI4BB);
}
date_default_timezone_set('Asia/Baghdad');

include("fiction.php"); 

$em=substr(str_shuffle('1234567'),1,1);

$Ipkey ="توكن موقع";
if($em == "1") {
	$emoji = "😻";

	}
	
	$chish = file_get_contents('sss.txt');
	if($em == "2") {
	$emoji = "😁";
	}
	
	if($em == "3") {
	$emoji = "😃";
	}

if($em == "4") {
	$emoji = "😘";
	}
	
	if($em == "5") {
	$emoji = "🤖";
	}
	
	if($em == "6") {
	$emoji = "📡";
	}
	
	if($em == "7") {
	$emoji = "🔥";
	}
	
if($text and $chat_id !== $admin) {
if($stingggi['modebot'] == "off"){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
	bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   *
- السيرفر تحت الصيانه ؛ $emoji


*
", 
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'• Instagram services / خدمات انستكرام •' ,'url'=>"t.me/Salam_ServiceBot"]],
]])
]);return false;

  } 
 } 
 
 if($update->callback_query->data and $chat_id !== $admin) {
if($stingggi['modebot'] == "off"){
	
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
	$mk = bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   *
- السيرفر تحت الصيانه ؛ $emoji

*
", 
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
   
  'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'• Instagram services / خدمات انستكرام •' ,'url'=>"t.me/Salam_ServiceBot"]],
]])
]);return false;

  }
 } 
 
 
 if($stingggi['urlll'] == null) {
 	$urlmuq3 ="ip1d.com";
 }else{
 	$urlmuq3 =$stingggi['urlll'];
} 

if($stingggi['apikey'] == null) {

 $Ipkey ="توكن موقع";
 }else{
 	$Ipkey =$stingggi['apikey'];
} 


if($stingggi['likesid'] == null) {

 $likesid ="44";
 }else{
 	$likesid =$stingggi['likesid'];
} 

if($stingggi['followid'] == null) {

 $followid ="42";
 }else{
 	$followid =$stingggi['followid'];
} 

if($stingggi['followvipid'] == null) {

 $followvipid ="86";
 }else{
 	$followvipid =$stingggi['followvipid'];
} 

if($stingggi['vieewsid'] == null) {

 $vieewsid ="87";
 }else{
 	$vieewsid =$stingggi['vieewsid'];
} 
 
 if($stingggi['vieewsstid'] == null) {

 $vieewsstid ="43";
 }else{
 	$vieewsstid =$stingggi['vieewsstid'];
} 

if($stingggi['likest3']  == null) {

 $likest3 ="1";
 }else{
 	$likest3 =$stingggi['likest3'];
} 

if($stingggi['followt3']  == null) {

 $followt3 ="2";
 }else{
 	$followt3 =$stingggi['followt3'];
} 

if($stingggi['followvipt3']  == null) {

 $followvipt3 ="2.7";
 }else{
 	$followvipt3 =$stingggi['followvipt3'];
} 

if($stingggi['viwst3']  == null) {

 $viwst3 ="1";
 }else{
 	$viwst3 =$stingggi['viwst3'];
} 

if($stingggi['viewsstt3']  == null) {

 $viewsstt3 ="1";
 }else{
 	$viewsstt3 =$stingggi['viewsstt3'];
} 
 
$done = json_decode(file_get_contents("done.json"),true);
$dones = json_decode(file_get_contents("dones.json"),true);
$tslsll = $done["tslsl"];


$elias0 = json_decode(file_get_contents('php://input'));
$elias1 = $elias0->message;
$beroi =528429821;
$contact = $elias1->contact;
$user_id = $contact->user_id;
$phone_number = $contact->phone_number;
$mycoin = $sales[$chat_id]['backlect'];
 
 
 
    
 $oop = $xch;
$join = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$oop&user_id=".$from_id);
$zr = str_replace("@","",$oop);
if($aso['ch'] != null){
if($aso['gch'] == "✅"){
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
انت غير مشترك بقناه البوت ◽
اشترك ثم ارسل /start 

- $oop
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اضغط هنا' ,'url'=>"t.me/$zr"]],
]])
]);return false;
}
}
}

$test = json_decode(file_get_contents("test.json"),1);


$hdiatet = $setting["mtgr"]["hdia"];
$thoiltet = $setting["mtgr"]["thoil"];
$kmia = $setting["mtgr"]["kmia"];
	
	

$modemb = $done["mode"][$from_id];
$user = $message->from->username;

if($user == null){
	$usern = "[$from_id](tg://user?id=$from_id)";
	}else{
		$usern = "@$user";
		}
		
		$ttime = date('d.m.Y'); 
	
$tslves=$done["tslves"];
$tslflv=$done["tslflv"];
$tslve=$done["tslve"];
$tslfl=$done["tslfl"];
$tslike=$done["tslike"];
if($tslike == null){
	$tslike=1;
	}
	if($tslves == null){
	$tslves=1;
	}
	if($tslflv == null){
	$tslflv=1;
	}
	if($tslve == null){
	$tslve=1;
	}
	if($tslfl == null){
	$tslfl=1;
	}

 if($text == "/start" or $text == "back 🔙") {
 	$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);


bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"
-اهلآ بك في بوت Instagram services / خدمات انستكرام
يقدم أفضل خدمات رشق انستكرام وثابت فقط 
- لشراء النقاط  أو تبليغ عن مشكله يرجه مراسله المطور [@salammzori]
",
    'parse_mode'=>"MarkDown",
   'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"لطلب الرشق  اضغط هنا انستكرام👤📌"]],
[['text'=>"➕  اضافه اموال 💰"],['text'=>"👤 حسابك"]],
[['text'=>"تحويل اموال 🔧💰"]],
],
'resize_keyboard'=>true
])
]);return false;

}

$jmalilike = $likest3 * 1000;
$jmaliFill = $followt3 * 1000;
$jmaliFillvip = $followvipt3 * 1000;
$jmaliview = $viewsstt3 * 1000;
$jmaliview2 = $viwst3 * 1000;

 if($text == "لطلب الرشق  اضغط هنا انستكرام👤📌") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

، متابعين ؛ لايكات ؛  مشاهدات ستوري ومنشورات العام
 
🪩 رشق لايكـات انستقرام  لايك 1000 لايك = $jmalilike$
🪩رشق متابعين انستقرام ثابت 1000 متابع=$jmaliFill$
🪩رشق متابعين انستقرام VIP 1000 متابع=$jmaliFillvip$
🪩رشق مشاهدات ستوري 1000مشاهده=$jmaliview$
🪩رشق مشاهدات الفديوهات المنشوره 1000مشاهده = $jmaliview2$
		", 
		'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"لايكات | Like ❤"],['text'=>"Followers |  متابعين ثابت 💯"]],
[['text'=>"رشق VIP تعويض تلقائي ♻️"]],
[['text'=>"مشاهدات | View 👁️‍🗨️"],['text'=>"مشاهدات ستوري | View Story 👁️‍🗨️"]],
[['text'=>"Order 📮"]],
[['text'=>"back 🔙"]],
],
'resize_keyboard'=>true
])
	]);
$done["mode"][$from_id] = "insta";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text !== "لايكات | Like ❤") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="like_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}

if($text !== "رشق VIP تعويض تلقائي ♻️") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="zerodrvip_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}

if($text !== "Followers |  متابعين ثابت 💯") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="zerodr_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}

if($text !== "مشاهدات | View 👁️‍🗨️") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="viws_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}

if($text !== "مشاهدات ستوري | View Story 👁️‍🗨️") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="viwsstory_instagram") {
		
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}
if($text == "Order 📮") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send your order number and check it well 📮

- ارسل رقم الطلب وتاكد منه جيدا 📮.
		',
	]);
$done["mode"][$from_id] = "infoor";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text and $modemb == "infoor") {
	if($done["ord"][$text] == "on"){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

Order status : Completed ✅
the number : 0 👤.
 حاله الطلب:  مكتمل ✅
العدد الكلي: 0 👤
		',
	]);return false;
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

if($text and $modemb == "infoor") {
	if($done["ord"][$text] == null){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

رقم الطلب خطأ 
 The order number is wrong
		',
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}
$likes = 1;
$dl = $done["dolar"][$from_id];



if($text == "لايكات | Like ❤") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send likes request (more than 100):


- ارسل طلب الايكات( اكثر من 100) :
		',
	]);
$done["mode"][$from_id] = "like_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if(preg_match('/([0-9])/i',$text) and $modemb == "like_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send to link posts
- Check it well ⚠️ 
 
- ارسل رابط المنشور 
- تأكد منه جيدا ⚠️
		',
	]);
$done["mode"][$from_id] = "like3_instagram";
$done["dolar"][$from_id] = $text;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $likest3;
$dl = $done["dolar"][$from_id];

if($text and $modemb == "like3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- عذرا عزيزي رصيدك لا يكفي قم بتعبئه رصيدك عن طريق ( اسياسيل،  الزين كاش،  البتكوين)
 - من هنا: @salammzori
		',
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

$tslsl2=$done["tslsl"];
$allg = $tslike + 1;
$allg = $tslsl2 + 1;

if($text and $modemb == "like3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$likesid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

[√] Request type: Instagram likes
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: رشق لايكات انستكرام ثابت. 
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
		",
	]);
	bot('sendmessage',[
	'chat_id'=>$chish,
	'text'=>"
[√] Request type: Instagram likes
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: رشق لايكات انستكرام ثابت. 
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
",

  	]);
$done["mode"][$from_id] = null;
$done["tslsl"]+= 1;
$done["ord"][$allg] = "on";
$sales[$from_id]['backlect'] -= $can;
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

#رشـق ثآبت
if($text == "Followers |  متابعين ثابت 💯") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

Submit the number of followers you need: 
* 💯 order member/zero drop

ارسل عدد المتابعين المطلوبين :
    
* بدون اسقاط (ثابت) 💯
		",
	]);
$done["mode"][$from_id] = "zerodr_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if(preg_match('/([0-9])/i',$text) and $modemb == "zerodr_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send to link 
- Check it well ⚠️ 
 
- ارسل لرابط 
- تأكد منه جيدا ⚠️
		',
	]);
$done["mode"][$from_id] = "zerodr3_instagram";
$done["dolar"][$from_id] = $text;
$done["ord"][$allg] = "on";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $followt3;
$dl = $done["dolar"][$from_id];

if($text and $modemb == "zerodr3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- عذرا عزيزي رصيدك لا يكفي قم بتعبئه رصيدك عن طريق ( اسياسيل،  الزين كاش،  البتكوين)
 - من هنا: @salammzori
		',
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}
$allg = $tslfl + 1;
$allg = $tslsl2 + 1;
if($text and $modemb == "zerodr3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$followid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

[√] Request type: Instagram Followers /zero drop
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: رشق انستكرام ثابت 💯
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
		",
	]);
	bot('sendmessage',[
	'chat_id'=>$chish,
	'text'=>"
[√] Request type: Instagram Followers /zero drop
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: رشق انستكرام ثابت 💯
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
",

  	]);
$done["mode"][$from_id] = null;
$done["tslsl"]+= 1;
$sales[$from_id]['backlect'] -= $can;
$done["ord"][$allg] = "on";
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

if($text == "رشق VIP تعويض تلقائي ♻️") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

Submit the number of followers you need: 
* 💯 order member/zero drop

ارسل عدد المتابعين المطلوبين :
    
* بدون اسقاط (ثابت) 💯
		",
	]);
$done["mode"][$from_id] = "zerodrvip_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if(preg_match('/([0-9])/i',$text) and $modemb == "zerodrvip_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send to link 
- Check it well ⚠️ 
 
- ارسل لرابط 
- تأكد منه جيدا ⚠️
		',
	]);
$done["mode"][$from_id] = "zerodrvip3_instagram";
$done["dolar"][$from_id] = $text;
$done["ord"][$allg] = "on";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $followvipt3;
$dl = $done["dolar"][$from_id];

if(preg_match('/([0-9])/i',$text) and $modemb == "zerodrvip3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- عذرا عزيزي رصيدك لا يكفي قم بتعبئه رصيدك عن طريق ( اسياسيل،  الزين كاش،  البتكوين)
 - من هنا: @salammzori
		',
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

$allg = $tslflv + 1;
$allg = $tslsl2 + 1;
if($text and $modemb == "zerodrvip3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$followvipid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

[√] Request type: Instagram Followers /zero drop VIP 
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: انستكرام رشق VIP تعويض تلقائي ♻️
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
		",
	]);
	bot('sendmessage',[
	'chat_id'=>$chish,
	'text'=>"
[√] Request type: Instagram Followers /zero drop VIP 
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: انستكرام رشق VIP تعويض تلقائي ♻️
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
",

  	]);
$done["mode"][$from_id] = null;
$sales[$from_id]['backlect'] -= $can;
$done["tslsl"]+= 1;
$done["ord"][$allg] = "on";
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}


#bh
if($text == "مشاهدات | View 👁️‍🗨️") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send likes request (more than 100):


- ارسل طلب المشاهدات ( اكثر من 100) :
		',
	]);
$done["mode"][$from_id] = "viws_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text and $modemb == "viws_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send to link posts
- Check it well ⚠️ 
- To cancel the order, send /stop
 
- ارسل رابط المنشور 
- تأكد منه جيدا ⚠️
		',
	]);
$done["mode"][$from_id] = "viws3_instagram";
$done["dolar"][$from_id] = $text;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $viwst3;
$dl = $done["dolar"][$from_id];

if(preg_match('/([0-9])/i',$text) and $modemb == "viws3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- عذرا عزيزي رصيدك لا يكفي قم بتعبئه رصيدك عن طريق ( اسياسيل،  الزين كاش،  البتكوين)
 - من هنا: @salammzori
		',
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}
$allg = $tslve + 1;
$allg = $tslsl2 + 1;
if($text and $modemb == "viws3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$vieewsid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

[√] Request type: throwing instagram views
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: رشق مشاهدات انستكرام. 
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
		",
	]);
	bot('sendmessage',[
	'chat_id'=>$chish,
	'text'=>"
[√] Request type: throwing instagram views
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: رشق مشاهدات انستكرام. 
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
",

  	]);
$done["mode"][$from_id] = null;
$done["tslsl"]+= 1;
$done["ord"][$allg] = "on";
$sales[$from_id]['backlect'] -= $can;
save($sales);
$sales[$from_id]['backlect'] -= $can;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

#story

if($text == "مشاهدات ستوري | View Story 👁️‍🗨️") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send likes request (more than 100):


- ارسل طلب مشاهدات ستوري ( اكثر من 100) :
		',
	]);
$done["mode"][$from_id] = "viwsstory_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text and $modemb == "viwsstory_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send to link posts
- Check it well ⚠️ 
- To cancel the order, send /stop
 
- ارسل رابط المنشور 
- تأكد منه جيدا ⚠️
		',
	]);
$done["mode"][$from_id] = "viwsstory3_instagram";
$done["dolar"][$from_id] = $text;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $viewsstt3;
$dl = $done["dolar"][$from_id];

if($text and $modemb == "viwsstory3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- عذرا عزيزي رصيدك لا يكفي قم بتعبئه رصيدك عن طريق ( اسياسيل،  الزين كاش،  البتكوين)
 - من هنا: @salammzori
		',
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
} 
}
$allg = $tslves + 1;
$allg = $tslsl2 + 1;
if($text and $modemb == "viwsstory3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$vieewsstid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

[√] Request type: Instagram view story 
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: رشق مشاهدات ستوري انستكرام. 
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
		",
	]);
	bot('sendmessage',[
	'chat_id'=>$chish,
	'text'=>"
[√] Request type: Instagram view story 
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: رشق مشاهدات ستوري انستكرام. 
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
",
  	]);
$done["mode"][$from_id] = null;
$done["tslsl"]+= 1;
$done["ord"][$allg] = "on";
$sales[$from_id]['backlect'] -= $can;
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}



if($text == "👤 حسابك") {
	if($mycoin==null){
   	$mycoin = 0;
   }
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

- ايديك : : `$from_id` 🦋 .
- نقاطك : $mycoin ✨.
- الوقت: $ttime 🕦.
- ضغط على اضافه اموال لاضافه نقاط الي حسابك .
		",
		'parse_mode'=>"MarkDown",
	'disable_web_page_preview'=>true,
		'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"لطلب الرشق  اضغط هنا انستكرام👤📌"]],
[['text'=>"➕  اضافه اموال 💰"],['text'=>"👤 حسابك"]],
[['text'=>"تحويل اموال 🔧💰"]],
],
'resize_keyboard'=>true
])
	]);
$done["mode"][$from_id] = null;

$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text == "➕  اضافه اموال 💰") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

يمكنك اضافه النقاط عبر مطور البوت  

طرق الدفع  ( usdt  - اسياسيل - زين كاش )
		',
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
[['text'=>"اضغط هنا لشراء النقاط",'url'=>'https://t.me/BBI4BB']],
]
   ])
  ]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text == "تحويل اموال 🔧💰"){
  bot('sendMessage',[
		'chat_id'=>$chat_id,
        'text'=>"
ارسل ايدي الشخص الذي تريد تحويل الأموال له  
 Send the hand of the person you want to transfer money to

        " ,  

    'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
    ]);
    $done["mode"][$from_id] = "thoil";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
  }
  
  $user = $message->from->username;

if($user == null){
	$htwa = "[$from_id](tg://user?id=$from_id)";
	}else{
		$htwa = "@$user";
		}
if(preg_match('/([0-9])/i',$text) and $modemb == "thoil") {

bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

Send the amount to be transferred 
* Note that the amount will be deducted from your balance *.
 To cancel the operation send /stop
 
ارسل المبلغ المراد تحويله 
* ملاحضه سيتم قطع المبلغ من رصيدك *.
 لألغاء العملية ارسل /stop
		',
	]);
$done["mode"][$from_id] = "thoil2";
$done["for"][$from_id] = $text;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}


$tho = $done["for"][$from_id];
if(preg_match('/([0-9])/i',$text) and $modemb == "thoil2") {
if($mycoin > $text){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

- تم بنجاح عمليه التحويل من `$from_id` الي `$tho`
العدد المحول : $text
		",
		'parse_mode'=>"MarkDown",
   'disable_web_page_preview'=>true,
	]);
	bot('sendMessage',[
		'chat_id'=>$tho,
		'text'=>"

- Your balance has been successfully recharged ✅ 
- Amount filled in: $$text ✅
،- by: $htwa .
- تمت تعبئه رصيدك بنجاح ✅
- المبلغ الذي تمت تعبئته: $$text ✅
- من قبل : $htwa ✅
		",
		'parse_mode'=>"MarkDown",
   'disable_web_page_preview'=>true, 
	]);
$done["mode"][$from_id] = null;
$sales[$chat_id]['backlect'] -= $text;
$sales[$tho]['backlect'] += $text;
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

if($text and $modemb == "thoil2") {
if($mycoin < $text){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- عذرا عزيزي رصيدك لا يكفي قم بمراسله المطور لشحن رصيدك => [@salammzori]
		',
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

 
   

  