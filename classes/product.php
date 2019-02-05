<?php

    class Product{
        private $photo, $name, $price, $id;
        public function __construct( $photo, $name, $price, $id = NULL ){
            $this->photo = $photo;
            $this->name = $name;
            $this->price = $price;
            $this->id = $id;
        } 
        public function renderHTML(){
            return 
            " 
                <div class='productCard'>
                    <img src='{$this->photo}' class='productCard-photo'>
                    <p class='productCard-name' id='name'>{$this->name}</p>
                    <div class='productCard-price'>Цена: {$this->formatPrice()}</div>
                    <div class='productCard-buyButton'>перейти к описанию товара</div>
                </div>
            ";
        }
        private function formatPrice(){
            $format_price = $this->price;
            $mod = $this->price % 100;
    
            if ( $mod >= 11 && $mod <=19 ){
                $format_price.= " рублей" ;
            }else {
                $mod = $mod % 10;
    
                if ( $mod >= 2 && $mod <= 4 ){
                    $format_price.= " рубля" ;
                }else if( ($mod >= 5 && $mod <= 9) || $mod == 0 ){
                    $format_price.= " рублей" ;
                }else if( $mod == 1 ){
                    $format_price.= " рубль" ;
                }
            }
     
            return $format_price;
        }
    }