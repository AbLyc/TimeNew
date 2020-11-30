<?php

if (!file_exists('madeline.php') ) { copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');}

include "madeline.php";

$settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>1203921,'api_hash'=> '07efbc59f267f50db081a5aff8211fca']];

$MadelineProto = new \danog\MadelineProto\API('session.madeline', $settings);

$MadelineProto->start();

$timeF = date("H:i");

$MadelineProto->account->updateProfile(['last_name' => "❄️ $timeF ❄️" ]);

echo " SisBoT WorKinG NoW $timeF ";
