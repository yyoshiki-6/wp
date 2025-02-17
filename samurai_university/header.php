<!-- header.php ここから -->
<!DOCTYPE html>

<head>
  <title>samurai university</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="samurai university" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/bootstrap.min.css" />
  <link href="<?php echo get_temple_directory_uri(); ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_temple_directory_uri(); ?>/styles/main_styles.css" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="super_container">
    <!-- ヘッダーここから -->
    <header class="header">
      <div class="header_container">
        <div class="">
          <nav class="navbar navbar-expand-lg">
            <div class="logo_container">
              <div class="logo_text">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                  <img src="<?php echo get_temple_directory_uri(); ?>/images/logo_big.png" />
                  <span>Samurai University</span>
                </a>
              </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars toggle-menu" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav flex-row ml-md-auto d-md-flex main_nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url(); ?>/category/news">
                    NEWS
                    <p>ニュース</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url(); ?>category/event">
                    EVENT
                    <p>イベント</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url(); ?>/course">
                    COURSES
                    <p>コース</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url(); ?>/about_us">
                    ABOUT US
                    <p>侍大学について</p>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- ヘッダー ここまで -->
    <!-- header.php ここまで -->