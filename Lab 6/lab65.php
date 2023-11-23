<?php
class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
final public function masTests() {
echo "ClaseBase::masTests() llamada\n";
}
}
class ClaseHijo extends ClaseBase {
public function masTests() {
echo "ClaseHijo::masTests() llamada\n";
}
/* Respuesta: 
Error: Cannot override final method ClaseBase::masTests()
No se pueden anular los metodos finales. */
}
?>