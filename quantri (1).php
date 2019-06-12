<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hanhstore - Trang chủ </title>
<link rel="stylesheet" type="text/css" href="css/quantri.css" />
<?php
	switch($_GET['page_layout']){
		case 'danhsachsp': echo '<link rel="stylesheet" type="text/css" href="css/danhsachsp.css" />';
		break;
		
		case 'themsp': echo '<link rel="stylesheet" type="text/css" href="css/themsp.css" />';
		break;	
		
		case 'suasp': echo '<link rel="stylesheet" type="text/css" href="css/suasp.css" />';
		break;
	}
?>
</head>
<body>

<div id="wrapper">
	<div id="header">
    	<div id="navbar">
        	<ul>
            	<li id="admin-home"><a href="quantri.php?page_layout=danhsachsp">Trang chủ </a></li>
                <li><a href="quantri.php?page_layout=dangky">Đăng ký</a></li>
                 <li><a href="quantri.php?page_layout=search">Tìm kiếm</a></li>  
                <li><a href="quantri.php?page_layout=spmoi">danh mục sản phẩm</a></li>
                <li><a href="quantri.php?page_layout=phanhoi">Đánh giá sản phẩm</a></li>
                <li><a target="_blank" href="quantri.php?page_layout=login">Đăng nhập</a></li>
                <li><a href="quantri.php?page_layout=login">Đăng Xuất</a></li>  
            </ul>
            
        </div>
        <div id="banner">
        	<div id="logo"><a href="#"><img src="anh/anh3.PNG" /></a></div>
        </div>
    </div>
    <div id="body">
    
        <?php
		
        	switch($_GET['page_layout']){
				
				case 'danhsachsp': include_once('danhsachsp.php');
				break;
				
				case 'themsp': include_once('themsp.php');
				break;	
				
				case 'suasp': include_once('suasp.php');
				break;
				
				case 'dangky': include_once('dangkytt.php');
				break;
					case 'login': include_once('login.php');
				break;	
				case 'phanhoi': include_once('phanhoi.php');
				break;	
				case 'spmoi': include_once('spmoi.php');
				break;							
					case 'danhsachspad': include_once('danhsachspad.php');
				break;
				case 'search': include_once('search.php');
				break;
				default: include_once('login.php');				
			}
		?>
        
    </div>
    <div id="footer">
    	<div id="footer-info">
        	<h4>HANH STORE COSMESTIC & ACCESSORIES</h4>
            <p><span>Địa chỉ:</span> 95D LÝ NAM ĐẾ| <span>Phone</span> 024.66822225</p>
            <p><span>Shop 2:</span> 297 PHỐ HUẾ | <span>Phone</span> 024.66802468</p>
            <p>Hotline : 0778211211</p>
        </div>
    </div>
</div>
</body>
</html>