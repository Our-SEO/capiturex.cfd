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
                      <?php echo getLang('terms__title'); ?>
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
                            <?php echo getLang('terms__nav_title'); ?>
                          </h3>
                        </div>
                        <ul class="mt-6 space-y-6">
                          <li>
                            <a href="#1-general" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('terms__general_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#2-accounts" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('terms__accounts_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#3-buying-and-selling" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('terms__buying_selling_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#4-responsibility-and-compensation" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('terms__responsibility_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#5-staking" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('terms__staking_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#6-governing-law" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('terms__governing_law_title'); ?></span></a>
                          </li>
                          <li>
                            <a href="#7-change-of-terms" class="flex cursor-pointer align-baseline transition duration-300 ease-in-out text-black-700"><span
                                class="rs-landing-sm text-text-light-2 dark:text-text-dark-2 break-words hover:text-black-900 hover:font-semibold"><?php echo getLang('terms__change_terms_title'); ?></span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                </div>
                <div class="col-span-full lg:col-span-9">
                  <div class="cms">
                    <section id="1-general" style="scroll-margin-block: 100px" data-sanity-key="1-general">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('terms__general_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="210f67e897c1">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="346b7cd75736">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__general_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d87486e5e972">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="94a3363ec85e">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__general_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="a882b1e8ba73">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="8b27f8100b1f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__general_text3'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="2-accounts" style="scroll-margin-block: 100px" data-sanity-key="2-accounts">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('terms__accounts_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="332ae2398cf8">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__accounts_general_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="26ef17e6bed8">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="2992e45a3fe5">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__accounts_general_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="8d631742d98f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="b12ceaf4dc0a">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__accounts_general_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="c8a55774e61f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="e4a37ec54520">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__accounts_general_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="035e949baaec">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="14ac37bba0ef">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__accounts_general_text4'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="88523c06ebdc">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="5231b79dd661">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__crypto_storage_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="e154bc179955">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d914f80d10e6">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__crypto_storage_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="5703d974ea77">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="553a163f6ff7">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__crypto_storage_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="83ef7c149993">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="07f1281d38e7">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__airdrops_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="76445b942b2a">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="fa5ad18b9cd1">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__airdrops_text'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="7cc080c83a3c">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="ed71373eb157">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__hard_forks_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="b4d4e9108cc6">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="54a695bee851">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__hard_forks_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="b790c5b47e7d">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="4fa75d94bdca">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__hard_forks_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="187980744ab9">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="c89c7953a4d9">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__hard_forks_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="a74a60eaeb1f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="2cc1bf2d70c6">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__crypto_transactions_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="7cb234275463">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0d737b3710ee">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__crypto_transactions_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="cb02a4308fd9">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0aff5a400969">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__crypto_transactions_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d773a5d290f1">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="dbb029f83228">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__crypto_transactions_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="9fa23d336c74">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="f882d520f1fc">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__crypto_transactions_text4'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="fe9045b02453">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="2c059517546f">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__incorrect_deposits_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="3c412f637d9e">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="5b604a26fbf1">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__incorrect_deposits_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="b2713450fc48">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__incorrect_deposits_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="3defdf390a17">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__fiat_money_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="e7a57b3297ec">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="a3b8c5bfcc63">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__fiat_money_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="3664050e23d3">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="974e0a6d0c38">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__fiat_money_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="1953e66beab4">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="19880e5f1a9b">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__fiat_money_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="f02b80234356">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="85dd839de72b">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__fiat_money_text4'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d55252d1fa21">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="b072a395f162">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__fiat_money_text5'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="9f2cec9667af">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="86ca25721664">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__termination_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="01a7342dd791">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="77089082ec33">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__termination_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="537501f43d9f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="3a3f9ebef109">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__termination_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="f83a27e249db">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="1d6241dd0909">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__termination_text3'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="3-buying-and-selling" style="scroll-margin-block: 100px" data-sanity-key="3-buying-and-selling">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('terms__buying_selling_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="af58d7e34919">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__buying_selling_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="2c3b610ee92f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="3a4f3fb9eacc">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__buying_selling_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="974a52b2dc34">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="7dfe59ce786a">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__buying_selling_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="cf2196cd9bc5">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="7fc7b93c45f7">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__buying_selling_text4'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="4-responsibility-and-compensation" style="scroll-margin-block: 100px" data-sanity-key="4-responsibility-and-compensation">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('terms__responsibility_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="5ded82e652b9">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__responsibility_general_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0af92dd851bd">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__responsibility_general_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="45fa8f27beab">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="3f935bec4af6">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__responsibility_general_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="e48c8fea1a4f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="22c7f21a71bc">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__responsibility_general_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="976d3fc77e33">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="7b564d2fe3e2">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__responsibility_general_text4'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d06ab80a6419">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="8a255a229056">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__responsibility_general_text5'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="fc6b73073786">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="f6131c01ba2c">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__tax_calculator_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0110a4bfc31d">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__tax_calculator_text'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="5-staking" style="scroll-margin-block: 100px" data-sanity-key="5-staking">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('terms__staking_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="2d8707d844e3">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_general_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="0b8910b7d31f">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_general_text'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="b0a07a4f9c3c">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="bf0282b2d52d">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_service_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="063aedd902c0">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_service_text1'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d1943b914184">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words"></p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="739bf446f283">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_service_text2'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="c7a7b21ce4d9">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_service_text3'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="d94c2967395e">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_service_text4'); ?>
                                </p>
                              </section>
                              <ul class="mb-6">
                                <li>
                                  <?php echo getLang('terms__staking_service_list1'); ?>
                                </li>
                                <li>
                                  <?php echo getLang('terms__staking_service_list2'); ?>
                                </li>
                                <li>
                                  <?php echo getLang('terms__staking_service_list3'); ?>
                                </li>
                                <li>
                                  <?php echo getLang('terms__staking_service_list4'); ?>
                                </li>
                              </ul>
                              <section class="mb-4 overflow-hidden" id="76bb15b90a8b">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_service_text5'); ?>
                                </p>
                              </section>
                              <section class="mb-4 overflow-hidden" id="50c9abc6ab4a">
                                <h3 class="rs-landing-lg text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_tax_title'); ?>
                                </h3>
                              </section>
                              <section class="mb-4 overflow-hidden" id="8a9ff0721492">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__staking_tax_text'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="6-governing-law" style="scroll-margin-block: 100px" data-sanity-key="6-governing-law">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('terms__governing_law_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="f824ae435d07">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__governing_law_text'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section id="7-change-of-terms" style="scroll-margin-block: 100px" data-sanity-key="7-change-of-terms">
                      <div class="border-black-150 dark:bg-card-dark-1 dark:border-text-dark-4 bg-white mb-8 overflow-hidden p-6 lg:mb-10 lg:px-20 lg:py-14 rounded-none lg:rounded-xl">
                        <div>
                          <div>
                            <h2 class="rs-landing-xl text-text-light-blue dark:text-text-dark-blue break-words pb-[2px]">
                              <?php echo getLang('terms__change_terms_title'); ?>
                            </h2>
                          </div>
                          <div class="overflow-hidden transition-all max-h-[10000px] pt-4">
                            <div class="cms">
                              <section class="mb-4 overflow-hidden" id="41dd7a791a4b">
                                <p class="rs-landing-md text-text-light-1 dark:text-white break-words">
                                  <?php echo getLang('terms__change_terms_text'); ?>
                                </p>
                              </section>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <div class="mb-4 inline-block lg:mr-10">
                      <a href="<?php echo getHref('login') ?>">
                        <div
                          class="font-medium rounded-full disabled:opacity-50 flex flex-row justify-center items-center bg-firi-blue hover:bg-blue-900 dark:hover:bg-blue-600 dark:bg-blue-500 text-white fill-white py-2 px-6 gap-2 text-web-sm min-w-[119px] !rs-landing-sm !h-[42px] !gap-3 !px-5 !py-4 !font-medium">
                          <span>
                            <div class="flex items-center space-x-2">
                              <span><?php echo getLang('terms__create_account_button'); ?></span>
                            </div>
                          </span>
                        </div>
                      </a>
                    </div>
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