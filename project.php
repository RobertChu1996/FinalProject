<?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['classes'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['classes'] as $selected){
echo $selected."</br>";
}
}
}
?>