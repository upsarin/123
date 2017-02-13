
<style>
    .hero .head {
        top: 180px;
    }
    @media (max-width: 767px) {
        .section {
            margin-top: -250px;
        }
    }
</style>

<?
$element = $array['content'][0];
$filter = array("content_id" => $element['id']);
$images = Element::SelectAll('files', $filter, null, null);
?>

<div class="js-sticky__wrap" style="height: 480px; margin-bottom: 0px;">
    <header class="hero sticky_hero">
        <div class="image bg-adapt" style="background-image: url(&quot;/css/images/content/courses/<?=$_SESSION['user']['city']?>/baner/<?=$element['name']?>.jpg?mh=600&amp;c=1&amp;cw=2000&amp;hash=0D2DFF733EF51C66941EB5413B4D7F2A7723A5C9&quot;);">
        </div>
        <div class="content">
            <div class="container">
                <div class="head">
                    <div class="name">
                        <?=$element['title']?>
                    </div>
                    <div id="fb-root"></div>
                    <h1 class="desc"><?=strip_tags($element['preview_desc'])?></h1>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="section section-product-images">
    <div class="container">
        <div class="image-gallery">
            <div class="image img-adapt">
                <a href="#zoom-tool-01" class="btn trigger__open-overlayer zoom-tool" data-classes="light zoom">
                    <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/mixer/djm-tour1/djm-tour1-main.png?h=768&amp;w=1024&amp;hash=DC8ADBBD5251B43ABBB5B9828753D61C42BBB91A" data-full="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/mixer/djm-tour1/djm-tour1-main.jpg" data-large="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/mixer/djm-tour1/djm-tour1-main.png?h=768&amp;w=1024&amp;hash=DC8ADBBD5251B43ABBB5B9828753D61C42BBB91A" data-small="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/mixer/djm-tour1/djm-tour1-main.png?h=169&amp;w=169&amp;hash=6E4209C34F7A3F9C0486104FFD65B4535165D670" alt="DJM-TOUR1" class="zoomtool-capable image-switch-target" rel="productView">
                </a>




            </div>


        </div>

    </div>
</div>
<div class="section section-product-info">
    <div class="container">

        <!--
            Add class has-serie if this highlight block exists
            Add class has-latest-update if this highlight block exists
        -->

        <div class="info has-serie has-latest-update row">

            <div class="col usp">
                <p><?=$element['preview_desc']?></p>
            </div>
        </div>

    </div>
