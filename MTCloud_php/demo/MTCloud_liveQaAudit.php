<?php

require __DIR__.'/../MTCloud.class.php';

$MTCloud = new MTCloud();


try{
    $result = $MTCloud->liveQaAudit(944077, 643109);

    var_dump($result);
}catch(MTCloudException $e){
    var_dump($e->getMessage());
}


