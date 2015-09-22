<?php
/**
 * Created by PhpStorm.
 * User: Liam
 * Date: 21/09/2015
 * Time: 11:51
 */

//Count number of weeks from monday when freshers week 0 begun

function countWeeksFromFreshers(){
    //Get date from monday 14th
    //minus current date from monday 14th
    //output the weeks from then
    date_default_timezone_set("Europe/London");
    return datediffInWeeks('9/14/2015',date('m/d/Y'));
}

function datediffInWeeks($date1, $date2)
{
    if($date1 > $date2) return datediffInWeeks($date2, $date1);
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    return floor($first->diff($second)->days/7);
}
