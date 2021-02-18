@extends('murid/layouts/murid')

@section('title', 'Murid CariGuru.com')

@section ('container')


<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Murid</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Jadwal Les</h5>
                        <h2>Hari <span class="tuition-fees">Jadwal Les</span></h2>
                        <!-- <span class="text-success">20%</span> -->
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Transaksi </h5>
                        <h2>Transaksi Ke <span class="counter">1</span><span class="tuition-fees">Transaksi</span></h2>
                        <!-- <span class="text-danger">30%</span> -->
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Rating</h5>
                        <h2><span class="counter">5</span> <span class="tuition-fees">Rating</span></h2>
                        <!-- <span class="text-info">60%</span> -->
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Chemical Engineering</h5>
                        <h2>$<span class="counter">3500</span> <span class="tuition-fees">Tuition Fees</span></h2>
                        <span class="text-inverse">80%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
            <div class="single-review-st-hd">
                <h2>Reviews</h2>
            </div>
            <div class="single-review-st-text">
                <img src="img/notification/1.jpg" alt="">
                <div class="review-ctn-hf">
                    <h3>Sarah Graves</h3>
                    <p>Highly recommend</p>
                </div>
                <div class="review-item-rating">
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star-half"></i>
                </div>
            </div>
            <div class="single-review-st-text">
                <img src="img/notification/2.jpg" alt="">
                <div class="review-ctn-hf">
                    <h3>Garbease sha</h3>
                    <p>Awesome Pro</p>
                </div>
                <div class="review-item-rating">
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star-half"></i>
                </div>
            </div>
            <div class="single-review-st-text">
                <img src="img/notification/3.jpg" alt="">
                <div class="review-ctn-hf">
                    <h3>Gobetro pro</h3>
                    <p>Great Website</p>
                </div>
                <div class="review-item-rating">
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star-half"></i>
                </div>
            </div>
            <div class="single-review-st-text">
                <img src="img/notification/4.jpg" alt="">
                <div class="review-ctn-hf">
                    <h3>Siam Graves</h3>
                    <p>That's Good</p>
                </div>
                <div class="review-item-rating">
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star-half"></i>
                </div>
            </div>
            <div class="single-review-st-text">
                <img src="img/notification/5.jpg" alt="">
                <div class="review-ctn-hf">
                    <h3>Sarah Graves</h3>
                    <p>Highly recommend</p>
                </div>
                <div class="review-item-rating">
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star-half"></i>
                </div>
            </div>
            <div class="single-review-st-text">
                <img src="img/notification/6.jpg" alt="">
                <div class="review-ctn-hf">
                    <h3>Julsha Grav</h3>
                    <p>Sei Hoise bro</p>
                </div>
                <div class="review-item-rating">
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star"></i>
                    <i class="educate-icon educate-star-half"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
        <div class="courses-title">
            <a href="#"><img src="img/courses/1.jpg" alt="" /></a>
            <h2>Apps Development</h2>
        </div>
        <div class="courses-alaltic">
            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
        </div>
        <div class="course-des">
            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
        </div>
        <div class="product-buttons">
            <button type="button" class="button-default cart-btn">Read More</button>
        </div>
    </div>
</div> -->

    @endsection