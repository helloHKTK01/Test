<?php
  public class Student{
    private $stuName;
    public function setName($name)
    {
      $this->stuName=$name;
    }
    pulic function getName()
    {
      return $this->stuName;
    }
  } 
  
  $stu = new Student();
  stu.s->setName("李四");
  printf("学生的姓名是：%1\$s,$stu->getName()");
  
?>
