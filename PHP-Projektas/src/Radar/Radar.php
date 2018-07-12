<?php 
namespace Radar;

class Radar 
{
    private $date;
    private $number;
    private $distance;
    private $time;

    /**
     * @param DateTime $date
     * @param string   $number
     * @param float    $distance
     * @param float    $time
     * 
     **/

    public function __construct($date,$number,$distance,$time) 
    {
        $this->date = $date;
        $this->number = $number;
        $this->distance = $distance;
        $this->time = $time;
    }
    public static function dateSort($a, $b)
    {
        return $a->date <=> $b->date;
    }

    public static function speedSort($a, $b)
    {
        return ($b->distance / $b->time) <=> ($a->distance / $a->time);
    }
    
    public function info() 
    {
        return '<tr><td>' . $this->date->format('Y-m-d H:i:s') . '</td><td>' . 
                $this->number . '</td><td>' . $this->distance . '</td><td>' .
                $this->time . '</td><td>' . $this->kmPerHour() . '</td></tr>';         
    }

    public function kmPerHour() 
    {
        $mps = $this->distance / $this->time;
        $kmph = round(($mps * 3.6), 1);
        return  $kmph;
    }

    public function filterPlateNumber() 
    {
        return (preg_match('/(?i)' . $_GET['filter'] . '/', $this->number));
    }

}