</div>
<div class="section section-product-features">
    <div class="container">
        <h2 class="h2">Key features</h2>
        <div class="row features-key">
            <div class="list">
                <ul>
                    <li>
                        <div class="feature compact active">
                            <div class="head">
                                <h3 class="h3">Warm sound at any venue</h3>
                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/32-bit-da-convertor-ess.jpg?h=500&amp;w=500&amp;hash=33725A2A1A98EC1EE726352EC03F03D88EC264D4" alt="32-bit-da-convertor-ess">
                            </div>
                            <div class="body">
                                <p>A 32-bit D/A convertor, made by ESS Technologies, delivers incredibly low noise and distortion even at super-high volumes. Additionally the 96 kHz/24-bit sound card, 64-bit floating point mixing processing, enhanced dithering technology and a low-jitter clock combine to provide an accurate, natural analogue sound.</p>


                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="feature compact">
                            <div class="head">
                                <h3 class="h3">Connect to front of house</h3>
                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/digital-out.jpg?h=500&amp;w=500&amp;hash=9BB4FD4120B7E499EC107D2EF2A56DE0089B58F6" alt="digital-out-n">
                            </div>
                            <div class="body">
                                <p>The AES/EBU digital output lets you connect directly to the PA, regardless of its positioning. Together with the word clock input it ensures high-grade digital audio signal transmission to front of house for precise synchronisation and the best possible sound quality.</p>


                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="feature compact">
                            <div class="head">
                                <h3 class="h3">13-inch fold-out touch screen</h3>
                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/djm-fold-out-screen.jpg?h=500&amp;w=500&amp;hash=3C2744166B862D23598B6539C36CA827647690F6" alt="djm-fold-out-screen-n">
                            </div>
                            <div class="body">
                                <p>Use multicoloured touch display to browse and select tracks from up to 4 CDJs connected via Pro DJ Link. Choose between a horizontal multi-wave view or a vertical view that also includes an RMS meter so you can monitor and control the volume for each channel.</p>


                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="feature compact">
                            <div class="head">
                                <h3 class="h3">5-port LAN hub</h3>
                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/5-port-lan-hub.jpg?h=500&amp;w=500&amp;hash=66B7DC3A354A88A1DEE485E60E607DFE74CA48A1" alt="5-port-lan-hub-n">
                            </div>
                            <div class="body">
                                <p>A 5-port LAN hub means you can connect up to 5 players or laptops to the DJM-TOUR1. Via Pro DJ Link you can share one source across up to 4 players – and if you're using rekordbox dj you get access to a host of advanced performance features on top.</p>


                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="feature compact">
                            <div class="head">
                                <h3 class="h3">Easy b2b cueing</h3>
                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/b2b-cueing-second-headphone.jpg?h=500&amp;w=500&amp;hash=3B2961C5035790AF0B77AF35B9ADA97FD8869AEE" alt="b2b-cueing-second-hedphone-n">
                            </div>
                            <div class="body">
                                <p>2 independent headphone sections let you and another DJ cue tracks at the same time without hearing each other's input. Each headphone also has its own volume control for ease and comfort.</p>


                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="feature compact">
                            <div class="head">
                                <h3 class="h3">Flexible connectivity</h3>
                                <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/xlr-aux-in.jpg?h=500&amp;w=500&amp;hash=0A741753076BA6EA946BAA93F56619E1D3A254C8" alt="xls-aux-in">
                            </div>
                            <div class="body">
                                <p>Hook up your choice of external devices including drum machines, effectors, synths and samplers using XLR/TRS combination Aux-in.</p>


                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="viewmaster jogwheel" style="top: 0px;">
                <div class="view">
                    <div class="picture-wrap"><div class="picture active"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/32-bit-da-convertor-ess.jpg?h=500&amp;w=500&amp;hash=33725A2A1A98EC1EE726352EC03F03D88EC264D4"></div><div class="picture"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/digital-out.jpg?h=500&amp;w=500&amp;hash=9BB4FD4120B7E499EC107D2EF2A56DE0089B58F6"></div><div class="picture"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/djm-fold-out-screen.jpg?h=500&amp;w=500&amp;hash=3C2744166B862D23598B6539C36CA827647690F6"></div><div class="picture"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/5-port-lan-hub.jpg?h=500&amp;w=500&amp;hash=66B7DC3A354A88A1DEE485E60E607DFE74CA48A1"></div><div class="picture"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/b2b-cueing-second-headphone.jpg?h=500&amp;w=500&amp;hash=3B2961C5035790AF0B77AF35B9ADA97FD8869AEE"></div><div class="picture"><img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/xlr-aux-in.jpg?h=500&amp;w=500&amp;hash=0A741753076BA6EA946BAA93F56619E1D3A254C8"></div></div>
                    <div class="mask"></div>
                    <a href="#" class="controlbtn trigger__open-overlayer video-player hidden" data-title="" style=""><span class="ico icon-controlbtn-play"><span class="sr-only">Play</span></span></a>
                </div>
            </div>
        </div>
        <div class="row features-other equalizer" data-equalizer-watch="li">
            <ul>
                <li style="height: 443px;">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/familiar-layout.jpg?h=169&amp;w=169&amp;hash=4CFD70A072CB943A61C14DD121EDDE24AF6FFC52">
                    </div>
                    <div class="body">
                        <h4>Familiar layout</h4>
                        <p>
                            The DJM-TOUR1 will feel instantly familiar as it shares its layout with the <a href="/en/product/mixer/djm-900nxs2/black/overview/">DJM-900NXS2</a>. Likewise it also features improved channel fader/EQ curves, high-quality Sound Colour FX, quantized Beat FX, and an Independent Send/Return.
                        </p>
                    </div>
                </li>
                <li style="height: 443px;">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/sound-color-fx.jpg?h=169&amp;w=169&amp;hash=5C79F01A738C04AC84B6CE1145148717093DBF3D">
                    </div>
                    <div class="body">
                        <h4>Sound Color FX</h4>
                        <p>
                            6 studio-quality sound FX - Sweep, Filter, Crush, Dub Echo, Noise and Space - are available on every channel. Use the parameter control knob to fine-tune the FX.
                        </p>
                    </div>
                </li>
                <li style="height: 443px;">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/beat-fx.jpg?h=169&amp;w=169&amp;hash=E942C9D2064DA638E84EA94BA1D59C660AC129D5">
                    </div>
                    <div class="body">
                        <h4>Beat FX</h4>
                        <p>
                            Use the large X-Pad to engage 14 different types of Beat FX and adjust the parameters with just one finger. A high-res OLED display instantly shows you which FX are in play.
                        </p>
                    </div>
                </li>
                <li style="height: 443px;">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-900nxs2/djm900nxs2-send-return.jpg?h=169&amp;w=169&amp;hash=DDD14C8514718099985D2E45699FA52E6E615D4A">
                    </div>
                    <div class="body">
                        <h4>Independent Send/Return</h4>
                        <p>
                            Use built-in FX and an external FX unit at the same time. Simply connect external hardware via Aux. Or connect your iPhone/iPad via USB to engage instrument and FX apps - try it with the <a href="/en/product/software/rmx-1000-ipad-app/software/overview/">RMX-1000 for iPad</a>.
                        </p>
                    </div>
                </li>
                <li style="height: 509px;">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/festival-proof-design.jpg?h=169&amp;w=169&amp;hash=704FC1F0C827C6325D7280B13D00D7E8F2739EAB">
                    </div>
                    <div class="body">
                        <h4>Festival-proof design</h4>
                        <p>
                            The DJM-TOUR1's rigid design comes with isolator feet for stability on any surface and reinforced sides. What's more, the LAN ports have NEUTRIK etherCON® connectors with a latch lock, so compatible cables will stay in place whatever vibrations and knocks are thrown at them.
                        </p>
                    </div>
                </li>
                <li style="height: 509px;">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/separate-power-supply.jpg?h=169&amp;w=169&amp;hash=C22BB4A27BF1B1758D661D7E1ACF6546192CC97B">
                    </div>
                    <div class="body">
                        <h4>Separate power supply</h4>
                        <p>
                            The separate power supply ensures uncompromised performance for optimum sound quality, while power factor correction (PFC) reduces distortion across the frequencies.
                        </p>
                    </div>
                </li>
                <li style="height: 509px;">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/screen-adjustments.jpg?h=169&amp;w=169&amp;hash=4DCF7AC00CBA091F987304B73B57AF04B5AFE50B">
                    </div>
                    <div class="body">
                        <h4>Screen adjustments</h4>
                        <p>
                            Tilt the screen to suit your preference, adjust the lighting or attach the display shade to protect the sun's glare when you're playing outside.
                        </p>
                    </div>
                </li>
                <li style="height: 509px;">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/mixer/djm-tour1/built-in-kuvo-gateway.jpg?h=169&amp;w=169&amp;hash=DEC4F3EF73E71973919E8DE0F8C0062B60FA86ED">
                    </div>
                    <div class="body">
                        <h4>Built-in KUVO Gateway</h4>
                        <p>
                            The DJM-TOUR1 is our first mixer to have a KUVO Gateway on board so you can easily connect to <a href="http://kuvo.com" target="_blank" class="lnk-external">KUVO</a> and broadcast your set information, in real time, to fans around the world.
                        </p>
                    </div>
                </li>
                <li style="">
                    <div class="picture">
                        <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/features/software/rekordbox-dvs/rekordbox-dvs-logo.jpg?h=169&amp;w=169&amp;hash=356F3646586D085AA0E947ED342D4DF4D41367A9">
                    </div>
                    <div class="body">
                        <h4>rekordbox dvs</h4>
                        <p>
                            When you use our <a href="/en/product/software/rekordbox-dj/software/overview/">rekordbox dj</a> DJ software, you can buy the <a href="/en/product/software/rekordbox-dvs/software/overview/">rekordbox dvs</a> Plus Pack to get low latency scratch control with music from your rekordbox library. <a class="lnk-external" target="_blank" href="https://rekordbox.com/en/store/#dvsbuyup">Find out more</a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="actions">
            <a class="ghostbtn ghostbtn-large ghostbtn-forw" href="/en/product/mixer/djm-tour1/black/specifications/"><span class="text">See all specifications</span></a>
        </div>
    </div>
