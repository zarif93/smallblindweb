
<!DOCTYPE html>
<html lang="he" class="scroll-smooth" dir="rtl">
    <head>

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Small Blind Poker</title>
        <meta name="description" content="הצטרף למשחקי פוקר בישראל עם קלאב גיגי קבל קוד הצטרפות, שחק עם שחקנים אמיתיים ותהנה מחוויית קלאב מקצועית. הצטרף עכשיו ל-smallblind.club.">

        <!-- favicon סטטי -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/' . rand(1,16) . '.webp') }}">

        <!-- Google Fonts - טעינה מהירה יותר -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="preload" as="style"
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
            onload="this.onload=null;this.rel='stylesheet'">

        <noscript>
            <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap">
        </noscript>
        <!-- Swiper CSS with preload -->
        <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"></noscript>

        <!-- Vite CSS -->
        @vite([
            'resources/css/app.css',
        ])

    </head>
  <body class="font-rubik dark:bg-dark_primary_bg">

    <!-- Preloader start 
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->

      <!-- Dark and light button start -->
      <div class="fixed ltr:right-0 rtl:left-0 top-[50%] translate-y-[-50%] z-50">
        <button class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center rounded-lg ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none" id="light__to--dark">
          <svg xmlns="http://www.w3.org/2000/svg" class="dark--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512"><title>Moon</title><path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z"/></svg>
          
          <svg xmlns="http://www.w3.org/2000/svg" class="light--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512"><title>Sunny</title><path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z"/></svg>
        </button>
        
      </div>
      <!-- Dark and light button end -->

      <!-- Header area start -->
      <header class="absolute w-full left-0 top-0">
        <div class="header__sticky py-5">
          <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="logo">
                    <a href="/" class="flex items-center" style="width: 150px;">
                      <img class="hidden dark:block rounded-full " src="{{ asset('images/logo dark.webp') }}" alt="סמול בליינד פוקר קלאב גיגי| לוגו מועדון פוקר סמול בליינד קלאב גיגי" width="150" height="150">
                      <img class="dark:hidden rounded-full" src="{{ asset('images/logo.webp') }}" alt="סמול בליינד פוקר קלאב גיגי | לוגו מועדון פוקר סמול בליינד קלאב גיגי" width="150" height="150">
                    </a>
                </div>
                <div class="flex items-center md:hidden">
                  <nav >
                      <ul class="flex items-center">
                          <li>
                            <a href="#home" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">
                              ראשי
                            </a>
                          </li>
                          <li>
                            <a href="#services" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">
                              משחקים
                            </a>
                          </li>
                          <li>
                            <a href="#about" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">
                              אודות
                            </a>
                          </li>
                          <li>
                            <a href="#blog" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">
                              איך מצטרפים
                            </a>
                          </li>
                          <li><a href="#contact" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">
                            צור קשר
                          </a></li>
                      </ul> 
                  </nav>
                  <button onclick="window.open('https://wa.me/972526509732', '_blank')" class="flex bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center ltr:ml-[32px] rtl:mr-[32px] transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1]">
                    <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.314 28.323" style="enable-background:new 0 0 28.314 28.323" xml:space="preserve" width="25" height="25">
                        <path d="m27.728 20.384-4.242-4.242a1.982 1.982 0 0 0-1.413-.586h-.002c-.534 0-1.036.209-1.413.586L17.83 18.97l-8.485-8.485 2.828-2.828c.78-.78.78-2.05-.001-2.83L7.929.585A1.986 1.986 0 0 0 6.516 0h-.001C5.98 0 5.478.209 5.101.587L.858 4.83C.729 4.958-.389 6.168.142 8.827c.626 3.129 3.246 7.019 7.787 11.56 6.499 6.499 10.598 7.937 12.953 7.937 1.63 0 2.426-.689 2.604-.867l4.242-4.242c.378-.378.587-.881.586-1.416 0-.534-.208-1.037-.586-1.415zm-5.656 5.658c-.028.028-3.409 2.249-12.729-7.07C-.178 9.452 2.276 6.243 2.272 6.244L6.515 2l4.243 4.244-3.535 3.535a.999.999 0 0 0 0 1.414l9.899 9.899a.999.999 0 0 0 1.414 0l3.535-3.536 4.243 4.244-4.242 4.242z"/>
                      </svg>
                    </span>
                    <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">WhatsApp</span>
                  </button>
                </div>
                <div class="lg:hidden">
                  <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12">
                        </line>
                        <line x1="3" y1="6" x2="21" y2="6">
                        </line>
                        <line x1="3" y1="18" x2="21" y2="18">
                        </line>
                    </svg>
                  </button>
                </div>
            </div>
        </div>
         <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header lg:hidden dark:bg-gray-800">
          <div class="offcanvas__inner">
              <div class="offcanvas__logo">
                  <a class="offcanvas__logo_link" href="/">
                      <img class="hidden dark:block rounded-full " src="{{ asset('images/logo dark.webp') }}" alt="סמול בליינד פוקר קלאב גיגי| לוגו מועדון פוקר סמול בליינד קלאב גיגי" width="150" height="150">
                      <img class="dark:hidden rounded-full" src="{{ asset('images/logo.webp') }}" alt="סמול בליינד פוקר קלאב גיגי| לוגו מועדון פוקר סמול בליינד קלאב גיגי" width="150" height="150">
                  </a>
                  <button class="offcanvas__close--btn dark:text-white" data-offcanvas>close</button>
              </div>
              <nav class="offcanvas__menu">
                  <ul class="offcanvas__menu_ul">
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#home">ראשי</a></li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#services">משחקים</a></li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#about">אודות</a></li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#blog">איך מצטרפים</a></li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#contact">צור קשר</a></li>
                  </ul>
                  <button onclick="window.open('https://wa.me/972526509732', '_blank')" class="flex mx-auto bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1] mt-[30px]">
                    <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    </span>
                    <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">WhatsApp</span>
                  </button>
              </nav>
              
          </div>
        </div>
        <!-- End Offcanvas header menu -->
        </div>
      </header>
      <!-- Header area end -->

      <!-- Main wrapper start -->
      <main>
        <!-- Hero section start -->
        <section class="bg-cover bg-no-repeat bg-center sm:h-full only-md:h-screen lg:min-h-screen flex justify-center items-center overflow-hidden bg-[#DAEEF1] dark:bg-dark_primary_bg dark:border-b dark:border-dark_accent1" id="home">
            <div class="container mx-auto flex sm:flex-col items-center justify-center lg:mt-[40px] only-md:mt-[40px] sm:pt-[100px] sm:pb-[70px]">
                <div class="lg:max-w-[40%] sm:max-w-[60%] xs:max-w-[85%] only-md:max-w-[40%] flex justify-end">
                  <div class="relative only-xl:max-w-[70%]">
                      <div class="flex items-center absolute bottom-0 right-0 bg-white dark:bg-dark_accent1 rounded-[50px] px-[15px] py-[15px] shadow-[0_0_50px_0_rgba(196,206,213,0.2)] dark:shadow-[0_0_50px_0_rgba(0,0,0,0.2)]"> 
                        <div class="text-accent1 w-[45px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                      </div>

                   </div>
                </div>
                <div class="ltr:xl:pl-[95px] ltr:lg:pl-[50px] ltr:only-md:pl-[40px] rtl:xl:pr-[95px] rtl:lg:pr-[50px] rtl:only-md:pr-[40px] flex-grow sm:mt-[30px] sm:text-center">
                  <span class="text-accent1 text-[24px] font-semibold italic pb-[5px]">ברוך הבא לעולם הפוקר של ישראל</span>
                  <h2 class="lg:text-[60px] only-md:text-[40px] sm:text-[28px] font-bold font-heebo text-heading dark:text-white">Small Blind</h2>
                  <h3 class="font-heebo font-normal text-primary dark:text-white">✔️ הצטרפות פשוטה | ✔️ תמיכה אישית </h3>
                  <p class="lg:text-[20px] md:text-[16px] text-paragraph dark:text-slate-200 lg:mt-[18px] md:mt-[15px] leading-relaxed">
                        בוא לשחק עם שחקנים אמיתיים,<br>
                        בקהילה ישראלית תוססת,<br>
                        עם תמיכה מלאה וליווי אישי מהצעד הראשון.<br>
                        לא משנה אם אתה שחקן מתחיל או מקצוען ותיק,<br>
                        אצלנו תמצא את הדרך הנכונה להתחבר לשולחנות אונליין איכותיים.<br>
                        אז למה לחכות? בוא לשחק.
                    </p>

                   <div class="flex items-center gap-[18px] flex-wrap mt-[30px] sm:justify-center">
                      <a href="https://api.whatsapp.com/send/?phone=972526503297" class="btn outline-btn text-accent1 shrink-0">WhatsApp</a>
                      <div class="flex items-center flex-wrap gap-[15px] sm:justify-center">
                        <span class="font-heebo lg:text-[22px] md:text-[18px] font-semibold shrink-0 text-primary dark:text-white">עקוב אחרינו ברשתות החברתיות: </span>
                        <div class="flex items-center">
                          <!-- Facebook -->
                          <a href="https://www.facebook.com/profile.php?id=61564008952052" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full">
                            <svg  fill="currentColor" stroke="currentColor" width="13" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                            </svg>
                          </a>
                          <!-- Twiter  X -->
                          <a href="https://x.com/small_blin92853" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full ltr:ml-[10px] rtl:mr-[10px]">
                            <svg fill="currentColor" stroke="currentColor" width="13" height="14"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                          </a>
                          <!-- Instagram -->
                          <a href="https://www.instagram.com/blind.small/" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full ltr:ml-[10px] rtl:mr-[10px]">                            
                            <svg fill="currentColor" stroke="currentColor" width="13" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                          </a>
                        </div>
                      </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- Hero section end -->
        
        <!--  Games section start -->
        <section class="lg:py-[100px] md:py-[70px]" id="services">
          <div class="container mx-auto">
            <!-- Section title start -->
             <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                  <div class="max-w-full lg:max-w-[575px]  w-full">
                    <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]"></span>
                    <h2 class="text-[28px] lg:text-[48px] font-bold font-heebo leading-[36px] lg:leading-[58px] text-[#000248] dark:text-white">
                      🎲 המשחקים שתמצא אצלנו
                      </h2>
                  </div>
                  <div class="md:grow">
                    <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                      💬 לא בטוח מאיפה להתחיל?
                      צוות התמיכה שלנו ישמח להמליץ לך על סוג המשחק שמתאים לך לפי הרמה והניסיון שלך.
                    </p>
                  </div>
             </div>
            <!-- Section title end -->

            <!-- Resume wrapper start -->
            <div class="flex flex-wrap">

              <!-- Skill -->
              <div class="w-full max-w-[50%] sm:max-w-full flex-grow">
                  <div class="relative ltr:pl-[30px] rtl:pr-[30px]">
                      <!-- border line -->
                      <div class="absolute w-[1px] ltr:left-0 rtl:right-0 top-[10px] bottom-[5px] bg-accent1"></div>
                      <!-- border line  end-->

                      <!-- Texas Hold'em start -->
                      <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white text-[28px] flex items-center rounded-full justify-center">
                            <!-- Club -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2c2.3 0 4.3 2 4.3 4.2a4.445 4.445 0 0 1-2.26 3.8c1-.5 2.46-.5 2.46-.5c2.5 0 4.5 1.8 4.5 4.3S19 18 16.5 18c0 0-1.5 0-3.5-1c0 0-.3 2 2 5H9c2.3-3 2-5 2-5c-2 1-3.5 1-3.5 1C5 18 3 16.3 3 13.8s2-4.3 4.5-4.3c0 0 1.46 0 2.46.5c-.3-.17-2.17-1.23-2.26-3.8C7.7 4 9.7 2 12 2Z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">
                                טקסס הולד'ם 
                                <br />
                                (Texas Hold'em)
                              </h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">
                                NLH
                              </span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">
                              המשחק הפופולרי ביותר בעולם – פשוט ללמוד,
                              מתאים למתחילים ומקצוענים כאחד.
                            </p>
                        </div>
                    </div>
                    <!-- Texas Hold'em end -->

                    <!-- PLO 4 -->
                      <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white text-[28px] flex items-center rounded-full justify-center">
                            <!-- dimond -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="currentColor" d="m19 12l-7 10l-7-10l7-10"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">
                                אומהה 4 קלפים
                                <br />
                                (PLO 4)
                              </h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">
                                PLO 4
                              </span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">
                              מתאים לשחקנים שמחפשים יותר אקשן.
                              בכל יד תקבל 4 קלפים – ותצטרך להשתמש בדיוק בשניים מהם.
                            </p>
                        </div>
                    </div>
                    <!-- PLO 4 end -->

                    <!-- PLO 5 start -->
                      <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white text-[28px] flex items-center rounded-full justify-center">
                            <!-- Spade -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C9 7 4 9 4 14c0 2 2 4 4 4c1 0 2 0 3-1c0 0 .32 2-2 5h6c-2-3-2-5-2-5c1 1 2 1 3 1c2 0 4-2 4-4c0-5-5-7-8-12Z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">
                                אומהה 5 קלפים
                                <br />
                                (PLO 5)
                              </h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">
                                PLO 5
                              </span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">
                              גרסה מתקדמת יותר של אומהה – רק למי שאוהב אתגר אמיתי.
                              כמות האפשרויות עצומה – אבל גם הסיכון.
                            </p>
                        </div>
                    </div>
                    <!-- PLO 5 end -->

                  </div>
              </div>
              <!-- Skill -->

              <!-- Education -->
              <div class="w-full max-w-[50%] sm:max-w-full flex-grow  sm:mt-[40px]">
                <div class="relative ltr:pl-[30px] rtl:pr-[30px]">
                      <!-- border line -->
                      <div class="absolute w-[1px] ltr:left-0 rtl:right-0 top-[10px] bottom-[5px] bg-accent1"></div>
                      <!-- border line  end-->

                       <!-- Sit & Go start -->
                      <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white text-[28px] flex items-center rounded-full justify-center">
                            <!-- heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="currentColor" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53L12 21.35Z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">
                                סיט אנד גו
                                <br />
                                (Sit & Go)
                              </h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">
                                Sit & Go
                              </span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">
                              הדרך הכי מהירה לשחק ולהרוויח.
                              ברגע שמתמלא שולחן – הטורניר מתחיל. בלי לחכות.
                            </p>
                        </div>
                    </div>
                    <!-- Sit & Go end -->

                    <!-- Spin & Gold start -->
                      <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white text-[28px] flex items-center rounded-full justify-center">
                            <!-- Club -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2c2.3 0 4.3 2 4.3 4.2a4.445 4.445 0 0 1-2.26 3.8c1-.5 2.46-.5 2.46-.5c2.5 0 4.5 1.8 4.5 4.3S19 18 16.5 18c0 0-1.5 0-3.5-1c0 0-.3 2 2 5H9c2.3-3 2-5 2-5c-2 1-3.5 1-3.5 1C5 18 3 16.3 3 13.8s2-4.3 4.5-4.3c0 0 1.46 0 2.46.5c-.3-.17-2.17-1.23-2.26-3.8C7.7 4 9.7 2 12 2Z" />
                            </svg>
                        </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">
                                ספין אנד גולד
                                <br />
                                (Spin & Gold)
                              </h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">
                                Spin & Gold
                              </span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">
                              3 שחקנים, זמן קצר, פרס מפתיע – וים של אדרנלין.
                              פורמט סופר מהיר שבו כל סיבוב יכול לזכות אותך בפרס של פי 2 ועד פי 1,000 מהביי־אין.
                            </p>
                        </div>
                    </div>
                    <!-- Spin & Gold end -->

                    <!-- Tournaments start -->
                      <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white text-[28px] flex items-center rounded-full justify-center">
                            <!-- Spade -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C9 7 4 9 4 14c0 2 2 4 4 4c1 0 2 0 3-1c0 0 .32 2-2 5h6c-2-3-2-5-2-5c1 1 2 1 3 1c2 0 4-2 4-4c0-5-5-7-8-12Z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">
                                טורנירים יומיים
                                <br />
                                (Tournaments)
                              </h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">
                                Tournaments
                              </span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">
                              מבחר ענק של טורנירים לאורך כל היום, לכל רמות השחקנים.
                              יש לנו טורנירים חינמיים (Freeroll), טורנירי באונטי, טורנירים עם מבנים עמוקים, ועוד.
                            </p>
                        </div>
                    </div>
                    <!-- Tournaments end -->

                  </div>
              </div>
              <!-- Education -->
            </div>
            <!-- Resume wrapper end -->

          </div>
        </section>
        <!--  Games section end -->

        <!-- About me section start -->
        <section class="bg-cover bg-no-repeat bg-center bg-[#ECF1F6] dark:bg-dark_primary_bg dark:bg-none py-[70px] lg:py-[100px] dark:border-t dark:border-b dark:border-dark_accent1" id="about">
          <div class="container mx-auto">
              <div class="flex justify-between sm:flex-wrap sm:flex-col-reverse">
                  <div class="w-full lg:max-w-[550px]">
                      <div>
                        <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">אודות</span>
                        <h2 class="text-[24px] only-md:text-[32px] lg:text-[48px] font-bold font-heebo leading-[36px] lg:leading-[58px] text-[#000248] dark:text-white ltr:lg:pr-[50px] rtl:lg:pl-[50px]">
                          למה דווקא אנחנו?
                        </h2>
                      </div>
                      <div class="mt-[30px]">
                        <h3 class="text-accent1 text-[20px] lg:text-[24px] font-medium ">טסט</h3>
                        <ul class="flex justify-between flex-wrap mt-[18px]">
                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">
                            קהילת פוקר ישראלית חזקה ותומכת.
                          </li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">
                            ליווי מלא – מרגע ההרשמה ועד למשחק.
                          </li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">
                            מדריכים, תמיכה, ומידע מותאם לשחקנים בכל רמה.
                          </li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">
                            חיבור מהיר לפלטפורמת ClubGG.
                          </li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">
                            פרטיות מלאה, אמינות ומענה אנושי.
                          </li>

                          
                        </ul>
                        <a href="https://api.whatsapp.com/send/?phone=972526503297" class="btn solid-btn text-accent1 mt-[35px] inline-block">WhatsApp</a>
                      </div>
                  </div>
                  <div class="sm:mb-[50px]">
                      <div class="relative">
                        <span class=" absolute sm:w-[100px] sm:h-[100px] only-md:w-[150px] only-md:h-[150px] lg:w-[200px] lg:h-[200px] xl:w-[250px] xl:h-[250px] border-[8px] lg:border-[13px] border-accent1 rounded-full xs:bottom-[-25%] sm:bottom-[-12%] bottom-[-18%] ltr:sm:left-[3%] ltr:left-[-18%] rtl:sm:right-[3%] rtl:right-[-18%] animateUpDown"></span>
                      </div>
                      <div class="text-center mt-[30px]">
                        <img width="500" height="500" class="inline-block w-[80px] h-[80px] lg:w-[130px] lg:h-[130px] rounded-full" src="{{ asset('images/' . rand(1, 16) . '.webp') }}" alt="תמונה מתוך פוסט בבלוג של מועדון פוקר סמול בליינד באפליקציה של קלאב גיגי ">
                      </div>
                  </div>
              </div>
          </div>
        </section>
        <!-- About me section end -->

        <!-- Blog section start -->
        <section class="lg:py-[100px] md:py-[70px]" id="blog">
          <div class="container mx-auto">
            <!-- Section title start -->
            <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
              <div class="max-w-full lg:max-w-[580px]  w-full">
                <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                  איך מצטרפים אלינו?
                </h2>
              </div>
              
            </div>
            <!-- Section title end -->

            <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-3 gap-[30px]">

            <!-- single blog  start -->
            <div class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
              <a href="https://www.clubgg.com/" target="_blank" >
                <!-- blog image -->
                <div class="overflow-hidden">
                  <span class="block">
                    <img width="50" height="50" class="blog__thumb w-full transition duration-300" src="{{ asset('images/' . rand(1,16) . '.webp') }}" alt="תמונה מתוך פוסט בבלוג של מועדון פוקר סמול בליינד באפליקציה של קלאב גיגי ">
                  </span>
                </div>
                <!-- blog image end -->

                <!-- blog content -->
                <div class="p-[30px]">
                    <div class="mb-[15px]">
                      <span class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">
                        מורידים
                      </span>
                    </div>
                    <div>
                      <h3 class="text-[25px] leading-7 font-heebo font-bold">
                        <span class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300">
                          נכנסים לאתר הרישמי של ClubGG
                        </span>
                      </h3>
                      <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">
                        נכנסים לאתר הרישמי 
                        או לחנות באיפון ואנדרואיד 
                        ומורידים את האפליקציה הרימשמית ש ClubGG
                      </p>
                    </div>
                </div>
                <!-- blog content end -->
              </a>
            </div>
            <!-- single blog end -->

            <!-- single blog  start -->
            <div class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
              <a class="block popup-modal--open" href="https://play.clubgg.com/dlink/ay7pZBYMxfYeBmCw7"> 
                <!-- blog image -->
                <div class="overflow-hidden">
                  <span class="block">
                    <img width="50" height="50" class="blog__thumb w-full transition duration-300" src="{{ asset('images/' . rand(1,16) . '.webp') }}" alt="תמונה מתוך פוסט בבלוג של מועדון פוקר סמול בליינד באפליקציה של קלאב גיגי ">
                  </span>
                </div>
                <!-- blog image end -->

                <!-- blog content -->
                <div class="p-[30px]">
                    <div class="mb-[15px]">
                      <span class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">
                        נרשמים
                      </span>
                    </div>
                    <div>
                      <h3 class="text-[25px] leading-7 font-heebo font-bold">
                        <span class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300" href="#">
                          נרשמים לקלאב 
                        </span>
                      </h3>
                      <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">
                        נרשמים לקלאב 
                        עם קוד ההזמנה שלנו 
                        <br/>
                        שורה ראשונה <b>843116</b>  
                        <br/>
                        שורה שניה <b>42863197</b>
                      
                      </p>
                    </div>
                </div>
                <!-- blog content end -->
              </a>
            </div>
            <!-- single blog end -->

            <!-- single blog  start -->
            <div class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
              <a  href="#contact">
              <!-- blog image -->
              <div class="overflow-hidden">
                <span class="block">
                  <img width="50" height="50" class="blog__thumb w-full transition duration-300" src="{{ asset('images/' . rand(1,16) . '.webp') }}" alt="תמונה מתוך פוסט בבלוג של מועדון פוקר סמול בליינד באפליקציה של קלאב גיגי ">
                </span>
              </div>
               <!-- blog image end -->

              <!-- blog content -->
              <div class="p-[30px]">
                  <div class="mb-[15px]">
                    <span class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">
                      משחקים
                    </span>
                  </div>
                  <div>
                    <h3 class="text-[25px] leading-7 font-heebo font-bold">
                      <span class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300">
                        שולחים הודעה
                      </span>
                    </h3>
                    <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">
                      שולחים הודעה לסוכן שלנו ב 
                        <a href="https://api.whatsapp.com/send/?phone=972526503297" target="_blank" 
                        class="text-accent1 dark:text-white hover:text-primary dark:hover:text-accent1 transition-all duration-300">
                        WhatsApp
                        </a>
                        <br/>
                        או ב 
                        <a href="https://t.me/smallBlindpoker" target="_blank" 
                        class="text-accent1 dark:text-white hover:text-primary dark:hover:text-accent1 transition-all duration-300">
                        Telegram
                        </a>
                        
                        מפקידים ומתחילים לשחק
                    </p>
                  </div>
              </div>
              <!-- blog content end -->
              </a>
            </div>
            <!-- single blog end -->

            </div>
          </div>          
        </section>
        <!-- Blog section end -->

        <!-- Contact form section start -->
        <section class="py-[70px] lg:py-[100px] mb-[270px] bg-cover bg-no-repeat bg-center bg-[#ECF1F6] dark:bg-dark_primary_bg" id="contact">
            
            @if (session('success'))
                <div style="
                    max-width: 400px; 
                    margin: 1rem auto; 
                    padding: 1rem 1.5rem; 
                    background-color: #22c55e; /* ירוק בהיר */
                    color: white; 
                    border-radius: 8px; 
                    box-shadow: 0 2px 8px rgba(0,0,0,0.15); 
                    font-weight: 600; 
                    text-align: center;
                " role="alert">
                    הטופס נשלח בהצלחה!
                </div>
            @endif  
            <div class="container mx-auto">
            <!-- Form wrapper start -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px]">
              <div>
                <!-- Section title -->
                  <div class="mb-[55px] md:text-center">
                      <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">צור קשר</span>
                      <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">
                        ✉️ דברו איתנו – אנחנו כאן בשבילכם
                      </h2>
                      <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">
                        יש לכם שאלה? רוצים לשמוע עוד לפני שאתם מצטרפים?
                        השאירו פרטים ונחזור אליכם בהקדם – בוואטסאפ, טלפון או איך שנוח לכם.
                        צוות התמיכה שלנו , זמין, וישמח להסביר הכול.
                      </p>
                  </div>
                <!-- Section title end -->
                
                <!-- from inner start-->
                
                  <form action="content" method="post">
                    @csrf
                      <div class="grid grid-cols-2 gap-7">
                          <div>
                            <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600 {{ $errors->has('name') ? 'error-input' : '' }}" 
                            type="text" name="name" placeholder="שם מלא" value="{{ old('name') }}">
                            @error('name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                          </div>
                          <div>
                            <!-- שדה number -->
                            <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600 {{ $errors->has('number') ? 'error-input' : '' }}" 
                            type="text" name="number" placeholder="מספר פלאפון" value="{{ old('number') }}">
                            @error('number')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                          </div>
                          
                      </div>
                      <button class="btn solid-btn mt-12">שלח בקשה ונחזור אליך</button>
                      
                  </form>
                <!-- from inner end -->
              </div>

              <div class="ltr:only-md:pl-[30px] ltr:lg:pl-[50px] rtl:only-md:pr-[30px] rtl:lg:pr-[50px] mt-[30px] lg:mt-[150px] md:flex md:gap-[30px] md:flex-wrap">
                  <!-- Single contact info start -->
                  <div class="flex items-center">
                    <div>
                      <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">                        
                        <svg width="25" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                      </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                       <h3 class="text-[28px md:text-[22px]] font-heebo font-bold text-primary dark:text-white">WhatsApp</h3>
                       <span class="text-primary dark:text-slate-200 text-[22px md:text-[18px]] mt-5">
                        <a href="https://api.whatsapp.com/send/?phone=972526503297" target="_blank" class="text-accent1 dark:text-white hover:text-primary dark:hover:text-accent1 transition-all duration-300">
                          +972526503297
                        </a>
                        <br> 
                        <a href="https://api.whatsapp.com/send/?phone=972526503297" target="_blank" class="text-accent1 dark:text-white hover:text-primary dark:hover:text-accent1 transition-all duration-300">
                          +972526503297
                        </a>
                      
                      </span>
                    </div>
                  </div>
                  <!-- Single contact info end -->

                  <!-- Single contact info start -->
                  <div class="flex items-center lg:mt-7">
                    <div>
                      <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                      </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                       <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Telegram</h3>
                       <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">
                        <a href="https://t.me/smallBlindpoker" target="_blank" class="text-accent1 dark:text-white hover:text-primary dark:hover:text-accent1 transition-all duration-300">
                          @smallBlindpoker
                        </a>
                        </span>
                    </div>
                  </div>
                  <!-- Single contact info end -->

                  <!-- Single contact info start -->
                  <div class="flex items-center lg:mt-7">
                    <div>
                      <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                        <svg width="32" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                      </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                       <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Address</h3>
                       <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">
                        Israel, tel aviv
                        </span>
                    </div>
                  </div>
                  <!-- Single contact info end -->

              </div>
            </div>
            <!-- Form wrapper end -->

            <!-- Google map start  -->
            <div class="mb-[-275px] pt-[70px] lg:pt-[100px]">
              <div style="width: 100%">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54084.906049976766!2d34.75604647193253!3d32.0879975533364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4ca6193b7c1f%3A0xc1fb72a2c0963f90!2sTel%20Aviv-Yafo%2C%20Israel!5e0!3m2!1sen!2sus!4v1750427027036!5m2!1sen!2sus" 
                width="100%" height="400 style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
            <!-- Google map send -->
          </div>
        </section>
        <!-- Contact form section end -->

      </main>
      <!-- Main wrapper end -->

    <!-- Footer start -->
      <footer class="py-[50px] bg-cover bg-no-repeat bg-center bg-[#EFF3F7] dark:bg-dark_primary_bg dark:border-t dark:border-dark_accent1">
      <div class="container mx-auto">
          <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-2">
              <div class="flex">
                <p class="flex items-center flex-wrap sm:justify-center dark:text-slate-200">
                  <span class="px-[3px] text-paragraph dark:text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="text-paragraph" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                  </span>  by <span class=" px-[3px]"><a class="text-accent1 hover:font-bold" href="#">Small Blind</a></span>© 2022</p>
              </div>
              <div class="flex items-center justify-end gap-8 sm:justify-center sm:mt-[15px]">
                  <!-- 
                    <a href="#" class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]">Terms & Condition</a>
                    <a href="#" class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]"> Privacy Policy</a>
                  -->
              </div>
          </div>
      </div>

    </footer>
    <!-- Footer end -->

    <!-- Back to top start -->
    <button id="scroll__top" class="fixed bottom-12 ltr:right-5 rtl:left-5 z-50 bg-accent1 text-white shadow-[0_2px_22px_rgba(0,0,0,0.16)] cursor-pointer translate-y-12 opacity-0 invisible transition-all duration-300 leading-[1] w-11 h-11 rounded-full border-none flex items-center justify-center hover:bg-primary dark:hover:bg-dark_accent1">
      <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 leading-[1]" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"  stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg>
    </button>  
    <!-- Back to top end -->



    <!-------- Plugins js ------>

    <!-- Swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>
    @vite([
      'resources/js/app.js',
      'resources/js/imagesloaded.pkgd.min.js',
      'resources/js/isotope.pkgd.min.js',
      'resources/js/script.js',
])
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KKHT5V6XMB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KKHT5V6XMB');
</script>
  </body>
</html>
