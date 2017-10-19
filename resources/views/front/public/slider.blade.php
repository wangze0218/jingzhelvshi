<style>
    body{
        font-family: "Segoe UI","Lucida Grande",Helvetica,Arial,"Microsoft YaHei",FreeSans,Arimo,"Droid Sans","wenquanyi micro hei","Hiragino Sans GB","Hiragino Sans GB W3","FontAwesome",sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #FFFFFF;
    }
    #clan-slider {
        position: fixed;
        _position: absolute;
        bottom: 50%;
        right: .1%;
        z-index: 1000;
    }
    #clan-slider ul {
        margin: 0;
        padding: 0;
        margin-top: -2px;
        list-style: none;
    }
    #clan-slider ul li {
        display: block;
        margin: 0;
        padding: 0;
        margin-top: 2px;
        position: relative;
    }
    #clan-slider ul li a {
        display: block;
        overflow: hidden;
        width: 48px;
        height: 48px;
        /*border: 1px solid #0ba1e4;*/
        background-color: #f5f5f5;
        background-image: url(/img/clan-slider.png);
        background-repeat: no-repeat;
        background-position-y: -182px;
    }
    #clan-slider .clan-slider-tips {
        position: absolute;
        top: 0px;
        right: 48px;
        display: block;
        height: 48px;
        padding-left: 10px;
        padding-right: 2px;
        white-space: nowrap;
        border: 1px solid #0ba1e4;
        background-color: #0ba1e4;
        text-align: center;
        line-height: 48px;
        font-size: 18px;
        color: #fff;
    }

    @media (max-width:768px){

    }
    @media screen and (min-width: 768px) {

    }
</style>
<div id="clan-slider">
    <ul>
        <li class="">
            <a id="slider-phone" href="tel:15210617003"></a>
            <div id="tips-phone" class="clan-slider-tips">
                {{$company['company_tell']}}
            </div>
        </li>
    </ul>
</div>
<script>
    $('#tips-phone').hide();
    $("#slider-phone").hover(function(){
        $('#tips-phone').show();
    },function(){
        $('#tips-phone').hide();
    });
</script>
