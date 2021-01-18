<?php
    class Covers extends Dbh {
        
        protected function getCover($id) {
            $sql = "SELECT * FROM cover WHERE coverID = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            $result = $stmt->fetchAll();
            return $result;
        }

        protected function getPics($id) {
            $sql = "SELECT * FROM pictures WHERE coverID = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            
            $result = $stmt->fetchAll();
            return $result;
        }

        protected function setCover($description, $price) {
            $sql = "INSERT INTO cover(description, price) VALUES (?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$description, $price]);
        }

        protected function setPicture($picturePath, $coverId) {
            $sql = "INSERT INTO pictures(url, coverID) VALUES (?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$picturePath, $coverId]);
        }
    }
?>