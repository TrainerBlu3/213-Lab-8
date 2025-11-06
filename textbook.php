<?php
class Textbook extends Book {
	public $subject;

	public function getDetails() {
		return $super->getDetails() + " - " . $subject;
	}
}
