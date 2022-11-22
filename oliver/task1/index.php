<?php
session_start();
require_once 'components/db_connect.php';


$user_email="email";
$user_picture ="picture";
$user_name="user_name";
$tbody="<h1><body/h1>";
$senior_button_ref=$senior_button="senior button";





/* #this variable will hold the body for the table
$tbody = '';
if (1) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $tbody .= "<tr>
            <td><img class='img-thumbnail rounded-circle' src='../pictures/" . $row['picture'] . "' alt=" . $row['name'] . "></td>
            <td>" . $row['name'] ." </td>
            <td>" . $row['breed'] . "</td>
            
            <td>" . $row['age'] . "</td>
            <td>" . $row['vaccinated'] . "</td>
            <td><a href='details.php?id=" . $row['animal_id'] . "'><button class='btn btn-primary btn-sm' type='button'>details</button></a>
            
         </tr>";
    }
} else {
    $tbody = "<tr><td colspan='7'><center>No Data Available </center></td></tr>";
} */

#mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jokes-home</title>
    <?php require_once 'components/boot.php' ?>
</head>

<body>


<?php require "components/navbar.php"; ?>
    <div
        class="content shadow-lg p-3 my-5 text-white rounded w-25
        text-center mx-auto">
    </div>

    <div class="container">
        <div class="row">
     
            
            
    <?php require "components/footer.php"; ?>

    <script>
   
      function weather(cityName) {
       
        const xml = new XMLHttpRequest();
        xml.open("GET", "http://api.serri.codefactory.live/random/");
        xml.onload = function (){
            const joke = JSON.parse(xml.responseText);
            //JSON.parse
            console.log(joke);
            console.log(typeof joke);
            
            const content = document.getElementsByClassName('content')[0];
            content.innerHTML = `
               <p class="status fs-2">${joke.joke}</p>                
              `

        }
        xml.send();
      }
      weather("Vienna");
    </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

</body>
</html>