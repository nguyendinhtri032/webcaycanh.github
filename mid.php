<?php
    if(isset($_GET["cart"])){ 
        include("./cart.php");
    	return;
	}
    if(isset($_GET["login"])){
        include("./login.php");
        return;
	}
	if(isset($_GET["product"])||isset($_GET["SP"])){
		include("./product.php");
		return;
	}
	if(isset($_GET["contact-us"])){
		include("./contact-us.php");
		return;
	}
	if(isset($_GET["signup"])){
		include("./signup.php");
		return;
	}
	if(isset($_GET["product-details"])){
			include("./product-details.php");
			return;
	}
	
	if(isset($_GET["account"])){
		include("./account.php");
		return;
	}
	if(isset($_GET["invoice"])||isset($_GET["DH"])){
		include("./invoice.php");
		return;
	}

	if(isset($_GET["product-add"])){
		include("./product-add.php");
		return;
	}	

	if(isset($_GET['search'])){
		include("./product-search.php");
		return;
	}
	if(isset($_GET['manageproduct'])){
		include("./manageproduct.php");
		return;
	}
	if(isset($_GET['soluong'])&&isset($_GET['addproduct']))
	{
		include("product-addtocart.php");
		addn();
		return;
	}
	if(isset($_GET['addproduct']))
	{
		include("product-addtocart.php");
		add1();
		
	}
	if(isset($_GET['cart-plus-product']))
	{  
		$id=$_GET['cart-plus-product'];
		$_SESSION['cart'][$id]['soluong']+=1;
		include('./cart.php');
		return;
	}
	if(isset($_GET['cart-minus-product']))
	{  
		$id=$_GET['cart-minus-product'];
		$_SESSION['cart'][$id]['soluong']-=1;
		if($_SESSION['cart'][$id]['soluong']==0){
			unset($_SESSION['cart'][$id]);
		}
		include('./cart.php');
		return;
	}
	if(isset($_GET['cart-delete-product'])){
		
	$id=$_GET['cart-delete-product'];
  
	unset($_SESSION['cart'][$id]);	
	include('cart.php');
	return;}

	
	if(isset($_GET['tenkh']) && isset($_GET['diachi']) && isset($_GET['sdt']) && isset($_GET['ghichu']) && isset($_GET['ptthanhtoan']) && isset($_GET['dathang']))
	{
		include("./order.php");
	
	}
	if(isset($_GET['invoice-deltai'])){
		include('./invoice-deltai.php');
		return;
	}
	
?>

<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
					
									<center><img src="images/home/nen1.png" class="girl img-responsive" alt="" /></center>
							
							</div>

							<div class="item">
								<div class="col-sm-6">
									<img src="images/home/nen2.jpg" class="girl img-responsive" alt="" />
									</div>
									<div class="col-sm-6">
									<h3>C??y x????ng r???ng ??a ph???n c?? h??nh d??ng x?? x??, c?? gai, ???????c coi l?? bi???u t?????ng c???a s???c s???ng m??nh li???t, v????n l??n kh?? kh??n, ?????ng th???i r???t d??? tr???ng n??n ???????c m???i ng?????i ??? nhi???u l???a tu???i ??a chu???ng. B???n c?? th??? ?????t ch???u c??y x????ng r???ng trong c??n ph??ng hay g??c l??m vi???c, h???c t???p c???a m??nh, th???m ch?? ??? ngo??i v?????n nh?? m???t ????? v???t trang tr?? n???i th???t.
									</h3>
									<a href="index.php?product=XR&page=1" class="btn btn-default get">Xem ngay...</a>
									</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h3>C??y Sen ???? ???????c ?????c t??nh c?? kho???ng 60 h??? th???c v???t kh??c nhau v?? h??n 3000 lo??i tr??n th??? gi???i. Sen ???? s???ng v?? ph??t tri???n ???????c ??? Vi???t Nam th?? ch??? kho???ng h??n 300 lo???i, v?? h??n 100 lo???i Sen ???? ?????p trong s??? ???? s???c s???ng t???t, ???????c con ng?????i nh??n gi???ng v?? ph??t tri???n l??m ki???ng v?? l??m c??y phong th???y. Sen ???? gi???ng gi?? ch??? t??? 11.000 VND.
									</h3>
									<a href="index.php?product=SD&page=1" class="btn btn-default get">Xem ngay...</a>
								</div>
								<div class="col-sm-6">
									<img src="images/home/nen3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Th??? Lo???i</h2>
						<div class='panel-group category-products' id='accordian'><!--category-productsr-->
								<?php
							  		$conn = mysqli_connect("localhost","root","","webcaycanh");
							  		if($conn)
						   			{
							 			$sql="SELECT * from loai";
							 			$result=mysqli_query($conn,$sql);
							  			while($row=mysqli_fetch_array($result))
								 		{	
									 		echo "
											 <div class='panel panel-default'>
										 	<div class='panel-heading'>
											 <h4 class='panel-title'><a href='index.php?product=".$row['maloai']."&page=1'>".$row['tenloai']."</a></h4>
										 	</div>
									 		</div>";
											 
										}
						 			}				 
								?>
								</div><!--/category-products-->";
					</div>
				</div>
						


				<div class="col-sm-9 padding-right">	
<div class="features_items"><!--features_items-->
<h2 class="title text-center">S???n Ph???m</h2>

			 <?php
				 $conn = mysqli_connect("localhost","root","","webcaycanh");
				 if($conn){
					$sql="select * from sanpham limit 9";
					$result=mysqli_query($conn,$sql);
				
					while($row=(mysqli_fetch_array($result))){
						echo "<div class='col-sm-4'>
						<div class='product-image-wrapper'>
							<div class='single-products'>
								<div class='productinfo text-center'>";
						echo "<a href='index.php?product-details=".$row['masanpham']."'>";
						echo "<img src='./images/product/" .$row['anh']."'>";
						echo "<h2>" .$row['dongia']." VN??</h2>";
						echo "<p>".$row['tensanpham']."</p>";
						echo "<a href='index.php?addproduct=".$row['masanpham']." ' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Th??m v??o gi??? h??ng</a>
						</a>";
						echo "</div>
						</div>	
						</div>
					</div>";
					 }
				 }
			?> 
			

</div><!--features_items-->

	</div>
			</div>
		</div>
	</section>


