<?php

session_start();


try {
    require("../../../db.php");


    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];

        // Prepare the DELETE statement
        $stmt = $pdo->prepare("DELETE FROM sub_catagory WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        $delete = $stmt->execute();

        if ($delete) {
            $_SESSION['success'] = true;
            header('location: ../homePage.php?page=sub');
        }
    }
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
