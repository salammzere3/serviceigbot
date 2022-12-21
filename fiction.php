<?php
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$nammee = $update->callback_query->from->first_name;
$bot_tele1 = file_get_contents('userstart.json');
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$setengss = file_get_contents("setengss.txt");
$setengssj = file_get_contents("setengss.txt");
$hadehday = file_get_contents("hadehday.txt");
$hadehdayj = file_get_contents("hadehday.txt");
$sss = file_get_contents('sss.txt');

$alm = file_get_contents('alm.txt');
$ccoinj = file_get_contents("ccoin.txt");
$admin = 528429821; #ايديك
$ccoin = file_get_contents("ccoin.txt");
$$codejj = file_get_contents("codejj.json");
$salesnem = file_get_contents("salesnem.json");
$cccoin = $ccoin;
$sudo = $admin;
$stinggggj = json_decode(file_get_contents("stinggggj.json"),true);
$stingggg = json_decode(file_get_contents("stingggg.json"),true);
$band = array($stingggg['stingggg']['band']);
$stingggi = json_decode(file_get_contents("stingggi.json"),true);
$admins = array($admin,$stingggi['stingggi']['admins']);
$type = $update->message->chat->type;
$u = json_decode(file_get_contents('member.json'),true);
if(!in_array($chat_id, $u) and $type == "private") {
      $u[] = "$chat_id";
      file_put_contents('member.json',json_encode($u));
  }
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
$from_id = $chat_id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
  $message = $update->message;
 $user = $update->callback_query->from->username;
$sales = json_decode(file_get_contents('sales.json'),true);

$name = $message->from->first_name;
$id=$update->callback_query->from->id;
} 
function save($array){
    file_put_contents('sales.json', json_encode($array));
}


//---------1----



$msharkty = $sales['msh'][$from_id]['modest'];
   $hd = $sales['mrktc'][$from_id]['hd'];
   $th = $sales['mrktc'][$from_id]['th'];
   $mrkt = $sales[$chat_id]['markt'];
   
   $modir = $admin; 
$homse = explode("\n", $bot_tele1);
$name = $update->message->from->first_name;
$id = $message->from->id;

   $mycoin = $sales[$chat_id]['backlect'];
   
   if($msharkty==null){
   	$msharkty = 0;
   }
   
   if($hd==null){
   	$hd = 0;
   }
   
   if($th==null){
   	$th = 0;
   }
   
   if($mrkt==null){
   	$mrkt = 0;
   }
   
   if($mycoin==null){
   	$mycoin = 0;
   }
   
   if($setengssj == null){
   	$setengssj = 1;
   }
   
   if($hadehdayj == null){
   	$hadehdayj = 5;
   }
   
   $hdiatet = $setting["mtgr"]["hdia"];
$thoiltet = $setting["mtgr"]["thoil"];
$kmia = $setting["mtgr"]["kmia"];
if($hdiatet == "✅"){
	$hdiatext = "الهدية اليومية 🎁";
	}
	
	if($thoiltet == "✅"){
	$thoiltext = "تحويل النقاط";
	}
	
	if($alm == null){
	$alm = "لايوجد";
	}
	
	if($kmia == "✅"){
	$kmiatext = "الكميه ➰";
	}
	
	
$admin = 528429821; #ايديك
   
  $setting = json_decode(file_get_contents("setting.json"),true);
if (!file_exists("setting.json")) {
#	$put = [];
$setting["mtgr"]["hdia"]="✅";
$setting["mtgr"]["thoil"]="✅";
$setting["mtgr"]["kmia"]="✅";
file_put_contents("setting.json", json_encode($setting));
}
$thoill =$setting["mtgr"]["thoil"];
$hdia=$setting["mtgr"]["hdia"];
$kmia=$setting["mtgr"]["kmia"];
$modekm=$setting["mtgr"]["kmia"];

$Devv = $admin;
$token = API_KEY;

   
$getmosh1 = file_get_contents("getmosh1.txt");
$getmoshh1 = explode("\n",$getmosh1);
$getmosh = file_get_contents("getmosh.txt");
$getmoshh = explode("\n",$getmosh);
$channels = file_get_contents("channels.txt");
$channel = file_get_contents("channel.txt");
$setcoin1 = file_get_contents("setcoin1.txt");
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');

