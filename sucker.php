<?php

// Required fields
$required = ['name', 'section', 'cardnumber', 'cardtype'];

foreach ($required as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        echo "<h1>Sorry</h1>";
        echo '<p>You did not fill out the form completely. <a href="buyagrade.html">Try again?</a></p>';
        exit;
    }
}

// Get form values
$name = trim($_POST['name']);
$section = trim($_POST['section']);
$cardnumber = trim($_POST['cardnumber']);
$cardtype = trim($_POST['cardtype']);
$options = $_POST['options'] ?? array();

// Make sure options is an array
if (!is_array($options)) {
    $options = array($options);
}

$optionsText = implode(", ", $options);

// Save record to suckers.html
$line = $name . ";" . $section . ";" . $cardnumber . ";" . $cardtype . PHP_EOL;
file_put_contents("suckers.html", $line, FILE_APPEND);

// Display submitted data
echo "<h1>Form input values</h1>";
echo "<p>Your Name: " . htmlspecialchars($name) . "</p>";
echo "<p>Section: " . htmlspecialchars($section) . "</p>";
echo "<p>Card Number: " . htmlspecialchars($cardnumber) . "</p>";
echo "<p>Card Type: " . htmlspecialchars($cardtype) . "</p>";
echo "<p>Options: " . htmlspecialchars($optionsText) . "</p>";

echo "<h2>Raw Form Data</h2>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Display current database
$all = file_get_contents("suckers.html");

echo "<h2>The current database contains:</h2>";
echo "<pre>" . htmlspecialchars($all) . "</pre>";

?>