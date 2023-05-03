<?php
    echo '<h2>'. $title . '</h2>';
	 echo '<p>'. $text .'</p>';
	 echo '<ul>';
			foreach ($countries as $country) {
				echo '<li>'. $country .'</li>';
	      }
	 echo '</ul>';
