<?php

class Annonce {

    public function __construct(array $data) {
        foreach ($data as $key => $value) {
           $method = 'set'.ucfirst($key);
           if (method_exists($this, $method)) {
              $this->$method($value);
           }
       }
    }

    private $id_advert;
    private $title;
    private $description;
    private $postcode;
    private $city;
    private $price;
    private $reservation_message;
    private $category_id;
    private $created_at;



    public function getId_Advert() { return $this->id_advert; }
    private function setId_Advert(int $id_advert) { $this->id_advert = $id_advert; }

    public function getTitle() { return $this->title; }
    public function setTitle( $title) { $this->title = $title; }

    public function getDescription() { return $this->description; }
    public function setDescription( $description) { $this->description = $description; }
   
    public function getPostcode() { return $this->postcode; }
    public function setPostcode( $postcode) { $this->postcode = $postcode; }
     
    public function getCity() { return $this->city; }
    public function setCity( $city) { $this->city = $city; }

    public function getPrice() { return $this->price; }
    public function setPrice( $price) { $this->price = $price; }
     
    public function getReservation_message() { return $this->reservation_message; }
    public function setReservation_message( $reservation_message) { $this->reservation_message = $reservation_message; }

    public function getCategory_id() { return $this->category_id; }
    private function setCategory_id( $category_id) { $this->category_id = $category_id; }

    public function getCreated_at() { return $this->created_at; }
    public function setCreated_at( $created_at) { $this->created_at = $created_at; }

}