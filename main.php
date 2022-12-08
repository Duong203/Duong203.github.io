<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main1.css'>
    <script src="iquery_min.js"></script>
</head>
<body>

<?php
    session_start();
    $ssdangky=$_SESSION['dangky'];
   echo $_SESSION['dangky'];
?>
<script>
    var kt_dangky=<?php echo json_encode($ssdangky);?>;
    alert("a");
    if(kt_dangky==0){
        alert("Đăng ký thất bại -->Không Kết Nối Được Máy Chủ");break;
    }else if(kt_dangky==1){
        alert('Đăng Ký Thành Công');break;
        <?php $_SESSION['dangky']=0?>
    }else if(kt_dangky==2) {
        alert("Đăng Ký Thất Bại -->Tài Khoản Đã Tồn Tại");break;
    };
    
</script>



    <div id="container-header">
        <div class="header">
            <div class="header-top">
             
                    <span class="header-phone">Người Dùng: 
                        <?php if(isset($_SESSION['userid'])){
                            echo $_SESSION['userid'];
                            $userid_dangnhap=$_SESSION['userid'];}
                            else echo "Chưa Đăng Nhập";
                        ?></span>  
                                 
                    <span class="header-dangky"><input type="button" id="header-dangky" value="Đăng Ký"></span>
                    <span class="header-dangnhap"><input type="button"  id="header-dangnhap" value="Đăng Nhập"> </span>
                
            </div>
            <div class="header-bottom">
                    <a href="#container-header">
                        <span class="header-logo"><img src="hinhanh/logo.webp" ></span>
                    </a>
                    
                    <span class="header-sanpham">Tất Cả Sản Phẩm</span>              
                    <span class="header-timkiem"> <input type="text" name="" id="header-timkiem" placeholder="            Tìm Kiếm"></span>
                    <span class="header-giohang"><input type="button" id="header-giohang" value="Giỏ Hàng"></span>
                  
            </div>   
        </div>
    </div>
<script>
    var userid_dangnhap=0;
     userid_dangnhap=<?php echo $userid_dangnhap;?>
     
        
        
    
    $('#header-dangky').click(function(){
        // window.location="http://127.0.0.1/wb_hotoan/main.php?main=yes";
        $('.an').hide(500);
        $('.form-dangky').show(500);
        $('.form-dangnhap').hide(500);
        
    });

    $('#header-dangnhap').click(function(){
        $('.an').hide(500);
        $('.form-dangnhap').show(500);
        $('.form-dangky').hide(500);
    });

    $(window).scroll(function(){
       if($(window).scrollTop()){
            $('.header').addClass('chuyen-header');
        }else {
            $('.header').removeClass('chuyen-header')
        }; 
    });

    $('.header-logo').click(function(){
        $('.an').show(500);
        $('.form-dangnhap').hide(500);
        $('.form-dangky').hide(500);
        // window.location="http://127.0.0.1/wb_hotoan/main.php?main=yes";
    });
</script>


<div class="an">
    <div class="baner">
        <img src="hinhanh/banner_1.webp" >
        <div class="mota">
            <span>
                <h4>Giao Hàng Miễn Phí</h4><br>
                <h6>Miễn Phí Ship Toàn Quốc</h6>
            </span>
            <span>
                <h4>BẢO HÀNH 365 NGÀY</h4><br>
                <h6>Tất cả sản phẩm đều được bảo hành keo, chỉ 365 ngày miễn phí.</h6>
            </span>
            <span>
                <h4>ĐỔI TRẢ TIỆN LỢI</h4><br>
                <h6>60 ngày đổi trả vì bất kỳ lý do gì. Đến tận nơi nhận hàng đổi trả.</h6>
            </span>
            <span>
                <h4>KIỂM TRA HÀNG THUẬN TIỆN</h4><br>
                <h6>Hỗ trợ kiểm tra hàng thuận tiện khi mua online</h6>
            </span>
            
        </div>
    </div>




    <div class="bangchon-sanpham">
        <span class="tieude">
            <b>Sản Phẩm Bán Chạy</b><br>
            <p>Các sản phẩm nổi bật theo từng loại sản phẩm</p>
            <b><hr></b>
        </span>
        <div class="loaigiay">
            <span class="boot ">Boot</span>
            <span class="nike">Nike</span>
            <span class="adidas">Adidas</span>
            <span class="puma">Puma</span>
        </div>
    </div>



    <div class="sanpham-chinh">

        <div class="khung-sanpham">
            <div class="anh-sanpham"><img src="hinhanh/san-pham-demo.webp"></div>
            <div class="gia">300k</div>
            <div class="ten-sanpham">GB Boot B1185</div>
            <div class="khung-nhieuanh-sanpham">
                <div class="nhieuanh-sanpham"><img src="hinhanh/san-pham-demo.webp" ></div>
                <div class="nhieuanh-sanpham"><img src="hinhanh/san-pham-demo.webp" ></div>
            </div>
            <div class="mota-sanpham">abc</div>
        </div>

       
        

    </div>






    

    <div class="baiviet">
        <h5>Mang Đến Trãi Nghiệm Tuyệt Vời Nhất Cho Khách Hàng</h5><hr><br>
        <div class="baiviet-con">
            <p>Với sứ mệnh "Mang đến trải nghiệm tuyệt vời nhất cho khách hàng", giayBOM luôn không ngừng nổ lực mang đến cho khách hàng những sản phẩm chất lượng với giá cả hợp lý cùng dịch vụ khách hàng tuyệt vời nhất.</p>
        </div>
        <img src="hinhanh/img_bai_viet.webp" >
    </div>







