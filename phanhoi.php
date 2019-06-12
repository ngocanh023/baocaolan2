
<?php 
	include('Connect.php');
?>
<h2>Phản hồi khách hàng</h2>
<div id="main">
	<form>
    	<table>
        	<tr>
            	<td>Đánh giá sản phẩm</td>
                <td><select>
                	<option>Rất tốt</option>
                    <option>Tốt</option>
                    <option>Trung bình</option>
                    <option>Kém</option>
                </select></td>
            </tr>
            <td>Ý kiến khách hàng</td>
            <td style="width:auto"><textarea></textarea></td>
            <tr>
            </tr>
            <tr>
            <td colspan="2" align="center"><a href='quantri.php?page_layout=danhsachsp="<?php echo $num['Code'];?>"' onclick="if(confirm('Gửi thành công')) return true;else return false;"</a>GỬI</td>
        </table>
    </form>
</div>