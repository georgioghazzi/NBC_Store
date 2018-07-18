<?php

/* OPC010004/template/common/search.twig */
class __TwigTemplate_2d2c98196198d8d08c174e45053add542a5446f956bc643f3f7936ed1b1f267a extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group searchtoggle\">
\t 
        <div class=\"searchbox\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 4
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i>";
        // line 6
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</button>
  </span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "OPC010004/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div id="search" class="input-group searchtoggle">*/
/* 	 */
/*         <div class="searchbox">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i>{{ text_search }}</button>*/
/*   </span>*/
/*   </div>*/
/* </div>*/
