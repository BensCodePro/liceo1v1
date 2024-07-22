<?php
/**
 * Template Name: Elements Page
 */
?>

<?php get_header(); ?>


<!-- inner banner -->
<section class="inner-banner py-5">
    <style>
        .inner-banner {
            background-image: url(<?php if(get_theme_mod('AboutPageBannerBgImage') !='') {
                echo wp_get_attachment_url(get_theme_mod('AboutPageBannerBgImage'));
            }

            if(wp_get_attachment_url(get_theme_mod('AboutPageBannerBgImage'))=='') {
                echo get_template_directory_uri()."/assets/images/banner3.jpg";
            }

            ?>);
        }
    </style>
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container AboutPageBanner">
            <?php $ElementsPageMainTitleStatus = get_theme_mod( "ElementsPageMainTitleRequired","1")?>
            <?php if( $ElementsPageMainTitleStatus==1 ){?>
            <h4 class="inner-text-title font-weight-bold pt-5">
                <?php echo get_theme_mod( "ElementsBannerMainTitle" );if(get_theme_mod( "ElementsBannerMainTitle" )==''){echo 'Shortcodes';}?></h4>
            <?php }?>

            <?php $BreadcrumbsStatus = get_theme_mod( "BreadcrumbsRequired","1")?>
            <?php if( $BreadcrumbsStatus==1 ){?>
            <ul class="breadcrumbs-custom-path AllBreadcrumbs">
                <?php get_breadcrumb(); ?>
            </ul>
            <?php }?>
        </div>
    </div>
</section>
<!-- //inner banner -->


 <!-- typography -->
 <div class="typo-w3 py-5">
        <div class="container py-md-5 py-4">
            <div class="typo-wthree">
                <!-- Offcanvas -->
                <h4 class="pb-2">Offcanvas</h4>
                <div class="bd-example bd-example-offcanvas p-0 overflow-hidden">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas"
                        aria-labelledby="offcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            Content for the offcanvas goes here. You can place just about any Bootstrap component or
                            custom elements here.
                        </div>
                    </div>
                </div>
                <figure class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"offcanvas offcanvas-start"</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">"-1"</span> <span class="na">id</span><span class="o">=</span><span class="s">"offcanvas"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"offcanvasLabel"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"offcanvas-header"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">class</span><span class="o">=</span><span class="s">"offcanvas-title"</span> <span class="na">id</span><span class="o">=</span><span class="s">"offcanvasLabel"</span><span class="p">&gt;</span>Offcanvas<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn-close text-reset"</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">"offcanvas"</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">"Close"</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"offcanvas-body"</span><span class="p">&gt;</span>
        Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
                </figure>

                <!-- Offcanvas -->
                <h4 class="pt-5 pb-2">Live demo</h4>
                <div class="bd-example">
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        Link with href
                    </a>
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        Button with data-bs-target
                    </button>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                Some text as placeholder. In real life you can have the elements you have chosen. Like,
                                text, images, lists, etc.
                            </div>
                            <div class="dropdown mt-3">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;offcanvas&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#offcanvasExample&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">&#34;offcanvasExample&#34;</span><span class="p">&gt;</span>
  Link with href
