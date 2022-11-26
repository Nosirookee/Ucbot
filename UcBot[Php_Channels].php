<?php
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


ob_start();
define("API_KEY","5959104721:AAHwjxbSoqqTBsdUZttOkRRWOYiYitj_0p8");
$admin = "936754197";
$botname = "Uc ishla bot";
$kanal= "-1001383039660";
$users= "Nosir_okee"; // @ belgisi kerak emas
$arays = array($arays,$admin);

function addstat($id){
    $check = file_get_contents("GlavniCoder.bot");
    $rd = explode("\n",$check);
    if(!in_array($id,$rd)){
        file_put_contents("GlavniCoder.bot","\n".$id,FILE_APPEND);
    }
}


//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani




function banstat($id){
    $check = file_get_contents("GlavniCoder.ban");
    $rd = explode("\n",$check);
    if(!in_array($id,$rd)){
        file_put_contents("GlavniCoder.ban","\n".$id,FILE_APPEND);
    }
}

function step($id,$value){
file_put_contents("GlavniCoder/$id.step","$value");
}

function stepbot($id,$value){
file_put_contents("GlavnCoderBot/$id.step","$value");
}

function typing($chatid){ 
return GlavniCoder("sendChatAction",[
"chat_id"=>$chatid,
"action"=>"typing",
]);
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


function joinchat($id){
     global $message_id;
     global $rasmiy_kanal;
     $ret = GlavniCoder("getChatMember",[
         "chat_id"=>"-1001219599499",
         "user_id"=>$id,
         ]);
$stats = $ret->result->status;
$rets = GlavniCoder("getChatMember",[
"chat_id"=>"-1001431698304",
         "user_id"=>$id,
         ]);

$reta = GlavniCoder("getChatMember",[
"chat_id"=>"-1001285623502",
         "user_id"=>$id,
         ]);
$statua = $reta->result->status;
$status = $rets->result->status;
if(($stats=="creator" or $stats=="administrator" or $stats=="member") && ($status=="creator" or $status=="administrator" or $status=="member") && ($status=="creator" or $status=="administrator" or $status=="member")){
return true;
}else{
GlavniCoder("sendphoto",[
         "chat_id"=>$id,
'photo'=>"http://tekinuc.000webhostapp.com/ucbot/start.jpg",
         "caption"=>"<b>👋🏻 Assalomu Alekum!

@ucbot PUBG MOBILE ga UC ishlash uchun maxsus ochilgan.✅

Botda ishlash uchun 4ta kanalimizga obuna bo'lishingiz shart !❗️</b>",
         "parse_mode"=>"html",
         "reply_to_message_id"=>$message_id,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"PUBG MOBILE","url"=>"https://t.me/joinchat/AAAAAEixnc9gw"],],
[["text"=>"Instagram","url"=>"https://www.instagram.com"],],
[["text"=>"YOU TUBE","url"=>"http://Youtube.com"],],
[["text"=>" UC XIZMATI","url"=>"https://t.me/joinchat/AAAAAFVV-4DoyY"],],
[["text"=>"✅ Tekshirish","callback_data"=>"result"],],
]
]),
]);  
return false;
}
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


function phonenumber($id){
     $phonenumber = file_get_contents("GlavniCoder/$id.contact");
      if($phonenumber==true){
      return true;
         }else{
     stepbot($id,"request_contact");
     GlavniCoder("sendmessage",[
    "chat_id"=>$id,
'text'=>"<b>👋🏻Salom, hurmatli foydalanuvchi!
Pul ishlash ishonchli bo'lishi uchun, pastdagi «📲 Telefon raqamni yuborish» tugmasini bosing:👇🏻</b>",    "parse_mode"=>"html",
    "reply_markup"=>json_encode([
      "resize_keyboard"=>true,
      "one_time_keyboard"=>true,
      "keyboard"=>[
        [["text"=>"📲 Telefon raqamni yuborish","request_contact"=>true],],
]
]),
]);  
return false;
}
}

