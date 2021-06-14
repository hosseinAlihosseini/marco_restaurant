<?php
//include 'config.php';
$con_db = mysqli_connect("localhost", "root", "", "marco_restaurant");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Title</title>
</head>

<body dir="rtl">

<div class="main-container">
    <div class="container-fluid p-0">
        <header>
            <nav class="navbar navbar-expand-md menubar">
                <a href="#" class="navbar-brand">
                    <img src="img/logo.png" alt="logo">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                    <div class="container1" onclick="myFunc(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>
                <div class="collapse navbar-collapse mynavbar" id="myNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#">خانه</a></li>
                        <li class="nav-item"><a href="#">درباره ما</a></li>
                        <li class="nav-item"><a href="#">خدمات</a></li>
                        <li class="nav-item"><a href="#">منو</a></li>
                        <li class="nav-item"><a href="#">رزرو</a></li>
                        <li class="nav-item"><a href="#">گالری</a></li>
                        <li class="nav-item"><a href="#">تماس با ما</a></li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="input-group">
                            <input type="text" class="search-input" placeholder="جست و جو ...">
                            <button class="btn btn-search" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </nav>
            <div class="wellcome-inner">
                <h1>به مارکو رستوران خوش آمدید</h1>
                <p>رستوران که گاهی اوقات به عنوان شام معروف است ، مکانی است که غذای پخته شده آن به عموم مردم فروخته می
                    شود و جایی که افراد برای خوردن آن می نشینند. همچنین مکانی است که مردم برای لذت بردن از وقت و خوردن
                    یک وعده غذایی به آنجا می روند.</p>
                <a href="#" class="btn order-btn">سفارش حالا</a>
            </div>
        </header>
        <div class="container">
            <div class="row mb-2 mt-4 about-section">
                <div class="col-lg-5">
                    <img src="img/subscribe-main.png" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h1 class="title-about">درباره رستوران مارکو</h1>
                    <h5>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</h5>
                    <p>رائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و
                        جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود
                        ابزارهای کاربردی می باشد.</p>
                    <a href="#" class="btn order-btn">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="row service-section">
            <div class="service-section-title">
                <h2>خدمات مارکو چگونه است ؟</h2>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده
                    است.
                </p>
            </div>
            <div class="col-md-4">
                <div class="card-service">
                    <img src="img/wallet.png">
                    <h4>کوپن تخفیف</h4>
                    <p>غذای تازه غذایی است که هنوز حفظ نشده و هنوز هم خراب نشده است. برای سبزیجات و میوه ها</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-service">
                    <img src="img/healthy-food.png">
                    <h4>غذای سالم و تازه</h4>
                    <p>غذای تازه غذایی است که هنوز حفظ نشده و هنوز هم خراب نشده است. برای سبزیجات و میوه ها</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-service">
                    <img src="img/food-delivery.png">
                    <h4>تحویل رایگان و سریع</h4>
                    <p>غذای تازه غذایی است که هنوز حفظ نشده و هنوز هم خراب نشده است. برای سبزیجات و میوه ها</p>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="menu-food-header">
                        <img src="img/menu.png">
                        <h1>منوی غذای ما</h1>
                        <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                            مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kebab">چلوکباب</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#feed">شنیتسل و خوراک</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#stew">خورشت</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#appetizer">پیش غذا</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="kebab" class="container-food tab-pane active p-0">
                                    <div class="list-of-food">
                                        <?php
                                        $postsql = "SELECT * FROM `food` where type='kebab' ORDER BY `id` DESC;";
                                        $postquery = mysqli_query($con_db, $postsql);
                                        while ($postfetch = mysqli_fetch_assoc($postquery)) {
                                            ?>
                                            <div class="content-list-menu">
                                                <img src=<?php echo $postfetch["img"]; ?>>
                                                <div class="detail-food">
                                                    <div class="detail-food-title">
                                                        <h5 class="food-title"><?php echo $postfetch["title"]; ?></h5>
                                                        <p class="food-detail-txt">
                                                            <?php echo $postfetch["bodytxt"]; ?>
                                                        </p>
                                                        <div class="detail-food-footer">
                                                            <p class="cost-food"><?php echo $postfetch["price"]; ?>
                                                                <span style="font-weight: lighter;">تومان</span></p>
                                                            <button class="add-cart-btn">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div id="feed" class="container-food tab-pane fade p-0"><br>
                                    <div class="list-of-food">
                                        <?php
                                        $postsql = "SELECT * FROM `food` where type='feed' ORDER BY `id` DESC;";
                                        $postquery = mysqli_query($con_db, $postsql);
                                        while ($postfetch = mysqli_fetch_assoc($postquery)) {
                                            ?>
                                            <div class="content-list-menu">
                                                <img src=<?php echo $postfetch["img"]; ?>>
                                                <div class="detail-food">
                                                    <div class="detail-food-title">
                                                        <h5 class="food-title"><?php echo $postfetch["title"]; ?></h5>
                                                        <p class="food-detail-txt">
                                                            <?php echo $postfetch["bodytxt"]; ?>
                                                        </p>
                                                        <div class="detail-food-footer">
                                                            <p class="cost-food"><?php echo $postfetch["price"]; ?>
                                                                <span style="font-weight: lighter;">تومان</span></p>
                                                            <button class="add-cart-btn">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div id="stew" class="container-food tab-pane fade p-0"><br>
                                    <div class="list-of-food">
                                        <?php
                                        $postsql = "SELECT * FROM `food` where type='stew' ORDER BY `id` DESC;";
                                        $postquery = mysqli_query($con_db, $postsql);
                                        while ($postfetch = mysqli_fetch_assoc($postquery)) {
                                            ?>
                                            <div class="content-list-menu">
                                                <img src=<?php echo $postfetch["img"]; ?>>
                                                <div class="detail-food">
                                                    <div class="detail-food-title">
                                                        <h5 class="food-title"><?php echo $postfetch["title"]; ?></h5>
                                                        <p class="food-detail-txt">
                                                            <?php echo $postfetch["bodytxt"]; ?>
                                                        </p>
                                                        <div class="detail-food-footer">
                                                            <p class="cost-food"><?php echo $postfetch["price"]; ?>
                                                                <span style="font-weight: lighter;">تومان</span></p>
                                                            <button class="add-cart-btn">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div id="appetizer" class="container-food tab-pane fade p-0"><br>
                                    <div class="list-of-food">
                                        <?php
                                        $postsql = "SELECT * FROM `food` where type='appetizer' ORDER BY `id` DESC;";
                                        $postquery = mysqli_query($con_db, $postsql);
                                        while ($postfetch = mysqli_fetch_assoc($postquery)) {
                                            ?>
                                            <div class="content-list-menu">
                                                <img src=<?php echo $postfetch["img"]; ?>>
                                                <div class="detail-food">
                                                    <div class="detail-food-title">
                                                        <h5 class="food-title"><?php echo $postfetch["title"]; ?></h5>
                                                        <p class="food-detail-txt">
                                                            <?php echo $postfetch["bodytxt"]; ?>
                                                        </p>
                                                        <div class="detail-food-footer">
                                                            <p class="cost-food"><?php echo $postfetch["price"]; ?>
                                                                <span style="font-weight: lighter;">تومان</span></p>
                                                            <button class="add-cart-btn">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 cart-section">
                            <div class="cart-section-title">
                                <img src="img/trolley.png">
                                <span>سبد خرید</span>
                            </div>
                            <hr style="background-color: #ccc;margin: 0px;">
                            <div class="cart-section-content">
                            </div>
                            <div class="price-total">
                                <p class="m-0">مجموع</p>
                                <p class="total-cost-food"> 0 <span
                                            style="font-weight: lighter;font-size: 13px">تومان</span></p>
                                <div class="btns-pay-can">
                                    <button class="btn btn-success purchase-btn">پرداخت</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="header-gallery">
                    <img src="img/fish.png">
                    <h1>گالری تصاویر ما</h1>
                    <p>حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                        رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                </div>
                <div class="port-sec">
                    <div class="btn-filter col-xs-12 text-center">
                        <button class="filter active" data-filter="all"> نمایش همه</button>
                        <button class="filter" data-filter=".cat1">خدمات پذیرایی</button>
                        <button class="filter" data-filter=".cat2">دسر</button>
                        <button class="filter" data-filter=".cat3">نوشیدنی</button>
                    </div>
                    <div class="row mixit m-0">
                        <div class="col-md-4 mix cat1 filter-img mb-3">
                            <img src="img/gallery_1.jpg" class="img-fluid" alt="img">
                        </div>
                        <div class="col-md-4 mix cat2 filter-img mb-3">
                            <img src="img/gallery_2.jpg" class="img-fluid" alt="img">
                        </div>
                        <div class="col-md-4 mix cat2 filter-img mb-3">
                            <img src="img/gallery_3.jpg" class="img-fluid" alt="img">
                        </div>
                        <div class="col-md-4 mix cat3 cat1   filter-img mb-3">
                            <img src="img/gallery_4.jpg" class="img-fluid" alt="img">
                        </div>
                        <div class="col-md-4 mix cat3 filter-img mb-3">
                            <img src="img/gallery_5.jpg" class="img-fluid" alt="img">
                        </div>
                        <div class="col-md-4 mix cat1 filter-img mb-3">
                            <img src="img/gallery_6.jpg" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-section">
                    <div class="send-comment-title">
                        <img src="img/chat.png">
                        <h1>ارسال نظر</h1>
                        <p>نظرات و پیشنهادات خود را برای ما ارسال کنید</p>
                    </div>
                    <div class="send-comment-content">
                        <div class="send-comment-form">
                            <div class="send-comment-form-row">
                                <input type="text" id="name" autocomplete="off" placeholder="نام">
                                <input type="email" id="email" placeholder="ایمیل">
                                <input type="text" id="object" placeholder="موضوع">
                            </div>
                            <textarea id="comment" cols="100" rows="7"
                                      placeholder="متن مورد نظر را وارد کنید..."></textarea>
                            <button id="send-comment-btn" type="submit">ارسال نظر</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid footer-section p-0">
            <div class="row footer-section-inner">
                <div class="about-marco-footer col-lg-3 col-md-6">
                    <h4>مارکو رستوران</h4>
                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت
                        بوده است.</p>
                    <ul>
                        <li class="nav-item"><a href="#"><i class="fa fa-telegram"></i></a></li>
                        <li class="nav-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="nav-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="nav-item"><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
                <div class="service-marco-footer col-lg-3 col-md-6">
                    <h4>خدمات ما</h4>
                    <ul class="nav navbar-nav footer-menu">
                        <li><a href="#">پشتیبانی</a></li>
                        <li><a href="#">حرفه</a></li>
                        <li><a href="#">سرآشپزها</a></li>
                        <li><a href="#">مشتریان</a></li>
                        <li><a href="#">حریم خصوصی</a></li>
                    </ul>
                </div>
                <div class="links-marco-footer col-lg-3 col-md-6">
                    <h4>لینک های سریع</h4>
                    <ul class="nav navbar-nav footer-menu">
                        <li><a href="#">خدمات</a></li>
                        <li><a href="#">مجموعه غذا</a></li>
                        <li><a href="#">سفارش آنلاین</a></li>
                        <li><a href="#">وبلاگ</a></li>
                        <li><a href="#">تماس با ما</a></li>
                    </ul>
                </div>
                <div class="contact-marco-footer col-lg-3 col-md-6">
                    <h4>تماس بگیرید</h4>
                    <ul class="nav navbar-nav footer-menu">
                        <li><a href="#"><i class="fa fa-phone"></i>   09394362314</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>   09390147540</a></li>
                        <li><a href="#"><i class="fa fa-comment"></i>   info@marco.com</a></li>
                        <li><a href="#"><i class="fa fa-comment"></i>   hello@marco.com</a></li>
                        <li><a href="#"><i class="fa fa-map"></i>   کاشان-بلوار امام رضا </a></li>
                    </ul>
                </div>
            </div>
            <div class="copy-right">
                <p>کپی رایت © 1400 مارکو. تمام حقوق قالب محفوظ است .</p>
            </div>
        </div>

    </div>

</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/app.js"></script>
<script>
    let containerEl = document.querySelector('.mixit');
    let mixer = mixitup(containerEl);

    function myFunction(x) {
        x.classList.toggle("change");
    }
    function myFunc(x) {
        x.classList.toggle("change");
    }
</script>
</body>

</html>