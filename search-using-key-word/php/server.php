<?php
include './dbcon.php';
if (isset($_POST['st'])) {
    $sql = "SELECT * FROM `search-using-key-word` WHERE `name` LIKE '%" . clear($_POST['search']) . "%'";
} else if (isset($_POST['first'])) {
    $sql = "SELECT * FROM `search-using-key-word`";
}
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    $output = '<tbody>';
    $id = 0;
    while ($dis = mysqli_fetch_assoc($res)) {
        $id = $id + 1;
        $output .= '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . clear($dis['name']) . '</td>
                            <td>' . clear($dis['price']) . '</td>
                            <td>' . clear($dis['stock']) . '</td>
                        </tr>';
    }
    $output .= "</tbody>";
    echo $output;
} else {
    echo 'No data found';
}
