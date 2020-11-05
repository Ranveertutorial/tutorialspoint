<!DOCTYPE html>
<html lang="en">
<?php
        if($_SERVER['REQUEST_METHOD']=='POST') {

            $title=$_POST['qtitle'];
            $detail=$_POST['qdetail'];
            
            $target_url="https://www.newslive18.com/ask_api/save_data";

            $content= file_get_contents($_FILES["mysheet"]["tmp_name"]);

            $target_file = basename($_FILES["mysheet"]["name"]);

            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
                        
            $post = [
                'api_key'  => '478abc',
                'title'    => $title,
                'detail'   => $detail,
                'sheetname'=> $target_file
            ];
            //echo $target_file;


            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$target_url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'GET');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            $result=curl_exec ($ch);
            curl_close ($ch);




        }
?>
<?php include 'header.php';?>

<body>
    
        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Ask</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Get Solutions Anytime</h2> <!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        

        <section class="contact-one">
            <div class="container">
                <h2 class="contact-one__title text-center">Ask Your Question <br>
                </h2><!-- /.contact-one__title -->
                <form method="post" class="contact-one__form" enctype="multipart/form-data">
                    <div class="row low-gutters">
                        <div class="col-lg-12">
                            <input type="text" placeholder="Question Title" name="qtitle">
                        </div><!-- /.col-lg-12 -->
                          <div class="col-lg-12">
                            <textarea placeholder="Write Your Question" name="qdetail"></textarea>
                          </div>

                          <div class="col-lg-12">  
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                              </div>
                              <div class="custom-file">
                                <input type="file" name="mysheet" class="custom-file-input" id="inputGroupFile01"
                                  aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                              </div>
                            </div>
                          </div>   
                        
                        <div class="col-lg-12">
                            <div class="text-center">
                                <button type="submit" class="contact-one__btn thm-btn">Submit</button>
                            </div><!-- /.text-center -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->
        
<?php include 'footer.php';?>
    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/vegas.min.js"></script>

    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>
</body>

</html>