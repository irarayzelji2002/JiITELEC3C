@extends('layout.app')
@section('title', 'Developer Projects')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/developer-projects.css') }}" />
@endsection
@section('content')
    <section class="developer-projects">
        <!-- Title -->
        <div class="title-whole">
            <div class="title-header"></div>
            {{-- <div class="wavyline">
                <img src="{{ asset('assets/elements/wavy-lines/wavyline-pink.svg') }}" alt="wavy line" class="wavyline" />
            </div> --}}
            <div class="title-flowers title-flowers-developer-projects d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <div class="box"></div>
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-yellow.svg') }}" alt="flower"
                    class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-lightyellow.svg') }}" alt="flower"
                    class="big-flower" />
            </div>
            <div class="title title-developer-projects">
                <h1 class="uppercase">Projects</h1>
            </div>
        </div>
        <!-- Projects -->
        <div class="section section-developer-projects">
            <div class="subtitle subtitle-it d-flex flex-column align-items-center">
                <h2 class="text-center geomanist-ultra uppercase">
                    IT & Computer Science
                </h2>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Project 1 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="{{ route('project-details', ['type' => 'developer', 'name' => 'palengkerist']) }}"
                                    class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/developer/1 Palengkerist/Palengkerist-Thumbnail.png') }}"
                                        alt="Palengkerist" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        Palengkerist: A Palengke Review App
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A review web app for discovering, rating, reviewing, and saving wet markets or
                                        palengkes in the Philippines, integrating APIs and cloud databases
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize"
                                        href="{{ route('project-details', ['type' => 'developer', 'name' => 'palengkerist']) }}"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/developer/2 PrioriTrack/PrioriTrack-Thumbnail.png') }}"
                                        alt="PrioriTrack" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        PrioriTrack: Document Tracking and Management System
                                        for Anrylle Property Management
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A robust document tracking and management system with an intuitive dashboard, client
                                        and document tracking, management page, reports, and notification capabilities for
                                        efficient property management
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 3 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/developer/3 Interstellar Voyage/Interstellar Voyage-Thumbnail.png') }}"
                                        alt="Interstellar Voyage" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        Interstellar Voyage: A Narrative Clicker Game
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        An Android mobile clicker game with captivating stories and animations, including
                                        missions, levels, and leaderboards, enhancing user interaction and gameplay
                                        experience
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 4 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/developer/4 Thomasian Memoir/Thomasian Memoir-Thumbnail.png') }}"
                                        alt="Thomasian Memoir" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        Thomasian Memoir: An Online Journal Platform for Thomasians
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A social media app that serves as an online journal tailored for Thomasians at all
                                        year levels, serving as an online journal to document and share experiences across
                                        different academic stages
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 5 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/developer/5 SubLogger/SubLogger-Thumbnail.png') }}"
                                        alt="SubLogger" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        SubLogger: A Subscription Tracker Web Application
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A web app that liberates users from the stress of managing subscriptions, by keeping
                                        track of due dates and providing timely reminders for discontinuation
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 6 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/developer/6 aGROWculture/aGROWculture-Thumbnail.png') }}"
                                        alt="aGROWculture" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        aGROWculture: An E-Commerce Website for Farmers in the Philippines
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        An e-commerce web platform for farmers to sell products and for distributors to buy
                                        products through an organized catalog, aimed at increasing market reach and
                                        lessening food wasted
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 7 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/developer/7 HomeyFeel/HomeyFeel-Thumbnail.png') }}"
                                        alt="HomeyFeel" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        HomeyFeel: An Emotion-Based Quote Generator App
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        An Android mobile app that allows users to select specific emotions or feelings and
                                        displays a quote relating to them that can also be regenerated
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Moving Text -->
        <div class="section section-developer-projects-moving-text">
            <div class="moving-text-container d-flex justify-content-center">
                <div class="moving-text">
                    <p class="integralcf-heavy uppercase">
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                    </p>
                </div>
                <div class="moving-text">
                    <p class="integralcf-heavy uppercase">
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                        <span>Projects</span>
                        <span>IT and Computer Science</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
