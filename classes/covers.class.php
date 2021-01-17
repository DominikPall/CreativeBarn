<?php
    class Covers extends Dbh {
        
        protected function getCover($id) {
            $sql = "SELECT * FROM cover WHERE coverID = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            $result = $stmt->fetchAll();
            return $result;
        }

        public function setCover($description, $price) {
            $sql = "INSERT INTO cover(description, price) VALUES (?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$description, $price]);
        }
    }
?>