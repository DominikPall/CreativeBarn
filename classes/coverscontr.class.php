<?php 
    class CoversContr extends Covers {

        public function setCovers($name, $description, $price, $url) {
            $id = $this->setCover($name, $description, $price);
            $this->setPicture($url, $id);
            return true;
        }

        public function createAdmin($uid, $pwd) {
            return $this->registerAdmin($uid, $pwd);
        }
    }
?>