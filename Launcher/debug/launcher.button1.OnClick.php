<?php Global $pc;
$pc = '0';

writeRegKey(HKEY_CURRENT_USER, "Console/DC", $pc, DWORD);
