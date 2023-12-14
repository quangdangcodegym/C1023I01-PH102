<?php

namespace Service;

require_once(BASEPATH . "/model/book.php");

use Model\Book;
use \DateTime;

class BookService
{
    public function getAllBooks()
    {
        $jsonString = file_get_contents('./data.json');         // đọc file JSON
        $decodedData = json_decode($jsonString);

        $books = array();       // tạo 1 danh sách books

        foreach ($decodedData as $item) {
            $book = new Book($item->id, $item->title, $item->author, new DateTime($item->createAt));
            $books[] = $book;
        }

        return $books;
    }
}