$sales = json_decode(file_get_contents('sales.json'),1);

if($data == "forall"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• ارسال عدد النقاط المراد ارسالها الى الجميع .",
]);
$sales['mode'] = 'forall';
  save($sales);
  exit;
}
//»»»»»»»»»»»»»»»»»» 

$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->ch_post){
	$message = $update->ch_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_ch_post){
	$message = $update->edited_ch_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[back]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$title = $message->chat->title;
///
$aso = json_decode(file_get_contents("aso.json"),1);
if($aso['gch'] == null){
$aso['gch'] = "❎";
file_put_contents("aso.json",json_encode($aso));
}
$xch = $aso['ch'];
///
$members = explode("\n",file_get_contents("members.txt"));
$count = count($members) -1;
if($tc == 'private' and !in_array($from_id,$members)){
file_put_contents('members.txt',$from_id."\n",FILE_APPEND);
}
///

if($text == "م" and $from_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• اهلا بك في لوحه الأدمن الخاصه بالبوت ⚙

- يمكنك التحكم في البوت الخاص بك من هنا⤵️

",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اشعار الدخول '.$d6.'' ,'callback_data'=>"d6"],
['text'=>'التوجيه  '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'رساله الترحيب (start)' ,'callback_data'=>"4"]],
[['text'=>'قناة الاشتراك 📊' ,'callback_data'=>"2"],['text'=>'الاحصائيات 📈' ,'callback_data'=>"1"]],
[['text'=>'قسم الاذاعه  ' ,'callback_data'=>"10"],['text'=>'قسم الادمنيه ' ,'callback_data'=>"5"]],
[['text'=>'اعدادات بوت الرشق ؛ ⚙' ,'callback_data'=>"/vips"]],
]])
]);
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
$aso['ok'] = "no";

file_put_contents("aso.json",json_encode($aso));
}
if($data == "back"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• اهلا بك في لوحه الأدمن الخاصه بالبوت ⚙

- يمكنك التحكم في البوت الخاص بك من هنا⤵️
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اشعار الدخول '.$d6.'' ,'callback_data'=>"d6"],
['text'=>'التوجيه  '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'رساله الترحيب (start)' ,'callback_data'=>"4"]],
[['text'=>'قناة الاشتراك 📊' ,'callback_data'=>"2"],['text'=>'الاحصائيات 📈' ,'callback_data'=>"1"]],
[['text'=>'قسم الاذاعه  ' ,'callback_data'=>"10"],['text'=>'قسم الادمنيه ' ,'callback_data'=>"5"]],
[['text'=>'اعدادات بوت الرشق ؛ ⚙' ,'callback_data'=>"/vips"]],
]])
]);
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
$stingggi['inbb'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$aso['ok'] = "no";
file_put_contents("aso.json",json_encode($aso));
}
if($data == "1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

عدد الاعضاء : *$count*

",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ↪️' ,'callback_data'=>"back"]],
]])
]);
}
if($aso['ch'] == null){
$ch = "لا توجد قناة حاليا";
}elseif($aso['ch'] != null){
$ch = $aso['ch'];
}
$nch = $aso['gch'];
if($data == "2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
قنوات الاشتراك الاجباري 🔽
🔢 القناة : $ch
⎯ ⎯ ⎯ ⎯
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'حذف القناة 🗑️' ,'callback_data'=>"del_ch"],['text'=>'اضف قناة ➕' ,'callback_data'=>"add_ch"]],
[['text'=>'الاشتراك الاجباري '.$nch.'' ,'callback_data'=>"3"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$aso['ok'] = "no";
file_put_contents("aso.json",json_encode($aso));
}
if($data == "3" ){
if($aso['gch']!="✅"){
$iu = "✅";
}else{
$iu ="❎";
}
$aso['gch'] = $iu;
file_put_contents("aso.json",json_encode($aso));
$nch = $aso['gch'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'حذف القناة 🗑️' ,'callback_data'=>"del_ch"],['text'=>'اضف قناة ➕' ,'callback_data'=>"add_ch"]],
[['text'=>'الاشتراك الاجباري '.$nch.'' ,'callback_data'=>"3"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);}
if($data == "add_ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارفعني ادمن في القناه وارسل معرف القناه ⚙
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"2"]],
]])
]);
$aso['ok'] = "ok_ch";
file_put_contents("aso.json",json_encode($aso));
exit();
}
if(preg_match("/@/",$text) and $aso['ok'] == "ok_ch" and $from_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تم اضافه القناة الى الاشتراك الاجباري",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"2"]],
]])
]);
$aso['ok'] = "no";
$aso['ch'] = $text;
file_put_contents("aso.json",json_encode($aso));
}
if(!preg_match("/@/",$text) and $aso['ok'] == "ok_ch" and !$data and $from_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حدث خطاء تاكد من معرف القناة ⚠️",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "del_ch" and $ch != "لا توجد قناة حاليا"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم حذف القناة $ch ✅
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"2"]],
]])
]);
$aso['ch'] = null;
file_put_contents("aso.json",json_encode($aso));
}
if($data == "del_ch" and $ch == "لا توجد قناة حاليا"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
لا توجد قناة ليتم حذفها ⚠️
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"2"]],
]])
]);
}
if($data == "4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
يمكنك الان ارسال رسالة الـstart ⚙
رسالة الـstart الحالية : $start
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ↪️' ,'callback_data'=>"back"]],
]])
]);
$aso['ok'] = "ok_start";
file_put_contents("aso.json",json_encode($aso));
}
if($text and $aso['ok'] == "ok_start" and $from_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم تغير رسالة الـstart الى ℹ️:
$text
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);
$aso['ok'] = "no";
$aso['start'] = $text;
file_put_contents("aso.json",json_encode($aso));
}

