<?php $arr = array('1');
$u= 1;
for($k = 1; $k <= 9999; $k++) {
    $r= file_get_contents("http://kvonti.tw1.ru/api.php?act=1&i=$k");
    $r= iconv('utf-8','windows-1251',$r);
   
    if($r) {
        $arr[$u] = $r;
        $u++;
    } else {
        break;
    }

}

for ($re = 1; $re <=count($arr);$re++) {
    c("version")->text = c("version")->text.$arr[$re];
}
c("chromium1")->url = "http://kvonti.tw1.ru/api.php?act=2";
