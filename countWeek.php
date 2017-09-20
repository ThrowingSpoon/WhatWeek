<?php
/**
 * User: Liam
 */


//Count number of weeks from when freshers (week 0) begun
/**
 * @return float - The number of weeks since the date provided (m/d/Y)
 */
function countWeeksFromFreshers(){
    date_default_timezone_set("Europe/London");
    //$freshers_start_date is the date (m/d/Y) of when freshers (week 0) begun, will need to be updated once a year.
    $freshers_start_date = '9/18/2017';
    return dateDiffInWeeks($freshers_start_date,date('m/d/Y'));
}

/** Thanks to vascowhite from stackoverflow for this function.
 * @param $date1 - The beginning date of week 0
 * @param $date2 - The current date
 * @return float - rounded down number of weeks since beginning of week 0
 */
function dateDiffInWeeks($date1, $date2)
{
    if($date1 > $date2) return dateDiffInWeeks($date2, $date1);
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    return floor($first->diff($second)->days/7);
}
