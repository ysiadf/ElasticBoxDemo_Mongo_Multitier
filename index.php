<?php

$m = new MongoClient("mongodb://{{ mongo.address.public }}");

echo $m->connected;

?>
