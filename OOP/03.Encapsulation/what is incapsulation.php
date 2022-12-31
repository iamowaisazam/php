<?php
// Encapsulation means you cannot access variable directly in class like private variable.You have to create a method to get private variable.

class Person {
	private $name;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName($name) {
		return $this->name;
	}
}

$robin = new Person();
$robin->setName('Robin');
$robin->getName();



?>