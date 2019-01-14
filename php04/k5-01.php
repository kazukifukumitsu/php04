<?php

$text = "<b>text</b>";
$text = strip_tags($text);
print $text;

?>



<?php

$text = "<b>text</b>";
$text = strip_tags($text, '<b>');
print $text

?>
