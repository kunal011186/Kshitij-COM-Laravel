<?php
namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Sliderwhats extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    // protected $config = ['count' => 5];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run($sliderName,$sliderSettings,$sliderTime)
    {
        
        $slideItem=config('kshitij.'.$sliderSettings);
       // $sliderName="What's new";
       // $sliderTime=20000;
        return view("widgets.slider-two", [
            'slideItem1' => $slideItem,
            'sliderName1' => $sliderName,
            'sliderTime1' => $sliderTime,
            'sliderSettings1' =>$sliderSettings 
        ]);
    }
}