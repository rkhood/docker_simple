<html>
    <body>
		<img src='eu.png' style="width: 50%; height: 50%"/>
		<h1 style='font:42px Arial; color:#2b1bd6'>Results</h1>
		<ol>
		<?php
            $json = file_get_contents('http://euro-service/');
            $obj = json_decode($json);
            $songs = $obj->songs;
			foreach ($songs as $song) {
				echo "<div style ='font:24px Arial; color:#2b1bd6'> <li>$song </li> </div>";
				}
            ?>
        </ol>
    </body>
</html>

