<?php
    include ('conn.php');

    $status = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $customerNumber = $_POST['customerNumber'];
        $customerName = $_POST['customerName'];
        $contactLastName = $_POST['contactLastName'];
        $contactFirstName = $_POST['contactFirstName'];
        $phone = $_POST['phone'];
        $addressLine1 = $_POST['addressLine1'];
        $addressLine2 = $_POST['addressLine2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postalCode = $_POST['postalCode'];
        $country = $_POST['country'];
        $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
        $creditLimit = $_POST['creditLimit'];

        $query = "INSERT INTO customers VALUES ('$customerNumber','$customerName','$contactLastName','$contactFirstName','$phone','$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$salesRepEmployeeNumber','$creditLimit')";
        
        if ($conn->query($query)) {
            $status = 'ok';
          }
          else{
            $status = 'error';
          }
    
      }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
    <nav>
    <a href="#">Mas Muhammad Aqil Salim</a>
    </nav>

    <div>
        <div>
            <nav>
                <div>
                    <ul>
                        <li>
                            <a href="index.php">Data Customer</a>
                        </li>
                        <li>
                            <a href="product.php">Data product</a>
                        </li>
                        <li>
                            <a href="form.php">Tambah Data Customer</a>
                        </li>
                        <li>
                            <a href="formProduct.php">Tambah Data Product</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main">
                <?php
                    if ($status=='ok') {
                        echo '<br><br><div class="alert alert-success" role="alert">Data Customer berhasil disimpan</div>';
                      }
                      elseif($status=='error'){
                        echo '<br><br><div class="alert alert-danger" role="alert">Data Customers gagal disimpan</div>';
                      }
                ?>
                <h2 style="margin: 30px 0 30px;">Form Customer</h2>
                <form action="form.php" method="post">
                    <div>
                        <label>Customer Number</label>
                        <input type="text" name="customerNumber" name="customerNumber" required="required" placeholder="7492">
                    </div>
                    <div>
                        <label>Customer Name</label>
                        <input type="text" placeholder="Name..." name="customerName" required="required">
                    </div>
                    <div>
                        <label>Contact Last Name</label>
                        <input type="text" placeholder="Last Name..." name="contactLastName" required="required">
                    </div>
                    <div>
                        <label>Contact First Name</label>
                        <input type="text" placeholder="First Name..." name="contactFirstName" required="required">
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="text" placeholder="085*****9426" name="phone" required="required">
                    </div>
                    <div>
                        <label>Address Line 1</label>
                        <input type="text" placeholder="Jl Street..." name="addressLine1" required="required">
                    </div>
                    <div>
                        <label>Address Line 2</label>
                        <input type="text" placeholder="Address Details" name="addressLine2" >
                    </div>
                    <div>
                        <label>City</label>
                        <input type="text" placeholder="Surabaya..." name="city" required="required">
                    </div>
                    <div>
                        <label>State</label>
                        <input type="text" placeholder="Jawa Timur..." name="state" required="required">
                    </div>
                    <div>
                        <label>Postal Code</label>
                        <input type="text" placeholder="614..." name="postalCode" required="required">
                    </div>
                    <div>
                        <label>Country</label>
                        <input type="text" placeholder="Indonesia..." name="country" required="required">
                    </div>
                    <?php
                        $query = "SELECT employeeNumber FROM employees";
                        $result = $conn->query($query);
                    ?>
                    <div>
                        <label>Sales Rep Employee</label>
                        <select name="salesRepEmployeeNumber" required="required">
                            <option value="">Pilih Salah Satu</option>
                            <?php while($data = $result->fetch(PDO::FETCH_ASSOC) ): ?>
                                <option value="<?= $data['employeeNumber'] ?>"><?= $data['employeeNumber'] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div>
                        <label>Credit Limit</label>
                        <input type="text" name="creditLimit" placeholder="100000..." required="required">
                    </div>
                    <button type="submit">Save Changes</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>