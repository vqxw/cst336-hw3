<?php
    if (!isset($_POST['keyword'])) {
        $tag = $_POST['keyword'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $telnum = $_POST['telnum'];
        $gender = $_POST['gender'];
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title> Flight Information </title>
        <link href ="css/styles.css" rel =" stylesheet" type = "text/css"/>
        
        <style>
            @import url("./css/styles.css");
        </style>
    </head>
    
    <body>
        <h1> Congrats! You won a <u>free</u> flight to any of the cities listed below </h1>
        <br/>
        <div class = "underH1">
            <p> Just fill in your information and your flight will be set! </p>
        </div>
        
        <br><br>
        
        <!-- getting the person's name -->
        <form id = "userInput" method = "POST">
            <label for = "fname"> First Name *</label>
            <input type = "text" id = "fname" name = "firstname" value = "<?=$_POST['firstname']?>"/>
    
            <label for = "lname"> Last Name *</label>
            <input type = "text" id = "lname" name = "lastname" value = "<?=$_POST['lastname']?>"/>
            
            <!-- and their gender -->
            <label for = "female"> Gender *</label>
            <input type="radio" name="gender" value="female" value = "<?=$_POST['gender']?>"/> Female
            <input type="radio" name="gender" value="male" value = "<?=$_POST['gender']?>"/> Male
            <br></br>
        
        <!-- getting their dob -->
            <label for = "date"> Date of Birth *</label>
            <input type = date type = "text" name = "dob" value = "<?=$_POST['dob']?>"/>

            <!-- and phone # -->
            <label for = "telephone"> Phone Number (no special characters)*</label>
            <input type = "tel" name = "telnum" value = "<?=$_POST['telnum']?>"/>>

            <br></br>
        
        <!-- getting departure date and city -->
            <label for = "date"> Date of Departure *</label>
            <input type = date name = "leave" value = "<?=$_POST['leave']?>"/>>

            <!-- city options-->
            <label for = "cities"> Choose a city *</label>
            <select id = "cities" name = "cities">
            <optgroup label = "Asia">
              <option value = "Tokyo"> Tokyo </option>
              <option value = "Delhi"> Delhi </option>
              <option value = "Beijing"> Beijing </option>
            </optgroup>
            <optgroup label = "Europe">
              <option value = "Barcelona"> Barcelona </option>
              <option value = "Rome"> Rome </option>
              <option value = "Amsterdam"> Amsterdam </option>
            </optgroup>
            <optgroup label="North America">
              <option value = "Los Angeles"> Los Angeles </option>
              <option value = "New York City"> New York City </option>
              <option value = "San Francisco"> San Francisco </option>
            </optgroup>
            </select>
            <br></br>
            
            <input type = "submit" name = "submit" value = "Submit Information">
        </form>
        
        <footer>
            By clicking "Submit Information" you agree to the <a href="https://www.generator.lorem-ipsum.info/terms-and-conditions"> Terms and Conditions</a>
        </footer>
        
        <?php
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $telnum = $_POST['telnum'];
            $gender = $_POST['gender'];
            $leave = $_POST['leave'];
            $cities = $_POST['cities'];
            $confNum = array ("3RJi4Q", "xt8T05", "72vagN", "yzwQWd", "HZ4ajd");
            $planeType = array ("Boeing 737-900", "Boeing 737-800", "Airbus 319 (319)", "Boeing 777-200 (777)");
            $groupNum = array ("1A", "1B", "1C", "2A", "2B", "2C", "3A", "3B", "3C");

            echo "<div class = 'noutput'>";
            if(empty($firstname) || empty($lastname) || empty($dob) || empty($telnum) || empty($gender) || empty($leave) || empty($cities)) {
               echo "<br>Please fill out the required fields";
            }
            
            else if(!preg_match('/^[a-zA-z]+$/i', $firstname) || !preg_match('/^[a-zA-z]+$/i', $lastname)) {
                echo "<br>Please correct your 'First' or 'Last Name' input";
            }
            
            else if(!preg_match('/^[0-9]+$/i', $telnum)) {
                echo "<br>Please correct your telephone number";
            }
            
            else {
                echo "<br>============ Confirmation ============";
                echo "<br>Name: ", $firstname, " ", $lastname;
                echo "<br>Date of Birth: ", $dob, "<br>Telephone Number: ", $telnum, "<br>Gender: ", $gender;
                echo "<br>Departure Date: ", $leave, "<br>City Chosen: ", $cities;
                
                echo "<br>Confirmation Number: ";
                echo $confNum[array_rand($confNum)];

                echo "<br>Aircraft: ";
                echo $planeType[array_rand($planeType)];
                
                echo "<br>Group Number: ";
                echo $groupNum[array_rand($groupNum)];
                
                echo "<div class = 'message'>";
                echo "<br><br>Make sure to keep this information for your records";
                echo "</div>";
            }
            echo "</div>";
        ?>
        
    </body>
</html>