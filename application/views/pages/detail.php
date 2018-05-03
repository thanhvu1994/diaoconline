<style type="text/css">
	.font4 {
	    color: #F5881C;
	    font: bold 12px/18px Arial;
	    margin-bottom: 15px;
	}
	.font1 {
	    color: #0087C3;
	    font: bold 12px/18px Arial;
	    margin: 10px 0px;
	}
	.bor-wrap
	{
	    border: 1px solid #3B9DCC;
	    padding:20px;
	}
	h1
	{
	    font-weight:bold;
	    padding-bottom:10px;
	    color: #0087C3;
	    font-size:16px !important;
	}
</style>
<div id="content_container">
	<div class="breadcrumb">
        <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="<?php echo base_url(); ?>" itemprop="url" title="Trang Chủ"><span itemprop="title">Trang Chủ</span></a>
            »            </div>
        <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
            <a itemprop="url" title="<?php echo $page->title; ?>"><span itemprop="title"><?php echo $page->title; ?></span></a>
        </div>
    </div>
    <div class="wrap">
        <div class="qdC news-content bor-wrap">
            <div class="rounded_box"><div class="TL"></div><div class="TR"></div><div class="BL"></div><div class="BR"></div>
                <div class="body">
                    <h2 class="sub_title"></h2>
                    <h1 class="larger_title"><?php echo $page->title; ?></h1>
                    <span class="updated_date">Cập nhật <?php echo date('d/m/Y H:i', strtotime($page->created_date)); ?></span><br>
                    <div class="news-content">
                        <?php echo $page->content; ?>
                    </div>
            </div>
        </div>
    </div>
</div>