if($text== "/start" and in_array($from_id,$aso['admin'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"

• اهلا بك في لوحه الأدمن الخاصه بالبوت ⚙

- يمكنك التحكم في البوت الخاص بك من هنا⤵️

",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اشعار الدخول '.$d6.'' ,'callback_data'=>"d6"],
['text'=>'التوجيه  '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'رساله الترحيب (start)' ,'callback_data'=>"4"]],
[['text'=>'قناة الاشتراك 📊' ,'callback_data'=>"2"],['text'=>'الاحصائيات 📈' ,'callback_data'=>"1"]],
[['text'=>'قسم الاذاعه  ' ,'callback_data'=>"10"],['text'=>'قسم الادمنيه ' ,'callback_data'=>"5"]],

]])
]);}
$d6 = $aso['d6'];
$d7 = $aso['d7'];
if($data == "6"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
اهلا بك في لوحه الاشعارات ⚙

التحكم في لوحه من هنا ⤵️
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اشعارات الدخول '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>'اشعارات الاستخدام '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);}
if($data == "d6" ){
if($aso['d6']!="✅"){
$dp = "✅";
}else{
$dp ="❎";
}
$aso['d6'] = $dp;
file_put_contents("aso.json",json_encode($aso));
$d6 = $aso['d6'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اشعارات الدخول '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>'اشعارات الاستخدام '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);}
if($data == "d7" ){
if($aso['d7']!="✅"){
$as = "✅";
}else{
$as ="❎";
}
$aso['d7'] = $as;
file_put_contents("aso.json",json_encode($aso));
$d7 = $aso['d7'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اشعارات الدخول '.$d6.'' ,'callback_data'=>"d6"]],
[['text'=>'اشعارات الاستخدام '.$d7.'' ,'callback_data'=>"d7"]],
[['text'=>'رجوع ↪️' ,'callback_data'=>"back"]],
]])
]);}
if($message and $text != "/start" and $from_id != $admin and $d7 == "✅" and !$data){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
 'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($user == null){
$user = "None";
}elseif($user != null){
$user = $user;
}
if($text == "/start" and $from_id != $admin and $d6 == "✅" and !in_array($from_id,$members)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم دخول عضو جديد الى البوت ℹ️ :
الاسم : [$name]
المعرف : [@$user]
الايدي : [$from_id](tg://user?id=$from_id)
⎯ ⎯ ⎯ ⎯
",
'parse_mode'=>"Markdown",
]);
}
#اذاعه .
if($data == "10"){
			            bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"
ارسل الرساله التي تريد اذاعتها يمكن ان تكون (نص، صوره ، فديو، الخ) ⚙
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء ↪️' ,'callback_data'=>"back"]],
]])
]);
$aso['ok'] = "send";
file_put_contents("aso.json",json_encode($aso));
}
if(!$data and $aso['ok'] == 'send' and $from_id == $admin){
				foreach($members as $ASEEL){
					if($text)
bot('sendMessage', [
'chat_id'=>$ASEEL,
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($photo)
bot('sendphoto', [
'chat_id'=>$ASEEL,
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video)
bot('Sendvideo',[
'chat_id'=>$ASEEL,
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video_note)
bot('Sendvideonote',[
'chat_id'=>$ASEEL,
'video_note'=>$video_note_id,
]);
if($sticker)
bot('Sendsticker',[
'chat_id'=>$ASEEL,
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($file)
bot('SendDocument',[
'chat_id'=>$ASEEL,
'document'=>$file_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($music)
bot('Sendaudio',[
'chat_id'=>$ASEEL,
'audio'=>$music_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($voice)
bot('Sendvoice',[
'chat_id'=>$ASEEL,
'voice'=>$voice_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
					}
	             for($i=0;$i<count($members); $i++){
$ok = bot('sendChatAction' , ['chat_id' =>$members[$i],
'action' => 'typing' ,])->ok;
if($members[$i] != "" and $ok != 1){
file_put_contents("A5.txt","$members[$i]
",FILE_APPEND);
}}
$ooo = explode("\n",file_get_contents("A5.txt"));
$iii = count($ooo) - 1;
$mmm = $count - $iii;
					bot('sendmessage',[
	'chat_id'=>$chat_id, 
'text'=>"
تم الانتهاء من الاذاعة ✅
⎯ ⎯ ⎯ ⎯
تم ارسالها الى $mmm
لم ترسل الى $iii
⎯ ⎯ ⎯ ⎯
",
'parse_mode'=>"Markdown",
	'reply_to_meesage_id'=>$message_id,
]);

					unlink("A5.txt");
	file_put_contents("aso.json",json_encode($aso));
				}

if($text and $sales['mode']  == "forall"){
	$cut = explode("\n",file_get_contents("stats/users.txt"));
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم ارسال *$text* نقطة الى جميع مستخدمين المتجر الخاص بك .

- يمكنك ارسال اذاعة اليهم لكي تخبرهم انك قمت باضافه *$text* نقطة الى حساباتهم .
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
for ($i=0; $i < count($cut); $i++) { 
$sales[$cut[$i]]['backlect'] += $text;
$sales['mode'] = null;
save($sales);
}
}

$cut = explode("\n",file_get_contents("stats/users.txt"));
if($data == "delall"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• ارسال عدد النقاط المراد خصمها من الجميع .",
]);
$sales['mode'] = 'delall';
  save($sales);
  exit;
}
//»»»»»»»»»»»»»»»»»» 

if($text and $sales['mode']  == "delall"){
	$cut = explode("\n",file_get_contents("stats/users.txt"));
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم خصم *$text* نقاط من جميع مستخدمين المتجر الخاص بك .
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);

for ($i=0; $i < count($cut); $i++) { 
	$sales[$cut[$i]]['backlect'] -= $text;
	$sales['mode'] = null;
  
save($sales);
}
}

if($data == "delto0"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم تصفير نقاط الجميع بنجاح .",
]);
for ($i=0; $i < count($cut); $i++) { 
$sales[$cut[$i]]['backlect'] = 0;
$sales['mode'] = null;
save($sales);
}
}

if($data == "sendcoin"){
if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"• ارسال الان ايدي الشخص .",
]);
  $sales['mode'] = 'chat';
  save($sales);
  exit;
  }
 }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat'){
   if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "
• ارسال عدد النقاط المراد ارسالها 
",
 ]);
   $sales['mode'] = 'poi';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi'){
 if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"
• تم ارسال ($text) الي حساب `".$sales['idd']."`
تم إضافة $text نقطة إلى حساب ".$sales['idd']." بنجاح ",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"back"]],
]])
]);   
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"
- Your balance has been successfully recharged ✅ 
- Amount filled in: $$text ✅
،- by: @junral .
- تمت تعبئه رصيدك بنجاح ✅
- المبلغ الذي تمت تعبئته: $$text ✅
- من قبل : @junral .
",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['backlect'] += $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == "takecoin"){
 if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد خصم النقاط منه",
]);
  $sales['mode'] = 'chat1';
  save($sales);
  exit;
  }
 }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat1'){
    if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد خصمها",
 ]);
   $sales['mode'] = 'poi1';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi1'){
  if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"
 • تم خصم ($text) نقاط من `".$sales['idd']."`
 