<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;offcanvas&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#offcanvasExample&#34;</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">&#34;offcanvasExample&#34;</span><span class="p">&gt;</span>
  Button with data-bs-target
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;offcanvas offcanvas-start&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;-1&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;offcanvasExample&#34;</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">&#34;offcanvasExampleLabel&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;offcanvas-header&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;offcanvas-title&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;offcanvasExampleLabel&#34;</span><span class="p">&gt;</span>Offcanvas<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close text-reset&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;offcanvas&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;offcanvas-body&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown mt-3&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary dropdown-toggle&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;dropdownMenuButton&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span><span class="p">&gt;</span>
        Dropdown button
      <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu&#34;</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">&#34;dropdownMenuButton&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Another action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
                </div>
                <div class="bd-example">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top offcanvas</button>

                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                        aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasTopLabel">Offcanvas top</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            ...
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;offcanvas&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#offcanvasTop&#34;</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">&#34;offcanvasTop&#34;</span><span class="p">&gt;</span>Toggle top offcanvas<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
        
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;offcanvas offcanvas-top&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;-1&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;offcanvasTop&#34;</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">&#34;offcanvasTopLabel&#34;</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;offcanvas-header&#34;</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;offcanvasTopLabel&#34;</span><span class="p">&gt;</span>Offcanvas top<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close text-reset&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;offcanvas&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
            <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;offcanvas-body&#34;</span><span class="p">&gt;</span>
            ...
            <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
                </div>

                <!-- Offcanvas -->
                <h4 class="pt-5 pb-3">Accordion</h4>
                <div class="bd-example">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion"</span> <span class="na">id</span><span class="o">=</span><span class="s">"accordionExample"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-item"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">h2</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-header"</span> <span class="na">id</span><span class="o">=</span><span class="s">"headingOne"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-button"</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"collapse"</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">"#collapseOne"</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">"true"</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">"collapseOne"</span><span class="p">&gt;</span>
          Accordion Item #1
        <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"collapseOne"</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-collapse collapse show"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"headingOne"</span> <span class="na">data-bs-parent</span><span class="o">=</span><span class="s">"#accordionExample"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-body"</span><span class="p">&gt;</span>
          <span class="p">&lt;</span><span class="nt">strong</span><span class="p">&gt;</span>This is the first item's accordion body.<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <span class="p">&lt;</span><span class="nt">code</span><span class="p">&gt;</span>.accordion-body<span class="p">&lt;/</span><span class="nt">code</span><span class="p">&gt;</span>, though the transition does limit overflow.
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-item"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">h2</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-header"</span> <span class="na">id</span><span class="o">=</span><span class="s">"headingTwo"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-button collapsed"</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"collapse"</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">"#collapseTwo"</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">"false"</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">"collapseTwo"</span><span class="p">&gt;</span>
          Accordion Item #2
        <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"collapseTwo"</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-collapse collapse"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"headingTwo"</span> <span class="na">data-bs-parent</span><span class="o">=</span><span class="s">"#accordionExample"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-body"</span><span class="p">&gt;</span>
          <span class="p">&lt;</span><span class="nt">strong</span><span class="p">&gt;</span>This is the second item's accordion body.<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <span class="p">&lt;</span><span class="nt">code</span><span class="p">&gt;</span>.accordion-body<span class="p">&lt;/</span><span class="nt">code</span><span class="p">&gt;</span>, though the transition does limit overflow.
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-item"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">h2</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-header"</span> <span class="na">id</span><span class="o">=</span><span class="s">"headingThree"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-button collapsed"</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"collapse"</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">"#collapseThree"</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">"false"</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">"collapseThree"</span><span class="p">&gt;</span>
          Accordion Item #3
        <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"collapseThree"</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-collapse collapse"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"headingThree"</span> <span class="na">data-bs-parent</span><span class="o">=</span><span class="s">"#accordionExample"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"accordion-body"</span><span class="p">&gt;</span>
          <span class="p">&lt;</span><span class="nt">strong</span><span class="p">&gt;</span>This is the third item's accordion body.<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <span class="p">&lt;</span><span class="nt">code</span><span class="p">&gt;</span>.accordion-body<span class="p">&lt;/</span><span class="nt">code</span><span class="p">&gt;</span>, though the transition does limit overflow.
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
                </div>


                <!-- forms -->
                <h4 class="pt-4 mt-sm-5 mt-3">Forms</h4>
                <div class="bd-example">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleInputEmail1"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Email address<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"email"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleInputEmail1"</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">"emailHelp"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"emailHelp"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-text"</span><span class="p">&gt;</span>We'll never share your email with anyone else.<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleInputPassword1"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"password"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleInputPassword1"</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3 form-check"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"checkbox"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-check-input"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleCheck1"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-check-label"</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleCheck1"</span><span class="p">&gt;</span>Check me out<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"submit"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-primary"</span><span class="p">&gt;</span>Submit<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre>
                </div>
                <h5 class="pt-4 pb-2">Sizing</h5>
                <div class="bd-example">
                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"
                        aria-label=".form-control-lg example">
                    <input class="form-control" type="text" placeholder="Default input"
                        aria-label="default input example">
                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                        aria-label=".form-control-sm example">
                </div>
                <div class="highlight">
                    <pre
                        class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control form-control-lg"</span> <span class="na">type</span><span class="o">=</span><span class="s">"text"</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">".form-control-lg"</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">".form-control-lg example"</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">type</span><span class="o">=</span><span class="s">"text"</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">"Default input"</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">"default input example"</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control form-control-sm"</span> <span class="na">type</span><span class="o">=</span><span class="s">"text"</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">".form-control-sm"</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">".form-control-sm example"</span><span class="p">&gt;</span></code></pre>
                </div>

                <h5 class="pt-4 pb-2">Readonly plain text</h5>
                <div class="bd-example">
                    <form class="row g-3">
                        <div class="col-auto">
                            <label for="staticEmail2" class="visually-hidden">Email</label>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2"
                                value="email@example.com">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2" class="visually-hidden">Password</label>
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                        </div>
                    </form>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">"row g-3"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col-auto"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"staticEmail2"</span> <span class="na">class</span><span class="o">=</span><span class="s">"visually-hidden"</span><span class="p">&gt;</span>Email<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"text"</span> <span class="na">readonly</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control-plaintext"</span> <span class="na">id</span><span class="o">=</span><span class="s">"staticEmail2"</span> <span class="na">value</span><span class="o">=</span><span class="s">"email@example.com"</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col-auto"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"inputPassword2"</span> <span class="na">class</span><span class="o">=</span><span class="s">"visually-hidden"</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"password"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">id</span><span class="o">=</span><span class="s">"inputPassword2"</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">"Password"</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col-auto"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"submit"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-primary mb-3"</span><span class="p">&gt;</span>Confirm identity<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre>
                </div>

                <h5 class="pt-4 pb-2">File input</h5>
                <div class="bd-example">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                        <input class="form-control" type="file" id="formFileDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Small file input example</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div>
                        <label for="formFileLg" class="form-label">Large file input example</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"formFile"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Default file input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">type</span><span class="o">=</span><span class="s">"file"</span> <span class="na">id</span><span class="o">=</span><span class="s">"formFile"</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"formFileMultiple"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Multiple files input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">type</span><span class="o">=</span><span class="s">"file"</span> <span class="na">id</span><span class="o">=</span><span class="s">"formFileMultiple"</span> <span class="na">multiple</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"formFileDisabled"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Disabled file input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">type</span><span class="o">=</span><span class="s">"file"</span> <span class="na">id</span><span class="o">=</span><span class="s">"formFileDisabled"</span> <span class="na">disabled</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"formFileSm"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Small file input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control form-control-sm"</span> <span class="na">id</span><span class="o">=</span><span class="s">"formFileSm"</span> <span class="na">type</span><span class="o">=</span><span class="s">"file"</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"formFileLg"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Large file input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control form-control-lg"</span> <span class="na">id</span><span class="o">=</span><span class="s">"formFileLg"</span> <span class="na">type</span><span class="o">=</span><span class="s">"file"</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
                </div>

                <h5 class="pt-4 pb-2">Color</h5>
                <div class="bd-example">
                    <label for="exampleColorInput" class="form-label">Color picker</label>
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c"
                        title="Choose your color">
                </div>
                <div class="highlight">
                    <pre
                        class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleColorInput"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Color picker<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"color"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control form-control-color"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleColorInput"</span> <span class="na">value</span><span class="o">=</span><span class="s">"#563d7c"</span> <span class="na">title</span><span class="o">=</span><span class="s">"Choose your color"</span><span class="p">&gt;</span></code></pre>
                </div>
                <!-- //forms -->

                <!-- breadcrumb -->
                <h4 class="pt-md-4 pb-2">Breadcrumb</h4>
                <p>Indicate the current page’s location within a navigational hierarchy that automatically adds
                    separators via CSS.</p>
                <div class="bd-example">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">nav</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">"breadcrumb"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">ol</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">"page"</span><span class="p">&gt;</span>Home<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">ol</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span>
  
  <span class="p">&lt;</span><span class="nt">nav</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">"breadcrumb"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">ol</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb-item"</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Home<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">"page"</span><span class="p">&gt;</span>Library<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">ol</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span>
  
  <span class="p">&lt;</span><span class="nt">nav</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">"breadcrumb"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">ol</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb-item"</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Home<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb-item"</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Library<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">"page"</span><span class="p">&gt;</span>Data<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">ol</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span></code></pre>
                </div>
                <!-- //breadcrumb -->
                <!-- dividers -->
                <h5 class="pt-4 pb-2">Dividers</h5>
                <div class="bd-example">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">nav</span> <span class="na">style</span><span class="o">=</span><span class="s">"--bs-breadcrumb-divider: '&gt;';"</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">"breadcrumb"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">ol</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb-item"</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Home<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">"page"</span><span class="p">&gt;</span>Library<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">ol</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span></code></pre>
                </div>
                <!-- //dividers -->
                <!-- cards -->
                <h4 class="pt-5 pb-3">Cards</h4>
                <div class="bd-example">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php if(get_theme_mod('ElementsPageCardImage')!=''){ echo wp_get_attachment_url( get_theme_mod('ElementsPageCardImage') );} if(wp_get_attachment_url(get_theme_mod('ElementsPageCardImage'))=='') { echo  get_template_directory_uri()."/assets/images/card.jpg";  }?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"card"</span> <span class="na">style</span><span class="o">=</span><span class="s">"width: 18rem;"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">"images/card.jpg"</span> <span class="na">class</span><span class="o">=</span><span class="s">"card-img-top"</span> <span class="na">alt</span><span class="o">=</span><span class="s">"..."</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"card-body"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">class</span><span class="o">=</span><span class="s">"card-title"</span><span class="p">&gt;</span>Card title<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">"card-text"</span><span class="p">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-primary"</span><span class="p">&gt;</span>Go somewhere<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
                </div>
                <!-- //cards -->

                <!-- blockquotes -->
                <h4 class="pt-5 pb-2">Blockquotes with Naming a source</h4>
                <div class="bd-example">
                    <figure>
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">figure</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">blockquote</span> <span class="na">class</span><span class="o">=</span><span class="s">"blockquote"</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>A well-known quote, contained in a blockquote element.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">blockquote</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">figcaption</span> <span class="na">class</span><span class="o">=</span><span class="s">"blockquote-footer"</span><span class="p">&gt;</span>
      Someone famous in <span class="p">&lt;</span><span class="nt">cite</span> <span class="na">title</span><span class="o">=</span><span class="s">"Source Title"</span><span class="p">&gt;</span>Source Title<span class="p">&lt;/</span><span class="nt">cite</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">figcaption</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">figure</span><span class="p">&gt;</span></code></pre>
                </div>
                <!-- //blockquotes -->

                <!-- buttons -->
                <h4 class="pt-5 pb-2">Buttons</h4>
                <div class="bd-example">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>

                    <button type="button" class="btn btn-link">Link</button>
                </div>
                <div class="highlight">
                    <pre
                        class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-primary"</span><span class="p">&gt;</span>Primary<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-secondary"</span><span class="p">&gt;</span>Secondary<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-success"</span><span class="p">&gt;</span>Success<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-danger"</span><span class="p">&gt;</span>Danger<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-warning"</span><span class="p">&gt;</span>Warning<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-info"</span><span class="p">&gt;</span>Info<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-light"</span><span class="p">&gt;</span>Light<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-dark"</span><span class="p">&gt;</span>Dark<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-link"</span><span class="p">&gt;</span>Link<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre>
                </div>
                <!-- //buttons -->

                <!-- flex -->
                <h4 class="pt-5 pb-2">Flex Properties</h4>
                <h5 class="pt-4">d-flex</h5>
                <div class="bd-example">
                    <div class="d-flex p-2 bg-flex mb-1">I'm a flexbox container!</div>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex p-2 bd-highlight"</span><span class="nt">&gt;</span>I'm a flexbox container!<span class="nt">&lt;/div&gt;</span></code></pre>
                </figure>
                <h5 class="pt-4">d-inline-flex</h5>
                <div class="bd-example">
                    <div class="d-inline-flex p-2 bg-flex mb-1">I'm an inline flexbox container!</div>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-inline-flex p-2 bd-highlight"</span><span class="nt">&gt;</span>I'm an inline flexbox container!<span class="nt">&lt;/div&gt;</span></code></pre>
                </figure>
                <!-- Flex Direction -->
                <h4 class="pt-5 pb-2">Flex Direction</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="pt-4">flex-row</h5>
                        <div class="bd-example">
                            <div class="d-flex flex-row bg-flex">
                                <div class="p-2 bg-flex bg-flex-item">Flex item 1</div>
                                <div class="p-2 bg-flex bg-flex-item">Flex item 2</div>
                                <div class="p-2 bg-flex bg-flex-item">Flex item 3</div>
                            </div>
                        </div>
                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-row bd-highlight mb-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 bd-highlight"</span><span class="nt">&gt;</span>Flex item 1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 bd-highlight"</span><span class="nt">&gt;</span>Flex item 2<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 bd-highlight"</span><span class="nt">&gt;</span>Flex item 3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="pt-4">flex-row-reverse</h5>
                        <div class="bd-example">
                            <div class="d-flex flex-row-reverse bg-flex">
                                <div class="p-2 bg-flex bg-flex-item">Flex item 1</div>
                                <div class="p-2 bg-flex bg-flex-item">Flex item 2</div>
                                <div class="p-2 bg-flex bg-flex-item">Flex item 3</div>
                            </div>
                        </div>
                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-row-reverse bd-highlight"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 bd-highlight"</span><span class="nt">&gt;</span>Flex item 1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 bd-highlight"</span><span class="nt">&gt;</span>Flex item 2<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 bd-highlight"</span><span class="nt">&gt;</span>Flex item 3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                        </figure>
                    </div>
                </div>
                <!-- Justify Content -->
                <h4 class="pt-5 pb-3">Justify Content</h4>
                <div class="bd-example">
                    <div class="d-flex justify-content-start bg-flex mb-3">
                        <div class="p-2 bg-flex bg-flex-item">Flex item 1</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 2</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 3</div>
                    </div>
                    <div class="d-flex justify-content-end bg-flex mb-3">
                        <div class="p-2 bg-flex bg-flex-item">Flex item 1</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 2</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 3</div>
                    </div>
                    <div class="d-flex justify-content-center bg-flex mb-3">
                        <div class="p-2 bg-flex bg-flex-item">Flex item 1</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 2</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 3</div>
                    </div>
                    <div class="d-flex justify-content-between bg-flex mb-3">
                        <div class="p-2 bg-flex bg-flex-item">Flex item 1</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 2</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 3</div>
                    </div>
                    <div class="d-flex justify-content-around bg-flex">
                        <div class="p-2 bg-flex bg-flex-item">Flex item 1</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 2</div>
                        <div class="p-2 bg-flex bg-flex-item">Flex item 3</div>
                    </div>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-start"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-end"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-center"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-between"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-around"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>
                </figure>
                <!-- //flex -->
                <!-- badges -->
                <h4 class="mt-5 mb-3">Badges</h4>
                <div class="bd-example">
                    <h1>Example heading <span class="badge bg-secondary">New</span></h1>
                    <h2>Example heading <span class="badge bg-secondary">New</span></h2>
                    <h3>Example heading <span class="badge bg-secondary">New</span></h3>
                    <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                    <h5 class="texti">Example heading <span class="badge bg-secondary">New</span></h5>
                    <h6>Example heading <span class="badge bg-secondary">New</span></h6>
                </div>
                <div class="highlight">
                    <pre
                        class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">h1</span><span class="p">&gt;</span>Example heading <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">"badge bg-secondary"</span><span class="p">&gt;</span>New<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h2</span><span class="p">&gt;</span>Example heading <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">"badge bg-secondary"</span><span class="p">&gt;</span>New<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h3</span><span class="p">&gt;</span>Example heading <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">"badge bg-secondary"</span><span class="p">&gt;</span>New<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">h3</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h4</span><span class="p">&gt;</span>Example heading <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">"badge bg-secondary"</span><span class="p">&gt;</span>New<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>Example heading <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">"badge bg-secondary"</span><span class="p">&gt;</span>New<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h6</span><span class="p">&gt;</span>Example heading <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">"badge bg-secondary"</span><span class="p">&gt;</span>New<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">h6</span><span class="p">&gt;</span></code></pre>
                </div>
                <!-- //badges -->
                <!-- lists -->
                <h4 class="mt-5 mb-3">Lists</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="pt-4 pb-3">List Group</h5>
                        <div class="bd-example">
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="pt-4 pb-3">Active items</h5>
                        <div class="bd-example">
                            <ul class="list-group">
                                <li class="list-group-item active">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="pt-4 pb-3">Flush</h5>
                        <div class="bd-example">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>
                        </figure>
                    </div>
                    <div class="col-lg-6 mt-md-0 mt-4">
                        <h5 class="pt-4 pb-3">With Badges</h5>
                        <div class="bd-example">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge badge-primary badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                        <figure class="highlight">
                            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
    Cras justo odio
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
    Dapibus ac facilisis in
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
    Morbi leo risus
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre>
                        </figure>
                    </div>
                </div>
                <!-- //lists -->
                <!-- tables -->
                <h4 class="pt-4 pb-3 mt-sm-5 mt-3">Tables</h4>
                <div class="bd-example">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>
                </figure>
                <h5 class="pt-4 pb-3">Striped rows</h5>
                <div class="bd-example">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre>
                </figure>
                <!-- //tables -->

                <!-- Modal -->
                <h4 class="pt-4 mt-sm-5 mt-3">Modals</h4>
                <h5 class="pt-3 pb-3">Live demo</h5>
                <div class="bd-example">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="c">&lt;!-- Button trigger modal --&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-primary"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"modal"</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">"#exampleModal"</span><span class="p">&gt;</span>
    Launch demo modal
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>

