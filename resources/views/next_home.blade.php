<html lang="en" style="height: 100%;">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="facebook-domain-verification" content="0l0jqngf7hnpo17ssvrusxn79c0muc">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="next-head-count" content="4">
    <link rel="stylesheet" href="{{asset('lmodel/m2/css/next.css')}}" data-n-g="">
    <link rel="stylesheet" href="{{asset('toast/toastr.scss')}}" data-n-g="">
    <link rel="stylesheet" href="{{asset('lmodel/m2/css/custom_next.css')}}" data-n-g="">

    <title>Main page | NEXACHAIN FDUSD</title>
    <meta name="description" content=""
          data-react-helmet="true">
    <style type="text/css">
        .iq-banner-2 .iq-countdown { border-radius: 30px; padding: 40px 40px; position: relative; }
        .iq-banner-2  .iq-countdown .list-inline { margin-top: 15px; }
        .iq-banner-2 .iq-countdown .list-inline li a { color: var(--white); font-size: 18px; margin: 0 5px; }
        .iq-banner-2 .iq-countdown .list-inline li a:hover { color: var(--iq-primary); }
        /*---------------------------------------------------------------------
                            Token
-----------------------------------------------------------------------*/
        .iq-countdown #countdown { list-style: none; margin: 40px 0; padding: 0; display: inline-block; width: 100%; }
        .iq-countdown #countdown li { display: inline-block; padding: 0 20px; position: relative; }
        .iq-countdown #countdown li:before { content: ""; position: absolute; top: 0; right: 0; width: 1px; height: 100%; display: inline-block; background: rgba(255, 255, 255, 0.1); }
        .iq-countdown #countdown li:first-child { padding-left: 0; }
        .iq-countdown #countdown li:last-child { padding-right: 0; }
        .iq-countdown #countdown li:last-child:before { display: none; }
        .iq-countdown #countdown li span { font-size: 44px; line-height: normal; font-weight: 700; color: var(--white); }
        .iq-countdown #countdown li p { font-size: 14px; font-weight: 700; color: var(--white); margin-bottom: 0; }
        @media(max-width:479px) {
            .iq-countdown { padding-left: 0; padding-right: 0; }
            .iq-countdown #countdown li p { font-size: 11px; }
            .iq-countdown #countdown li span { font-size: 36px; }
        }


    </style>
</head>
<body style="overflow: unset; position: relative; min-height: 100%; top: 40px;">

