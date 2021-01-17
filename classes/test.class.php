<?php 

class Test extends Dbh {
    
    public function getCovers(){
        $sql = "SELECT COUNT(*) as total FROM cover ";
        $stmt = $this->connect()->query($sql);
        $row = $stmt->fetch();
        echo $row['total'];
    }

    public function getCoversStmt($id){
        $sql = "SELECT * FROM cover where coverID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        
        $prices = $stmt->fetchAll();

        foreach($prices as $price) {
            echo $price['price'] . '<br>';
        }
    }

    public function setCoversStmt($descript, $price) {
        $sql = "INSERT INTO cover(description, price) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$descript, $price]);

    }
}
?>