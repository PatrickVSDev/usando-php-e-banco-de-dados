<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Status</td>
            <td>#</td>
        </tr>
    </thead>
    <tbody>
        <?php 
            include 'db.php';
            $sql = "SELECT * FROM user";
            $rs = $con->query($sql);
            $row = mysqli_fetch_all($rs, MYSQLI_ASSOC);
            foreach ($row as $key => $value) {
        ?>
        <tr>
            <td><?= $value['name'] ?></td>
            <td><?php echo $value['email']; ?></td>
            <td>
                <?php 
                    if($value['status'] == 0){
                        echo 'BLOQUEADO';
                    } else {
                        echo 'ATIVO';
                    }
                ?>
            </td>
            <td></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    
</body>
</html>