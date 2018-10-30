<?php

/* themes/porto/templates/page.html.twig */
class __TwigTemplate_fdcc58f12216e54e735f5dc6960c6d7b2f05e04f83c0239af1dd3948ba132cf8 extends Twig_Template
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
        $tags = array("include" => 2, "if" => 5);
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
        echo "<div id=\"wrapper\">
    ";
        // line 2
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/porto/templates/page.html.twig", 2)->display($context);
        // line 3
        echo "    <div role=\"main\" class=\"main\">

        ";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "slide_show", array())) {
            // line 6
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slide_show", array()), "html", null, true));
            echo "
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/custom-breadcrumb.html.twig"), "themes/porto/templates/page.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        if (($context["messages"] ?? null)) {
            // line 12
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
                </div>
            </section>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        if ((($context["arg"] ?? null) == "page-coming-soon")) {
            // line 20
            echo "            <div class=\"page-coming-soon\">
                ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                ";
            // line 22
            if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
                // line 23
                echo "                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                ";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 31
            echo "            </div>
        ";
        } else {
            // line 33
            echo "            ";
            if (($this->getAttribute(($context["page"] ?? null), "left_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "right_sidebar", array())))) {
                // line 34
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-9\">
                            ";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 46
($context["page"] ?? null), "right_sidebar", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "left_sidebar", array())))) {
                // line 47
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            ";
                // line 50
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 54
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 59
($context["page"] ?? null), "right_sidebar", array()) && $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()))) {
                // line 60
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 64
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            ";
                // line 68
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_sidebar", array()), "html", null, true));
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } else {
                // line 78
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "before_content", array())) {
                    // line 79
                    echo "                    ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_content", array()), "html", null, true));
                    echo "
                ";
                }
                // line 81
                echo "                <div class=\"container\">
                    ";
                // line 82
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
                echo "
                </div>
            ";
            }
            // line 85
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
                // line 86
                echo "                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
                echo "
            ";
            }
            // line 88
            echo "        ";
        }
        // line 89
        echo "    </div>
    ";
        // line 90
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page.html.twig", 90)->display($context);
        // line 91
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 91,  221 => 90,  218 => 89,  215 => 88,  209 => 86,  206 => 85,  200 => 82,  197 => 81,  191 => 79,  188 => 78,  179 => 72,  172 => 68,  165 => 64,  159 => 60,  157 => 59,  149 => 54,  142 => 50,  137 => 47,  135 => 46,  128 => 42,  121 => 38,  115 => 34,  112 => 33,  108 => 31,  100 => 26,  95 => 23,  93 => 22,  89 => 21,  86 => 20,  84 => 19,  81 => 18,  74 => 14,  70 => 12,  68 => 11,  65 => 10,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/page.html.twig", "/home/yogabarre/public_html/themes/porto/templates/page.html.twig");
    }
}
