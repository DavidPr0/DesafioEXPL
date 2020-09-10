<?php

?>
<!DOCTYPE html>
<html>
<head>
    <style>
    table, th, td {
        border: 1px solid gray;
        padding: 2px;
    }
    </style>
</head>
<body>
    <a href="/explicae">Voltar</a>
    <table>
        <?php foreach ($api['results'] as $k1 => $val) { ?>
            <tr>
                <th>
                    Genero
                </th>
                <th>
                    <?php echo $val['gender']; ?>
                </th>
            </tr>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    <?php echo $val['name']['title'] . ' ' . $val['name']['first'] . ' ' . $val['name']['last']; ?>
                </th>
            </tr>
            <tr>
                <th>
                    Location
                </th>
                <th>
                    <?php echo 'Street: ' . $val['location']['street']['name'] .
                                ' Number: ' . $val['location']['street']['number']  .
                                ' City: ' . $val['location']['city'] .
                                ' State: ' . $val['location']['state'] .
                                ' Country: ' . $val['location']['country'] .
                                ' Postcode: ' . $val['location']['postcode'] .
                                ' Coordinates-latitude: ' . $val['location']['coordinates']['latitude'] .
                                ' Coordinates-longitude: ' . $val['location']['coordinates']['longitude'] .
                                ' Timezone-Offset: ' . $val['location']['timezone']['offset'] .
                                ' Timezone-description: ' . $val['location']['timezone']['description']; ?>
                </th>
            </tr>
            <tr>
                <th>
                    E-mail
                </th>
                <th>
                    <?php echo $val['email']; ?>
                </th>
            </tr>
            <tr>
                <th>
                    Login
                </th>
                <th>
                    <?php foreach ($val['login'] as $kin => $login) { ?>
                            <?php echo $kin . ': ' . $login . ' <br> ';?>
                   <?php } ?>
                </th>
            </tr>
            <tr>
                <th>
                    Dod
                </th>
                <th>
                    <?php foreach ($val['dob'] as $do => $dob) { ?>
                            <?php echo $do . ': ' . $dob . ' <br> ';?>
                   <?php } ?>
                </th>
            </tr>
            <tr>
                <th>
                    Registered
                </th>
                <th>
                    <?php foreach ($val['registered'] as $r => $re) { ?>
                            <?php echo $r . ': ' . $re . ' <br> ';?>
                   <?php } ?>
                </th>
            </tr>
            <tr>
                <th>
                    Phone
                </th>
                <th>
                    <?php echo $val['phone']; ?>
                </th>
            </tr>
            <tr>
                <th>
                    Cell
                </th>
                <th>
                    <?php echo $val['cell']; ?>
                </th>
            </tr>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    <?php foreach ($val['id'] as $idn => $id) { ?>
                            <?php echo $idn . ': ' . $id . ' <br> ';?>
                   <?php } ?>
                </th>
            </tr>
            <tr>
                <th>
                    Nat
                </th>
                <th>
                    <?php echo $val['nat']; ?>
                </th>
            </tr>
            <tr>
                <th>
                    Picture
                </th>
                <th>
                    <img src="<?php echo $val['picture']['medium']; ?>" />
                </th>
            </tr>
        <?php } ?>
        <?php foreach ($api['info'] as $k2 => $val) { ?>
            <tr>
                <th>
                <?php echo $k2; ?>
                </th>
                <th>
                    <?php echo $val; ?>
                </th>
            </tr>
        <?php } ?>
    </table>
</body>
</html>