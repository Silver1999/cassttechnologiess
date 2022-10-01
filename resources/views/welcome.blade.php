<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/images/smallicons/favicon.png"  type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


    <title>Cassttechnologies</title>
</head>
<body>
<!--=============== HEADER ===============-->
<header class="header" id="header">
    <nav class="nav container">
        <!--        <a href="#" class="nav__logo">-->
        <!--&lt;!&ndash;            <img src="assets/images/logo.png" alt="">&ndash;&gt;-->
        <!--        </a>-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">About us</a>
                </li>
                <li class="nav__item">
                    <a href="#products" class="nav__link">Products</a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Contacts</a>
                </li>
            </ul>

            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-function-line"></i>
        </div>
    </nav>
</header>

<main class="main">
    <!--=============== HOME ===============-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <div class="home__img-container">
                <img src="assets/images/home1.png" alt="" class="home__img">
            </div>

            <div class="home__data">
                <div class="home__header">
                    <h1 class="home__title">Casst</h1>
                    <h2 class="home__subtitle" style="margin-top: 10px">Technologies</h2>
                </div>

                <div class="home__footer">
                    <p class="home__description">Hidden in plain sight, our Tail Light Trackers are highly effective at
                        combating theft. Reduce the chances of a misplaced or stolen trailer by securing your assets
                        with a tracker that looks and works like a standard tail light.Save on insurance rates and
                        improve safety scores throughout your fleet with GPSTab’s Dash Camera System. With the cost of
                        accidents potentially reaching upwards of $1.2 million according to the FMCSA.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--=============== SPONSOR ===============-->
    <section class="sponsor section">
        <div class="sponsor__container container grid">
            <img src="https://gpstab.com/wp-content/uploads/2020/10/Zero-Max.png" alt="" class="sponsor__img">
            <img src="https://gpstab.com/wp-content/uploads/2020/10/RT-Group.png" alt="" class="sponsor__img">
            <img src="https://gpstab.com/wp-content/uploads/2020/10/Phoenix-Cargo.png" alt="" class="sponsor__img">
            <img src="https://gpstab.com/wp-content/uploads/2020/10/MHR.png" alt="" class="sponsor__img">
        </div>
    </section>

    <!--=============== SPECS ===============-->
    <section class="specs section grid">
        <h2 class="section__title section__title-gradient">Product <b class="glow">range</b> </h2>

        <div class="specs__container container grid">
            <div class="specs__content grid">
                <div class="specs__data">
                    <!--                    <i class="ri-bluetooth-line specs__icon"></i>-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18"><path fill-rule="evenodd" fill="#777777" d="M20.124 17.999H.874a.888.888 0 01-.875-.9V.899c0-.498.392-.901.875-.901h19.25c.484 0 .875.403.875.901v16.2c0 .497-.391.9-.875.9zm-.875-15.75a.444.444 0 00-.437-.45H2.186a.444.444 0 00-.437.45v13.499c0 .249.196.451.437.451h16.626a.444.444 0 00.437-.451V2.249zM3.061 9.674h2.873v-3.6h1.782l.002 6.299h4.373l.003-2.699h3.549a.445.445 0 00.438-.451v-.449a.445.445 0 00-.438-.45h-4.862l.001 2.7H9.028l.003-6.3H4.628l-.007 3.6h-1.56V3.148h14.876v11.701H3.061V9.674z"/></svg>
                    <h3 class="specs__title">ELD Compliance Solution</h3>
                    <!--                    <span class="specs__subtitle">Bluetooth v5.2</span>-->
                </div>

                <div class="specs__data">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18"><path fill-rule="evenodd" fill="#777777" d="M13.749 6.746A6.746 6.746 0 007.002-.001c-.064 0-.129 0-.193.003C3.21.102.249 3.158.255 6.758a6.718 6.718 0 001.469 4.183H1.72l4.382 6.607c.225.3.563.451.9.451.338 0 .676-.151.901-.451l4.382-6.607h-.005a6.712 6.712 0 001.469-4.195zM7.002 9.75a3 3 0 110-6 3 3 0 010 6z"/></svg>
                    <h3 class="specs__title">Asset Tracker</h3>
                </div>

                <div class="specs__data">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"><path fill-rule="evenodd" fill="#777777" d="M8.999 1.499c4.136 0 7.5 3.364 7.5 7.499 0 4.136-3.364 7.5-7.5 7.5-4.135 0-7.5-3.364-7.5-7.5 0-4.135 3.365-7.499 7.5-7.499m0-1.501a9 9 0 00-9 9 9 9 0 1018 0 9 9 0 00-9-9zm0 3a6 6 0 100 12 6 6 0 000-12zm0 3.001c-1.654 0-3 1.345-3 2.999a.75.75 0 11-1.5 0 4.505 4.505 0 014.5-4.499.75.75 0 110 1.5z"/></svg>
                    <h3 class="specs__title">Tail Light GPS Tracker</h3>
                </div>

                <div class="specs__data">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14"><path fill-rule="evenodd" fill="#777777" d="M14.332.873v12.251c0 .483-.373.875-.833.875H.832c-.46 0-.833-.392-.833-.875V.873c0-.482.373-.874.833-.874h12.667c.46 0 .833.392.833.874zm6.605.034l-4.771 2.591v7.001l4.771 2.59c.532.161 1.062-.26 1.062-.841V1.749c0-.582-.53-1.001-1.062-.842z"/></svg>
                    <h3 class="specs__title">Dash Camera System</h3>
                </div>
                <div class="specs__data">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"><path fill-rule="evenodd" fill="#777777" d="M18.208 14.727H.792A.805.805 0 010 13.909V4.091c0-.452.354-.819.792-.819h17.416c.437 0 .792.367.792.819v9.818a.805.805 0 01-.792.818zm-7.841-3.94c0-.887-.158-1.747-.473-2.583A7.245 7.245 0 008.572 5.98a.803.803 0 00-.598-.256.804.804 0 00-.598.256 7.262 7.262 0 00-1.321 2.224 7.244 7.244 0 00-.474 2.583v1.074c0 .102.041.196.125.281a.376.376 0 00.274.127h.798a.377.377 0 00.274-.127.396.396 0 00.125-.281v-.813h1.595v.813c0 .102.041.196.124.281a.38.38 0 00.275.127h.798a.377.377 0 00.274-.127.395.395 0 00.124-.281v-1.074zm2.369-4.239a.805.805 0 00-.792-.818.805.805 0 00-.792.818v4.909c0 .452.354.818.792.818a.805.805 0 00.792-.818V6.548zM7.974 7.872c.365.609.596 1.26.71 1.949h-1.42c.115-.689.345-1.34.71-1.949zm6.276-6.645c0-.226.177-.409.396-.409V.204A.2.2 0 0114.844 0h.395a.2.2 0 01.198.204v.614c.219 0 .396.183.396.409v1.227H14.25V1.227zm-3.695 0c0-.226.178-.409.396-.409V.204c0-.113.089-.204.198-.204h.396c.109 0 .198.091.198.204v.614c.218 0 .396.183.396.409v1.227h-1.584V1.227zm-3.694 0c0-.226.177-.409.396-.409V.204A.2.2 0 017.454 0h.397a.2.2 0 01.197.204v.614c.219 0 .396.183.396.409v1.227H6.861V1.227zm-3.695 0c0-.226.178-.409.396-.409V.204c0-.113.089-.204.198-.204h.396c.109 0 .198.091.198.204v.614c.219 0 .396.183.396.409v1.227H3.166V1.227zM4.75 16.772c0 .227-.177.41-.396.41v.613a.202.202 0 01-.198.205H3.76a.202.202 0 01-.198-.205v-.613a.403.403 0 01-.396-.41v-1.227H4.75v1.227zm3.694 0c0 .227-.177.41-.396.41v.613a.201.201 0 01-.197.205h-.397a.201.201 0 01-.197-.205v-.613a.403.403 0 01-.396-.41v-1.227h1.583v1.227zm3.695 0c0 .227-.178.41-.396.41v.613a.202.202 0 01-.198.205h-.396a.202.202 0 01-.198-.205v-.613a.403.403 0 01-.396-.41v-1.227h1.584v1.227zm3.694 0c0 .227-.177.41-.396.41v.613a.201.201 0 01-.198.205h-.395a.201.201 0 01-.198-.205v-.613a.403.403 0 01-.396-.41v-1.227h1.583v1.227z"/></svg>
                    <h3 class="specs__title">Dispatch board</h3>
                </div>
                <div class="specs__data">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path fill-rule="evenodd" fill="#777777" d="M9.994.016C4.476.016.003 4.489.003 10.007s4.473 9.991 9.991 9.991 9.991-4.473 9.991-9.991S15.512.016 9.994.016zm6.467 10.35c0 .283-.23.513-.513.513h-3.041c-.465 0-.871-.312-.991-.761l-.298-1.117-2.108 5.773a1.024 1.024 0 01-.962.674l-.036-.001a1.025 1.025 0 01-.95-.74l-1.104-3.828H4.04a.513.513 0 01-.512-.513V9.341c0-.283.23-.512.512-.512h3.189c.457 0 .858.302.985.741l.448 1.551 2.146-5.879c.154-.422.56-.71 1.01-.673.447.02.829.327.944.76l.933 3.5h2.253c.283 0 .513.229.513.512v1.025z"/></svg>
                    <h3 class="specs__title">Truck Diagnostics</h3>
                </div>
            </div>

            <div>
                <img src="assets/images/specs.png" alt="" class="specs__img">
            </div>
        </div>
    </section>

    <!--=============== ABOuT ===============-->
    <section class="about section grid" id="about">
        <h2 class="section__title section__title-gradient">About <b class="glow">me</b></h2>

        <div class="about_container container grid">
            <div class="home__img-container">
                <img src="assets/images/About.jpg" alt="" class="about__img">
            </div>

            <div class="about__data">
                <p class="about_details">WLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Mi proin sed libero enim sed faucibus turpis in
                    eu. Ornare arcu odio ut sem nulla pharetra diam sit. Viverra vitae congue eu consequat ac felis
                    donec. Arcu ac tortor dignissim convallis aenean et tortor at risus. Lacus viverra vitae congue eu
                    consequat ac felis. Convallis convallis tellus id interdum velit.
                </p>
            </div>
        </div>
    </section>

    <!--            &lt;!&ndash;=============== DISCOUNT ===============&ndash;&gt;-->
    <!--            <section class="discount section">-->
    <!--                <div class="discount__container container grid">-->
    <!--                    <div class="discount__animate">-->
    <!--                        <h2 class="discount__title">Immerse yourself in <br> your music</h2>-->
    <!--                        <p class="discount__description">Get it now, up to 50% off.</p>-->
    <!--                        <a href="#" class="button button&#45;&#45;flex">-->
    <!--                            <i class="ri-shopping-bag-line button__icon"></i> Shop Now-->
    <!--                        </a>-->
    <!--                    </div>-->

    <!--                    <img src="assets/img/discount.png" alt="" class="discount__img">-->
    <!--                </div>-->
    <!--            </section>-->

    <!--=============== PRODUCTS ===============-->
    <section class="products section" id="products">
        <h2 class="section__title section__title-gradient products__line">
            Choose <br> <b class="glow">a Product </b>
        </h2>

        <div class="products__container container grid">
            <article class="products__card" data-id="atms">
                <div class="products__content">
                    <img src="assets/images/new-ATMS-_2-290x300.png" alt="https://gpstab.com/product/atm" class="products__img">

                    <h3 class="products__title">ATMS</h3>
                    <span class="products__price">$500</span>

                    <button class="button button--flex products__button open-modal"><i
                            class="ri-shopping-bag-line button__icon"></i>
                    </button>
                </div>
            </article>
            <article class="products__card" data-id="cameras">
                <div class="products__content">
                    <img src="assets/images/cameras-2.png" alt="https://gpstab.com/product/dash-camera" class="products__img">

                    <h3 class="products__title">Cameras</h3>
                    <span class="products__price">$500</span>
                    <p class="products__description" style="display: none;">This dashcam offers full HD video powered by artificial intelligence (AI) to enhance fleet safety and reduce collision-related costs.</p>


                    <button class="button button--flex products__button open-modal"><i
                            class="ri-shopping-bag-line button__icon"></i>
                    </button>

                </div>
            </article>
            <article class="products__card" data-id="light-red">
                <div class="products__content">
                    <img src="assets/images/oval-tail-light-red-1.png" alt="" class="products__img">

                    <h3 class="products__title">Light red</h3>
                    <span class="products__price">$500</span>
                    <p class="products__description" style="display: none;">Clear lens with white LEDs used to replace the tail lights.</p>


                    <button class="button button--flex products__button open-modal"><i
                            class="ri-shopping-bag-line button__icon"></i>
                    </button>

                </div>
            </article>
            <article class="products__card" data-id="atms-3">
                <div class="products__content">
                    <img src="assets/images/ATMS_3-przyjzivziul1b4dnlcuc75yua225xxc34qcd9fl40.png" alt=""
                         class="products__img">

                    <h3 class="products__title">ATMS-3</h3>
                    <span class="products__price">$500</span>


                    <button class="button button--flex products__button open-modal"><i
                            class="ri-shopping-bag-line button__icon"></i>
                    </button>

                </div>
            </article>

            <article class="products__card" data-id="tracker">
                <div class="products__content">
                    <img src="assets/images/asset-tracker-2 (1).png" alt="" class="products__img">

                    <h3 class="products__title">Tracker</h3>
                    <span class="products__price">$500</span>


                    <button class="button button--flex products__button open-modal"><i
                            class="ri-shopping-bag-line button__icon"></i>
                    </button>

                </div>
            </article>
            <article class="products__card" data-id="light-yellow">
                <div class="products__content">
                    <img src="assets/images/oval-tail-light-yellow-1.png" alt="" class="products__img">

                    <h3 class="products__title">Light yellow</h3>
                    <span class="products__price">$500</span>


                    <button class="button button--flex products__button open-modal"><i
                            class="ri-shopping-bag-line button__icon"></i>
                    </button>

                </div>
            </article>
            <article class="products__card" data-id="red-tail-light">
                <div class="products__content">
                    <img src="assets/images/red-tail-light-1-1.png" alt="" class="products__img">

                    <h3 class="products__title">Red tail light</h3>
                    <span class="products__price">$500</span>


                    <button class="button button--flex products__button open-modal"><i
                            class="ri-shopping-bag-line button__icon"></i>
                    </button>

                </div>
            </article>
            <article class="products__card" data-id="oval-tail-light">
                <div class="products__content">
                    <img src="assets/images/oval-tail-light-red-2.png" alt="" class="products__img">

                    <h3 class="products__title">Oval tail light</h3>
                    <span class="products__price">$500</span>


                    <button class="button button--flex products__button open-modal"><i
                            class="ri-shopping-bag-line button__icon"></i>
                    </button>

                </div>
            </article>
        </div>
    </section>
