<?php
// Polymorphism
// The Polymorphism means 

interface Shape {
	public function name();
}


class Circle implements Shape {
	public function name() {
		echo "I am a circle";
	}
}

class Triangle implements Shape {
	public function name() {
		echo "I am a triangle";
	}
}

function test(Shape $shape) {
	$shape->name();
}

test(new Circle()); // I am a circle
test(new Triangle()); // I am a triangle

// Above example, test(Shape $shape) function declares(type hints) its only parameter to be Shape type. This function is not aware of Circle and Triangle classes. When either class is passed to this function as a parameter, it processes respectively.

?>