<?php


namespace App\classes;


class product
{
    public $products=[];
    public function __construct()
    {
        $this->products=[
          [
              'id'=>1,
              'category_id'=>2,
              'brand_id'=>1,
              'name'=>'new book',
              'price'=>550,
              'image'=>'library.png',
              'description'=>'orem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid aperiam, blanditiis, culpa cumque esse et explicabo fuga illo iusto laboriosam modi natus odio qui quia reiciendis suscipit vero?'
          ]  ,
            [
                'id'=>2,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=>'new book',
                'price'=>550,
                'image'=>'library.png',
                'description'=>'orem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid aperiam, blanditiis, culpa cumque esse et explicabo fuga illo iusto laboriosam modi natus odio qui quia reiciendis suscipit vero?'
            ]  ,
            [
                'id'=>3,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=>'new book',
                'price'=>550,
                'image'=>'library.png',
                'description'=>'orem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid aperiam, blanditiis, culpa cumque esse et explicabo fuga illo iusto laboriosam modi natus odio qui quia reiciendis suscipit vero?'
            ]  ,
        ];
    }
    public function allProduct(){
        return $this->products;
    }
}