<?php

namespace Controller;


require_once(BASEPATH . "/service/bookService.php");


use Service\BookService;

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
    }
}