</div>
<div class="section section-product-combine bg-dark-1 color-light">
    <div class="container product-combine">
        <h2 class="h2 no-line color-light">Combine with...</h2>

        <div class="row equalizer" data-equalizer-watch=".equalizer-item">
            <div class="col-md-9">
                <h4 class="color-light">Related products</h4>
                <div class="row">
                    <div class="col-md-4 equalizer-item" style="height: 239px;">

                        <a href="/en/product/player/cdj-tour1/black/overview" class="product clearfix">
                        <span class="visual-wrap">
                            <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/player/cdj-tour1/cdj-tour1-main.png?h=250&amp;w=400&amp;hash=D222B2974AEEBAAACDA6B5913693BDD85BF118C0" alt="CDJ-TOUR1">
                        </span>
                            <span class="content-wrap">
                                <h5 class="no-line">CDJ-TOUR1</h5>
                                                            <p class="desc">TOUR system multi-player with fold-out touch...</p>
                        </span>
                        </a>
                    </div>
                    <div class="col-md-4 equalizer-item" style="height: 239px;">

                        <a href="/en/product/effector/rmx-1000/black/overview" class="product clearfix">
                        <span class="visual-wrap">
                            <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/effector/rmx-1000/black/rmx-1000-main.png?h=250&amp;w=400&amp;hash=387FF6E1D84BBF94CE5EBB1C37A75DCFA33D33CF" alt="RMX-1000">
                        </span>
                            <span class="content-wrap">
                                <h5 class="no-line">RMX-1000</h5>
                                                            <p class="desc">3-in-1 remix station for editing, performing...</p>
                        </span>
                        </a>
                    </div>
                    <div class="col-md-4 equalizer-item" style="height: 239px;">

                        <a href="/en/product/headphones/hdj-2000mk2/black/overview" class="product clearfix">
                        <span class="visual-wrap">
                            <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/headphones/hdj-2000mk2/black/hdj-2000mk2-main-if.png?h=250&amp;w=400&amp;hash=2DCC879989B0566D3194F767911D1318F80D0597" alt="HDJ-2000MK2">
                        </span>
                            <span class="content-wrap">
                                <h5 class="no-line">HDJ-2000MK2</h5>
                                                            <p class="desc">Flagship pro-DJ monitor headphones</p>
                        </span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <h4 class="color-light">Accessories</h4>
                <div class="row">
                    <div class="col-md-12 equalizer-item" style="height: 239px;">
                        <div class="product-accessories">
                            <a href="/en/product/accessories/flt-djmtour1/flight-case/overview" class="item item-1">
                                <span class="visual-wrap bg-none">
                                    <img src="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/accessories/flt-djmtour1/flt-djm-tour1-main.png?h=170&amp;w=310&amp;hash=AADA7A5F897E744C6517A7F0432B74B16A272F39">
                                </span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <a href="/en/product/mixer/djm-tour1/black/related-products/" class="ghostbtn ghostbtn-forw ghostbtn-light"><span class="text">See all</span></a>

    </div>
</div>

