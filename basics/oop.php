<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Object Oriented Programming - Classes</title>
	</head>
	<body>
		<?php
			/* PHP can also be programmed in OOP paradigm. It works more or less
			 * like Java. The difference is that there are no "constructor / method overloading"
			 * in PHP (you can't define multiple constructors / methods in one class).
			 * BUT, you can OVERRIDE A function / method in a inherited class.
			 * Classes can be defined like this:
			 */
			class BookWithoutConstructor {
				/* Attributes are defined like this: */
				/* var means public access modifier,
				 * others are public and private.
				 * public means anything can directly access an object's attribute.
				 * private means nothing but the class itself can directly manipulate
				 * its attributes.
				 */
				var $title;
				var $author;
				var $publicationDate;
				var $pageCount;
				var $genre;
			}

			class Book {
				/* Attributes are defined like this: */
				private $title;
				private $author;
				private $publicationDate;
				private $pageCount;
				private $genre;

				function __construct($title, $author, $publicationDate, $pageCount, $genre) {
					echo("<p>New Book object has been created!</p>");
					$this->title = $title;
					$this->author = $author;
					$this->publicationDate = $publicationDate;
					$this->pageCount = $pageCount;
					$this->genre = $genre;
				}

				/* getters and setters */
				function getTitle() {
					return $this->title;
				}

				function getAuthor() {
					return $this->author;
				}

				function getPublicationDate() {
					return $this->publicationDate;
				}

				function getPageCount() {
					return $this->pageCount;
				}

				function getGenre() {
					return $this->genre;
				}

				function setTitle($title) {
					$this->title = $title;
				}

				function setAuthor($author) {
					$this->author = $author;
				}

				function setPublicationDate($publicationDate) {
					$this->publicationDate = $publicationDate;
				}

				function setPageCount($pageCount) {
					$this->pageCount = $pageCount;
				}

				function setGenre($genre) {
					$this->genre = $genre;
				}
			}

			class Person {
				var $name;
				var $age;
				var $hobby;
				var $nationality;

				function __construct($name, $age, $hobby, $nationality) {
					$this->name = $name;
					$this->age = $age;
					$this->hobby = $hobby;
					$this->nationality = $nationality;
				}

				function walk() {
					echo("<p>$this->name is walking</p>");
				}

				function breathe() {
					echo("<p>$this->name is breathing</p>");
				}

				function speak() {
					echo("<p>$this->name is speaking</p>");
				}
			}

			class Police extends Person {
				var $gun;
				var $position;

				function __construct($name, $age, $hobby, $nationality, $gun, $position) {
					/* The Java `super` keyword equivalent in PHP is `parent::` */
					parent::__construct($name, $age, $hobby, $nationality);

					$this->gun = $gun;
					$this->position = $position;
				}

				/* method overriding */
				function walk() {
					echo("<p>$this->name, a police officer, is walking intently</p>");
				}

				function breathe() {
					echo("<p>$this->name, a police officer, is breathing heavily</p>");
				}

				function speak() {
					echo("<p>$this->name, a police officer, is speaking loudly</p>");
				}

				/* new methods only available to this derived / child class */
				function shoot($person) {
					echo("<p>$this->name, a police officer, shoots their $this->gun towards $person->name</p>");
				}
			}

			/* Object definition and instantiation without constructor usage */
			$book1 = new BookWithoutConstructor(); // you can omit the () if you don't pass anything.
			$book1->title = "The Lord of the Rings: The Fellowship of the Ring";
			$book1->author = "J. R. R. Tolkien";
			$book1->publicationDate = "29 July 1954";
			$book1->pageCount = 423;
			$book1->genre = "Fantasy";

			echo("<p>" . $book1->title . "</p>");
			echo("<p>" . $book1->author . "</p>");
			echo("<p>" . $book1->publicationDate . "</p>");
			echo("<p>" . $book1->pageCount . "</p>");
			echo("<p>" . $book1->genre . "</p>");

			/* Object definition with constructor usage */
			$book2 = new Book("Thinking, Fast and Slow", "Daniel Kahneman", "25 October 2011", 499, "Non-fiction");

			/* Notice how private access modifiers prevent us from directly accessing
			 * the attributes of an object (this will cause ERRORs if uncommented).
			 */
			// echo("<p>" . $book2->title . "</p>");
			// echo("<p>" . $book2->author . "</p>");
			// echo("<p>" . $book2->publicationDate . "</p>");
			// echo("<p>" . $book2->pageCount . "</p>");
			// echo("<p>" . $book2->genre . "</p>");

			/* To get or set a private attribute, we need to use getter and setter
			 * methods
			 */
			echo("<p>" . $book2->getTitle() . "</p>");
			echo("<p>" . $book2->getAuthor() . "</p>");
			echo("<p>" . $book2->getPublicationDate() . "</p>");
			echo("<p>" . $book2->getPageCount() . "</p>");
			echo("<p>" . $book2->getGenre() . "</p>");

			$book2->setTitle("Hello, world!");
			echo("<p>" . $book2->getTitle() . "</p>");

			$jimmy = new Person("Jimmy", 19, "Vandalism", "American");
			$jimmy->walk();
			$jimmy->breathe();
			$jimmy->speak();

			$bob = new Police("Bob", 32, "Law Enforcement", "American", "M4A1", "SWAT");
			$bob->walk();
			$bob->breathe();
			$bob->speak();
			$bob->shoot($jimmy);
		?>
	</body>
</html>