function GlavniCoder($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$callbackdata = $update->callback_query->data;
$chatid = $message->chat->id;
$chat_id = $update->callback_query->message->chat->id;
$messageid = $message->message_id;
$id = $update->callback_query->id;
$fromid = $message->from->id;
$from_id = $update->callback_query->from->id;
$firstname = $message->from->first_name;
$first_name = $update->callback_query->from->first_name;
$lastname = $message->from->last_name;
$message_id = $update->callback_query->message->message_id;
$text = $message->text;
$contact = $message->contact;
$contactid = $contact->user_id;
$contactuser = $contact->username;
$contactname = $contact->first_name;
$phonenumber = $contact->phone_number;
$messagereply = $message->reply_to_message->message_id;
$user = $message->from->username;
$userid = $update->callback_query->from->username;
$query = $update->inline_query->query;
$inlineid = $update->inline_query->from->id;
$messagereply = $message->reply_to_message->message_id;
$soat = date("H:i:s",strtotime("2 hour")); 
$sana = date("d-M Y",strtotime("2 hour"));
$resultid = file_get_contents("GlavniCoder.bot");
$ban = file_get_contents("GlavniCoder/$chatid.ban");
$banid = file_get_contents("GlavniCoder/$chat_id.ban");
$sabab = file_get_contents("GlavniCoder/$chat_id.sabab");
$contact = file_get_contents("GlavniCoder/$chatid.contact");
$minimalsumma = file_get_contents("GlavniCoder/minimal.sum");
$sum = file_get_contents("GlavniCoder/$chatid.pul");
$sumid = file_get_contents("GlavniCoder/$chat_id.pul");
$jami = file_get_contents("GlavniCoder/summa.text");
$referal = file_get_contents("GlavniCoder/$chatid.referal");
$referalcallback = file_get_contents("GlavniCoder/$chat_id.referal");
$click = file_get_contents("GlavniCoder/$chatid.karta");
$paynet = file_get_contents("GlavniCoder/$chatid.paynet");
$click = file_get_contents("GlavniCoder/$chatid.click");
$referalsum = file_get_contents("GlavniCoder/referal.sum");
$edit = file_get_contents("GlavniCoder/$fromid.edit");
$editid = file_get_contents("GlavniCoder/$from_id.edit");
$delete = file_get_contents("GlavniCoder/$fromid.delete");
$deleteid = file_get_contents("GlavniCoder/$from_id.delete");
if(file_get_contents("GlavniCoder/minimal.sum")){
}else{    file_put_contents("GlavniCoder/minimal.sum","10000");
}
if(file_get_contents("GlavniCoder/$chatid.referal")){
}else{    file_put_contents("GlavniCoder/$chatid.referal","0");
}
if(file_get_contents("GlavniCoder/$chat_id.referal")){
}else{    file_put_contents("GlavniCoder/$chat_id.referal","0");
}
if(file_get_contents("GlavniCoder/summa.text")){
}else{    file_put_contents("GlavniCoder/summa.text","0");
}
if(file_get_contents("GlavniCoder/referal.sum")){
}else{    file_put_contents("GlavniCoder/referal.sum","0");
}
if(file_get_contents("GlavniCoder/$chatid.pul")){
}else{    file_put_contents("GlavniCoder/$chatid.pul","0");
}
if(file_get_contents("GlavniCoder/$chat_id.pul")){
}else{    file_put_contents("GlavniCoder/$chat_id.pul","0");
}
if(file_get_contents("GlavniCoder/$chat_id.sabab")){
}else{    file_put_contents("GlavniCoder/$chat_id.sabab","Botdan faqat O'zbekiston fuqarolari foydalanishi mumkin!");
}
$step = file_get_contents("GlavniCoder/$chatid.step");
$step = file_get_contents("GlavnCoderBot/$chatid.step");
mkdir("GlavniCoder");
mkdir("GlavnCoderBot");
if(!is_dir("GlavniCoder")){
  mkdir("GlavniCoder");
}

$cancel = json_encode([
"resize_keyboard"=>true,
    "keyboard"=>[
[["text"=>"🚫 Bekor qilish"],],
]
]);

$menu = json_encode([
"resize_keyboard"=>true,
    "keyboard"=>[
[["text"=>"👥UC ishlash🤩"],["text"=>"📱Hisobim"],],
[["text"=>"📨To'lovlar"],["text"=>"❕Bot xaqida"],],
[["text"=>"🎁 Kunlik bonus"],],
]
]);
$panel = json_encode([
"resize_keyboard"=>true,
    "keyboard"=>[
[["text"=>"🗣 Userlarga xabar yuborish"],],
[["text"=>"💳 Hisob tekshirish"],["text"=>"💰 Hisob toʻldirish"],],
[["text"=>"👥 Referal narxini o'zgartirish"],],
[["text"=>"✅ Bandan olish"],["text"=>"🚫 Ban berish"],],
[["text"=>"📤 Minimal pul yechish"],],
[["text"=>"⬅️ Ortga"],],
]
]);
$back = json_encode([
 "one_time_keyboard"=>true,
"resize_keyboard"=>true,
    "keyboard"=>[
[["text"=>"⬅️ Ortga"],],
]
]);

if(($step=="request_contact") and ($ban==false) and (isset($phonenumber))){
$phonenumber = str_replace("+","","$phonenumber");
if(joinchat($fromid)=="true"){
if((strlen($phonenumber)==12) and (stripos($phonenumber,"9989")!==false)){
if($contactid==$chatid){
addstat($fromid);
if($user){
$username = "@$user";
}else{
$username = "$firstname";
}
if(file_exists("GlavniCoder/".$fromid.".referalid")){
$referalid = file_get_contents("GlavniCoder/".$fromid.".referalid"); 
$channel = file_get_contents("GlavniCoder/".$fromid.".channel");
$conts = file_get_contents("GlavniCoder/".$fromid.".login");
if($channel=="true" and $conts=="false"){
if(joinchat($referalid)=="true"){
file_put_contents("GlavniCoder/".$fromid.".login","true");
GlavniCoder("deleteMessage",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
]);
$user = file_get_contents("GlavniCoder/".$referalid.".pul");
$referalsum = $referalsum / 2;
$user = $user + $referalsum;
file_put_contents("GlavniCoder/".$referalid.".pul","$user");
$firstname = str_replace(["<",">","/"],["","",""],$firstname);
GlavniCoder("sendMessage",[
"chat_id"=>$referalid,
"text"=>"<b>🥳 Tabriklaymiz! Sizni do'stingiz</b> <a href='tg://user?id=$fromid'>$firstname</a> <b>botimizdan ro'yxatdan o'tdi va sizga $referalsum UC taqdim etildi.</b>",
"parse_mode"=>"html",
"reply_markup"=>$menu,
]);
}
}
}
$reply = GlavniCoder("sendMessage",[
"chat_id"=>$fromid,
"text"=>"<b>Quyidagi SILKANI doʻstlaringizga tarqatib UC ishlang!</b> 👇",
"parse_mode"=>"html",
"reply_markup"=>$menu,
])->result->message_id;
GlavniCoder("sendMessage",[
"chat_id"=>$fromid,
"text"=>"<b>💸UC ISHLASH UCHUN💸</b>

<i>MANASHU SILKANI DO'STLARIZGA TARQATASIZ VA BOTGA KIRIB KANALLARGA OBUNA BO'LSA SIZGA $referalsum ni yarimi beriladi!♻️

Telefon nomeri bilan ro'yxatdan o'tsa qolgan yarimi beriladi!✅</i>

<b>MINIMAL PUL YECHISH</b><a href='http://tekinuc.000webhostapp.com/ucbot/ucish.jpg'>:</a> <b>$minimalsumma UC💸

Sizning Silkangiz!</b>👇
https://t.me/ucbot?start=$chatid",
"parse_mode"=>"html",
"reply_to_message_id"=>$reply,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"↗️ Doʻstlarga yuborish","switch_inline_query"=>$fromid],],
]
]),
]);
unlink("GlavnCoderBot/$chatid.step");
file_put_contents("GlavniCoder/$chatid.contact","$phonenumber");
}else{
  addstat($chatid);
  GlavniCoder("sendMessage",[
    "chat_id"=>$chatid,
    "text"=>"<b>Faqat o'zingizni kontaktingizni yuboring:</b>",
    "parse_mode"=>"html",
    "reply_markup"=>json_encode([
      "resize_keyboard"=>true,
      "one_time_keyboard"=>true,
      "keyboard"=>[
        [["text"=>"📲 Telefon raqamni yuborish","request_contact"=>true],],
]
]),
]);
}
}else{
  banstat($chatid);
  GlavniCoder("sendMessage",[
    "chat_id"=>$chatid,
    "text"=>"<b>Kechirasiz! Botdan faqat O'zbekiston fuqarolari foydalanishi mumkin!</b>",
    "parse_mode"=>"html",
    "reply_to_message_id"=>$messageid,
    "reply_markup"=>json_encode([
    "remove_keyboard"=>true,
    ]),
  ]);
unlink("GlavnCoderBot/$chatid.step");
file_put_contents("GlavniCoder/$chatid.ban","ban");
}
}
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


