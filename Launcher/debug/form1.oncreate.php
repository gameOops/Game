<?php GLOBAL $log;
readRegKey(HKEY_CURRENT_USER, "Console/DC", $log, DWORD);
if ($log == 1) {
    LoadForm(Launcher, LD_NONE);
    HideForm(Form1, SW_SHOW);
} else {
   HideForm(Launcher, SW_SHOW);
}
