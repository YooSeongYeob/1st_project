<?php
if( $http_method === "GET" )
{
  $list_no = 1;
  if( array_key_exists( "list_no", $_GET ) )
  {
    $list_no = $_GET["list_no"];
  }
  $result_info = select_todo_list_info_no( $list_no );
}
else
{
  $arr_post = $_POST;


  $list_imp_flg = isset($arr_post['list_imp_flg']) && $arr_post['list_imp_flg'] == 1 ? 1 : 0;
  $arr_info =
   array
   (
    ":list_title" => $param_arr["list_title"]
    ,":list_detail" => $param_arr["list_detail"]
    ,":list_start_date" => $param_arr["list_start_date"]
    ,":list_due_date" => $param_arr["list_due_date"]
    ,":list_imp_flg" => $list_imp_flg
   );
   
  var_dump($arr_info);
   }
?>