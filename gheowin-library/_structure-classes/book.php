<?php

require_once 'booktype.php';

class Book {
	private int $id;
	private string $title;
	private array::string $misspelling_titles;
	private array::string $authors;
	private array::string $misspelling_authors;
	private string $collection;
	private BookType $type;
	private int $pages;
	private array::string $cover_predominant_colors;
	private bool $at_home_status;
		
	/*Constructors, getters and setters*/
	
	
	/*Registration methods*/
	private function conectToMySQL(string $dbName){
		try {$databaseManager = new PDO("mysql:dbname = ".$dbName."; host=localhost", "root", "");}
		catch (PDOException $e) {echo "Database exception: ".$e->getMessage();}
		catch (Exception $e) {echo "Generic exception: ".$e->getMessage();}
		return $databaseManager;
	}
	
	public function register_book_misspelling_title(string $dbName, string $misspTitle){
		$dbMng = conectToMySQL(string $dbName);
		$bookRegistration = dbMng->prepare("INSERT INTO bookshelf(misspelling_titles) VALUES(:mt)");
		$bookRegistration->bindValue(:mt, $misspTitle);
		$bookRegistration->execute();
	}
	
	public function register_book_title(string $dbName, string $title){
		$dbMng = conectToMySQL(string $dbName);
		$bookRegistration = dbMng->prepare("INSERT INTO bookshelf(title) VALUES(:t)");
		$bookRegistration->bindValue(:t, $title);
		$bookRegistration->execute();
	}
	
	
	
	public function unregister_book(){}
	public function borrow_book(){}
	public function return_book(){}
	public function reserve_book(){}
	public function cancel_reservation(){}
}

?>