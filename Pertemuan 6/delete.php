<?php
    include('conn.php');

    $status = '';
    $result = '';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $customerNumber = $_GET['id'];
            $query = "DELETE FROM customers WHERE customerNumber = $customerNumber";

            $result = mysqli_query(connection(),$query);

            if ($result) {
                $status = 'okay';
            } else {
                $status = 'error';
            }

            header('Location: Index.php?status='.$status);
        }
    }
?>