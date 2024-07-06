<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
        <!-- dòng slide bar -->
        <li style="background-image: url('webroot/image/slider/img.jpg');">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1 class="head-1" style="color : gray;">Men's</h1>
                                <h2 class="head-2" style="color : gray;">Fashion</h2>
                                <h2 class="head-3" style="color : gray;">Collection</h2>
                                <p class="category"><span>New trending fashion</span></p>
                                <p><a href="?view=products-category&id=2" class="btn btn-primary">Bộ sưu tập</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(webroot/image/slider/GC_Slide.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1 class="head-1" style="color : black;">Huge</h1>
                                <h2 class="head-2" style="color : gray;">Sale</h2>
                                <h2 class="head-3" style="color : gray;"><strong class="font-weight-bold">5%</strong> Off</h2>
                                <p class="category"><span>Big sale fashion</span></p>
                                <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(webroot/image/slider/CN_Slide);">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 text-center slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1 class="head-1" style="color : gray;" >New</h1>
                                <h2 class="head-2" style="color : gray;">Arrival</h2>
                                <h2 class="head-3" style="color : gray;" >up to <strong class="font-weight-bold">10%</strong> off</h2>
                                <p class="category"><span>New stylish shoes for men</span></p>
                                <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        </ul>
    </div>
</aside>
<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="intro">Hãy lên một ý tưởng đơn giản: Tìm ra những sản phẩm, thiết kế tốt mà bản thân muốn...</h2>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>SẢN PHẨM BÁN CHẠY</h2>
            </div>
        </div>
        <div class="row row-pb-md"> 
        <?php
            $prodcts=productAll();
            while ($row=(mysqli_fetch_array($prodcts))) { $price_sale=price_sale($row['MaSP'],$row['DonGia']);?>
            <div class="col-lg-3 mb-4 ">
                <div class="product-entry border">
                    <a href="?view=product-detail&id=<?php echo $row['MaSP'] ?>" class="prod-img">
                        <img src="webroot/image/sanpham/<?php echo $row['AnhNen']; ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#"><?php echo $row['TenSP']; ?></a></h2> 
                        <span class="price"><?php echo number_format($price_sale,0).'₫'; ?></span>
                        <?php if(number_format($row['DonGia']) !== number_format($price_sale)){ ?>
                        <span class="price-old"><?php echo  number_format($row['DonGia'], 0 ).' '.' ₫' ; ?></span> <?php } ?>
                    </div>
                </div>
            </div> 
            <?php }?>      
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="?view=products" class="btn btn-primary btn-lg">Tất cả sản phẩm</a></p>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>ĐỐI TÁC TIN CẬY</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand_LV.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand_HM.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand_HS.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand_BB.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand_CN1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand_GC.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand_GA.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            
        </div>
    </div>
</div>
