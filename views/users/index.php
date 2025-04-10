<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user) { ?>
                       <tr>
                           <td><?php print $user['id'] ?></td>
                           <td><?php print $user['names'] ?></td>
                           <td><?php print $user['lastnames'] ?></td>
                           <td><?php print $user['email'] ?></td>
                           <td>
                               <a href="?c=Home&m=show&id=<?php echo $user['id'] ?>">Detalles</a>
                               <a href="">Editar</a>
                               <a href="" class="text-danger">Eliminar</a>
                           </td>
                       </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>