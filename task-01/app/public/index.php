<?php

require "connection.php";
require "operations/create.php";
require "operations/read.php";
require "operations/update.php";
require "operations/delete.php";

createUser($conn, "kamal", 1);
deleteUsers($conn, 1, null, 18); // delete with id = 1 and age = 18
deleteUsers($conn, null, "ahmed");
readUsers($conn); // all
readUsers($conn, null, "mohammed");
readUsers($conn, 4, null, age: 20);
readUsers($conn, 1, "mohammed", age: 21);
readUsers($conn, null, null, age: 21);
?>
