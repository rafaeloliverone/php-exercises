<!DOCTYPE html>

<?php
require_once('./database/class-host.php');
$handler = new Handler();
?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <table class="table table-dark">

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $collection = $handler->readAll();
                // var_dump($collection);
                foreach ($collection as $object) :
                ?>
                
                    <tr>
                        <th scope="row"><?php echo $object['id']; ?></th>
                        <td scope="col"><?php echo $object['name']; ?></td>
                        <td scope="col"><?php echo $object['address']; ?></td>
                    </tr>
                    
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</body>

</html>