<?php

/* This code shows examples about classes. */

class Person
{
	public $name;
	public $age;
	public $isMarried;
	public $salary;

	public function __construct($name, $age, $isMarried, $salary)
	{
		$this->name = $name;
		$this->age = $age;
		$this->isMarried = $isMarried;
		$this->salary = $salary;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function getIsMarried()
	{
		return $this->isMarried;
	}

	public function getSalary()
	{
		return $this->salary;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function setIsMarried($isMarried)
	{
		$this->isMarried = $isMarried;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
}

$person = new Person("John", 30, true, 1000.50);

echo $person->getName() . " is " . $person->getAge() . " years old " . "<br>\n";
