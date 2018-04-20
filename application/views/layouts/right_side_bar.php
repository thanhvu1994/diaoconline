<div class="col_300 margin_left">
	<?php $ads = $this->banner->getAdsByLocation(SIDEBAR_ADVERTISEMENT); 
	if (count($ads) > 0) :?>
	<div id="position_2" class ='banner_300x250'>
	    <?php foreach ($ads as $ad): ?>
	        <div>
	            <a href="<?php echo !empty($ad->url) ? $ad->url : 'javascript:void(0)' ?>" target="_blank">
	                <img src="<?php echo $ad->get_image() ?>" width="300px" height="250px"/>
	            </a>
	        </div>
	    <?php endforeach ?>
	</div>
	<?php endif; ?>
    <script type='text/javascript'>
    	var Banner2=1;
    	function Random_Banner2(){
    	    var _Arr=document.getElementById("position_2").getElementsByTagName("div");
    	    for (i=0; i<=_Arr.length-1; i++) {
    	        _Arr[i].className='bannerHide';
    	    }    
    	    _Arr[Banner2 - 1].className='bannerShow';
    	    var tempBanner = $(_Arr[Banner2 - 1]).html(); 
    	    $(_Arr[Banner2 - 1]).html(''); 
    	    $(_Arr[Banner2 - 1]).html(tempBanner);    
    	    window.setTimeout("Random_Banner2()" ,25000);    
    	    Banner2 = Banner2 + 1;    
    	    if(Banner2 > _Arr.length)        
    	    	Banner2 = 1;
    	}
    	Random_Banner2();
    </script>

    <div id="faq_list" class="margin_bottom">
        <div class="headline_title_1 rounded_style_5 rounded_box">
            <div class="content">
                <ul class="headline_tab">
                    <li class="actived"><span class="L"></span><a href="javascript:void(0)">Tỉnh thành</a><span class="R"></span></li>
                    <!-- <li><a href="kham-pha/phong-thuy-c9.html"><span>Phong Thủy</span></a></li> -->
                </ul>
            </div>
        </div>
        <div class="rounded_style_2 rounded_box">
            <div class="content">
                <?php $provinces = $this->provinces->getProvincesFE(); 
                    if (count($provinces) > 0): ?>
                        <ul class="listing_1">
                            <?php foreach ($provinces as $province): ?>
                                <li >
                                    <span class="arrow"></span>
                                    <a href="<?php echo $province->getUrl() ?>"><?php echo $province->province_name ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                <?php endif ?>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>