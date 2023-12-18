<?php
class school{
    public $teacher;
    public $student;
    function __construct($teacher, $student){
        $this->teacher = $teacher;
        $this->student = $student;
    }
    function displayinfo(){
        echo"Teacher: {$this->teacher}, Students:{$this->student}";
    }
}
class Course extends school {
    public $course_details;

    function __construct($teacher, $student, $course_details){
        parent::__construct($teacher, $student);
        $this->course_details = $course_details;
    }
    function displaystudentsinfo(){
        echo "Teacher: {$this->teacher}, Students:{$this->student}, Course: {$this->course_details}";
    }
}
$studentinfo = new Course("Sumitha","Arun","Cybersecurity");
$studentinfo->displayinfo();
$studentinfo->displaystudentsinfo();
?>