<?php 
$sliders= getAll('sliders');
$const_sliders= getOnce('const_sliders');
$works= getwhere('works','status=1');
$whatwedo= getwhere(' whatwedo','status=1');
$testimonials= getwhere('testimonials','status=1');
$aboutUs= getOnce('aboutus');
$features= getwhere('features','status=1');
$contacts= getwhere('contacts','status=1');
$message = getAll('masseges');

?>