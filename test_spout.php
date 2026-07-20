<?php
require __DIR__.'/vendor/autoload.php';

use OpenSpout\Writer\XLSX\Writer;
use OpenSpout\Writer\XLSX\Options;
use OpenSpout\Common\Entity\Row;
use OpenSpout\Common\Entity\Cell;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;

$options = new Options();
$writer = new Writer($options);
echo "Writer initialized successfully\n";
