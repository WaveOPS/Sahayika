<?php
include('db_connection.php'); // Include your database connection file

if (isset($_POST['state_id'])) {
    $state_id = $_POST['state_id']; // Get the state code from the AJAX request
    $query = mysqli_query($conn, "SELECT * FROM district WHERE state_code = '$state_id'");
    echo '<option value="">Select District</option>'; // Default option
    while ($row = mysqli_fetch_array($query)) {
        echo '<option value="' . $row['DistrictName'] . '">' . $row['DistrictName'] . '</option>';
    }
}
?>