</main>

<div class="modal__wrapper">
    <section class="modal container">

        <div class="modal__container" id="modal-container">
            <div class="modal__content">
                <div class="modal__close close-modal" title="Close">
                    <i class='bx bx-x'></i>
                </div>

                <div class="modal__body"></div>

                <button class="modal__button-link close-modal">
                    Close
                </button>
            </div>
        </div>
    </section>
</div>


<section class="section" id="contact">
    <!--    style="color: hsl(0deg 0% 100% / 68%);"-->
    <h2 class="section__title section__title-gradient">Contact <b class="glow">me</b></h2>
    <div class="contact__wrapper">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form" id="cform">
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="symbol-input100">
                        <i class="ri-user-fill"></i>
                        </span>
                        <span class="label-input100">Your Name</span>
                        <input class="input100" type="text" name="name" placeholder="Enter your name" id="name" required/>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                         <span class="symbol-input100">
                         <i class="ri-mail-fill"></i>
                        </span>
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Enter your email address" id="email" required/>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid phone is required">
                         <span class="symbol-input100">
                          <i class="ri-phone-line"></i>
                        </span>
                        <span class="label-input100">Phone</span>
                        <input class="input100" type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                         <span class="symbol-input100">
                       <i class="ri-chat-3-fill"></i>
                        </span>
                        <span class="label-input100">Message</span>
                        <textarea class="input100" name="message" id="message" placeholder="Your message here..." required></textarea>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button class="contact100-form-btn" type="button" onclick="$('#cform').submit(); return false;">
                               <span id="send">
                               Send
                               <i class="ri-mail-send-fill" aria-hidden="true"></i>
                               </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!--=============== FOOTER ===============-->
