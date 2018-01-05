<?php $r= file_get_contents("http://kvonti.tw1.ru/api.php?act=0&login=".c("login")->text."&pass=".c("pass")->text);
$r= iconv('utf-8','windows-1251',$r);
Global $pc;
$pc = 1;
switch($r) {
    case 1:
        echo 'Вы успешно вошли!';
        writeRegKey(HKEY_CURRENT_USER, "Console/DC", $pc, DWORD);
        HideForm(Form1, SW_SHOW);
        ShowForm(Launcher, SW_SHOW);
    break;
    case 404:
        echo 'Неверный логин или пароль';
    break;

    default:
        echo 'Сервер не отвечает';
    break;
}
