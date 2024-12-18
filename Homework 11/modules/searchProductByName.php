<?php

    if (!isset($_GET ['nameAndDescription']) || empty($_GET ['nameAndDescription'])) {
        die ("Field is required");
    }

    $nameAndDescription = $_GET['nameAndDescription'];

    require_once ("base.php");

    $sql = "SELECT * FROM proizvodi WHERE ime  LIKE '$nameAndDescription%' OR opis  LIKE '$nameAndDescription%' ";

    $result = $base->query($sql);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Products</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Product name</th>
                <th>Product description</th>
                <th>Product price</th>
                <th>Date of purchase</th>
                <th>Quantity</th>
            </tr>
        </thead>

        <tbody>
        <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                        echo "<td>" . ($row["ime"]) . "</td>";
                        echo "<td>" . ($row["opis"]) . "</td>";
                        echo "<td>" . ($row["cena"]) . "</td>";
                        echo "<td>" . ($row["dan_nabavke"]) . "</td>";
                        echo "<td>" . ($row["kolicina"]) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Product with name or description not found</td></tr>";
            }
            ?>
        </tbody>
    </table>
    </body>
    </html>