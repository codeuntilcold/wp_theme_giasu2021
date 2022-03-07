<?php get_header(); ?>

<!-- Page Header Start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Blog</h2>
      </div>
      <div class="col-12">
        <a href="">Trang chủ</a>
        <a href="">Blog</a>
      </div>
    </div>
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
  <path fill="#FFC074" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,186.7C960,192,1200,160,1320,144L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
  </path>
</svg>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="blog">
  <div class="container">
    <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
      <p>Archive</p>
      <h2><?php single_cat_title('Chuyên mục: '); ?></h2>
    </div>

    <div class="row blog-page">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
            <div class="blog-item">

              <!-- <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div> -->
              <div class="blog-text">
                <h2>
                  <?php the_title(); ?>
                </h2>
                <div class="blog-meta">
                  <p><i class="far fa-list-alt"></i>
                    <!-- <?php the_category(); ?> -->
                  </p>
                  <p><i class="far fa-calendar-alt"></i>
                    <?php the_date(); ?>
                  </p>
                  <p><i class="far fa-comments"></i>
                    <!-- <?php the_comment(); ?> -->
                  </p>
                </div>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <a class="btn" href="<?php the_permalink(); ?>">Đọc thêm <i class="fa fa-angle-right"></i></a>
              </div>

            </div>
          </div>

      <?php endwhile;
      endif; ?>

    </div>



    <div class="row">
      <div class="col-12">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Blog End -->

<?php get_footer(); ?>