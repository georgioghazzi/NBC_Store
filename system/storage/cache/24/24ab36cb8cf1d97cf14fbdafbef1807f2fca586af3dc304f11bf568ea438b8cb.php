<?php

/* OPC010004/template/common/footer.twig */
class __TwigTemplate_146dc35e56682837cc6964f0b03164cf205b5eec7363002e54b77b5e050185e0 extends Twig_Template
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
        echo "<footer>
<div class=\"content_footer_top\">
  <div class=\"container\">";
        // line 3
        echo (isset($context["footertop"]) ? $context["footertop"] : null);
        echo "</div>
</div>

  <div id=\"footer\" class=\"container\">
     <div class=\"row\">
     <div class=\"footer-blocks\">

     <div class=\"content_footer_left col-md-3\">";
        // line 10
        echo (isset($context["footerleft"]) ? $context["footerleft"] : null);
        echo "</div>


<div class=\"content_footer_center col-md-6\">

      ";
        // line 15
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 16
            echo "      <div id=\"info\" class=\"col-md-4 column\">
        <h5>";
            // line 17
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 20
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "          <li><a href=\"";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
      <!--<li><a href=\"";
            // line 23
            echo (isset($context["special"]) ? $context["special"] : null);
            echo "\">";
            echo (isset($context["text_special"]) ? $context["text_special"] : null);
            echo "</a></li>
          <li><a href=\"";
            // line 24
            echo (isset($context["return"]) ? $context["return"] : null);
            echo "\">";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a></li>-->
        </ul>
      </div>
      ";
        }
        // line 28
        echo "      <!--<div class=\"col-md-4 column\">
        <h5>";
        // line 29
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 31
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 32
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 33
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>-->
      <div id=\"extra-link\" class=\"col-md-4 column\">
        <h5>";
        // line 37
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 39
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 40
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 41
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 42
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 43
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
      <!--<li><a href=\"";
        // line 44
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 45
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>-->
        </ul>
      </div>
      <div id=\"account_link\" class=\"col-md-4 column\">
        <h5>";
        // line 49
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 51
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 52
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 53
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 54
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 55
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
      <!--<li><a href=\"";
        // line 56
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 57
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>-->
        </ul>
      </div>
\t  
\t  </div>
  

<div class=\"content_footer_right col-md-3\">";
        // line 64
        echo (isset($context["footerright"]) ? $context["footerright"] : null);
        echo "</div>

    </div>
</div>
  </div>

<div class=\"container\">
<div class=\"row\">  
<div class=\"bottomfooter\">


<!--<ul class=\"list-unstyled\">
    <li><a href=\"";
        // line 76
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
    <li><a href=\"";
        // line 77
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
    <li><a href=\"";
        // line 78
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
    <li><a href=\"";
        // line 79
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
    <li><a href=\"";
        // line 80
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
    <li><a href=\"";
        // line 81
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
    <li class=\"contact\"><a href=\"";
        // line 82
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
  </ul>-->

<p class=\"powered\">";
        // line 85
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
</div>
</div>
</div>
</footer>
";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 91
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> 
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "OPC010004/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 93,  291 => 91,  287 => 90,  279 => 85,  271 => 82,  265 => 81,  259 => 80,  253 => 79,  247 => 78,  241 => 77,  235 => 76,  220 => 64,  208 => 57,  202 => 56,  196 => 55,  190 => 54,  184 => 53,  178 => 52,  172 => 51,  167 => 49,  158 => 45,  152 => 44,  146 => 43,  140 => 42,  134 => 41,  128 => 40,  122 => 39,  117 => 37,  108 => 33,  102 => 32,  96 => 31,  91 => 29,  88 => 28,  79 => 24,  73 => 23,  66 => 22,  55 => 20,  51 => 19,  46 => 17,  43 => 16,  41 => 15,  33 => 10,  23 => 3,  19 => 1,);
    }
}
/* <footer>*/
/* <div class="content_footer_top">*/
/*   <div class="container">{{ footertop }}</div>*/
/* </div>*/
/* */
/*   <div id="footer" class="container">*/
/*      <div class="row">*/
/*      <div class="footer-blocks">*/
/* */
/*      <div class="content_footer_left col-md-3">{{ footerleft }}</div>*/
/* */
/* */
/* <div class="content_footer_center col-md-6">*/
/* */
/*       {% if informations %}*/
/*       <div id="info" class="col-md-4 column">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*       <!--<li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>-->*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <!--<div class="col-md-4 column">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>-->*/
/*       <div id="extra-link" class="col-md-4 column">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*       <!--<li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>-->*/
/*         </ul>*/
/*       </div>*/
/*       <div id="account_link" class="col-md-4 column">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*       <!--<li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>-->*/
/*         </ul>*/
/*       </div>*/
/* 	  */
/* 	  </div>*/
/*   */
/* */
/* <div class="content_footer_right col-md-3">{{ footerright }}</div>*/
/* */
/*     </div>*/
/* </div>*/
/*   </div>*/
/* */
/* <div class="container">*/
/* <div class="row">  */
/* <div class="bottomfooter">*/
/* */
/* */
/* <!--<ul class="list-unstyled">*/
/*     <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*     <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*     <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*     <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*     <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*     <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*     <li class="contact"><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*   </ul>-->*/
/* */
/* <p class="powered">{{ powered }}</p>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //--> */
/* <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->*/
/* </body></html>*/
