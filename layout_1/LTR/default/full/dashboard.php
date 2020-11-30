<?php require_once('head.php'); ?>
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ul>

        </div>
    </div>
    <!-- /page header -->


    <section class="content theme-dashboard">
        <div class="container">
            <div class="d-flex border padding-custom bg-white align-items-center justify-content-between mg-xl-b-30">
                <div>
                    <h4 class="mg-b-0 tx-spacing--1 theme-dashboard">
                        Thống kê
                    </h4>
                </div>
                <div class="d-md-block">

                    <div class="date-filter d-flex justify-content-center flex-wrap theme-dashboard">
                        <div class="form-group">
                            <select class="custom-select form-control">
                                <option value="" disabled>Chọn chi nhánh</option>
                                <option value="all" selected>Tất cả chi nhánh</option>
                                <option value="1">Yên Lãng</option>
                                <option value="2">Huỳnh Lan Khánh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row row-xs">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body theme-dashboard">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Tỉ lệ chuyển
                            đổi</h6>
                        <div class="d-flex d-lg-block d-xl-flex align-items-end">
                            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">11.32%</h3>
                            <p class="tx-11 tx-color-03 mg-b-0"><span class="tx-medium tx-success">1.2% <i
                                            class="icon-arrow-up7"></i></span> so tháng trước</p>
                        </div>
                        <div class="chart-three">
                            <div id="flotChart3" class="flot-chart ht-30"></div>
                        </div><!-- chart-three -->
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
                    <div class="card card-body theme-dashboard">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Học viên mới</h6>
                        <div class="d-flex d-lg-block d-xl-flex align-items-end">
                            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">3,137</h3>
                            <p class="tx-11 tx-color-03 mg-b-0"><span class="tx-medium tx-danger">0.7% <i
                                            class="icon-arrow-down7"></i></span> so tháng trước</p>
                        </div>
                        <div class="chart-three">
                            <div id="flotChart4" class="flot-chart ht-30"></div>
                        </div><!-- chart-three -->
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
                    <div class="card card-body theme-dashboard">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Lớp học</h6>
                        <div class="d-flex d-lg-block d-xl-flex align-items-end">
                            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">1,234</h3>
                            <p class="tx-11 tx-color-03 mg-b-0"><span class="tx-medium tx-danger">0.3% <i
                                            class="icon-arrow-down7"></i></span> so tháng trước</p>
                        </div>
                        <div class="chart-three">
                            <div id="flotChart5" class="flot-chart ht-30"></div>
                        </div><!-- chart-three -->
                    </div>
                </div><!-- col -->
                <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
                    <div class="card card-body theme-dashboard">
                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Ca học</h6>
                        <div class="d-flex d-lg-block d-xl-flex align-items-end">
                            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">1,650</h3>
                            <p class="tx-11 tx-color-03 mg-b-0"><span class="tx-medium tx-success">2.1% <i
                                            class="icon-arrow-up7"></i></span> so tháng trước</p>
                        </div>
                        <div class="chart-three">
                            <div id="flotChart6" class="flot-chart ht-30"></div>
                        </div><!-- chart-three -->
                    </div>
                </div><!-- col -->
                <div class="col-lg-8 col-xl-7 mg-t-10">
                    <div class="card theme-dashboard">
                        <div class="card-header pd-y-20 d-flex align-items-center justify-content-between">
                            <h6 class="mg-b-0">Doanh thu</h6>
                            <ul class="list-inline d-flex mg-b-0">
                                <li class="list-inline-item d-flex align-items-center filter-time active"
                                    data-time="week">
                                    <span class="d-block wd-10 ht-10 bg-df-3 rounded mg-r-5"></span>
                                    <span class="tx-sans tx-uppercase tx-12 tx-medium tx-color-03">Tuần</span>
                                </li>
                                <li class="list-inline-item d-flex align-items-center mg-l-5 filter-time"
                                    data-time="month">
                                    <span class="d-block wd-10 ht-10 bg-df-3 rounded mg-r-5"></span>
                                    <span class="tx-sans tx-uppercase tx-12 tx-medium tx-color-03">Tháng</span>
                                </li>
                                <li class="list-inline-item d-flex align-items-center mg-l-5 filter-time"
                                    data-time="year">
                                    <span class="d-block wd-10 ht-10 bg-df-3 rounded mg-r-5"></span>
                                    <span class="tx-sans tx-uppercase tx-12 tx-medium tx-color-03">Năm</span>
                                </li>
                            </ul>
                        </div><!-- card-header -->
                        <div class="card-body pos-relative pd-0">
                            <div class="pos-static pd-t-20 pd-l-20 pd-b-20 wd-xl-100p z-index-10">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="tx-normal tx-rubik tx-spacing--2 mg-b-5 chart-revenue-total">
                                            114,000,000,000 VNĐ </h3>
                                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-04 tx-semibold mg-b-10">
                                            Tổng
                                            doanh thu</h6>
                                    </div><!-- col -->
                                    <div class="col-sm-6">
                                        <h3 class="tx-normal tx-rubik tx-spacing--2 mg-b-5"><span
                                                class="tx-medium tx-success">15% <i
                                                    class="icon-arrow-up7"></i></span>
                                        </h3>
                                        <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-04 tx-semibold mg-b-10">
                                            Tăng
                                            trưởng</h6>
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div>

                            <div class="revenue-chart pd-r-20 pd-l-20 pd-b-20 ">
                                <canvas id="revenueChart" class="" height="230"></canvas>
                            </div><!-- chart-one -->
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                <div class="col-lg-4 col-xl-5 mg-t-10">
                    <div class="card theme-dashboard">
                        <div class="card-header pd-t-10 pd-b-10 ">
                            <h6 class="mg-b-5">Học viên</h6>
                            <p class="tx-12 tx-color-03 mg-b-0">Số lượng học viên</p>
                        </div><!-- card-header -->
                        <div class="card-body pd-20">
                            <div class="chart-two mg-b-20">
                                <canvas id="flotChart2" class="flot-chart"></canvas>
                            </div><!-- chart-two -->
                            <div class="row theme-dashboard">
                                <div class="col-sm">
                                    <h4 class="tx-normal tx-rubik tx-spacing--1 mg-b-5">2,000</h4>
                                    <p class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-10 tx-primary">Đăng
                                        ký</p>
                                    <div class="tx-12 tx-color-03">Học viên đã đăng ký</div>
                                </div><!-- col -->
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <h4 class="tx-normal tx-rubik tx-spacing--1 mg-b-5">1,520</h4>
                                    <p class="tx-11 tx-uppercase tx-spacing-1 tx-semibold mg-b-10 tx-teal">Đang theo
                                        học</p>
                                    <div class="tx-12 tx-color-03">Học viên đang theo học.</div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>

                <div class="col-12 col-md-12 col-xl-4">
                    <div class="card theme-dashboard mg-t-10">
                        <div class="card-header pd-t-10 pd-b-10">
                            <h6 class="lh-5 mg-b-5">Học viên</h6>
                            <p class="tx-12 tx-color-03 mg-b-0">Thống kê học viên theo quận / huyện</p>
                        </div><!-- card-header -->
                        <div class="card-body pd-0">
                            <div class="chart-area-wrap">
                                <canvas id="area-chart"></canvas>
                            </div>
                        </div><!-- card-body -->
                    </div><!-- card -->

                    <div class="card theme-dashboard card-body mg-t-10">
                        <div class="media d-block d-sm-flex align-items-center">
                            <div class="d-inline-block pos-relative">
                            <span class="peity-donut"
                                  data-peity='{ "fill": ["#65e0e0","#e5e9f2"], "height": 110, "width": 110, "innerRadius": 46 }'>70,30</span>

                                <div class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="tx-rubik tx-spacing--1 mg-b-0">86%</h3>
                                    <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Tiếp tục</span>
                                </div>
                            </div>
                            <div class="media-body mg-t-20 mg-sm-t-0 mg-sm-l-20">
                                <h6 class="mg-b-5">Học viên tiếp tục</h6>
                                <p class="lh-4 tx-12 tx-color-03 mg-b-15">Tỉ lệ học viên học từ 2 khoá ở
                                    trung
                                    tâm.</p>
                                <h3 class="tx-spacing--1 mg-b-0">86 <small class="tx-13 tx-color-03">/ 100
                                        Học
                                        viên</small>
                                </h3>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </div>
                    <div class="card theme-dashboard card-body mg-t-10">
                        <div class="media d-block d-sm-flex align-items-center">
                            <div class="d-inline-block pos-relative">
                            <span class="peity-donut"
                                  data-peity='{ "fill": ["#69b2f8","#e5e9f2"], "height": 110, "width": 110, "innerRadius": 46 }'>69,31</span>

                                <div class="pos-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="tx-rubik tx-spacing--1 mg-b-0">69%</h3>
                                    <span class="tx-9 tx-semibold tx-sans tx-color-03 tx-uppercase">Hoàn thành</span>
                                </div>
                            </div>
                            <div class="media-body mg-t-20 mg-sm-t-0 mg-sm-l-20">
                                <h6 class="mg-b-5">Hoàn thành khoá học</h6>
                                <p class="lh-4 tx-12 tx-color-03 mg-b-15">Tỉ lệ học viên hoàn thành khoá
                                    học.</p>
                                <h3 class="tx-spacing--1 mg-b-0">69 <small class="tx-13 tx-color-03">/ 100
                                        Học
                                        viên</small>
                                </h3>
                            </div><!-- media-body -->
                        </div><!-- media -->
                    </div>
                    <div class="card theme-dashboard mg-t-10">
                        <div class="card-header pd-t-10 pd-b-10">
                            <h6 class="lh-4 mg-b-5">Đánh giá</h6>
                            <p class="tx-12 tx-color-03 mg-b-0">Thống kê đánh giá các bài chấm của học
                                viên.</p>
                        </div><!-- card-header -->
                        <div class="card-body pd-0">
                            <div class="pd-t-10 pd-b-15 pd-x-20 d-flex align-items-baseline">
                                <h1 class="tx-normal tx-rubik mg-b-0 mg-r-5 size-36">4.2</h1>
                                <div class="tx-16">
                                    <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                </div>
                            </div>
                            <div class="list-group list-group-flush tx-13">
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                    <strong class="tx-12 tx-rubik">5.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">4,230</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">58%</div>
                                </div>
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                    <strong class="tx-12 tx-rubik">4.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">1,416</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">24%</div>
                                </div>
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                    <strong class="tx-12 tx-rubik">3.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">980</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">16%</div>
                                </div>
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                    <strong class="tx-12 tx-rubik">2.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">401</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">8%</div>
                                </div>
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center bg-transparent">
                                    <strong class="tx-12 tx-rubik">1.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">798</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">12%</div>
                                </div>
                            </div><!-- list-group -->
                        </div><!-- card-body -->
                    </div><!-- card -->


                    <div class="card theme-dashboard mg-t-10 rate-block">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h6 class="mg-b-0">Đánh giá gần đây</h6>

                        </div>
                        <ul class="list-group list-group-flush tx-13">
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal theme-custom"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            #3232323</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">1.0</p>
                                    <small class="tx-12 tx-danger mg-b-0">Very Bad</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal theme-custom"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            #3232323</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">2.0</p>
                                    <small class="tx-12 tx-pink mg-b-0">Bad</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal theme-custom"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            #3232323</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">3.0</p>
                                    <small class="tx-12 tx-warning mg-b-0">Normal</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal theme-custom"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            [Search by
                                            username, full name or email address]</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">4.0</p>
                                    <small class="tx-12 tx-success mg-b-0">Good</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal theme-custom"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            #3232323</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">5.0</p>
                                    <small class="tx-12 tx-success mg-b-0">Excellent</small>
                                </div>
                            </li>


                        </ul>
                        <div class="card-footer theme-custom text-center tx-13">
                            <a href="" class="link-03">Xem thêm <i
                                        class=" icon-arrow-down7 mg-l-5"></i></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                    <div class="card theme-dashboard mg-t-10">
                        <div class="card-header pd-t-10 pd-b-10">
                            <h6 class="lh-5 mg-b-5">Đánh giá TVV</h6>
                            <p class="tx-12 tx-color-03 mg-b-0">Thống kê đánh giá TVV của học viên.</p>
                        </div><!-- card-header -->
                        <div class="card-body pd-0">
                            <div class="pd-t-10 pd-b-15 pd-x-20 d-flex align-items-baseline">
                                <h1 class="tx-normal tx-rubik mg-b-0 mg-r-5 size-36">4.2</h1>
                                <div class="tx-16">
                                    <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                </div>
                            </div>
                            <div class="list-group list-group-flush tx-13">
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                    <strong class="tx-12 tx-rubik">5.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">4,230</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">58%</div>
                                </div>
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                    <strong class="tx-12 tx-rubik">4.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">1,416</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">24%</div>
                                </div>
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                    <strong class="tx-12 tx-rubik">3.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">980</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">16%</div>
                                </div>
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center">
                                    <strong class="tx-12 tx-rubik">2.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">401</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">8%</div>
                                </div>
                                <div class="list-group-item pd-y-5 pd-x-20 d-flex align-items-center bg-transparent">
                                    <strong class="tx-12 tx-rubik">1.0</strong>
                                    <div class="tx-14 mg-l-10">
                                        <i class="icon-star-full2 lh-0 tx-orange"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                        <i class="icon-star-full2 lh-0 tx-gray-300"></i>
                                    </div>
                                    <div class="mg-l-auto tx-rubik tx-color-02">798</div>
                                    <div class="mg-l-20 tx-rubik tx-color-03 wd-10p text-right">12%</div>
                                </div>
                            </div><!-- list-group -->
                        </div><!-- card-body -->
                    </div><!-- card -->


                    <div class="card theme-dashboard mg-t-10 rate-block">
                        <div class="card-header theme-custom d-flex align-items-center justify-content-between">
                            <h6 class="mg-b-0">Đánh giá TVV gần đây</h6>
                        </div>
                        <ul class="list-group list-group-flush tx-13">
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            #3232323</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">1.0</p>
                                    <small class="tx-12 tx-danger mg-b-0">Very Bad</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            #3232323</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">2.0</p>
                                    <small class="tx-12 tx-pink mg-b-0">Bad</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            #3232323</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">3.0</p>
                                    <small class="tx-12 tx-warning mg-b-0">Normal</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            [Search by
                                            username, full name or email address]</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">4.0</p>
                                    <small class="tx-12 tx-success mg-b-0">Good</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pd-sm-x-20">
                                <div class="avatar d-none d-sm-block icon-rate"><span
                                            class="avatar-initial rounded-circle bg-teal"><i
                                                class=" icon-checkmark4"></i></span></div>
                                <div class="pd-sm-l-10 left-rate">
                                    <p class="tx-medium mg-b-0"><a href="#">Hoàng Lan Hương đã đánh giá bài
                                            chấm
                                            #3232323</a></p>
                                    <small class="tx-12 tx-color-03 mg-b-0">Mar 20, 2019, 10:30pm</small>
                                </div>
                                <div class="mg-l-auto text-right right-rate">
                                    <p class="tx-medium mg-b-0">5.0</p>
                                    <small class="tx-12 tx-success mg-b-0">Excellent</small>
                                </div>
                            </li>


                        </ul>
                        <div class="card-footer theme-custom text-center tx-13">
                            <a href="" class="link-03">Xem thêm <i
                                        class=" icon-arrow-down7 mg-l-5"></i></a>
                        </div><!-- card-footer -->
                    </div><!-- card -->
                </div>

                <div class="col-12 col-md-12 col-xl-8 d-flex flex-wrap">
                    <div class="card theme-dashboard col-12 mg-t-10 pd-0">
                        <div class="card-header pd-t-20 pd-b-20 d-lg-flex align-items-center justify-content-between">
                            <div class="d-md-flex justify-content-between mg-t-20 mg-sm-t-0 mg-lg-t-0 mg-sm-t-20">
                                <div class="btn-group pd-md-r-15 mg-md-b-0 d-flex">
                                    <button class="btn btn-white btn-xs active">Tuần</button>
                                    <button class="btn btn-white btn-xs">Tháng</button>
                                    <button class="btn btn-white btn-xs ">Quý</button>
                                    <button class="btn btn-white btn-xs">Năm</button>
                                </div>
                                <div class="date-filter d-flex flex-wrap justify-content-center">
                                    <div class="input-group col-sm-5 col-6">
                                        <input type="text" class="form-control datetimepicker date-only"
                                               placeholder="Từ ngày">
                                    </div>
                                    <div class="input-group col-sm-5 col-6">
                                        <input type="text" class="form-control datetimepicker date-only"
                                               placeholder="Đến ngày">
                                    </div>
                                    <div class="input-group col-sm-2 col-12 mg-t-15 mg-sm-t-0">
                                        <button type="button" class="btn btn-primary btn-block">Lọc</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- card-header -->

                        <div class="card-body d-flex">
                            <div class="col-md-12 pd-0 pd-md-r-10">
                                <div class="table__rank__wrap">
                                    <div class="table-ranking-teacher">
                                        <div class="table-responsive tableFixHead">
                                            <table class="table ranking ">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">BXH Giáo viên</th>
                                                    <th>Z-point</th>
                                                    <th>Level 1</th>
                                                    <th>Level 2</th>
                                                    <th>Level 3</th>
                                                    <th>Level 4</th>
                                                    <th>Level 5</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/1st.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/2nd.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/3rd.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="table-ranking-teacher mg-t-20">
                                        <div class="table-responsive tableFixHead">
                                            <table class="table ranking ">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">BXH Tư vấn viên</th>
                                                    <th>Z-point</th>
                                                    <th>Level 1</th>
                                                    <th>Level 2</th>
                                                    <th>Level 3</th>
                                                    <th>Level 4</th>
                                                    <th>Level 5</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/1st.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/2nd.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/3rd.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="table-ranking-teacher mg-t-20">
                                        <div class="table-responsive tableFixHead">
                                            <table class="table ranking ">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">BXH Thời gian dạy</th>
                                                    <th>Giờ dạy</th>
                                                    <th>Tổng giờ</th>
                                                    <th>Ngày vào làm</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/1st.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/2nd.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>

                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img src="assets/img/3rd.png"
                                                                                 class="rounded-circle"
                                                                                 alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>

                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar"><img
                                                                src="https://via.placeholder.com/600"
                                                                class="rounded-circle" alt=""></div>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h6 class="tx-13 mg-b-0">Dương hoàng Lan</h6>
                                                            <p class="tx-color-03 tx-11 mg-b-2">A-IELTS Get
                                                                Ready</p>
                                                            <div class="d-flex justify-content-between tx-12">
                                                            <span class="tx-12">
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 tx-orange"></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                                <i class="icon-star-full2 lh-0 "></i>
                                                            </span>
                                                            </div>
                                                        </div><!-- media-body -->
                                                    </td>
                                                    <td>30</td>
                                                    <td>12</td>
                                                    <td>12</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- card -->

                </div>

                <div class="col-lg-12 col-xl-12 mg-t-10">
                    <div class="card theme-dashboard mg-b-10">
                        <div class="card-header pd-t-20 pd-b-20 d-md-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="mg-b-5">Danh sách saler</h6>
                                <p class="tx-13 tx-color-03 mg-b-0">Thông tin saler, doanh thu theo chiến dịch</p>
                            </div>
                            <div class="d-md-flex flex-grow-1 justify-content-end">

                                <div class="d-flex flex-wrap justify-content-end">

                                    <div class="theme-dashboard search-saler flex-grow-1">
                                        <input type="text" class="form-control" id="search-saler"
                                               placeholder="Tìm kiếm saler...">
                                        <a href="javascript:;" class="search-saler-btn"><i
                                                    data-feather="search"></i></a>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="chart-on-table card-body ">
                            <div class="table-responsive">
                                <table class="table table-collapse table-chart" id="sale-viewer">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Họ tên</th>
                                        <th>Tổng doanh thu</th>
                                        <th>Số hoá đơn</th>
                                        <th>Số khách hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="row-info" data-id="1">
                                        <td class="collapse-col">
                                            <a href="javascript:;" class="toggle-collapse"><i
                                                        class="icon-plus3"></i></a>
                                        </td>
                                        <td>Khổng Tú Quỳnh</td>
                                        <td>30,000,000</td>
                                        <td>32</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="collapse-row">
                                        <td colspan="5">
                                            <div class="content-table">
                                                <div class="chart-type">
                                                    <div class="select-type">
                                                        <div
                                                                class=" d-flex flex-wrap justify-content-center">
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                       class="form-control datetimepicker date-only"
                                                                       placeholder="Từ ngày">
                                                            </div>
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                       class="form-control datetimepicker date-only"
                                                                       placeholder="Đến ngày">
                                                            </div>
                                                            <div class="input-group col-sm-2 col-12 mg-t-15 mg-sm-t-0">
                                                                <button type="button"
                                                                        class="btn btn-primary  view-chart">Xem
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-wrap">
                                                    <canvas class="chart-element" id="chart-id-1"
                                                            data-chart-id="1"></canvas>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="row-info" data-id="2">
                                        <td class="collapse-col">
                                            <a href="javascript:;" class="toggle-collapse"><i
                                                        class="icon-plus3"></i></a>
                                        </td>
                                        <td>Trương Văn Nam</td>
                                        <td>30,000,000</td>
                                        <td>32</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="collapse-row">
                                        <td colspan="5">
                                            <div class="content-table">
                                                <div class="chart-type">
                                                    <div class="select-type">

                                                        <div
                                                                class="d-flex flex-wrap justify-content-center">
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                       class="form-control datetimepicker date-only"
                                                                       placeholder="Từ ngày">
                                                            </div>
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                       class="form-control datetimepicker date-only"
                                                                       placeholder="Đến ngày">
                                                            </div>
                                                            <div class="input-group col-sm-2 col-12 mg-t-15 mg-sm-t-0">
                                                                <button type="button"
                                                                        class="btn btn-primary  view-chart">Xem
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-wrap">
                                                    <canvas class="chart-element" id="chart-id-2"
                                                            data-chart-id="2"></canvas>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="row-info" data-id="3">
                                        <td class="collapse-col">
                                            <a href="javascript:;" class="toggle-collapse"><i
                                                        class="icon-plus3"></i></a>
                                        </td>
                                        <td>Hoàng Thức</td>
                                        <td>30,000,000</td>
                                        <td>32</td>
                                        <td>38</td>
                                    </tr>
                                    <tr class="collapse-row">
                                        <td colspan="5">
                                            <div class="content-table">
                                                <div class="chart-type">
                                                    <div class="select-type">
                                                        <div
                                                                class=" d-flex flex-wrap justify-content-center">
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                       class="form-control datetimepicker date-only"
                                                                       placeholder="Từ ngày">
                                                            </div>
                                                            <div class="input-group col-sm-5 col-6">
                                                                <input type="text"
                                                                       class="form-control datetimepicker date-only"
                                                                       placeholder="Đến ngày">
                                                            </div>
                                                            <div class="input-group col-sm-2 col-12 mg-t-15 mg-sm-t-0">
                                                                <button type="button"
                                                                        class="btn btn-primary  view-chart">Xem
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chart-wrap">
                                                    <canvas class="chart-element" id="chart-id-3"
                                                            data-chart-id="3"></canvas>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /main content -->
<!--End content template-->
<?php require_once('footer.php'); ?>

