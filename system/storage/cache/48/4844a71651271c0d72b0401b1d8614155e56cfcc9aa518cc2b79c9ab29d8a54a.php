<?php

/* OPC010004/template/common/header.twig */
class __TwigTemplate_5872940bc335ab7e93263e73cbd7eaf8e5678f908aab2dbe3a391d78f68ed0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600\" rel=\"stylesheet\"> 
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/";
        // line 25
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 28
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/caprica/carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 29
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/caprica/custom.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 30
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/caprica/bootstrap.min.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 31
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/caprica/animate.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 32
        echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
        echo "/stylesheet/caprica/lightbox.css\" />


";
        // line 35
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 36
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
            echo (isset($context["mytemplate"]) ? $context["mytemplate"] : null);
            echo "/stylesheet/caprica/rtl.css\">
";
        }
        // line 38
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 40
            echo "<link href=\"style.href\" type=\"text/css\" rel=\"style.rel\" media=\"style.media\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 45
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 48
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "<script src=\"catalog/view/javascript/common.js\"></script>
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 52
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 55
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "<!-- Caprica www.capricathemes.com - Start -->
<script type=\"text/javascript\" src=\"catalog/view/javascript/lightbox/lightbox-2.6.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/tabs.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/custom.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/jstree.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/caprica.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/jquery.custom.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/jquery.formalize.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/jquery.elevatezoom.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/caprica/bootstrap-notify.min.js\"></script>  
<script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>

<!-- Caprica www.capricathemes.com - End -->

<script src=\"catalog/view/javascript/common.js\"></script>

</head>

";
        // line 76
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 77
            $context["layoutclass"] = "layout-3";
        } elseif ((        // line 78
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 79
            if ((isset($context["column_left"]) ? $context["column_left"] : null)) {
                // line 80
                $context["layoutclass"] = "layout-2 left-col";
            } elseif (            // line 81
(isset($context["column_right"]) ? $context["column_right"] : null)) {
                // line 82
                $context["layoutclass"] = "layout-2 right-col";
            }
        } else {
            // line 85
            $context["layoutclass"] = "layout-1";
        }
        // line 87
        echo "
<body class=\"";
        // line 88
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " ";
        echo " ";
        echo " ";
        echo (isset($context["layoutclass"]) ? $context["layoutclass"] : null);
        echo "\">
<nav id=\"top\">
  <div class=\"container\">
  <div class=\"row\">
   <div class=\"header_top_left\">";
        // line 92
        echo (isset($context["headerleft"]) ? $context["headerleft"] : null);
        echo "</div>
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        ";
        // line 96
        echo "         ";
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
          ";
        // line 97
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
        <li><a href=\"";
        // line 98
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 99
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
      </ul>
    </div>
\t</div>
  </div>
</nav>
<div class=\"header-container\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"header-center\">
      <div class=\"col-sm-4 header-logo\">
        <div id=\"logo\">";
        // line 110
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 111
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 112
        echo "</div>
      </div>
      <div class=\"col-sm-5 header-search\">";
        // line 114
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-sm-3 header-cart\">";
        // line 115
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
       <div class=\"dropdown myaccount\"><a href=\"";
        // line 116
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> 
       </a>
          <ul class=\"dropdown-menu dropdown-menu-right myaccount-menu\">
            ";
        // line 119
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 120
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 121
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 122
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 123
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 124
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 126
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 127
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 129
        echo "          </ul>
        </div>
        </div>
    </div>
  </div>
</div>

<header>
   <div class=\"container\">
    <div class=\"row\">
  
  
<div class=\"header-main\">

  <div class=\"header-right\"> 
    ";
        // line 144
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
  <div class=\"head-right-top\">
  
  <ul class=\"static_links\">
    <li class=\"head-links\"> <a href=\"";
        // line 148
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\">";
        echo (isset($context["text_home"]) ? $context["text_home"] : null);
        echo "</a></li>
    <li class=\"head-links\"><a href=\"";
        // line 149
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
    <li class=\"head-links\"><a href=\"";
        // line 150
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
    <li class=\"head-links\"><a href=\"";
        // line 151
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
    ";
        // line 152
        if ((isset($context["blog_enable"]) ? $context["blog_enable"] : null)) {
            // line 153
            echo "        <li> <a href=\"";
            echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
            echo "\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo " </a></li>       
\t";
        }
        // line 155
        echo "    <li class=\"head-links\"><a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
    <li class=\"head-links\"><a href=\"";
        // line 156
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
   
    </ul>

          
        </div>
      </div>
    </div> 
    </div>
</div>

</header>



<!-- ======= Quick view JS ========= -->
<script> 

function quickbox(){
 if (\$(window).width() > 767) {
    \$('.quickview').magnificPopup({
      type:'iframe',
      delegate: 'a',
      preloader: true,
      tLoading: 'Loading image #%curr%...',
    });
 }  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});

