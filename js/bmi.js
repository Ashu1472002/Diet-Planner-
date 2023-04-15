const status = require("statuses");

function Calculate() {
    var height = document.getElementById("h-input").value;
    var weight = document.getElementById("w-input").value;

    var result = parseFloat(weight) / (parseFloat(height) / 100) ** 2;

    if (!isNaN(result)) {
        document.getElementById("bmi-output").innerHTML = result;
        if (result < 18.5) {
            document.getElementById("bmi-status").innerHTML = "Underweight";
        }
        else if (result < 25) {
            document.getElementById("bmi-status").innerHTML = "Healthy";
        }
        else if (result < 30) {
            document.getElementById("bmi-status").innerHTML = "Overweight";
        }
        else {
            document.getElementById("bmi-status").innerHTML = "Obesity";
        }
    }
}
// <?php
//             require("database.php");
//             $diet="";
//             if(isset($_POST['submit'])) {
//                $diet = $_POST['id'];
//             }
            
//             if($diet == 'lose') {
//                 $sql = "SELECT breakfast,mid,lunch,evening,dinner FROM dietloss";

//             }else if($diet=='gain'){
//                 $sql = "SELECT breakfast,mid,lunch,evening,dinner FROM dietgain";

//             }
//              else{
//                 $sql = "SELECT breakfast,mid,lunch,evening,dinner FROM dietplan";

//              }
            
//              $result = mysqli_query($conn, $sql);

//             if($result-> num_rows>0){
//                 while($row = $result-> fetch_assoc()){
//                     echo "<tr><td>".$row["breakfast"]."</td><td>".$row["mid"]."</td><td>".$row["lunch"]."</td><td>".$row["evening"]."</td><td>".$row["dinner"]."</td></tr>";
//                 }
//                 echo "</table>";
//             }
//             else
//             echo "No diet";
//             $conn->close();
// ?>