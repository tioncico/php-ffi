--TEST--
FFI 033: FFI::new(), FFI::free(), FFI::type(), FFI::array()
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$p1 = FFI::new("uint8_t[2]");
$p2 = FFI::new("uint16_t[2]", true);
var_dump($p1, $p2);

$t1 = FFI::type($p1);
var_dump($t1);

$p4 = FFI::new($t1);
var_dump($p4);

$t2 = FFI::type("uint16_t[2]");
var_dump($t2);
$p4 = FFI::new($t2);
var_dump($p4);

$t2 = FFI::type("uint32_t");
var_dump($t2);
$t3 = FFI::array($t2, [2, 2]);
var_dump($t3);
?>
--EXPECTF--
object(FFI\CData:uint8_t[2])#%d (2) {
  [0]=>
  int(0)
  [1]=>
  int(0)
}
object(FFI\CData:uint16_t[2])#%d (2) {
  [0]=>
  int(0)
  [1]=>
  int(0)
}
object(FFI\CType:uint8_t[2])#%d (0) {
}
object(FFI\CData:uint8_t[2])#%d (2) {
  [0]=>
  int(0)
  [1]=>
  int(0)
}
object(FFI\CType:uint16_t[2])#%d (0) {
}
object(FFI\CData:uint16_t[2])#%d (2) {
  [0]=>
  int(0)
  [1]=>
  int(0)
}
object(FFI\CType:uint32_t)#%d (0) {
}
object(FFI\CType:uint32_t[2][2])#%d (0) {
}
