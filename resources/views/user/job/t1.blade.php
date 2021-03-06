<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<style>
    #pop {
        position: relative;
        background: #FFF;
        padding: 20px;
        width: 800px;

        max-width: 800px;
        margin: 20px auto;
    }

    .job_details_area {
        background: #F5F7FA;

        margin-left:0px;
        margin-right:0px;


        padding-top:0px;
        padding-left:0px;
        padding-right:0px;
        padding-bottom: 0px;
    }






    /* line 5, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs {
        padding: 30px;
        border-bottom: 1px solid #EAEAEA;
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    @media (max-width: 800px) {
        /* line 5, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
        .job_details_area .single_jobs {
            display: block !important;
        }
    }

    @media (max-width: 800px) {
        /* line 13, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
        .job_details_area .single_jobs .jobs_left {
            display: block !important;
            overflow: hidden;
        }
    }

    /* line 18, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_left .thumb {
        float: left;
        width: 82px;
        height: 82px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        padding: 15px;
        background: #F5F7FA;
        margin-right: 25px;
        border: 1px solid #F0F0F0;
    }

    /* line 32, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_left .jobs_conetent {
        float: left;
    }

    /* line 34, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_left .jobs_conetent h4 {
        font-size: 24px;
        margin-bottom: 10px;
        font-weight: 400;
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    @media (max-width: 800px) {
        /* line 34, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
        .job_details_area .single_jobs .jobs_left .jobs_conetent h4 {
            margin-top: 15px;
        }
    }

    /* line 42, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_left .jobs_conetent h4:hover {
        color: #00D363;
    }

    @media (max-width: 800px) {
        /* line 46, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
        .job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat {
            display: block !important;
        }
    }

    /* line 50, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat .location {
        margin-right: 10px;
    }

    @media (max-width: 800px) {
        /* line 50, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
        .job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat .location {
            margin-right: 10px;
        }
    }

    /* line 55, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat .location p {
        margin-bottom: 0;
        font-size: 16px;
        color: #AAB1B7;
    }

    /* line 59, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_left .jobs_conetent .links_locat .location p i {
        margin-right: 7px;
    }

    @media (max-width: 800px) {
        /* line 68, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
        .job_details_area .single_jobs .jobs_right .apply_now {
            margin: 10px 0;
        }
    }

    /* line 73, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_right .apply_now a.heart_mark {
        width: 40px;
        height: 40px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        color: #00D363;
        font-size: 14px;
        line-height: 40px;
        text-align: center;
        display: inline-block;
        background: #EFFDF5;
    }

    /* line 83, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_right .apply_now a.heart_mark:hover {
        background: #00D363;
        color: #fff;
    }

    /* line 88, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_right .apply_now a.boxed-btn3 {
        padding: 9px 27px 9px 27px;
        font-size: 14px;
    }

    /* line 94, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_right .date {
        text-align: right;
        margin-top: 10px;
    }

    @media (max-width: 800px) {
        /* line 94, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
        .job_details_area .single_jobs .jobs_right .date {
            text-align: left;
        }
    }

    /* line 100, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .single_jobs .jobs_right .date p {
        margin-bottom: 0;
        font-size: 14px;
        font-style: italic;
        color: #7A838B;
    }

    /* line 110, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .descript_wrap {
        padding: 40px;
    }

    /* line 112, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .descript_wrap .single_wrap {
        margin-bottom: 30px;
    }

    /* line 114, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .descript_wrap .single_wrap:last-child {
        margin-bottom: 0;
    }

    /* line 117, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .descript_wrap .single_wrap h4 {
        font-size: 20px;
        font-weight: 500;
        color: #001D38;
        margin-bottom: 25px;
    }

    /* line 123, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .descript_wrap .single_wrap p {
        color: #7A838B;
        font-size: 16px;
        line-height: 28px;
        font-weight: 400;
    }

    /* line 130, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .descript_wrap .single_wrap ul li {
        font-size: 16px;
        line-height: 32px;
        color: #7A838B;
        font-weight: 400;
        position: relative;
        padding-left: 25px;
    }

    /* line 137, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .descript_wrap .single_wrap ul li::before {
        position: absolute;
        left: 0;
        top: 0;
        width: 7px;
        height: 7px;
        background: #7A838B;
        content: '';
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        top: 12px;
    }

    /* line 152, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form {
        margin-top: 0px;
        padding: 20px;
    }

    @media (max-width:800px) {
        /* line 152, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
        .job_details_area .apply_job_form {
            padding: 0px;
        }
    }

    /* line 158, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form h4 {
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 30px;
    }

    /* line 164, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input_field input, .job_details_area .apply_job_form .input_field textarea {
        height: 60px;
        border: 1px solid #E8E8E8;
        width: 100%;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        padding-left: 20px;
        margin-bottom: 20px;
    }

    /* line 171, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input_field input::placeholder, .job_details_area .apply_job_form .input_field textarea::placeholder {
        color: #7A838B;
        font-size: 16px;
    }

    /* line 175, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input_field input:focus, .job_details_area .apply_job_form .input_field textarea:focus {
        outline: none;
    }

    /* line 179, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input_field textarea {
        height: 188px;
        padding: 20px;
    }

    /* line 184, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input_field.file_up input {
        position: relative;
    }

    /* line 186, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input_field.file_up input:before {
        position: absolute;
        left: 0;
        top: 0;
        content: 'Upload CV';
    }

    /* line 195, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input-group {
        width: 100%;
        height: 60px;
        border-radius: 5px !important;
        margin-bottom: 20px;
        border: 1px solid #ddd;
    }

    /* line 201, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input-group button {
        background: transparent;
        border: none;
        font-size: 16px;
        color: #7A838B;
        padding-left: 20px;
        margin-right: 5px;
    }

    /* line 209, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input-group .custom-file {
        margin-bottom: 0;
        height: 60px;
        border: none;
    }

    /* line 228, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_details.scss */
    .job_details_area .apply_job_form .input-group .custom-file-input {
        height: 100%;
    }
    .form-select {
        height: 40px;
        width: 100%;
    }

    .boxed-btn3 {
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#F91842+0,fd8e5e+100 */
        background: #00D363;
        color: #fff;
        display: inline-block;
        padding: 13px 29px 13px 29px;
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 500;
        border: 0;
        border: 1px solid transparent;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        text-align: center;
        color: #fff !important;
        text-transform: capitalize;
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
        cursor: pointer;
    }



