<?php


Class modelCalendar {
	
	public $conn;
	
	function __construct(){	
	
		$this->conn = new mysqli("localhost", "root", "", "test");	
		
	}
	
	function insertBook ($title, $author, $desc, $price){
		
		
		$sql = "INSERT INTO book (title, author, description, price)
        VALUES ('$title', '$author', '$desc', '$price')"; 
		
			
		if ($this->conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: record couldn’t be inserted";
		}
		$this->conn->close(); // close DB connection		
		
	}
	
	function viewBookInfo(){
		
			$sql = "SELECT * FROM book order by ID desc";
	
			$result = $this->conn->query($sql);


			if ($result->num_rows > 0) {
			// output data of each row
			
			 $allRows =  array();
			  while($row = $result->fetch_assoc()) {
				  
				  $allRows [] = $row;
				
				}				
				include "View/allBooksView.php";
				new viewBooks($allRows);
				
			} else {
				echo "0 results found";
			}
		}
	
	
}


?>