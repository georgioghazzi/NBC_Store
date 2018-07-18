<?php

/* OPC010004/template/extension/module/carousel.twig */
class __TwigTemplate_c92b8b372e1cca9953c48513c3fde1e579e05f6f58256238702551284b2e9f6a extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"banners-slider-carousel\">
\t<div class=\"customNavigation\">
\t\t<a class=\"prev fa fa-arrow-left\">&nbsp;</a>
\t\t<a class=\"next fa fa-arrow-right\">&nbsp;</a>
\t</div>
  <div class=\"product-carousel\" id=\"module-";
        // line 6
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "-carousel\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "    \t<div class=\"slider-item\">
\t\t<div class=\"product-block\">
\t\t<div class=\"product-block-inner\">
\t\t\t";
            // line 11
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 12
                echo "   <a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" /></a>
    ";
            } else {
                // line 14
                echo "    <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" />
    ";
            }
            // line 16
            echo "\t\t</div></div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </div>
</div>
<span class=\"module_default_width\" style=\"display:none; visibility:hidden\"></span>";
    }

    public function getTemplateName()
    {
        return "OPC010004/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  61 => 16,  53 => 14,  43 => 12,  41 => 11,  36 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* <div id="carousel-{{ module }}" class="banners-slider-carousel">*/
/* 	<div class="customNavigation">*/
/* 		<a class="prev fa fa-arrow-left">&nbsp;</a>*/
/* 		<a class="next fa fa-arrow-right">&nbsp;</a>*/
/* 	</div>*/
/*   <div class="product-carousel" id="module-{{ module }}-carousel">*/
/*     {% for banner in banners %}*/
/*     	<div class="slider-item">*/
/* 		<div class="product-block">*/
/* 		<div class="product-block-inner">*/
/* 			{% if banner.link %}*/
/*    <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" /></a>*/
/*     {% else %}*/
/*     <img src="{{ banner.image }}" alt="{{ banner.title }}" />*/
/*     {% endif %}*/
/* 		</div></div></div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* <span class="module_default_width" style="display:none; visibility:hidden"></span>*/
