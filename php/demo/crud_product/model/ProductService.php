<?php
// 
namespace Services;

require_once(BASEPATH . "/model/Product.php");

use Model\Product;

class ProductService
{

    public function __construct()
    {
    }
    // láy dữ liệu từ file dâta.json chuyển dữ liệu láy đc thành mảng tạo 1 mảng trống.
    // duyệt mảng chứa dữ liệu ? láy dữ liệu đó thêm vào mảng trống mà mình tạo ra (đã đề cập ở dòng 15 á) 
    public function getAllProducts()
    {
        $jsonString = file_get_contents('./data.json');         // đọc file JSON
        $decodedData = json_decode($jsonString);            // chuyển file JSON thành mảng


        // chuyển mảng thành danh sách đối tượng product
        $products = [];
        foreach ($decodedData as $p) {
            $product = new Product($p->id, $p->name, $p->price);
            $products[] = $product;
        }
        return $products;
    }
    // thêm dữ liều
    public function addProduct(Product $product)
    {
        //láy tất cả product ra tạo 1 mảng trống thêm product vào mảng đó 
        $products = $this->getAllProducts();
        $products[] = $product;         // thêm phần tử vào mảng


        // chuyển đối danh sách Product -> mảng
        $data = [];
        foreach ($products as $product) {
            $data[] = [
                "id" => $product->getId(),
                "name" => $product->getName(),
                "price" => $product->getPrice()
            ];
        }

        $jsonData = json_encode($data, JSON_PRETTY_PRINT);      // chuyên từ mảng -> array
        file_put_contents("./data.json", $jsonData);            // lưu mảng vào file
    }
}