<div id="__next">
    <div
        class="flex relative bg-main-bg flex-col items-center justify-center w-full min-h-screen text-white-500 px-10 sm:px-0 overflow-hidden pt-16">
        <header
            class="fixed top-0 w-full pb-2.5 pt-2.5 px-10 z-[2147483602] bg-transparent sm:px-5 lg:border-b lg:border-white-100 z-[999]">
            <nav class="z-10 w-full max-w-desktop-preview-bar m-auto header-border-b">
                <div class="flex items-center justify-between"><a href="/">
                        <img class="hidden lg:block" src="{{asset("lmodel/icon_nexa.png")}}" width="45" height="30">

                        <img class="block lg:hidden" src="{{asset("lmodel/icon_nexa.png")}}" width="103" height="30">

                    </a>
                    <div class="flex justify-end items-center ml-auto">
                        <w3m-core-button></w3m-core-button>
                        {{--<button
                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-2.5 bg-black-light hover:bg-line-gray active:bg-active-gray text-white font-normal rounded items-center ">
                            Connect wallet
                        </button>--}}
                    </div>
                </div>
            </nav>
            <div class="hidden justify-start items-start bg-main-bg pb-5 pt-7.5 transition duration-500 ease-in-out bg-main-bg absolute top-0 left-0 z-20 inset-0 h-screen w-screen z-999999 -translate-x-120% lg:flex flex-col lg:py-2.5">
                <div style="height: 434px;" class="w-full flex flex-col flex-1">
                    <div class="flex justify-between items-center w-full px-10 sm:px-5">

                        <button
                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-0 py-0 bg-black-light rounded-full w-10 h-10 hover:bg-line-gray active:bg-active-gray hidden lg:flex flex-col">
                            <span class="w-4 border-t border-white -mb-px rotate-45"></span><span
                                class="w-4 border-t border-white -rotate-45"></span></button>
                    </div>
                    <div class="w-full h-full pl-10 pr-7.5 lg:pr-0 lg:pl-10 sm:pl-5 overflow-auto">
                        <div class="flex flex-1 flex-col h-full w-full overflow-y-auto space-y-2.5 lg:space-y-0">


                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="flex flex-col flex-1 w-full max-w-desktop-login mt-7.5 sm:mt-0">
            <div class="flex flex-col login-wrapper">
                <div
                    class="w-full overflow-hidden relative flex items-center justify-between bg-main-blue rounded overflow-hidden sm:rounded-none p-7.5 sm:p-5 mb-15">
                    <div class="flex flex-col sm:w-full z-10 flex-shrink-0">
                        <div class="flex items-start sm:items-center mb-5 sm:mb-2.5">
                            <div class="flex items-center"><span
                                    class="text-white font-medium text-two-half leading-48px sm:text-xl">Welcome to NEXACHAIN FDUSD</span>
                            </div>
                        </div>
                        <span class="mb-7.5 text-base sm:text-sm sm:mb-5 ">Connect your wallet to start working. First time here? Watch a tutorial to learn more</span>
                      {{--  <div class="w-full h-full relative flex justify-center items-center sm:mb-5">

                            <img  class="hidden max-w-full h-full max-h-56 sm:flex"
                                src="{{asset('lmodel/wallet_big_min.webp')}}">
                            <div
                                class="absolute bottom-0 left-0 right-0 -rotate-180 wallet-gradient-main h-11 hidden sm:block"></div>
                        </div>--}}
                        <div class="flex space-x-5 sm:space-x-0 sm:space-y-3.5 sm:flex-col">
                            <button onclick="subcription.login()"
                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-bg hover:bg-hover-main-bg active:bg-active-main-bg sm:w-full">
                                Connect now
                            </button>
                            <button
                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 rounded-mini sm:w-full">
                                Watch tutorial
                            </button>
                            <div class="flex justify-end space-x-5 sm:space-x-0 sm:space-y-3.5 sm:flex-col">
                                <a href="{{route("nextregister")}}" class="text-center text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-bg hover:bg-hover-main-bg active:bg-active-main-bg sm:w-full">
                                    Register
                                </a></div>
                        </div>

                    </div>
            {{--        <div class="flex relative w-540px flex-shrink-0 h-full -m-7.5 ml-0 sm:hidden"
                         style="height: 230px;">
                        <div class="absolute  top-0 bottom-0 right-0 w-full sm:hidden h-330px"
                             style="background-image: url({{asset('lmodel/wallet_big_min.webp')}}); background-size: cover; background-repeat: round;">
                            <button
                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 rounded-mini sm:w-full">
                                Register
                            </button>
                        </div>
                    </div>--}}
                </div>
                <div class="carousel-root">
                    <div class="carousel carousel-slider" style="width: 100%;">
                        <ul class="control-dots">
                            <li class="dot selected" value="0" role="button" tabindex="0"
                                aria-label="slide item 1"></li>
                            <li class="dot" value="1" role="button" tabindex="0" aria-label="slide item 2"></li>
                            <li class="dot" value="2" role="button" tabindex="0" aria-label="slide item 3"></li>
                            <li class="dot" value="3" role="button" tabindex="0" aria-label="slide item 4"></li>
                            <li class="dot" value="4" role="button" tabindex="0" aria-label="slide item 5"></li>
                            <li class="dot" value="5" role="button" tabindex="0" aria-label="slide item 6"></li>
                        </ul>
                        <button type="button" aria-label="previous slide / item"
                                class="control-arrow control-prev control-disabled"></button>
                        <div class="slider-wrapper axis-horizontal">
                            <ul class="slider animated"
                                style="transform: translate3d(-100%, 0px, 0px); transition-duration: 30ms;">
                                <li class="slide previous">
                                    <div class="!flex !relative sm:px-5 sm:h-full sm:flex-col">
                                        <div
                                            class="w-full relative flex !items-center !justify-between fix-alertGradient rounded sm:flex-col sm:p-0 pl-7.5 mb-15 sm:mr-auto sm:ml-auto sm:rounded py-8.5 h-[225px] sm:h-full ">
                                            <div class="!flex !flex-col sm:w-full ">
                                                <div class="flex flex-col mb-5 sm:p-5 sm:mb-6 sm:pb-0">
                                                    <div
                                                        class="leading-[40px] text-[40px] sm:text-2xl font-medium text-white leading-1 text-left">
                                                        How to fix <br class="sm:hidden"> scanner alert
                                                    </div>
                                                    <div class="h-auto sm:h-[16px] text-white-500 text-left"></div>
                                                </div>
                                                <div class="flex items-center justify-center w-full"><img
                                                        class="!hidden sm:!block h-[250px] !w-[370px] !flex !items-center !justify-center"
                                                        src="/fixAlert/fix.png" alt=""></div>
                                                <div class="sm:p-5">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none py-3 px-5 text-main-blue  bg-white-900 hover:bg-main-blue hover:text-white sm:w-full">
                                                        <a target="_blank" href="https://t.me/nexachainio_official/342">Tutorial</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="!absolute !h-[110%] !w-[500px] !bottom-1 !right-0 sm:!hidden"
                                             src="/fixAlert/fix.png"></div>
                                </li>
                                <li class="slide selected">
                                    <div class="!flex !relative sm:px-5 sm:flex-col">
                                        <div
                                            class="w-full relative flex !items-center frgx-background !justify-between maxQore_main_banner overflow-hidden rounded sm:flex-col sm:p-0 pl-7.5 mb-15 sm:mb-0 sm:mr-auto sm:ml-auto sm:rounded h-[225px] sm:h-[440px]">
                                            <div
                                                class="flex flex-col h-full justify-between py-7.5 sm:py-0 sm:w-full z-[11]">
                                               {{-- <div class="flex flex-col sm:pt-5 sm:px-5 sm:space-y-1">
                                                    <div
                                                        class="text-[40px] sm:text-2xl font-normal text-white text-left whitespace-nowrap">
                                                        FRGX Token
                                                    </div>
                                                </div>
                                                <div class="sm:p-5"><a
                                                        class="block frgx-buy-border p-[1px] w-max rounded-[10px] sm:w-full"
                                                        target="_blank" href="https://frgx.finance/">
                                                        <button
                                                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-blue hover:bg-hover-main-blue active:bg-active-main-blue sm:w-full sm:max-w-full bg-[#090A0A] hover:bg-[#090A0A] hover:opacity-75 active:bg-[#090A0A] active:opacity-50">
                                                            More about FRGX
                                                        </button>
                                                    </a></div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slide">
                                    <div class="!flex !relative sm:px-5 sm:flex-col">
                                        <div
                                            class="w-full relative flex !items-center !justify-between maxQore_main_banner overflow-hidden rounded sm:flex-col sm:p-0 pl-7.5 mb-15 sm:mb-0 sm:mr-auto sm:ml-auto sm:rounded h-[225px] sm:h-[440px]">
                                            <div
                                                class="flex flex-col h-full justify-between py-7.5 sm:py-0 sm:w-full z-[11]">
                                                <div class="flex flex-col sm:pt-5 sm:px-5 sm:space-y-1">
                                                    <div
                                                        class="text-[40px] sm:text-2xl font-normal text-white text-left whitespace-nowrap">
                                                        MaxQore Game
                                                    </div>
                                                    <div class="text-[16px] text-white-500 text-left font-light">Play
                                                        every day and get rewards in BNB
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="absolute right-25 top-[-10px] sm:right-auto sm:top-auto sm:left-[-70px] sm:bottom-0 z-[2]">
                                                <img class="h-" src="/maxQoreGameBanner/puma.png"></div>
                                            <div
                                                class="absolute top-[-15px] right-[280px] sm:right-[100px] z-[1] floating-animation">
                                                <img class="h-full" src="/maxQoreGameBanner/blueMeteorites/1.png"></div>
                                            <div
                                                class="absolute top-10 right-8 sm:right-[-8px] sm:top-20 z-[1] floating-animation">
                                                <img class="h-full" src="/maxQoreGameBanner/blueMeteorites/2.png"></div>
                                            <div
                                                class="absolute bottom-[-15px] right-2 sm:right-[70px] sm:bottom-[90px] z-[1] floating-animation">
                                                <img class="h-full" src="/maxQoreGameBanner/blueMeteorites/3.png"></div>
                                            <div
                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 pl-[70px] sm:pl-0 sm:left-[120px] z-[1] floating-animation">
                                                <img class="h-full" src="/maxQoreGameBanner/blueMeteorites/4.png"></div>
                                            <div
                                                class="absolute top-5 left-1/2 -translate-x-1/2 pr-[180px] sm:hidden h-[26px] floating-animation">
                                                <img class="h-full" src="/maxQoreGameBanner/blueMeteorites/3.png"></div>
                                            <div
                                                class="absolute bottom-[10px] top-[-230px] left-1/2 -translate-x-1/2 z-[1] ml-10 sm:ml-0 sm:left-auto sm:-translate-x-0 sm:bottom-[150px] sm:right-[-40px] sm:top-auto sm:w-[275px] z-[1] ">
                                                <img class="h-full" src="/maxQoreGameBanner/PlayEarn.png"></div>
                                            <div
                                                class="absolute left-[200px] top-[-150px] sm:left-[-200px] sm:top-[50px] ">
                                                <img class="h-full" src="/maxQoreGameBanner/bg1.png"></div>
                                            <div
                                                class="absolute right-[-70px] top-[-300px] sm:bottom-[-100px] sm:right-[-300px]">
                                                <img class="h-full" src="/maxQoreGameBanner/bg2.png"></div>
                                            <div class="absolute right-0 sm:hidden"><img class="h-full"
                                                                                         src="/maxQoreGameBanner/meteor.png">
                                            </div>
                                            <div class="absolute right-0 top-0 hidden sm:flex z-[0]"><img class="h-full"
                                                                                                          src="/maxQoreGameBanner/meteorMob.png">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slide">
                                    <div class="!flex !relative sm:px-5 sm:flex-col">
                                        <div
                                            class="w-full relative flex !items-center !justify-between maxQore_main_banner overflow-hidden rounded sm:flex-col sm:p-0 pl-7.5 mb-15 sm:mb-0 sm:mr-auto sm:ml-auto sm:rounded h-[225px] sm:h-[440px]">
                                            <div class="flex flex-col sm:w-full z-[11]">
                                                <div class="flex flex-col mb-12 sm:pt-5 sm:px-5 sm:mb-6 sm:space-y-1">
                                                    <div
                                                        class="text-[40px] sm:text-2xl font-normal text-white text-left whitespace-nowrap">
                                                        MaxQore
                                                    </div>
                                                    <div class="text-[16px] text-white-500 text-left font-light">Meet
                                                        MaxQore, the largest <br class="hidden sm:flex"> Nexachain program
                                                        ever!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:hidden absolute w-full h-full"><img class="h-full"
                                                                                               src="/maxQoreMainBanner/bg.png"
                                                                                               alt=""></div>
                                            <div class="hidden sm:flex absolute w-full h-full"><img class=""
                                                                                                    src="/maxQoreMainBanner/bgMob.png"
                                                                                                    alt=""></div>
                                            <div class="hidden sm:flex absolute w-full top-1/2 -translate-y-1/2"><img
                                                    class="" src="/maxQoreMainBanner/logo.png"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="slide">
                                    <div class="!flex !relative sm:px-5 sm:h-full sm:flex-col ">
                                        <div
                                            class="w-full relative flex !items-center !justify-between fix-alertGradient rounded sm:flex-col sm:p-0 pl-7.5 mb-15 sm:mr-auto sm:ml-auto sm:rounded py-8.5 h-[225px] sm:h-full">
                                            <div class="flex flex-col  sm:w-full z-[10] justify-between h-full">
                                                <div class="flex flex-col mb-5 sm:p-5 sm:pb-0 sm:mb-6">
                                                    <div
                                                        class="text-[40px] sm:text-2xl font-medium text-white leading-1 text-left lg:text-[30px]">
                                                        Nexachain Social is here
                                                    </div>
                                                    <span class="text-[16px] text-white-500 text-left"> Meet our native Web3 social network.<span
                                                            class="hidden sm:inline ">To log in, you need only your Nexachain ID!</span></span>
                                                </div>
                                                <div class="flex flex-col sm:w-full justify-end">
                                                    <div class="flex items-center justify-center w-full sm:mt-5"><img
                                                            class="!hidden sm:!block max-w-[80%] sm:max-h-[250px] sm:h-full sm:max-w-full !flex !items-center !justify-center"
                                                            src="/loginBanner/socialNotice/main.png" alt=""></div>
                                                </div>
                                            </div>
                                            <img
                                                class="absolute !h-[100%] !w-[500px] bottom-[-2.5px] !right-0 sm:!hidden"
                                                src="/loginBanner/socialNotice/main.png"></div>
                                    </div>
                                </li>
                                <li class="slide">
                                    <div class="!flex !relative sm:px-5 sm:flex-col">
                                        <div
                                            class="w-full relative flex !items-center !justify-between  bg-[#141414] overflow-hidden rounded sm:flex-col sm:p-0 pl-7.5 mb-15 sm:mb-0 sm:mr-auto sm:ml-auto sm:rounded h-[225px] sm:h-full">
                                            <div class="flex flex-col sm:w-full z-[11]">
                                                <div class="flex flex-col mb-5 sm:pt-5 sm:px-5 sm:mb-6">
                                                    <div
                                                        class="text-[40px] sm:text-2xl font-medium text-white text-left whitespace-nowrap">
                                                        Nexachain school
                                                    </div>
                                                    <div class="text-[16px] text-white-500 text-left">New Opportunities
                                                        For Your Business
                                                    </div>
                                                </div>
                                                <div
                                                    class="relative w-full hidden sm:flex sm:flex-1 items-center !justify-center">
                                                    <img class="absolute right-0 !h-[150px] !w-[100px] top-0"
                                                         src="/mainBanner/mobile/1.png"><img
                                                        class="absolute right-5 bottom-[-30px] h-[200px] !w-[200px] z-[-1]"
                                                        src="/mainBanner/mobile/2.png"><img class="h-[250px] !w-[250px]"
                                                                                            src="/mainBanner/mobile/mainPic.png"
                                                                                            alt=""></div>
                                                <img
                                                    class="!bottom-0 !left-0 h-[100%] z-[-1] !rounded absolute !hidden sm:!flex "
                                                    src="mainBanner/mobile/shadow.png">
                                                <div class="sm:p-5">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-blue hover:bg-hover-main-blue active:bg-active-main-blue sm:w-full sm:max-w-full bg-[#00DB83] hover:bg-[#00DB83] hover:opacity-75 active:bg-[#00DB83] active:opacity-50">
                                                        <a target="_blank" href="https://school.nexachain.io/">Go to
                                                            school</a></button>
                                                </div>
                                            </div>
                                            <img class="sm:!hidden rounded" src="/mainBanner/rightImg.png"
                                                 alt="schoolBanner"></div>
                                    </div>
                                </li>
                                <li class="slide previous">
                                    <div class="!flex !relative sm:px-5 sm:h-full sm:flex-col">
                                        <div
                                            class="w-full relative flex !items-center !justify-between fix-alertGradient rounded sm:flex-col sm:p-0 pl-7.5 mb-15 sm:mr-auto sm:ml-auto sm:rounded py-8.5 h-[225px] sm:h-full ">
                                            <div class="!flex !flex-col sm:w-full ">
                                                <div class="flex flex-col mb-5 sm:p-5 sm:mb-6 sm:pb-0">
                                                    <div
                                                        class="leading-[40px] text-[40px] sm:text-2xl font-medium text-white leading-1 text-left">
                                                        How to fix <br class="sm:hidden"> scanner alert
                                                    </div>
                                                    <div class="h-auto sm:h-[16px] text-white-500 text-left"></div>
                                                </div>
                                                <div class="flex items-center justify-center w-full"><img
                                                        class="!hidden sm:!block h-[250px] !w-[370px] !flex !items-center !justify-center"
                                                        src="/fixAlert/fix.png" alt=""></div>
                                                <div class="sm:p-5">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none py-3 px-5 text-main-blue  bg-white-900 hover:bg-main-blue hover:text-white sm:w-full">
                                                        <a target="_blank" href="https://t.me/nexachainio_official/342">Tutorial</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="!absolute !h-[110%] !w-[500px] !bottom-1 !right-0 sm:!hidden"
                                             src="/fixAlert/fix.png"></div>
                                </li>
                                <li class="slide selected">
                                    <div class="!flex !relative sm:px-5 sm:flex-col">
                                        <div
                                            class="w-full relative flex !items-center frgx-background !justify-between maxQore_main_banner overflow-hidden rounded sm:flex-col sm:p-0 pl-7.5 mb-15 sm:mb-0 sm:mr-auto sm:ml-auto sm:rounded h-[225px] sm:h-[440px]">
                                            <div
                                                class="flex flex-col h-full justify-between py-7.5 sm:py-0 sm:w-full z-[11]">
                                                <div class="flex flex-col sm:pt-5 sm:px-5 sm:space-y-1">
                                                    <div
                                                        class="text-[40px] sm:text-2xl font-normal text-white text-left whitespace-nowrap">
                                                        FRGX Token
                                                    </div>
                                                </div>
                                                <div class="sm:p-5"><a
                                                        class="block frgx-buy-border p-[1px] w-max rounded-[10px] sm:w-full"
                                                        target="_blank" href="https://frgx.finance/">
                                                        <button
                                                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-blue hover:bg-hover-main-blue active:bg-active-main-blue sm:w-full sm:max-w-full bg-[#090A0A] hover:bg-[#090A0A] hover:opacity-75 active:bg-[#090A0A] active:opacity-50">
                                                            More about FRGX
                                                        </button>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <button type="button" aria-label="next slide / item"
                                class="control-arrow control-next control-disabled"></button>
                    </div>
                </div>
                <div class="flex flex-col mb-15">
                    <div class="flex flex-col">
                        <div class="flex flex-col sm:px-5"><span
                                class="text-white text-3xl font-bold ">Account preview</span><span
                                class="text-white-500 text-base mt-1 mb-7.5">Look up any <span
                                    class="notranslate mx-1.5">Nexachain FDUSD</span> member account in preview mode. Enter ID or <span
                                    class="notranslate mx-1.5">FDUSD</span> address to preview or click Demo to view a random account.</span>
                        </div>
                        <div class="flex sm:flex-col">
                            <div
                                class="flex flex-col flex-1 justify-between sm:w-full bg-main-blue-200 rounded sm:rounded-none p-7.5 sm:p-5 mr-10 sm:mr-0 sm:mb-5">
                                <span class="text-white mb-3">Enter <span class="notranslate mx-1">ID</span> or <span
                                        class="notranslate mx-1">FDUSD</span>wallet</span>
                                <form action="{{route('lmodel1')}}">
                                    <div class="flex sm:flex-col"><input name="id"
                                            class="w-full bg-white-100 border-2 border-transparent rounded-mini py-3 px-5 text-white outline-none focus:border-2 focus:border-main-blue focus:bg-transparent flex-1 mr-5 sm:mr-0 sm:mb-3.5 py-2"
                                            type="text" placeholder="example: 87381" value="">
                                        <button
                                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-blue hover:bg-hover-main-blue active:bg-active-main-blue rounded-mini">
                                            Preview
                                        </button>
                                    </div>
                                </form>

                            </div>
                            <div class="w-1/3 min-w-320px sm:w-full sm:px-5">
                                <div class="flex flex-col w-full rounded bg-black-light p-7.5 relative"><span
                                        class="text-white mb-3">Don’t know any <span
                                            class="notranslate ml-1.5">ID?</span></span><a href="{{route('lmodel1',['id'=>6])}}">
                                        <button
                                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 rounded-mini w-max">
                                            Check demo
                                        </button>
                                    </a>
                                    <img src="{{asset("lmodel/icon_nexa.png")}}" class="absolute top-1/2 right-0 transform -translate-y-1/2 fill-current text-white-100"
                                         width="113" height="121" fill="#406AFF">
                                   {{-- <svg
                                        class="absolute top-1/2 right-0 transform -translate-y-1/2 fill-current text-white-100"
                                        width="113" height="121" fill="#406AFF" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M35.987 32.963c-1.348-.492-2.812.247-3.278 1.664l-2.3 7.024s9.884-3.326 15.036-4.374l-9.458-4.314Zm-32.3 18.791c.024 0 1.04-.74 1.582-1.048l16.6-8.933c5.146-2.589 4.012-4.621 5.96-10.289a35.974 35.974 0 0 1 2.93-6.346C40.234 20.393 67.166 21.503 69.738 0c0 0 10.047 6.962 11.878 19.716C187.781 11.153 237 73.01 237 73.01c-19.772-8.317-41.103-12.26-62.439-13.307 40.561 32.961 53.332 82.619 53.332 82.619s-32.86-33.7-82.254-52.492c12.929 19.286 20.421 45.161 17.358 79.17 0 0-25.408-102.396-145.965-77.63 0 0-4.411-13.615-15.8-27.54-.718-.863-1.125-2.156-1.207-3.635a10.002 10.002 0 0 1 3.662-8.44Z"></path>
                                    </svg>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col text-left space-y-[50px] lg:space-y-5 sm:px-5 pb-5 sm:pb-2.5">
                    {{--<span class="text-white text-3xl font-bold">Roadmap</span>--}}
                  {{--  <div class="grid grid-cols-3 sm:grid-cols-1 !mt-0">
                        <div class="relative flex flex-col items-center space-y-2.5 p-10 sm:p-0 sm:py-3">
                            <div class="absolute bottom-2.5 border-t-2 border-white-900 h-[1px] sm:left-1/2 sm:right-auto sm:-translate-x-1/2 sm:bottom-0 sm:top-1
                  sm:border-none   w-full mobile-width-line"></div>
                            <div
                                class="hidden sm:block sm:!hidden absolute bottom-[-95.5%] right-0 sm:right-6 rounded-r-[15px] border-2 border-l-0 border-white-900 h-[101%] w-[15px] sm:w-[16px] sm:h-[101.5%] sm:bottom-[95%]"></div>
                            <div
                                class="sm:flex-row-reverse flex flex-col bg-black-light p-2.5 sm:p-0 rounded w-full items-center sm:items-start space-y-2.5 sm:rounded-[20px]  sm:space-y-0  sm:h-[80px] sm:justify-center">
                                <div class="h-[75px] flex items-center "><img
                                        class="max-h-full sm:min-w-[65px] sm:absolute sm:right-3 "
                                        src="/roadmap/social.png" alt=""></div>
                                <span class="text-white min-h-[16px] font-medium sm:font-light sm:text-xl sm:pt-4">Social</span>
                            </div>
                            <span class="absolute bottom-[-34px] sm:bottom-5 text-white "> 21.08 </span>
                            <div
                                class="sm:left-2.5 absolute bottom-[-5px] sm:bottom-0 sm:top-[43%] sm:-translate-y-1/2 z-[10] w-7.5 h-7.5 bg-white  rounded-full flex items-center justify-center">
                                <svg class="absolute w-7.5 h-7.5" viewBox="0 0 120 120" fill="#00FF38"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M105 35 45 95 17.5 67.5l7.05-7.05L45 80.85l52.95-52.9L105 35Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center space-y-2.5 p-10 sm:p-0 sm:py-3">
                            <div class="absolute bottom-2.5 border-t-2 border-white-900 h-[1px] sm:left-1/2 sm:right-auto sm:-translate-x-1/2 sm:bottom-0 sm:top-1
                     w-full mobile-width-line"></div>
                            <div
                                class="hidden sm:block sm:!hidden absolute bottom-[-95.5%] left-0 sm:left-6 rounded-l-[15px] border-2 border-r-0 border-white-900 h-[101%] w-[15px] sm:w-[16px] sm:h-[101.5%] sm:bottom-[95%] "></div>
                            <div
                                class="sm:flex-row flex flex-col bg-black-light p-2.5 sm:p-0 rounded w-full items-center sm:items-start space-y-2.5 sm:rounded-[20px]  sm:space-y-0  sm:h-[80px] sm:justify-center">
                                <div class="h-[75px] flex items-center "><img
                                        class="max-h-full sm:max-w-[65px] sm:absolute sm:left-3 "
                                        src="/roadmap/achievements.png" alt=""></div>
                                <span class="text-white min-h-[16px] font-medium sm:font-light sm:text-xl sm:pt-4">Achievements</span>
                            </div>
                            <span class="absolute bottom-[-34px] sm:bottom-5 text-white "> 28.08 </span>
                            <div
                                class="sm:right-2.5 absolute bottom-[-5px] sm:bottom-0 sm:top-[43%] sm:-translate-y-1/2 z-[10] w-7.5 h-7.5 bg-white  rounded-full flex items-center justify-center">
                                <svg class="absolute w-7.5 h-7.5" viewBox="0 0 120 120" fill="#00FF38"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M105 35 45 95 17.5 67.5l7.05-7.05L45 80.85l52.95-52.9L105 35Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center space-y-2.5 p-10 sm:p-0 sm:py-3">
                            <div class="absolute bottom-2.5 border-t-2 border-white-900 h-[1px] sm:left-1/2 sm:right-auto sm:-translate-x-1/2 sm:bottom-0 sm:top-1
                    !w-[96%] left-0 sm:left-1/2 sm:-translate-x-1/2 w-full mobile-width-line"></div>
                            <div
                                class="  absolute bottom-[-95.5%] right-0 sm:right-6 rounded-r-[15px] border-2 border-l-0 border-white-900 h-[101%] w-[15px] sm:w-[16px] sm:h-[101.5%] sm:bottom-[95%]"></div>
                            <div
                                class="sm:flex-row-reverse flex flex-col bg-black-light p-2.5 sm:p-0 rounded w-full items-center sm:items-start space-y-2.5 sm:rounded-[20px]  sm:space-y-0  sm:h-[80px] sm:justify-center">
                                <div class="h-[75px] flex items-center "><img
                                        class="max-h-full sm:max-w-[50px] sm:absolute sm:right-3 "
                                        src="/roadmap/bigRefferalСontest.png" alt=""></div>
                                <span class="text-white min-h-[16px] font-medium sm:font-light sm:text-xl sm:pt-4">Cycle Rally Marathon</span>
                            </div>
                            <span class="absolute bottom-[-34px] sm:bottom-5 text-white "> 4.09 </span>
                            <div
                                class="sm:left-2.5 absolute bottom-[-5px] sm:bottom-0 sm:top-[43%] sm:-translate-y-1/2 z-[10] w-7.5 h-7.5 bg-white  rounded-full flex items-center justify-center">
                                <svg class="absolute w-7.5 h-7.5" viewBox="0 0 120 120" fill="#00FF38"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M105 35 45 95 17.5 67.5l7.05-7.05L45 80.85l52.95-52.9L105 35Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center space-y-2.5 p-10 sm:p-0 sm:py-3">
                            <div class="absolute bottom-2.5 border-t-2 border-white-900 h-[1px] sm:left-1/2 sm:right-auto sm:-translate-x-1/2 sm:bottom-0 sm:top-1
                   !w-[96%] right-0 sm:left-1/2 sm:right-auto sm:-translate-x-1/2   w-full mobile-width-line"></div>
                            <div
                                class="  absolute bottom-[-95.5%] left-0 sm:left-6 rounded-l-[15px] border-2 border-r-0 border-white-900 h-[101%] w-[15px] sm:w-[16px] sm:h-[101.5%] sm:bottom-[95%] "></div>
                            <div
                                class="sm:flex-row flex flex-col bg-black-light p-2.5 sm:p-0 rounded w-full items-center sm:items-start space-y-2.5 sm:rounded-[20px]  sm:space-y-0  sm:h-[80px] sm:justify-center">
                                <div class="h-[75px] flex items-center "><img
                                        class="max-h-full max-w-[75px] sm:max-w-[60px] sm:absolute sm:left-3 "
                                        src="/roadmap/games.png" alt=""></div>
                                <span class="text-white min-h-[16px] font-medium sm:font-light sm:text-xl sm:pt-4">Nexachainge Games</span>
                            </div>
                            <span class="absolute bottom-[-34px] sm:bottom-5 text-white "> 21.11 </span>
                            <div
                                class="sm:right-2.5 absolute bottom-[-5px] sm:bottom-0 sm:top-[43%] sm:-translate-y-1/2 z-[10] w-7.5 h-7.5 bg-white  rounded-full flex items-center justify-center">
                                <svg class="absolute w-7.5 h-7.5" viewBox="0 0 120 120" fill="#00FF38"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M105 35 45 95 17.5 67.5l7.05-7.05L45 80.85l52.95-52.9L105 35Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center space-y-2.5 p-10 sm:p-0 sm:py-3">
                            <div class="absolute bottom-2.5 border-t-2 border-white-900 h-[1px] sm:left-1/2 sm:right-auto sm:-translate-x-1/2 sm:bottom-0 sm:top-1
                     w-full mobile-width-line"></div>
                            <div
                                class="hidden sm:block  absolute bottom-[-95.5%] right-0 sm:right-6 rounded-r-[15px] border-2 border-l-0 border-white-900 h-[101%] w-[15px] sm:w-[16px] sm:h-[101.5%] sm:bottom-[95%]"></div>
                            <div
                                class="sm:flex-row-reverse flex flex-col bg-black-light p-2.5 sm:p-0 rounded w-full items-center sm:items-start space-y-2.5 sm:rounded-[20px]  sm:space-y-0  sm:h-[80px] sm:justify-center">
                                <div class="h-[75px] flex items-center "><img
                                        class="max-h-full sm:max-w-[70px] sm:absolute sm:right-3 "
                                        src="/roadmap/customInvitePdf.png" alt=""></div>
                                <span class="text-white min-h-[16px] font-medium sm:font-light sm:text-xl sm:pt-4">Custom invite page</span>
                            </div>
                            <span class="absolute bottom-[-34px] sm:bottom-5 text-white "> 12.10 </span>
                            <div
                                class="sm:left-2.5 absolute bottom-[-5px] sm:bottom-0 sm:top-[43%] sm:-translate-y-1/2 z-[10] w-7.5 h-7.5 bg-white  rounded-full flex items-center justify-center">
                                <svg class="absolute w-7.5 h-7.5" viewBox="0 0 120 120" fill="#00FF38"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M105 35 45 95 17.5 67.5l7.05-7.05L45 80.85l52.95-52.9L105 35Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center space-y-2.5 p-10 sm:p-0 sm:py-3">
                            <div class="absolute bottom-2.5 border-t-2 border-white-900 h-[1px] sm:left-1/2 sm:right-auto sm:-translate-x-1/2 sm:bottom-0 sm:top-1
                    !w-[96%] left-0 sm:left-1/2 sm:-translate-x-1/2 w-full mobile-width-line"></div>
                            <div
                                class="hidden sm:block  absolute bottom-[-95.5%] left-0 sm:left-6 rounded-l-[15px] border-2 border-r-0 border-white-900 h-[101%] w-[15px] sm:w-[16px] sm:h-[101.5%] sm:bottom-[95%] "></div>
                            <div
                                class="sm:flex-row flex flex-col bg-black-light p-2.5 sm:p-0 rounded w-full items-center sm:items-start space-y-2.5 sm:rounded-[20px]  sm:space-y-0  sm:h-[80px] sm:justify-center">
                                <div class="h-[75px] flex items-center "><img
                                        class="max-h-full max-w-[100px] sm:max-w-[75px] sm:absolute sm:left-3 "
                                        src="/roadmap/maxqore.png" alt=""></div>
                                <span class="text-white min-h-[16px] font-medium sm:font-light sm:text-xl sm:pt-4">New program</span>
                            </div>
                            <span class="absolute bottom-[-34px] sm:bottom-5 text-white "> 3.10 </span>
                            <div
                                class="sm:right-2.5 absolute bottom-[-5px] sm:bottom-0 sm:top-[43%] sm:-translate-y-1/2 z-[10] w-7.5 h-7.5 bg-white  rounded-full flex items-center justify-center">
                                <svg class="absolute w-7.5 h-7.5" viewBox="0 0 120 120" fill="#00FF38"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M105 35 45 95 17.5 67.5l7.05-7.05L45 80.85l52.95-52.9L105 35Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center space-y-2.5 p-10 sm:p-0 sm:py-3">
                            <div class="absolute bottom-2.5 border-t-2 border-white-900 h-[1px] sm:left-1/2 sm:right-auto sm:-translate-x-1/2 sm:bottom-0 sm:top-1
                   !w-[96%] right-0 sm:left-1/2 sm:right-auto sm:-translate-x-1/2   w-full mobile-width-line"></div>
                            <div
                                class="hidden sm:block  absolute bottom-[-95.5%] right-0 sm:right-6 rounded-r-[15px] border-2 border-l-0 border-white-900 h-[101%] w-[15px] sm:w-[16px] sm:h-[101.5%] sm:bottom-[95%]"></div>
                            <div
                                class="sm:flex-row-reverse flex flex-col bg-black-light p-2.5 sm:p-0 rounded w-full items-center sm:items-start space-y-2.5 sm:rounded-[20px]  sm:space-y-0  sm:h-[80px] sm:justify-center">
                                <div class="h-[75px] flex items-center "><img
                                        class="max-h-full max-w-[75px] sm:absolute sm:right-3 " src="/roadmap/token.png"
                                        alt=""></div>
                                <span
                                    class="text-white min-h-[16px] font-medium sm:font-light sm:text-xl sm:pt-4">Token</span>
                            </div>
                            <span class="absolute bottom-[-34px] sm:bottom-5 text-white "> 20.12 2023 </span>
                            <div
                                class="sm:left-2.5 absolute bottom-[-5px] sm:bottom-0 sm:top-[43%] sm:-translate-y-1/2 z-[10] w-7.5 h-7.5 bg-white  rounded-full flex items-center justify-center">
                                <svg class="absolute w-7.5 h-7.5" viewBox="0 0 120 120" fill="#00FF38"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M105 35 45 95 17.5 67.5l7.05-7.05L45 80.85l52.95-52.9L105 35Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <div class="my-10">
                    <div class="flex flex-col p-2">
                        <span class="text-white text-3xl font-bold sm:text-2xl">Level activation begins in</span>
                        <div class="iq-countdown flex items-center sm:px-5">
                            {{-- <h5 class="iq-tw-6 text-white"><a href="javascript:void(0)"> Nexachain </a>on the ethereum ERC20 blockchain</h5>--}}
                            <ul id="countdown" class="text-center">
                                <li class="border-white sm:px-10"><span class="days">00</span>
                                    <p class="days_text">Days</p>
                                </li>
                                <li class="border-white sm:px-10"><span class="hours">00</span>
                                    <p class="hours_text">Hours</p>
                                </li>
                                <li class=" border-white sm:px-10"><span class="minutes">00</span>
                                    <p class="minutes_text">Minutes</p>
                                </li>
                                <li class="border-white sm:px-10"><span class="seconds">00</span>
                                    <p class="seconds_text">Seconds</p>
                                </li>
                            </ul>
                         </div>
                    </div>
                </div>

                <div class="my-10">
                    <div class="flex flex-col">
                        <div class="flex items-center sm:px-5">
                            <span class="text-white text-3xl font-bold sm:text-2xl">Platform recent activity</span>
                            <div class="relative group">
                                <button
                                    class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none ml-1.5 "
                                    data-tip="true" data-for="Platform recent activity" currentitem="false">
                                    <span></span>
                                    <svg class="w-5 h-5 " viewBox="0 0 20 20" fill="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path>
                                    </svg>
                                </button>

                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-10 mt-5 lg:grid-cols-1 lg:gap-0 z-10">
                            <div
                                class="notranslate w-full overflow-hidden flex flex-col col-span-2 p-5 bg-gray rounded h-[1000px]  lg:order-2 sm:rounded-none sm:p-5 sm:max-h-3/4">
                           <table class="min-w-max w-full table-auto border-white-100" id="table_winner">
                               <thead class="text-white-500 text-xs border-b border-white-100">
                               <tr>
                                   <th class="p-4 text-left font-normal sm:p-3 ">#</th>
                                   <th class="p-4 text-left font-normal sm:p-3 ">Address</th>
                                   <th class="p-4 text-left font-normal sm:p-3 ">Gains</th>
                               </tr>
                               </thead>
                               <tbody class="text-center text-gray-600 text-sm font-light align-baseline">

                               </tbody>
                           </table>
                                <button
                                    class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 w-full rounded-mini mt-5 flex justify-center items-center">
                                    <svg class="mr-2.5" width="21" height="20" fill="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.5 15.833c3.333 0 6.11-1.944 8.333-5.833-2.222-3.89-5-5.833-8.333-5.833S4.39 6.11 2.167 10c2.222 3.889 5 5.833 8.333 5.833ZM12.167 10a1.667 1.667 0 1 1-3.334 0 1.667 1.667 0 0 1 3.334 0Z"></path>
                                    </svg>
                                    See more
                                </button>
                            </div>
                            <div
                                class="flex flex-col space-y-10 lg:w-full lg:order-1 lg:mb-10 sm:mb-5 sm:space-y-5 sm:px-5">
                                <div
                                    class="sm:mobile-infoblock-base flex flex-col bg-black-light rounded relative z-[11] overflow-hidden desktop-infoblock-base sm:mobile-infoblock-base">
                                    <div
                                        class="flex flex-col px-5 pt-5 w-full relative sm:justify-between sm:items-start">
                                        <div class="flex items-center z-[10]"><span
                                                class="text-white-500 text-base sm:text-sm sm:whitespace-nowrap">Members total</span>
                                            <div class="relative group">
                                                <button
                                                    class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none ml-1.5 "
                                                    data-tip="true" data-for="Members total" currentitem="false">
                                                    <span></span>
                                                    <svg class="w-5 h-5 " viewBox="0 0 20 20" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path>
                                                    </svg>
                                                </button>
                                                <div
                                                    class="__react_component_tooltip t4458817d-a47f-4f72-9885-a1a226636787 place-bottom type-dark"
                                                    id="Members total" data-id="tooltip">


                                                </div>
                                            </div>
                                        </div>
                                        <span
                                            class="text-white text-2xl font-bold notranslate sm:text-xl false mt-5 sm:mt-2.5" id="total_user"></span>
                                    </div>
                                </div>
                                <div class="bg-gray rounded p-5 flex flex-col max-w-full"><span
                                        class="inline-flex items-center text-base text-white-500 sm:text-sm">Members received
                                        <div class="relative group">
                                            <button class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none ml-1.5 "
                                                data-tip="true" data-for="Members received"
                                                currentitem="false"><span></span> <svg class="w-5 h-5 "
                                                                                       viewBox="0 0 20 20" fill="#fff"
                                                                                       xmlns="http://www.w3.org/2000/svg"><path
                                                        fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path></svg></button><div
                                                class="__react_component_tooltip te9d343a9-ffdc-464d-a784-b847dc42a7ec place-bottom type-dark"
                                                id="Members received" data-id="tooltip">

                                            </div></div></span>

                                    <div
                                        class="flex flex-col py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                        <span
                                            class="text-2xl text-white font-bold sm:text-xl"><span id="total_invest">0 </span> &nbsp; FDUSD</span><span
                                            class="text-green-light text-base items-baseline sm:text-sm">+ 0 FDUSD</span>
                                    </div>
                                    <div
                                        class="flex flex-col py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                        <span
                                            class="text-2xl text-white font-bold sm:text-xl">0 FDUSD</span><span
                                            class="text-green-light text-base items-baseline sm:text-sm">+ 0 FDUSD</span>
                                    </div>
                                </div>
                                <div class="bg-gray rounded p-5 flex flex-col flex-1 max-w-full">
                                    <div class="flex justify-between items-center text-base text-white-500 sm:text-sm">
                                        <span>Nexachain FDUSD Contracts</span>
                                        <button
                                            class="rounded-full h-5 w-5 justify-center items-center bg-main-blue hidden lg:flex">
                                            <svg class="stroke-current text-white" width="8" height="4" fill="#fff"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4 0 0h8L4 4Z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex flex-col flex-1 justify-between lg:hidden">
                                        <div class="flex flex-col border-t border-b border-white-100 pb-2.5 mt-2.5">
                                            <div
                                                class="flex justify-between items-center py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                <span
                                                    class="text-base text-white-500 notranslate sm:text-sm">ROYAL LOTTERY</span>
                                                <div class="flex justify-end items-center space-x-2.5"><span
                                                        class="text-base text-white notranslate sm:text-sm">0x1e6aEF41...29AB55816e5A</span>
                                                    <button>
                                                        <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15 6.667H8.332c-.92 0-1.667.746-1.667 1.666V15c0 .92.746 1.667 1.667 1.667h6.666c.92 0 1.667-.747 1.667-1.667V8.333c0-.92-.746-1.666-1.667-1.666Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.469 3.468A2.167 2.167 0 0 1 5 2.833h6.666A2.167 2.167 0 0 1 13.834 5v1.667a.5.5 0 0 1-1 0V5a1.167 1.167 0 0 0-1.167-1.167H5.001A1.167 1.167 0 0 0 3.834 5v6.667a1.167 1.167 0 0 0 1.167 1.166h1.666a.5.5 0 1 1 0 1H5.001a2.167 2.167 0 0 1-2.167-2.166V5c0-.575.228-1.126.635-1.532Z"></path>
                                                        </svg>
                                                    </button>
                                                    <a target="_blank"
                                                       href="https://bscscan.com/address/0x1e6aEF4108285fCE8F853f5bcc3a29AB55816e5A">
                                                        <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M11.314 3.813a3.446 3.446 0 1 1 4.873 4.874l-3.331 3.331a3.418 3.418 0 0 1-4.88-.001.5.5 0 0 1 .715-.7 2.417 2.417 0 0 0 3.452 0l.004-.004L15.48 7.98a2.446 2.446 0 1 0-3.46-3.46l-.416.417a.5.5 0 1 1-.707-.707l.417-.417Z"
                                                                  fill="#fff"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M8.26 7.225a3.417 3.417 0 0 1 3.765.758.5.5 0 0 1-.715.7 2.417 2.417 0 0 0-3.452 0l-.003.004L4.52 12.02a2.446 2.446 0 0 0 3.46 3.46l.416-.417a.5.5 0 1 1 .708.707l-.417.417a3.446 3.446 0 1 1-4.874-4.874l3.332-3.332a3.417 3.417 0 0 1 1.115-.756Z"
                                                                  fill="#fff"></path>
                                                        </svg>
                                                    </a></div>
                                            </div>
                                            <div
                                                class="flex justify-between items-center py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                <span class="text-base text-white-500 notranslate sm:text-sm">Qore</span>
                                                <div class="flex justify-end items-center space-x-2.5"><span
                                                        class="text-base text-white notranslate sm:text-sm">0xB80A887...7Ad9502e892</span>
                                                    <button>
                                                        <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15 6.667H8.332c-.92 0-1.667.746-1.667 1.666V15c0 .92.746 1.667 1.667 1.667h6.666c.92 0 1.667-.747 1.667-1.667V8.333c0-.92-.746-1.666-1.667-1.666Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.469 3.468A2.167 2.167 0 0 1 5 2.833h6.666A2.167 2.167 0 0 1 13.834 5v1.667a.5.5 0 0 1-1 0V5a1.167 1.167 0 0 0-1.167-1.167H5.001A1.167 1.167 0 0 0 3.834 5v6.667a1.167 1.167 0 0 0 1.167 1.166h1.666a.5.5 0 1 1 0 1H5.001a2.167 2.167 0 0 1-2.167-2.166V5c0-.575.228-1.126.635-1.532Z"></path>
                                                        </svg>
                                                    </button>
                                                    <a target="_blank"
                                                       href="https://bscscan.com/address/0xB80A88737a27cEb19ec9874A61F4a7Ad9502e892">
                                                        <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M11.314 3.813a3.446 3.446 0 1 1 4.873 4.874l-3.331 3.331a3.418 3.418 0 0 1-4.88-.001.5.5 0 0 1 .715-.7 2.417 2.417 0 0 0 3.452 0l.004-.004L15.48 7.98a2.446 2.446 0 1 0-3.46-3.46l-.416.417a.5.5 0 1 1-.707-.707l.417-.417Z"
                                                                  fill="#fff"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M8.26 7.225a3.417 3.417 0 0 1 3.765.758.5.5 0 0 1-.715.7 2.417 2.417 0 0 0-3.452 0l-.003.004L4.52 12.02a2.446 2.446 0 0 0 3.46 3.46l.416-.417a.5.5 0 1 1 .708.707l-.417.417a3.446 3.446 0 1 1-4.874-4.874l3.332-3.332a3.417 3.417 0 0 1 1.115-.756Z"
                                                                  fill="#fff"></path>
                                                        </svg>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col pt-2.5 mt-auto">
                                            <div
                                                class="flex flex-col py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                <span
                                                    class="text-base text-white-500 sm:text-sm">Transactions made</span><span
                                                    class="text-2xl text-white font-bold sm:text-xl">0</span><span
                                                    class="text-green-light text-base items-baseline sm:text-sm">+ 0</span>
                                            </div>
                                            <div
                                                class="flex flex-col py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                <span class="text-base text-white-500 sm:text-sm"><span>Turnover, <span
                                                            class="notranslate">FDUSD</span> </span></span><span
                                                    class="text-2xl text-white font-bold sm:text-xl">0</span><span
                                                    class="text-green-light text-base items-baseline sm:text-sm">+ 0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden"><span>00:00:00:00</span></div>
                        </div>
                    </div>
                    <div
                        style="background-image: url({{asset('lmodel/blue-blur.png')}}); background-repeat: round; background-size: cover;"
                        class="absolute left-1/2 -bottom-1/2 transform -translate-x-1/2 w-full h-full z-0 sm:hidden"></div>
                </div>
{{--                <div class="sm:px-5">
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none banners-notifybot-wrapper relative w-full flex sm:flex-col justify-between sm:items-center bg-[#0B0316] rounded px-7.5 pb-3 sm:pb-0 pt-5 min-h-[143px] sm:min-h-[359px]">
                        <svg class="absolute top-2.5 right-2.5" width="20" height="20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                  fill="#fff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                  fill="#fff"></path>
                        </svg>
                        <div class="flex flex-col items-start space-y-1.5"><span
                                class="text-left block text-3xl font-medium text-white">Official <span
                                    class="text-yellow">Notify Bot</span> <br class="sm:hidden"> for busd.nexachain.io users</span><span
                                class="text-white font-light">Here you can get notifications about all the events in your account.</span>
                        </div>
                        <img
                            class="absolute bottom-0 right-[10%] sm:right-auto sm:relative h-full max-h-[110%] sm:max-h-[170px]"
                            src="/banners/notifybot/robot.png" alt=""></button>
                </div>
                <div
                    class="flex flex-col items-center sm:items-start justify-center my-25 sm:mb-0 sm:p-5 z-10 sm:my-0 sm:pt-7.5">
                    <span class="text-white text-3xl font-bold mb-5"> Need help with using the platform? </span><span
                        class="mb-7.5"> Get qualified support from Nexachain experts via online chat </span>
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-blue hover:bg-hover-main-blue active:bg-active-main-blue font-medium rounded-mini sm:w-full">
                        Contact support
                    </button>
                </div>--}}
            </div>
            <footer
                class="flex z-10  items-center  justify-between  py-10 w-full sm:justify-start sm:items-start sm:flex-col sm:px-5 sm:pt-7.5 sm:pb-12 sm:mt-0">
                <div class="flex items-center sm:w-full sm:items-start sm:text-left sm:flex-col sm:order-2"><span
                        class="text-white-500 text-base font-normal mr-2.5 sm:text-sm sm:mb-2.5 sm:mr-0">© 2024 All Rights Reserved</span>
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-0 py-0 bg-transparent text-white hover:text-white-500 font-normal text-sm notranslate">
                        Documents
                    </button>
                </div>
                <div class="flex space-x-14 sm:w-full sm:space-y-14 sm:space-x-0 sm:order-1 sm:mb-7.5">
                    <div class="flex space-x-4 w-full"><a
                            class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                            target="_blank" href="https://discord.gg/nexachain/">
                            <svg class="w-4 h-4" viewBox="0 0 21 15" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.581 1.247A15.918 15.918 0 0 0 13.58 0a.084.084 0 0 0-.065.028c-.169.31-.366.712-.497 1.022a15.08 15.08 0 0 0-4.499 0A9.395 9.395 0 0 0 8.012.028C8.002.01 7.975 0 7.947 0a16.038 16.038 0 0 0-4.003 1.247c-.009 0-.018.009-.028.018C1.367 5.08.664 8.791 1.011 12.465c0 .02.01.038.028.047a16.28 16.28 0 0 0 4.911 2.484c.028.01.056 0 .066-.019.375-.515.712-1.059 1.003-1.63.018-.038 0-.075-.038-.085-.534-.206-1.04-.45-1.537-.73-.037-.02-.037-.076-.01-.104.104-.075.207-.16.31-.234a.058.058 0 0 1 .066-.01c3.224 1.472 6.7 1.472 9.888 0a.058.058 0 0 1 .065.01c.103.084.206.16.31.243.037.029.037.085-.01.104-.487.29-1.003.524-1.537.73-.037.01-.047.057-.037.085.3.572.637 1.115 1.002 1.63.029.01.057.02.085.01a16.215 16.215 0 0 0 4.92-2.484.052.052 0 0 0 .029-.046c.412-4.246-.685-7.93-2.906-11.2-.01-.01-.019-.02-.038-.02ZM7.506 10.226c-.965 0-1.771-.89-1.771-1.987s.787-1.987 1.771-1.987c.994 0 1.78.9 1.771 1.987 0 1.096-.787 1.986-1.771 1.986Zm6.533 0c-.966 0-1.772-.89-1.772-1.987s.788-1.987 1.772-1.987c.993 0 1.78.9 1.771 1.987 0 1.096-.778 1.986-1.771 1.986Z"></path>
                            </svg>
                        </a><a
                            class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                            target="_blank" href="https://t.me/nexachainio_official/">
                            <svg class="w-4 h-4" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11.915.776.841 5.168a.4.4 0 0 0 .03.755l2.79.864 1.133 3.503a.4.4 0 0 0 .653.17l1.64-1.523 3.11 2.29a.4.4 0 0 0 .627-.231l2.166-9.294a.8.8 0 0 0-1.075-.926Zm-6.483 6.74-.346 2.072-.8-2.901 7.816-5.1-6.67 5.929Z"
                                      fill="#fff"></path>
                            </svg>
                        </a><a
                            class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                            target="_blank" href="https://www.youtube.com/@NEXACHAINCommunity/">
                            <svg class="w-4 h-4" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.326 1.702A1.687 1.687 0 0 0 12.163.494C11.13.2 6.998.2 6.998.2S2.867.2 1.834.482C1.279.64.822 1.115.67 1.702.398 2.775.398 5 .398 5s0 2.236.272 3.298c.153.587.598 1.05 1.164 1.208 1.043.294 5.164.294 5.164.294s4.132 0 5.165-.282a1.687 1.687 0 0 0 1.164-1.209c.271-1.073.271-3.298.271-3.298s.011-2.236-.272-3.309ZM5.683 7.055v-4.11L9.119 5 5.683 7.055Z"
                                    fill="#fff"></path>
                            </svg>
                        </a><a
                            class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                            target="_blank" href="https://twitter.com/nexachainofficial/">
                            <svg class="w-4 h-4" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12.196 1.338c-.442.195-.91.324-1.39.382.506-.302.884-.779 1.064-1.34a4.79 4.79 0 0 1-1.536.588 2.42 2.42 0 0 0-4.125 2.208A6.86 6.86 0 0 1 1.219.643a2.423 2.423 0 0 0 .751 3.235c-.4-.01-.774-.12-1.1-.302v.03A2.422 2.422 0 0 0 2.813 5.98a2.441 2.441 0 0 1-1.092.04 2.425 2.425 0 0 0 2.263 1.683A4.854 4.854 0 0 1 .398 8.705 6.767 6.767 0 0 0 4.103 9.8c4.458 0 6.893-3.692 6.893-6.895 0-.105-.003-.21-.008-.312a4.928 4.928 0 0 0 1.208-1.255Z"
                                      fill="#fff"></path>
                            </svg>
                        </a></div>
                </div>
            </footer>
        </div>

    </div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
<script>
    var configs={
        routes:{
            index: "{{\Illuminate\Support\Facades\URL::to('/')}}",
            register_ajax: "{{\Illuminate\Support\Facades\URL::route('register_ajax')}}",
            activate_level: "{{\Illuminate\Support\Facades\URL::route('activate_level')}}",
            login_next: "{{\Illuminate\Support\Facades\URL::route('login_next')}}",
            dashboard: "{{\Illuminate\Support\Facades\URL::route('lmodel1')}}",
        }
    }
</script>
<script src="{{asset("js/jquery-3.7.min.js")}}"></script>
<script src="{{asset("toast/toastr.js")}}"></script>
<script src="{{asset("contractjs/subcription.js")}}"></script>
<script src="{{asset("contractjs/lotterie.js")}}"></script>
<script type="module" src="{{asset('contractjs/connect-wallet.js')}}"></script>
<script src="{{asset('lmodel/m2/js/all-plugins.js')}}"></script>
<script>
    jQuery(window).on('load',function () {
        'use strict';
        subcription.getTotalInvested()
        lottery.findWinner()
    });
    $('#countdown').countdown({
        date: '01/19/2024 15:00:00',
        day: 'Day',
        days: 'Days'
    });
/*    function auto_start(){
        console.log("icci")
        const date_=new Date()
        date_.setHours(date_.getHours() + 4);
        $('#countdown').countdown({
            date: '01/18/2024 14:00:00',
            day: 'Day',
            days: 'Days'
        });
    }

    setInterval(auto_start, 1000);*/
</script>
</body>
</html>
