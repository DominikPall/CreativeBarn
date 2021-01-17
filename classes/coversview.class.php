<?php
    class CoversView extends Covers {
        
        public function showCover($id) {
            $result = $this->getCover($id);
            echo $result[0]['price'] . '<br>';
        }
    }
?>