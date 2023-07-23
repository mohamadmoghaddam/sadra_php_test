<?php
class CustomersView extends Customers {
    public function showCustomers(){
        $result = $this -> getCustomers();
        while($row = $result->fetch_assoc()) {
            echo "FirstName: " . $row['firstname'];
            echo "<br>LastName: " . $row['lastname'];
            echo "<br>PhoneNumber: " . $row['phonenumber'] . '<hr>';
           }
    }
} 
?>