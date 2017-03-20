<?php
// Desired folder structure
$structure = 'C:\\Users\\Administrator\\Documents\\Follow Liker\\Share\\savinaltd';

// To create the nested structure, the $recursive parameter 
// to mkdir() must be specified.

if (!mkdir($structure, 0777, true)) {
    die('Failed to create folders...');
} else {
	echo "success";
}

echo "Forth Commit test";

?>