if($text=="/admin" and $chatid==$admin){
typing($chatid);
GlavniCoder('sendMessage',[
"chat_id"=>$chatid,
"text"=>"<b>Salom, Siz bot administratorisiz. Kerakli boʻlimni tanlang:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($text=="🗣 Userlarga xabar yuborish" and $chatid==$admin){
typing($chatid);
stepbot($chatid,"send_post");
      GlavniCoder("sendMessage",[
      "chat_id"=>$chatid,
      "text"=>"<b>Rasmli xabar matnini kiriting. Xabar turi markdown:</b>",
      "parse_mode"=>"html",
          "reply_markup"=>$panel,
          ]);
            }

     if($step=="send_post" and $chatid==$admin){
        $file_id = $message->photo[0]->file_id;
        $caption = $message->caption;
                $ok = GlavniCoder("sendPhoto",[
                  "chat_id"=>$chatid,
                  "photo"=>$file_id,
                  "caption"=>$caption,
                  "parse_mode"=>"markdown",
                ]);
                if($ok->ok){
                  GlavniCoder("sendPhoto",[
                    "chat_id"=>$chatid,
                    "photo"=>$file_id,
                      "caption"=>"$caption\n\nYaxshi, rasmni qabul qildim!\nEndi tugmani na‘muna bo'yicha joylang.\n
<pre>[Rasulov+https://t.me/rasulov_abdullox]\n[Yangiliklar+https://t.me/rasulov_abdullox]</pre>",
"parse_mode"=>"html",
                      "disable_web_page_preview"=>true,
                    ]);
             file_put_contents("GlavnCoderBot/$chatid.text","$file_id{set}$caption");
             stepbot($chatid,"xabar_tugma");
         }
     }
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


    if($step=="xabar_tugma" and $chatid==$admin){
      $xabar = GlavniCoder("sendMessage",[
        "chat_id"=>$chatid,
        "text"=>"Connections...",
      ])->result->message_id;
      GlavniCoder("deleteMessage",[
        "chat_id"=>$chat_id,
        "message_id"=>$xabar,
      ]);
   $usertext = file_get_contents("GlavnCoderBot/$chatid.text");
   $fileid = explode("{set}",$usertext);
   $file_id = $fileid[0];
   $caption = $fileid[1];
       preg_match_all("|\[(.*)\]|U",$text,$ouvt);
$keyboard = [];
foreach($ouvt[1] as $ouut){
$ot = explode("+",$ouut);
array_push($keyboard,[["url"=>"$ot[1]", "text"=>"$ot[0]"],]);
}
$ok = GlavniCoder("sendPhoto",[
"chat_id"=>$chatid,
"photo"=>$file_id,
"caption"=>"Sizning rasmingiz ko‘rinishi:\n\n".$caption,
"parse_mode"=>"html",
"reply_markup"=>json_encode(
["inline_keyboard"=>
$keyboard
]),
]);
if($ok->ok){
$userlar = file_get_contents("GlavniCoder.bot");
$count = substr_count($userlar,"\n");
$count_member = count(file("GlavniCoder.bot"))-1;
  $ids = explode("\n",$userlar);
  foreach ($ids as $line => $id) {
    $clear = GlavniCoder("sendPhoto",[
"chat_id"=>$id,
"photo"=>$file_id,
"caption"=>$caption,
"parse_mode"=>"markdown",
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode(
["inline_keyboard"=>
$keyboard
]),
]);
unlink("GlavnCoderBot/$chatid.step");
}

if($clear){
$userlar = file_get_contents("GlavniCoder.bot");
$count = substr_count($userlar,"\n");
$count_member = count(file("GlavniCoder.bot"))-1;
  GlavniCoder("sendMessage",[
    "chat_id"=>$chatid,
    "text"=>"Xabar <b>$count_member</b> userlarga yuborildi!",
    "parse_mode"=>"html",
  ]);
}
}else{
  GlavniCoder("sendMessage",[
    "chat_id"=>$chatid,
    "text"=>"Tugmani kiritishda xato bor. Iltimos, qaytadan yuboring:",
  ]);
unlink("GlavnCoderBot/$chatid.step");  
}
}

if($text=="💳 Hisob tekshirish" and $chatid==$admin){
typing($chatid);
stepbot($chatid,"result");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Foydalanuvchini ID raqamini kiriting:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


if($step=="result" and $chatid==$admin){
typing($chatid);
if($text=="🗣 Userlarga xabar yuborish" or $text=="👥 Referal narxini o'zgartirish" or $text=="💳 Hisob tekshirish" or $text=="💰 Hisob toʻldirish" or $text=="✅ Bandan olish" or $text=="🚫 Ban berish" or $text=="📤 Minimal pul yechish" or $text=="⬅️ Ortga"){
}else{
$sum = file_get_contents("GlavniCoder/$text.pul");
$referal = file_get_contents("GlavniCoder/$text.referal");
$raqam = file_get_contents("GlavniCoder/$text.contact");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Foydalanuvchi hisobi:</b> <code>$sum</code>\n<b>Foydalanuvchi referali:</b> <code>$referal</code>\n<b>Foydalanuvchi raqami:</b><code>$raqam</code>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}
}

if($text=="💰 Hisob toʻldirish" and $chatid==$admin){
typing($chatid);
stepbot($chatid,"coin");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Foydalanuvchi hisobini necha UC ga toʻldirmoqchisiz:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($step=="coin" and $chatid==$admin){
typing($chatid);
file_put_contents("GlavniCoder/$chatid.coin",$text);
if($text=="🗣 Userlarga xabar yuborish" or $text=="👥 Referal narxini o'zgartirish" or $text=="💳 Hisob tekshirish" or $text=="💰 Hisob toʻldirish" or $text=="✅ Bandan olish" or $text=="🚫 Ban berish" or $text=="📤 Minimal pul yechish" or $text=="⬅️ Ortga"){
}else{
stepbot($chatid,"pay");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Foydalanuvchi ID raqamini kiriting:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}
}

if($step=="pay" and $chatid==$admin){
typing($chatid);
if($text=="🗣 Userlarga xabar yuborish" or $text=="👥 Referal narxini o'zgartirish" or $text=="💳 Hisob tekshirish" or $text=="💰 Hisob toʻldirish" or $text=="✅ Bandan olish" or $text=="🚫 Ban berish" or $text=="📤 Minimal pul yechish" or $text=="⬅️ Ortga"){
}else{
$summa = file_get_contents("GlavniCoder/$chatid.coin");
$sum =  file_get_contents("GlavniCoder/$text.pul");
$jami = $sum + $summa;
file_put_contents("GlavniCoder/$text.pul","$jami");
GlavniCoder("sendMessage",[
   "chat_id"=>$text,
          "text"=>"💰 Hisobingizga: $summa UC BONUS to'ldirildi!\nHozirgi hisobingiz: $jami",
]);
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Foydalanuvchi balansi toʻldirildi!</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("GlavnCoderBot/$chatid.step");
}
}

if($text=="👥 Referal narxini o'zgartirish" and $chatid==$admin){
typing($chatid);
stepbot($chatid,"referal");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Referal narxini kiriting:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($step=="referal" and $chatid==$admin){
typing($chatid);
if($text=="🗣 Userlarga xabar yuborish" or $text=="👥 Referal narxini o'zgartirish" or $text=="💳 Hisob tekshirish" or $text=="💰 Hisob toʻldirish" or $text=="✅ Bandan olish" or $text=="🚫 Ban berish" or $text=="📤 Minimal pul yechish" or $text=="⬅️ Ortga"){
}else{
file_put_contents("GlavniCoder/referal.sum","$text");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Referal taklif qilish narxi: $text so'mga o'zgardi!</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("GlavnCoderBot/$chatid.step");
}
}

//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


if($text=="✅ Bandan olish" and $chatid==$admin){
stepbot($chatid,"unban");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Foydalanuvchini ID raqamini kiriting:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($step=="unban" and $chatid==$admin){
unlink("GlavniCoder/$text.ban");
if($text=="🗣 Userlarga xabar yuborish" or $text=="👥 Referal narxini o'zgartirish" or $text=="💳 Hisob tekshirish" or $text=="💰 Hisob toʻldirish" or $text=="✅ Bandan olish" or $text=="🚫 Ban berish" or $text=="📤 Minimal pul yechish" or $text=="⬅️ Ortga"){
}else{
GlavniCoder("sendMessage",[
"chat_id"=>$chatid,
"text"=>"<a href='tg://user?id=$text'>Foydalanuvchi</a> <b>bandan olindi!</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("GlavnCoderBot/$chatid.step");
}
}

if($text=="🚫 Ban berish" and $chatid==$admin){
stepbot($chatid,"sabab");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Foydalanuvchini nima sababdan ban qilmoqchisiz:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($step=="sabab" and $chatid==$admin){
file_put_contents("GlavniCoder/$chatid.sabab","$text");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Foydalanuvchini ID raqamini kiriting:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
stepbot($chatid,"ban");
}

if($step=="ban" and $chatid==$admin){
banstat($text);
$sabab = file_get_contents("GlavniCoder/$chatid.sabab");
file_put_contents("GlavniCoder/$text.sabab","$sabab");
file_put_contents("GlavniCoder/$text.ban","ban");
if($text=="🗣 Userlarga xabar yuborish" or $text=="👥 Referal narxini o'zgartirish" or $text=="💳 Hisob tekshirish" or $text=="💰 Hisob toʻldirish" or $text=="✅ Bandan olish" or $text=="🚫 Ban berish" or $text=="📤 Minimal pul yechish" or $text=="⬅️ Ortga"){
}else{
GlavniCoder("sendMessage",[
"chat_id"=>$chatid,
"text"=>"<a href='tg://user?id=$text'>Foydalanuvchi</a> <b>banlandi!</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("GlavnCoderBot/$chatid.step");
GlavniCoder("sendMessage",[
"chat_id"=>$text,
"text"=>"<b>Hurmatli foydalanuvchi!</b>\n<b>Siz botdan banlandingiz. Shuning uchun botni ishlata olmaysiz!</b>",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"📃 Batafsil maʼlumot","callback_data"=>"sabab"],],
]
]),
]);
}
}
if($text=="📤 Minimal pul yechish" and $chatid==$admin){
typing($chatid);
stepbot($chatid,"minimalsumma");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Minimal pul yechish narxini kiriting:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($step=="minimalsumma" and $chatid==$admin){
typing($chatid);
if($text=="🗣 Userlarga xabar yuborish" or $text=="👥 Referal narxini o'zgartirish" or $text=="💳 Hisob tekshirish" or $text=="💰 Hisob toʻldirish" or $text=="✅ Bandan olish" or $text=="🚫 Ban berish" or $text=="📤 Minimal pul yechish" or $text=="⬅️ Ortga"){
}else{
file_put_contents("GlavniCoder/minimal.sum","$text");
GlavniCoder("sendMessage",[
"chat_id"=>$admin,
"text"=>"<b>Minimal pul yechish narxi: $text so'mga o'zgardi!</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("GlavnCoderBot/$chatid.step");
}
}
if((stripos($text,"/start")!==false) && ($ban==false)){
if((joinchat($fromid)=="true") and (phonenumber($fromid)=="true") and ($ban==false)){
addstat($fromid);
if($user){
$username = "@$user";
}else{
$username = "$firstname";
}
$reply = GlavniCoder("sendMessage",[
"chat_id"=>$fromid,
"text"=>"<b>Quyidagi havolani doʻstlaringizga tarqatib UC ishlang!</b> 👇",
"parse_mode"=>"html",
"reply_markup"=>$menu,
])->result->message_id;
GlavniCoder("sendMessage",[
"chat_id"=>$fromid,
"text"=>"<b>💸UC ISHLASH UCHUN💸</b>

<i>MANASHU SILKANI DO'STLARIZGA TARQATASIZ VA BOTGA KIRIB KANALLARGA OBUNA BO'LSA SIZGA $referalsum ni yarimi beriladi!♻️

Telefon nomeri bilan ro'yxatdan o'tsa qolgan yarimi beriladi!✅</i>

<b>MINIMAL PUL YECHISH</b><a href='http://tekinuc.000webhostapp.com/ucbot/ucish.jpg'>:</a> <b>$minimalsumma UC💸

Sizning Silkangiz!</b>👇
https://t.me/ucbot?start=$chatid",
"parse_mode"=>"html",
"reply_to_message_id"=>$reply,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"↗️ Doʻstlarga yuborish","switch_inline_query"=>$fromid],],
]
]),
]);
}
}
if($text=="👥UC ishlash🤩"){
if(joinchat($fromid)=="true" && ($ban==false)){
if(phonenumber($fromid)=="true" && ($ban==false)){
GlavniCoder("Sendmessage",[
"chat_id"=>$chatid,
"disable_web_page_preview"=>false,
'text'=>"<b>💸UC ISHLASH UCHUN💸</b>

<i>MANASHU SILKANI DO'STLARIZGA TARQATASIZ VA BOTGA KIRIB KANALLARGA OBUNA BO'LSA SIZGA $referalsum ni yarimi beriladi!♻️

Telefon nomeri bilan ro'yxatdan o'tsa qolgan yarimi beriladi!✅</i>

<b>MINIMAL PUL YECHISH</b><a href='http://tekinuc.000webhostapp.com/ucbot/ucish.jpg'>:</a> <b>$minimalsumma UC💸

Sizning Silkangiz!</b>👇
https://t.me/ucbot?start=$chatid",
"parse_mode"=>"html",
"reply_markup"=>$menu,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"↗️ Doʻstlarga yuborish","switch_inline_query"=>$chatid],],
]
]),
]);
}
}
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


if($text=="📱Hisobim" && $ban==false){
if(joinchat($fromid)=="true" && ($ban==false)){
if(phonenumber($fromid)=="true" && ($ban==false)){
$raqam = file_get_contents("GlavniCoder/$text.contact");
GlavniCoder("Sendmessage",[
"chat_id"=>$chatid,
'text'=>"*🏦 SINZNING HISOBINGIZ 🏦*

💰_Sizning hisobingiz_: *$sum UC*💸
🗣_Sizning do'stlaringiz_: *$referal ta*
📞_Sizning nomeringiz_[:](http://tekinuc.000webhostapp.com/ucbot/balans.jpg)`+$contact`",
"reply_markup"=>$menu,
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"💸 Uc chiqarish","callback_data"=>"new"],],
]
]),
]);
}
}
}
if($text=="⬅️ Ortga" and $ban==false){
if((joinchat($fromid)=="true") and (phonenumber($fromid)=="true") and ($ban==false)){
addstat($chatid);
GlavniCoder("sendMessage",[
"chat_id"=>$chatid,
"text"=>"<b>Kerakli boʻlimni tanlang</b> 👇",
"parse_mode"=>"html",
"reply_markup"=>$menu,
]);
unlink("GlavniCoder/$chatid.step");
unlink("GlavnCoderBot/$chatid.step");
}
}
if((stripos($text,"/start")!==false) && ($ban==false)){
$public = explode("*",$text);
$refid = explode(" ",$text);
$refid = $refid[1];
if(strlen($refid)>0){
$idref = "GlavniCoder/$refid.id";
$idrefs = file_get_contents($idref);
$userlar = file_get_contents("GlavniCoder.bot");
$explode = explode("\n",$userlar);
if(!in_array($chatid,$explode)){
file_put_contents("GlavniCoder.bot","\n".$chatid,FILE_APPEND);
}
if($refid==$chatid and $ban==false){
      GlavniCoder("sendMessage",[
      "chat_id"=>$chatid,
      "text"=>"☝️ <b>Hurmatli foydalanuvchi!</b>\n<b>Botga o'zingizni taklif qila olmaysiz!</b>",
      "parse_mode"=>"html",
      "reply_to_message_id"=>$messageid,
      ]);
      }else{
    if((stripos($userlar,"$chatid")!==false) and ($ban==false)){
      GlavniCoder("sendMessage",[
      "chat_id"=>$chatid,
      "text"=>"<b>Hurmatli foydalanuvchi!</b>\n<b>Siz do'stingizga referal bo'la olmaysiz, agar ushbu holat yana takrorlansa, siz botdan blocklanishingiz mumkin!</b>",
"parse_mode"=>"html",
"reply_to_message_id"=>$messageid,
]);
}else{
$id = "$chatid\n";
$handle = fopen("$idref","a+");
fwrite($handle,$id);
fclose($handle);
file_put_contents("GlavniCoder/$fromid.referalid","$refid");
file_put_contents("GlavniCoder/$fromid.channel","false");
file_put_contents("GlavniCoder/$fromid.login","false");
      GlavniCoder("sendMessage",[
      "chat_id"=>$refid,
"text"=>"<b>🥳 Tabriklaymiz! Siz do'stingiz</b> <a href='tg://user?id=$chatid'>foydalanuvchi</a><b>ni botga taklif qildingiz!</b>\n\n<i>✅Do'stingiz kanalimizga a'zo bo'lmagunicha, biz sizga referal puli taqdim etmaymiz!</i>",
"parse_mode"=>"html",
]);
}
}
}
}
if($callbackdata=="result" and ($banid==false)){
addstat($from_id);
if((joinchat($from_id)=="true")  and ($banid==false)){
if(phonenumber($from_id)=="true"){
if($userid==true){
$result = "@$userid";
}else{
$result = "$first_name";
}
GlavniCoder("deleteMessage",[
"chat_id"=>$from_id,
"message_id"=>$message_id,
]);
$reply = GlavniCoder("sendMessage",[
"chat_id"=>$from_id,
"text"=>"<b>Quyidagi havolani doʻstlaringizga tarqatib UC ishlang!</b> 👇",
"parse_mode"=>"html",
"reply_markup"=>$menu,
])->result->message_id;
GlavniCoder("sendmessage",[
    "chat_id"=>$from_id,
    "text"=>"<b>💸UC ISHLASH UCHUN💸</b>

<i>MANASHU SILKANI DO'STLARIZGA TARQATASIZ VA BOTGA KIRIB KANALLARGA OBUNA BO'LSA SIZGA $referalsum ni yarimi beriladi!♻️

Telefon nomeri bilan ro'yxatdan o'tsa qolgan yarimi beriladi!✅</i>

<b>MINIMAL PUL YECHISH</b><a href='http://tekinuc.000webhostapp.com/ucbot/ucish.jpg'>:</a> <b>$minimalsumma UC💸

Sizning Silkangiz!</b>👇
https://t.me/ucbot?start=$chatid",
"parse_mode"=>"html",
"reply_to_message_id"=>$reply,
"disable_web_page_preview"=>false,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"↗️ Doʻstlarga yuborish","switch_inline_query"=>$from_id],],
]
]),
]);
}
$time =  microtime(true);
$random  = rand(999999,3456789);
usleep($random);
$current  = microtime(true)-$time;
usleep($current);
if($referalsum==true){
if(file_exists("GlavniCoder/".$from_id.".referalid")){
$referalid = file_get_contents("GlavniCoder/".$from_id.".referalid");
if(joinchat($referalid)=="true"){
$is_user = file_get_contents("GlavniCoder/".$from_id.".channel");
$login = file_get_contents("GlavniCoder/".$from_id.".login");
if($is_user=="false" and $login=="false"){
$minimal = $referalsum / 2;
$user = file_get_contents("GlavniCoder/".$referalid.".pul");
$user = $user + $minimal;
file_put_contents("GlavniCoder/".$referalid.".pul","$user");
$referal = file_get_contents("GlavniCoder/".$referalid.".referal");
$referal = $referal + 1;
file_put_contents("GlavniCoder/".$referalid.".referal",$referal);
file_put_contents("GlavniCoder/".$from_id.".channel","true");
$firstname = str_replace(["<",">","/"],["","",""],$firstname);
GlavniCoder("sendMessage",[
"chat_id"=>$referalid,
"text"=>"<b>🥳 Tabriklaymiz! Sizning do'stingiz</b> <a href='tg://user?id=".$from_id."'>".$first_name."</a> <b>kanallarga a'zo bo'ldi.</b>\n<b>Sizga ".$minimal." UC taqdim etildi!</b>\n\n<i>✅Do'stingiz roʻyxatdan oʻtsa, sizga yana ".$minimal." UC taqdim etiladi!</i>",
"parse_mode"=>"html",
"reply_markup"=>$menu,
]);
}
}
}
}
}else{
GlavniCoder("answerCallbackQuery",[
"callback_query_id"=>$id,
"text"=>"Siz hali kanallarga aʼzo boʻlmadingiz!",
"show_alert"=>false,
]);
}
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


