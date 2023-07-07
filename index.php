
<?php get_header(); ?>
    <!-- start of client section -->
    <div class="client-section" id="client-section">
      <div class="client-texts">
        <h1 class="fw-300">
          Some of
          <strong class="tbold"
            >the clients I have <br />
            designed for</strong
          >
        </h1>
      </div>
      <div class="client-logo">
        <!-- <div class="logo-slide"> -->
        <div>
          <a href="https://www.airbnb.com/"
            ><img src="<?php echo get_theme_file_uri('/img/Airbnb.png') ?>" alt="Airbnb Logo"
          /></a>
        </div>
        <div>
          <a href="https://www.google.com/"
            ><img src="<?php echo get_theme_file_uri('/img/Google.png') ?>" alt="Google logo"
          /></a>
        </div>
        <div>
          <a href="https://www.microsoft.com/id-id/"
            ><img src="<?php echo get_theme_file_uri('/img/Microsoft.png') ?>" alt="Microsoft logo"
          /></a>
        </div>
        <div>
          <a href="https://www.fedex.com/en-us/home.html"
            ><img src="<?php echo get_theme_file_uri('/img/FedEx.png') ?>" alt="Fedex logo"
          /></a>
        </div>
        <!-- </div> -->
      </div>
    </div>
    <!-- end of client section -->

    <!--start of work section  -->

    <div class="work-section" id="work">
      <div class="work-header">
        <h1 class="fw-300">Selected <strong class="tbold">Works</strong></h1>
      </div>
      <!-- work 1 start -->
      <div class="work-list">
        <div class="work-img">
          <img src="<?php echo get_theme_file_uri('/img/work-1.png') ?>" alt="image of first work " />
        </div>
        <div class="work-desc">
          <div class="work-desc--header">
            <h5>REAL ESTATE TEMPLATE</h5>
          </div>
          <div class="work-desc--content">
            <h3 class="fw-300">
              Lorem ipsum dolor sit amet, consectetur
              <strong class="tbold"
                >adipiscing elit. Ultrices lorem non feugiat egestas
                amet.</strong
              >
            </h3>
          </div>
          <div class="work-desc--cat">
            <p>Website Design</p>
          </div>
          <div class="work-desc--view">
            <a href="#" class="btn"
              ><span>VIEW WORK</span>
              <img src="<?php echo get_theme_file_uri('/img/right-arrow.png') ?>" alt="arrow pointing to the right"
            /></a>
          </div>
        </div>
      </div>
      <!-- work 1 end -->
      <!-- work 2 start -->
      <div class="work-list m-9">
        <div class="work-desc">
          <div class="work-desc--header">
            <h5>PLANT IDENTIFICATION APP</h5>
          </div>
          <div class="work-desc--content">
            <h3 class="fw-300">
              Lorem ipsum dolor sit amet, consectetur
              <strong class="tbold"
                >adipiscing elit. Ultrices lorem non feugiat egestas
                amet.</strong
              >
            </h3>
          </div>
          <div class="work-desc--cat">
            <p>Mobile App</p>
          </div>
          <div class="work-desc--view">
            <a href="#" class="btn"
              ><span>VIEW WORK</span>
              <img src="<?php echo get_theme_file_uri('/img/right-arrow.png') ?>" alt="arrow pointing to the right"
            /></a>
          </div>
        </div>
        <div class="work-img">
          <img src="<?php echo get_theme_file_uri('/img/work-2.png') ?>" alt="image of second work " />
        </div>
      </div>
      <!-- work 2 end -->
      <!-- work 3 start -->
      <div class="work-list m-9">
        <div class="work-img">
          <img src="<?php echo get_theme_file_uri('/img/work-3.png') ?>" alt="image of third work " />
        </div>
        <div class="work-desc">
          <div class="work-desc--header">
            <h5>SMART HOME APP</h5>
          </div>
          <div class="work-desc--content">
            <h3 class="fw-300">
              Lorem ipsum dolor sit amet, consectetur
              <strong class="tbold"
                >adipiscing elit. Ultrices lorem non feugiat egestas
                amet.</strong
              >
            </h3>
          </div>
          <div class="work-desc--cat">
            <p>Mobile App</p>
          </div>
          <div class="work-desc--view">
            <a href="#" class="btn"
              ><span>VIEW WORK</span>
              <img src="<?php echo get_theme_file_uri('/img/right-arrow.png') ?>" alt="arrow pointing to the right"
            /></a>
          </div>
        </div>
      </div>
      <!-- work 3 end -->
      <!-- work 4 start -->
      <div class="work-list m-9">
        <div class="work-desc">
          <div class="work-desc--header">
            <h5>LOGO ANIMATION</h5>
          </div>
          <div class="work-desc--content">
            <h3 class="fw-300">
              Lorem ipsum dolor sit amet, consectetur
              <strong class="tbold"
                >adipiscing elit. Ultrices lorem non feugiat egestas
                amet.</strong
              >
            </h3>
          </div>
          <div class="work-desc--cat">
            <p>Animation</p>
          </div>
          <div class="work-desc--view">
            <a href="#" class="btn"
              ><span>VIEW WORK</span>
              <img src="<?php echo get_theme_file_uri('/img/right-arrow.png') ?>" alt="arrow pointing to the right"
            /></a>
          </div>
        </div>
        <div class="work-img">
          <img src="<?php echo get_theme_file_uri('/img/work-4.png') ?>" alt="image of fourth work " />
        </div>
      </div>
      <!-- work 4 end -->
    </div>
    <!--end of work section  -->

    <!-- start of about me section -->
    <div class="about-section" id="about">
      <div class="about-text">
        <div class="about-text--header">
          <h4>A BIT ABOUT ME</h4>
        </div>
        <div class="about-text--content">
          <h3>
            I am a UI/UX designer who is passionate about creating
            <strong
              >beautiful and joyful digital experiences. Besides design, I love
              music, games and travelling.</strong
            >
          </h3>
        </div>
      </div>
      <div class="about-img">
        <img
          src="<?php echo get_theme_file_uri('/img/Horizontal.png') ?>"
          alt="first image playing game, second image music studio, third hiking image"
        />
      </div>
    </div>
    <!-- end of about me section -->

<?php get_footer(); ?>