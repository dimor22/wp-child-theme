<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- [ Content -->

<section class="slider">

  <!-- [ Main Menu -->

  <section class="main-menu big-wrapper">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><strong>AVENUE</strong> FASHION</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search...">
            </div>
            <button type="submit" class=""><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>

          <ul class="nav navbar-nav">
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENS <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <div class="row">
                  <div class="col-xs-6">
                    <li class="submenu-title">casuals</li>
                    <li><a href="#">Jackets</a></li>
                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                    <li><a href="#">Polo Shirts</a></li>
                    <li><a href="#">Sportswear</a></li>
                    <li><a href="#">Trousers &amp; Chinos</a></li>
                    <li><a href="#">T-Shirts</a></li>
                  </div>
                  <div class="col-xs-6">
                    <li class="submenu-title">formal</li>
                    <li><a href="#">Jackets</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Suits</a></li>
                    <li><a href="#">Trousers</a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <a href="" class="submenu-sale animated rollIn">
                      <p><strong>autumn sale!</strong></p> up to 50% off
                    </a>
                  </div>
                </div>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WOMENS <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <div class="row">
                  <div class="col-xs-6">
                    <li class="submenu-title">casuals</li>
                    <li><a href="#">Jackets</a></li>
                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                    <li><a href="#">Polo Shirts</a></li>
                    <li><a href="#">Sportswear</a></li>
                    <li><a href="#">Trousers &amp; Chinos</a></li>
                    <li><a href="#">T-Shirts</a></li>
                  </div>
                  <div class="col-xs-6">
                    <li class="submenu-title">formal</li>
                    <li><a href="#">Jackets</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Suits</a></li>
                    <li><a href="#">Trousers</a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <a href="" class="submenu-sale animated rollIn">
                      <p><strong>autumn sale!</strong></p> up to 50% off
                    </a>
                  </div>
                </div>
              </ul>
            </li>
            <li class=""><a href="#">THE BRAND <span class="sr-only">(current)</span></a></li>
            <li><a href="#">LOCAL STORES</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOOK BOOK <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <div class="row">
                  <div class="col-xs-6">
                    <li class="submenu-title">casuals</li>
                    <li><a href="#">Jackets</a></li>
                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                    <li><a href="#">Polo Shirts</a></li>
                    <li><a href="#">Sportswear</a></li>
                    <li><a href="#">Trousers &amp; Chinos</a></li>
                    <li><a href="#">T-Shirts</a></li>
                  </div>
                  <div class="col-xs-6">
                    <li class="submenu-title">formal</li>
                    <li><a href="#">Jackets</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Suits</a></li>
                    <li><a href="#">Trousers</a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <a href="" class="submenu-sale animated rollIn">
                      <p><strong>autumn sale!</strong></p> up to 50% off
                    </a>
                  </div>
                </div>
              </ul>
            </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </section>

  <!-- Main Menu ] -->

  <!-- [ CTA -->

  <div class="small-wrapper">
    <a href="" class="home-hero-btn">shop men's collection</a>
  </div>

  <!--  CTA ] -->

</section>

<section class="items">
  <div class="big-wrapper">
    <ul>
      <li><a href="">popular</a></li>
      <li><a href="">new arrivals</a></li>
      <li><a href="">best sellers</a></li>
      <li><a href="">special offers</a></li>
      <li><a href="">coming soon</a></li>
    </ul>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="item">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/item1.jpg';?>"/>
                <span class="price">$9.99</span>
                <div class="info">
                  <p class="title"><strong>
                    womens burnt orange casual tee $9.99
                  </strong></p>
                  <p class="description">
                    Classic casual t-shirt for women on the move. 100% cotton.
                  </p>
                  <p class="actions">
                    <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="item">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/item2.jpg';?>"/>
                <span class="price">$9.99</span>
                <div class="info">
                  <p class="title"><strong>
                    womens burnt orange casual tee $9.99
                  </strong></p>
                  <p class="description">
                    Classic casual t-shirt for women on the move. 100% cotton.
                  </p>
                  <p class="actions">
                    <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="item">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/item3.jpg';?>"/>
                <span class="price">$9.99</span>
                <div class="info">
                  <p class="title"><strong>
                    womens burnt orange casual tee $9.99
                  </strong></p>
                  <p class="description">
                    Classic casual t-shirt for women on the move. 100% cotton.
                  </p>
                  <p class="actions">
                    <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="row">
            <div class="col-xs-12">
              <div class="item">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/item4.jpg';?>"/>
                <span class="price">$9.99</span>
                <div class="info">
                  <p class="title"><strong>
                    womens burnt orange casual tee $9.99
                  </strong></p>
                  <p class="description">
                    Classic casual t-shirt for women on the move. 100% cotton.
                  </p>
                  <p class="actions">
                    <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="item">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/item5.jpg';?>"/>
                <span class="price">$9.99</span>
                <div class="info">
                  <p class="title"><strong>
                    womens burnt orange casual tee $9.99
                  </strong></p>
                  <p class="description">
                    Classic casual t-shirt for women on the move. 100% cotton.
                  </p>
                  <p class="actions">
                    <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="item">
                <img src="<?php echo get_theme_file_uri() . '/assets/images/item6.jpg';?>"/>
                <span class="price">$9.99</span>
                <div class="info">
                  <p class="title"><strong>
                    womens burnt orange casual tee $9.99
                  </strong></p>
                  <p class="description">
                    Classic casual t-shirt for women on the move. 100% cotton.
                  </p>
                  <p class="actions">
                    <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="lookbook">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="lookbook-item li1">
          <p class="big-font">
            men's
          </p>
          <p class="big-font thin">
            lookbook
          </p>
          <p class="desc">
            Lorem ipsum dolor sit amet eras facilisisconsectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui.Elementum metus facilisis ut phasellu.
          </p>
          <button type="button" name="button" class="big-btn">VIEW NOW</button>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="lookbook-item li2">
          <p class="big-font">
            women's
          </p>
          <p class="big-font thin">
            lookbook
          </p>
          <p class="desc">
            Lorem ipsum dolor sit amet eras facilisisconsectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui.Elementum metus facilisis ut phasellu.
          </p>
          <button type="button" name="button" class="big-btn">VIEW NOW</button>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="lookbook-item li3">
          <p class="big-font">
            your
          </p>
          <p class="big-font thin">
            lookbook
          </p>
          <p class="desc">
            Lorem ipsum dolor sit amet eras facilisisconsectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui.Elementum metus facilisis ut phasellu.
          </p>
          <button type="button" name="button" class="big-btn">VIEW NOW</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Content ] -->

<?php get_footer();