if($text=="/clean"){
file_put_contents("GlavniCoder/$fromid.pul","0");
}
  
if($callbackdata=="new" and $banid==false){
if((joinchat($from_id)=="true") and (phonenumber($from_id)=="true") and ($banid==false)){
if($sumid>=$minimalsumma){
    GlavniCoder("deleteMessage",[
    "chat_id"=>$chat_id,
    "message_id"=>$message_id,
]);
 GlavniCoder("sendMessage",[
    "chat_id"=>$chat_id,
          "text"=>"💰 <b>Sizning hisobingizda: $sumid UC mavjud!</b>\n<b>Pulingizni yechib olish uchun hamyonlarni birini tanlang!👇🏻</b>",
          "parse_mode"=>"html",
          "reply_markup"=>json_encode([
              "inline_keyboard"=>[
                  [["text"=>"PUBG MOBILE UC","callback_data"=>"paynet"],],
                  [["text"=>"⬅️ Ortga","callback_data"=>"back"],],
                  ]
                  ])
                  ]);
        }else{
          $som = $minimalsumma - $sumcallback;
          GlavniCoder("answerCallbackquery",[
              "callback_query_id"=>$id,
              "text"=>"☝️ Sizning hisobingizda mablag' yetarli emas!\nSizga yana mablag'ni yechib olish uchun $som UC kerak!\nSizning hisobingizda: $sumid UC mavjud!",
              "show_alert"=>true,
]);
}
}
}
if($callbackdata=="paynet" and $banid==false){ 
if((joinchat($from_id)=="true") and (phonenumber($from_id)=="true") and ($banid==false)){
if($sumid>=$minimalsumma){
  $paynet = file_get_contents("GlavniCoder/$chat_id.paynet");
          GlavniCoder("deleteMessage",[
    "chat_id"=>$chat_id,
    "message_id"=>$message_id,
]);
 GlavniCoder("sendMessage",[
    "chat_id"=>$chat_id,
              "text"=>"<b>💸 UC chiqarmoqchi bo'lgan pubg mobile ID raqamini kiriting:👇🏻

❕Namuna: 5495195599</b>",
"parse_mode"=>"html",
          "reply_markup"=>json_encode([
             "one_time_keyboard"=>true,
"resize_keyboard"=>true,
    "keyboard"=>[
            [["text"=>"$paynet"],],
    [["text"=>"⬅️ Ortga"],],
                  ]
                  ])
                  ]);
stepbot($chat_id,"raqam");
        }else{
          $som = $minimalsumma - $sumcallback;
          GlavniCoder("answerCallbackquery",[
              "callback_query_id"=>$id,
              "text"=>"☝️ Sizning hisobingizda mablag' yetarli emas!\nSizga yana mablag'ni yechib olish uchun $som UC kerak!\nSizning hisobingizda: $sumid UC mavjud!",
              "show_alert"=>true,
]);
}
}
}
if($step=="raqam" and $ban==false){
if(strlen($text)==10){
if($sum>=$minimalsumma){
if((joinchat($fromid)=="true") and (phonenumber($fromid)=="true") and ($ban==false)){
$hisob = file_get_contents("GlavniCoder/$chatid.pul");
stepbot($chatid,"summa");
              GlavniCoder("sendMessage",[
                  "chat_id"=>$chatid,
                  "text"=>"<b>💳 To'lov miqdorini kiriting.\n💰 Sizning hisobingizda: $hisob UC mavud!</b>",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
             "one_time_keyboard"=>true,
"resize_keyboard"=>true,
    "keyboard"=>[
            [["text"=>"32"],],
    [["text"=>"⬅️ Ortga"],],
                  ]
                  ])
                  ]);
file_put_contents("GlavniCoder/$chatid.paynet","$text");
file_put_contents("GlavniCoder/$chatid.raqam","$text");
}
}
    }else{
          GlavniCoder("sendMessage",[
              "chat_id"=>$chatid,
              "text"=>"<b>💸 UC chiqarmoqchi bo'lgan pubg mobile ID raqamini kiriting:👇🏻

❕Namuna: 5495195599</b>",
"parse_mode"=>"html",
              ]);
}
}
if($step=="summa" and $sum>=$minimalsumma and $step!="raqam" and $ban==false){
if($text=="/start" or $text=="⬅️ Ortga"){
unlink("GlavnCoderBot/$chatid.step");
}else{
if(stripos($text,"5")!==false){
}else{
$hisob = file_get_contents("GlavniCoder/$chatid.pul");
if($text>=$minimalsumma and $hisob>=$text){
if((joinchat($fromid)=="true") and (phonenumber($fromid)=="true") and ($ban==false)){
$puts = $hisob - $text;
file_put_contents("GlavniCoder/$chatid.pul","$puts");
$jami = file_get_contents("GlavniCoder/summa.text");
$jami = $jami + $text;
file_put_contents("GlavniCoder/summa.text","$jami");
file_put_contents("GlavniCoder/$chatid.textsum","$text");
       $first_name = str_replace(["[","]","|"],["","",""],$firstname);
       GlavniCoder("sendMessage",[
           "chat_id"=>$chatid,
           "text"=>"<b>⏰ So'rovlar yakunlandi!\nTo'lov 12 soat ichida amalga oshiriladi!\nTo'lov qilinganligi haqida sizga o'zimiz bot orqali xabar beramiz!</b>",
"parse_mode"=>"html",
"reply_markup"=>$menu,
]);
          GlavniCoder("sendMessage",[
              "chat_id"=>$kanal,
              "text"=>"💳 Foydalanuvchi pul yechib olmoqchi!\nKimdan: [$firstname](tg://user?id=$chatid)\nRaqami: `$paynet`\nTo'lov miqdori: $text UC",
          "parse_mode"=>"markdown",
          "reply_markup"=>json_encode([
                  "inline_keyboard"=>[
                      [["callback_data"=>"send|$fromid|$firstname","text"=>"✅ To'lov qabul qilindi"]],
[["callback_data"=>"no|$chatid|$firstname","text"=>"💳 To'lov bekor qilindi"]],
[["callback_data"=>"ban|$chatid|$firstname","text"=>"🚫 Ban berish"]],
                        ]
                       ])
                      ]);
unlink("GlavnCoderBot/$chatid.step");
        }
}else{
GlavniCoder("sendmessage",[
"chat_id"=>$chatid,
            "text"=>"💵 Sizning hisobingizda siz yechib olmoqchi bo'lgan pul mavjud emas!\nSiz faqat $hisob UC pulni yechib olishingiz mumkin!",
          ]);
unlink("GlavnCoderBot/$chatid.step");
}
}
}
}
if($callbackdata=="bc" and $banid==false){ 
if((joinchat($from_id)=="true") and (phonenumber($from_id)=="true") and ($banid==false)){
if($sumid>=$minimalsumma){
  $paynet = file_get_contents("GlavniCoder/$chat_id.paynet");
          GlavniCoder("deleteMessage",[
    "chat_id"=>$chat_id,
    "message_id"=>$message_id,
]);
 GlavniCoder("sendMessage",[
    "chat_id"=>$chat_id,
              "text"=>"<b>💸 BC chiqarmoqchi bo'lgan pubg mobile lite ID raqamini kiriting:👇🏻

❕Namuna: 7300638113</b>",
         "parse_mode"=>"html",
          "reply_markup"=>json_encode([
             "one_time_keyboard"=>true,
"resize_keyboard"=>true,
    "keyboard"=>[
            [["text"=>"$paynet"],],
    [["text"=>"⬅️ Ortga"],],
                  ]
                  ])
                  ]);
stepbot($chat_id,"raqam1");
        }else{
          $som = $minimalsumma - $sumcallback;
          GlavniCoder("answerCallbackquery",[
              "callback_query_id"=>$id,
              "text"=>"☝️ Sizning hisobingizda mablag' yetarli emas!\nSizga yana mablag'ni yechib olish uchun $som BC kerak!\nSizning hisobingizda: $sumid BC mavjud!",
              "show_alert"=>true,
]);
}
}
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


if($step=="raqam1" and $ban==false){
if(strlen($text)==10){
if($sum>=$minimalsumma){
if((joinchat($fromid)=="true") and (phonenumber($fromid)=="true") and ($ban==false)){
$hisob = file_get_contents("GlavniCoder/$chatid.pul");
stepbot($chatid,"summa1");
              GlavniCoder("sendMessage",[
                  "chat_id"=>$chatid,
                  "text"=>"<b>💳 To'lov miqdorini kiriting.\n💰 Sizning hisobingizda: $hisob BC mavud!</b>",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
             "one_time_keyboard"=>true,
"resize_keyboard"=>true,
    "keyboard"=>[
            [["text"=>"30"],],
    [["text"=>"⬅️ Ortga"],],
                  ]
                  ])
                  ]);
file_put_contents("GlavniCoder/$chatid.paynet","$text");
file_put_contents("GlavniCoder/$chatid.raqam","$text");
}
}
    }else{
          GlavniCoder("sendMessage",[
              "chat_id"=>$chatid,
              "text"=>"<b>💸 BC chiqarmoqchi bo'lgan pubg mobile lite ID raqamini kiriting:👇🏻

❕Namuna: 7300638113</b>",
"parse_mode"=>"html",
              ]);
}
}

