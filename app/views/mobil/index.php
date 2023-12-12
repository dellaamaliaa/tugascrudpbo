<h2>Mobil</h2>

<a href="<?php echo URL; ?>/mobil/input" class="btn">Input Mobil</a>

<table>
      <tr>
            <th>NO</th>
            <th>MERK</th>
            <th>TAHUN PRODUKSI</th>
            <th>WARNA</th>
            <th>HARGA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['merk']; ?></td>
                  <td><?php echo $row['tahun_produksi']; ?></td>
                  <td><?php echo $row['warna']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/mobil/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/mobil/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>