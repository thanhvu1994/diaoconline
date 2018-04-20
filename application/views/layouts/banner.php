<?php $ads = $this->banner->getAdsByLocation(HEADER_ADVERTISEMENT); 
if (count($ads) > 0) :?>
<div id="position_1" class ='banner_960x75 margin_bottom'>
    <?php foreach ($ads as $ad): ?>
        <div>
            <a href="<?php echo !empty($ad->url) ? $ad->url : 'javascript:void(0)' ?>" target="_blank">
                <img src="<?php echo $ad->get_image() ?>" width="960px" height="90px"/>
            </a>
        </div>
    <?php endforeach ?>
</div>
<?php endif; ?>
<script type='text/javascript'>
    var Banner1=1;
    function Random_Banner1() {
        var _Arr=document.getElementById("position_1").getElementsByTagName("div");
        for (i=0; i<=_Arr.length-1; i++) {
            _Arr[i].className='bannerHide';    
        }    
        _Arr[Banner1 - 1].className='bannerShow';    
        var tempBanner = $(_Arr[Banner1 - 1]).html(); 
        $(_Arr[Banner1 - 1]).html(''); 
        $(_Arr[Banner1 - 1]).html(tempBanner);    
        window.setTimeout("Random_Banner1()" ,25000);    
        Banner1 = Banner1 + 1;    
        if(Banner1 > _Arr.length)        
            Banner1 = 1;
    }
    Random_Banner1();
</script>