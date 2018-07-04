<?php
    include "config.php";

    $sql = "SELECT idc, cname, numcar, cdriver FROM car";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "รหัสยานพาหนะ: " . $row["idc"]. " - ชื่อยานพาหนะ: " . $row["cname"]. "- เลขทะเบียนยานพาหนะ " . $row["numcar"]. "- พนักงานขับรถประจำ: " . $row["cdriver"]. "<br>";
    }
} else {
    echo "ไม่มีข้อมูล";
}
//$conn->close();
?>
<html>
    <head>
        <title>รายการยานพาหนะทั้งหมด</title>
    </head>
    <body>
        <h2>รายการยานพาหนะ</h2>
        <table>
            <th>
                <td>รหัสยานพาหนะ</td>
                <td>ชื่อยานพาหนะ</td>
                <td>เลขทะเบียนยานพาหนะ</td>
                <td>พนักงานขับรถประจำ</td>
            </th>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["idc"]; ?></td>
                <td><?php echo $row["cname"]; ?></td>
                <td><?php echo $row["numcar"]; ?></td>
                <td><?php echo $row["cdriver"]; ?></td>
            </tr>
            <?php }; ?>
        </table>
        <?php $conn->close(); ?>
    </body>
</html>