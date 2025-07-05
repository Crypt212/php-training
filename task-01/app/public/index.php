<?php

require "connection.php";
require "operations/create.php";
require "operations/read.php";
require "operations/update.php";
require "operations/delete.php";

createUser($conn, "kamal", 1);
createUser($conn, "ali", 18);
createUser($conn, "waleed", 29);
createUser($conn, "hazem", 3);
createUser($conn, "ahmed", 2);

readUsers($conn);

deleteUser($conn, 1);

readUsers($conn);

updateUser($conn, 1, "rafat", 55);

readUsers($conn);

?>
