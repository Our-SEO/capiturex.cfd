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
                    <span class="font-bold text-white break-words hover:underline block">
                      <?php echo getLang('menu_home'); ?>
                    </span>
                  </a>
                  <a href="<?php echo getHref('about') ?>">
                    <span class="font-bold text-white break-words hover:underline block">
                      <?php echo getLang('menu_about'); ?>
                    </span>
                  </a>
                  <a href="<?php echo getHref('login') ?>">
                    <span class="font-bold text-white break-words hover:underline block">
                      <?php echo getLang('menu_contact'); ?>
                    </span>
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
        <div class="lg:bg-firi-light-grey bg-white">
          <section class="border-firi-blue mb-4 border-b py-4 md:mb-10 md:py-10">
            <div class="flex justify-center">
              <div class="w-full px-4 lg:px-9 max-w-[1440px]">
                <div class="overflow-hidden flex justify-between">
                  <div class="col-span-12 md:col-span-6 flex flex-col justify-center max-w-full">
                    <h1 class="rs-landing-3xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                      <?php echo getLang('privacy__title'); ?>
                    </h1>
                  </div>
                  <div class="col-span-12 md:col-span-6"></div>
                </div>
              </div>
            </div>
          </section>
          <div class="flex justify-center">
            <div class="w-full max-w-[1440px] px-0 py-4 md:py-12 lg:px-4">
              <div class="grid grid-cols-2 gap-4 md:grid-cols-6 lg:grid-cols-12 lg:gap-10">
                <div class="col-span-full hidden space-y-10 self-start lg:col-span-3 lg:block">
                  <nav aria-label="Table of contents">
                    <div class="rounded-xl p-4 border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white lg:p-10">
                      <div>
                        <div class="flex items-center justify-between">
                          <h3 class="rs-landing-lg text-text-light-blue dark:text-text-dark-blue break-words">
                            <?php echo getLang('privacy__nav_title'); ?>
                          </h3>
                        </div>
                        <ul class="mt-6 space-y-6">
                          <li>
                            <a href="#1-introduction" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__introduction_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#2-data-controller" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__data_controller_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#3-what-personal-information-we-collect-and-reason-for-processing"
                              class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__collect_reason_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#4-disclosure-of-personal-information-to-third-parties" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__disclosure_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#5-data-security" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__security_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#6-data-storage" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__storage_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#7-your-rights" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__rights_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#8-links-to-third-parties" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__third_parties_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#9-complaints" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__complaints_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#10-cookies" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('privacy__cookies_title'); ?></span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                </div>
                <div class="col-span-full lg:col-span-9">
                  <div class="cms">
                    <section id="1-introduction" style="scroll-margin-block: 100px" data-sanity-key="1-introduction">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__introduction_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="def14c3480d2">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__introduction_text'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="2-data-controller" style="scroll-margin-block: 100px" data-sanity-key="2-data-controller">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__data_controller_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="71fbc3ce3248">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__data_controller_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="f67e0a822f58">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="1ca413816bff">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__data_controller_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d78efc6b4bdf">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="478b6838768c">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__data_controller_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="41c01ab19b80">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="16437c5e5f5d">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__data_controller_text4'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="c9de1482c9e9">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="ea3c7859819e">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__data_controller_text5'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="3-what-personal-information-we-collect-and-reason-for-processing" style="scroll-margin-block: 100px"
                      data-sanity-key="3-what-personal-information-we-collect-and-reason-for-processing">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__collect_reason_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="c28cb8054c24">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__collect_reason_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="175cdbd93f52">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0a15d3f29a52">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__collect_reason_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="a5133f3031dc">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="6d1f3a2071da">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <strong><?php echo getLang('privacy__collect_reason_creation_title'); ?></strong>
                                  <?php echo getLang('privacy__collect_reason_creation_text'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="bf8770ec0ff9">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="dfbbfa7ace57">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__collect_reason_creation_info_text'); ?>
                                </p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__collect_reason_creation_list1'); ?>
                                </li>
                                <li>
                                  <?php echo getLang('privacy__collect_reason_creation_list2'); ?>
                                </li>
                                <li>
                                  <?php echo getLang('privacy__collect_reason_creation_list3'); ?>
                                </li>
                                <li>
                                  <?php echo getLang('privacy__collect_reason_creation_list4'); ?>
                                </li>
                                <li>
                                  <?php echo getLang('privacy__collect_reason_creation_list5'); ?>
                                </li>
                                <li>
                                  <?php echo getLang('privacy__collect_reason_creation_list6'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="f02c25ff70bf">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__collect_reason_legal_text'); ?>
                                  <ul class="mb-6">
                                    <li>
                                      <?php echo getLang('privacy__collect_reason_activity1_title'); ?>
                                      <ul class="mb-6">
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity1_info'); ?>
                                        </li>
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity1_basis'); ?>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <?php echo getLang('privacy__collect_reason_activity2_title'); ?>
                                      <ul class="mb-6">
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity2_info'); ?>
                                        </li>
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity2_basis'); ?>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <?php echo getLang('privacy__collect_reason_activity3_title'); ?>
                                      <ul class="mb-6">
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity3_info'); ?>
                                        </li>
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity3_basis'); ?>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <?php echo getLang('privacy__collect_reason_activity4_title'); ?>
                                      <ul class="mb-6">
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity4_info'); ?>
                                        </li>
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity4_basis'); ?>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <?php echo getLang('privacy__collect_reason_activity5_title'); ?>
                                      <ul class="mb-6">
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity5_info'); ?>
                                        </li>
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity5_basis'); ?>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <?php echo getLang('privacy__collect_reason_activity6_title'); ?>
                                      <ul class="mb-6">
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity6_info'); ?>
                                        </li>
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity6_basis'); ?>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <?php echo getLang('privacy__collect_reason_activity7_title'); ?>
                                      <ul class="mb-6">
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity7_info'); ?>
                                        </li>
                                        <li>
                                          <?php echo getLang('privacy__collect_reason_activity7_basis'); ?>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="5d8bfd239100">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="6b747a870c0b">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <strong><?php echo getLang('privacy__collect_reason_user_data_title'); ?></strong>
                                  <?php echo getLang('privacy__collect_reason_user_data_text'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="df8c3f763393">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0f549bc1631f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <strong><?php echo getLang('privacy__collect_reason_marketing_title'); ?></strong>
                                  <?php echo getLang('privacy__collect_reason_marketing_text'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="8de2f0594f29">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="cb34a1976323">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__collect_reason_provide_text'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="4-disclosure-of-personal-information-to-third-parties" style="scroll-margin-block: 100px" data-sanity-key="4-disclosure-of-personal-information-to-third-parties">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__disclosure_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="76346ca3b4fa">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__disclosure_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="2ef18054b1e0">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="89b3549de2b5">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__disclosure_text2'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="5-data-security" style="scroll-margin-block: 100px" data-sanity-key="5-data-security">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__security_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="2eb0f72683f2">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__security_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0103e234219c">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d979d1c7993f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__security_text2'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="6-data-storage" style="scroll-margin-block: 100px" data-sanity-key="6-data-storage">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__storage_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="776ed7ac25b5">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__storage_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="875ed7ff7b55">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <br /><?php echo getLang('privacy__storage_text2'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="7-your-rights" style="scroll-margin-block: 100px" data-sanity-key="7-your-rights">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__rights_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="03633e50fda9">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__rights_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="735c017bbd17">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0d100fced875">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__rights_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="a2b60ac74555">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__rights_list1'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="2d84a46a1a7e">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__rights_list2'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="f91461101b10">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__rights_list3'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="3ea6bf89aa77">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__rights_list4'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="f35582a5fa03">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__rights_list5'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="ef442431f87a">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__rights_list6'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="8413be7d794c">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('privacy__rights_list7'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="cf5289520727">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="809d7da0f224">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__rights_datatilsynet_link'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="b47ef0762064">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="950bd14267bd">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__rights_contact_link'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="dc18cac5d27d">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="308a60d84644">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__rights_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="739780d6c3a3">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="b973407d39e5">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__rights_text4'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="514d0f3aa409">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="c50785787452">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__rights_text5'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="8-links-to-third-parties" style="scroll-margin-block: 100px" data-sanity-key="8-links-to-third-parties">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__third_parties_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="15a08ea5c040">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__third_parties_text'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="9-complaints" style="scroll-margin-block: 100px" data-sanity-key="9-complaints">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__complaints_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="9f1fa39ecb73">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__complaints_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="86a9c402f1ea">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="90d592af7e33">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__complaints_datatilsynet_link'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="10-cookies" style="scroll-margin-block: 100px" data-sanity-key="10-cookies">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('privacy__cookies_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="7fbce6fc0733">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('privacy__cookies_text'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
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