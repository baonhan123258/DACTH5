<?php
    $list_posts = $PostModel->select_all_posts();

    $list_post_catgories = $PostModel->select_post_category();
?>
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="index.php"><i class="fa fa-home"></i> Trang chủ</a>
                    <span>Bài viết</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->