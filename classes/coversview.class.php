<?php
    class CoversView extends Covers {
        
        public function showCover() {
            $result = $this->getCover();
            return  $result;
        }

        public function showCoverByName($name) {
            $result = $this->getCoverName($name);
            return $result;
        }

        public function showPicture($id) {
            $result = $this->getPics($id);
            return $result;
        }

        public function logAdmin($uid, $pwd) {
            return $this->loginAdmin($uid, $pwd);
        }
    }
?>