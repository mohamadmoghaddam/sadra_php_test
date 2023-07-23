<?php 
class Customers extends Dbh {
    protected function getCustomers(){
       $query = "SELECT * FROM customers";
       $result = $this -> connect() -> query($query);
       while($row = $result->fetch_assoc()) {
        echo $row['firstname'] . $row['lastname'] . $row['phonenumber'] . '<hr>';
       }
    }
    protected function setCustomers($firstname, $lastname, $phonenumber){
        $query = "INSERT INTO customers ('firstname','lastname','phonenumber') VALUES (?,?,?)";
        $stmt = $this->connect() -> prepare($query);
        $stmt -> bind_param("ssi",$firstname, $lastname, $phonenumber);
        return $stmt -> execute();
    }
    protected function modifyCustomers($customer_id, $firstname, $lastname, $phonenumber){
        $query = "UPDATE customers SET 'firstname' = ? , 'lastname' = ? , 'phonenumber' = ? WHERE 'customer_id' = $customer_id";
        $stmt = $this->connect() -> prepare($query);
        $stmt -> bind_param("issi", $customer_id, $firstname, $lastname, $phonenumber);
        return $stmt -> execute();
    }
    protected function unsetCustomers($customer_id){
        $query = "DELETE FROM `customers` WHERE 'customer_id' = $customer_id";
        $stmt = $this->connect() -> prepare($query);
        $stmt -> bind_param("i", $customer_id);
        return $stmt -> execute();
    }
}
?>