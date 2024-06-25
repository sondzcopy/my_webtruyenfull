
<main>
    <div class="chapter-wrapper container my-5">
        <a href="<?php echo APP_URL.'home/truyen/'.$data['truyen']['ten_khongdau'] ?>" class="text-decoration-none" title="<?php echo $data['truyen']['ten'] ?>">
            <h1 class="text-center text-success" title="<?php echo $data['truyen']['ten'] ?>"><?php echo $data['truyen']['ten'] ?></h1>
        </a>
       <h2><p class="text-center text-dark"><?php echo $data['chuong']['ten'] ?></p></h2> 

        <hr class="chapter-start container-fluid">
        <div class="chapter-nav text-center">
            <div class="chapter-actions chapter-actions-origin d-flex align-items-center justify-content-center">
                <a class="btn btn-success chapter-next"
                    href="<?php 
                    $truyen_id =$data['truyen']['id'];
                 $soChuong = tachSoChuong($data['chuong']['ten_khongdau']) ;
                    if(checkChuongSau($data['truyen']['id'],tachSoChuong($data['chuong']['ten_khongdau'])) == true){
                        echo  APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.'chuong-'.$soChuong - 1 ; 
                    }else{
                        // echo'#';
                    } 
                ?>" title=""><span>Chương
                    </span>Trước</a>
                <button class="btn btn-success chapter_jump me-1" data-story-id="3" data-slug-chapter="chuong-1"
                    data-slug-story="nang-khong-muon-lam-hoang-hau">
                    <span>
                        <svg style="fill: #fff;" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                            </path>
                        </svg>

                    </span>
                </button>

                <div class="dropdown select-chapter me-1 d-none">
                    <a class="btn btn-secondary dropdown-toggle" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Chọn chương
                    </a>

                    <ul class="dropdown-menu select-chapter__list" aria-labelledby="dropdownMenuLink">

                    </ul>
                </div>
                <a class="btn btn-success chapter-next"
                    href="<?php 
                    $truyen_id =$data['truyen']['id'];
                    $soChuong = tachSoChuong($data['chuong']['ten_khongdau']) ;
                     if(checkChuongSau($truyen_id,$soChuong +1 ) == true){
                        echo  APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.'chuong-'.$soChuong + 1 ; 
                    }else{
                        // echo'#';
                    } 
                ?>" title=""><span>Chương
                    </span>tiếp</a>
            </div>
        </div>
<div class="chapter-content mb-3">
    <div class="visible-md visible-lg ads-responsive incontent-ad" id="ads-chapter-pc-top" align="center" > <?php echo $data['chuong']['noidung'] ?></div>
</div>

 <div class="chapter-nav text-center">
            <div class="chapter-actions chapter-actions-origin d-flex align-items-center justify-content-center">
                <a class="btn btn-success chapter-next"
                    href="<?php 
                    $truyen_id =$data['truyen']['id'];
                 $soChuong = tachSoChuong($data['chuong']['ten_khongdau']) ;
                    if(checkChuongSau($data['truyen']['id'],tachSoChuong($data['chuong']['ten_khongdau'])) == true){
                        echo  APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.'chuong-'.$soChuong - 1 ; 
                    }else{
                        // echo'#';
                    } 
                ?>" title=""><span>Chương
                    </span>Trước</a>
                <button class="btn btn-success chapter_jump me-1" data-story-id="3" data-slug-chapter="chuong-1"
                    data-slug-story="nang-khong-muon-lam-hoang-hau">
                    <span>
                        <svg style="fill: #fff;" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                            </path>
                        </svg>

                    </span>
                </button>

                <div class="dropdown select-chapter me-1 d-none">
                    <a class="btn btn-secondary dropdown-toggle" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Chọn chương
                    </a>

                    <ul class="dropdown-menu select-chapter__list" aria-labelledby="dropdownMenuLink">

                    </ul>
                </div>
                <a class="btn btn-success chapter-next"
                    href="<?php 
                    $truyen_id =$data['truyen']['id'];
                    $soChuong = tachSoChuong($data['chuong']['ten_khongdau']) ;
                     if(checkChuongSau($truyen_id,$soChuong +1 ) == true){
                        echo  APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.'chuong-'.$soChuong + 1 ; 
                    }else{
                        // echo'#';
                    } 
                ?>" title=""><span>Chương
                    </span>tiếp</a>
            </div>
        </div>
</main>

