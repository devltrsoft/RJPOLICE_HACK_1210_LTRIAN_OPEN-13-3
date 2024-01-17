<?php

require'api1.php';

// Perform the SELECT query
$user = "SELECT * FROM event";
$result = mysqli_query($conn, $user);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
         echo "ID: " . $row['id'] . "<br>";
        echo "event id: " . $row['event_id'] . "<br>";
        echo "event name: " . $row['event_name'] . "<br>";
         echo "event_type_id: " . $row['event_type_id'] . "<br>";
        echo "event description: " . $row['event_description'] . "<br>";
        echo "event_guest: " . $row['event_guest'] . "<br>";
         echo "event_venue: " . $row['event_venue'] . "<br>";
        echo "event_date_time: " . $row['event_date_time'] . "<br>";
        echo "event_duration: " . $row['event_duration'] . "<br>";
        }
} else {
    echo "not selected";
}
  
// Close the database connection when you're done
mysqli_close($conn);
?>
