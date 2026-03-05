<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';


$pageSlug = detectPageSlug(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>">

  <head>
    <?php generateMetaTags($pageSlug); ?>

    <?php generateHreflangTags(); ?>
    <?php generateJsonLd($pageSlug); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <meta name="theme-color" content="#474AEE" />
    <link rel="icon" type="image/png" href="/assets/images/favicon.png" />

    <link rel="stylesheet" href="/assets/css/c1a79f7f3574b9c5.css?v=3" />
  </head>

  <body class="bg-firi-light-grey">
    <div id="__next">
      <div class="flex flex-col">
        <header class="sticky top-0 z-[9] transition-transform bg-firi-blue">
          <div class="flex justify-center">
            <div class="w-full px-4 lg:px-9 max-w-[1440px] flex items-center py-4">
              <div class="flex flex-1 items-center space-x-14">
                <a class="flex h-[24px] w-[80px] md:h-[36px] md:w-[132px]" aria-label="<?php echo getLang('menu_home'); ?>" href="<?php echo getHref('') ?>"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="127.422 140.716 41.143 24" style="height: 100%">
                    <path
                      d="M 158.279 154.327 L 158.279 151.106 L 150.292 151.106 L 150.701 149.528 C 151.661 145.894 153.546 144.146 156.975 144.146 C 157.729 144.146 158.552 144.283 159.478 144.591 L 161.192 141.573 C 159.959 141.059 158.416 140.716 157.045 140.716 C 151.902 140.716 148.542 143.253 147.17 148.636 L 146.53 151.105 L 137.708 151.105 L 137.708 154.327 L 145.694 154.327 L 145.284 155.905 C 144.324 159.539 142.404 161.287 139.01 161.287 C 138.222 161.287 137.399 161.15 136.507 160.842 L 134.759 163.859 C 136.027 164.373 137.57 164.716 138.942 164.716 C 144.085 164.716 147.376 162.179 148.816 156.796 L 149.456 154.327 L 158.279 154.327 L 158.279 154.327 Z"
                      fill="#ffffff" />
                    <path
                      d="M 130.851 152.716 C 130.853 147.983 134.689 144.147 139.422 144.145 C 140.416 144.145 141.376 144.316 142.302 144.659 L 144.051 141.642 C 142.584 141.03 141.011 140.715 139.422 140.716 C 132.805 140.716 127.422 146.099 127.422 152.716 C 127.422 156.453 129.205 159.985 132.119 162.247 L 133.868 159.23 C 131.958 157.604 130.855 155.224 130.851 152.716 Z M 163.834 143.185 L 162.119 146.202 C 164.029 147.827 165.132 150.208 165.137 152.716 C 165.135 157.45 161.298 161.286 156.565 161.288 C 155.582 161.29 154.606 161.115 153.685 160.773 L 151.937 163.791 C 153.411 164.408 154.988 164.716 156.565 164.716 C 163.182 164.716 168.565 159.333 168.565 152.716 C 168.565 148.979 166.782 145.448 163.834 143.185 Z"
                      fill="#ffffff" />
                  </svg></a>
                <nav class="hidden space-x-6 lg:flex"><a href="<?php echo getHref('') ?>">
                    <span class="font-bold text-white break-words hover:underline block"><?php echo getLang('menu_home'); ?></span>
                  </a>
                  <a href="<?php echo getHref('about') ?>">
                    <span class="font-bold text-white break-words hover:underline block"><?php echo getLang('menu_about'); ?></span>
                  </a>
                  <a href="<?php echo getHref('login') ?>">
                    <span class="font-bold text-white break-words hover:underline block"><?php echo getLang('menu_contact'); ?></span>
                  </a>
                </nav>
              </div>
              <div class="hidden lg:flex">
                <a class="mr-4 inline-block" href="<?php echo getHref('login') ?>"><button
                    class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-white hover:bg-black-100 text-firi-blue dark:text-dark-1 py-2 px-6 gap-2 text-web-sm min-w-[119px] !rs-landing-sm !h-[42px] !gap-3 !px-5 !py-4 !font-medium"
                    type="button" aria-label="<?php echo getLang('menu_login'); ?>">
                    <span><?php echo getLang('menu_login'); ?></span>
                  </button></a>
                <div class="flex flex-col justify-center">
                  <div class="lang-select menu-call" data-open="false">
                    <?php generateLanguageSelector() ?>
                  </div>
                </div>
              </div>
              <div class="lg:hidden">
                <button data-menu-btn
                  class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-firi-blue hover:bg-blue-900 dark:hover:bg-blue-600 dark:bg-blue-500 text-white fill-white p-1 h-8 w-8 border-0"
                  type="button" aria-label="Menu">
                  <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="inline-block w-[20px] h-[20px] text-white fill-white">
                    <path
                      d="M1.5 3C1.22386 3 1 3.22386 1 3.5C1 3.77614 1.22386 4 1.5 4H13.5C13.7761 4 14 3.77614 14 3.5C14 3.22386 13.7761 3 13.5 3H1.5ZM1 7.5C1 7.22386 1.22386 7 1.5 7H13.5C13.7761 7 14 7.22386 14 7.5C14 7.77614 13.7761 8 13.5 8H1.5C1.22386 8 1 7.77614 1 7.5ZM1 11.5C1 11.2239 1.22386 11 1.5 11H13.5C13.7761 11 14 11.2239 14 11.5C14 11.7761 13.7761 12 13.5 12H1.5C1.22386 12 1 11.7761 1 11.5Z"
                      fill-rule="evenodd" clip-rule="evenodd"></path>
                  </svg><span></span>
                </button>
              </div>
            </div>
          </div>
        </header>
        <div data-menu class="bg-firi-blue fixed bottom-0 left-0 right-0 top-0 z-50 h-screen w-screen">
          <div class="fixed top-0 h-full overflow-y-auto pb-24 w-full">
            <div class="flex items-center justify-between border-b border-white p-4">
              <div>
                <a class="flex h-[24px] w-[80px] md:h-[36px] md:w-[132px]" href="<?php echo getHref('') ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="127.422 140.716 41.143 24" style="height: 100%">
                    <path
                      d="M 158.279 154.327 L 158.279 151.106 L 150.292 151.106 L 150.701 149.528 C 151.661 145.894 153.546 144.146 156.975 144.146 C 157.729 144.146 158.552 144.283 159.478 144.591 L 161.192 141.573 C 159.959 141.059 158.416 140.716 157.045 140.716 C 151.902 140.716 148.542 143.253 147.17 148.636 L 146.53 151.105 L 137.708 151.105 L 137.708 154.327 L 145.694 154.327 L 145.284 155.905 C 144.324 159.539 142.404 161.287 139.01 161.287 C 138.222 161.287 137.399 161.15 136.507 160.842 L 134.759 163.859 C 136.027 164.373 137.57 164.716 138.942 164.716 C 144.085 164.716 147.376 162.179 148.816 156.796 L 149.456 154.327 L 158.279 154.327 L 158.279 154.327 Z"
                      fill="#ffffff" />
                    <path
                      d="M 130.851 152.716 C 130.853 147.983 134.689 144.147 139.422 144.145 C 140.416 144.145 141.376 144.316 142.302 144.659 L 144.051 141.642 C 142.584 141.03 141.011 140.715 139.422 140.716 C 132.805 140.716 127.422 146.099 127.422 152.716 C 127.422 156.453 129.205 159.985 132.119 162.247 L 133.868 159.23 C 131.958 157.604 130.855 155.224 130.851 152.716 Z M 163.834 143.185 L 162.119 146.202 C 164.029 147.827 165.132 150.208 165.137 152.716 C 165.135 157.45 161.298 161.286 156.565 161.288 C 155.582 161.29 154.606 161.115 153.685 160.773 L 151.937 163.791 C 153.411 164.408 154.988 164.716 156.565 164.716 C 163.182 164.716 168.565 159.333 168.565 152.716 C 168.565 148.979 166.782 145.448 163.834 143.185 Z"
                      fill="#ffffff" />
                  </svg>
                </a>
              </div>
              <button data-menu-close
                class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-transparent text-blue-700 fill-blue-700 hover:text-blue-900 dark:text-blue-300 dark:fill-blue-300 dark:hover:fill-black-100 dark:hover:text-black-100 py-1 px-3 gap-2 text-web-sm"
                type="button" aria-label="Close">
                <span>
                  <svg viewBox="0 0 24 24" fill="#12123B" aria-hidden="true" class="inline-block w-[24px] h-[24px] fill-white text-white">
                    <path d="M4.28038 3.21999L3.21973 4.28064L19.7197 20.7806L20.7804 19.72L4.28038 3.21999Z"></path>
                    <path d="M19.7197 3.21936L3.21973 19.7194L4.28038 20.78L20.7804 4.28001L19.7197 3.21936Z"></path>
                  </svg>
                </span>
              </button>
            </div>
            <div class="p-4 pt-6">
              <div class="mb-7 gap-4 flex-wrap flex items-center">
                <div>
                  <a href="<?php echo getHref('login') ?>">
                    <button
                      class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-firi-blue hover:bg-blue-900 dark:hover:bg-blue-600 dark:bg-blue-500 text-white fill-white py-2 px-6 gap-2 text-web-sm min-w-[119px] !rs-landing-sm !h-[42px] !gap-3 !px-5 !py-4 !font-medium !text-firi-blue !bg-white"
                      type="button" aria-label="<?php echo getLang('menu_login'); ?>">
                      <span><?php echo getLang('menu_login'); ?></span>
                    </button>
                  </a>
                </div>
                <div class="flex flex-col justify-center">
                  <div class="lang-select menu-call" data-open="false">
                    <?php generateLanguageSelector() ?>
                  </div>
                </div>
              </div>
              <div class="mb-6 border-b border-white pb-6">
                <div>
                  <a href="<?php echo getHref('') ?>">
                    <span class="rs-landing-lg text-white break-words mb-4 block"><?php echo getLang('menu_home'); ?></span>
                  </a>
                  <a href="<?php echo getHref('about') ?>">
                    <span class="rs-landing-lg text-white break-words mb-4 block"><?php echo getLang('menu_about'); ?></span>
                  </a>
                  <a href="<?php echo getHref('login') ?>">
                    <span class="rs-landing-lg text-white break-words mb-4 block"><?php echo getLang('menu_contact'); ?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="border-firi-blue mb-4 border-b py-4 md:mb-10 md:py-10">
          <div class="flex justify-center">
            <div class="w-full px-4 lg:px-9 max-w-[1208px]">
              <div class="overflow-hidden flex justify-between">
                <div class="col-span-12 md:col-span-6 flex flex-col justify-center max-w-full">
                  <h1 class="rs-landing-3xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                    <?php echo getLang('about__header_title'); ?>
                  </h1>
                  <div class="mt-4">
                    <h2 class="rs-landing-lg text-text-light-blue dark:text-text-dark-blue break-words">
                      <?php echo getLang('about__header_subtitle'); ?>
                    </h2>
                  </div>
                </div>
                <div class="col-span-12 md:col-span-6">
                  <div class="hidden md:visible">
                    <svg width="155" height="90" viewBox="0 0 155 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M115.715 51.0426V38.9569H85.7671L87.301 33.0427C90.901 19.4142 97.9723 12.8571 110.829 12.8571C113.658 12.8571 116.744 13.3714 120.215 14.5285L126.644 3.21427C122.015 1.28571 116.229 0 111.087 0C91.801 0 79.201 9.51423 74.0582 29.6998L71.6565 38.9569H38.5727V51.0426H68.5207L66.9868 56.9568C63.3868 70.5853 56.1869 77.1424 43.4584 77.1424C40.5013 77.1424 37.4156 76.6281 34.0727 75.471L27.5156 86.7852C32.2727 88.7138 38.0584 89.9995 43.2012 89.9995C62.4868 89.9995 74.8296 80.4853 80.2296 60.2997L82.6313 51.0426H115.715Z"
                        fill="#474AEE"></path>
                      <path
                        d="M12.8571 44.9997C12.8571 27.257 27.257 12.8571 44.9997 12.8571C48.7283 12.8571 52.3283 13.4999 55.7997 14.7856L62.3568 3.47141C56.8283 1.15714 50.914 0 44.9997 0C20.1856 0 0 20.1856 0 44.9997C0 59.0139 6.68568 72.2567 17.6142 80.7424L24.1713 69.4282C17.0999 63.3853 12.8571 54.514 12.8571 44.9997Z"
                        fill="#474AEE"></path>
                      <path
                        d="M136.544 9.25757L130.115 20.5718C137.187 26.6146 141.429 35.486 141.429 45.0002C141.429 62.743 127.029 77.1429 109.287 77.1429C105.558 77.1429 101.958 76.5 98.4868 75.2143L91.9297 86.5285C97.4582 88.8428 103.372 89.9999 109.287 89.9999C134.101 89.9999 154.286 69.8144 154.286 45.0002C154.286 30.986 147.601 17.7432 136.544 9.25757Z"
                        fill="#474AEE"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="flex justify-center">
          <div class="w-full max-w-[1208px] px-0 lg:mt-10 lg:px-4">
            <div class="cms">
              <section id="about-us" data-sanity-key="7da6b3475c12" class="">
                <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                  <div class="">
                    <div class="">
                      <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                        <?php echo getLang('about__card_title'); ?>
                      </h2>
                    </div>
                    <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                      <div class="cms">
                        <section class="mb-4 overflow-hidden" id="3f779bda5a78">
                          <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                            <?php echo getLang('about__p1'); ?>
                          </p>
                        </section>

                        <section class="mb-4 overflow-hidden" id="70b12173e837">
                          <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                        </section>

                        <section class="mb-4 overflow-hidden" id="454eb55d751c">
                          <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                            <?php echo getLang('about__h3_mission'); ?>
                          </h3>
                        </section>

                        <section class="mb-4 overflow-hidden" id="ff98d15bb8b4">
                          <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                            <?php echo getLang('about__p2'); ?>
                          </p>
                        </section>

                        <section class="mb-4 overflow-hidden" id="9c1df7406299">
                          <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                        </section>

                        <section class="mb-4 overflow-hidden" id="69e6cefdfa2a">
                          <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                            <?php echo getLang('about__h3_values'); ?>
                          </h3>
                        </section>

                        <section class="mb-4 overflow-hidden" id="7ac5c3179fb5">
                          <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                            <?php echo getLang('about__p3'); ?>
                          </p>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-6 lg:grid-cols-12 lg:gap-10 mb-10 px-4 lg:mb-20">
              <div class="col-span-full">
                <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px] mb-6">
                  <?php echo getLang('about__related_title'); ?>
                </h2>
              </div>

              <div class="col-span-full lg:col-span-4">
                <div class="rounded-xl p-4 border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white flex h-full flex-col justify-between">
                  <h3 class="rs-landing-lg text-text-light-blue dark:text-text-dark-blue break-words mb-6">
                    <?php echo getLang('about__related_card1_title'); ?>
                  </h3>
                  <a class="w-max" href="<?php echo getHref('terms') ?>">
                    <button
                      class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-firi-blue hover:bg-blue-900 dark:hover:bg-blue-600 dark:bg-blue-500 text-white fill-white py-2 px-6 gap-2 text-web-sm min-w-[119px] !rs-landing-sm !h-[42px] !gap-3 !px-5 !py-4 !font-medium"
                      type="button" aria-label="<?php echo getLang('about__related_card1_cta'); ?> ">
                      <?php echo getLang('about__related_card1_cta'); ?>
                    </button>
                  </a>
                </div>
              </div>

              <div class="col-span-full lg:col-span-4">
                <div class="rounded-xl p-4 border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white flex h-full flex-col justify-between">
                  <h3 class="rs-landing-lg text-text-light-blue dark:text-text-dark-blue break-words mb-6">
                    <?php echo getLang('about__related_card2_title'); ?>
                  </h3>
                  <a class="w-max" href="<?php echo getHref('privacy') ?>">
                    <button
                      class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-firi-blue hover:bg-blue-900 dark:hover:bg-blue-600 dark:bg-blue-500 text-white fill-white py-2 px-6 gap-2 text-web-sm min-w-[119px] !rs-landing-sm !h-[42px] !gap-3 !px-5 !py-4 !font-medium"
                      type="button" aria-label="<?php echo getLang('about__related_card2_cta'); ?> ">
                      <?php echo getLang('about__related_card2_cta'); ?>
                    </button>
                  </a>
                </div>
              </div>

              <div class="col-span-full lg:col-span-4">
                <div class="rounded-xl p-4 border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white flex h-full flex-col justify-between">
                  <h3 class="rs-landing-lg text-text-light-blue dark:text-text-dark-blue break-words mb-6">
                    <?php echo getLang('about__related_card3_title'); ?>
                  </h3>
                  <a class="w-max" href="<?php echo getHref('login') ?>">
                    <button
                      class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-firi-blue hover:bg-blue-900 dark:hover:bg-blue-600 dark:bg-blue-500 text-white fill-white py-2 px-6 gap-2 text-web-sm min-w-[119px] !rs-landing-sm !h-[42px] !gap-3 !px-5 !py-4 !font-medium"
                      type="button" aria-label="<?php echo getLang('about__related_card3_cta'); ?> ">
                      <?php echo getLang('about__related_card3_cta'); ?>
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="bg-firi-blue pb-24 pt-10 md:py-10">
          <div class="flex justify-center">
            <div class="w-full px-4 lg:px-9 max-w-[1440px]">
              <div class="grid gap-4 md:grid-cols-6 lg:grid-cols-12 lg:gap-10">
                <div class="col-span-full">
                  <div class="block lg:col-span-2 h-[24px] w-[80px] md:h-[36px] md:w-[132px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="127.422 140.716 41.143 24" style="height: 100%">
                      <path
                        d="M 158.279 154.327 L 158.279 151.106 L 150.292 151.106 L 150.701 149.528 C 151.661 145.894 153.546 144.146 156.975 144.146 C 157.729 144.146 158.552 144.283 159.478 144.591 L 161.192 141.573 C 159.959 141.059 158.416 140.716 157.045 140.716 C 151.902 140.716 148.542 143.253 147.17 148.636 L 146.53 151.105 L 137.708 151.105 L 137.708 154.327 L 145.694 154.327 L 145.284 155.905 C 144.324 159.539 142.404 161.287 139.01 161.287 C 138.222 161.287 137.399 161.15 136.507 160.842 L 134.759 163.859 C 136.027 164.373 137.57 164.716 138.942 164.716 C 144.085 164.716 147.376 162.179 148.816 156.796 L 149.456 154.327 L 158.279 154.327 L 158.279 154.327 Z"
                        fill="#ffffff" />
                      <path
                        d="M 130.851 152.716 C 130.853 147.983 134.689 144.147 139.422 144.145 C 140.416 144.145 141.376 144.316 142.302 144.659 L 144.051 141.642 C 142.584 141.03 141.011 140.715 139.422 140.716 C 132.805 140.716 127.422 146.099 127.422 152.716 C 127.422 156.453 129.205 159.985 132.119 162.247 L 133.868 159.23 C 131.958 157.604 130.855 155.224 130.851 152.716 Z M 163.834 143.185 L 162.119 146.202 C 164.029 147.827 165.132 150.208 165.137 152.716 C 165.135 157.45 161.298 161.286 156.565 161.288 C 155.582 161.29 154.606 161.115 153.685 160.773 L 151.937 163.791 C 153.411 164.408 154.988 164.716 156.565 164.716 C 163.182 164.716 168.565 159.333 168.565 152.716 C 168.565 148.979 166.782 145.448 163.834 143.185 Z"
                        fill="#ffffff" />
                    </svg>
                  </div>
                </div>

                <div class="col-span-1 md:col-span-full lg:col-span-2">
                  <a class="mb-2 flex items-center text-white hover:underline" href="<?php echo getHref('') ?>">
                    <span class="rs-landing-sm text-white break-words"><?php echo getLang('menu_home'); ?></span>
                  </a>
                  <a class="mb-2 flex items-center text-white hover:underline" href="<?php echo getHref('about') ?>">
                    <span class="rs-landing-sm text-white break-words"><?php echo getLang('menu_about'); ?></span>
                  </a>
                  <a class="mb-2 flex items-center text-white hover:underline" href="<?php echo getHref('login') ?>">
                    <span class="rs-landing-sm text-white break-words"><?php echo getLang('menu_contact'); ?></span>
                  </a>
                  <a class="mb-2 flex items-center text-white hover:underline" href="<?php echo getHref('privacy') ?>">
                    <span class="rs-landing-sm text-white break-words"><?php echo getLang('menu_privacy'); ?></span>
                  </a>
                  <a class="mb-2 flex items-center text-white hover:underline" href="<?php echo getHref('terms') ?>">
                    <span class="rs-landing-sm text-white break-words"><?php echo getLang('menu_terms'); ?></span>
                  </a>
                </div>
                <div class="col-span-1 flex items-end md:col-span-full md:items-start lg:col-span-2">
                  <div class="lang-select menu-call" data-open="false">
                    <?php generateLanguageSelector() ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="fixed bottom-0 left-0 right-0 items-center justify-center bg-white p-4 flex md:hidden">
            <div class="mr-4">
              <a aria-label="To get started" href="<?php echo getHref('login') ?>">
                <button
                  class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-transparent hover:bg-blue-100 dark:hover:bg-background-dark-5 border-firi-blue border hover:border-blue-900 dark:border-blue-300 text-blue-700 fill-blue-700 hover:text-blue-700 dark:text-blue-300 dark:fill-blue-300 dark:hover:text-dark-text-5 dark:hover:fill-text-dark-text-5 py-2 px-6 gap-2 text-web-sm min-w-[119px] !rs-landing-sm !h-[42px] !gap-3 !px-5 !py-4 !font-medium"
                  type="button" aria-label="<?php echo getLang('menu_login'); ?>">
                  <span><?php echo getLang('menu_login'); ?></span>
                </button>
              </a>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="/assets/js/menu.js"></script>
    <script src="/assets/js/lang.js"></script>
  </body>

</html>