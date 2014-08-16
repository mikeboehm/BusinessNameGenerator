<?php
$names_to_generate = 10;

$filename = 'words.txt';
$file_contents = file_get_contents($filename);
$word_list = explode("\n", $file_contents);

$max_index = count($word_list) - 1;

for($i = 0; $i <= $names_to_generate; $i++) {
	$name = $word_list[rand(0,$max_index)] . ' '  .  $word_list[rand(0,$max_index)];
	echo($name . "\n");
}