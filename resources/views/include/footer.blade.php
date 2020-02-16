<br>
<footer>
<hr>
<div class="footer-container">
	<div class="footer-inner">
        <b>Shopping Our Site</b>
        <div><a href="{{url('/contact-us')}}">Contact Us</a></div>
        <div><a href="{{url('/warranty')}}">Warranty</a></div>
        <div><a href="{{url('/shipping-returns')}}">Shipping & Returns</a></div>
        <div><a href="{{url('/insurrance')}}">Insurrance</a></div>
        <div><a href="{{url('/location')}}">Location</a></div>
    </div>
    <hr class="phone-hr">
	<div class="footer-inner">
        <b>Safe & Secure Shopping</b>
        <div><a href="{{url('/terms-condition')}}">Terms & Condition</a></div>
        <div><a href="{{url('/privacy-policy')}}">Privacy Policy</a></div>
    </div>
    <hr class="phone-hr">
	<div class="footer-inner">
        <b>About Us</b>
        <div><a href="{{url('/company-info')}}">Company Info</a></div>
        <hr class="phone-hr">
        <b>Follow Us</b>
        <div class="social-media-container">
            <a href="https://www.facebook.com/ExcelJewellersLangley/"><div class="icon-facebook"></div></a>
            <a href="https://www.instagram.com/excel_jewellers/"><div class="icon-instagram"></div></a>
<!--             <a href=""><div class="icon-twitter"></div></a>
            <a href=""><div class="icon-youtube"></div></a> -->
     <!--        <a href=""><div class="icon-linkedin2"></div></a> -->
            <a href="https://www.pinterest.ca/exceljewellers/"><div class="icon-pinterest2"></div></a>
        </div>
    </div>
</div>
<hr>
<div class="trademark">
    <div>© 2019, TCGCreator</div>
</div>
</footer>
<style type="text/css">
	
@media only screen and (min-width: 0px) {

        footer .footer-container{
            max-width: 1000px;
            margin: auto;
            display:block;
            padding: 25px 0px;
        }

        .phone-hr{
            display: block;
        }

    }


    /* SMARTPHONES PORTRAIT */
    @media only screen and (min-width: 300px) {

    }

    /* SMARTPHONES LANDSCAPE */
    @media only screen and (min-width: 480px) {

    }

    /* TABLETS PORTRAIT */
    @media only screen and (min-width: 768px) {
        footer .footer-container{
            max-width: 1000px;
            margin: auto;
            display: flex;
            padding: 25px 0px;
        }

        .phone-hr{
            display: none;
        }
    }


    /* TABLET LANDSCAPE / DESKTOP */
    @media only screen and (min-width: 1024px) {


    }   

    body{
        min-height: 100vh;
        display: block;
        position: relative;
    }

  footer{
        background:#e5e5e5;
        color: #222;
        padding: 50px 20px 0px 20px;
        width: 100%;
    }

    footer b{
        font-size: 1.1rem;
    }

    footer .footer-container{
        max-width: 1000px;
        margin: auto;
        padding: 25px 0px;
    }

    footer .trademark{
        max-width: 1000px;
        margin: auto;
        text-align: center;
        padding: 10px 0px 20px 0px;
    }

    footer .footer-bottom{
        max-width: 1000px;
        margin: auto;
        display: flex;
    }

    .footer-bottom .payment-container div{
        padding: 0px 5px;
        font-size: .85rem;
    }

    .payment-icon img{
        height: 20px;
    }

    .footer-container .footer-inner{
        width: 100%;
    }

    .footer-inner div, .footer-inner b{
        padding: 3px 0px;
    }

    .payment-container{
        display:flex;
        padding: 3px;
    }

    .payment-container div{
        width: 100%;
    }

    .social-media-container{
        display: flex;
    }

    .social-media-container a{
        color: inherit;
        text-decoration: none;
        margin:0px 10px 0px 0px;
        font-size: 18px;
    }

    footer hr{
        max-width: 1000px;
        border-top: solid 1px #d1d1d1;
        margin: 16px auto;
    }

    footer a{
        color: inherit;
        text-decoration: none;
        transition: .3s;
    }

    footer a:hover{
        text-decoration: none;
        color: #d60d8c;
    }

</style>