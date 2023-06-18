<div class="footer-area-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <a href="/">
                        @if (@$footer->logo == NULL)
                        <img class="img-responsive" src="{{asset('Assets/Frontend/img/logo-footer.png')}}" alt="logo">
                        @else
                        <img class="img-responsive" src="{{asset('storage/images/logo/' .$footer->logo)}}" alt="logo">
                        @endif
                    </a>
                    <div class="footer-about">
                        <p> {{@$footer->desc}} </p>
                    </div>
                    <ul class="footer-social">
                        <li><a href="{{'https://www.linkedin.com/in',@$footer->linkedln}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="{{'https://www.twitter.com/',@$footer->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{'https://www.facebook.com/esempeduasatu.kotabengkulu',@$footer->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{'https://www.instagram.com/smpn21kotabengkulu/',@$footer->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <h3>Informasi</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.0242523557904!2d102.29102687483798!3d-3.8048345961689845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b0637827559f%3A0xbe0f952dfab060af!2sSMP%20Negeri%2021%20Kota%20Bengkulu!5e0!3m2!1sid!2sid!4v1683739775902!5m2!1sid!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <ul class="corporate-address">
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{@$footer->telp}}"> {{@$footer->telp}}</a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{@$footer->email}}</li>
                    </ul>
                    <div class="newsletter-area">
<<<<<<< HEAD

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="footer-box">
            
                <ul class="flickr-photos">

                </ul>
=======
                        <h3>Ingin mendapat berita terupdate ?</h3>
                        <div class="input-group stylish-input-group">
                            <input type="text" placeholder="Masukan email kamu disini" class="form-control">
                            <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-box">
                    <h3>Photos</h3>
                    <ul class="flickr-photos">
                        <li>
                            <a href="#"><img class="img-responsive" src="{{asset('Assets/Frontend/img/footer/1.jpg')}}" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="{{asset('Assets/Frontend/img/footer/2.jpg')}}" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="{{asset('Assets/Frontend/img/footer/3.jpg')}}" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="{{asset('Assets/Frontend/img/footer/4.jpg')}}" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="{{asset('Assets/Frontend/img/footer/5.jpg')}}" alt="flickr"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-responsive" src="{{asset('Assets/Frontend/img/footer/6.jpg')}}" alt="flickr"></a>
                        </li>
                    </ul>
                </div>
>>>>>>> 4a3c42c85851216320d83f7235d7648279bf08ac
            </div>
        </div>
    </div>
</div>
</div>
<div class="footer-area-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <p>&copy; {{date('Y')}} <a href="#" target="_blank">SMP NEGERI 21 KOTA BENGKULU</a> All Rights Reserved.</p>
            </div>

        </div>
    </div>
</div>
