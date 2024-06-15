<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reservation.css">
    <script src="./js/javascript.js"></script>
</head>

<body>

    <h2>Second Floor Parking</h2>
    <div class="containers">
        <div class="static">
            <div class="static_img">
                <img src="./images/parking.png" alt="">
            </div>
            <p class="definition">Available Parking slots</p>
        </div>

        <div class="static">
            <div class="static_img">
                <img src="./images/noparking.png" alt="" >
            </div>
            <p class="definition">Unavailable Parking slots</p>
        </div>
    </div>


    <section class="parking-slots">
        <div class="box-containers">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "smartparkpro";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT slot_number, is_available FROM second_floor_parking ORDER BY CAST(SUBSTRING(slot_number, 3) AS UNSIGNED)";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $slotNumber = $row["slot_number"];
                    $isParkingAvailable = $row["is_available"];
                    $floor = "Second Floor Parking";

                    $imageSrc = ($isParkingAvailable) ? "./images/parking.png" : "./images/noparking.png";
                    $onClick = ($isParkingAvailable) ? "" : " onclick=\"showUnavailableSlotAlert(event)\"";

                    echo '<div class="boxes">';
                    echo '    <div class="images">';
                    echo '        <a href="index.php?floor=' . urlencode($floor) . '&slot=' . urlencode($slotNumber) . '"><img src="' . $imageSrc . '"' . $onClick . ' alt=""></a>';
                    echo '    </div>';
                    echo '    <p>' . $slotNumber . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No parking slot data available.";
            }

            $conn->close();
            ?>

        </div>
    </section>

</body>

</html>