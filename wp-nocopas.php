<?php
/*
Plugin Name: OemWP NoCopas
Plugin URI: https://github.com/oemunix/wp-nocopas
Description: Plugin Wordress Anti Copas dengan JS & CSS
Version: 1.0
Author: oemunix
Author URI: https://github.com/oemunix
*/

function oem_rightclick() { ?>
<script type='text/javascript'>
function catch_click(e)
{
    if (!e) var e = window.event;

    var right_click = (e.which ? (e.which == 3) : (e.button == 2));

    if (right_click)
    {
	prompt("Function Disable"); // You may edit this message
	return false;
    }
}

document.onmousedown = catch_click;
if (document.captureEvents) document.captureEvents(Event.MOUSEDOWN);
</script>
<script type='text/javascript'>
  document.onkeydown = function (e) {
    e.preventDefault();		
  }
</script>
<style>
body {
	line-height: 1;
-webkit-user-select: none;  /* Chrome all / Safari all */
-moz-user-select: none;     /* Firefox all */
-ms-user-select: none;      /* IE 10+ */
-o-user-select: none;
user-select: none;
}
</style>
<?php } 
add_action('wp_footer', 'oem_rightclick');
?>
