<h2>Input Menu</h2>

<form action="<?php echo URL; ?>/menu/save" method="post">
    <table>
        <tr>
            <td>MENU</td>
            <td><input type="text" name="merk" required></td>
        </tr>
        <tr>
            <td>TIPE</td>
            <td><input type="text" name="tipe" required></td>
        </tr>
        <tr>
            <td>COLD</td>
            <td><input type="text" name="cold" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>