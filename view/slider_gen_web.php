<?php
$stmt = $pdo->query("SELECT * FROM slider");
?>
<sm-swiper-banner _ngcontent-cro-c416="" id="sm-home-main-swiper-banner" fedeferload="" class="banners">
    <swiper class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-47cf7ec6fe846dde"></div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-47cf7ec6fe846dde"></div>
       <!----><!----><!---->
       <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
            <?php
                $rowCount = $stmt->rowCount();
                for ($i = 1; $i <= $rowCount; $i++) {
                    $isActive = ($i - 1 == 0) ? ' swiper-pagination-active' : '';
                    echo '<span class="swiper-pagination-bullet' . $isActive . '" tabindex="' . ($i - 1) . '" role="button" aria-label="Go to slide ' . $i . '"></span>';
                }
            ?>
       </div>
       <!---->
        <div class="swiper-wrapper slick-slider" id="swiper-wrapper-9d019d3871f7b504" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
            <?php
                $slide_index = 0;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div data-swiper-slide-index="' . strval($slide_index) . '" class="swiper-slide" style="width: 1140px; role="group" aria-label="1 / 19">';
                    echo '<a href="' . $row['url'] . '"><img id="swiperImage' . $slide_index . '" alt="" class="swiper-lazy" data-src="https://external-content.duckduckgo.com/iu/?u=' . $row['image'] . '"></a>';
                    echo '<div id="swiperPlaceholder' . $slide_index . '" class="swiper-placeholder"><div class="swiper-lazy-preloader"></div><img src="/assets/images/banner_placeholder.webp" alt=""><!----></div>';
                    echo '</div>';
                    $slide_index += 1;
                }
            ?>
          <!----><!---->
       </div>
       <script>
            document.addEventListener('DOMContentLoaded', function () {
                var swiper = new Swiper('.swiper-container', {
                    // Swiper ayarları buraya gelir
                    // ...
                    on: {
                        lazyImageReady: function (swiper) {
                            // Her bir resim yüklendiğinde bu olay tetiklenir
                            var slideIndex = swiper.realIndex;
                            var placeholder = document.getElementById('swiperPlaceholder' + slideIndex);
                            if (placeholder) {
                                placeholder.style.display = 'none';
                            }
                        }
                    }
                });
            });
        </script>

       <!----><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </swiper>
    <!---->
 </sm-swiper-banner>
 <!---->
 