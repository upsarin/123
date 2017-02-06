<div class="experience-wrap">
    <section class="experience">
        <div class="image image-fx image-fx-1">
            <div class="bg-adapt">
                <img style="display: block;" src='https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/experience/homepage-ddj-sz2-3.jpg?h=1020&amp;w=1280&amp;la=en&amp;hash=A37FA56CCD8A9BDD9AC7C03F8E68FD6086415888' alt='Homepage-ddj-sz2-3' />
                <span data-mq="xs" data-srcset="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/experience/homepage-ddj-sz2-3.jpg?h=480&amp;w=640&amp;hash=5120A22A02F36A477B749735668E78C5E0D518DF"></span>
                <span data-mq="sm" data-srcset="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/experience/homepage-ddj-sz2-3.jpg?h=600&amp;w=800&amp;hash=BE53CFA41B4F33BDC9C45A2BB59B298C410004EF"></span>
                <span data-mq="md" data-srcset="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/experience/homepage-ddj-sz2-3.jpg?h=768&amp;w=1024&amp;hash=C202A166F1870C382356B0DAAA164CEA603D8C44"></span>
                <span data-mq="lg" data-srcset="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/experience/homepage-ddj-sz2-3.jpg"></span>
            </div>
            <div class="image-fx-overlay"></div>
        </div>
        <div class="wheel"></div>
        <a href="/product/controller/ddj-sz2/black/overview/" class="body">
            <div class="in">
                <h1 class="quote"><span class="ellipsis">Хочешь быть настоящим Dj - Мы поможем!<br>Просто запишись на пробное бесплатное занятие</span></h1>
                <span class="ghostbtn ghostbtn-large ghostbtn-forw ghostbtn-light"><span class="text">Подать заявку</span></span>
            </div>
        </a>
    </section>
    <nav class="productcat-nav">
        <ul>
            <li>
                <a href='/contacts/' >                                <span class="text">Контакты</span>
                    <span class="image"><img src='https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/players.png?h=256&amp;w=400&amp;la=en&amp;hash=8C5DF8DD2CF7C891FD0C34363773C3399B009082' alt='players' /></span>
                </a>                        </li>
            <li>
                <a href='/courses/' >                                <span class="text">Курсы</span>
                    <span class="image"><img src='https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/mixers.png?h=256&amp;w=400&amp;la=en&amp;hash=E6F24736A4281A2CD6E5D0FED807D313983F0794' alt='mixers' /></span>
                </a>                        </li>
            <li>
                <a href='/services/' >                                <span class="text">Услуги</span>
                    <span class="image"><img src='https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/controllers.png?h=256&amp;w=400&amp;la=en&amp;hash=7C6EA5011D7DC5CCB8F3F5B1C2D646901F99F754' alt='controllers' /></span>
                </a>                        </li>
            <li>
                <a href='/apply/' >                                <span class="text">Подать заявку</span>
                    <span class="image"><img src='https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/navigation/other.png?h=256&amp;w=400&amp;la=en&amp;hash=3FB8B51FFD93CA67A2DA9190D4455A83CF3365A4' alt='other' /></span>
                </a>                        </li>
        </ul>
    </nav>
