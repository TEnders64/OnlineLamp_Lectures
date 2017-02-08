<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/session2.css">
  </head>
<?php $dogs_in_depth = array('Bruce' => [9, 'Dachshund', 'Dark Brown Brindle'], 'Dito' => [9, 'Dachshund', 'Light Brown']);
 ?>
  <body>
    <table>
      <thead>
        <th>Name</th>
        <th>Age</th>
        <th>Breed</th>
        <th>Color</th>
      </thead>
      <tbody>
<?php foreach ($dogs_in_depth as $dog => $dog_info) { ?>
        <tr>
          <td><?= $dog ?></td>
          <?php for ($i=0; $i < count($dog_info); $i++) { ?>
          <td><?= $dog_info[$i] ?></td>
          <?php } ?>
        </tr>
<?php } ?>
      </tbody>
    </table>
  </body>
</html>
