<?php 
$calender = "<table><tr><td>Monday></td> <td>Tuesday</td> <td>Wedensday</td> <td>Thursday</td> <td>Friday</td> <td>Saturday</td> <td>Sunday</td></tr>";
$day = 1;
while($day <= 31){
    $calender .= "<tr>";
    for($i = 0; $i < 7; $i++){
        if($day <= 31){
            $calender .= "<td>".$day."</td>";
        }
        $day++;
    }
    $calender .= "</tr>";
}
$calender .= "</table>";
?>

<html>
<body>
	<?php echo $calender?>
</body>
</html>
