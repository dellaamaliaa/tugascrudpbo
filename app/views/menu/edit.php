<h2>Edit Menu</h2>

<form action="<?php echo URL; ?>/menu/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>MENU</td>
            <td><input type="text" name="menu" value="<?php echo $data['row']['menu']; ?>" required></td>
        </tr>
        <tr>
            <td>TIPE</td>
            <td><input type="text" name="tipe" value="<?php echo $data['row']['tipe']; ?> " required></td>
        </tr>
        <tr>
            <td>COLD</td>
            <td><input type="text" name="cold" value="<?php echo $data['row']['cold']; ?> "required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $data['row']['harga']; ?> "required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>