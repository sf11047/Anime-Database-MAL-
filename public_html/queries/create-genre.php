<?php
include "../php/query-template.php"; //HTML Template

include '../php/open.php';

//Begin Query PHP Code

    echo "<h1>Adding Genre<h1>"; //First line should be the question

    $genre = $_POST['genre'];
    $desc = $_POST['desc'];

    $myQuery = "Call CreateGenre(?);";
    $stmt = $conn->prepare($myQuery); 
    $stmt->bind_param("s", $genre, $desc);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo "<h2>".$row['outMessage']."</h2>";
    }

//End Query PHP Code

$conn->close();
?>
<?php
include "../php/query-template-end.php"; //HTML Template