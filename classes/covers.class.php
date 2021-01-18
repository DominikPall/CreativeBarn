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

        protected function subscribeUser($name, $email) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            } else {
                $sql = "INSERT INTO subscribers(email, name) VALUES(?,?)";
                $stmt = $this->connect()->prepare($sql);
                $stmt = $execute([$email, $name]);
            }

            return true;
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