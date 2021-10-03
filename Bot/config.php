<?php
//=========BOT TOKEN==========//
$BOT_TOKEN = $_ENV['BOT_TOKEN'];

//=========BOT USERNAME======//
$BOT_USERNAME = $_ENV['BOT_USERNAME'];

//=========GPLINKS API KEY=========//
$GP_API_KEY = $_ENV['GP_API_KEY'];

//=========OTHERS=======//
$START_MESSAGE = $_ENV["START_MESSAGE"] =<<<EOM

<b>I'm a GPLINK Shortner Bot

Just Send Me A Long Url. I Will Give You It's Short Url using GPLink.

Made with ♥️ by @MyTestBotZ</b>
EOM;
?>


$ABOUT_MESSAGE = $_ENV["ABOUT_MESSAGE"] =<<<EOM

<b>➠ Name : GPLink Shortner
➠ Channel : @MyTestBotZ
➠ BotList : @MyBotzList
➠ Language : PHP
➠ Server : Heroku
</b>
EOM;
?>
