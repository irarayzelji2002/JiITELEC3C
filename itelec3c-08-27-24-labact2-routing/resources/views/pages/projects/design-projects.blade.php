@extends('layout.app')
@section('title', 'Developer Projects')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/design-projects.css') }}" />
@endsection
@section('content')
    <section class="design-projects">
        <!-- Title -->
        <div class="title-whole">
            <div class="title-header"></div>
            {{-- <div class="wavyline">
                <img src="{{ asset('assets/elements/wavy-lines/wavyline-red.svg') }}" alt="wavy line" class="wavyline" />
            </div> --}}
            <div class="title-flowers title-flowers-design-projects d-flex justify-content-center align-items-center">
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
            <div class="title title-design-projects">
                <h1 class="uppercase">Projects</h1>
            </div>
        </div>
        <!-- Projects -->
        <div class="section section-design-projects">
            <div class="subtitle subtitle-it d-flex flex-column align-items-center">
                <h2 class="text-center geomanist-ultra uppercase">
                    Arts & Design
                </h2>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Project 1 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="{{ route('project-details', ['type' => 'design', 'name' => 'balikuste2023']) }}"
                                    class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/design/1 BalikUSTe 2023/BalikUSTe 2023-Thumbnail.png') }}"
                                        alt="BalikUSTe 2023" class="img-fluid zoomable" />
                                </a>
                            </div>

                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        BalikUSTe 2023: Radiating Tiger Spirit
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A social media campaign of TOMCAT - UST aimed to welcome the Thomasians as well as
                                        the incoming freshies of A.Y. 2023 - 2024
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize"
                                        href="{{ route('project-details', ['type' => 'design', 'name' => 'balikuste2023']) }}"
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
                                    <img src="{{ asset('assets/elements/my-projects/design/2 Tunog Tomasino 2023/Tunog Tomasino 2023-Thumbnail.png') }}"
                                        alt="Tunog Tomasino 2023" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        Tunog Tomasino 2023: Re-Vibe
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        An annual TOMCAT - UST project aimed to promote music appreciation, especially for
                                        local artists
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
                                    <img src="{{ asset('assets/elements/my-projects/design/3 Paskuhan 2022/Paskuhan Concert 2022-Thumbnail.png') }}"
                                        alt="UST Paskuhan Concert 2022" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        UST Paskuhan Concert 2022: Pananabik, Pagbabalik, at
                                        Panunumbalik
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A Christmas concert of the University of Santo Tomas featuring local artists and
                                        having raffles, booths, and a fireworks display
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
                                    <img src="{{ asset('assets/elements/my-projects/design/4 BalikUSTe 2024/BalikUSTe 2024-Thumbnail.png') }}"
                                        alt="BalikUSTe 2024" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        BalikUSTe 2024: Roar Your Way In
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A social media campaign of TOMCAT - UST aimed to welcome the incoming and returning
                                        Thomasians of A.Y. 2024 - 2025
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
                                    <img src="{{ asset('assets/elements/my-projects/design/5 R101 2022/R101 2022-Thumbnail.png') }}"
                                        alt="TOMCAT - UST R101 2022" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        TOMCAT - UST R101 2022: Reshaping Paragons
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        An annual recruitment campaign for Thomasians who seek to expand their personal and
                                        professional skills
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
                                    <img src="{{ asset('assets/elements/my-projects/design/6 Tara Mall G/Tara Mall G-Thumbnail.png') }}"
                                        alt="Tara Mall! G?" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        Tara Mall! G?: Top 20 Malls Near UST
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        An infographics thematic map of the top 20 malls around UST within a 4 km distance
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
                                    <img src="{{ asset('assets/elements/my-projects/design/7 Legacy 2024/Legacy 2024-Thumbnail.png') }}"
                                        alt="Legacy 2024" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        Legacy 2024: The TOMCAT - UST Year-end Assembly
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A year-end assembly to reminisce about the projects and events conducted for the
                                        school year and show appreciation to all its members
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 8 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/design/8 Wok with Scarlet/Wok with Scarlet-Thumbnail.png') }}"
                                        alt="Wok With Scarlet" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        Wok With Scarlet: Exploring the Flavors of China
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A series of episodes led by UST Scarlet exploring the flavors of China and
                                        showcasing Chinese cuisine
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 9 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/design/9 Breakthrough/Breakthrough-Thumbnail.png') }}"
                                        alt="Breakthrough" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        BREAKTHROUGH: Understanding Different Minds
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A project of UST Central Student Council to promote Mental Health Awareness Month by
                                        raising awareness on the different types of mental health illnesses and disorders
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 10 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/design/10 PINTIG/PINTIG-Thumbnail.png') }}"
                                        alt="PINTIG" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        PINTIG: The College of Architecture Week
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        A poster showcasing Art Deco architecture, a noble architect of the period, and
                                        facts about it
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 11 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/design/11 Stay at Home/Stay at Home-Thumbnail.png') }}"
                                        alt="UST Scarlet Virtual General Assembly 2021" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        UST Scarlet Virtual General Assembly 2021: Stay at Home with Scarlet!
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        An annual general assembly of UST Scarlet to connect all members together and get to
                                        know each other
                                    </p>
                                    <a class="btn btn-pink btn-more-details capitalize" href="#"
                                        role="button">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project 12 -->
                    <div class="col-md-6">
                        <div class="box-with-bg">
                            <div class="full-screen-img-cont">
                                <a href="#" class="btn btn-transparent">
                                    <img src="{{ asset('assets/elements/my-projects/design/12 VALOR/VALOR-Thumbnail.png') }}"
                                        alt="VALOR" class="img-fluid zoomable" />
                                </a>
                            </div>
                            <div class="text d-flex justify-content-center">
                                <div class="project-details">
                                    <h3 class="text-center geomanist-ultra project-title">
                                        VALOR: Envisioning Greatness - The TOMCAT Training 2022
                                    </h3>
                                    <p class="text-center geomanist-book project-details-p">
                                        TOMCAT - UST’s organization-wide training through an online platform to train
                                        members in their respective fields by inviting its alumni speakers
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
        <div class="section section-design-projects-moving-text">
            <div class="moving-text-container d-flex justify-content-center">
                <div class="moving-text">
                    <p class="integralcf-heavy uppercase">
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                    </p>
                </div>
                <div class="moving-text">
                    <p class="integralcf-heavy uppercase">
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                        <span>Projects</span>
                        <span>Arts and Design</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
