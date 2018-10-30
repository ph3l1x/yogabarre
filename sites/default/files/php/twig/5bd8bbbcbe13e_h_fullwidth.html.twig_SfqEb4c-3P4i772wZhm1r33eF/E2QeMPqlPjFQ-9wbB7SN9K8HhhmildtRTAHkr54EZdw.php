<?php

/* themes/porto/templates/includes/header_option/h_fullwidth.html.twig */
class __TwigTemplate_f9790a8229dc3b93ab38eef2177aa013b28624ce2e5bd3a3a03af0587c6e2734 extends Twig_Template
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
        if ((($context["header_sticky_option"] ?? null) == "always_sticky")) {
            // line 2
            echo "<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\", \"stickyChangeLogo\": false}'>
    ";
        } else {
            // line 4
            echo "<header id=\"header\" class=\"header-narrow header-full-width\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 0, \"stickySetTop\": \"0\"}'>
";
        }
        // line 6
        echo "<div class=\"header-body\">
<div class=\"header-container container\">
<div class=\"header-row\">
    ";
        // line 9
        if (($context["logopath"] ?? null)) {
            // line 10
            echo "<div class=\"header-column\">
    <div class=\"header-logo\">
        <a href=\"";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
            echo "\">
            <img alt=\"Porto\" width=\"82\" height=\"40\" src=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logopath"] ?? null), "html", null, true));
            echo "\">
        </a>
    </div>
</div>
    ";
        }
        // line 18
        echo "<div class=\"header-column\">
<div class=\"header-row\">
<div class=\"header-nav ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navigation_option"] ?? null), "html", null, true));
        echo "\">
<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
    <i class=\"fa fa-bars\"></i>
</button>
    ";
        // line 24
        if ($this->getAttribute(($context["page"] ?? null), "header_social", array())) {
            // line 25
            echo "        <div class=\"header-social-icons social-icons hidden-xs\">
            ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_social", array()), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 29
        echo "<div class=\"header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
    ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
    ";
        }
        // line 33
        echo "</div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/header_option/h_fullwidth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 31,  101 => 30,  98 => 29,  92 => 26,  89 => 25,  87 => 24,  80 => 20,  76 => 18,  68 => 13,  64 => 12,  60 => 10,  58 => 9,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/includes/header_option/h_fullwidth.html.twig", "/home/yogabarre/public_html/themes/porto/templates/includes/header_option/h_fullwidth.html.twig");
    }
}
