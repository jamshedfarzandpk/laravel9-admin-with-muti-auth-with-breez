<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
   
    <link rel="stylesheet" href="{{ asset('admin/dist/css/app.css') }}" />


    <!-- Scripts -->
</head>

<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-white/[0.08] py-5 hidden">
            <li>
                <a href="javascript:;.html" class="menu menu--active">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title"> Dashboard <i data-feather="chevron-down"
                            class="transform rotate-180 menu__sub-icon"></i> </div>
                </a>
                <ul class="menu__sub-open">
                    <li>
                        <a href="index.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 3 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="box"></i> </div>
                    <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon "></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="index.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Side Menu </div>
                        </a>
                    </li>
                    <li>
                        <a href="simple-menu-light-dashboard-overview-1.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Simple Menu </div>
                        </a>
                    </li>
                    <li>
                        <a href="top-menu-light-dashboard-overview-1.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Top Menu </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="side-menu-light-inbox.html" class="menu">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Inbox </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-file-manager.html" class="menu">
                    <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                    <div class="menu__title"> File Manager </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-point-of-sale.html" class="menu">
                    <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                    <div class="menu__title"> Point of Sale </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-chat.html" class="menu">
                    <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                    <div class="menu__title"> Chat </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-post.html" class="menu">
                    <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="menu__title"> Post </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-calendar.html" class="menu">
                    <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                    <div class="menu__title"> Calendar </div>
                </a>
            </li>
            <li class="my-6 menu__devider"></li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-crud-data-list.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Data List </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-crud-form.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Form </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="users"></i> </div>
                    <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon "></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-users-layout-1.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Layout 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-users-layout-2.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Layout 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-users-layout-3.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Layout 3 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="trello"></i> </div>
                    <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon "></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-profile-overview-1.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-profile-overview-2.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-profile-overview-3.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 3 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon "></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Wizards <i data-feather="chevron-down"
                                    class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Blog <i data-feather="chevron-down"
                                    class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-blog-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-blog-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-blog-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Pricing <i data-feather="chevron-down"
                                    class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Invoice <i data-feather="chevron-down"
                                    class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon "></i>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-faq-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-faq-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-faq-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login-light-login.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Login </div>
                        </a>
                    </li>
                    <li>
                        <a href="login-light-register.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Register </div>
                        </a>
                    </li>
                    <li>
                        <a href="main-light-error-page.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Error Page </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-update-profile.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Update profile </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-change-password.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Change Password </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="my-6 menu__devider"></li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon "></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Table <i data-feather="chevron-down"
                                    class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-table.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Regular Table</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tabulator.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Tabulator</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overlay <i data-feather="chevron-down"
                                    class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-modal.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Modal</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slide-over.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Slide Over</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-notification.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Notification</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-accordion.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Accordion </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-button.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Button </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-alert.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Alert </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-progress-bar.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Progress Bar </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-tooltip.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Tooltip </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dropdown.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Dropdown </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-typography.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Typography </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-icon.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Icon </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-loading-icon.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Loading Icon </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                    <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon "></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-regular-form.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Regular Form </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-datepicker.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Datepicker </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-tom-select.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Tom Select </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-upload.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> File Upload </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Wysiwyg Editor <i data-feather="chevron-down"
                                    class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Classic</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Inline</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Balloon</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Balloon Block</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Document</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-validation.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Validation </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                    <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon "></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-chart.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Chart </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-slider.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Slider </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-image-zoom.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Image Zoom </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex overflow-hidden">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="flex items-center pt-4 pl-5 mt-3 intro-x">
                <img alt="Tinker Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                <span class="hidden ml-3 text-lg text-white xl:block"> Laravel Admin </span>
            </a>
            <div class="my-6 side-nav__devider"></div>
            <ul>
                <li>
                    <a href="javascript:;.html" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="side-menu__title">
                            Dashboard
                            <div class="transform rotate-180 side-menu__sub-icon"> <i data-feather="chevron-down"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="side-menu__sub-open">
                        <li>
                            <a href="index.html" class="side-menu side-menu--active">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                        <div class="side-menu__title">
                            Menu Layout
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="side-menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="side-menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="side-menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-chat.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                        <div class="side-menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-post.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="side-menu__title"> Post </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-calendar.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                        <div class="side-menu__title"> Calendar </div>
                    </a>
                </li>
                <li class="my-6 side-nav__devider"></li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="side-menu__title">
                            Crud
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-crud-data-list.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-crud-form.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                        <div class="side-menu__title">
                            Users
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-users-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Layout 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Layout 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Layout 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="side-menu__title">
                            Profile
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                        <div class="side-menu__title">
                            Pages
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Wizards
                                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Blog
                                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Pricing
                                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Invoice
                                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    FAQ
                                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-update-profile.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-change-password.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="my-6 side-nav__devider"></li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="side-menu__title">
                            Components
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Table
                                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-regular-table.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tabulator.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Overlay
                                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-modal.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-slide-over.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-notification.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-accordion.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-button.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-alert.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-progress-bar.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tooltip.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dropdown.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-typography.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-icon.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="side-menu__title">
                            Forms
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-form.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-datepicker.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tom-select.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Tom Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-file-upload.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title">
                                    Wysiwyg Editor
                                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-classic.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Classic</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-inline.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Inline</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-balloon.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Balloon</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Balloon Block</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor-document.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="side-menu__title">Document</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-validation.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="side-menu__title">
                            Widgets
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-chart.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slider.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-image-zoom.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="px-4 -mx-4 top-bar md:mx-0 md:px-0">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="hidden mr-auto -intro-x sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Application</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="relative mr-3 intro-x sm:mr-6">
                    <div class="hidden search sm:block">
                        <input type="text" class="border-transparent search__input form-control"
                            placeholder="Search...">
                        <i data-feather="search" class="search__icon dark:text-slate-500"></i>
                    </div>
                    <a class="notification sm:hidden" href=""> <i data-feather="search"
                            class="notification__icon dark:text-slate-500"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 rounded-full bg-success/20 dark:bg-success/10 text-success">
                                        <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 rounded-full bg-pending/10 text-pending">
                                        <i class="w-4 h-4" data-feather="users"></i> </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 dark:bg-primary/20 text-primary/80">
                                        <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                            src="dist/images/profile-9.jpg">
                                    </div>
                                    <div class="ml-3">Kevin Spacey</div>
                                    <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">
                                        kevinspacey@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                            src="dist/images/profile-12.jpg">
                                    </div>
                                    <div class="ml-3">Denzel Washington</div>
                                    <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">
                                        denzelwashington@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                            src="dist/images/profile-13.jpg">
                                    </div>
                                    <div class="ml-3">Al Pacino</div>
                                    <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">
                                        alpacino@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                            src="dist/images/profile-6.jpg">
                                    </div>
                                    <div class="ml-3">John Travolta</div>
                                    <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">
                                        johntravolta@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/preview-5.jpg">
                                </div>
                                <div class="ml-3">Sony A7 III</div>
                                <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">Photography</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/preview-9.jpg">
                                </div>
                                <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">Smartphone &amp;
                                    Tablet</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/preview-10.jpg">
                                </div>
                                <div class="ml-3">Dell XPS 13</div>
                                <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">PC &amp; Laptop
                                </div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/preview-15.jpg">
                                </div>
                                <div class="ml-3">Sony Master Series A9G</div>
                                <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">Electronic</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="mr-auto intro-x dropdown sm:mr-6">
                    <div class="cursor-pointer dropdown-toggle notification notification--bullet" role="button"
                        aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="bell"
                            class="notification__icon dark:text-slate-500"></i> </div>
                    <div class="pt-2 notification-content dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title">Notifications</div>
                            <div class="relative flex items-center cursor-pointer ">
                                <div class="flex-none w-12 h-12 mr-1 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-9.jpg">
                                    <div
                                        class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success dark:border-darkmode-600">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="mr-5 font-medium truncate">Kevin Spacey</a>
                                        <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of
                                        passages of Lorem Ipsum available, but the majority have suffered alteration in
                                        some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="relative flex items-center mt-5 cursor-pointer">
                                <div class="flex-none w-12 h-12 mr-1 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-12.jpg">
                                    <div
                                        class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success dark:border-darkmode-600">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="mr-5 font-medium truncate">Denzel
                                            Washington</a>
                                        <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of
                                        passages of Lorem Ipsum available, but the majority have suffered alteration in
                                        some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="relative flex items-center mt-5 cursor-pointer">
                                <div class="flex-none w-12 h-12 mr-1 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-13.jpg">
                                    <div
                                        class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success dark:border-darkmode-600">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="mr-5 font-medium truncate">Al Pacino</a>
                                        <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy
                                        text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="relative flex items-center mt-5 cursor-pointer">
                                <div class="flex-none w-12 h-12 mr-1 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-6.jpg">
                                    <div
                                        class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success dark:border-darkmode-600">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="mr-5 font-medium truncate">John Travolta</a>
                                        <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact
                                        that a reader will be distracted by the readable content of a page when looking
                                        at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="relative flex items-center mt-5 cursor-pointer">
                                <div class="flex-none w-12 h-12 mr-1 image-fit">
                                    <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-15.jpg">
                                    <div
                                        class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success dark:border-darkmode-600">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="mr-5 font-medium truncate">Russell Crowe</a>
                                        <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief,
                                        Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                        Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="w-8 h-8 intro-x dropdown">
                    <div class="w-8 h-8 overflow-hidden rounded-full shadow-lg dropdown-toggle image-fit zoom-in"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-7.jpg">
                    </div>
                    <div class="w-56 dropdown-menu">
                        <ul class="text-white dropdown-content bg-primary">
                            <li class="p-2">
                                <div class="font-medium">Kevin Spacey</div>
                                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="user"
                                        class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="edit"
                                        class="w-4 h-4 mr-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="lock"
                                        class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i
                                        data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i
                                        data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            <div class="relative">
                <div class="grid grid-cols-12 gap-6">
                    <div class="z-10 col-span-12 xl:col-span-9 2xl:col-span-9">
                        <div class="mt-6 -mb-6 intro-y">
                            <div class="flex items-center mb-6 text-white alert alert-dismissible show box bg-primary"
                                role="alert">
                                <span>
                                    Introducing new dashboard! Download now at <a
                                        href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                        class="ml-1 underline" target="blank">themeforest.net</a>.
                                    <button
                                        class="rounded-md bg-white bg-opacity-20 dark:bg-darkmode-300 hover:bg-opacity-30 py-0.5 px-2 -my-3 ml-2">Live
                                        Preview</button>
                                </span>
                                <button type="button" class="text-white btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"> <i data-feather="x" class="w-4 h-4"></i> </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mb-3 mt-14 sm:gap-10 intro-y">
                            <div
                                class="relative col-span-12 py-6 text-center sm:col-span-6 md:col-span-4 sm:pl-5 md:pl-0 lg:pl-5 sm:text-left">
                                <div class="absolute pt-0.5 2xl:pt-0 mt-5 2xl:mt-6 top-0 right-0 dropdown">
                                    <a class="block dropdown-toggle" href="javascript:;" aria-expanded="false"
                                        data-tw-toggle="dropdown"> <i data-feather="more-vertical"
                                            class="w-5 h-5 text-slate-500"></i> </a>
                                    <div class="w-40 dropdown-menu">
                                        <ul class="dropdown-content">
                                            <li>
                                                <a href="" class="dropdown-item"> <i
                                                        data-feather="file-text" class="w-4 h-4 mr-2"></i> Monthly
                                                    Report </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item"> <i
                                                        data-feather="file-text" class="w-4 h-4 mr-2"></i> Annual
                                                    Report </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="-mb-1 text-sm font-medium 2xl:text-base"> Hi Angelina, <span
                                        class="font-normal text-slate-600 dark:text-slate-300">welcome back!</span>
                                </div>
                                <div
                                    class="flex items-center justify-center text-base leading-3 2xl:text-lg sm:justify-start text-slate-600 dark:text-slate-300 mt-14 2xl:mt-24">
                                    My Total Assets <i data-feather="alert-circle"
                                        class="tooltip w-5 h-5 ml-1.5 mt-0.5"
                                        title="Total value of your sales: $158.409.416"></i> </div>
                                <div class="mt-5 mb-3 2xl:flex">
                                    <div class="flex items-center justify-center sm:justify-start">
                                        <div
                                            class="relative pl-3 text-2xl font-medium leading-6 2xl:text-3xl 2xl:pl-4">
                                            <span
                                                class="absolute top-0 left-0 -mt-1 text-xl 2xl:text-2xl 2xl:mt-0">$</span>
                                            142,402,210 </div>
                                        <a class="ml-4 text-slate-500 2xl:ml-16" href=""> <i
                                                data-feather="refresh-ccw" class="w-4 h-4"></i> </a>
                                    </div>
                                    <div
                                        class="mt-5 2xl:flex 2xl:justify-center 2xl:mt-0 2xl:-ml-20 2xl:w-14 2xl:flex-none 2xl:pl-2.5">
                                        <div class="inline-flex items-center px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-success 2xl:text-sm 2xl:p-0 2xl:text-success 2xl:bg-transparent 2xl:flex tooltip 2xl:justify-center"
                                            title="49% Higher than last month"> 49% <i data-feather="chevron-up"
                                                class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-slate-500">Last updated 1 hour ago</div>
                                <div class="mt-6 -mb-1 2xl:text-base text-slate-600 dark:text-slate-300"> Total net
                                    margin <a href=""
                                        class="underline decoration-dotted underline-offset-4 text-primary dark:text-slate-400">$12,921,050</a>
                                </div>
                                <div class="mt-14 2xl:mt-24 dropdown">
                                    <button
                                        class="relative justify-start px-4 dropdown-toggle btn btn-rounded-primary w-44 2xl:w-52"
                                        aria-expanded="false" data-tw-toggle="dropdown">
                                        Download Reports
                                        <span
                                            class="absolute top-0 bottom-0 right-0 flex items-center justify-center w-8 h-8 my-auto ml-auto mr-1">
                                            <i data-feather="chevron-down" class="w-4 h-4"></i> </span>
                                    </button>
                                    <div class="dropdown-menu w-44 2xl:w-52">
                                        <ul class="dropdown-content">
                                            <li>
                                                <a href="" class="dropdown-item"> <i
                                                        data-feather="file-text" class="w-4 h-4 mr-2"></i> Monthly
                                                    Report </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item"> <i
                                                        data-feather="file-text" class="w-4 h-4 mr-2"></i> Annual
                                                    Report </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-span-12 row-start-2 px-10 py-6 -mx-5 border-t border-black border-dashed md:row-start-auto md:col-span-4 border-opacity-10 md:border-t-0 md:border-l md:border-r sm:px-28 md:px-5">
                                <div class="flex flex-wrap items-center">
                                    <div
                                        class="flex items-center justify-center w-full mb-5 mr-auto sm:w-auto sm:justify-start 2xl:mb-0">
                                        <div class="w-2 h-2 -mt-4 rounded-full bg-primary"></div>
                                        <div class="ml-3.5">
                                            <div
                                                class="relative text-xl 2xl:text-2xl font-medium leading-6 2xl:leading-5 pl-3.5 2xl:pl-4">
                                                <span
                                                    class="absolute text-base 2xl:text-xl top-0 left-0 2xl:-mt-1.5">$</span>
                                                47,578.77 </div>
                                            <div class="mt-2 text-slate-500">Yearly budget</div>
                                        </div>
                                    </div>
                                    <select
                                        class="form-select bg-transparent border-black border-opacity-10 dark:border-darkmode-400 dark:bg-transparent mx-auto sm:mx-0 py-1.5 px-3 w-auto -mt-2">
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                        <option value="custom-date">Custom Date</option>
                                    </select>
                                </div>
                                <div class="mt-10 text-slate-600 dark:text-slate-300">You have spent about 35% of your
                                    annual budget.</div>
                                <canvas class="mt-6" id="report-bar-chart-1" height="267"></canvas>
                            </div>
                            <div
                                class="col-span-12 py-6 pl-4 -ml-4 border-t border-l border-black border-dashed sm:col-span-6 md:col-span-4 border-opacity-10 sm:border-t-0 md:border-l-0 md:ml-0 md:pl-0">
                                <ul class="w-3/4 p-1 mx-auto rounded-md nav nav-pills 2xl:w-4/6 bg-slate-200 dark:bg-black/10"
                                    role="tablist">
                                    <li id="active-users-tab" class="flex-1 nav-item" role="presentation">
                                        <button class="nav-link w-full py-1.5 px-2 active" data-tw-toggle="pill"
                                            data-tw-target="#active-users" type="button" role="tab"
                                            aria-controls="active-users" aria-selected="true"> Active </button>
                                    </li>
                                    <li id="inactive-users-tab" class="flex-1 nav-item" role="presentation">
                                        <button class="nav-link w-full py-1.5 px-2" data-tw-toggle="pill"
                                            data-tw-target="#inactive-users" type="button" role="tab"
                                            aria-controls="inactive-users" aria-selected="false"> Inactive </button>
                                    </li>
                                </ul>
                                <div class="mt-6 tab-content">
                                    <div class="tab-pane active" id="active-users" role="tabpanel"
                                        aria-labelledby="active-users-tab">
                                        <div class="relative">
                                            <canvas class="mt-8" id="report-donut-chart-3"
                                                height="190"></canvas>
                                            <div
                                                class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full">
                                                <div class="text-xl font-medium 2xl:text-2xl">2.501</div>
                                                <div class="text-slate-500 mt-0.5">Active Users</div>
                                            </div>
                                        </div>
                                        <div class="w-10/12 mx-auto mt-8 2xl:w-2/3">
                                            <div class="flex items-center">
                                                <div class="w-2 h-2 mr-3 rounded-full bg-primary"></div>
                                                <span class="truncate">17 - 30 Years old</span> <span
                                                    class="font-medium xl:ml-auto">62%</span>
                                            </div>
                                            <div class="flex items-center mt-4">
                                                <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                                                <span class="truncate">31 - 50 Years old</span> <span
                                                    class="font-medium xl:ml-auto">33%</span>
                                            </div>
                                            <div class="flex items-center mt-4">
                                                <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
                                                <span class="truncate">>= 50 Years old</span> <span
                                                    class="font-medium xl:ml-auto">10%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="z-10 col-span-12 px-5 pt-8 report-box-3 pb-14">
                        <div class="relative grid grid-cols-12 gap-6 intro-y">
                            <div class="col-span-12 px-0 sm:col-span-4 xl:col-span-3 lg:px-6 xl:px-0 2xl:px-6">
                                <div class="flex flex-wrap items-center gap-3 lg:flex-nowrap">
                                    <div class="mr-auto text-lg font-medium truncate sm:w-full lg:w-auto">Summary
                                        Report</div>
                                    <div
                                        class="py-1 px-2.5 rounded-full text-xs bg-slate-300/50 dark:bg-darkmode-400 text-slate-600 dark:text-slate-300 cursor-pointer truncate">
                                        180 Campaign</div>
                                </div>
                                <div class="px-10 sm:px-0">
                                    <canvas class="mt-8 simple-line-chart-3" height="110"></canvas>
                                </div>
                            </div>
                            <div class="col-span-12 px-0 sm:col-span-4 xl:col-span-3 lg:px-6 xl:px-0 2xl:px-6">
                                <div class="flex flex-wrap items-center gap-3 lg:flex-nowrap">
                                    <div class="mr-auto text-lg font-medium truncate sm:w-full lg:w-auto">Social Media
                                    </div>
                                    <a href="" class="flex items-center text-primary">
                                        <div class="truncate 2xl:mr-auto">View Details</div>
                                        <i data-feather="arrow-right" class="w-4 h-4 ml-3"></i>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center mt-10">
                                    <div class="text-right">
                                        <div class="text-3xl font-medium">149</div>
                                        <div class="mt-1 truncate text-slate-500">Active Lenders</div>
                                    </div>
                                    <div
                                        class="w-px h-16 mx-4 border border-r border-dashed border-slate-300 dark:border-darkmode-400 xl:mx-6">
                                    </div>
                                    <div>
                                        <div class="text-3xl font-medium">135</div>
                                        <div class="mt-1 truncate text-slate-500">Total Lenders</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 px-0 sm:col-span-4 xl:col-span-3 lg:px-6 xl:px-0 2xl:px-6">
                                <div class="flex flex-wrap items-center gap-3 lg:flex-nowrap">
                                    <div class="mr-auto text-lg font-medium truncate sm:w-full lg:w-auto">Posted Ads
                                    </div>
                                    <div
                                        class="py-1 px-2.5 rounded-full text-xs bg-slate-300/50 dark:bg-darkmode-400 text-slate-600 dark:text-slate-300 cursor-pointer truncate">
                                        320 Followers</div>
                                </div>
                                <div class="px-10 sm:px-0">
                                    <canvas class="mt-8 simple-line-chart-4" height="110"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="top-0 right-0 z-30 grid w-full h-full grid-cols-12 gap-6 pb-6 -mt-8 report-box-4 xl:absolute xl:mt-0 xl:pb-0 xl:z-auto">
                    <div class="z-30 col-span-12 xl:col-span-3 xl:col-start-10 xl:pb-16">
                        <div class="flex flex-col h-full">
                            <div class="p-5 mt-6 box bg-primary intro-x">
                                <div class="flex flex-wrap gap-3">
                                    <div class="mr-auto">
                                        <div
                                            class="flex items-center leading-3 text-white text-opacity-70 dark:text-slate-300">
                                            AVAILABLE FUNDS <i data-feather="alert-circle"
                                                class="tooltip w-4 h-4 ml-1.5"
                                                title="Total value of your sales: $158.409.416"></i> </div>
                                        <div class="text-white relative text-2xl font-medium leading-5 pl-4 mt-3.5">
                                            <span class="absolute text-xl top-0 left-0 -mt-1.5">$</span> 479,578.77
                                        </div>
                                    </div>
                                    <a class="flex items-center justify-center w-12 h-12 text-white bg-white rounded-full dark:bg-darkmode-300 bg-opacity-20 hover:bg-opacity-30"
                                        href=""> <i data-feather="plus" class="w-6 h-6"></i> </a>
                                </div>
                            </div>
                            <div class="report-box-4__content xl:min-h-0 intro-x">
                                <div class="max-h-full mt-5 xl:overflow-y-auto box">
                                    <div class="top-0 px-5 pt-5 pb-6 xl:sticky">
                                        <div class="flex items-center">
                                            <div class="mr-5 text-lg font-medium truncate">Summary Report</div>
                                            <a href="" class="flex items-center ml-auto text-primary"> <i
                                                    data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Refresh
                                            </a>
                                        </div>
                                        <ul class="p-1 mx-auto mt-5 border border-dashed rounded-md nav nav-pills border-slate-300 dark:border-darkmode-300"
                                            role="tablist">
                                            <li id="weekly-report-tab" class="flex-1 nav-item"
                                                role="presentation">
                                                <button class="nav-link w-full py-1.5 px-2 active"
                                                    data-tw-toggle="pill" data-tw-target="#weekly-report"
                                                    type="button" role="tab" aria-controls="weekly-report"
                                                    aria-selected="true"> Weekly </button>
                                            </li>
                                            <li id="monthly-report-tab" class="flex-1 nav-item"
                                                role="presentation">
                                                <button class="nav-link w-full py-1.5 px-2" data-tw-toggle="pill"
                                                    data-tw-target="#monthly-report" type="button" role="tab"
                                                    aria-controls="monthly-report" aria-selected="false"> Monthly
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="px-5 pb-5 tab-content">
                                        <div class="grid grid-cols-12 tab-pane active gap-y-6" id="weekly-report"
                                            role="tabpanel" aria-labelledby="weekly-report-tab">
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                                <div class="text-slate-500">Unpaid Loan</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-lg">$155.430.000</div>
                                                    <div class="flex ml-2 text-xs font-medium cursor-pointer text-danger tooltip"
                                                        title="2% Lower than last month"> 2% <i
                                                            data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                                <div class="text-slate-500">Active Funding Partner</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-lg">52 Partner</div>
                                                    <div class="flex ml-2 text-xs font-medium cursor-pointer text-success tooltip"
                                                        title="0.1% Lower than last month"> 49% <i
                                                            data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                                <div class="text-slate-500">Paid Installment</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-lg">$75.430.000</div>
                                                    <div class="flex ml-2 text-xs font-medium cursor-pointer text-success tooltip"
                                                        title="49% Higher than last month"> 36% <i
                                                            data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                                <div class="text-slate-500">Success Payment</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-lg">100%</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                                <div class="text-slate-500">Waiting For Disbursement</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-lg">0</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                                <div class="text-slate-500">Unpaid Loan</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-lg">$21.430.000</div>
                                                    <div class="flex ml-2 text-xs font-medium cursor-pointer text-danger tooltip"
                                                        title="2% Lower than last month"> 23% <i
                                                            data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <button
                                                class="relative justify-start col-span-12 mb-2 border-dashed btn btn-outline-secondary border-slate-300 dark:border-darkmode-300">
                                                <div class="mr-5 truncate">My Portfolio Details</div>
                                                <span
                                                    class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                                    <i data-feather="arrow-right" class="w-4 h-4"></i> </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="z-40 grid grid-cols-12 gap-6 -mb-10 report-box-3 report-box-3--content xl:-mt-5 2xl:-mt-8 2xl:z-10">
                <div class="col-span-12 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        <!-- BEGIN: Official Store -->
                        <div class="col-span-12 mt-6 xl:col-span-8">
                            <div class="items-center block h-10 intro-y sm:flex">
                                <h2 class="mr-5 text-lg font-medium truncate">
                                    Official Store
                                </h2>
                                <div class="relative mt-3 sm:ml-auto sm:mt-0 text-slate-500">
                                    <i data-feather="map-pin"
                                        class="absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3"></i>
                                    <input type="text" class="pl-10 form-control sm:w-40 box"
                                        placeholder="Filter by city">
                                </div>
                            </div>
                            <div class="p-5 mt-12 intro-y box sm:mt-5">
                                <div>250 Official stores in 21 countries, click the marker to see location details.
                                </div>
                                <div class="mt-5 rounded-md report-maps bg-slate-200"
                                    data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json">
                                </div>
                            </div>
                        </div>
                        <!-- END: Official Store -->
                        <!-- BEGIN: Weekly Best Sellers -->
                        <div class="col-span-12 mt-6 xl:col-span-4">
                            <div class="flex items-center h-10 intro-y">
                                <h2 class="mr-5 text-lg font-medium truncate">
                                    Weekly Best Sellers
                                </h2>
                            </div>
                            <div class="mt-5">
                                <div class="intro-y">
                                    <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                                        <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                                            <img alt="Tinker Tailwind HTML Admin Template"
                                                src="dist/images/profile-14.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Kate Winslet</div>
                                            <div class="text-slate-500 text-xs mt-0.5">17 September 2020</div>
                                        </div>
                                        <div
                                            class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-success">
                                            137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                                        <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                                            <img alt="Tinker Tailwind HTML Admin Template"
                                                src="dist/images/profile-8.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Angelina Jolie</div>
                                            <div class="text-slate-500 text-xs mt-0.5">8 October 2020</div>
                                        </div>
                                        <div
                                            class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-success">
                                            137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                                        <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                                            <img alt="Tinker Tailwind HTML Admin Template"
                                                src="dist/images/profile-2.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Al Pacino</div>
                                            <div class="text-slate-500 text-xs mt-0.5">27 September 2020</div>
                                        </div>
                                        <div
                                            class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-success">
                                            137 Sales</div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                                        <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                                            <img alt="Tinker Tailwind HTML Admin Template"
                                                src="dist/images/profile-1.jpg">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">Russell Crowe</div>
                                            <div class="text-slate-500 text-xs mt-0.5">9 March 2022</div>
                                        </div>
                                        <div
                                            class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-success">
                                            137 Sales</div>
                                    </div>
                                </div>
                                <a href=""
                                    class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-slate-400 dark:border-darkmode-300 text-slate-500">View
                                    More</a>
                            </div>
                        </div>
                        <!-- END: Weekly Best Sellers -->
                        <!-- BEGIN: Weekly Top Products -->
                        <div class="col-span-12 mt-6">
                            <div class="items-center block h-10 intro-y sm:flex">
                                <h2 class="mr-5 text-lg font-medium truncate">
                                    Weekly Top Products
                                </h2>
                                <div class="flex items-center mt-3 sm:ml-auto sm:mt-0">
                                    <button class="flex items-center btn box text-slate-600 dark:text-slate-300"> <i
                                            data-feather="file-text" class="hidden w-4 h-4 mr-2 sm:block"></i>
                                        Export to Excel </button>
                                    <button class="flex items-center ml-3 btn box text-slate-600 dark:text-slate-300">
                                        <i data-feather="file-text" class="hidden w-4 h-4 mr-2 sm:block"></i> Export
                                        to PDF </button>
                                </div>
                            </div>
                            <div class="mt-8 overflow-auto intro-y lg:overflow-visible sm:mt-0">
                                <table class="table table-report sm:mt-2">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-nowrap">IMAGES</th>
                                            <th class="whitespace-nowrap">PRODUCT NAME</th>
                                            <th class="text-center whitespace-nowrap">STOCK</th>
                                            <th class="text-center whitespace-nowrap">STATUS</th>
                                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-15.jpg"
                                                            title="Uploaded at 17 September 2020">
                                                    </div>
                                                    <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-1.jpg"
                                                            title="Uploaded at 27 January 2022">
                                                    </div>
                                                    <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-6.jpg"
                                                            title="Uploaded at 24 August 2020">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="font-medium whitespace-nowrap">Sony A7
                                                    III</a>
                                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                                    Photography</div>
                                            </td>
                                            <td class="text-center">50</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-success"> <i
                                                        data-feather="check-square" class="w-4 h-4 mr-2"></i> Active
                                                </div>
                                            </td>
                                            <td class="w-56 table-report__action">
                                                <div class="flex items-center justify-center">
                                                    <a class="flex items-center mr-3" href=""> <i
                                                            data-feather="check-square" class="w-4 h-4 mr-1"></i>
                                                        Edit </a>
                                                    <a class="flex items-center text-danger" href=""> <i
                                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-11.jpg"
                                                            title="Uploaded at 8 October 2020">
                                                    </div>
                                                    <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-6.jpg"
                                                            title="Uploaded at 17 September 2022">
                                                    </div>
                                                    <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-14.jpg"
                                                            title="Uploaded at 1 March 2021">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="font-medium whitespace-nowrap">Nike
                                                    Tanjun</a>
                                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Sport
                                                    &amp; Outdoor</div>
                                            </td>
                                            <td class="text-center">128</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-success"> <i
                                                        data-feather="check-square" class="w-4 h-4 mr-2"></i> Active
                                                </div>
                                            </td>
                                            <td class="w-56 table-report__action">
                                                <div class="flex items-center justify-center">
                                                    <a class="flex items-center mr-3" href=""> <i
                                                            data-feather="check-square" class="w-4 h-4 mr-1"></i>
                                                        Edit </a>
                                                    <a class="flex items-center text-danger" href=""> <i
                                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-10.jpg"
                                                            title="Uploaded at 27 September 2020">
                                                    </div>
                                                    <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-13.jpg"
                                                            title="Uploaded at 27 August 2021">
                                                    </div>
                                                    <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-6.jpg"
                                                            title="Uploaded at 5 December 2020">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="font-medium whitespace-nowrap">Oppo Find X2
                                                    Pro</a>
                                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                                    Smartphone &amp; Tablet</div>
                                            </td>
                                            <td class="text-center">220</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-success"> <i
                                                        data-feather="check-square" class="w-4 h-4 mr-2"></i> Active
                                                </div>
                                            </td>
                                            <td class="w-56 table-report__action">
                                                <div class="flex items-center justify-center">
                                                    <a class="flex items-center mr-3" href=""> <i
                                                            data-feather="check-square" class="w-4 h-4 mr-1"></i>
                                                        Edit </a>
                                                    <a class="flex items-center text-danger" href=""> <i
                                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="intro-x">
                                            <td class="w-40">
                                                <div class="flex">
                                                    <div class="w-10 h-10 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-7.jpg"
                                                            title="Uploaded at 9 March 2022">
                                                    </div>
                                                    <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-10.jpg"
                                                            title="Uploaded at 23 March 2022">
                                                    </div>
                                                    <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="rounded-full tooltip"
                                                            src="dist/images/preview-7.jpg"
                                                            title="Uploaded at 15 May 2022">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="font-medium whitespace-nowrap">Nike
                                                    Tanjun</a>
                                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Sport
                                                    &amp; Outdoor</div>
                                            </td>
                                            <td class="text-center">53</td>
                                            <td class="w-40">
                                                <div class="flex items-center justify-center text-success"> <i
                                                        data-feather="check-square" class="w-4 h-4 mr-2"></i> Active
                                                </div>
                                            </td>
                                            <td class="w-56 table-report__action">
                                                <div class="flex items-center justify-center">
                                                    <a class="flex items-center mr-3" href=""> <i
                                                            data-feather="check-square" class="w-4 h-4 mr-1"></i>
                                                        Edit </a>
                                                    <a class="flex items-center text-danger" href=""> <i
                                                            data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex flex-wrap items-center mt-3 intro-y sm:flex-row sm:flex-nowrap">
                                <nav class="w-full sm:w-auto sm:mr-auto">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <i class="w-4 h-4"
                                                    data-feather="chevrons-left"></i> </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <i class="w-4 h-4"
                                                    data-feather="chevron-left"></i> </a>
                                        </li>
                                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                        <li class="page-item active"> <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <i class="w-4 h-4"
                                                    data-feather="chevron-right"></i> </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"> <i class="w-4 h-4"
                                                    data-feather="chevrons-right"></i> </a>
                                        </li>
                                    </ul>
                                </nav>
                                <select class="w-20 mt-3 form-select box sm:mt-0">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
                            </div>
                        </div>
                        <!-- END: Weekly Top Products -->
                    </div>
                </div>
                <div class="relative z-10 col-span-12 2xl:col-span-3">
                    <div class="pb-10 2xl:border-l intro-y">
                        <div class="grid grid-cols-12 gap-6 2xl:pl-6">
                            <!-- BEGIN: Recent Activities -->
                            <div class="col-span-12 mt-3 md:col-span-6 2xl:col-span-12 2xl:mt-6">
                                <div class="flex items-center h-10 intro-x">
                                    <h2 class="mr-5 text-lg font-medium truncate">
                                        Recent Activities
                                    </h2>
                                    <a href="" class="ml-auto truncate text-primary">Show More</a>
                                </div>
                                <div
                                    class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                                    <div class="relative flex items-center mb-3 intro-x">
                                        <div
                                            class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-4.jpg">
                                            </div>
                                        </div>
                                        <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Johnny Depp</div>
                                                <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                            </div>
                                            <div class="mt-1 text-slate-500">Has joined the team</div>
                                        </div>
                                    </div>
                                    <div class="relative flex items-center mb-3 intro-x">
                                        <div
                                            class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-13.jpg">
                                            </div>
                                        </div>
                                        <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Kevin Spacey</div>
                                                <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                            </div>
                                            <div class="text-slate-500">
                                                <div class="mt-1">Added 3 new photos</div>
                                                <div class="flex mt-2">
                                                    <div class="w-8 h-8 mr-1 tooltip image-fit zoom-in"
                                                        title="Sony A7 III">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="border border-white rounded-md"
                                                            src="dist/images/preview-15.jpg">
                                                    </div>
                                                    <div class="w-8 h-8 mr-1 tooltip image-fit zoom-in"
                                                        title="Nike Tanjun">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="border border-white rounded-md"
                                                            src="dist/images/preview-15.jpg">
                                                    </div>
                                                    <div class="w-8 h-8 mr-1 tooltip image-fit zoom-in"
                                                        title="Oppo Find X2 Pro">
                                                        <img alt="Tinker Tailwind HTML Admin Template"
                                                            class="border border-white rounded-md"
                                                            src="dist/images/preview-14.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4 text-xs text-center intro-x text-slate-500">12 November</div>
                                    <div class="relative flex items-center mb-3 intro-x">
                                        <div
                                            class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-13.jpg">
                                            </div>
                                        </div>
                                        <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Russell Crowe</div>
                                                <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                            </div>
                                            <div class="mt-1 text-slate-500">Has changed <a class="text-primary"
                                                    href="">Oppo Find X2 Pro</a> price and description</div>
                                        </div>
                                    </div>
                                    <div class="relative flex items-center mb-3 intro-x">
                                        <div
                                            class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-6.jpg">
                                            </div>
                                        </div>
                                        <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                                            <div class="flex items-center">
                                                <div class="font-medium">Brad Pitt</div>
                                                <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                            </div>
                                            <div class="mt-1 text-slate-500">Has changed <a class="text-primary"
                                                    href="">Nikon Z6</a> description</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Recent Activities -->
                            <!-- BEGIN: Transactions -->
                            <div class="col-span-12 mt-3 md:col-span-6 2xl:col-span-12">
                                <div class="flex items-center h-10 intro-x">
                                    <h2 class="mr-5 text-lg font-medium truncate">
                                        Transactions
                                    </h2>
                                </div>
                                <div class="mt-5">
                                    <div class="intro-x">
                                        <div class="flex items-center px-5 py-3 mb-3 box zoom-in">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-14.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Kate Winslet</div>
                                                <div class="text-slate-500 text-xs mt-0.5">17 September 2020</div>
                                            </div>
                                            <div class="text-success">+$34</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="flex items-center px-5 py-3 mb-3 box zoom-in">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-8.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Angelina Jolie</div>
                                                <div class="text-slate-500 text-xs mt-0.5">8 October 2020</div>
                                            </div>
                                            <div class="text-success">+$94</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="flex items-center px-5 py-3 mb-3 box zoom-in">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-2.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Al Pacino</div>
                                                <div class="text-slate-500 text-xs mt-0.5">27 September 2020</div>
                                            </div>
                                            <div class="text-success">+$50</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="flex items-center px-5 py-3 mb-3 box zoom-in">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-1.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Russell Crowe</div>
                                                <div class="text-slate-500 text-xs mt-0.5">9 March 2022</div>
                                            </div>
                                            <div class="text-success">+$87</div>
                                        </div>
                                    </div>
                                    <div class="intro-x">
                                        <div class="flex items-center px-5 py-3 mb-3 box zoom-in">
                                            <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                                <img alt="Tinker Tailwind HTML Admin Template"
                                                    src="dist/images/profile-4.jpg">
                                            </div>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium">Bruce Willis</div>
                                                <div class="text-slate-500 text-xs mt-0.5">15 November 2022</div>
                                            </div>
                                            <div class="text-success">+$86</div>
                                        </div>
                                    </div>
                                    <a href=""
                                        class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-slate-400 dark:border-darkmode-300 text-slate-500">View
                                        More</a>
                                </div>
                            </div>
                            <!-- END: Transactions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>   
    <!-- BEGIN: JS Assets-->
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    <script src="{{ asset('admin/dist/js/side-menu.js') }}"></script>
    <script src="{{ asset('admin/dist/js/mobile-menu.js') }}"></script>
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        feather.replace()
      </script>
    <!-- END: JS Assets-->
</body>

</html>
