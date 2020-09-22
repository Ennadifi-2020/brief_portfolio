@extends(backpack_view('blank'))



@section('content')


    <div class="wrapper">
        <header class="header">
            <div class="head-bg" style="background-image: url('img/uploads/rs-cover.jpg')"></div>
        </header>
        <div class="content">
            <div class="container">

                <section id="about" class="section section-about">
                    <div class="animate-up">
                        <div class="section-box">
                            <div class="profile">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="profile-photo"><img src="{{asset('img/profil1.jpg')}}" alt="Robert Smith" /></div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="profile-info">
                                            <div class="profile-preword"><span>Hello</span></div>
                                            <h1 class="profile-title"><span>I'm</span> ELFAIZ Ennadifi</h1>
                                            <h2 class="profile-position">Developer web</h2>
                                        </div>
                                        <ul class="profile-list">
                                            <li class="clearfix">
                                                <strong class="title">Age</strong>
                                                <span class="cont">31</span>
                                            </li>
                                            <li class="clearfix">
                                                <strong class="title">Address</strong>
                                                <span class="cont">Qu Salam Rue Moulay Brahim N°43, Youssoufia Maroc</span>
                                            </li>
                                            <li class="clearfix">
                                                <strong class="title">E-mail</strong>
                                                <span class="cont">Eenadif@student.youcode.ma</span></a>
                                                </span>
                                            </li>
                                            <li class="clearfix">
                                                <strong class="title">Phone</strong>
                                                <span class="cont"><a href="tel:+212 630 76 96 75">+212 630 76 96 75</a></span>
                                            </li>
                                            <li class="clearfix">
                                                <strong class="title">About Me</strong>
                                                <span class="cont">Web developer student in YouCode from Youssoufia Morocco, I have serious passion for front-end back-end effects</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-social">
                            </div>
                        </div>
                        <!-- <div class="section-txt-btn">
                            <p><a class="btn btn-lg btn-border ripple" target="_blank" href="{{asset('file/CV de ELFAIZ Ennadifi001.pdf')}}">Download Resume</a></p>
                            <p>Web developer student in YouCode from Youssoufia Morocco, I have serious passion for front-end back-end effects</p>
                        </div> -->
                    </div>
                </section>
                <section id="skills" class="section section-skills">
                    <div class="animate-up">
                        <h2 class="section-title">Professional Skills</h2>
                        <div class="section-box">
                            <div class="row">
                              @foreach ($skill as $comp)
                                <div class="col-sm-6 coll">
                                    <div class="progress-bar" style="width: {{$comp->percentage.'%'}}">
                                        <div class="bar-data">
                                            <span class="bar-title">{{$comp->skill_name}}</span>
                                            <span class="bar-value">{{$comp->percentage.'%'}}</span>
                                        </div>
                                        <div class="bar-line">
                                            <span class="bar-fill" data-width="100%"></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <section id="portfolio" class="section section-portfolio">
                    <div class="animate-up">
                        <h2 class="section-title">Portfolio</h2>

                        <div class="grid">
                          @foreach ($work as $job)

                                <div class="grid-box">
                                    <figure class="portfolio-figure">
                                        <img src="{{Storage::disk('local')->url($job->image)}}" alt="{{$job->work_name}}"  />

                                        <figcaption class="portfolio-caption">
                                            <div class="portfolio-caption-inner">
                                                <a href="{{$job->url_link}}" target="_blank"><h3 class="portfolio-title"> {{$job->work_name}}</h3></a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                @endforeach

                        </div>

                    </div>
                </section>
                <section id="experience" class="section section-experience">
                    <div class="animate-up">
                        <h2 class="section-title">Work Experience</h2>
                        <div class="timeline">
                            <div class="timeline-bar"></div>
                            <div class="timeline-inner clearfix">
                                <div class="timeline-box timeline-box-left">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right">
                                        <div class="date">2017</div>
                                        <h3>Stage pratique à la Société  Société (IMME)</h3>

                                        <h4>Installation Mécanique et Électrique à Casablanca.</h4>
                                        <p>Installation des circuits logiques combinatoires et séquentiels..</p>

                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-right">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left">
                                        <div class="date">2016</div>
                                        <h3>Stage à l’office chérifien des phosphates (OCP)</h3>
                                        <h4>Service Électrique à Youssoufia.</h4>
                                        <p>Installation et entretien de système électrique commandé par (API).</p>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-left">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right">
                                    <div class="date">2015</div>
                                        <h3>Stage à l’office chérifien des phosphates (OCP)</h3>
                                        <h4>Service Électrique à Youssoufia.</h4>
                                        <p>Réparation des moteurs électriques des convoyeurs</p>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-right">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left">
                                        <div class="date">2012</div>
                                        <h3>Stage à l’office chérifien des phosphates (OCP)</h3>
                                        <h4>Service Électrique à Youssoufia.</h4>
                                        <p>Démontage et Remontage des moteurs électriques.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="education" class="section section-education">
                    <div class="animate-up">
                        <h2 class="section-title">Education</h2>
                        <div class="timeline">
                            <!-- <div class="timeline-bar"></div> -->
                            <div class="timeline-inner clearfix">

                            <div class="timeline-box timeline-box-compact timeline-box-left">
                                    <div class="timeline-box-inner">
                                        <div><span>2019 En cours</span></div>
                                        <h3> Formation Développeur Web et développement et mobile,</h3>
                                        <h4>Youcode Youssoufia</h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-right">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-">
                                        <div><span>2014 - 2016</span></div>
                                        <h3> Diplôme de Technicien en Electricité de Maintenance Industrielle</h3>
                                        <h4>Casablanca</h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-left">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left">
                                        <div><span>2013 - 2014</span></div>
                                        <h3>Diplôme sportive Savate</h3>
                                        <h4>Boxe francaise</h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-right">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left">
                                        <div><span>2010 - 2012</span></div>
                                        <h3>Diplôme de Electromécanique</h3>
                                        <h4>Youssoufia</h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-left">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right">
                                        <div><span>2009 - 2010</span></div>
                                        <h3>Diplôme de Menuiserie Aluminium</h3>
                                        <h4>Youssoufia</h4>
                                    </div>
                                </div>
                                <div class="timeline-box timeline-box-compact timeline-box-right">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right">
                                        <div><span>2006 - 2007</span></div>
                                        <h3>Niveau Baccalauréat Lettre moderne</h3>
                                        <h4>Lycée Kachkat à Youssoufia.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Ennadifi</p>
        <div class="footer__social">
            <a href="https://www.facebook.com/ndf.fz" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="https://github.com/Ennadifi-2020" class="footer__icon"><i class='bx bxl-github'></i></a>
            <a href="https://www.linkedin.com/in/ennadifi-elfaiz-946a8b14b/" class="footer__icon"><i class='bx bxl-linkedin'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-google-plus-circle'></i></a>
            <a href="" class="footer__icon"><i class='bx bxl-skype'></i></a>

            @if (config('backpack.base.show_powered_by') || config('backpack.base.developer_link'))
                <div class="text-muted ml-auto mr-auto">
                  @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
                  {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" rel="noopener" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
                  @endif
                  @if (config('backpack.base.show_powered_by'))
                  {{ trans('backpack::base.powered_by') }} <a target="_blank" rel="noopener" href="http://backpackforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>.
                  @endif
                </div>
            @endif
        </div>
        <p>&#169; 2020 copyright all right reserved</p>
    </footer>
@endsection
