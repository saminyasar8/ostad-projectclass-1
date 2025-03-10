<?php
define("USERNAME", "admin");
define("PASSWORD", "1234");

echo "Enter  Username: ";
$inputUsername = readline();
echo "ENTER  password: ";
$inputpassword = readline();

if (empty($inputUsername) || empty($inputpassword)) {
  echo "user name or password is blank ";
} else {
  if ($inputUsername === USERNAME && $inputpassword === PASSWORD) {
    echo "Login succssful! \n ";
  } else {
    echo "invaild name or password !\n ";
  }
}