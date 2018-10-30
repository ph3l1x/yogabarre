<?php

/* themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials_style4.html.twig */
class __TwigTemplate_d61fb2a027d48a7dda274a0e4992f1734f982e4f69899d468356bed4b6c83306 extends Twig_Template
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
        $tags = array("set" => 1, "if" => 5);
        $filters = array();
        $functions = array("file_url" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array('file_url')
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
        $context["thumbnail"] = $this->getAttribute($this->getAttribute(($context["row"] ?? null), "_entity", array()), "field_thumbnail", array());
        // line 2
        echo "<div>
    <div class=\"col-md-12\">
        <div class=\"testimonial testimonial-style-2 testimonial-with-quotes mb-none\">
            ";
        // line 5
        if ($this->getAttribute(($context["fields"] ?? null), "field_thumbnail", array())) {
            // line 6
            echo "            <div class=\"testimonial-author\">
                <img src=\"";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute(($context["thumbnail"] ?? null), "entity", array()), "fileuri", array()))), "html", null, true));
            echo "\" class=\"img-responsive img-circle\" alt=\"\">
            </div>
            ";
        }
        // line 10
        echo "            ";
        if ($this->getAttribute(($context["fields"] ?? null), "body", array())) {
            // line 11
            echo "                <blockquote>
                    ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", array()), "content", array()), "html", null, true));
            echo "
                </blockquote>
            ";
        }
        // line 15
        echo "            <div class=\"testimonial-author\">
                <p><strong>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "</strong>
                    ";
        // line 17
        if ($this->getAttribute(($context["fields"] ?? null), "field_testimonial_info", array())) {
            // line 18
            echo "                        <span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_info", array()), "content", array()), "html", null, true));
            echo "</span>
                    ";
        }
        // line 20
        echo "                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials_style4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  82 => 18,  80 => 17,  76 => 16,  73 => 15,  67 => 12,  64 => 11,  61 => 10,  55 => 7,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials_style4.html.twig", "/home/yogabarre/public_html/themes/porto/templates/view/testimonials/views-view-fields--testimonials--testimonials_style4.html.twig");
    }
}
