<?php

/* themes/porto/templates/includes/footer.html.twig */
class __TwigTemplate_a606f620b4e7d221ca738acd39efdd2d6c3164d9ab8c63b312ab3117baa8e2ba extends Twig_Template
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
        $tags = array("if" => 2, "include" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
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
";
        // line 2
        if ((($context["footer_option"] ?? null) == "none")) {
            // line 3
            echo "    ";
            if ((($context["arg"] ?? null) == "index-footer-advanced")) {
                // line 4
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_advanced.html.twig"), "themes/porto/templates/includes/footer.html.twig", 4)->display($context);
                // line 5
                echo "    ";
            } elseif ((($context["arg"] ?? null) == "index-footer-simple")) {
                // line 6
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_simple.html.twig"), "themes/porto/templates/includes/footer.html.twig", 6)->display($context);
                // line 7
                echo "    ";
            } elseif ((($context["arg"] ?? null) == "index-corporate-3")) {
                // line 8
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_simple.html.twig"), "themes/porto/templates/includes/footer.html.twig", 8)->display($context);
                // line 9
                echo "    ";
            } elseif ((($context["arg"] ?? null) == "index-one-page")) {
                // line 10
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_simple.html.twig"), "themes/porto/templates/includes/footer.html.twig", 10)->display($context);
                // line 11
                echo "    ";
            } elseif ((($context["arg"] ?? null) == "index-footer-light")) {
                // line 12
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_light.html.twig"), "themes/porto/templates/includes/footer.html.twig", 12)->display($context);
                // line 13
                echo "    ";
            } elseif ((($context["arg"] ?? null) == "index-footer-light-narrow")) {
                // line 14
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_light_narrow.html.twig"), "themes/porto/templates/includes/footer.html.twig", 14)->display($context);
                // line 15
                echo "    ";
            } elseif ((($context["arg"] ?? null) == "index-footer-latest-work")) {
                // line 16
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_latest_work.html.twig"), "themes/porto/templates/includes/footer.html.twig", 16)->display($context);
                // line 17
                echo "    ";
            } elseif ((($context["arg"] ?? null) == "index-footer-contact-form")) {
                // line 18
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_contact_form.html.twig"), "themes/porto/templates/includes/footer.html.twig", 18)->display($context);
                // line 19
                echo "    ";
            } else {
                // line 20
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_default.html.twig"), "themes/porto/templates/includes/footer.html.twig", 20)->display($context);
                // line 21
                echo "    ";
            }
        } else {
            // line 23
            echo "    ";
            if ((($context["footer_option"] ?? null) == "f_advanced")) {
                // line 24
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_advanced.html.twig"), "themes/porto/templates/includes/footer.html.twig", 24)->display($context);
                // line 25
                echo "    ";
            } elseif ((($context["footer_option"] ?? null) == "f_simple")) {
                // line 26
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_simple.html.twig"), "themes/porto/templates/includes/footer.html.twig", 26)->display($context);
                // line 27
                echo "    ";
            } elseif ((($context["footer_option"] ?? null) == "f_light")) {
                // line 28
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_light.html.twig"), "themes/porto/templates/includes/footer.html.twig", 28)->display($context);
                // line 29
                echo "    ";
            } elseif ((($context["footer_option"] ?? null) == "f_light_narrow")) {
                // line 30
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_light_narrow.html.twig"), "themes/porto/templates/includes/footer.html.twig", 30)->display($context);
                // line 31
                echo "    ";
            } elseif ((($context["footer_option"] ?? null) == "f_latest_work")) {
                // line 32
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_latest_work.html.twig"), "themes/porto/templates/includes/footer.html.twig", 32)->display($context);
                // line 33
                echo "    ";
            } elseif ((($context["footer_option"] ?? null) == "f_contact")) {
                // line 34
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_contact_form.html.twig"), "themes/porto/templates/includes/footer.html.twig", 34)->display($context);
                // line 35
                echo "    ";
            } else {
                // line 36
                echo "        ";
                $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer_option/f_default.html.twig"), "themes/porto/templates/includes/footer.html.twig", 36)->display($context);
                // line 37
                echo "    ";
            }
        }
        // line 39
        echo "


";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 39,  148 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  127 => 30,  124 => 29,  121 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/includes/footer.html.twig", "/home/yogabarre/public_html/themes/porto/templates/includes/footer.html.twig");
    }
}