",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"back"]],
]])
]);   
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"
  تم خصم ( $text ) من نقاطك .
  ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['backlect'] -= $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}


if($data == 'shh'){
 if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- ارسل معرف القناة ألان لطفا !
",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'• مسح القناة وتطعطيل النشر •','callback_data'=>'delandoff']]
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("sss.txt","ok");
 }
}

if($data == 'delandoff'){
 if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم المسح بنجاح •
",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'• مسح القناة وتطعطيل النشر •','callback_data'=>'delandoff']]
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("sss.txt",null);
 }
}
if($text and $sss == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم التعين بنجاح",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("sss.txt","$text");
 }
}
 if($data == 'alm'){
  if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسال معرف حسابك او بوت تواصل الخاص بك 📬",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("alm.txt","ok");
 }
}
if($text and $alm == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الحفظ ✅",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("alm.txt","$text");
 }
}
  if($data == 'setengss'){
   if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل عدد النقاط التي يحصل عليها المستخدم من مشاركة الرابط الخاص به .",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("setengss.txt","ok");
 }
}
if($text and $setengss == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم الحفظ بنجاح . ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
unlink('setengss.txt');
file_put_contents("setengss.txt","$text");
 }
}
  if($data == 'hadehday'){
   if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل عدد النقاط التي بحصل عليها الشخص 📬",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("hadehday.txt","ok");
  }
 }
