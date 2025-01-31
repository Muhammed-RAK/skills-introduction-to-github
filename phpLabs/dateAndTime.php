<?php
// Set the default timezone
date_default_timezone_set('America/New_York');

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');
echo "Current Date and Time: " . $currentDateTime . "\n";

// Create a DateTime object
$date = new DateTime('2023-10-01 12:00:00');
echo "DateTime Object: " . $date->format('Y-m-d H:i:s') . "\n";

// Modify the DateTime object
$date->modify('+1 day');
echo "Modified DateTime (+1 day): " . $date->format('Y-m-d H:i:s') . "\n";

// Format the DateTime object
$formattedDate = $date->format('l, F j, Y g:i A');
echo "Formatted DateTime: " . $formattedDate . "\n";

// Calculate the difference between two dates
$date1 = new DateTime('2023-10-01');
$date2 = new DateTime('2023-12-25');
$interval = $date1->diff($date2);
echo "Difference: " . $interval->days . " days\n";

// Convert a timestamp to a DateTime object
$timestamp = time();
$dateFromTimestamp = (new DateTime())->setTimestamp($timestamp);
echo "DateTime from Timestamp: " . $dateFromTimestamp->format('Y-m-d H:i:s') . "\n";

// Create a DateTime object from a specific format
$dateFromFormat = DateTime::createFromFormat('d/m/Y', '25/12/2023');
echo "DateTime from Format: " . $dateFromFormat->format('Y-m-d') . "\n";
?>