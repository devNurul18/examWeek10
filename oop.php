<?php
 class Book {

 //TODO: Add properties as Private

      private $title;
      private $availableCopies;
 
   public function __construct($title, $availableCopies) {

// TODO: Initialize properties

     $this ->title = $title;
     $this ->availableCopies = $availableCopies;

     }


// TODO: Add getTitle method

     public function getTitle(){

        return $this ->title;

     }
 

 // TODO: Add getAvailableCopies method
    public function getAvailableCopies(){

    return $this ->availableCopies;
     }

 // TODO: Add borrowBook method
 
     public function borrowBook(){

       if ($this -> availableCopies <=0){

        throw new Exception("Library are empty you can't borrow");

       }
       else{
        $this -> availableCopies --;
       }
       

     }


 // TODO: Add returnBook method

     public function returnBook (){

        $this -> availableCopies ++;

     }

 
}


    class Member {

 // TODO: Add properties as Private

     private $name;

 public function __construct($name) {
      // TODO: Initialize properties

      $this -> name = $name;

     }


 // TODO: Add getName method

      public function getName (){
        return $this -> name;
      }
      
 
 // TODO: Add borrowBook method
 
   public function borrowBook ($book){


    $book -> borrowBook();

   }


 // TODO: Add returnBook method


    public function returnBook ($book){
        $book -> returnBook();
    }
 
}


   $Book1 = new Book ("The Great Gatsby", 5);
   $Book2 = new Book ("To Kill a Mockingbird", 3);


   $Member1 = new Member("John Doe");
   $Member2 = new Member("Jane Smith");


   $Member1 ->borrowBook($Book1);
   $Member2 ->borrowBook($Book2);


   print_r ("Available Copies of '{$Book1 ->getTitle()}': {$Book1 ->getAvailableCopies()} \n");
   print_r ("Available Copies of '{$Book2 ->getTitle()}': {$Book2 ->getAvailableCopies()}");



?>