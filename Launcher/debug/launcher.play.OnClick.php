<?php global $ver;
$ver = c('version')->inText;
if(file_exists("data/versions/$ver")) {
Run("/data/versions/$ver", false);
} else {
c("quit")->visible = false;
c("play")->visible = false;
c("version")->visible = false;
c("progress1")->visible = true;
c("back")->height = 96;
c("download")->url = "http://kvonti.tw1.ru/versions/$ver";
c("download")->path = "data/versions/";
c("download")->start();

}
