<?php

// Small helper array that may be used on some page controllers to
// fetch the crons we wish to monitor
$aMonitorCrons = array('statistics','payouts', 'payouts_mm','token_cleanup','archive_cleanup','blockupdate', 'blockupdate_mm','findblock', 'findblock_mm','notifications','tickerupdate','liquid_payout');

switch ($config['payout_system']) {
case 'pplns':
    $aMonitorCrons[] = $config['payout_system'] . '_payout';
      break;
case 'pps':
    $aMonitorCrons[] = $config['payout_system'] . '_payout';
      break;
case 'prop':
    $aMonitorCrons[] = 'proportional_payout';
      break;
}

switch ($config['payout_system_mm']) {
case 'pplns':
    $aMonitorCrons[] = $config['payout_system_mm'] . '_payout_mm';
      break;
case 'pps':
    $aMonitorCrons[] = 'findblock_mm_strict';
    $aMonitorCrons[] = $config['payout_system_mm'] . '_payout_mm';
      break;
case 'prop':
    $aMonitorCrons[] = 'proportional_payout_mm';
      break;
}

