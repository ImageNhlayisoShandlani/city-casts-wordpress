<?php

get_header();
page_header("Watch");
$now = current_time('H:i:s');

?>


<section class="container-fluid" id="shows">
    <div class="row" id="shows__heading">
        <div class="col-md-6">
            <span>Live TV</span>
            <h2>
                Watch on demand videos below
            </h2>
        </div>
        <div class="col-md-6">
            <p>From in-depth interviews to exclusive stories, these segments are crafted to entertain, inform, and inspire. Tune in now to enjoy the best we have to offer!</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <script src="https://cdn.jsdelivr.net/npm/hls.js@1"></script>
            <!-- Or if you want the latest version from the main branch -->
            <!-- <script src="https://cdn.jsdelivr.net/npm/hls.js@canary"></script> -->
            <video id="video" autoplay muted controls style="width: 100%; height: 600px;">
                <source src="https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8">
            </video>
            <script>
                var video = document.getElementById("video");
                var videoSrc = "https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8";
                if (Hls.isSupported()) {
                    var hls = new Hls();
                    hls.loadSource(videoSrc);
                    hls.attachMedia(video);
                }
                // HLS.js is not supported on platforms that do not have Media Source
                // Extensions (MSE) enabled.
                //
                // When the browser has built-in HLS support (check using `canPlayType`),
                // we can provide an HLS manifest (i.e. .m3u8 URL) directly to the video
                // element through the `src` property. This is using the built-in support
                // of the plain video element, without using HLS.js.
                else if (video.canPlayType("application/vnd.apple.mpegurl")) {
                    video.src = videoSrc;
                }
            </script>
        </div>
    </div>
</section>


<?php

get_footer();
?>