<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Handler</title>
    <style>
        form {
            width: 300px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <h1>Form Example</h1>
    <h2>Sample data</h2>
    <p><a href= "./query_handler.php?name=Sally">Sally</a></p>
    <p><a href= "./query_handler.php?name=Rufus&address1=Glebe%20Cottage&address2=Little%20Wonton&city=Wokingham&county=Berkshire&postcode=RG40%201SW">Rufus</a></p>
    <p><a href= "./query_handler.php?name=Nina&address1=Carnegie%20Lodge&address2=&city=Tain&county=Inverness&postcode=IV19%201JX">Nina</a></p>
    <p><a href= "./query_handler.php?name=Barry&address1=1%20&address2=Rock%20Terrace&city=Pembroke&county=Pembrokshire&postcode=SA71%204DU">Barry</a></p>
    <p><a href= "./query_handler.php?name=Shelia&address1=84&address2=Rubens%20Cct&city=Baldivis&county=Western%20Austrailia&postcode=WA%206171">Shelia</a></p>
    
    <form action = "" method = "get"> <!--Change this between post and get to alter the result of the get post logic below -->
        <label for="name"> Enter your name:</label>
        <input type="text" name="name" id="name" value="Ronald">
        <label for="address1"> Address line 1:</label>
        <input type="text" name="address1" id="address1" value="">
        <label for="address2"> Address line 2:</label>
        <input type="text" name="address2" id="adddress2" value="">
        <label for="city"> City:</label>
        <input type="text" name="city" id="city" value="">
        <label for="county"> County:</label>
        <input type="text" name="county" id="county" value="">
        <label for="postcode"> Postcode:</label>
        <input type="text" name="postcode" id="postcode" value="">
        <input type="submit" value="Submit"/>
    </form>
    
    <?php
    //check if the 'name' parameter is present in the URL using $_GET
	if (isset($_GET['name']) && trim(htmlspecialchars($_GET['name']) !== "")){
    // retrieve the value of the 'NAME' parameter using $_GET
        $name = trim(htmlspecialchars($_GET['name']));
        //display the submitted name
        echo "<p> Hello, $name! Thank you for submitting this information.</p>";
    } else {
        echo "<p>No name set<p>";
    }

    //the same logic applies to each of these sections
    if (isset($_GET['address1']) && trim(htmlspecialchars($_GET['address1'])) !== ""){
        $address1 = trim(htmlspecialchars($_GET['address1']));
        echo "<p>Address line 1: $address1</p>";
    } else {
        echo "<p>Address 1 not set<br>";
    }

    if (isset($_GET['address2']) && trim(htmlspecialchars($_GET['address2'])) !== ""){
        $address2 = trim(htmlspecialchars($_GET['address2']));
        echo "<p>Address line 2: $address2</p>";
    } else {
        echo "<p>Address 2 not set<br>";
    }

    if (isset($_GET['city']) && trim(htmlspecialchars($_GET['city'])) !== ""){
        $city = trim(htmlspecialchars($_GET['city']));
        echo "<p>City: $city</p>";
    } else {
        echo "<p>City not set<br>";
    }

    if (isset($_GET['county']) && trim(htmlspecialchars($_GET['county'])) !== ""){
        $county =trim(htmlspecialchars($_GET['county']));
        echo "<p>County: $county</p>";
    } else {
        echo "<p>County not set<br>";
    }

    if (isset($_GET['postcode']) && trim(htmlspecialchars($_GET['postcode'])) !== ""){
        $postcode = trim(htmlspecialchars($_GET['postcode']));
        echo "<p>Post Code: $postcode</p>";
    } else {
        echo "<p>Post Code is not set<br>";
    }
    
   
    ?>
</body>
</html>