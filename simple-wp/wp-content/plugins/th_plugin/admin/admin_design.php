<?php

function th_admin_header(){
 echo '<div class="th_header">Logo</div>';
}

function th_admin_page(){
// 	echo '
// 		<div class="th_nav">
// 			<ul>
// 				<li><a class="active" href="#home">Home</a></li>
// 				<li><a href="#contact">Contact</a></li>
// 				<li><a href="#about">About</a></li>
// 			</ul>
// 		</div>
//   ';

$img = plugin_dir_url( __FILE__ ) . 'images/goku.jpg';

  echo '
  <div class="container">
  <div class="column">
	  <div class="th_nav">
		<ul>
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="#contact">Contact</a></li>
		  <li><a href="#about">About</a></li>
		</ul>
	  </div>
  </div>
  <div class="column">
	<div class="th_image"><img src="' . $img . '" alt=""></div>
	<div class="th_content">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
  </div>
  <div class="column">
  <div class="th_video"><iframe width="560" height="315" src="https://www.youtube.com/embed/omewjiYaZZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
  </div>
</div>


<div class="container">
	<div class="column">
		<div class="th_content">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
	</div>
	<div class="column">
		<div class="th_content">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
	</div>
</div>

  ';
//   echo '<br/><br/>';
}

// function th_admin_content(){
//  $img = plugin_dir_url( __FILE__ ) . 'images/goku.jpg';
// 	echo '<div class="th_image"><img src="' . $img . '" alt=""></div>';
// 	echo '<br/>';
// 	echo '<div class="th_content">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>';
// }

//    function th_adminfooter(){
// 	echo '<div class="th_footer">Footer</div>';
// }