<?php
namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Slider extends AbstractWidget
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
        return view("widgets.slider", [
            'slideItem' => $slideItem,
            'sliderName' => $sliderName,
            'sliderTime' => $sliderTime,
            'sliderSettings' =>$sliderSettings 
        ]);
    }
}