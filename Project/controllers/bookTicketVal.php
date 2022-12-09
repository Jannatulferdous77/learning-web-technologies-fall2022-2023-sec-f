<?php 
require_once'../models/db.php';

    
    $from = $_POST['from'];
    $to = $_POST['to'];
    $doj = $_POST['doj'];
    $typedText = $_POST['typedText'];
    
   
    if($from == null || $to == null || $doj == null)
    {
        echo "Must be filled all info";

    }
    else if($typedText != null )
    {
        if(isset($_POST['typedText']))
        {    
            $typedText = $_POST['typedText'];
           // echo $typedText;

           // $result = traininfo($searchTrain);
           // $rowNum = traininfoo($searchTrain);

           $con = getConnection();

           $sql= "select * from train where fromStation = '$from' and toStation = '$to' and dateOfJourney = '$doj'";

        
       
            $result = mysqli_query($con, $sql);
            $count= mysqli_num_rows($result);




                if($count >0)
                {
                    echo
                    '<table border="1">
                        <tr>
                            <th>Train Name</th>
                            <th>From Station</th>
                            <th>To Station</th>
                            <th>Date Of Journey</th>
                        </tr>
                        <tr>';
                        while($row=mysqli_fetch_array($result))
                           { echo '<td>'.$row['trainName'].'</td>
                            <td>'.$row['fromStation'].'</td>
                            <td>'.$row['toStation'].'</td>
                            <td>'.$row['dateOfJourney'].'</td>
                        </tr>'; }
                   echo '</table>';
                }
                else
                {
                    echo'Data not found';
                }
            
        }
                
    }

?>