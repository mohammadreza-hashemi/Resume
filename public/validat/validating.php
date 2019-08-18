<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
    if (strlen($value) < 4) {
    echo '
    <span style="color:red">invalid</span>
           ';
} else {
echo "<span>Valid</span>";
}
}

if($formfield=="phone"){
    if (preg_match('/^[0][9][0-9]{9}+$/', $value)){
        echo '<span style="color:green">valid</span>';
    } else {
        echo '<span style="color:red">invalid</span>';    
    }
}





?>