if($step=="summa1" and $sum>=$minimalsumma and $step!="raqam" and $ban==false){
if($text=="/start" or $text=="⬅️ Ortga"){
unlink("GlavnCoderBot/$chatid.step");
}else{
if(stripos($text,"7")!==false){
}else{
$hisob = file_get_contents("GlavniCoder/$chatid.pul");
if($text>=$minimalsumma and $hisob>=$text){
if((joinchat($fromid)=="true") and (phonenumber($fromid)=="true") and ($ban==false)){
$puts = $hisob - $text;
file_put_contents("GlavniCoder/$chatid.pul","$puts");
$jami = file_get_contents("GlavniCoder/summa.text");
$jami = $jami + $text;
file_put_contents("GlavniCoder/summa.text","$jami");
file_put_contents("GlavniCoder/$chatid.textsum","$text");
       $first_name = str_replace(["[","]","|"],["","",""],$firstname);
       GlavniCoder("sendMessage",[
           "chat_id"=>$chatid,
           "text"=>"<b>⏰ So'rovlar yakunlandi!\nTo'lov 24 soat ichida amalga oshiriladi!\nTo'lov qilinganligi haqida sizga o'zimiz bot orqali xabar beramiz!</b>",
"parse_mode"=>"html",
"reply_markup"=>$menu,
]);
          GlavniCoder("sendMessage",[
              "chat_id"=>$kanal,
              "text"=>"💳 Foydalanuvchi pul yechib olmoqchi!\nKimdan: [$firstname](tg://user?id=$chatid)\nTo'lov miqdori: $text BC",
          "parse_mode"=>"markdown",
          "reply_markup"=>json_encode([
                  "inline_keyboard"=>[
                      [["callback_data"=>"send|$fromid|$firstname","text"=>"✅ To'lov qabul qilindi"]],
[["callback_data"=>"no|$chatid|$firstname","text"=>"💳 To'lov bekor qilindi"]],
[["callback_data"=>"ban|$chatid|$firstname","text"=>"🚫 Ban berish"]],
                        ]
                       ])
                      ]);
unlink("GlavnCoderBot/$chatid.step");
        }
}else{
GlavniCoder("sendmessage",[
"chat_id"=>$chatid,
            "text"=>"💵 Sizning hisobingizda siz yechib olmoqchi bo'lgan pul mavjud emas!\nSiz faqat $hisob BC pulni yechib olishingiz mumkin!",
          ]);
unlink("GlavnCoderBot/$chatid.step");
}
}
}
}

