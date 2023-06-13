<?php

use model\MappingModel\FaqMapping;
use model\MappingModel\AdminMapping;

$test1 = new FaqMapping([]);

try{
    $test2 = new FaqMapping([
        "faqID" => 1,
        "faqTitle" => "test",
        "faqText" => "text",
        "lulu" => "lala"
    ]);
}catch(Exception $e){
    echo $e->getMessage();
}

try {
    $test3 = new FaqMapping([
        "faqID" => 1,
        "faqTitle" => " testtesttesttesttesttesttesttesttest testtesttesttesttesttesttesttesttesttesttesttesttesttesttest testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttest testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest",
        "faqText" => "text",
        "lulu" => "lala"
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $test4 = new FaqMapping([
        "faqID" => 7,
        "faqTitle" => "test",
        "faqText" => "text",
        "lulu" => "lala dfgrfggh rthgh"
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}

try{
    $test3 = new AdminMapping([
        "userID" => 3,
    ]);
}
 catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($test3);