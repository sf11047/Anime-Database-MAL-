<?php

include "../php/query-template.php"; //HTML Template

include '../php/open.php';

//Begin Query Code

    $query = "Test Question";
    echo "<h1>".$query."<h1>";


    $stmt = $conn->prepare("SELECT * FROM TV LIMIT 5");
    $stmt->execute();
    $result = $stmt->get_result();
    echo $result;

    echo "finished";
//End Query Code

$conn->close();

include "../php/query-template-end.php"; //HTML Template
?>