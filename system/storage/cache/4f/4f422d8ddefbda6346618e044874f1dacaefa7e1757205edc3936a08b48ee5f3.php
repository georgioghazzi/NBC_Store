<?php

/* OPC010004/template/extension/module/featured.twig */
class __TwigTemplate_425bd361d84a34baeefd133896f5a19b9a40419562b8114f55e1aaddf4434832 extends Twig_Template
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
        echo "<div class=\"img-prd\">
<div class=\"box featured\">
  <div class=\"box-head\"><div class=\"box-heading\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div> </div>
  <div class=\"box-content\">
  \t<div class=\"box-content-inner-featured\">
<div class=\"featured-inner-content\">
\t\t";
        // line 7
        $context["sliderFor"] = 10;
        // line 8
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
        // line 9
        echo "\t";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            // line 10
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 15
        echo "\t
\t<div class=\"box-product ";
        // line 16
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "product-carousel";
        } else {
            echo "productbox-grid";
        }
        echo "\" id=\"";
        if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
            echo "featured-carousel";
        } else {
            echo "featured-grid";
        }
        echo "\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "  <div class=\"";
            if (((isset($context["productCount"]) ? $context["productCount"] : null) >= (isset($context["sliderFor"]) ? $context["sliderFor"] : null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 23
            if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 25
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 26
                echo $this->getAttribute($context["product"], "thumb_swap", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 30
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["product"], "special", array())) {
                echo "        
\t\t\t\t\t\t\t\t\t        ";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t        <div class=\"saleback\">
\t\t\t\t\t\t\t\t\t        <span class=\"saleicon sale\">Sale</span>
\t\t\t\t\t\t\t\t\t        <div class=\"percentsaving\">";
                // line 36
                echo $this->getAttribute($context["product"], "percentsaving", array());
                echo "%</div>          
\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        ";
            }
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn_hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" title=\"";
            // line 40
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview\" data-toggle=\"tooltip\" title=\"Quick View\" ><a href=\"";
            // line 41
            echo $this->getAttribute($context["product"], "quick", array());
            echo "\"><i class=\"fa fa-eye\"></i>Quick View</a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 46
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 48
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 61
            echo "\t\t\t\t\t\t\t\t\t       \t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t         \t\t\t ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t         \t\t\t ";
                if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t         \t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t          \t\t     ";
                } else {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t          \t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t          \t\t\t ";
                }
                // line 68
                echo "\t\t\t\t\t\t\t\t\t          \t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t\t\t\t\t       \t\t\t\t </div>
\t\t\t\t\t\t\t\t\t        \t\t";
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addtocart\" onclick=\"cart.add('";
            // line 74
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo " </button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 75
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo " \" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " ');\"><i class=\"fa fa-exchange\"></i>";
            echo (isset($context["add_to_compare"]) ? $context["add_to_compare"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "</div>

</div> </div>
  </div>
</div>
</div>
<span class=\"featured_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "OPC010004/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 85,  234 => 75,  228 => 74,  223 => 71,  220 => 69,  214 => 68,  210 => 66,  206 => 64,  203 => 63,  199 => 62,  196 => 61,  194 => 60,  187 => 58,  183 => 56,  175 => 54,  172 => 53,  164 => 51,  158 => 49,  156 => 48,  153 => 47,  151 => 46,  143 => 41,  137 => 40,  134 => 39,  128 => 36,  124 => 34,  118 => 32,  109 => 30,  104 => 29,  94 => 26,  86 => 25,  81 => 24,  79 => 23,  66 => 18,  62 => 17,  48 => 16,  45 => 15,  38 => 10,  35 => 9,  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="img-prd">*/
/* <div class="box featured">*/
/*   <div class="box-head"><div class="box-heading">{{ heading_title }}</div> </div>*/
/*   <div class="box-content">*/
/*   	<div class="box-content-inner-featured">*/
/* <div class="featured-inner-content">*/
/* 		{% set sliderFor = 10 %}*/
/* 		{% set productCount = products|length %}*/
/* 	{% if productCount >= sliderFor %}*/
/* 		<div class="customNavigation">*/
/* 			<a class="fa prev fa-arrow-left">&nbsp;</a>*/
/* 			<a class="fa next fa-arrow-right">&nbsp;</a>*/
/* 		</div>	*/
/* 	{% endif %}*/
/* 	*/
/* 	<div class="box-product {% if productCount >= sliderFor %}product-carousel{% else %}productbox-grid{% endif %}" id="{% if productCount >= sliderFor %}featured-carousel{% else %}featured-grid{% endif %}">*/
/*   {% for product in products %}*/
/*   <div class="{% if productCount >= sliderFor %}slider-item{% else %}product-items{% endif %}">*/
/*     <div class="product-block product-thumb transition">*/
/* 	  <div class="product-block-inner">	  	*/
/* 										<div class="image">*/
/* 											*/
/* 										{% if product.thumb_swap %}*/
/* 										<a href="{{ product.href }}">*/
/* 										<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive reg-image"/>*/
/* 										<img class="img-responsive hover-image" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/* 										</a>*/
/* 										{% else %}*/
/* 										<a href="{{ product.href }}">*/
/* 										<img src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" class="img-responsive"/></a>*/
/* 										{% endif %}*/
/* 										{% if not product.special %}        */
/* 									        {% else %}*/
/* 									        <div class="saleback">*/
/* 									        <span class="saleicon sale">Sale</span>*/
/* 									        <div class="percentsaving">{{ product.percentsaving }}%</div>          */
/* 									        </div>*/
/* 									        {% endif %}*/
/* 											<div class="btn_hover">*/
/* 												<button type="button" class="wishlist" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 												<div class="quickview" data-toggle="tooltip" title="Quick View" ><a href="{{ product.quick }}"><i class="fa fa-eye"></i>Quick View</a></div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="product-details">*/
/* 											<div class="caption">*/
/* 											{% if product.price %}*/
/* 													<p class="price">*/
/* 													{% if not product.special %}*/
/* 													{{ product.price }}*/
/* 													{% else %}*/
/* 													<span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 													{% endif %}*/
/* 													{% if product.tax %}*/
/* 													<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 													{% endif %}*/
/* 													</p>*/
/* 												{% endif %}*/
/* 														<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* 												{# <p class="desc"><?php echo $product['description']; ?></p> #}*/
/* 												{#{% if product.rating %}#}*/
/* 									       				 <div class="rating">*/
/* 									         			 {% for i in 1..5 %}*/
/* 									         			 {% if product.rating < i %}*/
/* 									         			 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 									          		     {% else %}*/
/* 									          			 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 									          			 {% endif %}*/
/* 									          			 {% endfor %}*/
/* 									       				 </div>*/
/* 									        		{#{% endif %}#}*/
/* 												*/
/* 											*/
/* 											<div class="button-group">*/
/* 												<button type="button" class="addtocart" onclick="cart.add('{{ product.product_id }} ');">{{ button_cart }} </button>*/
/* 												<button class="compare" type="button" data-toggle="tooltip" title="{{ button_compare }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-exchange"></i>{{ add_to_compare }}</button>*/
/* 											</div>*/
/* 											</div>		*/
/* 										*/
/* 										</div>*/
/* 									</div>*/
/* 	</div>*/
/* </div>*/
/*   */
/*  {% endfor %}*/
/* </div>*/
/* */
/* </div> </div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <span class="featured_default_width" style="display:none; visibility:hidden"></span>*/
/* */
