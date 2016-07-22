<?php

/*
 *  RepairPress Home Page Template for Visual Composer
 */

add_action( 'vc_load_default_templates_action','repairpress_home_page_template_for_vc' );

function repairpress_home_page_template_for_vc() {
	$data               = array();
	$data['name']       = _x( 'RepairPress: Home Page', 'backend' , 'repairpress-pt' );
	$data['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . '/vendor/proteusthemes/visual-composer-elements/assets/images/pt.svg' );
	$data['custom_class'] = 'repairpress_home_page_template_for_vc_custom_template';
	$data['content']    = <<<CONTENT
		[vc_row el_class="icon-box-small" css=".vc_custom_1442226208364{margin-top: -30px !important;margin-bottom: 60px !important;background-color: #f2f2f2 !important;}" full_width="stretch_row"][vc_column width="1/4"][pt_vc_icon_box icon="fa fa-money" title="NO FIX, NO FEE" text="Dolor ipsum sit" new_tab=""][/vc_column][vc_column width="1/4"][pt_vc_icon_box icon="fa fa-calendar-o" title="30 DAYS WARRENTY" text="Ipsum sit dolor" new_tab=""][/vc_column][vc_column width="1/4"][pt_vc_icon_box icon="fa fa-users" title="EXPERT STAFF" text="Lorem ipsum si" new_tab=""][/vc_column][vc_column width="1/4"][pt_vc_icon_box icon="fa fa-tachometer" title="WE ARE FAST" text="Sit dolor ipsum" new_tab=""][/vc_column][/vc_row][vc_row css=".vc_custom_1442229626223{margin-bottom: 60px !important;}"][vc_column width="1/4"][pt_vc_featured_page page="206" layout="block" read_more_text="Read more"][/vc_column][vc_column width="1/4"][pt_vc_featured_page page="190" layout="block" read_more_text="Read more"][/vc_column][vc_column width="1/4"][pt_vc_featured_page page="209" layout="block" read_more_text="Read more"][/vc_column][vc_column width="1/4"][pt_vc_container_icon_menu][pt_vc_icon_menu_item icon="fa fa-laptop" title="LAPTOP REPAIR" link="/services" new_tab=""][pt_vc_icon_menu_item icon="fa fa-mobile" title="TABLET &amp; IPAD REPAIR" link="/services" new_tab=""][pt_vc_icon_menu_item icon="fa fa-gamepad" title="GAME SYSTEMS REPAIR" link="/services" new_tab=""][pt_vc_icon_menu_item icon="fa fa-desktop" title="LCD TV REPAIR" link="/services" new_tab=""][pt_vc_icon_menu_item icon="fa fa-music" title="MP3 &amp; MP4 REPAIRS" link="/services" new_tab=""][pt_vc_icon_menu_item icon="fa fa-ellipsis-v" title="OTHER ELECTRONICS" link="/services" new_tab=""][/pt_vc_container_icon_menu][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1442229929639{margin-bottom: 79px !important;padding-top: 60px !important;padding-bottom: 60px !important;background-color: #3d3d3d !important;}"][vc_column width="1/1"][pt_vc_container_steps title="Easy way to get your phone repaired"][pt_vc_step icon="fa fa-mobile" title="BROKEN DEVICE" item_content="If your device breaks, don't panic. We offer a huge range of mobile phone &amp; tablet repair services." step="01."][pt_vc_step icon="fa fa-envelope" title="SEND IT TO US" item_content="We offer free postage with all mobile phone &amp; table repairs. Saving you time and money. Just print the label and send." step="02."][pt_vc_step icon="fa fa-wrench" title="QUICK FIX" item_content="Our trained technicians will repair your mobile phone or tablet device quickly &amp; efficiently, keeping you informed all the way." step="03."][pt_vc_step icon="fa fa-reply" title="FAST RETURN" item_content="Choose the delivery method that matches your requirements. We will make sure you repaired device is returned safely." step="04."][/pt_vc_container_steps][/vc_column][/vc_row][vc_row css=".vc_custom_1442230487904{margin-bottom: 80px !important;}"][vc_column width="1/3"][pt_vc_icon_box icon="fa fa-android" title="Android Lolipop" text="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura." new_tab=""][pt_vc_icon_box icon="fa fa-print" title="China Express" text="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura." new_tab=""][/vc_column][vc_column width="1/3"][pt_vc_icon_box icon="fa fa-apple" title="Apple iOS 8.0" text="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura." new_tab=""][pt_vc_icon_box icon="fa fa-camera-retro" title="iCamera OS" text="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura." new_tab=""][/vc_column][vc_column width="1/3"][pt_vc_icon_box icon="fa fa-windows" title="Windows Phone 10" text="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura." new_tab=""][pt_vc_icon_box icon="fa fa-desktop" title="Desktop System" text="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura." new_tab=""][/vc_column][/vc_row][vc_row css=".vc_custom_1442230534312{padding-top: 54px !important;background-color: #f2f2f2 !important;}" full_width="stretch_row"][vc_column width="1/1"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ3aWRnZXQtdGl0bGUtLWJpZyUyMiUzRSUyMCUzQ2RpdiUyMGNsYXNzJTNEJTIydGl0bGUtd2l0aC1idXR0b24lMjIlM0UlMEElM0NoMyUyMGNsYXNzJTNEJTIyd2lkZ2V0LXRpdGxlJTIyJTNFJTNDc3BhbiUyMGNsYXNzJTNEJTIyd2lkZ2V0LXRpdGxlX19pbmxpbmUlMjIlM0VMYXRlc3QlMjBOZXdzJTNDJTJGc3BhbiUzRSUzQyUyRmgzJTNFJTIwJTNDYSUyMGhyZWYlM0QlMjJodHRwcyUzQSUyRiUyRmRlbW8ucHJvdGV1c3RoZW1lcy5jb20lMkZyZXBhaXJwcmVzcyUyRmxhdGVzdC1uZXdzJTIyJTIwdGFyZ2V0JTNEJTIyX3NlbGYlMjIlMjBjbGFzcyUzRCUyMmJ0biUyMCUyMGJ0bi1wcmltYXJ5JTIwJTIwdGl0bGUtd2l0aC1idXR0b25fX2J1dHRvbiUyMiUzRU1PUkUlMjBORVdTJTNDJTJGYSUzRSUwQSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==

[/vc_raw_html][/vc_column][/vc_row][vc_row css=".vc_custom_1442231376607{margin-top: -35px !important;margin-bottom: 50px !important;padding-top: 30px !important;padding-bottom: 60px !important;background-color: #f2f2f2 !important;}" full_width="stretch_row"][vc_column width="1/2"][pt_vc_latest_news layout="block" order_number="1" order_number_from="1" order_number_to="3" show_more_link=""][/vc_column][vc_column width="1/2"][pt_vc_latest_news layout="block" order_number="2" order_number_from="1" order_number_to="3" show_more_link=""][/vc_column][/vc_row][vc_row css=".vc_custom_1442231422346{margin-bottom: 80px !important;}"][vc_column width="1/2"][vc_column_text]
<div class="widget-title--big">
<h3 class="widget-title"><span class="widget-title__inline">About Us</span></h3>
</div>
<div></div>
Add gallery here!

Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. Mauris accumsan elit a est tincidunt mattis.

Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper.

<a class="more-link" href="http://xml-io.proteusthemes.com/repairpress/about-us/">Read More</a>[/vc_column_text][/vc_column][vc_column width="1/2" el_class="widget-title--big"][vc_column_text]
<div class="widget-title--big">
<h3 class="widget-title"><span class="widget-title__inline">FAQ</span></h3>
</div>
[/vc_column_text][pt_vc_container_accordion read_more_url="#"][pt_vc_accordion_item title="HOW TO MAKE TEXT BIGGER ON THE IPHONE?" item_content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. Mauris accumsan elit a est tincidunt mattis."][pt_vc_accordion_item title="RECOVER DELETED PHOTOS AND VIDEOS ON SONY XPERIA" item_content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. Mauris accumsan elit a est tincidunt mattis."][pt_vc_accordion_item title="HOW TO SCREENSHOT ON HTC SMARTPHONE?" item_content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. Mauris accumsan elit a est tincidunt mattis."][pt_vc_accordion_item title="THE DIFFERENCE BETWEEN A CRACKED SCREEN &amp; BROKEN LCD..." item_content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. Mauris accumsan elit a est tincidunt mattis."][pt_vc_accordion_item title="HOW TO SOLVE SONY XPERIA OVER HEATING PROBLEMS" item_content="Duis malesuada metus orci, id pulvinar lectus vehicula in. In hendrerit facilisis ex eget aliquet. Nam id congue dolor. Donec feugiat hendrerit lorem. Donec sagittis massa vitae nulla feugiat vulputate. Sed pulvinar ipsum ac tempor viverra. Nulla facilisi. Integer pulvinar at libero eu semper. Mauris accumsan elit a est tincidunt mattis."][/pt_vc_container_accordion][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1442231683965{margin-bottom: 0px !important;}"][vc_column width="1/1"][pt_vc_container_google_map lat_long="51.517331,-0.127668" zoom="12" type="roadmap" style="RepairPress" height="380"][pt_vc_location title="London" locationlatlng="51.510099,-0.015805" custompinimage="http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/pin.png"][pt_vc_location title="London" locationlatlng="51.489595,-0.175266" custompinimage="http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/pin.png"][/pt_vc_container_google_map][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1442232103892{margin-bottom: 53px !important;padding-top: 0px !important;padding-bottom: 0px !important;background-color: #2f538a !important;}"][vc_column width="1/1"][pt_vc_call_to_action title="Do you want to sell your mobile phone?" subtitle="We can sell your cell phone device in the matter of days for just 10% fee"]

[button style="info"]GET A FREE ESTIMATION[/button]

[/pt_vc_call_to_action][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][vc_column_text]
<div class="widget-title--big">
<h3 class="widget-title"><span class="widget-title__inline">Gallery Before - After</span></h3>
</div>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1442232542574{margin-bottom: 70px !important;}"][vc_column width="1/4"][vc_column_text]Add gallery here!
<h5 class="p1">BANDROID 6S</h5>
<p class="p1">Screen on this phone was demolished. We have change the whole broken screen and replace it with new one.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]Add gallery here!
<h5 class="p1">SEMSON GALAXY S3</h5>
<p class="p1">Screen on this phone was demolished. We have change the whole broken screen and replace it with new one.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]Add gallery here!
<h5 class="p1">MINGLE FIRE TOUCH</h5>
<p class="p1">Screen on this phone was demolished. We have change the whole broken screen and replace it with new one.</p>

[/vc_column_text][/vc_column][vc_column width="1/4"][vc_column_text]Add gallery here!
<h5 class="p1">BANDROID RAPTOR 2</h5>
<p class="p1">Screen on this phone was demolished. We have change the whole broken screen and replace it with new one.</p>

[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1442233360531{margin-bottom: 50px !important;padding-top: 40px !important;padding-bottom: 60px !important;background-image: url(http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/pttrn.jpg) !important;}"][vc_column width="1/1"][pt_vc_container_testimonials title="Testimonials" autocycle="no" interval="5000"][pt_vc_testimonial quote="But I must explain to you how all this mistakn idea of denouncing pleasure and praising pain was born and I will give you a complete of the system, and expound the actual teaings of the great explorer idea to be on the top of the mobile industry." author="JOSEPH JIMENEZ"][pt_vc_testimonial quote="But I must explain to you how all this mistakn idea of denouncing pleasure and praising pain was born and I will give you a complete of the system, and expound the actual teaings of the great explorer idea to be on the top of the mobile industry." author="JANE JIMENEZ"][pt_vc_testimonial quote="But I must explain to you how all this mistakn idea of denouncing pleasure and praising pain was born and I will give you a complete of the system, and expound the actual teaings of the great explorer idea to be on the top of the mobile industry." author="JOE JIMENEZ"][/pt_vc_container_testimonials][/vc_column][/vc_row][vc_row css=".vc_custom_1442233591740{margin-bottom: 90px !important;}"][vc_column width="1/1"][vc_column_text]
<div class="widget-title--big">
<h3 class="widget-title"><span class="widget-title__inline">Our Partners</span></h3>
</div>
<div class="logo-panel">
<div class="row">
<div class="col-xs-12 col-sm-2"><img src="http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/1.png" alt="Client logo" /></div>
<div class="col-xs-12 col-sm-2"><img src="http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/2.png" alt="Client logo" /></div>
<div class="col-xs-12 col-sm-2"><img src="http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/3.png" alt="Client logo" /></div>
<div class="col-xs-12 col-sm-2"><img src="http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/4.png" alt="Client logo" /></div>
<div class="col-xs-12 col-sm-2"><img src="http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/5.png" alt="Client logo" /></div>
<div class="col-xs-12 col-sm-2"><img src="http://xml-io.proteusthemes.com/repairpress/wp-content/uploads/sites/27/2015/09/6.png" alt="Client logo" /></div>
</div>
</div>
[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1442233556641{margin-bottom: 0px !important;padding-top: 57px !important;padding-bottom: 57px !important;background-color: #f2f2f2 !important;}"][vc_column width="1/1"][pt_vc_container_number_counter speed="1500"][pt_vc_counter title="Repaired Glasses" number="2427"][pt_vc_counter title="Water Damaged Repairs" number="697"][pt_vc_counter title="Unlocked Phones" number="1440"][pt_vc_counter title="Happy Customers" number="41472"][/pt_vc_container_number_counter][/vc_column][/vc_row]
CONTENT;

	vc_add_default_templates( $data );
}