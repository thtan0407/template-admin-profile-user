<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="../../../../global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="../../../../global_assets/js/plugins/loaders/pace.min.js"></script>
    <script src="../../../../global_assets/js/core/libraries/jquery.min.js"></script>
    <script src="../../../../global_assets/js/core/libraries/bootstrap.min.js"></script>
    <script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="../../../../global_assets/js/demo_pages/dashboard.js"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-main-toggle').on('click', function (e) {
            console.log(1);
            e.preventDefault();

            // Toggle min sidebar class
            $('body').toggleClass('sidebar-xs');
        });
    })
</script>
    <script src="assets/js/app.js"></script>
    <!-- /theme JS files -->


    <link href="assets/lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashforge.dashboard.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">

</head>

<body class="sidebar-xs">

<!-- Main navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="../../../../global_assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="visible-xs-inline-block position-right">Git updates</span>
                    <span class="badge bg-warning-400">9</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        Git updates
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-sync"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-350">
                        <li class="media">
                            <div class="media-left">
                                <a href="#"
                                   class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                <div class="media-annotation">4 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#"
                                   class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-commit"></i></a>
                            </div>

                            <div class="media-body">
                                Add full font overrides for popovers and tooltips
                                <div class="media-annotation">36 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-branch"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span>
                                branch
                                <div class="media-annotation">2 hours ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#"
                                   class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-merge"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span
                                        class="text-semibold">Dev</span> branches
                                <div class="media-annotation">Dec 18, 18:36</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#"
                                   class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i
                                            class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Have Carousel ignore keyboard events
                                <div class="media-annotation">Dec 12, 05:46</div>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All activity"><i
                                    class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
        </ul>

        <p class="navbar-text"><span class="label bg-success">Online</span></p>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown language-switch">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../../../../global_assets/images/flags/gb.png" class="position-left" alt="">
                    English
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="deutsch"><img src="../../../../global_assets/images/flags/de.png" alt=""> Deutsch</a>
                    </li>
                    <li><a class="ukrainian"><img src="../../../../global_assets/images/flags/ua.png" alt=""> Українська</a>
                    </li>
                    <li><a class="english"><img src="../../../../global_assets/images/flags/gb.png" alt=""> English</a>
                    </li>
                    <li><a class="espana"><img src="../../../../global_assets/images/flags/es.png" alt=""> España</a>
                    </li>
                    <li><a class="russian"><img src="../../../../global_assets/images/flags/ru.png" alt=""> Русский</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="visible-xs-inline-block position-right">Messages</span>
                    <span class="badge bg-warning-400">2</span>
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Messages
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body">
                        <li class="media">
                            <div class="media-left">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                     class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">5</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">James Alexander</span>
                                    <span class="media-annotation pull-right">04:58</span>
                                </a>

                                <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                     class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">4</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Margo Baker</span>
                                    <span class="media-annotation pull-right">12:16</span>
                                </a>

                                <span class="text-muted">That was something he was unable to do because...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img
                                        src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Jeremy Victorino</span>
                                    <span class="media-annotation pull-right">22:48</span>
                                </a>

                                <span class="text-muted">But that would be extremely strained and suspicious...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img
                                        src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Beatrix Diaz</span>
                                    <span class="media-annotation pull-right">Tue</span>
                                </a>

                                <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img
                                        src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Richard Vango</span>
                                    <span class="media-annotation pull-right">Mon</span>
                                </a>

                                <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All messages"><i
                                    class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
                    <span>Victoria</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i
                                    class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-fixed">
            <div class="sidebar-content sidebar-category-visible">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img
                                        src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Victoria Baker</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i>
                            </li>
                            <li class="active"><a href="index.html"><i class="icon-home4"></i>
                                    <span>Dashboard</span></a></li>
                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>
                                <ul>
                                    <li><a href="layout_navbar_fixed.html">Fixed navbar</a></li>
                                    <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li>
                                    <li><a href="layout_sidebar_fixed_native.html">Fixed sidebar native scroll</a></li>
                                    <li><a href="layout_navbar_hideable.html">Hideable navbar</a></li>
                                    <li><a href="layout_navbar_hideable_sidebar.html">Hideable &amp; fixed sidebar</a>
                                    </li>
                                    <li><a href="layout_footer_fixed.html">Fixed footer</a></li>
                                    <li class="navigation-divider"></li>
                                    <li><a href="boxed_default.html">Boxed with default sidebar</a></li>
                                    <li><a href="boxed_mini.html">Boxed with mini sidebar</a></li>
                                    <li><a href="boxed_full.html">Boxed full width</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-copy"></i> <span>Layouts</span></a>
                                <ul>
                                    <li><a href="../../../../layout_1/LTR/default/full/index.html" id="layout1">Layout 1
                                            <span class="label bg-warning-400">Current</span></a></li>
                                    <li><a href="../../../../layout_2/LTR/default/full/index.html" id="layout2">Layout
                                            2</a></li>
                                    <li><a href="../../../../layout_3/LTR/default/full/index.html" id="layout3">Layout
                                            3</a></li>
                                    <li><a href="../../../../layout_4/LTR/default/full/index.html" id="layout4">Layout
                                            4</a></li>
                                    <li><a href="../../../../layout_5/LTR/default/full/index.html" id="layout5">Layout
                                            5</a></li>
                                    <li class="disabled"><a href="../../../../layout_6/LTR/default/full/index.html"
                                                            id="layout6">Layout 6 <span class="label label-transparent">Coming soon</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-droplet2"></i> <span>Color system</span></a>
                                <ul>
                                    <li><a href="colors_primary.html">Primary palette</a></li>
                                    <li><a href="colors_danger.html">Danger palette</a></li>
                                    <li><a href="colors_success.html">Success palette</a></li>
                                    <li><a href="colors_warning.html">Warning palette</a></li>
                                    <li><a href="colors_info.html">Info palette</a></li>
                                    <li class="navigation-divider"></li>
                                    <li><a href="colors_pink.html">Pink palette</a></li>
                                    <li><a href="colors_violet.html">Violet palette</a></li>
                                    <li><a href="colors_purple.html">Purple palette</a></li>
                                    <li><a href="colors_indigo.html">Indigo palette</a></li>
                                    <li><a href="colors_blue.html">Blue palette</a></li>
                                    <li><a href="colors_teal.html">Teal palette</a></li>
                                    <li><a href="colors_green.html">Green palette</a></li>
                                    <li><a href="colors_orange.html">Orange palette</a></li>
                                    <li><a href="colors_brown.html">Brown palette</a></li>
                                    <li><a href="colors_grey.html">Grey palette</a></li>
                                    <li><a href="colors_slate.html">Slate palette</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
                                <ul>
                                    <li><a href="../seed/horizontal_nav.html">Horizontal navigation</a></li>
                                    <li><a href="../seed/1_col.html">1 column</a></li>
                                    <li><a href="../seed/2_col.html">2 columns</a></li>
                                    <li>
                                        <a href="#">3 columns</a>
                                        <ul>
                                            <li><a href="../seed/3_col_dual.html">Dual sidebars</a></li>
                                            <li><a href="../seed/3_col_double.html">Double sidebars</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../seed/4_col.html">4 columns</a></li>
                                    <li>
                                        <a href="#">Detached layout</a>
                                        <ul>
                                            <li><a href="../seed/detached_left.html">Left sidebar</a></li>
                                            <li><a href="../seed/detached_right.html">Right sidebar</a></li>
                                            <li><a href="../seed/detached_sticky.html">Sticky sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../seed/layout_boxed.html">Boxed layout</a></li>
                                    <li class="navigation-divider"></li>
                                    <li><a href="../seed/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
                                    <li><a href="../seed/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a>
                                    </li>
                                    <li><a href="../seed/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
                                    <li><a href="../seed/layout_fixed.html">Fixed layout</a></li>
                                </ul>
                            </li>
                            <li><a href="changelog.html"><i class="icon-list-unordered"></i> <span>Changelog <span
                                                class="label bg-blue-400">2.0</span></span></a></li>
                            <li><a href="../../../RTL/default/full/index.html"><i class="icon-width"></i> <span>RTL version</span></a>
                            </li>
                            <!-- /main -->
                            <!-- /page kits -->

                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->