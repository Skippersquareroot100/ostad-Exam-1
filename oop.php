<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAvailableCopies(): int {
        return $this->availableCopies;
    }

    public function borrowBook(): bool {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    public function returnBook(): bool {
        $this->availableCopies++;
        return true;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function borrowBook(Book $book): bool {
        if ($book->borrowBook()) {
            return true;
        } else {
            return false;
        }
    }

    public function returnBook(Book $book): bool {
        if ($book->returnBook()) {
            return true;
        } else {
            return false;
        }
    }
}

// Create books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";
?>
