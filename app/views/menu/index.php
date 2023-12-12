<h2>Menu</h2>

<a href="<?php echo URL; ?>/menu/input" class="btn">Input Menu</a>

<table>
      <tr>
            <th>NO</th>
            <th>MENU</th>
            <th>TIPE</th>
            <th>COLD</th>
            <th>HARGA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['menu']; ?></td>
                  <td><?php echo $row['tipe']; ?></td>
                  <td><?php echo $row['cold']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/menu/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/menu/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>