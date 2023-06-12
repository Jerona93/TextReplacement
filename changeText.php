<?php
$orifinalFile = 'text.txt'; // original file
$modifiedFile = 'newText.txt'; // modified file

// Read file contents
$content = file_get_contents($orifinalFile);

// Words and their replacement
$words = array(
    'blue' => 'red',
    'car' => 'bus'
);

// Replacement word on content
$modifiedContent = str_replace(array_keys($words), array_values($words), $content);

// Write the modified content in the new file
file_put_contents($modifiedFile, $modifiedContent);

echo "The words 'blue' and 'car' have been replaced and saved in the file;) '$modifiedFile'.";
?>