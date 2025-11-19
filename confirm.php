<?php
session_start();
include("dbcon.php");

if (isset($_POST['confirm'])) {

    $firstname = $_SESSION['passengerFN'];
    $surname = $_SESSION['passengerSN'];

    // luggage bag counts
    $underTen = isset($_SESSION['subTenKG']) ? $_SESSION['subTenKG'] : 0;
    $overTen = isset($_SESSION['overTenKG']) ? $_SESSION['overTenKG'] : 0;

    $sql = "INSERT INTO flightbooking (firstname, surname, bagsUnderTenKG, bagsOverTenKG)
            VALUES ('$firstname', '$surname', $underTen, $overTen)";

    mysqli_query($conn, $sql);

    echo "<h2>Booking Saved!</h2>";
    echo "<p>Your booking was successfully inserted.</p>";

} else {
    echo "<h3>You must confirm before continuing.</h3>";
}
?>
