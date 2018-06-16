<?php
$files = glob("*.sfm");

$book = array(array());

foreach ($files as $file) {
 $bk = substr($file,3,3);
 preg_match_all("/\\\\c ([0-9]+)/ms",file_get_contents($file),$chapters);
 foreach($chapters[1] as $chapter)
  echo "$bk : $chapter\n";
}
?>
