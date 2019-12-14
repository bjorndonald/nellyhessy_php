<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.min.css">
    <title>Nelly Hessy Site</title>
</head>
<body>
    <?php include 'layout/nav.php'; ?>
    <header>
        <div class="dark-overlay">
            <div class="container">
                <div class="heading">
                    <h1>
                        SWEET AND HEALTHY DARK HONEY
                    </h1>
                    <p><a href="#">Read more on the health benefits</a></p>
                    <a href="#" class="btn btn-transparent-white">EXPLORE</a>
                </div>
            </div>
        </div>
    </header>
    <section id="about">
        <div class="overlay">
            <div class="screen"></div>
        </div>
        <div class="container">
            <h2>Our Story</h2>
            <?php include 'layout/underline.php';?>
            <h1>We are a local honey production unit which is obsessed with delivering the most natural 
                    and sweet tasting honey</h1>
            <a>Read More</a>
                
            <div class="bottom">
               <div class="hexagon">
                   <img src="./img/sugar.png" alt="">
                   <h2>SWEET AND DELICIOUS</h2>
               </div>
               <div class="hexagon">
                   <img src="./img/sugar.png" alt="">
                   <h2>SWEET AND DELICIOUS</h2>
               </div>
               <div class="hexagon">
                   <img src="./img/beekeeper.png" alt="">
                   <h2>FARMED LOCALLY</h2>
               </div>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <h2>Our Story</h2>
            <?php include 'layout/underline.php';?>
            <h1>Our Latests Products</h1>
            <div class="products">
                <?php
                    $data = array(
                        'img_tag' => '1',
                        'title' => 'Raw Montana Blossom
                                    White Clover Honey',
                        'price' => '1,500'
                    );
                    include 'Util/product.php';
                ?>
                <?php
                    $data = array(
                        'img_tag' => '2',
                        'title' => 'Raw Montana Blossom
                                    White Clover Honey',
                        'price' => '1,500'
                    );
                    include 'Util/product.php';
                ?>
                <?php
                    $data = array(
                        'img_tag' => '3',
                        'title' => 'Raw Montana Blossom
                                    White Clover Honey',
                        'price' => '1,500'
                    );
                    include 'Util/product.php';
                ?>
            </div>
            <a href="">SHOW FULL LIST</a>
        </div>
    </section>

    <section id="blog">
        <div class="blogs">
            <div class="blog" style="background: url('img/blog_banner.jpg')">
                <div class="container">    
                    <div class="info">
                        <h4 class="category">HOW ITS DONE</h4>
                        <h1>How all the honey gets made</h1>
                        <p><a class="btn btn-primary">Read Now</a></p>
                    </div>
                </div>
            </div>
            
        </div>
        <a class="right" href="#"><img src="img/right_arrow.png" alt="" /></a>
    </section>
    <?php include 'layout/footer.php'; ?>
</body>
</html>