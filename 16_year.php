<?php

$conn = new mysqli('localhost','root','','quetest');

if(isset($_POST['year'],$_POST['grade']))
{
    $year = $_POST['year'];
    $grade = $_POST['grade'];

    $sql = "select * from student where passingYear='$year' and classGrades='$grade'";
    $res = $conn->query($sql);

    echo "
    <table border=2> <tr> 
                        <th>Roll No</th>
                        <th>Name </th>
                        <th>Department </th>
                        <th>Year </th>
                        <th>Grade </th>
                     </tr>
    ";

    while($row = $res->fetch_assoc())
    {
        echo "
            <tr>
                <td>{$row['rollNo']}</td>
                <td>{$row['studName']}</td>
                <td>{$row['studDept']}</td>
                <td>{$row['passingYear']}</td>
                <td>{$row['classGrades']}</td>
            </tr>
        ";
    }

    echo "</table>";
}


?>


<form method= 'post'>

<br>

<select name='year'>

    <option values=2014>2014</option>
    <option values=2015>2015</option>
    <option values=2016>2016</option>

</select>

<br>

<input  type='radio' name='grade' value='First Class'> First Class </input> <br>
<input  type='radio' name='grade' value='Second Class'> Second Class </input> <br>
<input  type='radio' name='grade' value='Pass'> Pass </input> <br>


<br><br>

<button type='submit'> Submit </button>



</form>