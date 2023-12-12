<?php

namespace App\Models;

use App\Core\Model;

class Mobil extends Model
{


     public function show()
     {
          $query = "SELECT * FROM tb_mobil";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $merk = $_POST['merk'];
          $tahun_produksi= $_POST['tahun_produksi'];
          $warna = $_POST['warna'];
          $harga = $_POST['harga'];

          $sql = "INSERT INTO tb_mobil
            SET merk=:merk,tahun_produksi=:tahun_produksi,warna=:warna,harga=:harga";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":merk", $merk);
          $stmt->bindParam(":tahun_produksi", $tahun_produksi);
          $stmt->bindParam(":warna", $warna);
          $stmt->bindParam(":harga", $harga);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_mobil WHERE id=:id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $id = $_POST['id'];
          $merk = $_POST['merk'];
          $tahun_produksi= $_POST['tahun_produksi'];
          $warna = $_POST['warna'];
          $harga = $_POST['harga'];

          $sql = "UPDATE tb_mobil
          SET merk=:merk,tahun_produksi=:tahun_produksi,warna=:warna,harga=:harga WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id", $id);
          $stmt->bindParam(":merk", $merk);
          $stmt->bindParam(":tahun_produksi", $tahun_produksi);
          $stmt->bindParam(":warna", $warna);
          $stmt->bindParam(":harga", $harga);

          $stmt->execute();
     }

     public function delete($id)
     {
           $sql = "DELETE FROM tb_mobil WHERE id=:id";
           $stmt = $this->db->prepare($sql);

           $stmt->bindParam(":id", $id);
           $stmt->execute();
     }
}
