<?php
    include_once 'covers.class.php';
    class CoversView extends Covers {
        
        public function showCover() {
            $result = $this->getCover();
            return  $result;
        }

        public function showCoverById($id) {
            $result = $this->getCoverId($id);
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