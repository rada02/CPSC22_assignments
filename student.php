<?php
class Student {
	private $first_name;
	private $last_Name;
	private $ID;
	private $courses;


  
	public function __construct($first_name, $last_Name, $ID, $courses) {
	
    $this->setFirstName($first_name);
    
    $this->setLastName($last_Name);
    
	  $this->setStudentID($ID);
    
		$this->setCourses($courses);
	
  }

	public function setFirstName($first_name) {
	
    $this->firstName = $first_name;
	
  }
	public function getFirstName() {
	
    return $this->firstName;
	
  }


	public function setLastName($last_Name) {
  
    $this->lastName = $last_Name;
    
  }
  
  public function getLastName() {
 
    return $this->lastName;
	
  }


	public function setStudentID($ID) {
  
    $this->studentID = $ID;
    
  }
  
  public function getStudentID() {
  
    return $this->studentID;
	}
  


 
  public function setCourses($courses) {
  
    $this->courses = $courses;
   
  }
  
  public function getCourses() {
  
    return $this->courses;
   
  }

}


?>
