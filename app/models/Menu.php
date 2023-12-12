<?php

namespace App\Models;

use App\Core\Model;

class Menu extends Model
{


     public function show()
     {
          $query = "SELECT * FROM tb_menu";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $menu = $_POST['menu'];
          $tipe= $_POST['tipe'];
          $cold = $_POST['cold'];
          $harga = $_POST['harga'];

          $sql = "INSERT INTO tb_menu
            SET menu=:menu,tipe=:tipe,cold=:cold,harga=:harga";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":menu", $menu);
          $stmt->bindParam(":tipe", $tipe);
          $stmt->bindParam(":cold", $cold);
          $stmt->bindParam(":harga", $harga);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_menu WHERE id=:id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $id = $_POST['id'];
          $menu = $_POST['menu'];
          $tipe= $_POST['tipe'];
          $cold = $_POST['cold'];
          $harga = $_POST['harga'];

          $sql = "UPDATE tb_menu
          SET menu=:menu,tipe=:tipe,cold=:cold,harga=:harga WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id", $id);
          $stmt->bindParam(":merk", $menu);
          $stmt->bindParam(":tipe", $tipe);
          $stmt->bindParam(":code", $cold);
          $stmt->bindParam(":harga", $harga);

          $stmt->execute();
     }

     public function delete($id)
     {
           $sql = "DELETE FROM tb_menu WHERE id=:id";
           $stmt = $this->db->prepare($sql);

           $stmt->bindParam(":id", $id);
           $stmt->execute();
     }
}
