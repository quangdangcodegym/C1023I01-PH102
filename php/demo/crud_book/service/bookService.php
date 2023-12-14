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
    public function saveBook(Book $book)
    {
        $books = $this->getAllBooks();
        $books[] = $book;



        foreach ($books as $b) {
            $data[] = [
                "id" => $b->getId(),
                "title" => $b->getTitle(),
                "author" => $b->getAuthor(),
                "createAt" => $b->getCreateAt()->format('Y-m-d'),
            ];
        }

        $jsonData = json_encode($data, JSON_UNESCAPED_UNICODE);      // chuyên từ mảng -> array
        file_put_contents("./data.json", $jsonData);
    }
}
