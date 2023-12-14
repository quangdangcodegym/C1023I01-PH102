<?php

namespace Controller;


require_once(BASEPATH . "/service/bookService.php");
require_once(BASEPATH . "/model/book.php");

use Service\BookService;
use Model\Book;
use \DateTime;

class BookController
{
    private $bookService;

    public function __construct()
    {
        $this->bookService = new BookService();
    }
    // Hiển thị ra danh sách các book
    public function showBooks()
    {
        $books = $this->bookService->getAllBooks();

        include(BASEPATH . "/view/list.php");
    }

    // Show ra trang thêm sách
    public function showAddBook()
    {
        include(BASEPATH . "/view/add.php");
    }
    public function saveBook()
    {
        $book = new Book(100, $_POST['title'], $_POST['author'], new DateTime($_POST['create']));


        $this->bookService->saveBook($book);
    }
}
