<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>COMOSYSTEM For CMS</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">
    <!-- ================== BASE CSS STYLE ================== -->
    <link rel="stylesheet" href="{{asset('public/como/cms/base/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/como/cms/base/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/como/cms/base/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('public/como/cms/base/css/font-awesome.min.css')}}">
    <!-- ================== / BASE CSS STYLE ================== -->

    <!-- ================== PAGE LEVEL STYLE ================== -->
    <link rel="stylesheet" href="{{asset('public/como/cms/css/page_cms.css')}}">
    <link rel="stylesheet" href="{{asset('public/como/cms/css/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('public/como/cms/css/swiper.css')}}">
    <!-- ================== / PAGE LEVEL STYLE ================== -->

    <!-- ================== BASE JS ================== -->
    <script src="{{asset('public/como/cms/base/js/plugins/pace.min.js')}}"></script>
    <script src="{{asset('public/como/cms/base/js/jquery/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('public/como/cms/base/js/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
    <script src="{{asset('public/como/cms/base/js/jquery/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/como/cms/base/js/jquery/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('public/como/cms/base/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/como/cms/base/js/admin_common.js')}}"></script>
    <!-- ================== / BASE JS ================== -->
</head>
<body>
<!-- #page-loader 页面加载进度条 -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- / #page-loader -->

<!-- .ajax-loader ajax加载进度条 -->
<div class="ajax-loader fade"><span class="spinner spinner-small"></span></div>
<!-- / .ajax-loader ajax -->

<div id="page-container" class="fade page-header-fixed page-without-sidebar">
    <!-- #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <span class="navbar-brand"><strong>COMO</strong>SYSTEM</span>
                <!-- .breadcrumb 全局面包屑 -->
                <ul class="breadcrumb pull-right hidden-xs">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">一级导航<b
                                    class="caret m-l-3"></b></a>
                        <ul class="dropdown-menu animated fast fadeInDown">
                            <li class="active"><a href="javascript:;">一级导航</a></li>
                            <li><a href="javascript:;">一级导航</a></li>
                            <li><a href="javascript:;">一级导航</a></li>
                            <li><a href="javascript:;">一级导航</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">二级导航<b
                                    class="caret m-l-3"></b></a>
                        <ul class="dropdown-menu animated fast fadeInDown">
                            <li class="active"><a href="javascript:;">二级导航</a></li>
                            <li><a href="javascript:;">二级导航</a></li>
                            <li><a href="javascript:;">二级导航</a></li>
                            <li><a href="javascript:;">二级导航</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">三级详情<b
                                    class="caret m-l-3"></b></a>
                        <ul class="dropdown-menu animated fast fadeInDown">
                            <li class="active"><a href="javascript:;">三级详情</a></li>
                            <li><a href="javascript:;">三级详情</a></li>
                            <li><a href="javascript:;">三级详情</a></li>
                            <li><a href="javascript:;">三级详情</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- / .breadcrumb 全局面包屑 -->

                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('public/como/cms/images/user-como.png')}}" alt="">
                        <span class="hidden-xs">Administrator</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fast fadeInDown">
                        <li class="arrow"></li>
                        <li><a href="javascript:;">预览首页</a></li>
                        <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> 用户咨询</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">退出登陆</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- / #header -->

    <!-- #content 内容区域 -->
    <div id="content" class="content">
        <div class="page-header">
            <div class="clearfix">
                <h1>
                    <a class="text-ellipsis" href="#">简介</a>
                    <span class="label label-default f-s-11 f-w-300">已发布</span>
                    <span class="label label-default f-s-11 f-w-300">有链接</span>
                </h1>
                <!-- .breadcrumb 操作时间提示 -->
                <ul class="breadcrumb pull-right hidden-xs">
                    <li>创建：2015-07－08 09:37</li>
                    <li>上次更新：2015-07－07 15:42</li>
                </ul>
                <!-- / .breadcrumb 操作时间提示 -->
            </div>
        </div>

        <!-- .panel CMS编辑 -->
        <div class="panel panel-border">
            <div class="panel-heading">
                <h4 class="panel-title">页面编辑</h4>
            </div>
            <div class="panel-body panel-body-psa p-0">
                <div class="container container-psa-front">

                </div>
            </div>
        </div>
        <!-- / .panel CMS编辑 -->
    </div>
    <!-- / .content 内容区域 -->

    <div class="bg-black text-center p-15">
        <div class="btn-toolbar inline-block-middle">
            <a class="btn btn-sm btn-success" href="#">完成</a>
        </div>
    </div>

    <!-- #footer Copyright -->
    <div id="footer" class="footer">
        <span>界面语言</span>
        <div class="dropup">
            <button type="button" class="btn btn-sm btn-white btn-block has-caret" data-toggle="dropdown">简体中文（默认）<b
                        class="caret"></b></button>
            <ul class="dropdown-menu animated fast fadeInUp">
                <li class="active"><a href="#">简体中文（默认）</a></li>
                <li><a href="#">英文</a></li>
                <li><a href="#">日文</a></li>
            </ul>
        </div>
        <small class="pull-right">Copyright &copy; 2016 COMO NETWORK. All rights reserved.</small>
    </div>
    <!-- / #footer Copyright -->