</style>

<body>




<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="img/post.png" alt="">
                        <ul class="tags">
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Media</a>
                            </li>
                            <li>
                                <a href="#">Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="details">
                        <div class="title d-flex flex-row justify-content-between">
                            <div class="titles">
                                <a href="#"><h4>Creative Art Designer</h4></a>
                                <h6>Premium Labels Limited</h6>
                            </div>
                            <ul class="btns">
                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>

                                <li> <a href="#pop" class="button is-large has-text-primary" id="btn">Apply</a></li>
                            </ul>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                        </p>
                        <h5>Job Nature: Full time</h5>
                        <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                        <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                    </div>
                </div>
                <div class="single-post job-details">
                    <h4 class="single-title">Whom we are looking for</h4>
                    <p>
                        software engineers develop impactful solutions to complex, real-world problems. This is no different for our interns. Engineering interns take ownership of their projects under the mentorship of full-time software engineers. We are looking for top computer science students who are passionate about technology and eager to learn in our high energy, fast-paced environment.


                        As an intern, you'll become an expert on the Bloomberg Terminal and gain a deeper understanding of technology and finance. In addition to your projects, you'll participate in coding challenges, attend tech talks and network with other
                    </p>
                    <p>
                        As an intern, you'll become an expert on the Bloomberg Terminal and gain a deeper understanding of technology and finance. In addition to your projects, you'll participate in coding challenges, attend tech talks and network with other
                    </p>
                </div>
                <div class="single-post job-experience">
                    <h4 class="single-title">Experience Requirements</h4>
                    <ul>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>

								Take ownership of projects under the guidance of your mentor</span>
                        </li>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Be a collaborative member of your team.</span>
                        </li>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Have a deep understanding of data structures and algorithms</span>
                        </li>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Have a deep understanding of data structures and algorithms.</span>
                        </li>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Be an excellent problem solver</span>
                        </li>

                    </ul>
                </div>
                <div class="single-post job-experience">
                    <h4 class="single-title">Job Features & Overviews</h4>
                    <ul>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Work with interdisciplinary teams such as Creative, QA, and Production to identify functional specifications for web applications, websites and various integration projects</li>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Develop, configure and implement REST microservice		</li>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>

                    </ul>
                </div>
                <div class="single-post job-experience">
                    <h4 class="single-title">Education Requirements</h4>
                    <ul>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Have programming experience in C, C++, Java or Python
                        </li>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Have a minimum GPA of 3.0			</li>
                        <li>
                            <img src="img/pages/list.jpg" alt="">
                            <span>Be working toward a BA, BS, MS or PhD in Computer Science	</li>
                    </ul>

                </div>



            </div>
            <div class="col-lg-4 sidebar">
                <div class="single-slidebar">
                    <h4>Jobs by Location</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="index.html"><p>New York</p><span>37</span></a></li>
                        <li><a class="justify-content-between d-flex" href="index.html"><p>Park Montana</p><span>57</span></a></li>
                        <li><a class="justify-content-between d-flex" href="indexy.html"><p>Atlanta</p><span>33</span></a></li>
                        <li><a class="justify-content-between d-flex" href="index.html"><p>Arizona</p><span>36</span></a></li>
                        <li><a class="justify-content-between d-flex" href="index.html"><p>Florida</p><span>47</span></a></li>
                        <li><a class="justify-content-between d-flex" href="index.html"><p>Rocky Beach</p><span>27</span></a></li>
                        <li><a class="justify-content-between d-flex" href="index.html"><p>Chicago</p><span>17</span></a></li>
                    </ul>
                </div>

                <div class="single-slidebar">
                    <h4>Top rated job posts</h4>
                    <div class="active-relatedjob-carusel">
                        <div class="single-rated">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                            <a href="single.html"><h4>Creative Art Designer</h4></a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> new yotk</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>
                        <div class="single-rated">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                            <a href="single.html"><h4>Creative Art Designer</h4></a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>
                        <div class="single-rated">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                            <a href="single.html"><h4>Creative Art Designer</h4></a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>
                    </div>
                </div>

                <div class="single-slidebar">
                    <h4>Jobs by Category</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
                    </ul>
                </div>





















                <!-- 以下就是要弹出来的层，注意：添加mfp-hide先进行隐藏起来。 -->
                <div id="pop" class="mfp-hide">

                    <div class="job_details_area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="apply_job_form white-bg">
                                    <h4>Quick Apply For The Job</h4>
                                    <form action="#">
                                      <!--  <div class="row">
                                            <div class="col-md-6">
                                                <div class="input_field">
                                                    <input type="text" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="input_field">
                                                    <input type="text" placeholder="Last name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input_field">
                                                    <input type="email" placeholder="Email">
                                                </div>
                                            </div>

                                   <!--           <div class="col-md-12">
                                                <div class="input_field">
                                                    <input type="text" placeholder="Website/Portfolio link">
                                                </div>
                                            </div> -->



                                        <!--    <div class="col-md-6">
                                                <p> What is your gender?</p>

                                                <select class="form-select">


                                                    <option  value="none" selected disabled hidden>gender</option>
                                                    <option style="color: #7A838B; font-size: 16px;">female</option>
                                                    <option>male</option>
                                                </select>

                                            </div> -->
                                       <!--     </br>    </br> </br>   </br>    </br>




                                            <div class="col-md-12">
                                                <p> Are you legally eligible to work in the United States?</p>
                                                <select class="form-select">

                                                    <option style="color: #7A838B; font-size: 16px;">yes</option>
                                                    <option>no</option>
                                                </select>

                                            </div>

                                            </br>    </br> </br>   </br>    </br>

                                            <div class="col-md-12">
                                                <p>  Will you now or in the future require visa sponsorship for employment? </p>
                                                <select class="form-select">

                                                    <option style="color: #7A838B; font-size: 16px;">yes</option>
                                                    <option>no</option>
                                                </select>

                                            </div>
                                            </br>    </br> </br>   </br>    </br>




-->

                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <label> <input  value="Browse" type="file" accept=".pdf, .doc, .docx" />Upload Resume </label>
                                                </div>

                                            </div>
                                        </div>
                                        </br>    </br> </br>   </br>    </br>
                                     <!--   <form action=" " method="post"
                                              enctype="multipart/form-data">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" id="inputGroupFileAddon03"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="custom-file">

                                                        <input type="file" accept=".pdf, .doc, .docx" />
                                                        <!--  <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">-->
                                                     <!--   <label class="custom-file-label" for="inputGroupFile03">Upload CV</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                            </br> </br>   </br>    </br>
                                        <!--    <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" id="inputGroupFileAddon04"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon03">
                                                        <label class="custom-file-label" for="inputGroupFile03">Upload Coverletter</label>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="col-md-12">
                                                <div class="submit_btn">
                                                    <button class="boxed-btn3 w-100" type="submit">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

</body>
</html>

<script>

    $('#btn').magnificPopup({
        type: 'inline',         // 行内的类型，类比图片的模式
        closeBtnInside: true,   // 显示关闭按钮
        closeonBgClick: false  // 点击遮罩透明背景关闭弹出层
    });
</script>


<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>