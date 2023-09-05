<?php
function inputFields($type,$name,$placeholder,$value){
    $ele = "
    <div class=\"form-group my-4\">
    <input type='$type' name='$name' placeholder='$placeholder' class=\"form-control\" autocomplete=\"off\">
</div>
    ";
    echo $ele;
}
