<?php
class Animal{
    function run(){
        echo "running..<br>";
    }
    function breath(){
        echo "breahting..<br>";
    }
}
class Human extends Animal{
    function think(){
        echo "thinking..<br>";
    }
    function talk(){
        echo "taking..<br>";
    }
}

$ani = new Animal();
$ani ->run();
$ani = new Human();
$ani ->run();

class Character extends Human{
private  $name ; 
private  $level = 0;
private  $count = 0;
    //생성자
public function __construct($name, $level){
    $this->name = $name;
    $this->level = $level;
    $this->$count++;
}

//소멸자
public function __destruct(){
    echo $this->name."님 안녕히 가세요<br>";
}

public function introduce(){
        echo "안녕하세요 저는" . $this->name. "입니다.<br>";
    }
    public function getname(){
        return $this->name;
    }
    public function getlevel(){
        return $this->level;
    }
    public function setlevel($level){
        $this->level = $level;
    }
    public function levelup(){
        $this ->level++;
    }
    public function getcount(){
        return $this->count;
    }
    public function enter(){
        echo $this->name."입장: ".$this->count()." 번쨰로 입장";
    }
}
    

$ch1 = new Character("홍길동", 1);  //객체생성
$ch1->enter();
$ch2 = new Character("김길동", 2);  //객체생성
$ch2->introduce();
$ch2->levelup();
//$ch1->name = "김민준";
echo $ch1 -> getname()."은 레벨" .$ch1->getlevel()."입니다.";
echo $ch2 -> getname()."은 레벨" .$ch2->getlevel()."입니다.";
$ch1->run();
$ch2->think();

?>
