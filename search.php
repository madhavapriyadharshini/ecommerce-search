<?php
include 'db.php';

$searchTerm = $_POST['query'];

$sql = "SELECT * FROM products WHERE name LIKE '%$searchTerm%' OR description LIKE '%$searchTerm%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>
                <h3>{$row['name']}</h3>
                <p>{$row['description']}</p>
                <strong>\${$row['price']}</strong>
              </div><hr>";
    }
} else {
    echo "No results found.";
}
?>
