<?php
	include '..\Controller\ProduitController.php';
	$produitC=new ProduitController();
	$listeProduit=$produitC->afficherproduit(); 
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="On Top of the World, financial success, financial success, Sample Product">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>E-wear</title>
    <link rel="stylesheet" href="Front/nicepage.css" media="screen">
<link rel="stylesheet" href="Front/home.css" media="screen">
    <script class="u-script" type="text/javascript" src="Front/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="Front/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i
">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org
",
		"@type": "Organization",
		"name": "",
		"logo": "images/277407930_493856805544939_7371162813423727908_n.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-8fd7"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Front/index.html" class="u-image u-logo u-image-1" data-image-width="5" data-image-height="5">
          <img src="Front/images/277407930_493856805544939_7371162813423727908_n.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink
" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink
" xmlns="http://www.w3.org/2000/svg
"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Front/index.html" style="padding: 44px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 44px 20px;">Offers</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Front/Contact.html" style="padding: 44px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Front/index.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Offers</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Front/Contact.html">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="https://nicepage.com/c/contact-form-html-templates
" class="u-border-2 u-border-black u-btn u-btn-round u-button-style u-hover-black u-none u-radius-50 u-text-hover-white u-btn-1">login</a><!--shopping_cart-->
<div class="hero-wrap hero-bread" style="background-image: url('Front/images/p9.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Produit</h1>
          </div>
        </div>
      </div>
    </div>
 <br><br><br>
 <div class="container">
 <div class="card-group">
 <?php
				foreach($listeProduit as $produit){
			?>
 
 <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit['nom']; ?></h5>
    <p class="card-text"><?php echo $produit['prix']; ?>.</p>
    <img class="profile-user-img img-fluid img-circle" src="<?php echo $produit['image']; ?>"<?php echo $produit['image']; ?>" alt="User profile picture">

  </div>
</div> <p style="color:white">***********************</p><br>

<?php
				}
			?>
      </div>
      </div>
</br><br><br>




<footer class="u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-4c85"><div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-100 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-28 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1"><!--position-->
                  <div data-position="" class="u-position"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-1"><!--block_header_content-->about us<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->
                          <br>Block content. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. <!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-12 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2"><!--position-->
                  <div data-position="" class="u-position u-position-2"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-3"><!--block_header_content--> Our Official Brands<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->
                          <br>gucci<br>zara<br>h&amp;m<br>pull &amp; bear<br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-valign-top u-container-layout-3"><!--position-->
                  <div data-position="" class="u-position u-position-3"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-5"><!--block_header_content-->
                          <span style="font-weight: 700;"></span>Quick Links<!--/block_header_content-->
                        </h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->
                          <br>Contact Us<br>Contribute<br>Privacy Policy<br>
                          <br><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-1"><img src="Front/images/145802.png" alt=""></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-2"><img src="Front/images/145812.png" alt=""></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fd86"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-fd86"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href=""><span class="u-icon u-social-icon u-social-youtube u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d23b"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d23b"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
          </a>
        </div>
        <p class="u-text u-text-7">
          <span style="font-size: 1.25rem;"> Copyright &amp;copy; 2022 All Rights Reserved by</span>&nbsp;<span style="font-size: 1.25rem;"> e-wear</span>&nbsp;&nbsp;
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>


</body>
</html>