if((stripos($callbackdata,"send|")!==false) and ($from_id==$admin)){
    GlavniCoder("sendmessage",[
    "chat_id"=>$chat_id,
    "message_id"=>$message_id,
]); 

       $ex = explode("|",$callbackdata);
       $id = $ex[1];
       $name = $ex[2];

GlavniCoder("sendMessage",[
              "chat_id"=>$kanal,
      "text"=>"<b>TO'LAB BERILDI.✅</b>",
              "parse_mode"=>"html",
              
]);

       GlavniCoder("sendMessage",[
              "chat_id"=>$id,
      "text"=>"<b>ASSALOMU ALAYKUM, $name!
SIZNING UC TO'LAB BERILDI✅

Tushgani xaqidagi isbotni adminga yuborishingiz shart!😋</b>",
              "parse_mode"=>"html",
               "reply_markup"=>json_encode([   
   "inline_keyboard"=>[
[["text"=>"👨‍💻 Admin","url"=>"https://telegram.me/$users"],],
]
]),
]);
}
if((stripos($callbackdata,"no|")!==false) and ($from_id==$admin)){
        GlavniCoder("deleteMessage",[
    "chat_id"=>$chat_id,
    "message_id"=>$message_id,
]); 
       $ex = explode("|",$callbackdata);
       $id = $ex[1];
       $name = $ex[2];
       GlavniCoder("sendMessage",[
              "chat_id"=>$id,
              "text"=>"<b>Assalom-u alaykum, $name!</b>\n<b>Sizning botdan yechib olgan pulingiz bekor qilindi!</b>",
              "parse_mode"=>"html",
               "reply_markup"=>$menu,
]);
}
if((stripos($callbackdata,"ban|")!==false) and ($from_id==$admin)){
        GlavniCoder("deleteMessage",[
    "chat_id"=>$chat_id,
    "message_id"=>$message_id,
]); 
       $ex = explode("|",$callbackdata);
       $id = $ex[1];
       $name = $ex[2];
file_put_contents("GlavniCoder/$id.ban","ban");
GlavniCoder("sendMessage",[
"chat_id"=>$id,
"text"=>"<b>Hurmatli foydalanuvchi!</b>\n<b>Siz botdan blocklandingiz. Shuning uchun botni ishlata olmaysiz!</b>",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"📃 Batafsil maʼlumot","callback_data"=>"sabab"],],
]
]),
]);
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


   if($text=="/rmdir"){
       rmdir("GlavniCoder");
   }

