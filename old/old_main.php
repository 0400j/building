<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>treaTment</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function go(menu)
        {   
            if(menu=='rv') location.href="./rv.php";
            if(menu=='board') location.href="./board/board.php";
            if(menu=='book') location.href="./board/board2.php?book=코로나";
        }
        
        function letsgo(){
            search.submit();
        }

        function send(){
            var url = "/mail.php";
            var name = "popup test";
            var option = "width = 500, height = 500, top = 100, left = 200, location = no"
            window.open(url, name, option);
            // window.open("/mail.php");
            // alert("A");
            // let email = $("#email").val();
            // let title = "treaTment Subscription Email"
            // let message = $("#message").val();
            // let name = $("#name").val();
            // alert(name+mail+message);
            
            <? 
                // $email = "<script>email</script>";
            
                // // alert($email);
                // echo $email;
            ?>
            // alert(email+ title+ message+ name);
        }
    </script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <?php include "./top.php";?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
                <!-- <input type="button" value="hi" onclick="change();">
                <div id="est" value="A" style="display:none">강낭콩</div>
                <div id="est2" value="A" style="display:block">강낭2콩</div> -->
                <div class="masthead-subheading">All about treatment for COVID-19!</div>
                <div class="masthead-heading text-uppercase" style="color:#32cd32" >treaTment</div>
                <a class="btn btn-info btn-xl text-uppercase" href="#services">Join Now!</a><br>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">다양한 기능들</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4" onclick="go('rv');" style="cursor:pointer">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">진료예약</h4>
                        <p class="text-muted">Medical Appointments</p>
                    </div>
                    <div class="col-md-4" onclick="go('board');" style="cursor:pointer">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">게시판</h4>
                        <p class="text-muted">Post on the Board</p>
                    </div>
                    <div class="col-md-4" onclick="go('book');" style="cursor:pointer">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">코로나 도서 조회</h4>
                        <p class="text-muted">Search related Books</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <!-- <div>
                <img id = "image_id" src = "assets/img/portfolio1.jpg" width=300px>
            </div> -->
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">예방행동수칙</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/caution1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">예방행동</div>
                                <div class="portfolio-caption-subheading text-muted">Preventive Action</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/caution2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">일반국민 예방수칙</div>
                                <div class="portfolio-caption-subheading text-muted">Public Precautions</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/caution3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">일반국민 예방수칙</div>
                                <div class="portfolio-caption-subheading text-muted">Public Precautions</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/caution4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">고위험군 예방수칙</div>
                                <div class="portfolio-caption-subheading text-muted">Precautions for high-risk groups</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/caution5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">유증상자 행동수칙</div>
                                <div class="portfolio-caption-subheading text-muted">Rules of conduct for symptomatic persons</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/caution6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">유행지역 행동수칙</div>
                                <div class="portfolio-caption-subheading text-muted">Rules of conduct in epidemic areas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Covid-19</h2>
                    <h3 class="section-subheading text-muted">2000년대 이후 최고 관심사 코로나에 대하여</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/hp1.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>B.1.1.529</h3>
                                <h4 class="subheading">20년 10월 11일 보츠와나에서 <br>최초 발견된 이후 총 10건</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">스파이크 단백질에 유전자 변이32개 보유,<br>바이러스는 단백질을 이용해 숙주세포로 침투하기에<br> 돌연변이가 생기면 전파력에 변화 가능성이 생깁니다.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/hp3.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>스파이크 단백질</h3>
                                <h4 class="subheading">코로나바이러스의 감염 원리</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">표면의 돌기와 같은 단백질이 사람의 세포와 결합<br>이후 세포 내 감염 시작<br>ACE2의 인체세포와 결합하는 것으로 추정</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/hp2.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>렘데시브르 변형체</h3>
                                <h4 class="subheading">바이러스 치료제의 원리</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">침투한 바이러스의 게놈을 합성하는 재료와<br>비슷한 가짜 재료를 넣어 복제 효소를 속임<br>가짜 재료로 게놈 복제하면 바이러스 증식 중단</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/hp4.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>2022.12 코로나 종식 예상</h3>
                                <h4 class="subheading">WHO 지정 '우려' 변이 바이러스</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">알파(B.1.1.7), 베타(B.1.351), 감마(P.1), 델타(B.1.617.2)<BR>순차적으로 종식 예정</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <a href="http://ncov.mohw.go.kr/"><div class="timeline-image" >
                            <h4>
                                ABOUT
                                <br />
                                MORE
                                <br />
                                DETAILS
                            </h4>
                        </div></a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">treaTment Team Doctor</h2>
                    <h3 class="section-subheading text-muted">당신의 건강에 힘써줄 원장님들을 소개해요</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/3105.png" alt="..." />
                            <h4>JAMES OBREIM #3105</h4>
                            <p class="text-muted">Director of Orthopedic Surgery</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/6641.avif" alt="..." />
                            <h4>PAUL GERALD #6641</h4>
                            <p class="text-muted">Director of Thoracic Surgery</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/4238.png" alt="..." />
                            <h4>RALPH HUDSON #4238</h4>
                            <p class="text-muted">Director of Dermatology</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">본 병원은 환자·보호자 및 의료인을 위하여 진료지원부서를 운영하고 있습니다.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <!-- <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">더 많은 정보를 얻고 싶다면 이메일을 작성해주세요</h3>
                </div>
                
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <!-- <form action="/mail.php" id="contactForm" method="POST"> -->
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" type="text" placeholder="Your Name *" data-sb-validations="required"/>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" placeholder="Your Message *" data-sb-validations="required" ></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <?
                        // $test = "<script>$('#email').val();</script>";
                        
                    ?>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit" onClick="">Send Message</button></div>
                </form>
            </div>
        </section>
           <!-- Footer-->
       <?php
       include "./footer.php";
       ?>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">코로나19 예방행동수칙</h2>
                                    <!-- <p class="item-intro text-muted">질병관리본부</p> -->
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/caution1.jpg" alt="..." />
                                    <p>예방행동수칙에 대해서 알려드려요. 다음 사진들을 참고하여 코로나에 걸리지 않도록 유의합니다.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        닫기
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">일반국민 예방수칙</h2>
                                    <p class="item-intro text-muted">일반국민들이 지켜야 할 예방수칙</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/caution2.jpg" alt="..." />
                                    <p>손 씻기, 기침 시 주의하기, 얼굴 만지지 않기. 청결을 항상 유지하세요.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>질병관리본부</strong>
                                        </li>
                                        <li>
                                            KCDC
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        닫기
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">일반국민 예방수칙</h2>
                                    <p class="item-intro text-muted">일반국민들이 지켜야 할 예방수칙</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/caution3.jpg" alt="..." />
                                    <p>마스크 착용, 방문 자제, 접촉 회피. 사람들을 만날 때에는 주의하세요.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>질병관리본부</strong>
                                        </li>
                                        <li>
                                            KCDC
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        닫기
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">고위험군 예방수칙</h2>
                                    <p class="item-intro text-muted">임산부, 노인, 만성질환자들이 지켜야 할 예방수칙</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/caution4.jpg" alt="..." />
                                    <p>많은 사람이 모이는 장소 피하기, 마스크 착용. 신체가 약할수록 감염에 주의하세요.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>질병관리본부</strong>
                                        </li>
                                        <li>
                                            KCDC
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        닫기
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">유증상자 행동수칙</h2>
                                    <p class="item-intro text-muted">감염증상을 보이는 이들이 지켜야 할 행동수칙</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/caution5.jpg" alt="..." />
                                    <p>외출자제, 접촉여부 보고, 경과관찰. 증상이 보이는 경우, 즉시 알려주세요.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>질병관리본부</strong>
                                        </li>
                                        <li>
                                            KCDC
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        닫기
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">유행지역 행동수칙</h2>
                                    <p class="item-intro text-muted">유행지역에서 지켜야 할 행동수칙</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/caution6.jpg" alt="..." />
                                    <p>타지역 방문자제, 가이드라인 준수. 가이드라인을 필히 준수해주세요.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>질병관리본부</strong>
                                        </li>
                                        <li>
                                            KCDC
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        닫기
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
<!-- 
//   var obTimeOut; // clearTimeout() 함수를 이용하여 Timeout 을 취소하기위해 사용됨
	// var ObjectArray = new Array ();
	// ObjectArray[1] = "assets/img/portfolio/caution1.jpg";
	// ObjectArray[2] = "assets/img/portfolio/caution2.jpg";
	// ObjectArray[3] = "assets/img/portfolio/caution3.jpg";
	// ObjectArray[4] = "assets/img/portfolio/caution4.jpg";
	// ObjectArray[5] = "assets/img/portfolio/caution5.jpg";
	// ObjectArray[6] = "assets/img/portfolio/caution6.jpg";
	// var nObjectCnt = 0;
	// function ShowDefaultRotate(){ // 스스로 자신을 호출하는 재귀함수 (Recursive Function)
	// 	nObjectCnt++;
	// 		if( nObjectCnt < ObjectArray.length ){  // 배열의 갯수 이내일때만 실행
	// 			document.getElementById("image_id").src = ObjectArray[nObjectCnt];
	// 			obTimeOut = setTimeout("ShowDefaultRotate()",3000);  // 1초후에 자기자신을 호출
	// 		}else if( nObjectCnt >= ObjectArray.length ){
	// 			nObjectCnt = 1;
	// 			document.getElementById("image_id").src = ObjectArray[nObjectCnt];
	// 			obTimeOut = setTimeout("ShowDefaultRotate()",3000);  // 1초후에 자기자신을 호출
	// 			//clearTimeout(obTimeOut); // 배열의 갯수만큼 반복하여 변환시킨 후에는 Timeout 을 중지시킨다
	// 		}
	// }
	// function startAnimation(){
	// 	obTimeOut = window.setTimeout(ShowDefaultRotate,100); // 윈도우 로드 후 0.1초 후에 반복함수를 호출합니다.
	// }
	//  window.onload = startAnimation; // 윈도우 로드시 이미지 변환함수 실행 -->