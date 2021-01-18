<?php
    class Covers extends Dbh {
        
        protected function getCover() {
            $sql = "SELECT * FROM cover";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();
            return $result;
        }

        protected function getCoverName($name) {
            $sql = "SELECT * FROM cover where name = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            $result = $stmt->fetch();
            return $result;
        }

        protected function getPics($id) {
            $sql = "SELECT * FROM pictures WHERE coverID = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            
            $result = $stmt->fetchAll();
            return $result;
        }

        protected function setCover($name, $description, $price) {
            $sql = "INSERT INTO cover(description, price, name) VALUES (?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$description, $price, $name]);
            
            $sql = "SELECT * FROM cover ORDER BY coverID DESC LIMIT 1";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            
            $result = $stmt->fetch();
            return $result['coverID'];
        }

        protected function setPicture($picturePath, $coverId) {
            $sql = "INSERT INTO pictures(url, coverID) VALUES (?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$picturePath, $coverId]);
        }

        protected function registerAdmin($uid, $password) {
            $sql = "SELECT * FROM admin";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            if($result) {
                return false;            
            } else {
                $sql = "INSERT INTO admin(uid, password) VALUES(?,?)";
                $stmt = $this->connect()->prepare($sql);
                $pwdHashed = password_hash($password, PASSWORD_DEFAULT);
                $stmt->execute([$uid, $pwdHashed]);
                return true;
            }

            
        }

        protected function updateCover($name, $price, $description, $id) {
            $sql = "UPDATE cover
                    SET name = ?,
                    price = ?,
                    description = ? where coverID = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $price, $description, $id]);
        }

        protected function deleteCover($id) {
            $sqlpic = "DELETE FROM pictures where coverID = ?";
            $sql = "DELETE FROM cover where coverID = ?";

            $stmt2 = $this->connect()->prepare($sqlpic);
            $stmt = $this->connect()->prepare($sql);
            
            $stmt2->execute([$id]);
            $stmt->execute([$id]);
        }

        protected function subscribeUser($name, $email) {
            $sql = "INSERT INTO subscribers(email, name) VALUES(?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email, $name]);
        }

        protected function loginAdmin($uid, $pwd) {
            $sql = "SELECT * FROM admin";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            
            $result = $stmt->fetchAll();
            if($result) {
                if($uid == $result[0]['uid']) {
                    $pwdHashed = $result[0]['PASSWORD'];
                    $checkPwd = password_verify($pwd, $pwdHashed);

                    if($checkPwd == false) {
                        return false;
                    } else if($checkPwd == true) {
                        return true;
                    }

                }
            } else {
                return false;
            }
            return false;
        }
    }
?>