</div>

<script>
    $(document).ready(function () {
        App.init();
    });
</script>

<!-- ================== PAGE LEVEL JS ================== -->
<script src="{{asset('public/como/cms/js/jquery-plugins/fancybox.pack.js')}}"></script>
<script>
    //fancybox to images
    $('.cms-item-image .is-image, .cms-item-media-thumbnail .is-image, .cms-item-media-swiper .is-image').fancybox({
        padding: 0,
        helpers: {
            title: {
                type: 'outside'
            }
        },
        beforeLoad: function () {
            var imgextension = $(this.element).attr("data-imgextension");
            var imgsize = $(this.element).attr("data-imgsize");
            var lngDescription = $(this.element).attr("data-lng");

            if (imgextension !== undefined) {
                imgextension;
            } else {
                imgextension = "";
            }
            if (imgsize !== undefined) {
                imgsize;
            } else {
                imgsize = "";
            }

            if (lngDescription !== undefined) {
                lngDescription;
            } else {
                lngDescription = "";
            }
            if (imgextension.length > 0 || imgsize.length > 0) {
                var extensionAndSize = " (" + imgextension + ", " + imgsize + ")";
            } else {
                var extensionAndSize = "";
            }
            var trackingCode = $(this.element).attr("data-etrackerCode");
            if (trackingCode != undefined && trackingCode.length > 0) {
                trackingCode = trackingCode.replace(/'/g, "\"");
                trackingCode = trackingCode.replace(/\\\"/g, "\'");
            } else {
                trackingCode = "";
            }
            // Prüfung ob Browser HTML5-Attribut (download) unterstützt
            // (nicht bei Chrome u. Opera da Probleme mit Lightbox!)
            var agent = navigator.userAgent.toLowerCase();
            if (agent.indexOf("opr") > -1 || agent.indexOf("chrome") > -1) {
                this.title = this.title + '<div class="fancybox-download-bar"><a href="' + this.href + '" target="_blank"' + trackingCode + '>' + lngDescription + '</a>' + extensionAndSize + '</div>';
            } else {
                var a = document.createElement("a");
                if (typeof a.download != "undefined" && !this.href.startsWith("http")) {
                    // Browser unterstützt HTML5-Attribut
                    this.title = this.title + '<a href="' + this.href + '" target="_blank"' + trackingCode + '>' + lngDescription + '</a>' + extensionAndSize + '</div>';
                } else {
                    // Lösung via PHP-Script
                    this.title = this.title + '<a href="/tools/web/fileDownloader.php?fileUrl=' + this.href + '" ' + trackingCode + '>' + lngDescription + '</a>' + extensionAndSize + '</div>';
                }
            }
        }
    });

    //fancybox to video
    $('.cms-item-image .is-video, .cms-item-media-thumbnail .is-video, .cms-item-media-swiper .is-video').fancybox({
        openEffect: 'none',
        closeEffect: 'none',
        prevEffect: 'none',
        nextEffect: 'none',
        padding: 0,
        wrapCSS: 'fancybox-type-video',
        type: 'iframe',
        scrolling: 'no'
    });
</script>
<script src="{{asset('public/como/cms/js/jquery-plugins/swiper-3.x.min.js')}}"></script>
<script>
    $('.swiper-container.swiper-cms').each(function () {
        $(this).swiper({
            pagination: $(this).siblings('.swiper-pagination')[0],
            paginationClickable: true,
            nextButton: $(this).siblings('.swiper-next'),
            prevButton: $(this).siblings('.swiper-prev'),
            spaceBetween: 20,
            breakpoints: {
                //当宽度小于等于
                768: {
                    spaceBetween: 15
                },
                1024: {
                    spaceBetween: 20
                },
                1200: {
                    spaceBetween: 20
                }
            }
        });
    });
</script>
<!-- ================== / PAGE LEVEL JS ================== -->
</body>
</html>
