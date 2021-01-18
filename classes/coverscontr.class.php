<?php 
    class CoversContr extends Covers {

        public function setCovers($name, $description, $price, $url) {
            $id = $this->setCover($name, $description, $price);
            $this->setPicture($url, $id);
            return true;
        }

        public function deleteCovers($id) {
            $this->deleteCover($id);
        }

        public function updateCovers($name, $description, $price, $id) {
            $this->updateCover($name, $price, $description, $id);
        }
        
        public function createAdmin($uid, $pwd) {
            return $this->registerAdmin($uid, $pwd);
        }

        public function addSubscriber($name, $email) {
            $this->subscribeUser($name, $email);
        }
    }
?>