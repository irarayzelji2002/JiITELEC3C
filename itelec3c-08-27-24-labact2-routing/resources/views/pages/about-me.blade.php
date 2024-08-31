@extends('layout.app')
@section('title', 'About Me')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/about-me.css') }}" />
@endsection
@section('content')
    <section class="about-me">
        <!-- Title -->
        <div class="title-whole">
            <div class="title-header"></div>
            {{-- <div class="wavyline">
            <img src="{{ asset('assets/elements/wavy-lines/wavyline-yellow.svg') }}" alt="wavy line" class="wavyline" />
        </div> --}}
            <div class="title-flowers title-flowers-about-me d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <div class="box"></div>
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-red.svg') }}" alt="flower" class="small-flower" />
                <img src="{{ asset('assets/elements/flowers/flower-pink.svg') }}" alt="flower" class="big-flower" />
            </div>
            <div class="title title-about-me">
                <h1 class="uppercase">About Me</h1>
            </div>
        </div>
        <div class="section section-about-me">
            {{-- Description & Picture --}}
            <div class="d-flex justify-content-center main-cont description">
                <div class="container description">
                    <div class="row align-items-center flex-column flex-lg-row">
                        <div class="col-lg-6 d-flex justify-content-center mb-4 mb-lg-0">
                            <div class="circle-wrapper">
                                <div class="blob"></div>
                                <div class="circle-pic">
                                    <div class="circle-img">
                                        <img src="{{ asset('assets/elements/Ira-pic2.png') }}" alt="Ira Pic">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-left text-description">
                            <div class="text">
                                <div class="title">
                                    <h1 class="geomanist-ultra uppercase">Hi!</h1>
                                    <h1 class="geomanist-ultra uppercase">I'm Ira Ji.</h1>
                                </div>
                                <p class="geomanist-book">
                                    I’m a full-stack developer and a graphic designer from Tondo, Manila. I had tertiary
                                    education
                                    at the University of Santo Tomas with a Bachelor of Science in Information Technology,
                                    majoring in Web and Mobile App Development. I’m a diligent, reliable, ambitious, and
                                    creative person.
                                    I strive to achieve the best of myself and am persistent in everything I do. I am
                                    enthusiastic
                                    about learning new things and can learn quickly. I also enjoy drawing, handicrafts,
                                    shows,
                                    movies, and music.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Education, Work Experience, Extracurricular Activities --}}
            <div class="container main-cont text-center d-flex justify-content-center">
                <div class="row g-2 g-lg-3 d-flex justify-content-center align-items-stretch" style="width: 100%;">
                    {{-- Education --}}
                    <div class="col-12 col-lg-6 col-xl-4 d-flex flex-column align-items-center box-container">
                        <div class="container text-center box-with-bg one h-100">
                            <img src="{{ asset('assets/elements/flowers/outline-flower-white.svg') }}" alt="white flower"
                                class="flower one" />
                            {{-- Title --}}
                            <h1 class="container-title container-title-about-me uppercase">
                                Education
                            </h1>
                            {{-- Row --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">
                                                    2021 – 2025
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">
                                                    Bachelor of Science in Information Technology, Major in Web and Mobile
                                                    App Development
                                                </div>
                                                <div class="p-3 text geomanist-book">
                                                    <i>University of Santo Tomas</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Row --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">2020 – 2021</div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">Bachelor of Science in Architecture
                                                </div>
                                                <div class="p-3 text geomanist-book"><i>University of Santo Tomas</i></div>
                                                <div class="p-3 text geomanist-light">Completed 53 units</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Work Experience --}}
                    <div class="col-12 col-lg-6 col-xl-4 d-flex flex-column align-items-center box-container">
                        <div class="container text-center box-with-bg two h-100">
                            <img src="{{ asset('assets/elements/flowers/outline-flower-white.svg') }}" alt="white flower"
                                class="flower one" />
                            {{-- Title --}}
                            <h1 class="container-title container-title-about-me uppercase">
                                Work Experience
                            </h1>
                            {{-- Row --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">
                                                    Nov 2019 – Feb 2020
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">
                                                    STEM Student Intern
                                                </div>
                                                <div class="p-3 text geomanist-book">
                                                    <i>Windsor International Maritime Clinic, Inc. - Intramuros, Manila</i>
                                                </div>
                                                <div class="p-3 text geomanist-light">
                                                    Worked 80 hours in processing, audiology, accounting, and drug testing
                                                    section
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Extracurricular Activities --}}
                    <div class="col-12 col-lg-6 col-xl-4 d-flex flex-column align-items-center box-container">
                        <div class="container text-center box-with-bg three h-100">
                            <img src="{{ asset('assets/elements/flowers/outline-flower-white.svg') }}" alt="white flower"
                                class="flower one" />
                            {{-- Title --}}
                            <h1 class="container-title container-title-about-me uppercase">
                                Extracurricular Activities
                            </h1>
                            {{-- TOMCAT - UST --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 org-name">
                                                <div class="p-3 text geomanist-black">
                                                    TOMCAT - UST
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Rows --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">
                                                    2024 – 2025
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">
                                                    Executive Associate to the Chief Creatives Officer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">
                                                    2023 – 2024
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">
                                                    Chief Creatives Officer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">
                                                    2022 – 2023
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">
                                                    Executive Associate to the Graphics Department Head
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- UST Central Student Council --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 org-name">
                                                <div class="p-3 text geomanist-black">
                                                    UST Central Student Council
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Rows --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">
                                                    2022 – 2023
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">
                                                    Director for Creatives and Design Committee
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- UST Scarlet Central --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 org-name">
                                                <div class="p-3 text geomanist-black">
                                                    UST Scarlet Central
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Rows --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">
                                                    2023 – 2025
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">
                                                    Director for Arts and Design
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- UST Scarlet Central --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 org-name">
                                                <div class="p-3 text geomanist-black">
                                                    UST Becarios de Santo Tomas
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Rows --}}
                            <div class="row g-2 g-lg-3 d-flex flex-column align-items-center">
                                <div class="col-12 d-flex justify-content-center mb-3">
                                    <div class="circle">
                                        <div class="row g-1">
                                            <div class="col-12 col-md-4 col-lg-3 date-range">
                                                <div class="p-3 text geomanist-black">
                                                    2022 – 2023
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-9 date-range-desc">
                                                <div class="p-3 text geomanist-regular">
                                                    Creatives Committee Head
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fun Facts --}}
            <div class="fun-facts d-flex justify-content-center">
                {{-- Title --}}
                <div class="fun-facts-title-div d-flex flex-column align-items-center">
                    <h1 class="container-title container-title-about-me uppercase">Fun Facts</h1>
                </div>
                <div class="pink-cont">
                    <div class="fun-fact-rows d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/elements/flowers/outline-flower-white.svg') }}" alt="white flower"
                            class="flower one" />
                        {{-- Row --}}
                        <div class="fun-fact d-flex align-items-center flex-start">
                            <div class="circle-number me-3">
                                <div class="circle-list">
                                    <div class="blob"></div>
                                    <div class="circle-pic">
                                        <div class="circle-img">
                                            <div class="p-3 text geomanist-ultra number one">1</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text fun-fact-cont">
                                <p class="geomanist-black fun-fact-text">
                                    I’m an INFJ.
                                </p>
                            </div>
                        </div>
                        {{-- Row --}}
                        <div class="fun-fact d-flex align-items-center flex-start">
                            <div class="circle-number two me-3">
                                <div class="circle-list">
                                    <div class="blob"></div>
                                    <div class="circle-pic">
                                        <div class="circle-img">
                                            <div class="p-3 text geomanist-ultra number two">2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text fun-fact-cont">
                                <p class="geomanist-black fun-fact-text">
                                    I love arts and handicrafts, like drawing illustrations, building model kits &
                                    puzzles,
                                    crochet, etc.
                                </p>
                            </div>
                        </div>
                        {{-- Row --}}
                        <div class="fun-fact d-flex align-items-center flex-start">
                            <div class="circle-number three me-3">
                                <div class="circle-list">
                                    <div class="blob"></div>
                                    <div class="circle-pic">
                                        <div class="circle-img">
                                            <div class="p-3 text geomanist-ultra number three">3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text fun-fact-cont">
                                <p class="geomanist-black fun-fact-text">
                                    <span>I'm Chinoy, and can speak English, FIlipino, Mandarin, and Hokkien.</span>
                                </p>
                            </div>
                        </div>
                        {{-- Row --}}
                        <div class="fun-fact d-flex align-items-center flex-start">
                            <div class="circle-number me-3">
                                <div class="circle-list">
                                    <div class="blob"></div>
                                    <div class="circle-pic">
                                        <div class="circle-img">
                                            <div class="p-3 text geomanist-ultra number four">4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text fun-fact-cont">
                                <p class="geomanist-black fun-fact-text">
                                    I’m a night owl.
                                </p>
                            </div>
                        </div>
                        {{-- Row --}}
                        <div class="fun-fact d-flex align-items-center flex-start">
                            <div class="circle-number me-3">
                                <div class="circle-list">
                                    <div class="blob"></div>
                                    <div class="circle-pic">
                                        <div class="circle-img">
                                            <div class="p-3 text geomanist-ultra number five">5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text fun-fact-cont">
                                <p class="geomanist-black fun-fact-text">
                                    I’m born the day after Christmas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
