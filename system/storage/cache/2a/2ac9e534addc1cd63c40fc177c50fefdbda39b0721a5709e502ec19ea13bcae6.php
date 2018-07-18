<?php

/* OPC010004/template/common/home.twig */
class __TwigTemplate_dead05cf60f9e278b2001c08fbda980a714cd8a00c8d970a8e62a24614f93bd6 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"common-home\" class=\"container\">
<div class=\"row\">
";
        // line 4
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 5
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "<div id=\"content\">


<div class=\"content-top\">
";
        // line 16
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
</div>

  ";
        // line 19
        echo (isset($context["content_center"]) ? $context["content_center"] : null);
        echo "

<div class=\"content-bottom\">
    ";
        // line 22
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "

</div>
    

</div>
";
        // line 28
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
</div>
";
        // line 31
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "OPC010004/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  76 => 28,  67 => 22,  61 => 19,  55 => 16,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-home" class="container">*/
/* <div class="row">*/
/* {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/* <div id="content">*/
/* */
/* */
/* <div class="content-top">*/
/* {{ content_top }}*/
/* </div>*/
/* */
/*   {{ content_center }}*/
/* */
/* <div class="content-bottom">*/
/*     {{ content_bottom }}*/
/* */
/* </div>*/
/*     */
/* */
/* </div>*/
/* {{ column_right }}*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/
