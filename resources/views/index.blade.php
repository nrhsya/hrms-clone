<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

        @vite('resources/css/app.css')
        <title>MySyarikat HRMS</title>
    </head>
    <body class="bg-darkGray">
        <div x-data="{
            isExpanded: true,
        }">
            {{-- navbar --}}
            <nav class="bg-darkBlue border-gray-200 sticky top-0 z-50">
                <div class="flex flex-wrap items-center justify-between ml-9 mr-0 p-4">
                    <div class="flex flex-row items-center space-x-10 rtl:space-x-reverse">
                        <img src="{{ asset('img/mysyarikat-logo.svg') }}" class="h-5" alt="MySyarikat HRMS logo" />
                        <button class="bg-lightGray w-8 h-8 rounded-full" x-on:click="isExpanded =! isExpanded">
                            <svg class="w-3 h-3 ml-2.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.143 1H1.857A.857.857 0 0 0 1 1.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 7 6.143V1.857A.857.857 0 0 0 6.143 1Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 17 6.143V1.857A.857.857 0 0 0 16.143 1Zm-10 10H1.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 7 16.143v-4.286A.857.857 0 0 0 6.143 11Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-row items-center md:order-2 space-x-4 rtl:space-x-reverse">
                        <p class="text-white text-sm font-thin font-poppins">Byond Tech Global Berhad</p>
                        <button class="bg-lightGray w-8 h-8 rounded-full">
                            <svg class="w-3 h-3 ml-2.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 1h12M3 1v16M3 1H2m13 0v16m0-16h1m-1 16H3m12 0h2M3 17H1M6 4h1v1H6V4Zm5 0h1v1h-1V4ZM6 8h1v1H6V8Zm5 0h1v1h-1V8Zm-3 4h2a1 1 0 0 1 1 1v4H7v-4a1 1 0 0 1 1-1Z"/>
                            </svg>
                        </button>
                        <button class="bg-lightGray w-8 h-8 rounded-full">
                            <svg class="w-3 h-3 ml-2.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 3.464V1.1m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C15 15.4 15 16 14.462 16H1.538C1 16 1 15.4 1 14.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 8 3.464ZM4.54 16a3.48 3.48 0 0 0 6.92 0H4.54Z"/>
                            </svg>
                        </button>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img src="{{ asset('img/Cute.jpeg') }}" class="rounded-full w-8" alt="">
                        </button>
                        <p class="text-white text-sm font-thin font-poppins">Alif Azuwan</p>

                        <!-- Dropdown menu -->
                        {{-- <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                                </li>
                            </ul>
                        </div> --}}
                        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>

            <div class="h-screen">
                {{-- sidebar --}}
                <aside class="fixed top-15 bg-lighterGray shadow-lg transform duration-300" :class="isExpanded ? 'w-100' : 'w-20 translate-x-0 ease-in'">
                    <div class="px-4 py-4">
                        {{-- main navigation --}}
                        <ul class="space-y-2 mb-5">
                            <li class="bg-gradient-to-r from-turquoise to-darkBlue pl-4 pr-9 py-3 rounded-lg" :class="isExpanded ? 'opacity-100' : 'hidden'">
                                <p class="text-white font-poppins font-bold text-sm">Main Navigation</p>
                                <p class="text-white font-poppins font-normal text-xs">Get your personal record here</p>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center mt-3 rounded-lg bg-lighterTurquoise py-3 hover:py-3 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/element-4.svg') }}" alt="">
                                    <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/folder.svg') }}" alt="">
                                    <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">My Record</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/note-add.svg') }}" alt="">
                                    <div class="flex flex-row space-x-28">
                                        <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Apply</span>
                                        {{-- <img src="{{ asset('img/arrow-left.svg') }}" class="pl-2" alt=""> --}}
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/notification-status.svg') }}" alt="">
                                    <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Announcement</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/calendar.svg') }}" alt="">
                                    <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/gift.svg') }}" alt="">
                                    <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Invite Friends</span>
                                </a>
                            </li>
                        </ul>

                        {{-- administration --}}
                        <ul class="space-y-2 pb-24">
                            <li class="bg-gradient-to-r from-turquoise to-darkBlue pl-4 pr-9 py-3 rounded-lg" :class="isExpanded ? 'opacity-100' : 'hidden'">
                                <p class="text-white font-poppins font-bold text-sm">Administration</p>
                                <p class="text-white font-poppins font-normal text-xs">Manage report and approval</p>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/profile-2user.svg') }}" alt="">
                                    <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Employee</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/tick-square.svg') }}" alt="">
                                    <div class="flex flex-row space-x-24">
                                        <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Approval</span>
                                        <img src="{{ asset('img/arrow-left.svg') }}" class="pl-2" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/clock.svg') }}" alt="">
                                    <div class="flex flex-row space-x-20">
                                        <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Attendance</span>
                                        <img src="{{ asset('img/arrow-left.svg') }}" class="pl-1" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/firstline.svg') }}" alt="">
                                    <div class="flex flex-row space-x-20">
                                        <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Yearly Form</span>
                                        <img src="{{ asset('img/arrow-left.svg') }}" class="pl-1" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/dollar-square.svg') }}" alt="">
                                    <div class="flex flex-row justify-between space-x-24">
                                        <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">Payment</span>
                                        <img src="{{ asset('img/arrow-left.svg') }}" class="pl-2" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex space-x-3 items-center p-2 rounded-lg hover:py-2 hover:bg-lighterTurquoise" :class="isExpanded ? 'px-5' : 'px-4'">
                                    <img src="{{ asset('img/setting-2.svg') }}" alt="">
                                    <span class="text-sm font-normal font-poppins" :class="isExpanded ? 'opacity-100' : 'opacity-0'">System Setting</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

                {{-- contents --}}
                <div class="absolute" :class="isExpanded ? 'left-72' : 'left-20'">
                    {{-- date --}}
                    <div class="flex flex-row px-8 pt-5 items-center space-x-4">
                        <div class="flex flex-row items-center space-x-2 text-darkerGray">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/>
                            </svg>
                            <p class="text-sm font-poppins">8 January 2024 | Monday</p>
                        </div>
                        <div class="flex flex-row items-center space-x-2 text-darkerGray">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <p class="text-sm font-poppins">08:00 AM</p>
                        </div>
                    </div>

                    {{-- welcome text --}}
                    <div class="flex flex-row px-8 items-center">
                        {{-- welcome --}}
                        <div class="">
                            <div class="flex flex-row items-center" :class="isExpanded ? '' : 'space-x-20'">
                                <div class="flex flex-col space-y-3" :class="isExpanded ? '' : 'ml-12'">
                                    <h1 class="text-5xl font-poppins font-black bg-gradient-to-r from-turquoise to-darkBlue text-transparent bg-clip-text pb-1">Hey,</h1>
                                    <h1 class="text-5xl font-poppins font-black bg-gradient-to-r from-turquoise to-darkBlue text-transparent bg-clip-text pb-1">Good Morning</h1>
                                    <h1 class="text-5xl font-poppins font-black bg-gradient-to-r from-turquoise to-darkBlue text-transparent bg-clip-text">Alif Azuwan!</h1>
                                    <p class="text-sm text-darkerGray font-poppins">
                                        We are delighted to have you here today.
                                    </p>
                                </div>
                                <img src="{{ asset('img/dashboard.svg') }}" class="w-72" alt="">
                            </div>
                        </div>

                        {{-- get access --}}
                        <div class="mr-10">
                            <div class="flex flex-col space-y-3">
                                <p class="text-sm text-darkBlue font-poppins font-semibold">
                                    Get easy access to your account today!
                                </p>
                                <p class="text-xs text-darkerGray font-light font-poppins">Download Mysyarikat Apps</p>
                                <div class="flex flex-row items-center space-x-2">
                                    <div class="flex flex-row items-center space-x-3">
                                        <img src="{{ asset('img/huawei.svg') }}" class="w-32" alt="">
                                    </div>
                                    <div class="flex flex-row items-center space-x-3">
                                        <img src="{{ asset('img/google-play.svg') }}" class="w-32" alt="">
                                    </div>
                                    <div class="flex flex-row items-center space-x-3">
                                        <img src="{{ asset('img/app-store.svg') }}" class="w-32" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row px-8">
                        {{-- left side --}}
                        <div class="flex flex-col grow">
                            {{-- statistic --}}
                            <div class="bg-white rounded-lg shadow mb-5 pb-3">
                                <div class="bg-gradient-to-r from-turquoise to-darkBlue p-4 rounded-t-lg">
                                    <p class="text-sm text-white font-poppins">Today Statistic</p>
                                </div>
                                <div class="p-5">
                                    <p class="text-sm text-darkerGray font-poppins">Here's your employee statistic so far.</p>
                                </div>
                                <div class="flex flex-row p-3 items-center justify-around text-center">
                                    {{-- statistic image --}}
                                    <div class="flex flex-col items-center">
                                        <img class="pl-4 pr-4 pb-3 w-40" src="{{ asset('img/chart.svg') }}" alt="">
                                        <div class="flex flex-row space-x-4 py-4 items-center">
                                            <div class="flex flex-row space-x-2 items-center">
                                                <div class="rounded-full bg-darkBlue p-1"></div>
                                                <p class="text-xs font-poppins text-darkBlue font-semibold">
                                                    Active
                                                </p>
                                            </div>
                                            <div class="flex flex-row space-x-2 items-center">
                                                <div class="rounded-full bg-turquoise p-1"></div>
                                                <p class="text-xs font-poppins text-darkBlue font-semibold">
                                                    Resigned
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- numbers --}}
                                    <div class="flex flex-row px-3 py-3 space-x-4 items-center">
                                        <div class="flex flex-col basis-1/3 space-y-3 shadow-lg border rounded-lg py-8 px-5 items-center">
                                            <p class="text-3xl font-bold">0</p>
                                            <p class="text-sm font-poppins text-darkerGray">Total <br> Clock In</p>
                                        </div>
                                        <div class="flex flex-col basis-1/3 space-y-3 shadow-lg border rounded-lg py-8 px-5 items-center">
                                            <p class="text-3xl font-bold">5</p>
                                            <p class="text-sm font-poppins text-darkerGray">Total On <br> Leave</p>
                                        </div>
                                        <div class="flex flex-col basis-1/3 space-y-3 shadow-lg border rounded-lg py-8 px-5 items-center">
                                            <p class="text-3xl font-bold">508</p>
                                            <p class="text-sm font-poppins text-darkerGray">Total Leave Approved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- pending approval --}}
                            <div class="bg-white rounded-lg shadow mb-4">
                                <div class="bg-gradient-to-r from-turquoise to-darkBlue p-4 rounded-t-lg">
                                    <p class="text-sm text-white font-poppins">Pending Approval</p>
                                </div>
                                <div class="p-5">
                                    <p class="text-sm text-darkerGray font-poppins">45 task(s) are waiting for your action.</p>
                                    <div class="flex flex-row justify-around items-center mt-3 space-x-3 text-center">
                                        <div class="rounded-lg basis-1/5 border border-gray-300">
                                            <div class="flex flex-col items-center space-y-3 py-10">
                                                <img class="w-12 h-12" src="{{ asset('img/calendar-logo.svg') }}" alt="">
                                                <span class="text-md font-poppins text-darkBlue font-medium">Leave</span>
                                            </div>
                                        </div>
                                        <div class="rounded-lg basis-1/5 border border-gray-300">
                                            <div class="flex flex-col items-center space-y-3 pb-5 pt-9">
                                                <img class="w-12 h-12" src="{{ asset('img/money_1.svg') }}" alt="">
                                                <span class="text-md font-poppins text-darkBlue font-medium">Financial <br>Claim</span>
                                            </div>
                                        </div>
                                        <div class="rounded-lg basis-1/5 border border-gray-300">
                                            <div class="flex flex-col items-center space-y-3 py-10">
                                                <img class="w-12 h-12" src="{{ asset('img/accounting.svg') }}" alt="">
                                                <span class="text-md font-poppins text-darkBlue font-medium">Overtime</span>
                                            </div>
                                        </div>
                                        <div class="rounded-lg basis-1/5 border border-gray-300">
                                            <div class="flex flex-col items-center space-y-3 py-10">
                                                <img class="w-12 h-12" src="{{ asset('img/salary_1.svg') }}" alt="">
                                                <span class="text-md font-poppins text-darkBlue font-medium">Payroll</span>
                                            </div>
                                        </div>
                                        <div class="rounded-lg basis-1/5 border border-gray-300">
                                            <div class="flex flex-col items-center space-y-3 pb-5 pt-9">
                                                <img class="w-12 h-12" src="{{ asset('img/expenses-1.svg') }}" alt="">
                                                <span class="text-md font-poppins text-darkBlue font-medium">Payment <br>Voucher</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- team calendar --}}
                            <div class="bg-white rounded-lg shadow mb-4">
                                <div class="bg-gradient-to-r from-turquoise to-darkBlue p-4 rounded-t-lg">
                                    <div class="flex flex-row justify-between">
                                        <p class="text-sm text-white font-poppins">Team Calendar</p>
                                        <p class="text-sm text-white font-poppins">
                                            14 Aug - 20 Aug 2023
                                        </p>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <div class="table w-full">
                                        <div class="table-header-group">
                                            <div class="table-row text-center">
                                                <div class="table-cell border rounded-tl-lg px-3 py-2">
                                                    <span class="text-sm font-semibold text-darkerGray">
                                                        Mon, 8/14
                                                    </span>
                                                </div>
                                                <div class="table-cell border px-3 py-2">
                                                    <span class="text-sm font-semibold text-darkerGray">
                                                        Tue, 8/15
                                                    </span>
                                                </div>
                                                <div class="table-cell border px-3 py-2">
                                                    <span class="text-sm font-semibold text-darkerGray">
                                                        Wed, 8/16
                                                    </span>
                                                </div>
                                                <div class="table-cell border px-3 py-2">
                                                    <span class="text-sm font-semibold text-darkerGray">
                                                        Thu, 8/17
                                                    </span>
                                                </div>
                                                <div class="table-cell border px-3 py-2">
                                                    <span class="text-sm font-semibold text-darkerGray">
                                                        Fri, 8/18
                                                    </span>
                                                </div>
                                                <div class="table-cell border rounded-tr-lg px-3 py-2">
                                                    <span class="text-sm font-semibold text-darkerGray">
                                                        Sat, 8/19
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-row-group">
                                            <div class="table-row">
                                                <div class="table-cell border rounded-bl-lg py-10"></div>
                                                <div class="table-cell border py-10"></div>
                                                <div class="table-cell border py-10"></div>
                                                <div class="table-cell border py-10"></div>
                                                <div class="table-cell border py-10"></div>
                                                <div class="table-cell border rounded-br-lg py-10"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- right side --}}
                        <div class="flex flex-col mx-5 grow">
                            {{-- announcement --}}
                            <div class="bg-white rounded-lg shadow mb-4">
                                <div class="bg-gradient-to-r from-turquoise to-darkBlue p-4 rounded-t-lg">
                                    <div class="flex flex-row justify-between">
                                        <p class="text-sm text-white font-poppins">Announcement</p>
                                        <div class="flex flex-row items-center">
                                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5.757v8.486M5.757 10h8.486M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                            <p class="pl-2 text-sm text-white font-poppins">
                                                See more
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="divide-y-2 flex flex-col">
                                        <div class="flex flex-row divide-x-2 divide-black space-x-5 py-3 justify-center">
                                            <div class="flex flex-col">
                                                <span class="text-xs text-darkBlue font-bold font-poppins">FEB 28</span>
                                                <span class="text-xs text-turquoise font-bold font-poppins text-end">2023</span>
                                            </div>
                                            <span class="text-sm text-darkBlue font-bold font-poppins pl-5 pt-1">Office Outdoor Activity</span>
                                        </div>
                                        <div class="flex flex-row divide-x-2 divide-black space-x-5 py-3 justify-center">
                                            <div class="flex flex-col">
                                                <span class="text-xs text-darkBlue font-bold font-poppins">FEB 28</span>
                                                <span class="text-xs text-turquoise font-bold font-poppins text-end">2023</span>
                                            </div>
                                            <span class="text-sm text-darkBlue font-bold font-poppins pl-5 pt-1">Office Outdoor Activity</span>
                                        </div>
                                        <div class="flex flex-row divide-x-2 divide-black space-x-5 py-3 justify-center">
                                            <div class="flex flex-col">
                                                <span class="text-xs text-darkBlue font-bold font-poppins">FEB 28</span>
                                                <span class="text-xs text-turquoise font-bold font-poppins text-end">2023</span>
                                            </div>
                                            <span class="text-sm text-darkBlue font-bold font-poppins pl-5 pt-1">Office Outdoor Activity</span>
                                        </div>
                                        <div class="flex flex-row divide-x-2 divide-black space-x-5 py-3 justify-center">
                                            <div class="flex flex-col">
                                                <span class="text-xs text-darkBlue font-bold font-poppins">FEB 28</span>
                                                <span class="text-xs text-turquoise font-bold font-poppins text-end">2023</span>
                                            </div>
                                            <span class="text-sm text-darkBlue font-bold font-poppins pl-5 pt-1">Office Outdoor Activity</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- off this week --}}
                            <div class="bg-white rounded-lg shadow mb-4">
                                <div class="bg-gradient-to-r from-turquoise to-darkBlue p-4 rounded-t-lg">
                                    <div class="flex flex-row justify-between">
                                        <p class="text-sm text-white font-poppins">Who’s off this week</p>
                                        <div class="flex flex-row items-center">
                                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5.757v8.486M5.757 10h8.486M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                            <p class="pl-2 text-sm text-white font-poppins">
                                                See more
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <p class="text-sm bg-gradient-to-r from-turquoise to-darkBlue text-transparent bg-clip-text font-bold mb-2">Who’s off this week</p>
                                    <div class="divide-y-2">
                                        <div class="flex flex-row space-x-6 py-3 justify-center">
                                            <img src="{{ asset('img/Cute.jpeg') }}" class="rounded-full w-12 h-12" alt="">
                                            <div class="flex flex-col">
                                                <span class="text-xs font-poppins text-darkBlue font-bold">Alif Azuwan Bin Amiruddin</span>
                                                <span class="text-xs font-poppins text-darkBlue font-base">Compassionate Leave</span>
                                                <span class="text-xs font-poppins text-darkerGray font-base">1 Aug 2023 - 4 Aug 2023</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-row space-x-6 py-3 justify-center">
                                            <img src="{{ asset('img/Cute.jpeg') }}" class="rounded-full w-12 h-12" alt="">
                                            <div class="flex flex-col">
                                                <span class="text-xs font-poppins text-darkBlue font-bold">Alif Azuwan Bin Amiruddin</span>
                                                <span class="text-xs font-poppins text-darkBlue font-base">Compassionate Leave</span>
                                                <span class="text-xs font-poppins text-darkerGray font-base">1 Aug 2023 - 4 Aug 2023</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-row space-x-6 py-3 justify-center">
                                            <img src="{{ asset('img/Cute.jpeg') }}" class="rounded-full w-12 h-12" alt="">
                                            <div class="flex flex-col">
                                                <span class="text-xs font-poppins text-darkBlue font-bold">Alif Azuwan Bin Amiruddin</span>
                                                <span class="text-xs font-poppins text-darkBlue font-base">Compassionate Leave</span>
                                                <span class="text-xs font-poppins text-darkerGray font-base">1 Aug 2023 - 4 Aug 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- javascript --}}
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
            <script>

            </script>
        </div>
    </body>
</html>
