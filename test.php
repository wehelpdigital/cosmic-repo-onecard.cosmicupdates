<?php
// Simple test file to diagnose server issues
echo "PHP is working!<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Server: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

// Check if index.php exists
if (file_exists('index.php')) {
    echo "index.php exists<br>";
} else {
    echo "index.php NOT FOUND<br>";
}

// Check for .shtml files
$shtml_files = glob('*.shtml');
if (!empty($shtml_files)) {
    echo "WARNING: .shtml files found: " . implode(', ', $shtml_files) . "<br>";
} else {
    echo "No .shtml files found (good)<br>";
}
?>
