<?php

today = time();

date_default_timezone_set('Asia/Tokyo');
echo date('c', $today);
echo '<br />';

date_default_timezone_set('Europe/Paris');
echo date('c', $today);
ech