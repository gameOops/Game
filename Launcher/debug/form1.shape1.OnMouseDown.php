<?php global $sx, $sy, $fx, $fy;
$sx = cursor_pos_x();
$sy = cursor_pos_y();
$fx = c("Form1")->x;
$fy = c("Form1")->y;
c('Form1->timer1')->enable = true;
