<?php

/* themes/porto/templates/includes/footer_option/f_default.html.twig */
class __TwigTemplate_537e2eea584eb7e1dbbd2b4e537a005887bd7dd56f963978321d19b136267775 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        if ((($context["footer_color_option"] ?? null) == "none")) {
            // line 2
            echo "<footer id=\"footer\" class=\"";
            if ((($context["arg"] ?? null) == "index-footer-color-primary")) {
                echo "color color-primary ";
            } elseif ((($context["arg"] ?? null) == "index-footer-color-tertiary")) {
                echo "color color-tertiary ";
            } elseif ((($context["arg"] ?? null) == "index-footer-color-quaternary")) {
                echo " color color-quaternary ";
            } elseif ((($context["arg"] ?? null) == "index-footer-color-secondary")) {
                echo "color color-secondary";
            }
            echo "\">
";
        } else {
            // line 4
            echo "    <footer id=\"footer\" class=\"color ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_color_option"] ?? null), "html", null, true));
            echo "\">
";
        }
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 8
        if ($this->getAttribute(($context["page"] ?? null), "label_footer", array())) {
            // line 9
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "label_footer", array()), "html", null, true));
            echo "
            ";
        }
        // line 11
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_11", array())) {
            // line 12
            echo "            <div class=\"col-md-3\">
                <div class=\"newsletter\">
                    ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_11", array()), "html", null, true));
            echo "
                </div>

            </div>
            ";
        }
        // line 19
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_21", array())) {
            // line 20
            echo "            <div class=\"col-md-3\">
                ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_21", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 24
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_31", array())) {
            // line 25
            echo "            <div class=\"col-md-4\">
                ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_31", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 29
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_41", array())) {
            // line 30
            echo "            <div class=\"col-md-2\">
                ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_41", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 34
        echo "        </div>
    </div>
    ";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_1", array())) {
            // line 37
            echo "    <div class=\"footer-copyright\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom_1", array()), "html", null, true));
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 45
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/footer_option/f_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  139 => 40,  134 => 37,  132 => 36,  128 => 34,  122 => 31,  119 => 30,  116 => 29,  110 => 26,  107 => 25,  104 => 24,  98 => 21,  95 => 20,  92 => 19,  84 => 14,  80 => 12,  77 => 11,  71 => 9,  69 => 8,  65 => 6,  59 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/includes/footer_option/f_default.html.twig", "/home/yogabarre/public_html/themes/porto/templates/includes/footer_option/f_default.html.twig");
    }
}
