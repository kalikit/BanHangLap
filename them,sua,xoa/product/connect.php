<?php 
							$hostname = "localhost";
							$user = "root";
							$pass = "";
							$database = "web_ban_hang";
							// tao ket noi
							$ketnoi = new mysqli($hostname, $user, $pass, $database);
                            if($ketnoi -> connect_error){
                                exit('Kết nối không thành công!'.$ketnoi -> connect_error);
                            }
							mysqli_query($ketnoi,$database);
							mysqli_set_charset($ketnoi, "utf8");
                            
?>