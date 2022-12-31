<?php

namespace app;

use app\Controller\Employ;
use app\Controller\Customer as p;

include 'classess/Customer.php';
include 'classess/Employ.php';


$p = new  Employ();
echo $p->text();











?>