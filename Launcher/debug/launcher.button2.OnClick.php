<?php $ver = c('version')->inText;
if(file_exists("/data/versions/$ver")) {

echo "Данная версия уже скачана!";
Run("/data/versions/$ver", false);
} else {
c("download")->url = "http://kvonti.tw1.ru/versions/$ver";
c("download")->path = "data/versions/";
c("download")->start();
}
