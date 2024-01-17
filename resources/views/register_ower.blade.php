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

    <title>Register Owner | NEXACHAIN FDUSD</title>
    <style id="abu-collapse-styles" type="text/css"></style>

</head>
<body style="overflow: unset; position: relative; min-height: 100%; top: 40px;">
<span id="user_id">{{$id}}</span>

<div id="__next">
    <div class="relative flex bg-main-bg items-center justify-center min-h-screen min-w-full overflow-hidden">
        <div
            class="fixed top-0 left-1/2 -translate-x-1/2 flex justify-center w-full px-10 py-2.5 z-40 lg:p-0 lg:max-h-screen z-999999">
            <div
                class="flex justify-between items-center rounded-mini max-w-desktop-preview-bar w-full bg-main-blue px-5 py-2 shadow-preview-bar lg:pl-10 sm:pl-5 lg:py-2.5 lg:rounded-none lg:rounded-b-mini lg:pr-0 false">
                <div class="flex w-full overflow-hidden items-center justify-between space-x-2.5 lg:items-start ">
                    <div
                        class="w-full flex justify-start items-center space-x-5 lg:flex-col lg:h-full lg:items-start lg:space-x-0 lg:space-y-7.5">
                        <div class="flex items-center  false lg:w-full lg:pr-10 sm:pr-5"><a href="/">
                                <img src="{{asset("lmodel/icon_nexa.png")}}" width="45" height="30"/>
                            </a>

                        </div>
                    </div>
                    <w3m-core-button></w3m-core-button>
                </div>
                <div class="flex lg:justify-end lg:ml-auto lg:pr-10 sm:pr-5">
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 rounded-full lg:hidden w-10 h-10 !p-0 ml-5">
                        <svg class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" stroke="#fff"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6 6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="">
                        <button onclick="showMenu()"
                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 flex-col rounded-full w-10 h-10 !p-0 hidden lg:flex">
                            <span class="w-4 border-t border-white mb-2"></span><span
                                class="w-4 border-t border-white"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div id="hambuger" class="fixed top-0 left-1/2 -translate-x-1/2 flex justify-center w-full px-10 py-2.5 z-40 lg:p-0 lg:max-h-screen z-999999">
            <div class="flex justify-between items-center rounded-mini max-w-desktop-preview-bar w-full bg-main-blue px-5 py-2 shadow-preview-bar lg:pl-10 sm:pl-5 lg:py-2.5 lg:rounded-none lg:rounded-b-mini lg:pr-0 lg:flex-col lg:pb-5 lg:h-screen lg:max-h-screen lg:rounded-b-none lg:justify-start">
                <div
                    class="flex w-full overflow-hidden items-center justify-between space-x-2.5 lg:items-start lg:order-2 lg:flex-col lg:pt-10 lg:items-start lg:space-y-7.5 lg:flex-1 lg:h-full">
                    <div
                        class="w-full flex justify-start items-center space-x-5 lg:flex-col lg:h-full lg:items-start lg:space-x-0 lg:space-y-7.5">
                        <div class="flex items-center  lg:flex-col lg:items-start lg:w-full lg:pr-10 sm:pr-5"><a href="/">
                                <img src="{{asset("lmodel/icon_nexa.png")}}" width="163" height="30">
                                {{--   <svg class="absolute top-4 left-5" width="163" height="30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M46.732 21.907h2.61l2.062-4.44h11.08l1.097-2.374H49.894l-3.162 6.814ZM65.558 10.839h-13.69L50.772 13.2H64.46l1.097-2.362ZM143.239 21.874v.033l13.689-.033 1.097-2.362h-11.061l.947-2.046h11.08l1.096-2.373H146.4l-3.161 6.78ZM148.375 10.839l-1.097 2.362h13.69l1.096-2.362h-13.689ZM77.976 13.2l-2.91 6.311-8.473-.01 2.924-6.3h8.459Zm2.617 0a1.663 1.663 0 0 0-1.513-2.361h-8.474c-1.59 0-3.033.918-3.703 2.362l-2.066 4.451h.008l-.858 1.86h-.005a1.665 1.665 0 0 0 1.514 2.362h8.474c1.59 0 3.034-.919 3.703-2.363l2.913-6.31h.007ZM127.333 10.839h-8.474c-1.59 0-3.033.918-3.703 2.362h11.073l-.906 1.968h-11.08l-1.151 2.483-.855 1.86s-1.075 2.318-1.091 2.35l-.006.012h2.61l1.096-2.363.914-1.968h8.47l-2.004 4.33h2.57l4.044-8.672h.008a1.665 1.665 0 0 0-1.515-2.362ZM135.174 15.093l-1.096 2.373h6.254l-.519 1.116c-.259.569-.823.93-1.444.93l-6.602-.011a.537.537 0 0 1-.493-.766l2.138-4.615c.26-.558.822-.919 1.44-.919l10.067-.01c.498-1.105 0 0 1.108-2.352H134.93c-1.59 0-3.038.919-3.708 2.362l-2.061 4.452h.003l-.858 1.859a1.663 1.663 0 0 0 1.513 2.362h8.47a4.08 4.08 0 0 0 3.706-2.362l2.037-4.418h-8.858ZM109.652 15.17h-8.914l.915-1.97h11.076c1.115-2.361-.007 0 1.115-2.361h-11.098A4.076 4.076 0 0 0 99.04 13.2l-1.094 2.417a1.356 1.356 0 0 0 1.228 1.925h8.938l-.91 1.968H96.119c-.509 1.105 0 0-1.134 2.363h11.12a4.077 4.077 0 0 0 3.704-2.363s1.173-2.504 1.195-2.592a1.4 1.4 0 0 0-1.352-1.75ZM95.15 10.839H84.032L82.948 13.2h11.094l-.907 1.968h-11.09l-1.137 2.483-1.952 4.222h2.61l2.007-4.331h4.939l1.597 4.364h2.582l-1.565-4.364h1.195a3.605 3.605 0 0 0 3.282-2.133l1.05-2.209h.007a1.662 1.662 0 0 0-1.51-2.362ZM37.68 5.851a.482.482 0 0 1 .615.296l.43 1.247s-1.852-.59-2.818-.777l1.773-.766Zm6.055 3.336c-.004 0-.195-.131-.297-.186l-3.111-1.586c-.965-.46-.752-.82-1.118-1.826a6.228 6.228 0 0 0-.549-1.127C36.884 3.62 31.836 3.817 31.354 0c0 0-1.884 1.236-2.227 3.5C9.227 1.98 0 12.96 0 12.96c3.706-1.476 7.705-2.176 11.704-2.362-7.603 5.851-9.997 14.666-9.997 14.666s6.16-5.982 15.419-9.318C14.702 19.37 13.298 23.963 13.872 30c0 0 4.763-18.177 27.361-13.78 0 0 .827-2.417 2.962-4.89.135-.152.211-.382.227-.645a1.735 1.735 0 0 0-.687-1.498Z"
                                          fill="#fff"></path>
                                </svg>--}}
                            </a><span
                                class="text-base text-white whitespace-nowrap mr-5 notranslate lg:mr-0 lg:text-2xl lg:text-medium lg:mb-7.5">Preview ID<span
                                    class="hidden lg:inline ml-1.5">{{$id}}</span></span>
                            <div class="flex justify-between items-center space-x-2.5 lg:space-x-5 lg:w-full lg:flex"><input
                                    class="px-4 py-3 rounded-mini leading-5 bg-white-100 text-white text-base outline-none lg:w-full lg:flex-1"
                                    value="1">
                                <button disabled=""
                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none bg-white-100 py-3 px-5 cursor-not-allowed lg:px-10">
                                    Go
                                </button>
                            </div>
                        </div>
                        <div class="w-full pr-5 lg:pr-10 sm:pr-5 !mt-4">
                            <button
                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-bg hover:bg-black-500 whitespace-nowrap hidden lg:flex w-full">
                                Exit preview mode
                            </button>
                        </div>
                        <div class="overflow-auto w-full hidden lg:flex">
                            <div class="flex flex-1 flex-col h-full w-full overflow-y-auto space-y-2.5 lg:space-y-0">
                                <div
                                    class="flex flex-1 flex-col w-full h-full overflow-y-auto space-y-2.5 lg:space-y-0 lg:mb-5 sm:mb-[50px]">
                                    <a class="undefined undefined" href="{{route("lmodel1",['id'=>$id])}}">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24"
                                                     stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 4H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM19 4h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM9 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1ZM19 14h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Z"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Dashboard</span></div>
                                        </button>
                                    </a>
                                    <a class="undefined undefined"
                                       href="/partners?id=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 "
                                                     viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                        stroke-width="1.333" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                <span
                                                    class="text-white-500 text-base ml-2.5 false">Partners</span>
                                            </div>
                                        </button>
                                    </a>
                                    <a class="undefined undefined" href="/links?id=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 "
                                                     data-name="a239fe10-42dc-4f9c-ab1f-bcabd992189e"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 15.16 19.14">
                                                    <path
                                                        d="M7 9.17a4.42 4.42 0 0 0 4.5-4.33A4.42 4.42 0 0 0 7 .5h0a4.43 4.43 0 0 0-4.5 4.34A4.42 4.42 0 0 0 7 9.17Z"
                                                        fill="none" stroke="#969797" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M10.23 13.3a1.93 1.93 0 0 1 1.49 0 2 2 0 0 1 .63.43.3.3 0 0 1 0 .41.27.27 0 0 1-.4 0 1.37 1.37 0 0 0-.45-.3 1.31 1.31 0 0 0-.52-.11 1.42 1.42 0 0 0-1 .41l-1.85 1.91a1.4 1.4 0 0 0 0 2 1.36 1.36 0 0 0 1 .41 1.35 1.35 0 0 0 1-.41l.24-.24a.28.28 0 0 1 .4 0 .3.3 0 0 1 0 .41l-.24.24a1.93 1.93 0 0 1-2.74 0 2 2 0 0 1 0-2.8l1.81-1.93a2.08 2.08 0 0 1 .63-.43Z"
                                                        fill="#969797" stroke="#969797" stroke-miterlimit="10"
                                                        stroke-width=".25" fill-rule="evenodd"></path>
                                                    <path
                                                        d="M.5 18.55v-2a4.15 4.15 0 0 1 1.08-2.83 3.51 3.51 0 0 1 2.59-1.17H7.5"
                                                        fill="none" stroke="#969797" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11.76 11.73a1.88 1.88 0 0 1 2.72 0 2 2 0 0 1 0 2.79l-1.86 1.91a2.06 2.06 0 0 1-.62.44 1.9 1.9 0 0 1-1.48 0 2.06 2.06 0 0 1-.62-.44.28.28 0 0 1 0-.4.28.28 0 0 1 .4 0 1.25 1.25 0 0 0 .44.31 1.28 1.28 0 0 0 1 0 1.25 1.25 0 0 0 .44-.31l1.86-1.91a1.44 1.44 0 0 0 0-2 1.34 1.34 0 0 0-1-.41 1.38 1.38 0 0 0-1 .41l-.23.24a.27.27 0 0 1-.39 0 .28.28 0 0 1 0-.4Z"
                                                        fill="#969797" stroke="#969797" stroke-miterlimit="10"
                                                        stroke-width=".25" fill-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Links</span>
                                            </div>
                                        </button>
                                    </a>
                                    <a class="undefined undefined" href="/stats?id=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 "
                                                     viewBox="0 0 24 24" stroke="#fff" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16 12h5m-9-9v5-5ZM8.929 14.582 5.5 17.5M12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Stats</span>
                                            </div>
                                        </button>
                                    </a>
                                    <a class="undefined undefined" href="#">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 animate-bounce"
                                                     viewBox="0 0 24 24">
                                                    <path
                                                        d="m11.6 3.4 8.6 9.1c.7.7.4 1.9-.5 2.3L5.7 21c-.6.3-1.2.1-1.7-.4l-1.4-1.5c-.4-.4-.5-1.1-.2-1.6L9.2 3.8c.4-.9 1.7-1.1 2.4-.4z"
                                                        style="fill: none; stroke: rgb(173, 173, 173); stroke-miterlimit: 10;"></path>
                                                    <path class="st1"
                                                          d="m15.6 3.7.6-1.9M19.7 7.8h2M18 5.4 20.4 3M7.5 20.4c.6 1.2 1.8 2 3.2 2 2 0 3.6-1.6 3.6-3.6 0-.4-.1-.9-.2-1.3"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Promo &amp; PDFs</span>
                                            </div>
                                        </button>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-bg hover:bg-black-500 whitespace-nowrap lg:hidden">
                        Connect wallet
                    </button>
                </div>
                <div class="flex lg:justify-end lg:ml-auto lg:pr-10 sm:pr-5">
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 rounded-full lg:hidden w-10 h-10 !p-0 ml-5">
                        <svg class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" stroke="#fff"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6 6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="">
                        <button onclick="hideMenu()"
                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 flex-col rounded-full w-10 h-10 !p-0 hidden lg:flex">
                            <div class="">
                                <svg class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" stroke="#fff"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6 6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full h-full justify-center max-w-desktop-full">
            <div class="relative w-full max-w-desktop-left-bar flex-shrink-0 border-r border-white-100 lg:hidden">
                <div class="fixed top-0 max-w-desktop-left-bar w-full flex h-screen z-10 pt-4">
                    <div class="flex flex-col min-h-screen w-full flex-shrink-0 pl-10 pr-5 pt-22 overflow-auto">
                        <div class="flex-1 lg:pr-0 lg:pl-10 sm:pl-5">
                            <div class="flex flex-1 flex-col h-full w-full overflow-y-auto space-y-2.5 lg:space-y-0">
                                <div
                                    class="flex flex-1 flex-col w-full h-full overflow-y-auto space-y-2.5 lg:space-y-0 lg:mb-5 sm:mb-[50px]">
                                    <a class="undefined undefined" href="{{route("lmodel1",['id'=>$id])}}">
                                        <button class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24"
                                                     stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 4H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM19 4h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM9 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1ZM19 14h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Z"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Dashboard</span>
                                            </div>
                                        </button>
                                    </a>
                                    <a class="undefined undefined"
                                       href="/partners?id=1">
                                        <button class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 "
                                                     viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                        stroke-width="1.333" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                <span
                                                    class="text-white-500 text-base ml-2.5 false">Partners</span>
                                            </div>
                                        </button>
                                    </a>
                                    <a class="undefined undefined" href="/links?id=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 "
                                                     data-name="a239fe10-42dc-4f9c-ab1f-bcabd992189e"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 15.16 19.14">
                                                    <path
                                                        d="M7 9.17a4.42 4.42 0 0 0 4.5-4.33A4.42 4.42 0 0 0 7 .5h0a4.43 4.43 0 0 0-4.5 4.34A4.42 4.42 0 0 0 7 9.17Z"
                                                        fill="none" stroke="#969797" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M10.23 13.3a1.93 1.93 0 0 1 1.49 0 2 2 0 0 1 .63.43.3.3 0 0 1 0 .41.27.27 0 0 1-.4 0 1.37 1.37 0 0 0-.45-.3 1.31 1.31 0 0 0-.52-.11 1.42 1.42 0 0 0-1 .41l-1.85 1.91a1.4 1.4 0 0 0 0 2 1.36 1.36 0 0 0 1 .41 1.35 1.35 0 0 0 1-.41l.24-.24a.28.28 0 0 1 .4 0 .3.3 0 0 1 0 .41l-.24.24a1.93 1.93 0 0 1-2.74 0 2 2 0 0 1 0-2.8l1.81-1.93a2.08 2.08 0 0 1 .63-.43Z"
                                                        fill="#969797" stroke="#969797" stroke-miterlimit="10"
                                                        stroke-width=".25" fill-rule="evenodd"></path>
                                                    <path
                                                        d="M.5 18.55v-2a4.15 4.15 0 0 1 1.08-2.83 3.51 3.51 0 0 1 2.59-1.17H7.5"
                                                        fill="none" stroke="#969797" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11.76 11.73a1.88 1.88 0 0 1 2.72 0 2 2 0 0 1 0 2.79l-1.86 1.91a2.06 2.06 0 0 1-.62.44 1.9 1.9 0 0 1-1.48 0 2.06 2.06 0 0 1-.62-.44.28.28 0 0 1 0-.4.28.28 0 0 1 .4 0 1.25 1.25 0 0 0 .44.31 1.28 1.28 0 0 0 1 0 1.25 1.25 0 0 0 .44-.31l1.86-1.91a1.44 1.44 0 0 0 0-2 1.34 1.34 0 0 0-1-.41 1.38 1.38 0 0 0-1 .41l-.23.24a.27.27 0 0 1-.39 0 .28.28 0 0 1 0-.4Z"
                                                        fill="#969797" stroke="#969797" stroke-miterlimit="10"
                                                        stroke-width=".25" fill-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Links</span>
                                            </div>
                                        </button>
                                    </a>
                                    <a class="undefined undefined" href="/stats?id=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 "
                                                     viewBox="0 0 24 24" stroke="#fff" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16 12h5m-9-9v5-5ZM8.929 14.582 5.5 17.5M12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Stats</span>
                                            </div>
                                        </button>
                                    </a>
                                    <a class="undefined undefined" href="#">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 animate-bounce"
                                                     viewBox="0 0 24 24">
                                                    <style>.st1 {
                                                            fill: none;
                                                            stroke: #adadad;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-miterlimit: 10
                                                        }</style>
                                                    <path
                                                        d="m11.6 3.4 8.6 9.1c.7.7.4 1.9-.5 2.3L5.7 21c-.6.3-1.2.1-1.7-.4l-1.4-1.5c-.4-.4-.5-1.1-.2-1.6L9.2 3.8c.4-.9 1.7-1.1 2.4-.4z"
                                                        style="fill: none; stroke: rgb(173, 173, 173); stroke-miterlimit: 10;"></path>
                                                    <path class="st1"
                                                          d="m15.6 3.7.6-1.9M19.7 7.8h2M18 5.4 20.4 3M7.5 20.4c.6 1.2 1.8 2 3.2 2 2 0 3.6-1.6 3.6-3.6 0-.4-.1-.9-.2-1.3"></path>
                                                </svg>
                                                <span
                                                    class="text-white-500 text-base ml-2.5 false">Promo &amp; PDFs</span>
                                            </div>
                                        </button>
                                    </a></div>
                            </div>
                        </div>
                        <div class="mt-auto ">
                            <div class="pt-5 pb-10 w-full flex flex-col items-center justify-center">
                                <div class="flex space-x-4 w-full">
                                    <a
                                        class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                        target="_blank" href="https://discord.gg/forsage/">
                                        <svg class="w-4 h-4" viewBox="0 0 21 15" fill="#fff"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.581 1.247A15.918 15.918 0 0 0 13.58 0a.084.084 0 0 0-.065.028c-.169.31-.366.712-.497 1.022a15.08 15.08 0 0 0-4.499 0A9.395 9.395 0 0 0 8.012.028C8.002.01 7.975 0 7.947 0a16.038 16.038 0 0 0-4.003 1.247c-.009 0-.018.009-.028.018C1.367 5.08.664 8.791 1.011 12.465c0 .02.01.038.028.047a16.28 16.28 0 0 0 4.911 2.484c.028.01.056 0 .066-.019.375-.515.712-1.059 1.003-1.63.018-.038 0-.075-.038-.085-.534-.206-1.04-.45-1.537-.73-.037-.02-.037-.076-.01-.104.104-.075.207-.16.31-.234a.058.058 0 0 1 .066-.01c3.224 1.472 6.7 1.472 9.888 0a.058.058 0 0 1 .065.01c.103.084.206.16.31.243.037.029.037.085-.01.104-.487.29-1.003.524-1.537.73-.037.01-.047.057-.037.085.3.572.637 1.115 1.002 1.63.029.01.057.02.085.01a16.215 16.215 0 0 0 4.92-2.484.052.052 0 0 0 .029-.046c.412-4.246-.685-7.93-2.906-11.2-.01-.01-.019-.02-.038-.02ZM7.506 10.226c-.965 0-1.771-.89-1.771-1.987s.787-1.987 1.771-1.987c.994 0 1.78.9 1.771 1.987 0 1.096-.787 1.986-1.771 1.986Zm6.533 0c-.966 0-1.772-.89-1.772-1.987s.788-1.987 1.772-1.987c.993 0 1.78.9 1.771 1.987 0 1.096-.778 1.986-1.771 1.986Z"></path>
                                        </svg>
                                    </a>
                                    <a
                                        class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                        target="_blank" href="https://t.me/forsageio_official/">
                                        <svg class="w-4 h-4" viewBox="0 0 14 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M11.915.776.841 5.168a.4.4 0 0 0 .03.755l2.79.864 1.133 3.503a.4.4 0 0 0 .653.17l1.64-1.523 3.11 2.29a.4.4 0 0 0 .627-.231l2.166-9.294a.8.8 0 0 0-1.075-.926Zm-6.483 6.74-.346 2.072-.8-2.901 7.816-5.1-6.67 5.929Z"
                                                  fill="#fff"></path>
                                        </svg>
                                    </a>
                                    <a
                                        class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                        target="_blank" href="https://www.youtube.com/@NEXACHAINCommunity/">
                                        <svg class="w-4 h-4" viewBox="0 0 14 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.326 1.702A1.687 1.687 0 0 0 12.163.494C11.13.2 6.998.2 6.998.2S2.867.2 1.834.482C1.279.64.822 1.115.67 1.702.398 2.775.398 5 .398 5s0 2.236.272 3.298c.153.587.598 1.05 1.164 1.208 1.043.294 5.164.294 5.164.294s4.132 0 5.165-.282a1.687 1.687 0 0 0 1.164-1.209c.271-1.073.271-3.298.271-3.298s.011-2.236-.272-3.309ZM5.683 7.055v-4.11L9.119 5 5.683 7.055Z"
                                                fill="#fff"></path>
                                        </svg>
                                    </a>
                                    <a
                                        class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                        target="_blank" href="https://twitter.com/forsageofficial/">
                                        <svg class="w-4 h-4" viewBox="0 0 13 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M12.196 1.338c-.442.195-.91.324-1.39.382.506-.302.884-.779 1.064-1.34a4.79 4.79 0 0 1-1.536.588 2.42 2.42 0 0 0-4.125 2.208A6.86 6.86 0 0 1 1.219.643a2.423 2.423 0 0 0 .751 3.235c-.4-.01-.774-.12-1.1-.302v.03A2.422 2.422 0 0 0 2.813 5.98a2.441 2.441 0 0 1-1.092.04 2.425 2.425 0 0 0 2.263 1.683A4.854 4.854 0 0 1 .398 8.705 6.767 6.767 0 0 0 4.103 9.8c4.458 0 6.893-3.692 6.893-6.895 0-.105-.003-.21-.008-.312a4.928 4.928 0 0 0 1.208-1.255Z"
                                                  fill="#fff"></path>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-shrink w-full flex-col items-center min-h-screen bg-main max-w-[calc(100% - 326px)] lg:max-w-full overflow-auto pt-20 sm:pt-14">
                <div class="flex relative flex-1 py-10 pt-8.5 flex-col justify-between w-full px-10 sm:px-0 sm:pt-7.5">
                    <div class="flex flex-col space-y-10 sm:space-y-7.5">
                        <div class="flex flex-wrap justify-between notranslate ">
                            <div class="fixed flex items-center justify-center z-[1111] left-[35%] lg:left-[20%]   sm:left-0 sm:px-3 sm:w-full transition-all duration-1000 top-3">

                            </div>
                            <div class="flex flex-col flex-wrap w-full sm:px-5">
                                <div class="notranslate"></div>
                                <div class="flex items-center mb-1.5 sm:mb-2.5">
                                    <div class="flex"><a class="mr-1.5 text text-white-300 sm:text-sm"
                                                         href="{{route("lmodel1",["id"=>$id])}}"><span class="hover:text-white-500">ID {{$id}}</span>
                                            /</a></div>
                                    <span class="text text-white whitespace-nowrap sm:text-sm">Nexachain Register OWNER</span><span
                                        class="text text-white whitespace-nowrap ml-1.5 sm:text-sm"></span></div>
                                <div class="w-full flex justify-between flex-wrap">
                                    <div class="flex flex-wrap items-center"><span
                                            class="text-two-half text-white font-medium mr-2 sm:text-2xl sm:max-w-[170px]">Nexachain Register OWNER</span>
                                    </div>
                                    <div class="flex flex-col items-end">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="_loading_dialog" class="flex justify-center text-center" title="Loading ...">
                            <div class="loader"></div>
                            <h3>Loading ...</h3>
                        </div>
                        <div>
                            <div
                                class="flex overflow-hidden relative w-full flex-col bg-black-light rounded p-7.5 pb-5 sm:p-5 sm:pl-2.5 sm:pr-2.5 sm:rounded-none "
                                style="background-image: url({{asset("lmodel/blue-blur.png")}}); background-repeat: round; background-size: cover;">

                                <div class="flex flex-col mb-10 sm:mb-7.5">
                                    <div class="w-full relative flex flex-col flex-grow-0 flex-shrink-0">
                                        <div class="flex items-baseline"><label
                                                class="mb-2.5 text-white-500 sm:text-sm flex-shrink-0">User Address</label></div>
                                        <div class="w-full relative">
                                            <input id="new_address"  class="w-full bg-white-100 border-2 border-transparent
                                             rounded-mini py-3 px-5 text-white outline-none focus:border-2 focus:border-main-blue focus:bg-transparent  "
                                                   type="text" placeholder="User Address" value=""></div>
                                    </div>
                                    <div class="w-full relative flex flex-col flex-grow-0 flex-shrink-0 mt-4">
                                        <div class="flex items-baseline"><label
                                                class="mb-2.5 text-white-500 sm:text-sm flex-shrink-0">Owner Address</label></div>
                                        <div class="w-full relative">
                                            <input id="owner_address"  class="w-full bg-white-100 border-2 border-transparent
                                             rounded-mini py-3 px-5 text-white outline-none focus:border-2 focus:border-main-blue focus:bg-transparent  "
                                                   type="text" placeholder="Owner Address" value=""></div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-start sm:items-center space-y-2.5">
                                    <div class="flex space-x-2.5 sm:w-full">
                                        <button onclick="subcription.register_owner()"
                                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-blue hover:bg-hover-main-blue active:bg-active-main-blue mt-10 py-5 !px-10 sm:py-3  sm:mt-7.5 sm:flex-1">
                                            Send <i id="spinner_loader" class="loader"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer
                        class="flex lg:flex-col items-center mt-auto justify-between lg:justify-start lg:items-start py-10 w-full lg:p-5 lg:pb-9 pb-0 lg:pb-0 z-10">
                        <div class="hidden lg:block mb-7.5">
                            <div class="flex space-x-4 w-full"><a
                                    class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                    target="_blank" href="https://discord.gg/forsage/">
                                    <svg class="w-4 h-4" viewBox="0 0 21 15" fill="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.581 1.247A15.918 15.918 0 0 0 13.58 0a.084.084 0 0 0-.065.028c-.169.31-.366.712-.497 1.022a15.08 15.08 0 0 0-4.499 0A9.395 9.395 0 0 0 8.012.028C8.002.01 7.975 0 7.947 0a16.038 16.038 0 0 0-4.003 1.247c-.009 0-.018.009-.028.018C1.367 5.08.664 8.791 1.011 12.465c0 .02.01.038.028.047a16.28 16.28 0 0 0 4.911 2.484c.028.01.056 0 .066-.019.375-.515.712-1.059 1.003-1.63.018-.038 0-.075-.038-.085-.534-.206-1.04-.45-1.537-.73-.037-.02-.037-.076-.01-.104.104-.075.207-.16.31-.234a.058.058 0 0 1 .066-.01c3.224 1.472 6.7 1.472 9.888 0a.058.058 0 0 1 .065.01c.103.084.206.16.31.243.037.029.037.085-.01.104-.487.29-1.003.524-1.537.73-.037.01-.047.057-.037.085.3.572.637 1.115 1.002 1.63.029.01.057.02.085.01a16.215 16.215 0 0 0 4.92-2.484.052.052 0 0 0 .029-.046c.412-4.246-.685-7.93-2.906-11.2-.01-.01-.019-.02-.038-.02ZM7.506 10.226c-.965 0-1.771-.89-1.771-1.987s.787-1.987 1.771-1.987c.994 0 1.78.9 1.771 1.987 0 1.096-.787 1.986-1.771 1.986Zm6.533 0c-.966 0-1.772-.89-1.772-1.987s.788-1.987 1.772-1.987c.993 0 1.78.9 1.771 1.987 0 1.096-.778 1.986-1.771 1.986Z"></path>
                                    </svg>
                                </a><a
                                    class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                    target="_blank" href="https://t.me/forsageio_official/">
                                    <svg class="w-4 h-4" viewBox="0 0 14 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.915.776.841 5.168a.4.4 0 0 0 .03.755l2.79.864 1.133 3.503a.4.4 0 0 0 .653.17l1.64-1.523 3.11 2.29a.4.4 0 0 0 .627-.231l2.166-9.294a.8.8 0 0 0-1.075-.926Zm-6.483 6.74-.346 2.072-.8-2.901 7.816-5.1-6.67 5.929Z"
                                              fill="#fff"></path>
                                    </svg>
                                </a><a
                                    class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                    target="_blank" href="https://www.youtube.com/@NEXACHAINCommunity/">
                                    <svg class="w-4 h-4" viewBox="0 0 14 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.326 1.702A1.687 1.687 0 0 0 12.163.494C11.13.2 6.998.2 6.998.2S2.867.2 1.834.482C1.279.64.822 1.115.67 1.702.398 2.775.398 5 .398 5s0 2.236.272 3.298c.153.587.598 1.05 1.164 1.208 1.043.294 5.164.294 5.164.294s4.132 0 5.165-.282a1.687 1.687 0 0 0 1.164-1.209c.271-1.073.271-3.298.271-3.298s.011-2.236-.272-3.309ZM5.683 7.055v-4.11L9.119 5 5.683 7.055Z"
                                            fill="#fff"></path>
                                    </svg>
                                </a><a
                                    class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                    target="_blank" href="https://twitter.com/forsageofficial/">
                                    <svg class="w-4 h-4" viewBox="0 0 13 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12.196 1.338c-.442.195-.91.324-1.39.382.506-.302.884-.779 1.064-1.34a4.79 4.79 0 0 1-1.536.588 2.42 2.42 0 0 0-4.125 2.208A6.86 6.86 0 0 1 1.219.643a2.423 2.423 0 0 0 .751 3.235c-.4-.01-.774-.12-1.1-.302v.03A2.422 2.422 0 0 0 2.813 5.98a2.441 2.441 0 0 1-1.092.04 2.425 2.425 0 0 0 2.263 1.683A4.854 4.854 0 0 1 .398 8.705 6.767 6.767 0 0 0 4.103 9.8c4.458 0 6.893-3.692 6.893-6.895 0-.105-.003-.21-.008-.312a4.928 4.928 0 0 0 1.208-1.255Z"
                                              fill="#fff"></path>
                                    </svg>
                                </a></div>
                        </div>
                        <span class="text-white-500 text-xs font-normal lg:mb-2.5">© 2024 All Rights Reserved</span>
                        <button
                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-0 py-0 bg-transparent text-white hover:text-white-500 font-normal text-sm notranslate">
                            Documents
                        </button>
                    </footer>
                </div>
            </div>
        </div>
        <div class=""></div>
    </div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>

<script src="{{asset("js/jquery-3.7.min.js")}}"></script>
<script src="{{asset("toast/toastr.js")}}"></script>
<script src="{{asset("contractjs/subcription.js")}}"></script>
<script type="module" src="{{asset('contractjs/connect-wallet.js')}}"></script>

<script>
    $("#_loading_dialog").hide()
    var configs={
        routes:{
            index: "{{\Illuminate\Support\Facades\URL::to('/')}}",
            dashboard: "{{\Illuminate\Support\Facades\URL::route('lmodel1')}}",
            register_ajax: "{{\Illuminate\Support\Facades\URL::route('register_ajax')}}",
            activate_level: "{{\Illuminate\Support\Facades\URL::route('activate_level')}}",
            login_next: "{{\Illuminate\Support\Facades\URL::route('login_next')}}",
            check_register: "{{\Illuminate\Support\Facades\URL::route('check_register')}}",
        }
    }
    $('#hambuger').hide()
    function showMenu() {
        $('#hambuger').show()
    }
    function hideMenu() {
        $('#hambuger').hide()
    }
    jQuery(window).on('load',function () {
        'use strict';

    });

</script>

</body>
</html>