if($text and $hadehday == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم تعين *$text* . ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
unlink('hadehday.txt');
file_put_contents("hadehday.txt","$text");
 }
}
 



 
$Ipkey ="توكن موقع";
$Ccbv = json_decode(file_get_contents("https://ip1d.com/api/v2?key=&Ipkey&action=balance"));
$Rassed =$Ccbv->balance;
if($data== '/vips'){
if( $chat_id == 528429821){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" 
اعدادات البوت 📄

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"كشف رصيد 🧰",'callback_data'=>"almapikey"]], 
[['text'=>'تغير ربط الموقع ','callback_data'=>"chhn"]],
[['text'=>' تغير API KEY','callback_data'=>"CH2J"]], 
[['text'=>' تعين اسعار الخدمات 🌐','callback_data'=>"t3enns"]], 
[['text'=>' اعدادات رئيسيه ✳️','callback_data'=>"rashq"]], 
[['text'=>'• رجوع •','callback_data'=>'back']]
]])
]);   
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 'oner1'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- تم فتح السيرفر ؛ 📡
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],

[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
]])
]);   
$stingggi['modebot'] = "onn";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 'chhn'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- ارسل الان رابط الموقع بدون https
مثال 
ABOALI.COM
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "on";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 't3enns'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- قسم تعين الاسعار ®️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير سعر الخدمه ( لايكات | Like ❤) ','callback_data'=>"t3enns2"],['text'=>'تغير سعر الخدمه  ( Followers |  متابعين ثابت 💯) ','callback_data'=>"t3enns3"]],
[['text'=>'تغير سعر الخدمه  ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"t3enns4"],['text'=>'تغير سعر الخدمه  ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"t3enns5"]],
[['text'=>'تغير سعر الخدمه  ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"t3enns6"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "on";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}


#t3ens
if($data== 't3enns2'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل سعر قسم لايكات الان ❤️

*#ملاحضه*
ارسل السعر لكل اجمالي ( 1 لايك) 
مثلا سعر ١لايك يساوي ١
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "likest3";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "likest3") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ سعر خدمه لايكات ❤️
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['likest3'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

#changexdm2
if($data== 't3enns3'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل سعر قسم متابعين ثابت ❤️

*#ملاحضه*
ارسل السعر لكل اجمالي ( 1 لايك) 
مثلا سعر ١لايك يساوي ١

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "followt3";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "followt3") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ سعر متابع ثايت ❤️
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['followt3'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 't3enns4'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل سعر قسم متابعين vip ❤️

*#ملاحضه*
ارسل السعر لكل اجمالي ( 1 لايك) 
مثلا سعر ١لايك يساوي ١

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "followvipt3";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "followvipt3") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ سعر متابع vip ❤️
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['followvipt3'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 't3enns5'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل سعر قسم مشاهدات ❤️

*#ملاحضه*
ارسل السعر لكل اجمالي ( 1 لايك) 
مثلا سعر ١لايك يساوي ١

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "viwst3";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "viwst3") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ سعر مشاهدات ❤️
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['viwst3'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 't3enns6' ){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل سعر قسم مشاهدات ستوري، ❤️

*#ملاحضه*
ارسل السعر لكل اجمالي ( 1 لايك) 
مثلا سعر ١لايك يساوي ١

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "viewsstt3";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "viewsstt3") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ سعر مشاهدات ستوري، ❤️
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['viewsstt3'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

#changexdm3
if($data== 'changexdm3' ){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رقم خدمه follow vip ❤️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "followvipch";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "followvipch") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ رقم خدمه متابعين vip 
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['followvipid'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

#changexdm4
if($data== 'changexdm4' ){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رقم خدمه مشاهدات ❤️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "vieewsch";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "vieewsch") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ رقم خدمه مشاهدات
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['vieewsid'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

#changexdm5
if($data== 'changexdm5'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رقم خدمه مشاهدات ستوري ❤️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "vieewsstch";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "vieewsstch") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ رقم خدمه مشاهدات ستوري
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['vieewsstid'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}
#end
if($text and $stingggi['inbb'] == "on") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['urlll'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

#changexdm1
if($data== 'changexdm1'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رقم خدمه لايكات ❤️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "likesch";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "likesch") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ رقم خدمه لايكات
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['likesid'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

#changexdm2
if($data== 'changexdm2'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رقم خدمه متابعين ثابت ❤️

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "followch";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "followch") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ رقم خدمه متابعين
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['followid'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}


#changexdm3
if($data== 'changexdm3' ){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رقم خدمه follow vip ❤️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "followvipch";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "followvipch") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ رقم خدمه متابعين vip 
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['followvipid'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

#changexdm4
if($data== 'changexdm4' ){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رقم خدمه مشاهدات ❤️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "vieewsch";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "vieewsch") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ رقم خدمه مشاهدات
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['vieewsid'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

#changexdm5
if($data== 'changexdm5'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل رقم خدمه مشاهدات ستوري ❤️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'تغير رقم الخدمه ( لايكات | Like ❤) ','callback_data'=>"changexdm1"],['text'=>'تغير رقم الخدمه ( Followers |  متابعين ثابت 💯) ','callback_data'=>"changexdm2"]],
[['text'=>'تغير رقم الخدمه ( رشق VIP تعويض تلقائي ♻️ ) ','callback_data'=>"changexdm3"],['text'=>'تغير رقم الخدمه ( مشاهدات | View 👁️‍🗨️) ','callback_data'=>"changexdm4"]],
[['text'=>'تغير رقم الخدمه ( مشاهدات ستوري | View Story 👁️‍🗨️) ','callback_data'=>"changexdm5"]],
[['text'=>'رجوع','callback_data'=>"back"]], 

]])

]);   
$stingggi['inbb'] = "vieewsstch";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "vieewsstch") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ رقم خدمه مشاهدات ستوري
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'• رجوع •','callback_data'=>'/vips']]

]])
]);   
$stingggi['inbb'] = null;
$stingggi['vieewsstid'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 'almapikey'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل الان ايدي الشخص
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,

]);   
$stingggi['inbb'] = "idrsed";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "idrsed") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- رصيده
".$sales[$text]['backlect']."
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,

]);   
$stingggi['inbb'] = null;
$stingggi['urlll'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 'CH2J'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- ارسل ال الايبي كي الان
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,

]);   
$stingggi['inbb'] = "on2";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($text and $stingggi['inbb'] == "on2") {
	if( $chat_id == $admin){
bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"
- تم الحفظ api key
$text
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,

]);   
$stingggi['inbb'] = null;
$stingggi['apikey'] = $text;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 'ofer1'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- تم قفل السيرفر ؛ 📡
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],

