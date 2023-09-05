<?php
require "./router.php";
require "./TestController.php";

TestController::test();
exit;
Router::get('/', function () {
    echo "hello"; 
});
Router::get('test', [TestController::class, 'test']);
Router::notFound();