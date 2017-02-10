<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      td{
        width: 40px;
        height: 40px;
      }
      .strong{
        font-weight: bold;
        font-size: 24px;
      }
      table tr:nth-child(odd){
        background-color: gray;
      }
      table{
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
    <table>
    <?php for ($row=0; $row < 10; $row++) { ?>
        <tr>
            <?php for ($col=0; $col < 10; $col++) {
              if ($row == 0 && $col == 0) { ?>
                <td></td>
              <?php } else if ($row == 0) { ?>
                <td class="strong"><?= $col ?></td>
              <?php } else if ($col == 0) { ?>
                <td class="strong"><?= $row ?></td>
              <?php } else { ?>
                <td><?= $row * $col ?></td>
            <?php } ?>
      <?php } ?>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
