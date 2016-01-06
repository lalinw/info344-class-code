Content before
<?php
$name = 'Irene';
//php is not type strict
$fullName = $name . 'W';

function foo() {
	echo "Hey this is the foo fighting function\n";
}

echo "Hello {$name}s\n";
foo();
?>
content after
