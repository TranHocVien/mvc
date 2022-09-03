<?php
class Post
{
  public $mssv;
  public $ho_va_ten;
  public $diem;

  function __construct($mssv, $ho_va_ten, $diem)
  {
    $this->mssv = $mssv;
    $this->ho_va_ten = $ho_va_ten;
    $this->diem = $diem;
  }
  static function find($mssv)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM danhsachsv WHERE mssv = :mssv');
    $req->execute(array('mssv' => $mssv));

    $item = $req->fetch();
    if (isset($item['mssv'])) {
      return new Post($item['mssv'], $item['ho_va_ten'], $item['diem']);
    }
    return null;
  }
  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM danhsachsv');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['mssv'], $item['ho_va_ten'], $item['diem']);
    }

    return $list;
  }
}