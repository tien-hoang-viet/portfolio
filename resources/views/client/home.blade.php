@extends('client.master')
@section('content')
<main class="main">
    <!--=============== HOME ===============-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <div class="home__data">
                <span class="home__greeting">Hello, I'm</span>
                <h1 class="home__name">Hoang Viet Tien</h1>
                <h3 class="home__education">PHP Developer</h3>
                <div class="home__buttons">
                    <a download="" href="assets_home/pdf/Hoàng Việt Tiến-Cv.pdf" class="button button--ghost">
                        Download CV
                    </a>
                    <a href="#about" class="button">About Me</a>
                </div>
            </div>

            <div class="home__handle">
                <img src="assets_home/img/perfil.png" alt="" class="home__img">
            </div>
            <div class="home__social">
                <a href="https://gitlab.com/dashboard/projects" target="_blank" class="home__social-link"><i class='bx bxl-gitlab'></i></a>
            </div>
            <a href="#about" class="home__scroll">
                <i class='bx bx-mouse home__scroll-icon'></i>
                <span class="home__scroll-name">Scroll Down</span>
            </a>
        </div>
    </section>

    <!--=============== ABOUT ===============-->
    <section class="about section" id="about">
        <span class="section__subtitle">My Intro</span>
        <h2 class="section__title">About me</h2>

        <div class="about__container container grid">
            <img src="assets_home/img/about.png" alt="" class="about__img">

            <div class="about__data">
                <div class="about__info">
                    <div class="about__box">
                        <i class='bx bx-award about__icon'></i>
                        <h3 class="about__title">Experience</h3>
                        <span class="about__subtitle">3 Years Working At Cong Ca Phe</span>
                    </div>

                    <div class="about__box">
                        <i class='bx bxs-briefcase about__icon' ></i>
                        <h3 class="about__title">Studying</h3>
                        <span class="about__subtitle">Duy Tan University</span>
                    </div>

                    <div class="about__box">
                        <i class='bx bx-support about__icon' ></i>
                        <h3 class="about__title">Support</h3>
                        <span class="about__subtitle">Online 7A.M-21P.M</span>
                    </div>
                </div>

                <p class="about__description">
                    PHP developer, I create web pages with Laravel Framework

                </p>

                <a href="#contact" class="button">Contact Me</a>
            </div>
        </div>
    </section>

    <!--=============== SKILLS ===============-->
    <section class="skills section" id="skills">
        <span class="section__subtitle">My abilities</span>
        <h2 class="section__title">My Experience</h2>

        <div class="skills__container container grid">
            <div class="skills__content">
                <h3 class="skills__title">Frontend Developer</h3>

                <div class="skills__box">
                    <div class="skills__group">
                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">HTML</h3>
                                <span class="skills__level">Basic</span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">CSS</h3>
                                <span class="skills__level">Basic</span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">JavaScript</h3>
                                <span class="skills__level">Advanced</span>
                            </div>
                        </div>
                    </div>

                    <div class="skills_group">
                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">Bootstrap</h3>
                                <span class="skills__level">Intermediate</span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">Git</h3>
                                <span class="skills__level">Basic</span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">VueJS</h3>
                                <span class="skills__level">Basic</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Backend -->
            <div class="skills__content">
                <h3 class="skills__title">Backend Developer</h3>

                <div class="skills__box">
                    <div class="skills__group">
                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">PHP</h3>
                                <span class="skills__level">Intermediate</span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">Node Js</h3>
                                <span class="skills__level">Basic</span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">Python</h3>
                                <span class="skills__level">Basic</span>
                            </div>
                        </div>
                    </div>

                    <div class="skills_group">
                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">MySQL</h3>
                                <span class="skills__level">Basic</span>
                            </div>
                        </div>

                        <div class="skills__data">
                            <i class='bx bxs-badge-check' ></i>

                            <div>
                                <h3 class="skills__name">VueJS</h3>
                                <span class="skills__level">Basic</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============== SERVICES ===============-->


    <!--=============== WORK ===============-->
    <section class="work section" id="work">
        <span class="section__subtitle">My Portfolio</span>
        <h2 class="section__title">Recent Works</h2>

        <div class="work__filters">
            <span class="work__item active-work" data-filter='all'>All</span>
            <span class="work__item" data-filter='.web'>Web</span>
            <span class="work__item" data-filter='.movil'>Movil</span>
            <span class="work__item" data-filter='.design'>Design</span>
        </div>

        <div class="work__container container grid">
            <div class="work__card mix web">
                <img src="assets_home/img/work1.jpg" alt="" class="work__img">

                <h3 class="work__title">Web Design</h3>
                <a href="#" class="work__button">
                    Demo<i class='bx bx-right-arrow-alt work__icon' ></i>
                </a>
            </div>

            <div class="work__card mix movil">
                <img src="assets_home/img/work2.jpg" alt="" class="work__img">

                <h3 class="work__title">App movil</h3>
                <a href="#" class="work__button">
                    Demo<i class='bx bx-right-arrow-alt work__icon' ></i>
                </a>
            </div>

            <div class="work__card mix design">
                <img src="/assets_home/img/work3.jpg" alt="" class="work__img">

                <h3 class="work__title">Brand design</h3>
                <a href="#" class="work__button">
                    Demo<i class='bx bx-right-arrow-alt work__icon' ></i>
                </a>
            </div>

            <div class="work__card mix web">
                <img src="assets_home/img/work4.jpg" alt="" class="work__img">

                <h3 class="work__title">Brand design</h3>
                <a href="#" class="work__button">
                    Demo<i class='bx bx-right-arrow-alt work__icon' ></i>
                </a>
            </div>

            <div class="work__card mix movil">
                <img src="assets_home/img/work5.jpg" alt="" class="work__img">

                <h3 class="work__title">App movil</h3>
                <a href="#" class="work__button">
                    Demo<i class='bx bx-right-arrow-alt work__icon' ></i>
                </a>
            </div>
        </div>
    </section>


    <!--=============== CONTACT ===============-->
    <section class="contact section" id="contact">
        <span class="section__subtitle">Get in touch</span>
        <h2 class="section__title">Contact Me</h2>

        <div class="contact__container container grid">
            <div class="contact__content">
                <h3 class="contact__title">Talk to me</h3>

                <div class="contact__info">
                    <div class="contact__card">
                        <i class='bx bxl-gmail contact__card-icon'></i>
                        <h3 class="contact__card-title">Email</h3>
                        <span class="contact__card-data">hoangtien0538@gmail.com</span>

                        <a   onClick="javascript:window.open('mailto:hoang0538@gmail.com', 'my-window');event.preventDefault()" href="mailto:hoang0538@gmail.com" target="_blank" class="contact__button">
                            Write Me <i class='bx bx-right-arrow-alt contact__button-icon' ></i>
                        </a>
                    </div>

                    <div class="contact__card">
                        <i class='bx bx-phone contact__card-icon'></i>
                        <h3 class="contact__card-title">Zalo</h3>
                        <span class="contact__card-data">0929305691</span>

                        <a href="https://zalo.me/0929305691" target="_blank" class="contact__button">
                            Write Me <i class='bx bx-right-arrow-alt contact__button-icon' ></i>
                        </a>
                    </div>

                    <div class="contact__card">
                        <i class='bx bxl-messenger contact__card-icon'></i>
                        <h3 class="contact__card-title">Messenger</h3>
                        <span class="contact__card-data">Hoàng Việt Tiến</span>

                        <a href="https://m.me/hoangviettien2011" target="_blank" class="contact__button">
                            Write Me <i class='bx bx-right-arrow-alt contact__button-icon' ></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="contact__content">
                <h3 class="contact__title">Write me your idea</h3>

                <div  class="contact__form">
                    <div class="contact__form-div">
                        <label for="" class="contact__form-tag">Names</label>
                        <input type="text" id="full_name" placeholder="Insert Your Name" class="contact__form-input">
                    </div>
                    <div class="contact__form-div">
                        <label for="" class="contact__form-tag">Email</label>
                        <input type="email" id="email" placeholder="Insert Your Email" class="contact__form-input">
                    </div>
                    <div class="contact__form-div contact__form-area">
                        <label for="" class="contact__form-tag">Idea</label>
                        <textarea name="" id="idea" cols="30" rows="10" class="contact__form-input" placeholder="Write Your Cool Idea"></textarea>
                    </div>
                    <button id="send_me_now" class="button">Send Me </button>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('#send_me_now').click(function(e){
            var name = $('#full_name').val();
            var email = $('#email').val();
            var idea = $('#idea').val();
            var payload = {
                'name'  : name,
                'email' : email,
                'idea'  : idea,
            };
            
            $.ajax({
                url : '/idea-submit',
                type : 'post',
                data : payload,
                success: function(res){
                    if(res.status){
                        toastr.success('Cảm ơn bạn đã đóng góp ý kiến');
                        window.location.reload();
                    }else{
                        toastr.error('Xảy ra lỗi bất ngờ');
                    }
                }
            });
        });
    });
</script>
{{-- <script>
    $(document).ready(function(e){
        $('.color').click(function(e){
            var color = $(this).data('color');
            payload = {
                'color' : color,
            };
            $.ajax({
                url     : '/change-color',
                type    : 'post',
                data    : payload,
                success: function(res){
                    if(res.status){
                        toastr.success('Đổi màu thành công');
                    }else{
                        toastr.error('Xảy ra lỗi bất ngờ');
                    }
                },
            });
        });
    });
</script> --}}
@endsection