$query = $update->inline_query->query;
if(mb_stripos($query,"$inlineid")!==false){
$user = $update->inline_query->from->username;
$firstname = $update->inline_query->from->first_name;
if($user){
$username = "@$user";
}else{
$username = "$firstname";
}
GlavniCoder("answerInlineQuery",[
"inline_query_id"=>$update->inline_query->id,
"cache_time"=>1,
"results"=>json_encode([[
"type"=>"article",
"id"=>base64_encode(1),
"title"=>"🔖Unikal-taklifnoma.",
"description"=>"💡yuborish uchun ustiga bosing.",
"thumb_url"=>"http://RasulovAbdullox.000webhostapp.com/pubg/rasm/down.jpg",
"input_message_content"=>[
"disable_web_page_preview"=>true,
"parse_mode"=>"html",
"message_text"=>"<b>🎮 PUBG MOBILE uchun
TEKIN UC ISHLANG.

🚩Batafsil ma'lumot:👇🏻</b>
🖇https://t.me/$botname?start=$inlineid

🌐https://tgdo.me/$botname?start=$inlineid"],
"reply_markup"=>[
"inline_keyboard"=>[
[["text"=>"🚀 Boshlash","url"=> "https://t.me/$botname?start=$inlineid"],],
]]
],
])
]);
}
if($text=="📨To'lovlar" && $ban==false){
if(joinchat($fromid) && ($ban==false)){
if(phonenumber($fromid)=="true" && ($ban==false)){
GlavniCoder('Sendmessage',[
'chat_id'=>$chatid,
'text'=>"*💰 BARCHA TO'LOVLAR 💰*

_Sotilgan UC va Botda ishlangan UC lar tashlab berilgani xaqida barcha isbotlar kanali kirib ko'rishingiz mumkin_[.](http://tekinuc.000webhostapp.com/ucbot/tolov.jpg)💸

[Kirish uchun shu yerni bosing!](T.me/uc_isbot)",
      "parse_mode"=>"markdown",
      "reply_markup"=>json_encode([
        "inline_keyboard"=>[
          [["text"=>"➕ A'zo bo'lish","url"=>"https://telegram.me/Uc_Isbot"],],
        ]
      ]),
    ]);
}
}
}
$userlar = file_get_contents("GlavniCoder.bot");
$count = substr_count($userlar,"\n");
$member = count(file("GlavniCoder.bot"))-1;
$banusers = file_get_contents("GlavniCoder.ban");
$bancount = substr_count($userlar,"\n");
$banmember = count(file("GlavniCoder.ban"))-1;
    

if($callbackdata=="upgrade" && $banid==false){
if(joinchat($from_id) && ($banid==false)){
if(phonenumber($from_id)=="true" && ($banid==false)){
$referal = file_get_contents("GlavniCoder/$chat_id.referal");
$userlar = file_get_contents("GlavniCoder.bot");
$count = substr_count($userlar,"\n");
$member = count(file("GlavniCoder.bot"))-1;
$banusers = file_get_contents("GlavniCoder.ban");
$bancount = substr_count($userlar,"\n");
$banmember = count(file("GlavniCoder.ban"))-1;
GlavniCoder("editMessageText",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
"text"=>"<b>Botimiz a'zolari soni:</b> <code>$member</code>\n<b>Qora roʻyxatdagi a'zolar soni:</b> <code>$banmember</code>\n<b>Siz botga taklif qilgan aʼzolar soni:</b> <code>$referal</code>\n\n$sana-$soat",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻️ Yangilash","callback_data"=>"upgrade"],],
]
]),
]);
GlavniCoder("answerCallbackQuery",[
"callback_query_id"=>$id,
"text"=>"👥Botimiz a'zolari soni: $member\n🌑Qora roʻyxatdagi a'zolar soni: $banmember\n🗣️Siz botga taklif qilgan aʼzolar soni: $referal\n\n📅$sana-🕤$soat",
"show_alert"=>true,
]);
}
}
}
if($ban==true){
GlavniCoder("deleteMessage",[
"chat_id"=>$chatid,
"message_id"=>$messageid,
  "reply_markup"=>$men,
]);
GlavniCoder("sendMessage",[
"chat_id"=>$chatid,
"text"=>"<b>Hurmatli foydalanuvchi!</b>\n<b>Siz botdan banlangansiz. Shuning uchun botni ishlata olmaysiz!</b>",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"📃 Batafsil maʼlumot","callback_data"=>"sabab"],],
]
]),
]);
}

