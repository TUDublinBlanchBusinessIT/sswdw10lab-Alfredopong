<?php
include("finalStepHeader.html");
session_start();

echo "First Name: " . $_SESSION['passengerFN'] . "<br>";
echo "Surname: " . $_SESSION['passengerSN'] . "<br>";

if ($_SESSION['luggage'] == 1) {
    echo "Bags under 10KG: " . $_SESSION['subTenKG'] . "<br>";
    echo "Bags between 10KG and 20KG: " . $_SESSION['overTenKG'] . "<br>";
}
?>

</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
        
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
    
</form>