</div>
<div class="bg-experience">

    <section class="section news-featured padding-top-0 bg-dark">
        <div class="container">
            <h2 class="h2 light">
                НОВОСТИ
            </h2>
            <div class="row equalizer" data-equalizer-watch=".box">
                <div class="slider">
                    <?
                     $array['id'] = "100";
                     $array['content']['content'] = Element::GetList($array, $array['filter'], $limit="6");
                    ?>
                    <?if(count($array['content']['content']) > 0){?>
                    <?foreach($array['content']['content'] as $element){?>

                        <?
                         $filter = array("content_id" => $element['id']);
                         $images = Element::SelectAll('files', $filter, null, null);
                        ?>
                        <section class="news-feature medium">
                            <a class="box" href="/news/detail/<?=$element['alias']?>/">
                                        <span class="date">

                                        </span>
                                <? if(count($images)) { ?>
                                    <picture class="image" style="background-image: url('/<?=$images[0]['path']?>?mh=343&amp;c=1&amp;cw=413&amp;hash=C72DA59FA9FD9AEBBA7F39D247171FA4ED6D4A8B');">
                                <? } else { ?>
                                    <picture class="image" style="background-image: url('/css/images/logo.png?mh=343&amp;c=1&amp;cw=413&amp;hash=C72DA59FA9FD9AEBBA7F39D247171FA4ED6D4A8B');">
                                <? } ?>
                                        <div class="img-adapt">
                                        </div>
                                    </picture>
                                <span class="body">
                                        <h2 class="title"><?=$element['title']?></h2>
                                        <span class="desc">

                                        </span>
                                    </span>
                                <span class="tilebtn"><i class="ico"></i></span>
                            </a>
                        </section>
                    <? } ?>
                    <? } ?>

                </div>
            </div>
            <a href="/news/" class="ghostbtn ghostbtn-forw ghostbtn-light"><span class="text">Узнать больше...</span></a>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="h2 light">Featured Products</h2>
            <div class="row product-teasers">
                <div class="col-sm-6">
                    <div class="product-teaser">
                        <a href="/product/controller/ddj-rx/black/overview/">
                            <div class="image">
                                <img src='https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/controller/ddj-rx/ddj-rx-headerimg.jpg?h=480&amp;w=1600&amp;la=en&amp;hash=B25AAF07D9622254A2D747643C1B727AE5F33DF4' alt='DDJ-RX' />
                            </div>
                            <div class="body">
                                <h3 class="name">DDJ-RX</h3>
                                <p class="desc ellipsis" style="word-wrap: break-word;">Professional 4-channel controller for rekordbox dj</p>
                                <span class="ghostbtn ghostbtn-forw ghostbtn ghostbtn-light"><span class="text">Find out more</span></span>
                            </div>
                        </a>
                        <a data-start-at="0"
                           data-seekbar="true"
                           data-volumebar="true"
                           data-autoplay="true"
                           data-video="rIkSHaJwCH4"
                           data-title="DDJ-RX"
                           class="controlbtn trigger__open-overlayer video-player"
                           href="https://www.youtube.com/watch?v=rIkSHaJwCH4"
                           style=""><i class="ico"><span class="sr-only">Play</span></i></a>
                    </div>
                </div>                <div class="col-sm-6">
                    <div class="product-teaser">
                        <a href="/product/player/xdj-700/black/overview/">
                            <div class="image">
                                <img src='https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/player/xdj-700/xdj-700-header-img.jpg?h=480&amp;w=1600&amp;la=en&amp;hash=F2E617AAAA99A74C5C375D714DD535855BA22004' alt='XDJ-700 header' />
                            </div>
                            <div class="body">
                                <h3 class="name">XDJ-700</h3>
                                <p class="desc ellipsis" style="word-wrap: break-word;">rekordbox-ready, compact digital deck</p>
                                <span class="ghostbtn ghostbtn-forw ghostbtn ghostbtn-light"><span class="text">Find out more</span></span>
                            </div>
                        </a>
                        <a data-start-at="0"
                           data-seekbar="true"
                           data-volumebar="true"
                           data-autoplay="true"
                           data-video="4xPteW07WWI"
                           data-title="XDJ-700"
                           class="controlbtn trigger__open-overlayer video-player"
                           href="https://www.youtube.com/watch?v=4xPteW07WWI"
                           style=""><i class="ico"><span class="sr-only">Play</span></i></a>
                    </div>
                </div>            </div>
        </div>
    </section>
    <section class="hero hero-with-ghostbtn">
        <div class="image bg-adapt">
            <a data-mq="xs" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/controller/ddj-rzx/ddj-rzx-full-width.jpg?w=768&amp;la=en"></a>
            <a data-mq="sm" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/controller/ddj-rzx/ddj-rzx-full-width.jpg?w=992&amp;la=en"></a>
            <a data-mq="md" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/controller/ddj-rzx/ddj-rzx-full-width.jpg?w=1200&amp;la=en"></a>
            <a data-mq="lg" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/products/controller/ddj-rzx/ddj-rzx-full-width.jpg?la=en"></a>
        </div>
        <div class="content">
            <div class="container">
                <div class="head">
                    <p class="name">The DDJ-RZX</p>
                    <p class="desc">Our new controller with full control over the new video plus plack for rekordbox dj.</p>
                </div>
                <div>
                    <a href="/#" class="controlbtn trigger__open-overlayer video-player" data-title="DDJ-RZX &amp; rekordbox video Official Introduction" data-video="B7GBhSwd-GA" data-autoplay="true" data-volumebar="true" data-seekbar="true" data-volume="100" data-start-at="0">
                        <em class="ico"><span class="sr-only">Play</span></em>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="h2 light">In the mix</h2>
            <div class="row row-full">
                <div class="col">
                    <div class="krossbanner">
                        <div class="head image-fx ">
                            <div class="bg-adapt">
                                <a data-mq="xs" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/rekordbox_banner2.jpg?mh=210&amp;w=640&amp;hash=F5038710554AB40206AE0F4299D20F46D22B8551"></a>
                                <a data-mq="sm" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/rekordbox_banner2.jpg?mh=210&amp;w=640&amp;hash=F5038710554AB40206AE0F4299D20F46D22B8551"></a>
                                <a data-mq="md" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/rekordbox_banner2.jpg?mh=210&amp;w=900&amp;hash=0EEE356F98537E5EF56737277ECE65B9289C414C"></a>
                                <a data-mq="lg" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/rekordbox_banner2.jpg?h=267&amp;w=1266&amp;hash=69919DFDF212F6142C471ECBACAEF7470FA21336"></a>
                            </div>
                            <div class="image-fx-overlay"></div>
                        </div>
                        <a href='http://rekordbox.com/en/' target='_blank' title='rekordbox.com' >                                <div class="body">
                                <p class="ellipsis"><p><strong>The perfect platform to perform.</strong></p>
                                <p>rekordbox makes DJing creative and hassle-free, helping you manage your music, prepare sets, edit playlists on the fly, and review your performances.</p></p>
                            </div>
                            <span class="tilebtn"><span class="ico icon-tilebtn-more"><span class="sr-only">More</span></span></span>
                        </a>                        </div>
                </div>
                <div class="col">
                    <div class="krossbanner">
                        <div class="head image-fx image-fx-6">
                            <div class="bg-adapt">
                                <a data-mq="xs" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/studiomonitorbanner24.jpg?mh=210&amp;w=640&amp;hash=A42EAC839CEDCDB34B7839CF640252854C6B48FD"></a>
                                <a data-mq="sm" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/studiomonitorbanner24.jpg?mh=210&amp;w=640&amp;hash=A42EAC839CEDCDB34B7839CF640252854C6B48FD"></a>
                                <a data-mq="md" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/studiomonitorbanner24.jpg?mh=210&amp;w=900&amp;hash=305270D5B347622B6659A5E4FACF11011F2F9786"></a>
                                <a data-mq="lg" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/studiomonitorbanner24.jpg?h=267&amp;w=1266&amp;hash=AB847624C88BBFDFF310C150B40D314CCBAAC868"></a>
                            </div>
                            <div class="image-fx-overlay"></div>
                        </div>
                        <a href='http://pioneerproaudio.com/en/studiomonitors/index.html' target='_blank' title='Pioneer Pro Audio' >                                <div class="body">
                                <p class="ellipsis"><p><strong>Studio Monitors</strong></p>
                                <p>Clean sound reproduction and ultimate comfort for producers. This series faithfully reproduces audio across the frequencies.</p></p>
                            </div>
                            <span class="tilebtn"><span class="ico icon-tilebtn-more"><span class="sr-only">More</span></span></span>
                        </a>                        </div>
                </div>
                <div class="col">
                    <div class="krossbanner">
                        <div class="head image-fx image-fx-1">
                            <h3>Pioneer Professional Audio</h3>
                            <div class="bg-adapt">
                                <a data-mq="xs" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/proaudio_banner2.jpg?mh=210&amp;w=640&amp;hash=80F9C000DA8668327835556E64B6690F06CB2DD1"></a>
                                <a data-mq="sm" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/proaudio_banner2.jpg?mh=210&amp;w=640&amp;hash=80F9C000DA8668327835556E64B6690F06CB2DD1"></a>
                                <a data-mq="md" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/proaudio_banner2.jpg?mh=210&amp;w=900&amp;hash=64485B26DC1A15C2618920C61112C2D4DC1A8810"></a>
                                <a data-mq="lg" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/proaudio_banner2.jpg?h=267&amp;w=1266&amp;hash=4D3CC27C501BFCBBA0F826730CDF7F1CB7BAECD1"></a>
                            </div>
                            <div class="image-fx-overlay"></div>
                        </div>
                        <a href='http://pioneerproaudio.com/en/index.html' target='_blank' title='Pioneer Pro Audio' >                                <div class="body">
                                <p class="ellipsis"><p><strong>Professional Audio</strong></p>
                                <p>The powerful combination of innovative technology and dance industry expertise delivers the best dance music sound to clubbers all over the world.</p></p>
                            </div>
                            <span class="tilebtn"><span class="ico icon-tilebtn-more"><span class="sr-only">More</span></span></span>
                        </a>                        </div>
                </div>
                <div class="col">
                    <div class="krossbanner">
                        <div class="head image-fx image-fx-6">
                            <div class="bg-adapt">
                                <a data-mq="xs" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/kuvo_banner.jpg?mh=210&amp;w=640&amp;hash=19C72E3E80FE3CAD7FBCE5D07539EB7FC0413B35"></a>
                                <a data-mq="sm" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/kuvo_banner.jpg?mh=210&amp;w=640&amp;hash=19C72E3E80FE3CAD7FBCE5D07539EB7FC0413B35"></a>
                                <a data-mq="md" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/kuvo_banner.jpg?mh=210&amp;w=900&amp;hash=78FDA37668889F22AB134BF8DD9B3A7EF0826527"></a>
                                <a data-mq="lg" href="https://pdj-ecom-cdn.azureedge.net/-/media/pioneerdj/images/grooving/kuvo_banner.jpg?h=267&amp;w=1266&amp;hash=57503E434D503CB220032E46BDA6BEA88DB2CFB6"></a>
                            </div>
                            <div class="image-fx-overlay"></div>
                        </div>
                        <a href='http://kuvo.com/' target='_blank' title='KUVO' >                                <div class="body">
                                <p class="ellipsis"><p><strong>The clubbing connection</strong></p>
                                <p>Thousands of DJs and clubs share their latest set lists and tracks on KUVO. Join the community to get live set info, discover new music, and connect with other clubbers.</p></p>
                            </div>
                            <span class="tilebtn"><span class="ico icon-tilebtn-more"><span class="sr-only">More</span></span></span>
                        </a>                        </div>
                </div>
            </div>
        </div>
    </section>

</div>