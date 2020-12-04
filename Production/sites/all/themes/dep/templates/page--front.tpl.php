<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<section class="topArea">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 text-left">
        <p class="social-links-top">
          <a href="https://www.facebook.com/Danny-Eaton-Plumbing-1340812065976813/" target="_blank"><img src="/sites/default/files/facebook_s.png"></a>
          <!--<a href="#" target="_blank"><img src="/sites/default/files/twitter_s.png"></a>
          <a href="#" target="_blank"><img src="/sites/default/files/google_plus.png"></a>-->
        </p>
      </div>
      <div class="col-sm-9 text-right">
        <p class="">Fully Licensed, Bonded & Insured <span class="sm-hide">|</span> <a href="tel:1336-399-8065"> (336) 399-8065</a></p>
      </div>
    </div>
  </div>
</section>
<section class="main-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php if ($logo): ?>
          <a class="logo navbar-btn " href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" width="80%" />
          </a>
        <?php endif; ?>
      </div>
      <div class="col-md-9 ">
        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
         <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse" id="navbar-collapse">
        <nav role="navigation "  >
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="slider"> 
  <?php if ($page['slider']): ?>          
          <?php print render($page['slider']); ?> 
         <?php endif; ?>
</section>
<section class="callouts">
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <a href="/Service-and-Repair" class="card ">
            <div class="text-center">
              <img src="/sites/default/files/service&repair.png">
               <h4>Service & Repair</h4>
               <p>Finding the right plumber doesn’t have to be a chore. We make our process simple and straightforward.</p>
             </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="/Residential" class="card">
              <div class="text-center">
              <img src="/sites/default/files/residential.png">
               <h4>Residential Plumbing</h4>
               <p>Our goal is the same as yours: to get you back to your normal routine with the least disruption possible & as fast as possible.</p>
             </div>
            </a>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="/Commercial" class="card">
              <div class="text-center">
              <img src="/sites/default/files/commercial.png">
               <h4>Commercial Plumbing</h4>
               <p>Danny Eaton Plumbing is known for our ability to work seamlessly with other contractors and project team leaders. 

</p>
             </div>
            </a>
            </a>
        </div>
      </div>
  </div>
</section>
<section class="service">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-center">
        <img src="/sites/default/files/NC-MAP.png" class="map-img" width="100%">
      </div>
      <div class="col-sm-6">
        <h3>Serving the Piedmont Triad Area</h3>
        <hr/>
        <p>Established in 1978, our technicians and installers have been serving the Triad and the surrounding areas for more than 36 years. Some of the Cities served: </p>
        <div class="row cities">
          <div class="col-xs-4 ">
            <ul>
              <li><i class="fa fa-check"></i> Greensboro</li>
              <li><i class="fa fa-check"></i> Winston-Salem</li>
              <li><i class="fa fa-check"></i> High Point</li>
              <li><i class="fa fa-check"></i> Burlington</li>
              <li><i class="fa fa-check"></i> Thomasville</li>
              <li><i class="fa fa-check"></i> Trinity</li>
            </ul>
          </div>
          <div class="col-xs-4">
            <ul>
              <li><i class="fa fa-check"></i> Asheboro</li>
              <li><i class="fa fa-check"></i> Kernersville</li>
              <li><i class="fa fa-check"></i> Lexington</li>
              <li><i class="fa fa-check"></i> Clemmons</li>
              <li><i class="fa fa-check"></i> Archdale</li>
              <li><i class="fa fa-check"></i> Eden</li>
            </ul>

          </div>
          <div class="col-xs-4">
             <ul>
              <li><i class="fa fa-check"></i> Reidsville</li>
              <li><i class="fa fa-check"></i> Graham</li>
              <li><i class="fa fa-check"></i> Mebane</li>
              <li><i class="fa fa-check"></i> Mount Airy</li>
              <li><i class="fa fa-check"></i> Summerfield</li>
              <li><i class="fa fa-check"></i> Midway</li>
            </ul>
          </div>
        </div>
        
        <div class="text-center">
          <a href="/About" class="btn btn-ghost red">Learn More About Us</a>
      </div>
    </div>
  </div>
</section>
<section class="testimonials-area">
  <div class="container">
    <div class="row">
  <div class="col-sm-12 ">
    <h2 class="text-center">Plumbing Video Camera Inspection</h2>
    <div class="space"></div>  
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-sm-offset-1">
    <img src="/sites/default/files/video-sewer.jpg" width="100%"/>
    
  </div>
  <div class="col-sm-4 text-center">
  <h2>Take a Closer Look</h2>
    <p>Danny Eaton Plumbing utilizes plumbing video camera inspection in our diagnosis of customers plumbing problems.</p>
    <p><b>Common Uses Are:</b></p>
    <p><i class="fa fa-check"></i> Retrieving Lost Items<br/>
    <i class="fa fa-check"></i> Inspecting Potential Homes<br/>
    <i class="fa fa-check"></i> Inspecting Septic Systems<br/>
    <i class="fa fa-check"></i> Remodeling Inspections<br/>
    And Much More!</p>
  </div>
 
</div>


  </div>
</section>
<section class="view-gallery-front">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 text-center">
      <h2>Take A Look At Our Past Projects</h2>
        <div style="padding-top:2em">
<a href="/gallery"><img src="/sites/default/files/view-our-gallery-button-large.png" class="front-btn-gal"></a>
</div>
    </div>
  </div>
</section>
<div class="main-container hide <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<section class="Contact-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-center">
        <h3>Contact Us Today!</h3>
      </div>
      <div class="col-sm-6 text-center">
        <div class="space"></div>
        <a href="/Contact" class="btn-ghost red spot">Contact Us</a>
      </div>
    </div>  
  </div>
</section>
<section class="prefooter">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php if ($page['pre_1']): ?>          
          <?php print render($page['pre_1']); ?> 
         <?php endif; ?>
      </div>
      <div class="col-sm-4">
        <?php if ($page['pre_2']): ?>          
          <?php print render($page['pre_2']); ?> 
          <?php endif; ?>
      </div>
      <div class="col-sm-4">
        <?php if ($page['pre_3']): ?>          
          <?php print render($page['pre_3']); ?> 
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<footer>
<div class="container text-center">
  <?php if (!empty($page['footer'])): ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>  
</div>
</footer>

