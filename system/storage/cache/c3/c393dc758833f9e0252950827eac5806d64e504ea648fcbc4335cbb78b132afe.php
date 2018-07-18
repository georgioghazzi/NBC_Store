<?php

/* OPC010004/template/common/menu.twig */
class __TwigTemplate_136efe07b79f24b2ca1e1a0d4d174b160712dd027b9da29e167d5ed72d070b95 extends Twig_Template
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
        echo "
<!-- ======= Menu Code START ========= -->
";
        // line 3
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 4
            echo "<!-- Opencart 3 level Category Menu-->
<div id=\"menu\" class=\"main-menu\">
<div class=\"nav-responsive\"><span>Menu</span><div class=\"expandable\"></div></div>
 
      <ul class=\"nav navbar-nav\">
\t  \t<li class=\"top_level home\"><a href=\"";
            // line 9
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\" ><span data-hover=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</span></a></li>
    \t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 11
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 12
                    echo "\t\t\t<li class=\"top_level dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" ><span data-hover=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</span></a>

\t\t\t<div class=\"dropdown-menu megamenu column";
                    // line 14
                    echo $this->getAttribute($context["category"], "column", array());
                    echo "\">
            <div class=\"dropdown-inner\">
\t\t\t  ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 17
                        echo "\t\t\t\t<ul class=\"list-unstyled childs_1\">
                ";
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 19
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories START -->
\t\t\t\t\t";
                            // line 20
                            if ($this->getAttribute($context["child"], "childs", array())) {
                                // line 21
                                echo "\t\t\t\t\t  <li class=\"dropdown\"><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a>

\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t              <div class=\"dropdown-inner\">
\t\t\t              ";
                                // line 25
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["child"], "childs", array()), (twig_length_filter($this->env, $this->getAttribute($context["child"], "childs", array())) / twig_round($this->getAttribute($context["child"], "column", array()), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 26
                                    echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t\t  ";
                                    // line 27
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 28
                                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                                        echo $this->getAttribute($context["childs_2"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["childs_2"], "name", array());
                                        echo "</a></li>
\t\t\t\t\t\t\t  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 30
                                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 32
                                echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t  </li>
\t\t\t\t\t";
                            } else {
                                // line 37
                                echo "\t\t\t\t\t  <li><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a></li>
\t\t\t\t\t";
                            }
                            // line 39
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories END -->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "              
\t\t\t    </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "            </div>
\t\t\t</div>

\t\t\t</li>
        ";
                } else {
                    // line 49
                    echo "\t\t\t<li class=\"top_level\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\"><span data-hover=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</span></a></li>
       ";
                }
                // line 51
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        <li> <a href=\"";
            echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
            echo "\"><span data-hover=\"";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</span></a></li>       
\t
  </ul>
  
</div>
";
        }
        // line 57
        echo " ";
    }

    public function getTemplateName()
    {
        return "OPC010004/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 57,  170 => 52,  164 => 51,  154 => 49,  147 => 44,  139 => 41,  132 => 39,  124 => 37,  117 => 32,  110 => 30,  99 => 28,  95 => 27,  92 => 26,  88 => 25,  78 => 21,  76 => 20,  73 => 19,  69 => 18,  66 => 17,  62 => 16,  57 => 14,  47 => 12,  44 => 11,  40 => 10,  32 => 9,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* <!-- ======= Menu Code START ========= -->*/
/* {% if categories %}*/
/* <!-- Opencart 3 level Category Menu-->*/
/* <div id="menu" class="main-menu">*/
/* <div class="nav-responsive"><span>Menu</span><div class="expandable"></div></div>*/
/*  */
/*       <ul class="nav navbar-nav">*/
/* 	  	<li class="top_level home"><a href="{{ home }}" ><span data-hover="{{ name }}">{{ name }}</span></a></li>*/
/*     	{% for category in categories %}*/
/*         {% if category.children %}*/
/* 			<li class="top_level dropdown"><a href="{{ category.href }}" ><span data-hover="{{ category.name }}">{{ category.name }}</span></a>*/
/* */
/* 			<div class="dropdown-menu megamenu column{{ category.column }}">*/
/*             <div class="dropdown-inner">*/
/* 			  {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/* 				<ul class="list-unstyled childs_1">*/
/*                 {% for child in children %}*/
/* 					<!-- 2 Level Sub Categories START -->*/
/* 					{% if child.childs %}*/
/* 					  <li class="dropdown"><a href="{{ child.href }}">{{ child.name }}</a>*/
/* */
/* 						  <div class="dropdown-menu">*/
/* 			              <div class="dropdown-inner">*/
/* 			              {% for childs_col in child.childs|batch(child.childs|length / child.column|round(1, 'ceil')) %}*/
/* 							<ul class="list-unstyled childs_2">*/
/* 							  {% for childs_2 in childs_col %}*/
/* 								<li><a href="{{ childs_2.href }}">{{ childs_2.name }}</a></li>*/
/* 							  {% endfor %}*/
/* 							</ul>*/
/* 						  {% endfor %}*/
/* 						  </div>*/
/* 						  </div>*/
/* */
/* 					  </li>*/
/* 					{% else %}*/
/* 					  <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/* 					{% endif %}*/
/* 					<!-- 2 Level Sub Categories END -->*/
/*                 {% endfor %}*/
/*               */
/* 			    </ul>*/
/*               {% endfor %}*/
/*             </div>*/
/* 			</div>*/
/* */
/* 			</li>*/
/*         {% else %}*/
/* 			<li class="top_level"><a href="{{ category.href }}"><span data-hover="{{ category.name }}">{{ category.name }}</span></a></li>*/
/*        {% endif %}*/
/*         {% endfor %}*/
/*         <li> <a href="{{all_blogs}}"><span data-hover="{{ text_blog }}">{{ text_blog }}</span></a></li>       */
/* 	*/
/*   </ul>*/
/*   */
/* </div>*/
/* {% endif %} */
