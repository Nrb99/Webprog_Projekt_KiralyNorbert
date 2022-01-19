<?php



namespace Bookstore\Domain;

abstract class Customer extends Person {
	private $id;
	private $email;
	private static $lastId = 0;
	// Constructor
	public function __construct(

		string $firstname,
		string $surname,
		string $email
		){
		parent::__construct($firstname, $surname);

		$this->email = $email;
	}
	// Abstract Methods to enforce in children
	abstract public function getMonthlyFee();
	abstract public function getAmountToBorrow();
	abstract public function getType();
	// Static Public Methods
	public static function getLastId():int {
		return self::$lastId;
	}
	// Public Methods
	public function getId():int {
		return $this->id;
	}
	public function getEmail():string {
		return $this->email;
	}
	public function setEmail(string $email){
		$this->email = $email;
	}
}