<?php
/*
 * description: returns a pretty date format in seconds, minutes, weeks or months ago. Takes in unixtime.
 * usage: [+unixtime:ago=`language`+]
 */

include(MODX_BASE_PATH . 'assets/plugins/phx/modifiers/ago.language.php');

if (isset($language[$options])) {
    $lang = $language[$options];
} else {
    $lang = $language['english'];
}

$agoTS = array();
$uts['start'] = intval($output);
$uts['end'] = time();
if ($uts['start'] !== -1 && $uts['end'] !== -1) {
    if ($uts['end'] >= $uts['start']) {
        $diff = $uts['end'] - $uts['start'];

        $years = intval((floor($diff / 31536000)));
        if ($years) {
            $diff = $diff % 31536000;
        }
        $months = intval((floor($diff / 2628000)));
        if ($months) {
            $diff = $diff % 2628000;
        }
        $weeks = intval((floor($diff / 604800)));
        if ($weeks) {
            $diff = $diff % 604800;
        }
        $days = intval((floor($diff / 86400)));
        if ($days) {
            $diff = $diff % 86400;
        }
        $hours = intval((floor($diff / 3600)));
        if ($hours) {
            $diff = $diff % 3600;
        }
        $minutes = intval((floor($diff / 60)));
        if ($minutes) {
            $diff = $diff % 60;
        }
        $diff = intval($diff);
        $agoTS = array(
            'years' => $years,
            'months' => $months,
            'weeks' => $weeks,
            'days' => $days,
            'hours' => $hours,
            'minutes' => $minutes,
            'seconds' => $diff,
        );
    }
}

$ago = array();
if (!empty($agoTS['years'])) {
    $ago[] = str_replace('[+time+]', $agoTS['years'], $lang[($agoTS['years'] > 1) ? 'ago_years' : 'ago_year']);
}
if (!empty($agoTS['months'])) {
    $ago[] = str_replace('[+time+]', $agoTS['months'], $lang[($agoTS['months'] > 1) ? 'ago_months' : 'ago_month']);
}
if (!empty($agoTS['weeks']) && empty($agoTS['years'])) {
    $ago[] = str_replace('[+time+]', $agoTS['weeks'], $lang[($agoTS['weeks'] > 1) ? 'ago_weeks' : 'ago_week']);
}
if (!empty($agoTS['days']) && empty($agoTS['months']) && empty($agoTS['years'])) {
    $ago[] = str_replace('[+time+]', $agoTS['days'], $lang[($agoTS['days'] > 1) ? 'ago_days' : 'ago_day']);
}
if (!empty($agoTS['hours']) && empty($agoTS['weeks']) && empty($agoTS['months']) && empty($agoTS['years'])) {
    $ago[] = str_replace('[+time+]', $agoTS['hours'], $lang[($agoTS['hours'] > 1) ? 'ago_hours' : 'ago_hour']);
}
if (!empty($agoTS['minutes']) && empty($agoTS['days']) && empty($agoTS['weeks']) && empty($agoTS['months']) && empty($agoTS['years'])) {
    $ago[] = str_replace('[+time+]', $agoTS['minutes'], $lang[($agoTS['minutes'] > 1) ? 'ago_minutes' : 'ago_minute']);
}
if (empty($ago)) { /* handle <1 min */
    $ago[] = str_replace('[+time+]', !empty($agoTS['seconds']) ? $agoTS['seconds'] : 0, $lang[($agoTS['seconds'] > 1) ? 'ago_seconds' : 'ago_second']);
}

$output = implode(', ', $ago);
$output = str_replace('[+time+]', $lang['ago'], $output);

return $output;