<!-- 
Đóng div ẩn -->
</div>









    <div class="form-dangky">
        <h3>Đăng Ký</h3>
        <form action="dangky.php" method="post">
        
            

            <input type="text" name="username" id="username" placeholder="    Username"><br>
           
            <input type="text" name="password" id="password" placeholder="    Password"><br>
          
            <input type="text" name="repassword" id="repassword" placeholder="    Repassword"><br>

            <input type="button" name='dangky' value="Đăng Ký" id="button-dangky">
        </form>

    </div>


    <div class="form-dangnhap">
        <h3>Đăng Nhập</h3>
        <form action="dangnhap.php" method="post">
            
            <input type="text" name="username-dangnhap" id="username" placeholder="    Username"><br>
           
            <input type="text" name="password-dangnhap" id="password" placeholder="    Password"><br>
          

            <input type="button" name='dangnhap' value="Đăng Nhập" id="button-dangnhap">
        </form>
        
    </div>



<script>
    
    $('#button-dangky').click(function(){
        if($('#username').val()==""){
            alert("Hãy Nhập Username");
        }else if($('#password').val()==""){
            alert("Hãy Nhập Password");
        }else if($('#repassword').val()==""){
            alert("Hãy Nhập RePassword");
        }else if($('#password').val()!=$('#repassword').val()){
            alert('password & repassword Không Trùng Lặp');
        }else{
            $('#button-dangky').attr('type','submit');
            // window.location="http://127.0.0.1/wb_hotoan/main.php?main=yes";
        }
        
        
    });
    $('#button-dangnhap').click(function(){
        if($('#username-dangnhap').val()==""){
            alert("Hãy Nhập Username");
        }else if($('#password-dangnhap').val()==""){
            alert("Hãy Nhập Password");
        }else{
            $('#button-dangnhap').attr('type','submit');
            // window.location="http://127.0.0.1/wb_hotoan/main.php?main=yes";
        }
        
        
    });
    
    
</script>







<div class="gio_hang">
    <table>
        <tr>
            <th class="anhsp"><img src="hinhanh/banner_1.webp" alt=""></th>
            <th class="tensp"><h3>tensp</h3></th>
            <th class="giasp"><h4>gia</h4></th>
            
        </tr>
    </table>
    <span class="tonggia">tonggia</span>
</div>















<div class="lien-ket">
    <span>
        <h3>Hồ Toản</h3>
        <p>Hộ Kinh Doanh: Hotoan- MST: 0315701834 - Số ĐKKD: 41M8031796</p>
        <p>Địa chỉ: 198 Nguyễn Bỉnh Khiêm, Phường Vĩnh Thanh, Thành Phố Rạch Giá, Kiên Giang</p>
        <p>Số điện thoại: 1800646407</p>
        <p>Email: hoquoctoan11122002@gmail.com</p>
    </span>

    <span>
        <h3>LIÊN KẾT NHANH</h3>
        <p>Chính Sách Khách Hàng Thân Thiết</p>
        <p>Địa chỉ: 198 Nguyễn Bỉnh Khiêm, Phường Vĩnh Thanh, Thành Phố Rạch Giá, Kiên Giang</p>
        <p>Hướng Dẫn Chọn Size</p>
        <p>Thanh Toán Trực Tiếp</p>
        <img src="hinhanh/img_momo.webp" >
        <img src="hinhanh/bocongthuong.webp">
    </span>
</div>
</body>
</html>