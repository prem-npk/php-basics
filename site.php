<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!--   Using Checkbox
    <form action="site.php" method="post">
    Apples:<input type="checkbox" name="fruits[]" value="apples"> <br>   
    Oranges:<input type="checkbox" name="fruits[]" value="orange">  <br>  
    Banana:<input type="checkbox" name="fruits[]" value="banana">  <br>  
    Kiwi:<input type="checkbox" name="fruits[]" value="kiwi">    <br>
    <input type="submit">
    </form> -->

    <!--     Associative Array
    <form action="site.php" method="post">
    <input type="text" name=student > <br>   
    <input type="submit">
    </form>-->

    <!--  Building a Better Calculator  
    <form action="site.php" method="post">
        First Number:<input type="number" step="0.0001" name="num1"><br>
        OP:<input type="text" name="op"> <br>
        Second Number:<input type="number" name="num2"><br>
        <input type="submit">
    </form>-->

    <!--    Switch statements
    <form action="site.php" method="post">
    What was your grade?    
    <input type="text" name="grade">
    <input type="submit">
    </form>-->

    <?php 
    // include "header.html"
    //  Using Checkbox
    /*$fruits=$_POST["fruits"];
    echo $fruits[1];*/

    //Associative Array we access using keys
    /*$grades=array("surya"=>"A+","raju"=>"O","arun"=>"A");
    $grades["raju"]="B";
    echo $grades["surya"];*/
    
    /*$grades=array("surya"=>"A+","raju"=>"O","arun"=>"A");
    echo $grades[$_POST['student']];*/

    //Function
    /*function sayHi(){
        echo("Hello Pk <br>");
    }
    sayHi();    

    function takeParameter($name,$age){
        echo "Hello $name, you are $age<br>";
    }
    takeParameter("kannan",40);
    takeParameter("Abishek",21);
    takeParameter("Devi",43);*/

    //Return statements
    /*function cube($num){
        return $num*$num*$num ;
    }
    $cubeResult=cube(4);
    echo $cubeResult;   
    echo cube(5);*/

    //If statements
    /*$isMale=false;
    if($isMale){
        echo"Your are Male";
    }else{
        echo "You are not male";
    }*/

    //If statements(con't)
    /*function getMax($num1,$num2,$num3){
        if($num1>$num2 && $num1>=$num3){
            return $num1;
        }elseif($num2>$num1 && $num2>=$num3){
            return $num2;
        }else{
            return $num3;
        }
    }
    echo getMax(98,5,24)*/

    //Building a Better Calculator
    /*$num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $op=$_POST["op"];
    if($op=="+"){
        echo $num1+$num2;
    }elseif($op=="-"){
        echo $num1-$num2;
    }elseif($op=="/"){
        echo $num1/$num2;
    }
    elseif($op=="*"){
        echo $num1*$num2;
    }else{
        echo "Invalid Operator";
    }*/

    //Switch statements
    /*$grade=$_POST["grade"];    
    switch($grade){
        case "O":
            echo "You did amazing!";
            break;
        case "A+":
            echo "You did pretty good";
            break;
        case "A":
            echo "You did well";
            break;
        case "B":
            echo "You did poorly";
            break;
        case "F":
            echo "You fail";
        default:
            echo "Invalid Grade";
    }*/

    //while loop
    /*$index=1;
    while($index<=5){
        echo "$index <br>";
        $index++;
    }*/

    //For loops 
    /*for($i=1;$i<=5;$i++){
        echo "$i <br>";
    }
    $lucky=array(4,6,8,10,12,14);
    for($i=0;$i<=count($lucky);$i++){
    echo "$lucky[$i]<br>";
    }

    ?>
    <?php 
    $title="My first post";
    $author="prem";
    $wordcount=98;
    include "article-header.php "
    ?>

    <?php include "footer.html"?> */

    //Class
    /*class Book {
        var $title;
        var $author;
        var $pages;
        function __construct($aTitle,$aAuthor,$aPages){
            $this->title=$aTitle;
            $this->author=$aAuthor;
            $this->pages=$aPages;
        }
    }
    $book1=new Book("Harry Potter","JK Rowling",220);

    $book2=new Book("Lord of Rings","Tolkien",520);
   
    echo $book2->author;*/

    //Object Function
    /*class Student{
        var $name;
        var $major;
        var $gpa;
        function __construct($name,$major,$gpa){
            $this->name=$name;
            $this->major=$major;
            $this->gpa=$gpa;
        }
        function hasHonors(){
            if($this->gpa>=9){
                return "true";
            }
            return "false";
        }        
    }
    $student1=new Student("Surya","Testing",9.6);
    $student2=new Student("Saravana","Development",9.8);
    echo $student1->hasHonors();*/

    //Getters and Setters
    /*class Movie{
        public $title;
        private $rating;
        function __construct($title,$rating){
            $this->title=$title;
            $this->setRating($rating);
        }
        function getRating(){
            return $this->rating;
        }
        function setRating($rating){
            if($rating=="G" || $rating=="PG" ||$rating=="PG-13"){
                $this->rating=$rating;
            }else{
                $this->rating="NR";
            }
        }
    }
    $avengers=new Movie("Avengers","PG-12");
    $avengers->setRating(10);
    echo $avengers->getRating();*/

    //Inheritance
    class Chef {
        function makeChicken(){
            echo "The chef makes chicken <br>";
        }
        function makeSalad(){
            echo "The chef makes salad <br>";
        }
        function makesSpecialDish(){
            echo "The chef makes bbq ribs <br>";
        }
    } 
    class ItalianChef extends Chef{
        function makePasta(){
            echo "The chef makes pasta";
        }
        function makesSpecialDish(){
            echo "The chef makes chicken parm <br>";
        }
    }
    
    $chef=new Chef();
    $chef->makeChicken();

    $chef1=new ItalianChef();
    $chef1->makeChicken();

    $chef2=new ItalianChef();
    $chef2->makesSpecialDish();
    ?>      
</body>
</html> 