<footer class="footer section">
    <div class="footer__container container grid">
        <a href="#" class="footer__logo">
            <img src="assets/images/fulllogo_transparent1.png" alt="">
        </a>

        <div class="footer__content">
            <h3 class="footer__title">Products</h3>

            <ul class="footer__links">
                <li>
                    <a href="#" class="footer__link">Loremaiojd</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Loremaiojd</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Loremaiojd</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Loremaiojd</a>
                </li>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Support</h3>

            <ul class="footer__links">
                <li>
                    <a href="#" class="footer__link">Product help</a>
                </li>
                <li>
                    <a href="#" class="footer__link">More products</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Updates</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Provides</a>
                </li>
            </ul>
        </div>

        <div class="footer__content">
            <div class="footer__links" style="margin-bottom: var(--mb-1);">
                <a href="mailto:mykhaylo.ivasyutyn@gmail.com"  class="footer__link"><i class="ri-mail-fill"></i> casstechnologies@gmail.com</a>
                <a href="tel:+8473373050"  class="footer__link"> <i class="ri-phone-line"></i>   +1 (847) 337 30 50</a>
            </div>
            <div class="footer__social">
                <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                    <i class="ri-facebook-fill"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                    <i class="ri-instagram-line"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                    <i class="ri-twitter-line"></i>
                </a>
            </div>
        </div>
    </div>

    <p class="footer__copy">
        <a href="https://cassttechnologies" target="_blank" class="footer__copy-link">&#169; Cassttechnologies. All
            right reserved
            <script>document.write(new Date().getFullYear())</script>
        </a>
    </p>
