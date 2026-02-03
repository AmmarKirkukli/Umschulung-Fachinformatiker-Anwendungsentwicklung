<?php

include_once(__DIR__ . '/../model/subscribeModel.php');

class subscribeController {
    public function subscribeList() {
        $subscribeModel = new subscribeModel();
        $subscribes = $subscribeModel->getAllsubscribe();
        
        include(__DIR__ . '/../view/subscribe_list.php');
    }
    public function deleteSubscribe($subscribe_id) {
        $subscribeModel = new subscribeModel();
        $subscribeModel->deleteSubscribeById($subscribe_id);
        header("Location: index.php?action=subscribelist");
        exit();
    }
}    

