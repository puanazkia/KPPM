<?php
require __DIR__.'/vendor/autoload.php';

use OpenSpout\Writer\XLSX\Writer;
use OpenSpout\Writer\XLSX\Options;
use OpenSpout\Common\Entity\Row;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\CellAlignment;

$options = new Options();
$writer = new Writer($options);
$writer->openToFile('test.xlsx');

$style = (new Style())
    ->setFontBold()
    ->setBackgroundColor('D9EAD3');

$writer->addRow(Row::fromValues(['Test Header 1', 'Test Header 2'], $style));
$writer->addRow(Row::fromValues(['Row 1', 'Row 2']));

$writer->addNewSheetAndMakeItCurrent();
$writer->getCurrentSheet()->setName('Sheet 2');
$writer->addRow(Row::fromValues(['New Sheet'], $style));

$writer->close();
echo "Success\n";
