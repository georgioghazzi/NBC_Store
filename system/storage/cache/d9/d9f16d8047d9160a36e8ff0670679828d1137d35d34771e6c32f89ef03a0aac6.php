<?php

/* OPC010004/template/common/currency.twig */
class __TwigTemplate_5fb04e2e50a837e6163e2aa61b5ef9c732785bd8b22f4f6eb5d3aaf1085a51aa extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<div class=\"pull-left\">
  <form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
  <div class=\"btn-group\">
      <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "      ";
                if (($this->getAttribute($context["currency"], "symbol_left", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    // line 8
                    echo "       <strong>";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "</strong> 
       ";
                } elseif (($this->getAttribute(                // line 9
$context["currency"], "symbol_right", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " 
       <strong>";
                    // line 10
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "</strong>
       ";
                }
                // line 12
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
      <span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 13
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "</span>&nbsp;<i class=\"fa fa-angle-down\"></i></button>
      <ul class=\"dropdown-menu currency-menu\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 16
                echo "        ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 17
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 18
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</button>
        </li>
        ";
                } else {
                    // line 21
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 22
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</button>
        </li>
        ";
                }
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 29
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
</div>
";
        }
        // line 32
        echo " ";
    }

    public function getTemplateName()
    {
        return "OPC010004/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  108 => 29,  103 => 26,  97 => 25,  87 => 22,  84 => 21,  74 => 18,  71 => 17,  68 => 16,  64 => 15,  59 => 13,  51 => 12,  46 => 10,  42 => 9,  37 => 8,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <div class="pull-left">*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*   <div class="btn-group">*/
/*       <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">*/
/*       {% for currency in currencies %}*/
/*       {% if currency.symbol_left and currency.code == code %}*/
/*        <strong>{{ currency.symbol_left }}</strong> */
/*        {% elseif currency.symbol_right and currency.code == code %} */
/*        <strong>{{ currency.symbol_right }}</strong>*/
/*        {% endif %}*/
/*       {% endfor %} */
/*       <span class="hidden-xs hidden-sm hidden-md">{{ text_currency }}</span>&nbsp;<i class="fa fa-angle-down"></i></button>*/
/*       <ul class="dropdown-menu currency-menu">*/
/*         {% for currency in currencies %}*/
/*         {% if currency.symbol_left %}*/
/*         <li>*/
/*           <button class="currency-select btn btn-link btn-block" type="button" name="{{ currency.code }}">{{ currency.symbol_left }} {{ currency.title }}</button>*/
/*         </li>*/
/*         {% else %}*/
/*         <li>*/
/*           <button class="currency-select btn btn-link btn-block" type="button" name="{{ currency.code }}">{{ currency.symbol_right }} {{ currency.title }}</button>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* </div>*/
/* {% endif %} */
