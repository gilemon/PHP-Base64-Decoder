<?php
require 'base64_decoder.php';
class Tests_Base64 extends PHPUnit_Framework_TestCase {
	public function testBase64String() {
		$this->assertEquals("This is a test, only a test", base64_decoder("VGhpcyBpcyBhIHRlc3QsIG9ubHkgYSB0ZXN0"));
	}
}
?>