<!DOCTYPE HTML>
<html>
<head>
  @include('user/layouts/head')

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>51carrer-ProfileEdit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- summernote -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <link href="user/profile/style/css/style2.css" rel="stylesheet">
    <link href="user/profile/style/css/external.min.css"  rel="stylesheet">
    <link href="user/profile/style/css/popup.css"  rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    @include('user/layouts/header')
  </header>
  <!-- End Header -->

</br>
</br>
</br>
</br>
<div id="body">
    <div id="container">

        <div class="clearfix">
            <div class="content_l">
                <div class="fl" id="resume_name">

                </div>

                <div class="profile_box" id="basicInfo">
                    <h2>基本信息</h2>
                    <span class="c_edit"></span>
                    <div class="basicShow">
            			            			<span>Ying Ma |  女 |  Master | New York<br>
            			            			3472005242 | 123456789@qq.com<br>
            			</span>
                        <div class="m_portrait">
                            <div></div>
                            <img width="120" height="120" alt="jason" src="style/images/default_headpic.png">
                        </div>
                    </div>

                    <div class="basicEdit dn">
                        <form id="profileForm">
                            <table>
                                <tbody><tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="姓名" value="Ying Ma" name="name" id="name">
                                    </td>
                                    <td valign="top"></td>
                                    <td>
                                        <ul class="profile_radio clearfix reset">
                                            <li class="current">
                                                男<em></em>
                                                <input type="radio" name="gender" value="男">
                                            </li>
                                            <li>
                                                女<em></em>
                                                <input type="radio" checked="checked" name="gender" value="女">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" id="topDegree" value="bachelor " name="topDegree">
                                        <input type="button" value="bachelor " id="select_topDegree" class="profile_select_190 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_190 dn" id="box_topDegree" style="display: none;">
                                            <ul>
                                                <li>Bachelor </li>
                                                <li>Master</li>
                                                <li>Phd</li>
                                                <li>Other</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" id="workyear" value="" name="workyear">
                                        <input type="button" value="" id="select_workyear" class="profile_select_190 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_190 dn" id="box_workyear" style="display: none;">
                                            <ul>
                                                <li>应届毕业生</li>
                                                <li>1年</li>
                                                <li>2年</li>
                                                <li>3年</li>
                                                <li>4年</li>
                                                <li>5年</li>
                                                <li>6年</li>
                                                <li>7年</li>
                                                <li>8年</li>
                                                <li>9年</li>
                                                <li>10年</li>
                                                <li>10年以上</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" placeholder="手机号码" value="3472005242" name="tel" id="tel">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" placeholder="接收面试通知的邮箱" value="123456789@qq.com" name="email" id="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td colspan="3">
                                        <input type="hidden" id="currentState" value="" name="currentState">
                                        <input type="button" value="目前状态" id="select_currentState" class="profile_select_410 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_410 dn" id="box_currentState" style="display: none;">
                                            <ul>
                                                <li>我目前已离职，可快速到岗</li>
                                                <li>我目前正在职，正考虑换个新环境</li>
                                                <li>我暂时不想找工作</li>
                                                <li>我是应届毕业生</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </form><!--end #profileForm-->
                        <div class="new_portrait">
                            <div class="portrait_upload" id="portraitNo">
                                <span>上传自己的头像</span>
                            </div>
                            <div class="portraitShow dn" id="portraitShow">
                                <img width="120" height="120" src="">
                                <span>更换头像</span>
                            </div>
                            <input type="file" value="" title="支持jpg、jpeg、gif、png格式，文件小于5M" onchange="img_check(this,'h/resume/uploadPhoto.json','headPic');" name="headPic" id="headPic" class="myfiles">
                            <!-- <input type="hidden" id="headPicHidden" /> -->
                            <em>
                                尺寸：120*120px <br>
                                大小：小于5M
                            </em>
                            <span style="display:none;" id="headPic_error" class="error"></span>
                        </div><!--end .new_portrait-->
                    </div><!--end .basicEdit-->
                    <input type="hidden" id="nameVal" value="{$user->name}" >
                    <input type="hidden" id="genderVal" value="女">
                    <input type="hidden" id="topDegreeVal" value="Master">
                    <input type="hidden" id="workyearVal" value="1年">
                    <input type="hidden" id="currentStateVal" value="">
                    <input type="hidden" id="emailVal" value="123456789@qq.com">
                    <input type="hidden" id="telVal" value="3472005242">
                    <input type="hidden" id="pageType" value="1">
                </div><!--end #basicInfo-->

                <div class="profile_box" id="expectJob">
                    <h2>期望工作</h2>
                    <span class="c_edit dn"></span>
                    <div class="expectShow dn">
                        <span></span>
                    </div><!--end .expectShow-->
                    <div class="expectEdit dn">
                        <form id="expectForm">
                            <table>
                                <tbody><tr>
                                    <td>
                                        <input type="hidden" id="expectCity" value="" name="expectCity">
                                        <input type="button" value="期望城市，如：纽约" id="select_expectCity" class="profile_select_287 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_596 dn" id="box_expectCity" style="display: none;">
                                            <dl>
                                                <dt>热门城市</dt>
                                                <dd>
                                                    <span>New York</span>
                                                    <span>Boston</span>
                                                    <span>Chicago</span>
                                                    <span>San Francisco</span>
                                                    <span>Los Angeles</span>
                                                    <span>Miami</span>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Arizona</dt>
                                                <dd>
                                                    <span>Phoenix</span>
                                                    <span>Tucson</span>
                                                    <span>Mesa</span>

                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>California</dt>
                                                <dd>
                                                    <span>Los Angeles</span>
                                                    <span>San Diego</span>
                                                    <span>San José</span>
                                                    <span>San Francisco</span>

                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Illinois</dt>
                                                <dd>
                                                    <span>Chicago</span>
                                                    <span>Aurora</span>
                                                    <span>Rockford</span>

                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Maryland</dt>
                                                <dd>
                                                    <span>Baltimore</span>
                                                    <span>Frederick</span>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Michigan</dt>
                                                <dd>
                                                    <span>Detroit</span>
                                                    <span>Grand Rapids</span>
                                                    <span>Warren</span>

                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>New York</dt>
                                                <dd>
                                                    <span>New York</span>
                                                    <span>Buffalo</span>
                                                    <span>Rochester</span>

                                                </dd>
                                            </dl>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="profile_radio clearfix reset">
                                            <li class="current">
                                                full<em></em>
                                                <input type="radio" checked="" name="type" value="全职">
                                            </li>
                                            <li>
                                                part<em></em>
                                                <input type="radio" name="type" value="兼职">
                                            </li>
                                            <li>
                                                intern<em></em>
                                                <input type="radio" name="type" value="实习">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" placeholder="期望职位，如：SDE" value="" name="expectPosition" id="expectPosition">
                                    </td>

                                    <td>
                                        <input type="hidden" id="expectSalary" value="" name="expectSalary">
                                        <input type="button" value="期望月薪" id="select_expectSalary" class="profile_select_287 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_287 dn" id="box_expectSalary" style="display: none;">
                                            <ul>
                                                <li>2k以下</li>
                                                <li>2k-5k</li>
                                                <li>5k-10k</li>
                                                <li>10k-15k</li>
                                                <li>15k-25k</li>
                                                <li>25k-50k</li>
                                                <li>50k以上</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" >取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </form><!--end #expectForm-->
                    </div><!--end .expectEdit-->
                    <div class="expectAdd pAdd">
                        填写准确的期望工作能大大提高求职成功率哦…<br>
                        快来添加期望工作吧！
                        <span>添加期望工作</span>
                    </div><!--end .expectAdd-->

                    <input type="hidden" id="expectJobVal" value="">
                    <input type="hidden" id="expectCityVal" value="">
                    <input type="hidden" id="typeVal" value="">
                    <input type="hidden" id="expectPositionVal" value="">
                    <input type="hidden" id="expectSalaryVal" value="">
                </div><!--end #expectJob-->

                <div class="profile_box" id="workExperience">
                    <h2>工作经历  <span> （required）</span></h2>
                    <span class="c_add dn"></span>
                    <div class="experienceShow dn">
                        <form class="experienceForm borderBtm dn">
                            <table>
                                <tbody><tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="公司名称" name="companyName" class="companyName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="职位名称，如：产品经理" name="positionName" class="positionName">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="companyYearStart" value="" name="companyYearStart">
                                            <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_companyYearStart">
                                            <div class="box_companyYearStart boxUpDown boxUpDown_139 dn" style="display: none;">

                                                <ul>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="companyMonthStart" value="" name="companyMonthStart">
                                            <input type="button" value="开始月份" class="profile_select_139 profile_select_normal select_companyMonthStart">
                                            <div style="display: none;" class="box_companyMonthStart boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="companyYearEnd" value="" name="companyYearEnd">
                                            <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_companyYearEnd">
                                            <div class="box_companyYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <ul>
                                                        <li>2020</li>
                                                        <li>2019</li>
                                                        <li>2018</li>
                                                        <li>2017</li>
                                                        <li>2016</li>
                                                        <li>2015</li>
                                                        <li>2014</li>
                                                        <li>2013</li>
                                                        <li>2012</li>
                                                        <li>2011</li>
                                                        <li>2010</li>

                                                    </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="companyMonthEnd" value="" name="companyMonthEnd">
                                            <input type="button" value="结束月份" class="profile_select_139 profile_select_normal select_companyMonthEnd">
                                            <div style="display: none;" class="box_companyMonthEnd boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" >取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <input type="hidden" class="expId" value="">
                        </form><!--end .experienceForm-->

                        <ul class="wlist clearfix">
                        </ul>
                    </div><!--end .experienceShow-->
                    <div class="experienceEdit dn">
                        <form class="experienceForm">
                            <table>
                                <tbody><tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="公司名称" name="companyName" class="companyName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="职位名称，如：产品经理" name="positionName" class="positionName">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="companyYearStart" value="" name="companyYearStart">
                                            <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_companyYearStart">
                                            <div class="box_companyYearStart boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="companyMonthStart" value="" name="companyMonthStart">
                                            <input type="button" value="开始月份" class="profile_select_139 profile_select_normal select_companyMonthStart">
                                            <div style="display: none;" class="box_companyMonthStart boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="companyYearEnd" value="" name="companyYearEnd">
                                            <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_companyYearEnd">
                                            <div class="box_companyYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>至今</li>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="companyMonthEnd" value="" name="companyMonthEnd">
                                            <input type="button" value="结束月份" class="profile_select_139 profile_select_normal select_companyMonthEnd">
                                            <div style="display: none;" class="box_companyMonthEnd boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" >取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <input type="hidden" class="expId" value="">
                        </form><!--end .experienceForm-->
                    </div><!--end .experienceEdit-->

                    <div class="experienceAdd pAdd">
                        工作经历最能体现自己的工作能力，<br>
                        且完善后才可投递简历哦！
                        <span>添加工作经历</span>
                    </div><!--end .experienceAdd-->
                </div><!--end #workExperience-->

                <div class="profile_box" id="projectExperience">
                    <h2>项目经验</h2>
                    <span class="c_add dn"></span>
                    <div class="projectShow dn">
                        <ul class="plist clearfix">
                        </ul>
                    </div><!--end .projectShow-->
                    <div class="projectEdit dn">
                        <form class="projectForm">
                            <table>
                                <tbody><tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="项目名称" name="projectName" class="projectName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="担任职务，如：产品负责人" name="thePost" class="thePost">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="projectYearStart" value="" name="projectYearStart">
                                            <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_projectYearStart">
                                            <div class="box_projectYearStart  boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="projectMonthStart" value="" name="projectMonthStart">
                                            <input type="button" value="开始月份" class="profile_select_139 profile_select_normal select_projectMonthStart">
                                            <div style="display: none;" class="box_projectMonthStart boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="projectYearEnd" value="" name="projectYearEnd">
                                            <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_projectYearEnd">
                                            <div class="box_projectYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>至今</li>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="projectMonthEnd" value="" name="projectMonthEnd">
                                            <input type="button" value="结束月份" class="profile_select_139 profile_select_normal select_projectMonthEnd">
                                            <div style="display: none;" class="box_projectMonthEnd boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top"></td>
                                    <td colspan="3">
                                        <textarea class="projectDescription s_textarea" name="projectDescription" placeholder="项目描述"></textarea>
                                        <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top"></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" >取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <input type="hidden" value="" class="projectId">
                        </form><!--end .projectForm-->
                    </div><!--end .projectEdit-->
                    <div class="projectAdd pAdd">
                        项目经验是用人单位衡量人才能力的重要指标哦！<br>
                        来说说让你难忘的项目吧！
                        <span>添加项目经验</span>
                    </div><!--end .projectAdd-->
                </div><!--end #projectExperience-->

                <div class="profile_box" id="educationalBackground">
                    <h2>教育背景<span>（required）</span></h2>
                    <span class="c_add dn"></span>
                    <div class="educationalShow dn">
                        <form class="educationalForm borderBtm dn">
                            <table>
                                <tbody><tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="学校名称" name="schoolName" class="schoolName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" class="degree" value="" name="degree">
                                        <input type="button" value="学历" class="profile_select_287 profile_select_normal select_degree">
                                        <div class="box_degree boxUpDown boxUpDown_287 dn" style="display: none;">
                                            <ul>

                                                <li>Bachelor</li>
                                                <li>Master</li>
                                                <li>PhD</li>
                                                <li>Other</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="专业名称" name="professionalName" class="professionalName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="schoolYearStart" value="" name="schoolYearStart">
                                            <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_schoolYearStart">
                                            <div class="box_schoolYearStart boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="schoolYearEnd" value="" name="schoolYearEnd">
                                            <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_schoolYearEnd">
                                            <div style="display: none;" class="box_schoolYearEnd  boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel">取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <input type="hidden" class="eduId" value="">
                        </form><!--end .educationalForm-->

                        <ul class="elist clearfix">
                        </ul>
                    </div><!--end .educationalShow-->
                    <div class="educationalEdit dn">
                        <form class="educationalForm">
                            <table>
                                <tbody><tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="学校名称" name="schoolName" class="schoolName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" class="degree" value="" name="degree">
                                        <input type="button" value="学历" class="profile_select_287 profile_select_normal select_degree">
                                        <div class="box_degree boxUpDown boxUpDown_287 dn" style="display: none;">
                                            <ul>
                                                <li>Bachelor</li>
                                                <li>Master</li>
                                                <li>PhD</li>
                                                <li>Other</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="专业名称" name="professionalName" class="professionalName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="schoolYearStart" value="" name="schoolYearStart">
                                            <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_schoolYearStart">
                                            <div class="box_schoolYearStart boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="schoolYearEnd" value="" name="schoolYearEnd">
                                            <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_schoolYearEnd">
                                            <div class="box_schoolYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" >取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <input type="hidden" class="eduId" value="">
                        </form><!--end .educationalForm-->
                    </div><!--end .educationalEdit-->
                    <div class="educationalAdd pAdd">
                        教育背景可以充分体现你的学习和专业能力，<br>
                        且完善后才可投递简历哦！
                        <span>添加教育经历</span>
                    </div><!--end .educationalAdd-->
                </div><!--end #educationalBackground-->

                <div class="profile_box" id="selfDescription">
                    <h2>自我描述</h2>
                    <span class="c_edit dn"></span>
                    <div class="descriptionShow dn">

                    </div><!--end .descriptionShow-->
                    <div class="descriptionEdit dn">
                        <form class="descriptionForm">
                            <table>
                                <tbody><tr>
                                    <td colspan="2">
                                        <textarea class="selfDescription s_textarea" name="selfDescription" placeholder=""></textarea>
                                        <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel">取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </form><!--end .descriptionForm-->
                    </div><!--end .descriptionEdit-->
                    <div class="descriptionAdd pAdd">
                        描述你的性格、爱好以及吸引人的经历等，<br>
                        让企业了解多元化的你！
                        <span>添加自我描述</span>
                    </div><!--end .descriptionAdd-->
                </div><!--end #selfDescription-->

                <div class="profile_box" id="worksShow">
                    <h2>作品展示</h2>
                    <span class="c_add dn"></span>
                    <div class="workShow dn">
                        <ul class="slist clearfix">
                        </ul>
                    </div><!--end .workShow-->
                    <div class="workEdit dn">
                        <form class="workForm">
                            <table>
                                <tbody><tr>
                                    <td>
                                        <input type="text" placeholder="请输入作品链接" name="workLink" class="workLink">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea maxlength="100" class="workDescription s_textarea" name="workDescription" placeholder="请输入说明文字"></textarea>
                                        <div class="word_count">你还可以输入 <span>100</span> 字</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel">取 消</a>
                                    </td>
                                </tr>
                                </tbody></table>
                            <input type="hidden" class="showId" value="">
                        </form><!--end .workForm-->
                    </div><!--end .workEdit-->
                    <div class="workAdd pAdd">
                        好作品会说话！<br>
                        快来秀出你的作品打动企业吧！
                        <span>添加作品展示</span>
                    </div><!--end .workAdd-->
                </div><!--end #worksShow-->
                <input type="hidden" id="resumeId" value="268472">
            </div><!--end .content_l-->
            <div class="content_r">
                <div class="mycenterR" id="myInfo">
                    <h2>我的信息</h2>
                    <a target="_blank" href="collections001.html">我收藏的职位</a>
                    <br>
                    <a target="_blank" href="subscribe001.html">我订阅的职位</a>
                </div><!--end #myInfo-->

                <div class="mycenterR" id="myResume">
                    <h2>我的附件简历
                        <a title="上传附件简历" href="#uploadFile" class="inline cboxElement">上传简历</a>
                    </h2>
                    <div class="resumeUploadDiv">
                        暂无附件简历
                    </div>
                </div><!--end #myResume-->


            </div>

            <input type="hidden" id="userid" name="userid" value="314873">


            <div style="display:none;">
                <!-- 上传简历 -->
                <div class="popup" id="uploadFile">
                    <table width="100%">
                        <tbody><tr>
                            <td align="center">
                                <form>
                                    <a class="btn_addPic">
                                        <span>选择上传文件</span>
                                        <input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload')" class="filePrew" id="resumeUpload" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" tabindex="3">
                                    </a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">支持word、pdf格式文件<br>文件大小需小于10M</td>
                        </tr>
                        <tr>
                            <!--	<td align="left" style="color:#dd4a38; padding-top:10px;">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传</td>-->
                        </tr>
                        <tr>
                            <td align="center"><img width="55" height="16" alt="loading" style="visibility: hidden;" id="loadingImg" src="style/images/loading.gif"></td>
                        </tr>
                        </tbody></table>
                </div><!--/#uploadFile-->

                <!-- 简历上传成功 -->
                <div class="popup" id="uploadFileSuccess">
                    <h4>简历上传成功！</h4>
                    <table width="100%">
                        <tbody><tr>
                            <td align="center"><p>你可以将简历投给你中意的公司了。</p></td>
                        </tr>
                        <tr>
                            <td align="center"><a class="btn_s">确&nbsp;定</a></td>
                        </tr>
                        </tbody></table>
                </div><!--/#uploadFileSuccess-->

                <!-- 没有简历请上传 -->
                <div class="popup" id="deliverResumesNo">
                    <table width="100%">
                        <tbody><tr>
                            <td align="center"><p class="font_16">你在拉勾还没有简历，请先上传一份</p></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <form>
                                    <a class="btn_addPic" >
                                        <span>选择上传文件</span>
                                        <input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload1')" class="filePrew" id="resumeUpload1" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
                                    </a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
                        </tr>
                        </tbody></table>
                </div><!--/#deliverResumesNo-->

                <!-- 上传附件简历操作说明-重新上传 -->
                <div class="popup" id="fileResumeUpload">
                    <table width="100%">
                        <tbody><tr>
                            <td>
                                <div class="f18 mb10">请上传标准格式的word简历</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="f16">
                                    操作说明：<br>
                                    打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
                            </td>
                        </tr>
                        </tbody></table>
                </div><!--/#fileResumeUpload-->

            </div>


            <div class="" id="qr_cloud_resume" style="display: none;">
                <div class="cloud">
                    <img width="134" height="134" src="">
                    <a class="close"></a>
                </div>
            </div>

            <div class="clear"></div>
            <input type="hidden" value="97fd449bcb294153a671f8fe6f4ba655" id="resubmitToken">
            <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
        </div>
    </div>
    <div id="footer">

    </div>
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

    <script async="" src="user/profile/style/js/conversion.js"></script>


    <script src="user/profile/style/js/jquery.1.10.1.min.js"></script>
    <script src="user/profile/style/js/jquery.lib.min.js" ></script>

    <script  src="user/profile/style/js/ajaxfileupload.js"></script>
    <script src="user/profile/style/js/additional-methods.js" ></script>

    <script type="text/javascript" src="user/profile/style/js/excanvas.js"></script>


    <script src="user/profile/style/js/conv.js"></script>
    <script src="user/profile/style/js/ajaxCross.json" charset="UTF-8"></script>


    <script src="user/profile/style/js/Chart.min.js"></script>
    <script src="user/profile/style/js/profile.min.js"></script>

    <script src="user/profile/style/js/core.min.js"></script>
    <script src="user/profile/style/js/popup.min.js"></script>


    </div>
    <footer>
     @include('user/layouts/footer')
    </footer>

  </body>
</html>
