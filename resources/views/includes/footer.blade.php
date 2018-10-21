<style>
    
    /*START OF FOOTER*/

    .footer{
        background-color: #024D75;

        width: 100%;
        
        
    }  
    ul {
      list-style-type: none;
      padding-left:0;
    }
    li{
        color: white;
        font-size: 11pt;
        padding: 5px 0px 5px 0;
    }
    .put-center{
        text-align: center;
        float: center;
    }
    .m-t-50{
        margin-top: 50px;
    }
    .social-icons{
        padding-left: 20px;
        padding-right: 20px;
    }
    .links{
        padding-left: 15px;
        padding-right: 15px;
    }
    @media (max-width: 480px){
       .social-icons{
        padding-left: 0px;
        padding-right: 0px;
        } 
        .links{
        padding-left: 0px;
        padding-right: 0px;
        } 
    }
    .foot-pad-bottom{
        padding-bottom: 10vh;
    }
    .cust-hr{
        background-color:#F4F4F4;
    }
    .cust-anchor{
        color:white;
        transition: all .2s linear;
    }
    .cust-anchor:hover{
        color:#f4f4f4;
        /*text-decoration: none; */

    }
    

    /**/
</style>
<footer class="footer">
    <div class="container put-center" style="padding-top: 15vh; height: 20%;">
        <div class="row">
            <div class="col-md">
                <strong>
                    <a href="#" class="links cust-anchor"><font size="3">Link</font></a>
                    <a href="#" class="links cust-anchor"><font size="3">Link</font></a>
                    <a href="#" class="links cust-anchor"><font size="3">Link</font></a>
                </strong>
            </div>
        </div>
        <div class="row m-t-50">
            <div class="col-md">

                <a href="https://facebook.com" class="social-icons"><img src="{{ asset( 'images/facebook.png' )}}"></a>
                <a href="https://twitter.com" class="social-icons"><img src="{{ asset( 'images/twitter.png' )}}"></a>
                <a href="https://instagram.com" class="social-icons"><img src="{{ asset( 'images/instagram.png' )}}"></a>
                <a href="https://plus.google.com" class="social-icons"><img src="{{ asset( 'images/google-plus.png' )}}"></a>
                <a href="https://viber.com" class="social-icons"><img src="{{ asset( 'images/viber.png' )}}"></a>

            </div>
        </div>
        <div class="row m-t-50">
            <div class="col-md">
                <h5 style="color: white;">Intergalactic President Space Earth Ambassador</h5>
                <p style="font-size: 12pt; padding-top: 0; color:white;">Zambales</p>

            </div>
        </div>
        <!--
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-3">
               
            </div>
            <div class="col-md-3">
                <h5 style="color: #C8A940;">Social Media Links</h5>
                <a href="https://facebook.com"><img src='resources/img/facebook.png'></a>
                <a href="https://twitter.com"><img src='resources/img/twitter.png'></a>
                <a href="https://instagram.com"><img src='resources/img/instagram.png'></a>
                <a href="https://plus.google.com"><img src='resources/img/google-plus.png'></a>
                <a href="https://viber.com"><img src='resources/img/viber.png'></a>
            </div>
        </div>
        -->
        <hr class="cust-hr" />
    </div>
<div class="container-fluid foot-pad-bottom" style="background-color: #024D75; text-align: center;">
    <h6 style="margin-bottom: 0; color:#F4F4F4;">&copy; Intergalactic President Space Earth Ambassador. All Rights Reserved</h6>
</div>
</footer>
