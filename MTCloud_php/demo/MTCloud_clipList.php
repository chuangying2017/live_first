<?php
require __DIR__.'/../MTCloud.class.php';

try{
    $MTCloud = new MTCloud();
    $result = $MTCloud->clipList();

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}