</script>
";
    }

    public function getTemplateName()
    {
        return "OPC010004/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 156,  433 => 155,  425 => 153,  423 => 152,  417 => 151,  411 => 150,  405 => 149,  399 => 148,  392 => 144,  375 => 129,  368 => 127,  361 => 126,  354 => 124,  348 => 123,  342 => 122,  336 => 121,  329 => 120,  327 => 119,  319 => 116,  315 => 115,  311 => 114,  307 => 112,  299 => 111,  287 => 110,  269 => 99,  261 => 98,  257 => 97,  252 => 96,  246 => 92,  235 => 88,  232 => 87,  229 => 85,  225 => 82,  223 => 81,  221 => 80,  219 => 79,  217 => 78,  215 => 77,  213 => 76,  192 => 57,  184 => 55,  180 => 54,  169 => 52,  165 => 51,  162 => 50,  153 => 48,  149 => 47,  136 => 45,  132 => 44,  128 => 42,  121 => 40,  117 => 39,  114 => 38,  108 => 36,  106 => 35,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  78 => 25,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet"> */
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/{{ mytemplate }}/stylesheet/stylesheet.css" rel="stylesheet" />*/
/* */
/* <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/magnific/magnific-popup.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/caprica/carousel.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/caprica/custom.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/caprica/bootstrap.min.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{  mytemplate }}/stylesheet/caprica/animate.css" />*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/caprica/lightbox.css" />*/
/* */
/* */
/* {% if direction == 'rtl' %}*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/theme/{{ mytemplate }}/stylesheet/caprica/rtl.css">*/
/* {% endif %}*/
/* */
/* {% for style in styles %}*/
/* <link href="style.href" type="text/css" rel="style.rel" media="style.media" />*/
/* {% endfor %}*/
/* */
/* */
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* <!-- Caprica www.capricathemes.com - Start -->*/
/* <script type="text/javascript" src="catalog/view/javascript/lightbox/lightbox-2.6.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/tabs.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/custom.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/jstree.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/carousel.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/caprica.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/jquery.custom.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/jquery.formalize.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/jquery.elevatezoom.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/javascript/caprica/bootstrap-notify.min.js"></script>  */
/* <script type="text/javascript" src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js"></script>*/
/* */
/* <!-- Caprica www.capricathemes.com - End -->*/
/* */
/* <script src="catalog/view/javascript/common.js"></script>*/
/* */
/* </head>*/
/* */
/* {% if (column_left and column_right) %}*/
/* {% set layoutclass = 'layout-3' %}*/
/* {% elseif (column_left or column_right) %}*/
/* {% if column_left %}*/
/* {% set layoutclass = 'layout-2 left-col' %}*/
/* {% elseif column_right %}*/
/* {% set layoutclass = 'layout-2 right-col' %}*/
/* {% endif %}*/
/* {% else %}*/
/* {% set layoutclass = 'layout-1' %}*/
/* {% endif %}*/
/* */
/* <body class="{{ class }} {{ " " }} {{ layoutclass }}">*/
/* <nav id="top">*/
/*   <div class="container">*/
/*   <div class="row">*/
/*    <div class="header_top_left">{{ headerleft }}</div>*/
/*     <div id="top-links" class="nav pull-right">*/
/*       <ul class="list-inline">*/
/*         {#<li><a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">{{ telephone }}</span></li>#}*/
/*          {{ currency }}*/
/*           {{ language }}*/
/*         <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*         <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*       </ul>*/
/*     </div>*/
/* 	</div>*/
/*   </div>*/
/* </nav>*/
/* <div class="header-container">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="header-center">*/
/*       <div class="col-sm-4 header-logo">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       <div class="col-sm-5 header-search">{{ search }}</div>*/
/*       <div class="col-sm-3 header-cart">{{ cart }}</div>*/
/*        <div class="dropdown myaccount"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> */
/*        </a>*/
/*           <ul class="dropdown-menu dropdown-menu-right myaccount-menu">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <header>*/
/*    <div class="container">*/
/*     <div class="row">*/
/*   */
/*   */
/* <div class="header-main">*/
/* */
/*   <div class="header-right"> */
/*     {{ menu }}*/
/*   <div class="head-right-top">*/
/*   */
/*   <ul class="static_links">*/
/*     <li class="head-links"> <a href="{{ home }}">{{ text_home }}</a></li>*/
/*     <li class="head-links"><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*     <li class="head-links"><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*     <li class="head-links"><a href="{{ special }}">{{ text_special }}</a></li>*/
/*     {% if blog_enable %}*/
/*         <li> <a href="{{all_blogs}}">{{ text_blog }} </a></li>       */
/* 	{% endif %}*/
/*     <li class="head-links"><a href="{{ return }}">{{ text_return }}</a></li>*/
/*     <li class="head-links"><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*    */
/*     </ul>*/
/* */
/*           */
/*         </div>*/
/*       </div>*/
/*     </div> */
/*     </div>*/
/* </div>*/
/* */
/* </header>*/
/* */
/* */
/* */
/* <!-- ======= Quick view JS ========= -->*/
/* <script> */
/* */
/* function quickbox(){*/
/*  if ($(window).width() > 767) {*/
/*     $('.quickview').magnificPopup({*/
/*       type:'iframe',*/
/*       delegate: 'a',*/
/*       preloader: true,*/
/*       tLoading: 'Loading image #%curr%...',*/
/*     });*/
/*  }  */
/* }*/
/* jQuery(document).ready(function() {quickbox();});*/
/* jQuery(window).resize(function() {quickbox();});*/
/* */
/* </script>*/
/* */
