<?php

class usuarioModel extends Model
{
  public static function by_email($usuario)
  {
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1";

    return ($rows = parent::query($sql, ['usuario' => $usuario])) ? $rows[0] : [];
  }
}