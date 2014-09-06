<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>wow-slider/engine/style.css" />
        <script type="text/javascript" src="<?= BASE_URL ?>wow-slider/engine/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->
    </head>
    <body style="background-color:#d7d7d7">
    
       
        <div class="slider-container">
            <div class="wowslider-container">
                <div class="ws_images"><ul>
                        <?php
                        $images = \Util\AppUtil::getFileNames("wow-slider/data/images/" . $type);
                        $tips = "";
                              foreach($images as $img) {
                                  $src = BASE_URL.'wow-slider/data/images/'.$type.'/'.$img;
                                  echo '<li><img src="'.$src.'" alt="'.$img.'" title="'.\Util\AppUtil::get_file_title($img).'" id="wows1_0" height="240"/></li>';
                                  $tips.='<a href="#"><img src="'.$src.'" alt="'.$img.'" height="30" width="30"/>1</a>';
                              }
                        ?>
                    </ul></div>
                <div class="ws_bullets"><div>
                        <?php
                            echo $tips;
                        ?>
                    </div></div>

                <div class="ws_shadow"></div>
            </div>
            <script type='text/javascript' src='<?= BASE_URL ?>wow-slider/engine/wowslider.js'></script>
            <?php
            if (!$_REQUEST["slider_script_loaded"]) {
                echo "<script type='text/javascript' src='".BASE_URL."wow-slider/engine/slider-script.js'></script>";
                $_REQUEST["slider_script_loaded"] = true;
            }
            ?>

        </div>

    </body>
</html>