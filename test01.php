<?php
 class Student{
    private $stuName;
    public function getName()
    {
        return $this->stuName;
    }
    public function setName($name)
    {
        $this->stuName=$name;
    }
}

$s1 = new Student();//实例化一个对象
$s1->setName("王五");
printf("学生的姓名是：%1\$s",$s1->getName());

?>
