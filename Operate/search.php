<?php
//đồng hồ nam
function call_WatchOfMan()
{
  $connect = mysqli_connect("localhost", "root", null, "watch");
  mysqli_set_charset($connect, 'UTF8');
  $select2 = "select * from post where title ='Đồng Hồ Nam' ";
  $query = mysqli_query($connect, $select2);
}
//đồng hồ nữ
function call_WatchOfWoman()
{
  $connect = mysqli_connect("localhost", "root", null, "watch");
  mysqli_set_charset($connect, 'UTF8');
  $select3 = "select * from post where title ='Đồng Hồ Nữ'";
  $query3 = mysqli_query($connect, $select3);
}
//đồng hồ cặp
function call_WatchOfcCouple()
{
  $connect = mysqli_connect("localhost", "root", null, "watch");
  mysqli_set_charset($connect, 'UTF8');
  $select4 = "select * from post where title ='Đồng Hồ Cặp'";
  $query4 = mysqli_query($connect, $select4);
}
