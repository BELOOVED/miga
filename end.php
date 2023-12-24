<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["date"])) {

    $name = $_POST["name"];
    $date = $_POST["date"];

    session_start();

    $_SESSION["selected_name"] = $name;
    $_SESSION["selected_date"] = $date;
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false, "message" => "Hatalı istek"));
}
?>
