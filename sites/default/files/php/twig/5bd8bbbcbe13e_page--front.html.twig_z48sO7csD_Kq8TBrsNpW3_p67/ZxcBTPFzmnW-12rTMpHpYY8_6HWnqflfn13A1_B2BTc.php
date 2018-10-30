<?php

/* themes/porto/templates/page--front.html.twig */
class __TwigTemplate_6ed1fbed4699e39bcead7295a35a311230b253a278aab448f0bed115bdaedca9 extends Twig_Template
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
        $tags = array("include" => 3, "if" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "
<div id=\"wrapper\">
    ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/porto/templates/page--front.html.twig", 3)->display($context);
        // line 4
        echo "    <div role=\"main\" class=\"main\">
        ";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "slide_show", array())) {
            // line 6
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slide_show", array()), "html", null, true));
            echo "
        ";
        }
        // line 8
        echo "        ";
        if (($context["page_title"] ?? null)) {
            // line 9
            echo "            <!--breadcrumbs-->
            ";
            // line 10
            if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
                // line 11
                echo "            <section class=\"page-header\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
                // line 15
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
                echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_title"] ?? null), "html", null, true));
                echo "</h1>
                        </div>
                    </div>
                </div>
            </section>
        ";
            }
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if (($context["messages"] ?? null)) {
            // line 29
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
                </div>
            </section>
        ";
        }
        // line 35
        echo "        ";
        if (($this->getAttribute(($context["page"] ?? null), "left_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())))) {
            // line 36
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
                <div class=\"col-md-9\">
                    ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
            </div>

        </div>

        ";
        } elseif (($this->getAttribute(        // line 50
($context["page"] ?? null), "right_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "left_sidebar", array())))) {
            // line 51
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    ";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
            </div>
        </div>


        ";
        } elseif (($this->getAttribute(        // line 65
($context["page"] ?? null), "right_sidebar", array()) && $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()))) {
            // line 66
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
                <div class=\"col-md-6\">
                    ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
                <div class=\"col-md-3\">
                    <aside class=\"sidebar\">
                        ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
            echo "
                    </aside>
                </div>
            </div>
        </div>


        ";
        } else {
            // line 86
            echo "        <!--content-->
        <div>
            ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 91
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 92
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
        ";
        }
        // line 94
        echo "    </div>
    ";
        // line 95
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page--front.html.twig", 95)->display($context);
        // line 96
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 96,  214 => 95,  211 => 94,  205 => 92,  202 => 91,  196 => 88,  192 => 86,  181 => 78,  174 => 74,  167 => 70,  161 => 66,  159 => 65,  149 => 58,  142 => 54,  137 => 51,  135 => 50,  126 => 44,  119 => 40,  113 => 36,  110 => 35,  103 => 31,  99 => 29,  97 => 28,  94 => 27,  91 => 26,  82 => 20,  74 => 15,  68 => 11,  66 => 10,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/page--front.html.twig", "/home/yogabarre/public_html/themes/porto/templates/page--front.html.twig");
    }
}