[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
]])
]);   
$stingggi['modebot'] = "off";
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 'rashq'){
if( $chat_id == $admin){
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
اعدادات رئيسيه لبوت الرشق ®️
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],

[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
[['text'=>'• رجوع •','callback_data'=>'/vips']]
]])
]);   
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

$thoill =$setting["mtgr"]["thoil"];

 

if($data == 'ccoin'){
 if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل عدد النقاط التي تخصم عند التحويل 📬 ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("ccoin.txt","ok");
 }
}
if($text and $ccoin == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم تعين *$text* .",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("ccoin.txt","$text");
 }
}
			
							
if($data == "modethoil" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["mtgr"]["thoil"];
if($join=="✅"){
$setting["mtgr"]["thoil"]="❌";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : $stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],

[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>'تحويل النقاط : ❌ ','callback_data'=>"modethoil"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
]])
]);   
}
if($join=="❌"){
$setting["mtgr"]["thoil"]="✅";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : $stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],

[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>'تحويل النقاط : ✅ ','callback_data'=>"modethoil"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],

[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
]])
]);   
}
file_put_contents("setting.json", json_encode($setting));
sendsero($chat_id,$message_id);
} 




if($data == "hdiamode" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["mtgr"]["hdia"];
if($join=="✅"){
$setting["mtgr"]["hdia"]="❌";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : $stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],

[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : ❌",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]], 
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
]])
]);   
}
if($join=="❌"){
$setting["mtgr"]["hdia"]="✅";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"
- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : $stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],

