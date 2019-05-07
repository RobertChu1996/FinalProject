<!DOCTYPE html>
<html lang="en">
    
<head>
    
	<meta charset="utf-8">
    <title>Class Registration</title>
    <link rel= "stylesheet" href= "suggestion.css">
    <script src="project.js"></script>
    
</head>
    
<body>
	
    <header>
        <h1>Class Registration</h1>
        <h2>Est 2019</h2>
    </header>

</body>
    
<nav>
    <ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="classeslist.html">CS Class List</a></li>
    <li><a class="active" href="suggestion.php">Suggestions</a></li>
  <li id="contact">
      <a href="contactus.html">Contact Us!</a></li> 
</ul>
</nav>
    <hr>
    
<main>

   
 
<h1>Suggestions for your next semester!</h1>
<fieldset>
<p id="field">If the classes you took but the grade is lower than C, it doesn't count in the system. Because for the CS major you need to get C or higher!</p>
</fieldset>

<h2>The classes you took! </h2>
<?php
    
    if(isset($_POST['submit'])){
if(!empty($_POST['classes'])) {

// Loop to store and display values of individual checked checkbox.
foreach($_POST['classes'] as $selected) {
    
echo "<p>".$selected."</p>";
} 

}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>
    

    
    <h2>What CS classes you can take next semester!</h2>
    
    
<?php
   
    $A = '101 Exploring Creative Computing';
    $B = '116 Web Technology I';
    $C = '234 Algorithms and Problem Solving I';
    $D = '250 Algorithms and Problem Solving II';
    $E = '275 Mathematical Foundations of Algorithms';
    $F = '313 Networking and Telecommunications';
    $G = '341 Data Structures';
    $H = '344 Introduction to Web Programming';
    $I = '345 Mobile Application Development';
    $J = '375 Computer Systems';
    $K = '385 Applied Database Management Systems';
    $L = '405 Operating Systems';
    $M = '410 Software Engineering';
    $O = '435 Theory of Computation';
    $P = '440 Theories of Algorithms';
    $Q = '447 Machine Learning';
    $R = '485 Database Systems Design';
    if (!isChecked ('classes','101 Exploring Creative Computing')){
        echo "<p>".$A."</p>";
    }
    
    if (!isChecked ('classes','116 Web Technology I')){
        echo "<p>".$B."</p>";
    }
    
    if (!isChecked ('classes','234 Algorithms and Problem Solving I')){
        echo "<p>".$C."</p>";
    }
    
     if (isChecked ('classes','234 Algorithms and Problem Solving I')&&isChecked ('classes','275 Mathematical Foundations of Algorithms')){
        echo "<p>".$D."</p>";
    }
    
    if (isChecked ('classes','234 Algorithms and Problem Solving I')&& !isChecked ('classes','275 Mathematical Foundations of Algorithms')&& !isChecked ('classes','250 Algorithms and Problem Solving II')){
        echo "<p>".$D."</p>";
        echo "<p>".$E."</p>";
    }
    
    if (isChecked ('classes','250 Algorithms and Problem Solving II')&& !isChecked ('classes','313  Networking and Telecommunications')){
        echo "<p>".$F."</p>";
    }
    
    if (isChecked ('classes','250 Algorithms and Problem Solving II')&& isChecked ('classes','275 Mathematical Foundations of Algorithms')&& !isChecked ('classes','341 Data Structures')){
        echo "<p>".$G."</p>";
    }
    if (isChecked ('classes','250 Algorithms and Problem Solving II')&& !isChecked ('classes','344 Introduction to Web Programming')){
        echo "<p>".$H."</p>";
    }
    if (isChecked ('classes','250 Algorithms and Problem Solving II')&& !isChecked ('classes','345 Mobile Application Development')){
        echo "<p>".$I."</p>";
    }
    if (isChecked ('classes','250 Algorithms and Problem Solving II')&& !isChecked ('classes','375 Computer Systems')){
        echo "<p>".$J."</p>";
    }
    if (isChecked ('classes','250 Algorithms and Problem Solving II')&& !isChecked ('classes','385 Applied Database Management Systems')){
        echo "<p>".$K."</p>";
    }
    if (isChecked ('classes','375 Computer Systems')&& isChecked ('classes','341 Data Structures')&& !isChecked ('classes','405 Operating Systems')){
        echo "<p>".$L."</p>";
    }
    if (isChecked ('classes','313  Networking and Telecommunications')&& isChecked ('classes','341 Data Structures')&& isChecked ('classes','385 Applied Database Management Systems')&& !isChecked ('classes','410 Software Engineering')){
        echo "<p>".$M."</p>";
    }
    if ( isChecked ('classes','341 Data Structures')&& !isChecked ('classes','435 Theory of Computation')){
        echo "<p>".$O."</p>";
    }
    if ( isChecked ('classes','341 Data Structures')&& !isChecked ('classes','440 Theories of Algorithms')){
        echo "<p>".$P."</p>";
    }
    if ( isChecked ('classes','341 Data Structures')&& !isChecked ('classes','447 Machine Learning')){
        echo "<p>".$Q."</p>";
    }
    if (isChecked ('classes','385 Applied Database Management Systems')&& isChecked ('classes','341 Data Structures')&& !isChecked ('classes','485 Database Systems Design')){
        echo "<p>".$R."</p>";
    }
    function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
    
?>
</main>

    <hr>
<footer>
 &copy; Made by <em>YU KUANG CHU, LIBAN SALAD, KEVIN HER, CHUEMENG LEE 2019</em>
</footer>
</html>