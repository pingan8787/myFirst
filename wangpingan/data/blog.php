<?php
  header('Content-Type:application/json;charset=UTF-8');
//从服务器导入 TEAM个人资料卡
  $conn = mysqli_connect('w.rdc.sae.sina.com.cn','x54l40z5m4','3hli2ml3yx4j5xkj1jmklxw0lwyz0x4kw01wizi5','app_wangpingan',3307);
  $sql = "SET NAMES UTF8";
  mysqli_query($conn,$sql);

  $sql = "SELECT * FROM blog_card";
  $result = mysqli_query($conn,$sql);
  $output = [];
  while(($list = mysqli_fetch_assoc($result))!=null){
    $output[] = $list;
  }

  echo json_encode($output);
?>