<span class="c">&lt;!-- Modal --&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"modal fade"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleModal"</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">"-1"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"exampleModalLabel"</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">"true"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"modal-dialog"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"modal-content"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"modal-header"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">class</span><span class="o">=</span><span class="s">"modal-title"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleModalLabel"</span><span class="p">&gt;</span>Modal title<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn-close"</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">"modal"</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">"Close"</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"modal-body"</span><span class="p">&gt;</span>
        ...
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"modal-footer"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">"modal"</span><span class="p">&gt;</span>Close<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-primary"</span><span class="p">&gt;</span>Save changes<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre>
                </div>

                <h4 class="mt-4 mb-2" id="vertically-centered">Vertically centered</h4>
                <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.
                </p>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>This is a vertically centered modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1"
                    aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>This is some placeholder content to show a vertically centered modal. We've added
                                    some extra copy here to show how vertically centering the modal works when combined
                                    with scrollable modals. We also use some repeated line breaks to quickly extend the
                                    height of the content, thereby triggering the scrolling. When content becomes longer
                                    than the prefedined max-height of modal, content will be cropped and scrollable
                                    within the modal.</p>
                                <br><br><br><br><br><br><br><br><br><br>
                                <p>Just like that.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-example">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">
                        Vertically centered modal
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenteredScrollable">
                        Vertically centered scrollable modal
                    </button>
                </div>
                <div class="highlight">
                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="c">&lt;!-- Vertically centered modal --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;modal-dialog modal-dialog-centered&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  
  <span class="c">&lt;!-- Vertically centered scrollable modal --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;modal-dialog modal-dialog-centered modal-dialog-scrollable&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  </code></pre>
                </div>
                <!-- //models -->

            </div>
        </div>
    </div>
    <!-- //typography -->





<?php global $wp_customize;
    if ( isset( $wp_customize ) ) { ?>

<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- //move top -->

<!-- /counter-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/counter.js"></script>
<!-- //counter-->

<!-- theme switch js (light and dark)-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/theme-change.js"></script>
<!-- //theme switch js (light and dark)-->

<!-- MENU-JS -->
<script>
    jQuery(window).on("scroll", function () {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 80) {
            jQuery("#site-header").addClass("nav-fixed");
        } else {
            jQuery("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    jQuery(".navbar-toggler").on("click", function () {
        jQuery("header").toggleClass("active");
    });
    jQuery(document).on("ready", function () {
        if (jQuery(window).width() > 991) {
            jQuery("header").removeClass("active");
        }
        jQuery(window).on("resize", function () {
            if (jQuery(window).width() > 991) {
                jQuery("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    jQuery(function () {
        jQuery('.navbar-toggler').click(function () {
            jQuery('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!-- bootstrap -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<!-- //bootstrap -->
<!-- //Js scripts -->

<?php }

get_footer(); ?>