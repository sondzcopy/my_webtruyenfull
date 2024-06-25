
<main>
<!-- <input type="hidden" id="story_slug" value="nang-khong-muon-lam-hoang-hau"> -->
<div class="container">
    <div class="row align-items-start">
    <div class="col-12 col-md-7 col-lg-8">
        <div class="head-title-global d-flex justify-content-between mb-4">
            <div class="col-12 col-md-12 col-lg-4 head-title-global__left d-flex">
                <h2 class="me-2 mb-0 border-bottom border-secondary pb-1">
                    <span class="d-block text-decoration-none text-dark fs-4 title-head-name"
                        title="Thông tin truyện">Thông
                        tin truyện</span>
                </h2>
            </div>
        </div>

        <div class="story-detail">
            <div class="story-detail__top d-flex align-items-start">
                <div class="row align-items-start">
                    <div class="col-12 col-md-12 col-lg-3 story-detail__top--image">
                        <div class="book-3d">
                            <img src=" <?php storage_patch($data['truyen']['hinh']) ?>"
                                alt="<?php echo $data['truyen']['ten'] ?>" class="img-fluid w-100" itemprop=image>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-9">
                        <h3 class="text-center story-name"><?php echo $data['truyen']['ten'] ?></h3>
                        <div class="rate-story mb-2">
                            <div class="rate-story__holder" data-score="7.0">
                            </div>
                            <em class="rate-story__text"></em>
                            <div class="rate-story__value" itemprop="aggregateRating" itemscope=""
                                itemtype="https://schema.org/AggregateRating">
                                <em>Đánh giá:
                                    <strong>
                                        <span itemprop="ratingValue"><?php echo $data['truyen']['danhgia'] ?></span>
                                    </strong>
                                    /
                                    <span class="" itemprop="bestRating">10</span>
                                    từ
                                    <strong>
                                        <span itemprop="ratingCount">0</span>
                                        lượt
                                    </strong>
                                </em>
                            </div>
                        </div>
                        <div class="desc-text desc-text-full" itemprop="description"><?php echo $data['truyen']['gioithieu'] ?></div>
                        <div class="story-detail__top--desc px-3" style="max-height: 285px;">
                        </div>

                        <div class="info-more">
                            <div class="info-more--more active" id="info_more">
                                <span class="me-1 text-dark">Xem thêm</span>
                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.70749 7.70718L13.7059 1.71002C14.336 1.08008 13.8899 0.00283241 12.9989 0.00283241L1.002 0.00283241C0.111048 0.00283241 -0.335095 1.08008 0.294974 1.71002L6.29343 7.70718C6.68394 8.09761 7.31699 8.09761 7.70749 7.70718Z"
                                        fill="#2C2C37"></path>
                                </svg>
                            </div>

                            <a class="info-more--collapse text-decoration-none"
                                href="story.html#info_more">
                                <span class="me-1 text-dark">Thu gọn</span>
                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.70749 0.292817L13.7059 6.28998C14.336 6.91992 13.8899 7.99717 12.9989 7.99717L1.002 7.99717C0.111048 7.99717 -0.335095 6.91992 0.294974 6.28998L6.29343 0.292817C6.68394 -0.097606 7.31699 -0.0976055 7.70749 0.292817Z"
                                        fill="#2C2C37"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="story-detail__bottom mb-3">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-3 story-detail__bottom--info">
                        <p class="mb-1">
                            <strong>Tác giả:</strong>
                            <a href="#"
                                class="text-decoration-none text-dark hover-title" title="<?php echo $data['truyen']['tacgia'] ?>"><?php echo $data['truyen']['tacgia'] ?></a>
                        </p>
                        <div class="d-flex align-items-center mb-1 flex-wrap">
                            <strong class="me-1">Thể loại:</strong>
                            <div class="d-flex align-items-center flex-warp">
                                <?php getTheLoai_HOME($data['truyen']['id']) ?>
                            </div>
                        </div>
                        <p class="mb-1">
                            <strong>Nguồn:</strong>
                            <span class="text-info"><?php echo $data['truyen']['nguon'] ?></span>
                        </p>
                        <p class="mb-1">
                            <strong>Trạng thái:</strong>
                            <span class="text-info"><?php echo $data['truyen']['trangthai'] ?></span>
                        </p>
                    </div>

                </div>
            </div>
            <div class="story-detail__list-chapter">
                <div class="head-title-global d-flex justify-content-between mb-4">
                    <div class="col-6 col-md-12 col-lg-4 head-title-global__left d-flex">
                        <h2 class="me-2 mb-0 border-bottom border-secondary pb-1">
                            <span href="#"
                                class="d-block text-decoration-none text-dark fs-4 title-head-name"
                                title="Truyện hot">Danh sách chương</span>
                        </h2>
                    </div>
                </div>

                <div class="story-detail__list-chapter--list">
                    <div class="row">
                        <?php foreach($data['chuong']as $val) {?>
                        <div class="col-12 col-sm-6 col-lg-6 story-detail__list-chapter--list__item">
                            <ul>
                                <li>
                                    <h3><a href="<?php echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.$val['ten_khongdau'] ?>"  title="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a></h3>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-5 col-lg-4 sticky-md-top">
        <div class="row top-ratings">
            <div class="col-12 top-ratings__tab mb-2">
                <div class="list-group d-flex flex-row" id="list-tab" role="tablist">
                    
                        <a class="list-group-item list-group-item-action active" id="top-day-list"
                                    data-bs-toggle="list"
                                    href="#top-day" role="tab"
                                    aria-controls="top-day" aria-selected="true">Ngày</a>
                                <a class="list-group-item list-group-item-action" id="top-month-list"
                                    data-bs-toggle="list"
                                    href="#top-month"
                                    role="tab" aria-controls="top-month" aria-selected="false" tabindex="-1">Tháng</a>
                                <a class="list-group-item list-group-item-action" id="top-all-time-list"
                                    data-bs-toggle="list"
                                    href="#top-all-time"
                                    role="tab" aria-controls="top-all-time" aria-selected="false" tabindex="-1">All
                                    time</a>
                   
                </div>
            </div>
            <?php $stt = 1; foreach($data['truyenHOT'] as $val){ ?>
                <?php if($stt >=10) break; ?>
            <div class="col-12 top-ratings__content">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="top-day" role="tabpanel"
                        aria-labelledby="top-day-list">
                            <ul>
                            <li>
                                <div class="rating-item d-flex align-items-center">
                                    <div class="rating-item__number bg-light border rounded-circle ">
                                        <span class="text-dark"><?php echo $stt ?></span>
                                    </div>
                                    <div class="rating-item__story">
                                        <h3><a   style="text-decoration: none;"title=" <?php echo $val['ten'] ?>" href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau'] ?> "><?php echo $val['ten'] ?></a></h3>
                                        <div class="d-flex flex-wrap rating-item__story--categories">
                                            <?php getTheLoai_HOME($val['id']) ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- <div class="tab-pane fade" id="top-month" role="tabpanel"
                        aria-labelledby="top-month-list">  
                            <ul>
                            <li>
                                <div class="rating-item d-flex align-items-center">
                                    <div class="rating-item__number bg-light border rounded-circle">
                                        <span class="text-dark"><?php echo $stt ?></span>
                                    </div>
                                    <div class="rating-item__story">
                                        <h3><a href="#" title=" <?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a></h3>
                                        <div class="d-flex flex-wrap rating-item__story--categories">
                                            <?php getTheLoai_HOME($val['id']) ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="top-all-time" role="tabpanel"
                        aria-labelledby="top-all-time-list">
                        <ul>
                            <li>
                                <div class="rating-item d-flex align-items-center">
                                    <div class="rating-item__number bg-light border rounded-circle">
                                        <span class="text-dark"><?php echo $stt ?></span>
                                    </div>
                                    <div class="rating-item__story">
                                        <h3><a href="#" title=" <?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a></h3>
                                        <div class="d-flex flex-wrap rating-item__story--categories">
                                            <?php getTheLoai_HOME($val['id']) ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <?php $stt++;} ?>
        </div>
        <!-- <div class="section-list-category bg-light p-2 rounded card-custom">
            <div class="head-title-global mb-2">
                <div class="col-12 col-md-12 head-title-global__left">
                    <h2 class="mb-0 border-bottom border-secondary pb-1">
                        <span href="#" class="d-block text-decoration-none text-dark fs-4"
                            title="Truyện đang đọc">Thể loại truyện</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <ul class="list-category">
                    <li class="">
                        <a href="https://suustore.com/the-loai/nu-cuong"
                            class="text-decoration-none text-dark hover-title">Nữ Cường</a>
                    </li>
                </ul>
            </div>
        </div> -->
    </div>
        </div>
    </div>
</main>