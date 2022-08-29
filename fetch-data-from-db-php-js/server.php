<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (isset($_POST['sub_dis'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $add = $_POST['add'];

    $res = mysqli_query($conn, "INSERT INTO `user`(`fname`, `lname`, `email`, `mobile`, `class`, `add`) VALUES ('$fname','$lname','$email','$mobile','$class','$add')");
    if ($res) {
        echo 'Success';
    } else {
        echo 'Failed';
    }
}
if (isset($_POST['load_data'])) {
    $res = mysqli_query($conn, "SELECT * FROM `user` WHERE 1");
    $output = "<tbody>";
    if (mysqli_num_rows($res) > 0) {
        $id = 0;
        while ($dis =  mysqli_fetch_assoc($res)) {
            $id = $id + 1;
            $fname = $dis["fname"];
            $lname = $dis["lname"];
            $mobile = $dis["mobile"];
            $email = $dis["email"];
            $class = $dis["class"];
            $add = $dis["add"];
            $output .= '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $fname . '</td>
                            <td>' . $lname . '</td>
                            <td>' . $email . '</td>
                            <td>' . $mobile . '</td>
                            <td>' . $class . '</td>
                            <td>' . $add . '</td>
                        </tr>';
        }
        $output .= "</tbody>";
        echo $output;
    }
} else {
    echo 'No data Found';
}
