<?php
    class CoversView extends Covers {
        
        public function showCover($id) {
            $result = $this->getCover($id);
            echo $result[0]['price'] . '<br>';
        }

        public function showPictur($id) {
            $result = $this->getPics($id);
            return $result;
        }

        public function logAdmin($uid, $pwd) {
            return $this->loginAdmin($uid, $pwd);
        }
    }
?>