[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : ✅",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]], 
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
]])
]);   
}
file_put_contents("setting.json", json_encode($setting));
sendsero($chat_id,$message_id);
}


#35
if($data == "kmia" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["mtgr"]["kmia"];
if($join=="✅"){
$setting["mtgr"]["kmia"]="❌";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"
- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : $stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],

[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>'كميه السلع المتوفره : ❌','callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
]])
]);   
}
if($join=="❌"){
$setting["mtgr"]["kmia"]="✅";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : $stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],

[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>'كميه السلع المتوفره : ✅','callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
[['text'=>'فتح السيرفر ؛ 📡','callback_data'=>"oner1"],['text'=>'قفل السيرفر ؛ 📡','callback_data'=>"ofer1"]],
]])
]);   
}
file_put_contents("setting.json", json_encode($setting));
sendsero($chat_id,$message_id);
} 


#56
if($text == "/id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$chat_id
",
 'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
}




 if($data == 'add'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'• قم بأرسال اسم السلعة 📬',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'• رجوع •','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['mode'] = 'add';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'add'){
  if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅.
~ الان ارسل عدد النقاط ( السعر ) المطلوبة للشراء ، 💸 رقم فقط
',
  ]);
  $sales['n'] = $text;
  $sales['mode'] = 'addm';
  save($sales);
  exit;
 }
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'addm'){
  if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
• تم الحفظ السلعة ✅.
ℹ️┇الاسم : $sales[n]
??┇السعر : $text
🅱 | ارسل صورة للسلعه تستطيع ان تضع في الصوره وصف !
",
         "parse_mode"=>"markdown"
  ]);
  $sales['p'] = $text;
  $sales['mode'] = "photo";
  
  save($sales);
  exit;
 }
 }if($text != '/start' and $message->photo != null and $sales['mode'] == 'photo'){
  if( $chat_id == $admin){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,35);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"تم حفظ الصورة✅
   
   • تم الحفظ السلعة ✅.
ℹ️┇الاسم : $sales[n]
💵┇السعر : $sales[p]
⛓┇كود السلعة : $code

- لتفعيل التسليم التلقائي ؛ ✅
ارسل ( ملف او نص او صوره او فيديو )
",
         "parse_mode"=>"markdown"
  ]);
  $dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
  bot('sendMessage',[
   'chat_id'=>$sss,
   'text'=>"
- تم اضافة سلعة جديدة ✅
- من ماركت : [@$bott] 🤍

🏷 ¦ السلعة :- *$sales[n]* 📱
💰 ¦ السعر :- *$sales[p]*
📆 ¦ التاريخ :- *$dayy - $year/$month/$day*
",
'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"بوت الماركت 🤖",'url'=>"https://t.me/$bott?start"] ] ] ])
  ]);
  file_put_contents('codejj.json', "\n" . $code ."\n",FILE_APPEND);    
  file_put_contents('salesnem.json', "\n" . $sales[n] . "\n",FILE_APPEND);    
  $sales['sales'][$code]['name'] = $sales['n'];
  $sales['sales'][$code]['price'] = $sales['p'];
  $sales['sales'][$code]['photo'] = $message->photo[0]->file_id;
  $sales['sales'][$code]['caption'] = $message->caption;
  $sales['p'] = null;
  $sales['n'] = null;
  $sales['mode'] = "file";
  $sales["baageel"]=$code;
  save($sales);
  exit;
 }
 }
 
 if($text != '/start'  and $sales['mode'] == 'file'){
  if( $chat_id == $admin){
 if($message->document){
  $file_id=$message->document->file_id;
 $ty="document";
}elseif($message->video){
 $file_id=$message->video->file_id;
 $ty="video";
 }elseif($message->text){
 $file_id=$text;
 $ty="text";
}elseif($message->photo){
 $file_id=$message->photo[0]->file_id;
 $ty="photo";
 }
 $sales['sales'][$sales["baageel"]]['file']=$file_id;
 $sales['sales'][$sales["baageel"]]['file2']=$ty;
 $sales['sales'][$sales["baageel"]]['numbers']='end';
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ التسليم التلقائي 

ارسل عدد مرات بيع السلعة

اذا تريد بيع السلعه للجميع اضغط على غير محدود ♻️',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- غير محدود ♻️','callback_data'=>'stengbotttt']]
      ]
    ])
  ]);
  $sales['mode'] = "Numbers";
  save($sales);
  exit;
 }
}
if(is_numeric($text) and $sales['mode'] == 'Numbers'){
	if( $chat_id == $admin){
		 $sales['sales'][$sales["baageel"]]['numbers']= $text;
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'
- تم حفظ عدد مرات بيع السلعة
وتم اضافة السلعه بنجاح ✅
',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- • رجوع •','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['mode'] = "type";
  save($sales);
  exit;
	}
	}
if($data == "stengbotttt"){
 if( $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
- تم حفظ السلعه
عدد التسليم => غير محدود ♻️
*
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);   
}
}
 if($data == 'del'){
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'• رجوع •','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر السلعة المراد حذفها',
    'reply_markup'=>$json
  ]);
  exit;
 }
 $ex = explode('×',$data);
 if($ex[0] == "del"){
 	if($sales['sales'][$ex[1]] != null){
 	unset($sales['sales'][$ex[1]]);
  $sales['mode'] = null;
  save($sales);
$sales = json_decode(file_get_contents('sales.json'),true);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'• رجوع •','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'

اختر السلعة المراد حذفها الذي تريد حذفها 

',
    'reply_markup'=>$json
  ]);
 }else{
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة ??️','callback_data'=>'s'],['text'=>' 🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'• رجوع •','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'السلعة غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$json
  ]);
 }
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if( $chat_id == $admin){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"",
   ]);
  unlink('codejj.json',$text);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'كود غير صالخ'
   ]);
  }
exit;
}
}
 #---------------
		if(in_array($chat_id,$stingggg['stingggg']['band'])){
	if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"

      ",'reply_to_message_id'=>$message_id,
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"

        ",
]);
		}
		return false;
}


