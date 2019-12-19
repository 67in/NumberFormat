<?php 
/**
 * 数字格式化测试类
 */

require __DIR__ . '/../vendor/autoload.php';

use NumberFormat\NumberFormat;

$number = '102400010';
echo NumberFormat::byte_format($number);