</footer>

<!--=============== SCROLL UP ===============-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-s-line scrollup__icon"></i>
</a>

<!--=============== SCROLL REVEAL ===============-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--=============== MAIN JS ===============-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/modal.js"></script>
<script>
    $(document).ready(function () {
        $('#cform').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: '{{route('contacts')}}',
                type: 'POST',
                data: formData,
                success: function (data) {
                    $('#send').html('Sending...');
                    $('.contact100-form-btn').attr('disabled', true);
                    setTimeout(function () {
                        $('#cform')[0].reset();
                        $('.wrap-input100').removeClass('wrap-input100').addClass('wrap-success-input100');
                        $('.contact100-form-bgbtn').removeClass('contact100-form-bgbtn').addClass('contact100-form-success-bgbtn');
                        $('#send').text('Sent!').delay(1000).fadeIn();
                        setTimeout(function (){
                            $('.wrap-success-input100').removeClass('wrap-success-input100').addClass('wrap-input100');
                            $('.contact100-form-success-bgbtn').removeClass('contact100-form-success-bgbtn').addClass('contact100-form-bgbtn');
                            $('#send').text('Send').delay(1000).fadeIn();
                            $('.contact100-form-btn').removeAttr('disabled');
                        }, 3000);
                    }, 2000);
                },
                error: function (data) {
                    var errors = data.responseJSON.error;
                    if (typeof errors.phone != "undefined" &&  Object.keys(errors.phone).length>1) delete errors.phone[1];
                    $.each(errors, function (key, value) {
                        $('#' + key).addClass('error');
                        $('.contact100-form-bgbtn').removeClass('contact100-form-bgbtn').addClass('contact100-form-error-bgbtn');
                        $('#' + key).parent().removeClass('wrap-input100').addClass('wrap-error-input100');
                        if ($('#' + key).next().hasClass('error-text')) {
                            $('#' + key).next().text(value);
                        } else {
                            $('#' + key).after('<span class="error-text">' + value + '</span>');
                        }
                    });
                    setTimeout(function () {
                        $('.error').removeClass('error');
                        $('.error-text').remove();
                        $('.wrap-error-input100').removeClass('wrap-error-input100').addClass('wrap-input100');
                        $('.contact100-form-error-bgbtn').removeClass('contact100-form-error-bgbtn').addClass('contact100-form-bgbtn');
                    }, 8000);
                    $('.error').keyup(function () {
                        $(this).parent().removeClass('wrap-error-input100').addClass('wrap-input100');
                        $('.contact100-form-error-bgbtn').removeClass('contact100-form-error-bgbtn').addClass('contact100-form-bgbtn');
                        $(this).removeClass('error');
                        $(this).next('.error-text').remove();
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    });
</script>
</body>
</html>
