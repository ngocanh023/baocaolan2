<?php 
	include('Connect.php');
?>
	
<form   action= “search.php”  method= “GET”  >
<table><tr>
<td><input type= “text” name= “ten” placeholder= “Nhập sản phẩm cần tìm”/></td> 
			<td bgcolor="#FFCCFF"><input type="submit" value="Tìm kiếm"></td></tr></table></form>
<?php
        if (isset($_REQUEST['OK'])) 
        {
          
            $search = addslashes($_GET['search']);
 
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
               
                $query = "select * from sanpham where code like '%$search%'";
 
               
 
                // Thực thi câu truy vấn
                $sql = mysql_query($query);
 
                // Đếm số đong trả về trong sql.
                $num = mysql_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysql_fetch_assoc($sql)) {
                        echo '<tr>';
                            echo "<td>{$row['Code']}</td>";
                            echo "<td>{$row['Name']}</td>";
                            echo "<td>{$row['Price']}</td>";
                            echo "<td>{$row['Category']}</td>";
                            echo "<td>{$row['Image']}</td>";
echo "<td>{$row['quantity']}</td>";

                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>