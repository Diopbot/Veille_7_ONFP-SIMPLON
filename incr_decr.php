<?php
echo '<h3>Post-incrémentation</h3>';
$a = 5;
echo "Devrait valoir  5: " . $a++ . "<br />\n";
echo "Devrait valoir  6: " . $a . "<br />\n";
echo '<h3>Pre-incrémentation</h3>';
$a = 5;
echo "Devrait valoir  6: " . ++$a . "<br />\n";
echo "Devrait valoir  6: " . $a . "<br />\n";
echo '<h3>Post-décrémentation</h3>';
$a = 5;
echo "Devrait valoir  5: " . $a-- . "<br />\n";
echo "Devrait valoir  4: " . $a . "<br />\n";
echo '<h3>Pre-décrémentation</h3>';
$a = 5;
echo "Devrait valoir  4: " . --$a . "<br />\n";
echo "Devrait valoir  4: " . $a . "<br />\n";
?>

<?php
echo '== Alphabets ==' . PHP_EOL;
$s = 'W';
for ($n=0; $n<6; $n++) {
    echo ++$s . PHP_EOL;
}
// Les caractères digitaux réagissent différemment
echo '== Caractères digitaux ==' . PHP_EOL;
$d = 'A8';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}
$d = 'A08';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}