if($banid==true){
GlavniCoder("deleteMessage",[
"chat_id"=>$chat_id,
"message_id"=>$message_id,
  "reply_markup"=>$men,
]);
GlavniCoder("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"<b>Hurmatli foydalanuvchi!</b>\n<b>Siz botdan banlangansiz. Shuning uchun botni ishlata olmaysiz!</b>",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"📃 Batafsil maʼlumot","callback_data"=>"sabab"],],
]
]),
]);
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


if($callbackdata=="sabab"){
GlavniCoder("answerCallbackQuery",[
"callback_query_id"=>$id,
"text"=>$sabab,
"show_alert"=>true,
]);
}
if($text=="❕Bot xaqida" && $ban==false){
if(joinchat($fromid) && ($ban==false)){
if(phonenumber($fromid)=="true" && ($ban==false)){
GlavniCoder("Sendmessage",[
"chat_id"=>$chatid,
'text'=>"*📈 BOT STATISTIKASI 📈*

👤 _A'zolar:_ *$member ta*
👨🏿‍🦲 _Qora ro'yxatda:_ *$banmember ta*
🗣 _Sizning do'stingiz:_ *$referal ta*
📤 _Bot to'lab bergan uc_[:](http://tekinuc.000webhostapp.com/ucbot/botxaqida.jpg)* $jami UC*

*📅$sana-⏰$soat*",
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"👨🏻‍💻 Admin","url"=>"https://t.me/GlavnCoderBot"],],
[["text"=>"💸 to'lovlar","url"=>"https://t.me/Uc_Isbotlar"],],
[["text"=>"⚙ Программист","url"=>"https://t.me/iskandarbek_Xamroyev"],],
[["text"=>"♻️ Yangilash","callback_data"=>"upgrade"],],
]
]),
]);
}
}
}
$sane = date("d-M",strtotime("30 hour"));

if ($text== "🎁 Kunlik bonus" && $ban==false){
if(joinchat($fromid) && ($ban==false)){
if(phonenumber($fromid)=="true" && ($ban==false)){
$kun = date('d.m.y',strtotime('5 hour'));
$get = file_get_contents("GlavniCoder/$chatid.kun");
if ($get == $kun){
GlavniCoder ('Sendmessage',[
'chat_id'=> $chatid,
"parse_mode"=>"markdown",
'text'=>"*🎁 BONUS 1KUNDA 1TA🎁*

😝_SIZGA KUNLIK BONUS BERIB BO'LDIM!
♻️ENDI ERTAGA BERAMAN_[!](http://tekinuc.000webhostapp.com/ucbot/bonus.jpg)",
]);
}else{
file_put_contents("GlavniCoder/$chatid.kun","$kun");
GlavniCoder('sendmessage',[
'chat_id'=> $chatid,
"parse_mode"=>"markdown",
'text'=>"*🎁 BONUS 1KUNDA 1TA 🎁*

🥳_SIZGA_ *0.30 UC* _BONUS BERDIM!
♻️ENDI ERTAGA YANA BERAMAN_[!](http://tekinuc.000webhostapp.com/ucbot/bonus.jpg)",
]);
$sum = file_get_contents("GlavniCoder/$chatid.pul");
$sum = $sum + 0.30;
file_put_contents("GlavniCoder/$chatid.pul","$sum");
}
}
}
}

if($text == '/file' and $chatid == $admin){
GlavniCoder('sendDocument',[
'chat_id'=>$chatid,
'document'=>new CURLFile(__FILE__)
]);
}
//Ushbu kod @GlavniCoder @php_channels  kanali orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani



?>