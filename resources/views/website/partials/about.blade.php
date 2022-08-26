@php
     $services = $frontend_helper->getPagesByID(1);
     $about = app\Models\Navigation::find(10);
 @endphp
<style>
    .about-home{
        background: #f3f3f3;
    }
    .about-home .align-iteme-center{        
    align-items: center;

    }
    .about-home img{
        max-width: 350px;
    }
    .about-home h2.section-title{
        margin-bottom: 10px !important;
    }
    .about-home h2.section-title span{
        color: #8baf31;
    }
    .about-home p{
        font-size: 14px;
        line-height: 26px;
        text-align: justify;
    }
    .about-home .read-more{
        background: #000;
        color: #fff !important;
        padding: 10px 30px;
        border: 0;
        font-weight: 400;
        font-size: 14px;
        border: 1px solid #000;
    }
    .about-home .read-more:hover{
        background: transparent;
        color: #000 !important;
    }
</style>
<section class="about-home">
    <div class="container container-v2">
        <h2 class="section-title">About <span>Us</span></h2>
        <div class="row align-iteme-center">
        <div class = "col-md-6" >
            <p>@php echo $about->long_content; @endphp </p>
            <a href="/about-us" class="read-more">Read More</a>
        </div> 
        <div class = "col-md-6" >
            <img src="http://127.0.0.1:8000/uploads/banner_image/570-428/crop/1646636847_Untitled-1.jpg">
        </div>
        </div>
    </div>
</section>