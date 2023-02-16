<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <title>ЕСХ СЗГТ</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
      <div class="app-container">

        <div class="app-header">
          <div class="app-header-left">
            <img src="favicon.ico">
            <p class="app-name">Единое сетевое хранилище СЗГТ</p>
            <div class="search-wrapper">
              <input class="search-input" type="text" placeholder="Поиск">
              <svg width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
                <defs></defs>
                <circle cx="11" cy="11" r="8"></circle>
                <path d="M21 21l-4.35-4.35"></path>
              </svg>
            </div>
          </div>
        </div>

        <div class="app-content">
          <div class="files-section">

            <div class="files-section-header">
                <button class = "mandate-level" style="background-color:lightslategrey;">ЕСХ Несекретно</button>
                <button class = "mandate-level" style="background-color:lightslategrey;">Несекретно</button>
                <button class = "mandate-level" style="background-color:#FF8C00;">Для служебного пользования</button>
                <button class = "mandate-level" style="background-color:#FF7F50;">Секретно</button>
                <button class = "mandate-level" style="background-color:#FF0000;">Совершенно секретно</button>
            </div>

            <div class="files-section-line">
              <div class="view-actions">
                    <button class="view-btn list-view" title="Возврат в корневую директорию.">
                       <img src="home.png" width="64" height="64">
                    </button>
                    <button class="view-btn grid-view active" title="Возврат в предыдущую директорию.">
                        <img src="back2.png" width="64" height="64">
                    </button>
                </div>
            </div>
            <div class="file-boxes jsGridView">

              <div class="file-box-wrapper">
                <div class="file-box">
                  <div class="file-box-header">
                    <span>12 декабря 2022</span>
                    <div class="more-wrapper">
                      <button class="file-btn-more">
                          <img src="folder.png" width="18 height="18">
                      </button>
                    </div>
                  </div>
                  <div class="file-box-content-header">
                    <p class="box-content-header">Secret Net Studio 8.8</p>
                    <p class="box-content-subheader">Инсталятор, документация.</p>
                  </div>
                </div>
              </div>

              <div class="file-box-wrapper">
                <div class="file-box">
                  <div class="file-box-header">
                    <span>12 декабря 2022</span>
                    <div class="more-wrapper">
                      <button class="file-btn-more">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1" />
                          <circle cx="12" cy="5" r="1" />
                          <circle cx="12" cy="19" r="1" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="file-box-content-header">
                    <p class="box-content-header">Secret Net Studio 8.8</p>
                    <p class="box-content-subheader">Инсталятор, документация.</p>
                  </div>
                </div>
              </div>

              <div class="file-box-wrapper">
                <div class="file-box">
                  <div class="file-box-header">
                    <span>12 декабря 2022</span>
                    <div class="more-wrapper">
                      <button class="file-btn-more">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1" />
                          <circle cx="12" cy="5" r="1" />
                          <circle cx="12" cy="19" r="1" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="file-box-content-header">
                    <p class="box-content-header">Secret Net Studio 8.8</p>
                    <p class="box-content-subheader">Инсталятор, документация.</p>
                  </div>
                </div>
              </div>

              <div class="file-box-wrapper">
                <div class="file-box" >
                  <div class="file-box-header">
                    <span>12 декабря 2022</span>
                    <div class="more-wrapper">
                      <button class="file-btn-more">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1" />
                          <circle cx="12" cy="5" r="1" />
                          <circle cx="12" cy="19" r="1" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="file-box-content-header">
                    <p class="box-content-header">Secret Net Studio 8.8</p>
                    <p class="box-content-subheader">Инсталятор, документация.</p>
                  </div>
                </div>
              </div>

              <div class="file-box-wrapper">
                <div class="file-box">
                  <div class="file-box-header">
                    <span>12 декабря 2022</span>
                    <div class="more-wrapper">
                      <button class="file-btn-more">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1" />
                          <circle cx="12" cy="5" r="1" />
                          <circle cx="12" cy="19" r="1" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="file-box-content-header">
                    <p class="box-content-header">Secret Net Studio 8.8</p>
                    <p class="box-content-subheader">Инсталятор, документация.</p>
                  </div>
                </div>
              </div>

              <div class="file-box-wrapper">
                <div class="file-box">
                  <div class="file-box-header">
                    <span>12 декабря 2022</span>
                    <div class="more-wrapper">
                      <button class="file-btn-more">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                          <circle cx="12" cy="12" r="1" />
                          <circle cx="12" cy="5" r="1" />
                          <circle cx="12" cy="19" r="1" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="file-box-content-header">
                    <p class="box-content-header">Secret Net Studio 8.8</p>
                    <p class="box-content-subheader">Инсталятор, документация.</p>
                  </div>
                </div>
              </div>
                <div class="file-box-wrapper">
                    <div class="file-box">
                        <div class="file-box-header">
                            <span>12 декабря 2022</span>
                            <div class="more-wrapper">
                                <button class="file-btn-more">
                                    <img src="folder.png" width="18 height="18">
                                </button>
                            </div>
                        </div>
                        <div class="file-box-content-header">
                            <p class="box-content-header">Secret Net Studio 8.8</p>
                            <p class="box-content-subheader">Инсталятор, документация.</p>
                        </div>
                    </div>
                </div>

                <div class="file-box-wrapper">
                    <div class="file-box">
                        <div class="file-box-header">
                            <span>12 декабря 2022</span>
                            <div class="more-wrapper">
                                <button class="file-btn-more">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="12" cy="5" r="1" />
                                        <circle cx="12" cy="19" r="1" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="file-box-content-header">
                            <p class="box-content-header">Secret Net Studio 8.8</p>
                            <p class="box-content-subheader">Инсталятор, документация.</p>
                        </div>
                    </div>
                </div>

                <div class="file-box-wrapper">
                    <div class="file-box">
                        <div class="file-box-header">
                            <span>12 декабря 2022</span>
                            <div class="more-wrapper">
                                <button class="file-btn-more">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="12" cy="5" r="1" />
                                        <circle cx="12" cy="19" r="1" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="file-box-content-header">
                            <p class="box-content-header">Secret Net Studio 8.8</p>
                            <p class="box-content-subheader">Инсталятор, документация.</p>
                        </div>
                    </div>
                </div>

                <div class="file-box-wrapper">
                    <div class="file-box" >
                        <div class="file-box-header">
                            <span>12 декабря 2022</span>
                            <div class="more-wrapper">
                                <button class="file-btn-more">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="12" cy="5" r="1" />
                                        <circle cx="12" cy="19" r="1" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="file-box-content-header">
                            <p class="box-content-header">Secret Net Studio 8.8</p>
                            <p class="box-content-subheader">Инсталятор, документация.</p>
                        </div>
                    </div>
                </div>

                <div class="file-box-wrapper">
                    <div class="file-box">
                        <div class="file-box-header">
                            <span>12 декабря 2022</span>
                            <div class="more-wrapper">
                                <button class="file-btn-more">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="12" cy="5" r="1" />
                                        <circle cx="12" cy="19" r="1" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="file-box-content-header">
                            <p class="box-content-header">Secret Net Studio 8.8</p>
                            <p class="box-content-subheader">Инсталятор, документация.</p>
                        </div>
                    </div>
                </div>

                <div class="file-box-wrapper">
                    <div class="file-box">
                        <div class="file-box-header">
                            <span>12 декабря 2022</span>
                            <div class="more-wrapper">
                                <button class="file-btn-more">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="12" cy="5" r="1" />
                                        <circle cx="12" cy="19" r="1" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="file-box-content-header">
                            <p class="box-content-header">Secret Net Studio 8.8</p>
                            <p class="box-content-subheader">Инсталятор, документация.</p>
                        </div>
                    </div>
                </div>

            </div>
          </div>

        </div>

      </div>
    </body>
</html>
