<?php
/*
 * description: checks if user is logged into manager
 * usage: [*phx:ismanager:is=`1`:then=`...`*] 
 * 
 */

$ismanager = ($_SESSION['usertype'] === 'manager') ? '1' : '0';
return $ismanager;
