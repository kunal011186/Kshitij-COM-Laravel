<?php



return array(



	// RIGHT SIDEBAR SLIDER SETTINGS



'whats-new' => array(['file'=>'qrtly-forecast-rhswidget.html'],


						  ['file'=>'eurusd-forecast-rhswidget.html'],



						  ['file'=>'usdjpy-forecast-rhswidget.html'],


						  ['file'=>'calendar-wallpaper-rhswidget.html'],


						  ['file'=>'crudeoil-forecast-rhswidget.html'],			  						  

						  ['file'=>'ustreasury-forecast-rhswidget.html']

						),



'testimonials' => array(['file'=>'testimo1.html'],

						['file'=>'testimo2.html'],

						['file'=>'testimo3.html']

						),


	// RIGHT SIDEBAR WIDGETS




'sidebar-widgets' => array(

						array('type' => 'view','view-name'=>'widgets.slider','settings'=>'testimonials','name'=>'','time'=>'17000'),



						 array('type' => 'view','view-name'=>'widgets.slider-two','settings'=>'whats-new','name'=>"",'time'=>'11000'),


						 array('type' => 'user-html','code'=>'rupee-dollar-banner.html')				

						),


);



