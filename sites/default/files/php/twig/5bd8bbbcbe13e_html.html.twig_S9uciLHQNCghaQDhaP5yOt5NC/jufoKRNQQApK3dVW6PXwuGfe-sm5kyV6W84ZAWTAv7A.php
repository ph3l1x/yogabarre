<?php

/* themes/porto/templates/html.html.twig */
class __TwigTemplate_fc9a11abecfe107f6ec43a727e567ca10211fa4b0eb807b17dc80a63f27f572d extends Twig_Template
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
        $tags = array("set" => 2, "if" => 12);
        $filters = array("clean_class" => 4, "raw" => 15, "safe_join" => 16, "t" => 4718);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'raw', 'safe_join', 't'),
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

        // line 2
        $context["body_classes"] = array(0 => ((        // line 3
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 4
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => ((        // line 5
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 3 => ((        // line 6
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((        // line 7
($context["current_path"] ?? null)) ? (("context" . \Drupal\Component\Utility\Html::getClass(($context["current_path"] ?? null)))) : ("")));
        // line 10
        echo "
<!DOCTYPE html>
<html";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
        echo " class=\"";
        if ((($context["h_semi_transparent_option"] ?? null) == 1)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent "));
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-semi-transparent")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent"));
            }
        }
        if ((($context["header_option"] ?? null) == "h_left")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header"));
        } elseif ((($context["header_option"] ?? null) == "h_right")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right"));
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-left")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header"));
            } elseif ((($context["arg"] ?? null) == "index-header-side-header-right")) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right"));
            }
        }
        echo " ";
        if ((($context["arg"] ?? null) == "index-layout-boxed")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("boxed"));
        } elseif ((($context["arg"] ?? null) == "index-layout-dark")) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("dark"));
        } else {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["layout_option"] ?? null), "html", null, true));
        }
        echo "\">

  <head>
    <head-placeholder token=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">
    <css-placeholder token=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    ";
        // line 20
        if ((($context["skin_option"] ?? null) == "none")) {
            // line 21
            echo "    ";
            if ((($context["arg"] ?? null) == "index-corporate-3")) {
                // line 22
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-3.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 23
($context["arg"] ?? null) == "index-corporate-4")) {
                // line 24
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-4.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 25
($context["arg"] ?? null) == "index-corporate-5")) {
                // line 26
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-5.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 27
($context["arg"] ?? null) == "index-corporate-6")) {
                // line 28
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-6.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 29
($context["arg"] ?? null) == "index-corporate-7")) {
                // line 30
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-7.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 31
($context["arg"] ?? null) == "index-corporate-8")) {
                // line 32
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-8.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 33
($context["arg"] ?? null) == "index-corporate-hosting")) {
                // line 34
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
                echo "/css/skins/skin-corporate-hosting.css' type='text/css' media='all' />
   ";
                // line 37
                echo "    ";
            }
            // line 38
            echo "    ";
        } elseif ((($context["skin_option"] ?? null) == "custom")) {
            // line 39
            echo "        <style>
        a {
            color: ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        a:hover {
            color: ";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        a:focus {
            color: ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        a:active {
            color: ";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .heading-primary,
        html .lnk-primary,
        html .text-color-primary {
            color: ";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
        }

        html .heading.heading-primary h1,
        html .heading.heading-primary h2,
        html .heading.heading-primary h3,
        html .heading.heading-primary h4,
        html .heading.heading-primary h5,
        html .heading.heading-primary h6 {
            border-color: ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .heading-secondary,
        html .lnk-secondary,
        html .text-color-secondary {
            color: #e36159 !important;
        }

        html .heading.heading-secondary h1,
        html .heading.heading-secondary h2,
        html .heading.heading-secondary h3,
        html .heading.heading-secondary h4,
        html .heading.heading-secondary h5,
        html .heading.heading-secondary h6 {
            border-color: #e36159;
        }

        html .heading-tertiary,
        html .lnk-tertiary,
        html .text-color-tertiary {
            color: #2baab1 !important;
        }

        html .heading.heading-tertiary h1,
        html .heading.heading-tertiary h2,
        html .heading.heading-tertiary h3,
        html .heading.heading-tertiary h4,
        html .heading.heading-tertiary h5,
        html .heading.heading-tertiary h6 {
            border-color: #2baab1;
        }

        html .heading-quaternary,
        html .lnk-quaternary,
        html .text-color-quaternary {
            color: #383f48 !important;
        }

        html .heading.heading-quaternary h1,
        html .heading.heading-quaternary h2,
        html .heading.heading-quaternary h3,
        html .heading.heading-quaternary h4,
        html .heading.heading-quaternary h5,
        html .heading.heading-quaternary h6 {
            border-color: #383f48;
        }

        html .heading-dark,
        html .lnk-dark,
        html .text-color-dark {
            color: #2e353e !important;
        }

        html .heading.heading-dark h1,
        html .heading.heading-dark h2,
        html .heading.heading-dark h3,
        html .heading.heading-dark h4,
        html .heading.heading-dark h5,
        html .heading.heading-dark h6 {
            border-color: #2e353e;
        }

        html .heading-light,
        html .lnk-light,
        html .text-color-light {
            color: #ffffff !important;
        }

        html .heading.heading-light h1,
        html .heading.heading-light h2,
        html .heading.heading-light h3,
        html .heading.heading-light h4,
        html .heading.heading-light h5,
        html .heading.heading-light h6 {
            border-color: #ffffff;
        }

        html .background-color-primary {
            background-color: ";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
        }

        html .background-color-secondary {
            background-color: #e36159 !important;
        }

        html .background-color-tertiary {
            background-color: #2baab1 !important;
        }

        html .background-color-quaternary {
            background-color: #383f48 !important;
        }

        html .background-color-dark {
            background-color: #2e353e !important;
        }

        html .background-color-light {
            background-color: #ffffff !important;
        }

        .alternative-font {
            color: ";
            // line 171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .blockquote-primary {
            border-color: ";
            // line 175
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
        }

        html .blockquote-secondary {
            border-color: #e36159 !important;
        }

        html .blockquote-tertiary {
            border-color: #2baab1 !important;
        }

        html .blockquote-quaternary {
            border-color: #383f48 !important;
        }

        html .blockquote-dark {
            border-color: #2e353e !important;
        }

        html .blockquote-light {
            border-color: #ffffff !important;
        }

        p.drop-caps:first-letter {
            color: ";
            // line 199
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        p.drop-caps.drop-caps-style-2:first-letter {
            background-color: ";
            // line 203
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        ul.nav-pills > li.active > a {
            background-color: ";
            // line 207
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        ul.nav-pills > li.active > a:hover,
        ul.nav-pills > li.active > a:focus {
            background-color: ";
            // line 212
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html ul.nav-pills-primary a {
            color: ";
            // line 216
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html ul.nav-pills-primary a:hover {
            color: ";
            // line 220
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html ul.nav-pills-primary a:focus {
            color: ";
            // line 224
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html ul.nav-pills-primary a:active {
            color: ";
            // line 228
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html ul.nav-pills-primary > li.active > a {
            background-color: ";
            // line 232
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html ul.nav-pills-primary > li.active > a:hover,
        html ul.nav-pills-primary > li.active > a:focus {
            background-color: ";
            // line 237
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html ul.nav-pills-secondary a {
            color: #e36159;
        }

        html ul.nav-pills-secondary a:hover {
            color: #e7766f;
        }

        html ul.nav-pills-secondary a:focus {
            color: #e7766f;
        }

        html ul.nav-pills-secondary a:active {
            color: #df4c43;
        }

        html ul.nav-pills-secondary > li.active > a {
            background-color: #e36159;
        }

        html ul.nav-pills-secondary > li.active > a:hover,
        html ul.nav-pills-secondary > li.active > a:focus {
            background-color: #e36159;
        }

        html ul.nav-pills-tertiary a {
            color: #2baab1;
        }

        html ul.nav-pills-tertiary a:hover {
            color: #30bec6;
        }

        html ul.nav-pills-tertiary a:focus {
            color: #30bec6;
        }

        html ul.nav-pills-tertiary a:active {
            color: #26969c;
        }

        html ul.nav-pills-tertiary > li.active > a {
            background-color: #2baab1;
        }

        html ul.nav-pills-tertiary > li.active > a:hover,
        html ul.nav-pills-tertiary > li.active > a:focus {
            background-color: #2baab1;
        }

        html ul.nav-pills-quaternary a {
            color: #383f48;
        }

        html ul.nav-pills-quaternary a:hover {
            color: #434c56;
        }

        html ul.nav-pills-quaternary a:focus {
            color: #434c56;
        }

        html ul.nav-pills-quaternary a:active {
            color: #2d323a;
        }

        html ul.nav-pills-quaternary > li.active > a {
            background-color: #383f48;
        }

        html ul.nav-pills-quaternary > li.active > a:hover,
        html ul.nav-pills-quaternary > li.active > a:focus {
            background-color: #383f48;
        }

        html ul.nav-pills-dark a {
            color: #2e353e;
        }

        html ul.nav-pills-dark a:hover {
            color: #39424d;
        }

        html ul.nav-pills-dark a:focus {
            color: #39424d;
        }

        html ul.nav-pills-dark a:active {
            color: #23282f;
        }

        html ul.nav-pills-dark > li.active > a {
            background-color: #2e353e;
        }

        html ul.nav-pills-dark > li.active > a:hover,
        html ul.nav-pills-dark > li.active > a:focus {
            background-color: #2e353e;
        }

        html ul.nav-pills-light a {
            color: #ffffff;
        }

        html ul.nav-pills-light a:hover {
            color: #ffffff;
        }

        html ul.nav-pills-light a:focus {
            color: #ffffff;
        }

        html ul.nav-pills-light a:active {
            color: #f2f2f2;
        }

        html ul.nav-pills-light > li.active > a {
            background-color: #ffffff;
        }

        html ul.nav-pills-light > li.active > a:hover,
        html ul.nav-pills-light > li.active > a:focus {
            background-color: #ffffff;
        }

        .sort-source-wrapper .nav > li.active > a {
            color: ";
            // line 366
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .sort-source-wrapper .nav > li.active > a:hover,
        .sort-source-wrapper .nav > li.active > a:focus {
            color: ";
            // line 371
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .sort-source.sort-source-style-2 > li.active > a:after {
            border-top-color: ";
            // line 375
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .label-primary {
            background-color: ";
            // line 379
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .label-secondary {
            background-color: #e36159;
        }

        html .label-tertiary {
            background-color: #2baab1;
        }

        html .label-quaternary {
            background-color: #383f48;
        }

        html .label-dark {
            background-color: #2e353e;
        }

        html .label-light {
            background-color: #ffffff;
        }

        .btn-link {
            color: ";
            // line 403
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .btn-link:hover {
            color: ";
            // line 407
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .btn-link:active {
            color: ";
            // line 411
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .btn-primary {
            color: #ffffff;
            background-color: ";
            // line 416
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 417
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #006699;
        }

        html .btn-primary:hover {
            border-color: ";
            // line 421
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 422
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .btn-primary:active,
        html .btn-primary:focus,
        html .btn-primary:active:hover,
        html .btn-primary:active:focus {
            border-color: ";
            // line 429
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 430
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .btn-primary.dropdown-toggle {
            border-left-color: ";
            // line 434
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .btn-primary[disabled],
        html .btn-primary[disabled]:hover,
        html .btn-primary[disabled]:active,
        html .btn-primary[disabled]:focus {
            border-color: #33bbff;
            background-color: #33bbff;
        }

        html .btn-primary:hover,
        html .btn-primary:focus,
        html .btn-primary:active:hover,
        html .btn-primary:active:focus {
            color: #ffffff;
        }

        html .btn-primary-scale-2 {
            color: #ffffff;
            background-color: #006699;
            border-color: #006699 #006699 #004466;
        }

        html .btn-primary-scale-2:hover {
            border-color: ";
            // line 459
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #005580;
            background-color: ";
            // line 460
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .btn-primary-scale-2:active,
        html .btn-primary-scale-2:focus,
        html .btn-primary-scale-2:active:hover,
        html .btn-primary-scale-2:active:focus {
            border-color: #005580 #005580 #005580;
            background-color: #005580;
        }

        html .btn-primary-scale-2.dropdown-toggle {
            border-left-color: #005580;
        }

        html .btn-primary-scale-2[disabled],
        html .btn-primary-scale-2[disabled]:hover,
        html .btn-primary-scale-2[disabled]:active,
        html .btn-primary-scale-2[disabled]:focus {
            border-color: #00aaff;
            background-color: #00aaff;
        }

        html .btn-secondary {
            color: #ffffff;
            background-color: #e36159;
            border-color: #e36159 #e36159 #dc372d;
        }

        html .btn-secondary:hover {
            border-color: #e7766f #e7766f #df4c43;
            background-color: #e7766f;
        }

        html .btn-secondary:active,
        html .btn-secondary:focus,
        html .btn-secondary:active:hover,
        html .btn-secondary:active:focus {
            border-color: #df4c43 #df4c43 #df4c43;
            background-color: #df4c43;
        }

        html .btn-secondary.dropdown-toggle {
            border-left-color: #df4c43;
        }

        html .btn-secondary[disabled],
        html .btn-secondary[disabled]:hover,
        html .btn-secondary[disabled]:active,
        html .btn-secondary[disabled]:focus {
            border-color: #f2b4b0;
            background-color: #f2b4b0;
        }

        html .btn-secondary:hover,
        html .btn-secondary:focus,
        html .btn-secondary:active:hover,
        html .btn-secondary:active:focus {
            color: #ffffff;
        }

        html .btn-secondary-scale-2 {
            color: #ffffff;
            background-color: #dc372d;
            border-color: #dc372d #dc372d #b7281f;
        }

        html .btn-secondary-scale-2:hover {
            border-color: #df4c43 #df4c43 #cd2c23;
            background-color: #df4c43;
        }

        html .btn-secondary-scale-2:active,
        html .btn-secondary-scale-2:focus,
        html .btn-secondary-scale-2:active:hover,
        html .btn-secondary-scale-2:active:focus {
            border-color: #cd2c23 #cd2c23 #cd2c23;
            background-color: #cd2c23;
        }

        html .btn-secondary-scale-2.dropdown-toggle {
            border-left-color: #cd2c23;
        }

        html .btn-secondary-scale-2[disabled],
        html .btn-secondary-scale-2[disabled]:hover,
        html .btn-secondary-scale-2[disabled]:active,
        html .btn-secondary-scale-2[disabled]:focus {
            border-color: #ea8b85;
            background-color: #ea8b85;
        }

        html .btn-tertiary {
            color: #ffffff;
            background-color: #2baab1;
            border-color: #2baab1 #2baab1 #218388;
        }

        html .btn-tertiary:hover {
            border-color: #30bec6 #30bec6 #26969c;
            background-color: #30bec6;
        }

        html .btn-tertiary:active,
        html .btn-tertiary:focus,
        html .btn-tertiary:active:hover,
        html .btn-tertiary:active:focus {
            border-color: #26969c #26969c #26969c;
            background-color: #26969c;
        }

        html .btn-tertiary.dropdown-toggle {
            border-left-color: #26969c;
        }

        html .btn-tertiary[disabled],
        html .btn-tertiary[disabled]:hover,
        html .btn-tertiary[disabled]:active,
        html .btn-tertiary[disabled]:focus {
            border-color: #68d4da;
            background-color: #68d4da;
        }

        html .btn-tertiary:hover,
        html .btn-tertiary:focus,
        html .btn-tertiary:active:hover,
        html .btn-tertiary:active:focus {
            color: #ffffff;
        }

        html .btn-tertiary-scale-2 {
            color: #ffffff;
            background-color: #218388;
            border-color: #218388 #218388 #175b5f;
        }

        html .btn-tertiary-scale-2:hover {
            border-color: #26969c #26969c #1c6f73;
            background-color: #26969c;
        }

        html .btn-tertiary-scale-2:active,
        html .btn-tertiary-scale-2:focus,
        html .btn-tertiary-scale-2:active:hover,
        html .btn-tertiary-scale-2:active:focus {
            border-color: #1c6f73 #1c6f73 #1c6f73;
            background-color: #1c6f73;
        }

        html .btn-tertiary-scale-2.dropdown-toggle {
            border-left-color: #1c6f73;
        }

        html .btn-tertiary-scale-2[disabled],
        html .btn-tertiary-scale-2[disabled]:hover,
        html .btn-tertiary-scale-2[disabled]:active,
        html .btn-tertiary-scale-2[disabled]:focus {
            border-color: #3fc9d0;
            background-color: #3fc9d0;
        }

        html .btn-quaternary {
            color: #ffffff;
            background-color: #383f48;
            border-color: #383f48 #383f48 #22262b;
        }

        html .btn-quaternary:hover {
            border-color: #434c56 #434c56 #2d323a;
            background-color: #434c56;
        }

        html .btn-quaternary:active,
        html .btn-quaternary:focus,
        html .btn-quaternary:active:hover,
        html .btn-quaternary:active:focus {
            border-color: #2d323a #2d323a #2d323a;
            background-color: #2d323a;
        }

        html .btn-quaternary.dropdown-toggle {
            border-left-color: #2d323a;
        }

        html .btn-quaternary[disabled],
        html .btn-quaternary[disabled]:hover,
        html .btn-quaternary[disabled]:active,
        html .btn-quaternary[disabled]:focus {
            border-color: #657181;
            background-color: #657181;
        }

        html .btn-quaternary:hover,
        html .btn-quaternary:focus,
        html .btn-quaternary:active:hover,
        html .btn-quaternary:active:focus {
            color: #ffffff;
        }

        html .btn-quaternary-scale-2 {
            color: #ffffff;
            background-color: #22262b;
            border-color: #22262b #22262b #0b0d0f;
        }

        html .btn-quaternary-scale-2:hover {
            border-color: #2d323a #2d323a #17191d;
            background-color: #2d323a;
        }

        html .btn-quaternary-scale-2:active,
        html .btn-quaternary-scale-2:focus,
        html .btn-quaternary-scale-2:active:hover,
        html .btn-quaternary-scale-2:active:focus {
            border-color: #17191d #17191d #17191d;
            background-color: #17191d;
        }

        html .btn-quaternary-scale-2.dropdown-toggle {
            border-left-color: #17191d;
        }

        html .btn-quaternary-scale-2[disabled],
        html .btn-quaternary-scale-2[disabled]:hover,
        html .btn-quaternary-scale-2[disabled]:active,
        html .btn-quaternary-scale-2[disabled]:focus {
            border-color: #4e5865;
            background-color: #4e5865;
        }

        html .btn-dark {
            color: #ffffff;
            background-color: #2e353e;
            border-color: #2e353e #2e353e #181c21;
        }

        html .btn-dark:hover {
            border-color: #39424d #39424d #23282f;
            background-color: #39424d;
        }

        html .btn-dark:active,
        html .btn-dark:focus,
        html .btn-dark:active:hover,
        html .btn-dark:active:focus {
            border-color: #23282f #23282f #23282f;
            background-color: #23282f;
        }

        html .btn-dark.dropdown-toggle {
            border-left-color: #23282f;
        }

        html .btn-dark[disabled],
        html .btn-dark[disabled]:hover,
        html .btn-dark[disabled]:active,
        html .btn-dark[disabled]:focus {
            border-color: #596779;
            background-color: #596779;
        }

        html .btn-dark:hover,
        html .btn-dark:focus,
        html .btn-dark:active:hover,
        html .btn-dark:active:focus {
            color: #ffffff;
        }

        html .btn-dark-scale-2 {
            color: #ffffff;
            background-color: #181c21;
            border-color: #181c21 #181c21 #030303;
        }

        html .btn-dark-scale-2:hover {
            border-color: #23282f #23282f #0d0f12;
            background-color: #23282f;
        }

        html .btn-dark-scale-2:active,
        html .btn-dark-scale-2:focus,
        html .btn-dark-scale-2:active:hover,
        html .btn-dark-scale-2:active:focus {
            border-color: #0d0f12 #0d0f12 #0d0f12;
            background-color: #0d0f12;
        }

        html .btn-dark-scale-2.dropdown-toggle {
            border-left-color: #0d0f12;
        }

        html .btn-dark-scale-2[disabled],
        html .btn-dark-scale-2[disabled]:hover,
        html .btn-dark-scale-2[disabled]:active,
        html .btn-dark-scale-2[disabled]:focus {
            border-color: #444e5b;
            background-color: #444e5b;
        }

        html .btn-light {
            color: #ffffff;
            background-color: #ffffff;
            border-color: #ffffff #ffffff #e6e6e6;
        }

        html .btn-light:hover {
            border-color: #ffffff #ffffff #f2f2f2;
            background-color: #ffffff;
        }

        html .btn-light:active,
        html .btn-light:focus,
        html .btn-light:active:hover,
        html .btn-light:active:focus {
            border-color: #f2f2f2 #f2f2f2 #f2f2f2;
            background-color: #f2f2f2;
        }

        html .btn-light.dropdown-toggle {
            border-left-color: #f2f2f2;
        }

        html .btn-light[disabled],
        html .btn-light[disabled]:hover,
        html .btn-light[disabled]:active,
        html .btn-light[disabled]:focus {
            border-color: #ffffff;
            background-color: #ffffff;
        }

        html .btn-light:hover,
        html .btn-light:focus,
        html .btn-light:active:hover,
        html .btn-light:active:focus {
            color: #777777;
        }

        html .btn-light-scale-2 {
            color: #ffffff;
            background-color: #e6e6e6;
            border-color: #e6e6e6 #e6e6e6 #cccccc;
        }

        html .btn-light-scale-2:hover {
            border-color: #f2f2f2 #f2f2f2 #d9d9d9;
            background-color: #f2f2f2;
        }

        html .btn-light-scale-2:active,
        html .btn-light-scale-2:focus,
        html .btn-light-scale-2:active:hover,
        html .btn-light-scale-2:active:focus {
            border-color: #d9d9d9 #d9d9d9 #d9d9d9;
            background-color: #d9d9d9;
        }

        html .btn-light-scale-2.dropdown-toggle {
            border-left-color: #d9d9d9;
        }

        html .btn-light-scale-2[disabled],
        html .btn-light-scale-2[disabled]:hover,
        html .btn-light-scale-2[disabled]:active,
        html .btn-light-scale-2[disabled]:focus {
            border-color: #ffffff;
            background-color: #ffffff;
        }

        html .btn-borders.btn-primary {
            background: transparent;
            border-color: ";
            // line 830
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: ";
            // line 831
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            text-shadow: none;
        }

        html .btn-borders.btn-primary:hover,
        html .btn-borders.btn-primary:focus {
            background-color: ";
            // line 837
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 838
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #006699;
            border-color: ";
            // line 839
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
            color: #ffffff;
        }

        html .btn-borders.btn-primary:hover:hover,
        html .btn-borders.btn-primary:focus:hover {
            border-color: ";
            // line 845
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 846
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .btn-borders.btn-primary:hover:active,
        html .btn-borders.btn-primary:focus:active,
        html .btn-borders.btn-primary:hover:focus,
        html .btn-borders.btn-primary:focus:focus,
        html .btn-borders.btn-primary:hover:active:hover,
        html .btn-borders.btn-primary:focus:active:hover,
        html .btn-borders.btn-primary:hover:active:focus,
        html .btn-borders.btn-primary:focus:active:focus {
            border-color: ";
            // line 857
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 858
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .btn-borders.btn-primary:hover.dropdown-toggle,
        html .btn-borders.btn-primary:focus.dropdown-toggle {
            border-left-color: ";
            // line 863
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .btn-borders.btn-primary:hover[disabled],
        html .btn-borders.btn-primary:focus[disabled],
        html .btn-borders.btn-primary:hover[disabled]:hover,
        html .btn-borders.btn-primary:focus[disabled]:hover,
        html .btn-borders.btn-primary:hover[disabled]:active,
        html .btn-borders.btn-primary:focus[disabled]:active,
        html .btn-borders.btn-primary:hover[disabled]:focus,
        html .btn-borders.btn-primary:focus[disabled]:focus {
            border-color: #33bbff;
            background-color: #33bbff;
        }

        html .btn-borders.btn-secondary {
            background: transparent;
            border-color: #e36159;
            color: #e36159;
            text-shadow: none;
        }

        html .btn-borders.btn-secondary:hover,
        html .btn-borders.btn-secondary:focus {
            background-color: #e36159;
            border-color: #e36159 #e36159 #dc372d;
            border-color: #e36159 !important;
            color: #ffffff;
        }

        html .btn-borders.btn-secondary:hover:hover,
        html .btn-borders.btn-secondary:focus:hover {
            border-color: #e7766f #e7766f #df4c43;
            background-color: #e7766f;
        }

        html .btn-borders.btn-secondary:hover:active,
        html .btn-borders.btn-secondary:focus:active,
        html .btn-borders.btn-secondary:hover:focus,
        html .btn-borders.btn-secondary:focus:focus,
        html .btn-borders.btn-secondary:hover:active:hover,
        html .btn-borders.btn-secondary:focus:active:hover,
        html .btn-borders.btn-secondary:hover:active:focus,
        html .btn-borders.btn-secondary:focus:active:focus {
            border-color: #df4c43 #df4c43 #df4c43;
            background-color: #df4c43;
        }

        html .btn-borders.btn-secondary:hover.dropdown-toggle,
        html .btn-borders.btn-secondary:focus.dropdown-toggle {
            border-left-color: #df4c43;
        }

        html .btn-borders.btn-secondary:hover[disabled],
        html .btn-borders.btn-secondary:focus[disabled],
        html .btn-borders.btn-secondary:hover[disabled]:hover,
        html .btn-borders.btn-secondary:focus[disabled]:hover,
        html .btn-borders.btn-secondary:hover[disabled]:active,
        html .btn-borders.btn-secondary:focus[disabled]:active,
        html .btn-borders.btn-secondary:hover[disabled]:focus,
        html .btn-borders.btn-secondary:focus[disabled]:focus {
            border-color: #f2b4b0;
            background-color: #f2b4b0;
        }

        html .btn-borders.btn-tertiary {
            background: transparent;
            border-color: #2baab1;
            color: #2baab1;
            text-shadow: none;
        }

        html .btn-borders.btn-tertiary:hover,
        html .btn-borders.btn-tertiary:focus {
            background-color: #2baab1;
            border-color: #2baab1 #2baab1 #218388;
            border-color: #2baab1 !important;
            color: #ffffff;
        }

        html .btn-borders.btn-tertiary:hover:hover,
        html .btn-borders.btn-tertiary:focus:hover {
            border-color: #30bec6 #30bec6 #26969c;
            background-color: #30bec6;
        }

        html .btn-borders.btn-tertiary:hover:active,
        html .btn-borders.btn-tertiary:focus:active,
        html .btn-borders.btn-tertiary:hover:focus,
        html .btn-borders.btn-tertiary:focus:focus,
        html .btn-borders.btn-tertiary:hover:active:hover,
        html .btn-borders.btn-tertiary:focus:active:hover,
        html .btn-borders.btn-tertiary:hover:active:focus,
        html .btn-borders.btn-tertiary:focus:active:focus {
            border-color: #26969c #26969c #26969c;
            background-color: #26969c;
        }

        html .btn-borders.btn-tertiary:hover.dropdown-toggle,
        html .btn-borders.btn-tertiary:focus.dropdown-toggle {
            border-left-color: #26969c;
        }

        html .btn-borders.btn-tertiary:hover[disabled],
        html .btn-borders.btn-tertiary:focus[disabled],
        html .btn-borders.btn-tertiary:hover[disabled]:hover,
        html .btn-borders.btn-tertiary:focus[disabled]:hover,
        html .btn-borders.btn-tertiary:hover[disabled]:active,
        html .btn-borders.btn-tertiary:focus[disabled]:active,
        html .btn-borders.btn-tertiary:hover[disabled]:focus,
        html .btn-borders.btn-tertiary:focus[disabled]:focus {
            border-color: #68d4da;
            background-color: #68d4da;
        }

        html .btn-borders.btn-quaternary {
            background: transparent;
            border-color: #383f48;
            color: #383f48;
            text-shadow: none;
        }

        html .btn-borders.btn-quaternary:hover,
        html .btn-borders.btn-quaternary:focus {
            background-color: #383f48;
            border-color: #383f48 #383f48 #22262b;
            border-color: #383f48 !important;
            color: #ffffff;
        }

        html .btn-borders.btn-quaternary:hover:hover,
        html .btn-borders.btn-quaternary:focus:hover {
            border-color: #434c56 #434c56 #2d323a;
            background-color: #434c56;
        }

        html .btn-borders.btn-quaternary:hover:active,
        html .btn-borders.btn-quaternary:focus:active,
        html .btn-borders.btn-quaternary:hover:focus,
        html .btn-borders.btn-quaternary:focus:focus,
        html .btn-borders.btn-quaternary:hover:active:hover,
        html .btn-borders.btn-quaternary:focus:active:hover,
        html .btn-borders.btn-quaternary:hover:active:focus,
        html .btn-borders.btn-quaternary:focus:active:focus {
            border-color: #2d323a #2d323a #2d323a;
            background-color: #2d323a;
        }

        html .btn-borders.btn-quaternary:hover.dropdown-toggle,
        html .btn-borders.btn-quaternary:focus.dropdown-toggle {
            border-left-color: #2d323a;
        }

        html .btn-borders.btn-quaternary:hover[disabled],
        html .btn-borders.btn-quaternary:focus[disabled],
        html .btn-borders.btn-quaternary:hover[disabled]:hover,
        html .btn-borders.btn-quaternary:focus[disabled]:hover,
        html .btn-borders.btn-quaternary:hover[disabled]:active,
        html .btn-borders.btn-quaternary:focus[disabled]:active,
        html .btn-borders.btn-quaternary:hover[disabled]:focus,
        html .btn-borders.btn-quaternary:focus[disabled]:focus {
            border-color: #657181;
            background-color: #657181;
        }

        html .btn-borders.btn-dark {
            background: transparent;
            border-color: #2e353e;
            color: #2e353e;
            text-shadow: none;
        }

        html .btn-borders.btn-dark:hover,
        html .btn-borders.btn-dark:focus {
            background-color: #2e353e;
            border-color: #2e353e #2e353e #181c21;
            border-color: #2e353e !important;
            color: #ffffff;
        }

        html .btn-borders.btn-dark:hover:hover,
        html .btn-borders.btn-dark:focus:hover {
            border-color: #39424d #39424d #23282f;
            background-color: #39424d;
        }

        html .btn-borders.btn-dark:hover:active,
        html .btn-borders.btn-dark:focus:active,
        html .btn-borders.btn-dark:hover:focus,
        html .btn-borders.btn-dark:focus:focus,
        html .btn-borders.btn-dark:hover:active:hover,
        html .btn-borders.btn-dark:focus:active:hover,
        html .btn-borders.btn-dark:hover:active:focus,
        html .btn-borders.btn-dark:focus:active:focus {
            border-color: #23282f #23282f #23282f;
            background-color: #23282f;
        }

        html .btn-borders.btn-dark:hover.dropdown-toggle,
        html .btn-borders.btn-dark:focus.dropdown-toggle {
            border-left-color: #23282f;
        }

        html .btn-borders.btn-dark:hover[disabled],
        html .btn-borders.btn-dark:focus[disabled],
        html .btn-borders.btn-dark:hover[disabled]:hover,
        html .btn-borders.btn-dark:focus[disabled]:hover,
        html .btn-borders.btn-dark:hover[disabled]:active,
        html .btn-borders.btn-dark:focus[disabled]:active,
        html .btn-borders.btn-dark:hover[disabled]:focus,
        html .btn-borders.btn-dark:focus[disabled]:focus {
            border-color: #596779;
            background-color: #596779;
        }

        html .btn-borders.btn-light {
            background: transparent;
            border-color: #ffffff;
            color: #ffffff;
            text-shadow: none;
        }

        html .btn-borders.btn-light:hover,
        html .btn-borders.btn-light:focus {
            color: #ffffff;
            background-color: #ffffff;
            border-color: #ffffff #ffffff #e6e6e6;
            border-color: #ffffff !important;
            color: #777777;
        }

        html .btn-borders.btn-light:hover:hover,
        html .btn-borders.btn-light:focus:hover {
            border-color: #ffffff #ffffff #f2f2f2;
            background-color: #ffffff;
        }

        html .btn-borders.btn-light:hover:active,
        html .btn-borders.btn-light:focus:active,
        html .btn-borders.btn-light:hover:focus,
        html .btn-borders.btn-light:focus:focus,
        html .btn-borders.btn-light:hover:active:hover,
        html .btn-borders.btn-light:focus:active:hover,
        html .btn-borders.btn-light:hover:active:focus,
        html .btn-borders.btn-light:focus:active:focus {
            border-color: #f2f2f2 #f2f2f2 #f2f2f2;
            background-color: #f2f2f2;
        }

        html .btn-borders.btn-light:hover.dropdown-toggle,
        html .btn-borders.btn-light:focus.dropdown-toggle {
            border-left-color: #f2f2f2;
        }

        html .btn-borders.btn-light:hover[disabled],
        html .btn-borders.btn-light:focus[disabled],
        html .btn-borders.btn-light:hover[disabled]:hover,
        html .btn-borders.btn-light:focus[disabled]:hover,
        html .btn-borders.btn-light:hover[disabled]:active,
        html .btn-borders.btn-light:focus[disabled]:active,
        html .btn-borders.btn-light:hover[disabled]:focus,
        html .btn-borders.btn-light:focus[disabled]:focus {
            border-color: #ffffff;
            background-color: #ffffff;
        }

        .pagination > li > a,
        .pagination > li > span,
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: ";
            // line 1135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            background-color: ";
            // line 1144
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
            border-color: ";
            // line 1145
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        body.dark .pagination > li > a,
        body.dark .pagination > li > span,
        body.dark .pagination > li > a:hover,
        body.dark .pagination > li > span:hover,
        body.dark .pagination > li > a:focus,
        body.dark .pagination > li > span:focus {
            color: ";
            // line 1154
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        body.dark .pagination > .active > a,
        body.dark .pagination > .active > span,
        body.dark .pagination > .active > a:hover,
        body.dark .pagination > .active > span:hover,
        body.dark .pagination > .active > a:focus,
        body.dark .pagination > .active > span:focus {
            background-color: ";
            // line 1163
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 1164
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .pagination > .active > a,
        body.dark .pagination > .active > a {
            color: #ffffff;
            background-color: ";
            // line 1170
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 1171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #006699;
        }

        .pagination > .active > a:hover,
        body.dark .pagination > .active > a:hover {
            border-color: ";
            // line 1176
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 1177
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .pagination > .active > a:active,
        body.dark .pagination > .active > a:active,
        .pagination > .active > a:focus,
        body.dark .pagination > .active > a:focus,
        .pagination > .active > a:active:hover,
        body.dark .pagination > .active > a:active:hover,
        .pagination > .active > a:active:focus,
        body.dark .pagination > .active > a:active:focus {
            border-color: ";
            // line 1188
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 1189
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .pagination > .active > a.dropdown-toggle,
        body.dark .pagination > .active > a.dropdown-toggle {
            border-left-color: ";
            // line 1194
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .pagination > .active > a[disabled],
        body.dark .pagination > .active > a[disabled],
        .pagination > .active > a[disabled]:hover,
        body.dark .pagination > .active > a[disabled]:hover,
        .pagination > .active > a[disabled]:active,
        body.dark .pagination > .active > a[disabled]:active,
        .pagination > .active > a[disabled]:focus,
        body.dark .pagination > .active > a[disabled]:focus {
            border-color: #33bbff;
            background-color: #33bbff;
        }

        html .alert-primary {
            background-color: ";
            // line 1210
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: #007ebd;
            color: #ffffff;
        }

        html .alert-primary .alert-link {
            color: #ffffff;
        }

        html .alert-secondary {
            background-color: #e36159;
            border-color: #e1554c;
            color: #ffffff;
        }

        html .alert-secondary .alert-link {
            color: #ffffff;
        }

        html .alert-tertiary {
            background-color: #2baab1;
            border-color: #289ea5;
            color: #ffffff;
        }

        html .alert-tertiary .alert-link {
            color: #ffffff;
        }

        html .alert-quaternary {
            background-color: #383f48;
            border-color: #31373f;
            color: #ffffff;
        }

        html .alert-quaternary .alert-link {
            color: #ffffff;
        }

        html .alert-dark {
            background-color: #2e353e;
            border-color: #272d35;
            color: #ffffff;
        }

        html .alert-dark .alert-link {
            color: #ffffff;
        }

        html .alert-light {
            background-color: #ffffff;
            border-color: #f7f7f7;
            color: #777777;
        }

        html .alert-light .alert-link {
            color: #777777;
        }

        html .progress-bar-primary {
            background-color: ";
            // line 1270
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .progress-bar-secondary {
            background-color: #e36159;
        }

        html .progress-bar-tertiary {
            background-color: #2baab1;
        }

        html .progress-bar-quaternary {
            background-color: #383f48;
        }

        html .progress-bar-dark {
            background-color: #2e353e;
        }

        html .progress-bar-light {
            background-color: #ffffff;
        }

        html section.section-primary {
            background-color: ";
            // line 1294
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
            border-color: ";
            // line 1295
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
        }

        html section.section-primary h1,
        html section.section-primary h2,
        html section.section-primary h3,
        html section.section-primary h4,
        html section.section-primary h5,
        html section.section-primary h6 {
            color: #ffffff;
        }

        html section.section-primary p {
            color: #e6e6e6;
        }

        html section.section-primary-scale-2 {
            background-color: #006699 !important;
            border-color: #005580 !important;
        }

        html section.section-primary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
            border-top-color: #006699;
        }

        html section.section-secondary {
            background-color: #e36159 !important;
            border-color: #df4c43 !important;
        }

        html section.section-secondary h1,
        html section.section-secondary h2,
        html section.section-secondary h3,
        html section.section-secondary h4,
        html section.section-secondary h5,
        html section.section-secondary h6 {
            color: #ffffff;
        }

        html section.section-secondary p {
            color: #e6e6e6;
        }

        html section.section-secondary-scale-2 {
            background-color: #dc372d !important;
            border-color: #cd2c23 !important;
        }

        html section.section-secondary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
            border-top-color: #dc372d;
        }

        html section.section-tertiary {
            background-color: #2baab1 !important;
            border-color: #26969c !important;
        }

        html section.section-tertiary h1,
        html section.section-tertiary h2,
        html section.section-tertiary h3,
        html section.section-tertiary h4,
        html section.section-tertiary h5,
        html section.section-tertiary h6 {
            color: #ffffff;
        }

        html section.section-tertiary p {
            color: #e6e6e6;
        }

        html section.section-tertiary-scale-2 {
            background-color: #218388 !important;
            border-color: #1c6f73 !important;
        }

        html section.section-tertiary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
            border-top-color: #218388;
        }

        html section.section-quaternary {
            background-color: #383f48 !important;
            border-color: #2d323a !important;
        }

        html section.section-quaternary h1,
        html section.section-quaternary h2,
        html section.section-quaternary h3,
        html section.section-quaternary h4,
        html section.section-quaternary h5,
        html section.section-quaternary h6 {
            color: #ffffff;
        }

        html section.section-quaternary p {
            color: #e6e6e6;
        }

        html section.section-quaternary-scale-2 {
            background-color: #22262b !important;
            border-color: #17191d !important;
        }

        html section.section-quaternary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
            border-top-color: #22262b;
        }

        html section.section-dark {
            background-color: #2e353e !important;
            border-color: #23282f !important;
        }

        html section.section-dark h1,
        html section.section-dark h2,
        html section.section-dark h3,
        html section.section-dark h4,
        html section.section-dark h5,
        html section.section-dark h6 {
            color: #ffffff;
        }

        html section.section-dark p {
            color: #e6e6e6;
        }

        html section.section-dark-scale-2 {
            background-color: #181c21 !important;
            border-color: #0d0f12 !important;
        }

        html section.section-dark-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
            border-top-color: #181c21;
        }

        html section.section-light {
            background-color: #ffffff !important;
            border-color: #f2f2f2 !important;
        }

        html section.section-light h1,
        html section.section-light h2,
        html section.section-light h3,
        html section.section-light h4,
        html section.section-light h5,
        html section.section-light h6 {
            color: #777777;
        }

        html section.section-light p {
            color: #5e5e5e;
        }

        html section.section-light-scale-2 {
            background-color: #e6e6e6 !important;
            border-color: #d9d9d9 !important;
        }

        html section.section-light-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
            border-top-color: #e6e6e6;
        }

        html section.section-default-scale-1 {
            background-color: #dbdbdb !important;
            border-top-color: #d3d3d3 !important;
        }

        html section.section-default-scale-2 {
            background-color: #c1c1c1 !important;
            border-top-color: #b9b9b9 !important;
        }

        html section.section-default-scale-3 {
            background-color: #a8a8a8 !important;
            border-top-color: #a0a0a0 !important;
        }

        html section.section-default-scale-4 {
            background-color: #8e8e8e !important;
            border-top-color: #868686 !important;
        }

        html section.section-default-scale-5 {
            background-color: #757575 !important;
            border-top-color: #6d6d6d !important;
        }

        html section.section-default-scale-6 {
            background-color: #5b5b5b !important;
            border-top-color: #535353 !important;
        }

        html section.section-default-scale-7 {
            background-color: #424242 !important;
            border-top-color: #3a3a3a !important;
        }

        html section.section-default-scale-8 {
            background-color: #282828 !important;
            border-top-color: #202020 !important;
        }

        html section.section-default-scale-9 {
            background-color: #0f0f0f !important;
            border-top-color: #070707 !important;
        }

        html.dark section.section-default-scale-1 {
            background-color: #333a44 !important;
            border-top-color: #2c323b !important;
        }

        html.dark section.section-default-scale-2 {
            background-color: #495362 !important;
            border-top-color: #424b59 !important;
        }

        html.dark section.section-default-scale-3 {
            background-color: #5e6b7f !important;
            border-top-color: #586476 !important;
        }

        html.dark section.section-default-scale-4 {
            background-color: #77849a !important;
            border-top-color: #6e7d93 !important;
        }

        html.dark section.section-default-scale-5 {
            background-color: #949faf !important;
            border-top-color: #8b97a9 !important;
        }

        html.dark section.section-default-scale-6 {
            background-color: #b1b9c5 !important;
            border-top-color: #a8b1be !important;
        }

        html.dark section.section-default-scale-7 {
            background-color: #ced3db !important;
            border-top-color: #c5cbd4 !important;
        }

        html.dark section.section-default-scale-8 {
            background-color: #ebeef1 !important;
            border-top-color: #e3e6ea !important;
        }

        html.dark section.section-default-scale-9 {
            background-color: #ffffff !important;
            border-top-color: #f7f7f7 !important;
        }

        section.page-header h1 {
            border-bottom-color: ";
            // line 1546
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        section.page-header.custom-product {
            background-color: ";
            // line 1550
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-top-color: #0081c2;
        }

        html .page-header-color.page-header-primary {
            background-color: ";
            // line 1555
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-bottom-color: ";
            // line 1556
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: #ffffff;
        }

        html .page-header-color.page-header-primary h1 {
            color: #ffffff;
        }

        html .page-header-color.page-header-primary h1 span {
            color: #ffffff;
        }

        html .page-header-color.page-header-primary a {
            color: #ffffff;
        }

        html .page-header-color.page-header-primary .breadcrumb > .active {
            color: #ffffff;
        }

        html .page-header-color.page-header-secondary {
            background-color: #e36159;
            border-bottom-color: #e36159;
            color: #ffffff;
        }

        html .page-header-color.page-header-secondary h1 {
            color: #ffffff;
        }

        html .page-header-color.page-header-secondary h1 span {
            color: #ffffff;
        }

        html .page-header-color.page-header-secondary a {
            color: #ffffff;
        }

        html .page-header-color.page-header-secondary .breadcrumb > .active {
            color: #ffffff;
        }

        html .page-header-color.page-header-tertiary {
            background-color: #2baab1;
            border-bottom-color: #2baab1;
            color: #ffffff;
        }

        html .page-header-color.page-header-tertiary h1 {
            color: #ffffff;
        }

        html .page-header-color.page-header-tertiary h1 span {
            color: #ffffff;
        }

        html .page-header-color.page-header-tertiary a {
            color: #ffffff;
        }

        html .page-header-color.page-header-tertiary .breadcrumb > .active {
            color: #ffffff;
        }

        html .page-header-color.page-header-quaternary {
            background-color: #383f48;
            border-bottom-color: #383f48;
            color: #ffffff;
        }

        html .page-header-color.page-header-quaternary h1 {
            color: #ffffff;
        }

        html .page-header-color.page-header-quaternary h1 span {
            color: #ffffff;
        }

        html .page-header-color.page-header-quaternary a {
            color: #ffffff;
        }

        html .page-header-color.page-header-quaternary .breadcrumb > .active {
            color: #ffffff;
        }

        html .page-header-color.page-header-dark {
            background-color: #2e353e;
            border-bottom-color: #2e353e;
            color: #ffffff;
        }

        html .page-header-color.page-header-dark h1 {
            color: #ffffff;
        }

        html .page-header-color.page-header-dark h1 span {
            color: #ffffff;
        }

        html .page-header-color.page-header-dark a {
            color: #ffffff;
        }

        html .page-header-color.page-header-dark .breadcrumb > .active {
            color: #ffffff;
        }

        html .page-header-color.page-header-light {
            background-color: #ffffff;
            border-bottom-color: #ffffff;
            color: #777777;
        }

        html .page-header-color.page-header-light h1 {
            color: #777777;
        }

        html .page-header-color.page-header-light h1 span {
            color: #777777;
        }

        html .page-header-color.page-header-light a {
            color: #777777;
        }

        html .page-header-color.page-header-light .breadcrumb > .active {
            color: #777777;
        }

        html .toggle-primary .toggle label {
            color: ";
            // line 1687
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-left-color: ";
            // line 1688
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-right-color: ";
            // line 1689
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .toggle-primary .toggle.active > label {
            background-color: ";
            // line 1693
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 1694
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: #ffffff;
        }

        html .toggle-primary.toggle-simple .toggle > label:after {
            background-color: ";
            // line 1699
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .toggle-secondary .toggle label {
            color: #e36159;
            border-left-color: #e36159;
            border-right-color: #e36159;
        }

        html .toggle-secondary .toggle.active > label {
            background-color: #e36159;
            border-color: #e36159;
            color: #ffffff;
        }

        html .toggle-secondary.toggle-simple .toggle > label:after {
            background-color: #e36159;
        }

        html .toggle-tertiary .toggle label {
            color: #2baab1;
            border-left-color: #2baab1;
            border-right-color: #2baab1;
        }

        html .toggle-tertiary .toggle.active > label {
            background-color: #2baab1;
            border-color: #2baab1;
            color: #ffffff;
        }

        html .toggle-tertiary.toggle-simple .toggle > label:after {
            background-color: #2baab1;
        }

        html .toggle-quaternary .toggle label {
            color: #383f48;
            border-left-color: #383f48;
            border-right-color: #383f48;
        }

        html .toggle-quaternary .toggle.active > label {
            background-color: #383f48;
            border-color: #383f48;
            color: #ffffff;
        }

        html .toggle-quaternary.toggle-simple .toggle > label:after {
            background-color: #383f48;
        }

        html .toggle-dark .toggle label {
            color: #2e353e;
            border-left-color: #2e353e;
            border-right-color: #2e353e;
        }

        html .toggle-dark .toggle.active > label {
            background-color: #2e353e;
            border-color: #2e353e;
            color: #ffffff;
        }

        html .toggle-dark.toggle-simple .toggle > label:after {
            background-color: #2e353e;
        }

        html .toggle-light .toggle label {
            color: #ffffff;
            border-left-color: #ffffff;
            border-right-color: #ffffff;
        }

        html .toggle-light .toggle.active > label {
            background-color: #ffffff;
            border-color: #ffffff;
            color: #777777;
        }

        html .toggle-light.toggle-simple .toggle > label:after {
            background-color: #ffffff;
        }

        .thumb-info .thumb-info-type {
            background-color: ";
            // line 1783
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .thumb-info .thumb-info-action-icon {
            background-color: ";
            // line 1787
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .thumb-info-social-icons a {
            background-color: ";
            // line 1791
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .thumbnail .zoom {
            background-color: ";
            // line 1795
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .img-thumbnail .zoom {
            background-color: ";
            // line 1799
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .thumb-info .thumb-info-action-icon-primary {
            background-color: ";
            // line 1803
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .thumb-info .thumb-info-action-icon-primary i {
            color: #ffffff;
        }

        html .thumb-info .thumb-info-action-icon-secondary {
            background-color: #e36159;
        }

        html .thumb-info .thumb-info-action-icon-secondary i {
            color: #ffffff;
        }

        html .thumb-info .thumb-info-action-icon-tertiary {
            background-color: #2baab1;
        }

        html .thumb-info .thumb-info-action-icon-tertiary i {
            color: #ffffff;
        }

        html .thumb-info .thumb-info-action-icon-quaternary {
            background-color: #383f48;
        }

        html .thumb-info .thumb-info-action-icon-quaternary i {
            color: #ffffff;
        }

        html .thumb-info .thumb-info-action-icon-dark {
            background-color: #2e353e;
        }

        html .thumb-info .thumb-info-action-icon-dark i {
            color: #ffffff;
        }

        html .thumb-info .thumb-info-action-icon-light {
            background-color: #ffffff;
        }

        html .thumb-info .thumb-info-action-icon-light i {
            color: #777777;
        }

        .thumb-info-ribbon {
            background: ";
            // line 1851
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .thumb-info-ribbon:before {
            border-right-color: #005580;
            border-left-color: #005580;
        }

        .inverted {
            background-color: ";
            // line 1860
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .inverted-primary {
            background-color: ";
            // line 1864
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .inverted-secondary {
            background-color: #e36159;
        }

        html .inverted-tertiary {
            background-color: #2baab1;
        }

        html .inverted-quaternary {
            background-color: #383f48;
        }

        html .inverted-dark {
            background-color: #2e353e;
        }

        html .inverted-light {
            background-color: #ffffff;
        }

        .owl-carousel .owl-dots .owl-dot.active span,
        .owl-carousel .owl-dots .owl-dot:hover span {
            background-color: #0074ad;
        }

        .owl-carousel.show-nav-title .owl-nav [class*=\"owl-\"] {
            color: ";
            // line 1893
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .owl-carousel .owl-nav [class*=\"owl-\"] {
            color: #ffffff;
            background-color: ";
            // line 1898
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 1899
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #006699;
        }

        .owl-carousel .owl-nav [class*=\"owl-\"]:hover {
            border-color: ";
            // line 1903
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 1904
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .owl-carousel .owl-nav [class*=\"owl-\"]:active,
        .owl-carousel .owl-nav [class*=\"owl-\"]:focus,
        .owl-carousel .owl-nav [class*=\"owl-\"]:active:hover,
        .owl-carousel .owl-nav [class*=\"owl-\"]:active:focus {
            border-color: ";
            // line 1911
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 1912
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .owl-carousel .owl-nav [class*=\"owl-\"].dropdown-toggle {
            border-left-color: ";
            // line 1916
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .owl-carousel .owl-nav [class*=\"owl-\"][disabled],
        .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:hover,
        .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:active,
        .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:focus {
            border-color: #33bbff;
            background-color: #33bbff;
        }

        html body .tabs .nav-tabs a,
        html.dark body .tabs .nav-tabs a,
        html body .tabs .nav-tabs a:hover,
        html.dark body .tabs .nav-tabs a:hover {
            color: ";
            // line 1931
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs .nav-tabs a:hover,
        html.dark body .tabs .nav-tabs a:hover,
        html body .tabs .nav-tabs a:focus,
        html.dark body .tabs .nav-tabs a:focus {
            border-top-color: ";
            // line 1938
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs .nav-tabs li.active a,
        html.dark body .tabs .nav-tabs li.active a {
            border-top-color: ";
            // line 1943
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: ";
            // line 1944
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs .nav-tabs.nav-justified a:hover,
        html.dark body .tabs .nav-tabs.nav-justified a:hover,
        html body .tabs .nav-tabs.nav-justified a:focus,
        html.dark body .tabs .nav-tabs.nav-justified a:focus {
            border-top-color: ";
            // line 1951
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs.tabs-bottom .nav-tabs li a:hover,
        html.dark body .tabs.tabs-bottom .nav-tabs li a:hover,
        html body .tabs.tabs-bottom .nav-tabs li.active a,
        html.dark body .tabs.tabs-bottom .nav-tabs li.active a,
        html body .tabs.tabs-bottom .nav-tabs li.active a:hover,
        html.dark body .tabs.tabs-bottom .nav-tabs li.active a:hover,
        html body .tabs.tabs-bottom .nav-tabs li.active a:focus,
        html.dark body .tabs.tabs-bottom .nav-tabs li.active a:focus {
            border-bottom-color: ";
            // line 1962
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
        html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
        html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
        html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
        html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
        html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
        html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus,
        html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {
            border-left-color: ";
            // line 1973
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
        html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
        html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
        html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
        html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
        html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
        html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus,
        html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {
            border-right-color: ";
            // line 1984
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs.tabs-simple .nav-tabs > li.active a,
        html.dark body .tabs.tabs-simple .nav-tabs > li.active a,
        html body .tabs.tabs-simple .nav-tabs > li.active a:focus,
        html.dark body .tabs.tabs-simple .nav-tabs > li.active a:focus,
        html body .tabs.tabs-simple .nav-tabs > li a:hover,
        html.dark body .tabs.tabs-simple .nav-tabs > li a:hover,
        html body .tabs.tabs-simple .nav-tabs > li.active a:hover,
        html.dark body .tabs.tabs-simple .nav-tabs > li.active a:hover {
            border-top-color: ";
            // line 1995
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: ";
            // line 1996
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary .nav-tabs li a,
        html.dark body .tabs-primary .nav-tabs li a,
        html body .tabs-primary .nav-tabs.nav-justified li a,
        html.dark body .tabs-primary .nav-tabs.nav-justified li a,
        html body .tabs-primary .nav-tabs li a:hover,
        html.dark body .tabs-primary .nav-tabs li a:hover,
        html body .tabs-primary .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {
            color: ";
            // line 2007
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary .nav-tabs li a:hover,
        html.dark body .tabs-primary .nav-tabs li a:hover,
        html body .tabs-primary .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {
            border-top-color: ";
            // line 2014
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary .nav-tabs li.active a,
        html.dark body .tabs-primary .nav-tabs li.active a,
        html body .tabs-primary .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-primary .nav-tabs.nav-justified li.active a,
        html body .tabs-primary .nav-tabs li.active a:hover,
        html.dark body .tabs-primary .nav-tabs li.active a:hover,
        html body .tabs-primary .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-primary .nav-tabs li.active a:focus,
        html.dark body .tabs-primary .nav-tabs li.active a:focus,
        html body .tabs-primary .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:focus {
            border-top-color: ";
            // line 2029
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: ";
            // line 2030
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary.tabs-bottom .nav-tabs li a:hover,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs li a:hover,
        html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover {
            border-bottom-color: ";
            // line 2037
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary.tabs-bottom .nav-tabs li.active a,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a,
        html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,
        html body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,
        html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,
        html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
            border-bottom-color: ";
            // line 2052
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary.tabs-vertical.tabs-left li a:hover,
        html.dark body .tabs-primary.tabs-vertical.tabs-left li a:hover {
            border-left-color: ";
            // line 2057
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary.tabs-vertical.tabs-left li.active a,
        html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a,
        html body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,
        html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,
        html body .tabs-primary.tabs-vertical.tabs-left li.active a:focus,
        html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:focus {
            border-left-color: ";
            // line 2066
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary.tabs-vertical.tabs-right li a:hover,
        html.dark body .tabs-primary.tabs-vertical.tabs-right li a:hover {
            border-right-color: ";
            // line 2071
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-primary.tabs-vertical.tabs-right li.active a,
        html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a,
        html body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,
        html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,
        html body .tabs-primary.tabs-vertical.tabs-right li.active a:focus,
        html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:focus {
            border-right-color: ";
            // line 2080
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html body .tabs-secondary .nav-tabs li a,
        html.dark body .tabs-secondary .nav-tabs li a,
        html body .tabs-secondary .nav-tabs.nav-justified li a,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li a,
        html body .tabs-secondary .nav-tabs li a:hover,
        html.dark body .tabs-secondary .nav-tabs li a:hover,
        html body .tabs-secondary .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {
            color: #e36159;
        }

        html body .tabs-secondary .nav-tabs li a:hover,
        html.dark body .tabs-secondary .nav-tabs li a:hover,
        html body .tabs-secondary .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {
            border-top-color: #e36159;
        }

        html body .tabs-secondary .nav-tabs li.active a,
        html.dark body .tabs-secondary .nav-tabs li.active a,
        html body .tabs-secondary .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a,
        html body .tabs-secondary .nav-tabs li.active a:hover,
        html.dark body .tabs-secondary .nav-tabs li.active a:hover,
        html body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-secondary .nav-tabs li.active a:focus,
        html.dark body .tabs-secondary .nav-tabs li.active a:focus,
        html body .tabs-secondary .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:focus {
            border-top-color: #e36159;
            color: #e36159;
        }

        html body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,
        html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover {
            border-bottom-color: #e36159;
        }

        html body .tabs-secondary.tabs-bottom .nav-tabs li.active a,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a,
        html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,
        html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,
        html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,
        html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
            border-bottom-color: #e36159;
        }

        html body .tabs-secondary.tabs-vertical.tabs-left li a:hover,
        html.dark body .tabs-secondary.tabs-vertical.tabs-left li a:hover {
            border-left-color: #e36159;
        }

        html body .tabs-secondary.tabs-vertical.tabs-left li.active a,
        html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a,
        html body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,
        html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,
        html body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus,
        html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus {
            border-left-color: #e36159;
        }

        html body .tabs-secondary.tabs-vertical.tabs-right li a:hover,
        html.dark body .tabs-secondary.tabs-vertical.tabs-right li a:hover {
            border-right-color: #e36159;
        }

        html body .tabs-secondary.tabs-vertical.tabs-right li.active a,
        html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a,
        html body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,
        html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,
        html body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus,
        html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus {
            border-right-color: #e36159;
        }

        html body .tabs-tertiary .nav-tabs li a,
        html.dark body .tabs-tertiary .nav-tabs li a,
        html body .tabs-tertiary .nav-tabs.nav-justified li a,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li a,
        html body .tabs-tertiary .nav-tabs li a:hover,
        html.dark body .tabs-tertiary .nav-tabs li a:hover,
        html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {
            color: #2baab1;
        }

        html body .tabs-tertiary .nav-tabs li a:hover,
        html.dark body .tabs-tertiary .nav-tabs li a:hover,
        html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {
            border-top-color: #2baab1;
        }

        html body .tabs-tertiary .nav-tabs li.active a,
        html.dark body .tabs-tertiary .nav-tabs li.active a,
        html body .tabs-tertiary .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a,
        html body .tabs-tertiary .nav-tabs li.active a:hover,
        html.dark body .tabs-tertiary .nav-tabs li.active a:hover,
        html body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-tertiary .nav-tabs li.active a:focus,
        html.dark body .tabs-tertiary .nav-tabs li.active a:focus,
        html body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus {
            border-top-color: #2baab1;
            color: #2baab1;
        }

        html body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,
        html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover {
            border-bottom-color: #2baab1;
        }

        html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,
        html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,
        html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,
        html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,
        html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
            border-bottom-color: #2baab1;
        }

        html body .tabs-tertiary.tabs-vertical.tabs-left li a:hover,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-left li a:hover {
            border-left-color: #2baab1;
        }

        html body .tabs-tertiary.tabs-vertical.tabs-left li.active a,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a,
        html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,
        html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus {
            border-left-color: #2baab1;
        }

        html body .tabs-tertiary.tabs-vertical.tabs-right li a:hover,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-right li a:hover {
            border-right-color: #2baab1;
        }

        html body .tabs-tertiary.tabs-vertical.tabs-right li.active a,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a,
        html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,
        html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus,
        html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus {
            border-right-color: #2baab1;
        }

        html body .tabs-quaternary .nav-tabs li a,
        html.dark body .tabs-quaternary .nav-tabs li a,
        html body .tabs-quaternary .nav-tabs.nav-justified li a,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li a,
        html body .tabs-quaternary .nav-tabs li a:hover,
        html.dark body .tabs-quaternary .nav-tabs li a:hover,
        html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {
            color: #383f48;
        }

        html body .tabs-quaternary .nav-tabs li a:hover,
        html.dark body .tabs-quaternary .nav-tabs li a:hover,
        html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {
            border-top-color: #383f48;
        }

        html body .tabs-quaternary .nav-tabs li.active a,
        html.dark body .tabs-quaternary .nav-tabs li.active a,
        html body .tabs-quaternary .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a,
        html body .tabs-quaternary .nav-tabs li.active a:hover,
        html.dark body .tabs-quaternary .nav-tabs li.active a:hover,
        html body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-quaternary .nav-tabs li.active a:focus,
        html.dark body .tabs-quaternary .nav-tabs li.active a:focus,
        html body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus {
            border-top-color: #383f48;
            color: #383f48;
        }

        html body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,
        html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover {
            border-bottom-color: #383f48;
        }

        html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,
        html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,
        html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,
        html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,
        html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
            border-bottom-color: #383f48;
        }

        html body .tabs-quaternary.tabs-vertical.tabs-left li a:hover,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-left li a:hover {
            border-left-color: #383f48;
        }

        html body .tabs-quaternary.tabs-vertical.tabs-left li.active a,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a,
        html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,
        html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus {
            border-left-color: #383f48;
        }

        html body .tabs-quaternary.tabs-vertical.tabs-right li a:hover,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-right li a:hover {
            border-right-color: #383f48;
        }

        html body .tabs-quaternary.tabs-vertical.tabs-right li.active a,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a,
        html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,
        html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus,
        html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus {
            border-right-color: #383f48;
        }

        html body .tabs-dark .nav-tabs li a,
        html.dark body .tabs-dark .nav-tabs li a,
        html body .tabs-dark .nav-tabs.nav-justified li a,
        html.dark body .tabs-dark .nav-tabs.nav-justified li a,
        html body .tabs-dark .nav-tabs li a:hover,
        html.dark body .tabs-dark .nav-tabs li a:hover,
        html body .tabs-dark .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {
            color: #2e353e;
        }

        html body .tabs-dark .nav-tabs li a:hover,
        html.dark body .tabs-dark .nav-tabs li a:hover,
        html body .tabs-dark .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {
            border-top-color: #2e353e;
        }

        html body .tabs-dark .nav-tabs li.active a,
        html.dark body .tabs-dark .nav-tabs li.active a,
        html body .tabs-dark .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-dark .nav-tabs.nav-justified li.active a,
        html body .tabs-dark .nav-tabs li.active a:hover,
        html.dark body .tabs-dark .nav-tabs li.active a:hover,
        html body .tabs-dark .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-dark .nav-tabs li.active a:focus,
        html.dark body .tabs-dark .nav-tabs li.active a:focus,
        html body .tabs-dark .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:focus {
            border-top-color: #2e353e;
            color: #2e353e;
        }

        html body .tabs-dark.tabs-bottom .nav-tabs li a:hover,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs li a:hover,
        html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover {
            border-bottom-color: #2e353e;
        }

        html body .tabs-dark.tabs-bottom .nav-tabs li.active a,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a,
        html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,
        html body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,
        html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,
        html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
            border-bottom-color: #2e353e;
        }

        html body .tabs-dark.tabs-vertical.tabs-left li a:hover,
        html.dark body .tabs-dark.tabs-vertical.tabs-left li a:hover {
            border-left-color: #2e353e;
        }

        html body .tabs-dark.tabs-vertical.tabs-left li.active a,
        html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a,
        html body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,
        html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,
        html body .tabs-dark.tabs-vertical.tabs-left li.active a:focus,
        html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:focus {
            border-left-color: #2e353e;
        }

        html body .tabs-dark.tabs-vertical.tabs-right li a:hover,
        html.dark body .tabs-dark.tabs-vertical.tabs-right li a:hover {
            border-right-color: #2e353e;
        }

        html body .tabs-dark.tabs-vertical.tabs-right li.active a,
        html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a,
        html body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,
        html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,
        html body .tabs-dark.tabs-vertical.tabs-right li.active a:focus,
        html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:focus {
            border-right-color: #2e353e;
        }

        html body .tabs-light .nav-tabs li a,
        html.dark body .tabs-light .nav-tabs li a,
        html body .tabs-light .nav-tabs.nav-justified li a,
        html.dark body .tabs-light .nav-tabs.nav-justified li a,
        html body .tabs-light .nav-tabs li a:hover,
        html.dark body .tabs-light .nav-tabs li a:hover,
        html body .tabs-light .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {
            color: #ffffff;
        }

        html body .tabs-light .nav-tabs li a:hover,
        html.dark body .tabs-light .nav-tabs li a:hover,
        html body .tabs-light .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {
            border-top-color: #ffffff;
        }

        html body .tabs-light .nav-tabs li.active a,
        html.dark body .tabs-light .nav-tabs li.active a,
        html body .tabs-light .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-light .nav-tabs.nav-justified li.active a,
        html body .tabs-light .nav-tabs li.active a:hover,
        html.dark body .tabs-light .nav-tabs li.active a:hover,
        html body .tabs-light .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-light .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-light .nav-tabs li.active a:focus,
        html.dark body .tabs-light .nav-tabs li.active a:focus,
        html body .tabs-light .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-light .nav-tabs.nav-justified li.active a:focus {
            border-top-color: #ffffff;
            color: #ffffff;
        }

        html body .tabs-light.tabs-bottom .nav-tabs li a:hover,
        html.dark body .tabs-light.tabs-bottom .nav-tabs li a:hover,
        html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover,
        html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover {
            border-bottom-color: #ffffff;
        }

        html body .tabs-light.tabs-bottom .nav-tabs li.active a,
        html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a,
        html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,
        html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,
        html body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,
        html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,
        html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
        html body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,
        html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,
        html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
        html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
            border-bottom-color: #ffffff;
        }

        html body .tabs-light.tabs-vertical.tabs-left li a:hover,
        html.dark body .tabs-light.tabs-vertical.tabs-left li a:hover {
            border-left-color: #ffffff;
        }

        html body .tabs-light.tabs-vertical.tabs-left li.active a,
        html.dark body .tabs-light.tabs-vertical.tabs-left li.active a,
        html body .tabs-light.tabs-vertical.tabs-left li.active a:hover,
        html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:hover,
        html body .tabs-light.tabs-vertical.tabs-left li.active a:focus,
        html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:focus {
            border-left-color: #ffffff;
        }

        html body .tabs-light.tabs-vertical.tabs-right li a:hover,
        html.dark body .tabs-light.tabs-vertical.tabs-right li a:hover {
            border-right-color: #ffffff;
        }

        html body .tabs-light.tabs-vertical.tabs-right li.active a,
        html.dark body .tabs-light.tabs-vertical.tabs-right li.active a,
        html body .tabs-light.tabs-vertical.tabs-right li.active a:hover,
        html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:hover,
        html body .tabs-light.tabs-vertical.tabs-right li.active a:focus,
        html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:focus {
            border-right-color: #ffffff;
        }

        html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
        html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
        html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
        html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {
            border-right-color: ";
            // line 2507
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-left-color: transparent;
        }

        html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
        html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
        html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
        html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {
            border-right-color: transparent;
            border-left-color: ";
            // line 2516
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .list.list-icons li > .fa:first-child,
        .list.list-icons li a:first-child > .fa:first-child,
        .list.list-icons li > .icons:first-child,
        .list.list-icons li a:first-child > .icons:first-child {
            color: ";
            // line 2523
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 2524
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .list.list-icons.list-icons-style-3 li > .fa:first-child,
        .list.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
        .list.list-icons.list-icons-style-3 li > .icons:first-child,
        .list.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
            background-color: ";
            // line 2531
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .list.list-ordened li:before {
            color: ";
            // line 2535
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 2536
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .list.list-ordened.list-ordened-style-3 li:before {
            background-color: ";
            // line 2540
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .list-primary.list-icons li > .fa:first-child,
        html .list-primary.list-icons li a:first-child > .fa:first-child,
        html .list-primary.list-icons li > .icons:first-child,
        html .list-primary.list-icons li a:first-child > .icons:first-child {
            color: ";
            // line 2547
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 2548
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .list-primary.list-icons.list-icons-style-3 li > .fa:first-child,
        html .list-primary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
        html .list-primary.list-icons.list-icons-style-3 li > .icons:first-child,
        html .list-primary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
            background-color: ";
            // line 2555
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: #ffffff;
        }

        html .list-primary.list-ordened li:before {
            color: ";
            // line 2560
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .list-primary.list-ordened.list-ordened-style-3 li:before {
            background-color: ";
            // line 2564
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: #ffffff;
        }

        html .list-secondary.list-icons li > .fa:first-child,
        html .list-secondary.list-icons li a:first-child > .fa:first-child,
        html .list-secondary.list-icons li > .icons:first-child,
        html .list-secondary.list-icons li a:first-child > .icons:first-child {
            color: #e36159;
            border-color: #e36159;
        }

        html .list-secondary.list-icons.list-icons-style-3 li > .fa:first-child,
        html .list-secondary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
        html .list-secondary.list-icons.list-icons-style-3 li > .icons:first-child,
        html .list-secondary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
            background-color: #e36159;
            color: #ffffff;
        }

        html .list-secondary.list-ordened li:before {
            color: #e36159;
        }

        html .list-secondary.list-ordened.list-ordened-style-3 li:before {
            background-color: #e36159;
            color: #ffffff;
        }

        html .list-tertiary.list-icons li > .fa:first-child,
        html .list-tertiary.list-icons li a:first-child > .fa:first-child,
        html .list-tertiary.list-icons li > .icons:first-child,
        html .list-tertiary.list-icons li a:first-child > .icons:first-child {
            color: #2baab1;
            border-color: #2baab1;
        }

        html .list-tertiary.list-icons.list-icons-style-3 li > .fa:first-child,
        html .list-tertiary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
        html .list-tertiary.list-icons.list-icons-style-3 li > .icons:first-child,
        html .list-tertiary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
            background-color: #2baab1;
            color: #ffffff;
        }

        html .list-tertiary.list-ordened li:before {
            color: #2baab1;
        }

        html .list-tertiary.list-ordened.list-ordened-style-3 li:before {
            background-color: #2baab1;
            color: #ffffff;
        }

        html .list-quaternary.list-icons li > .fa:first-child,
        html .list-quaternary.list-icons li a:first-child > .fa:first-child,
        html .list-quaternary.list-icons li > .icons:first-child,
        html .list-quaternary.list-icons li a:first-child > .icons:first-child {
            color: #383f48;
            border-color: #383f48;
        }

        html .list-quaternary.list-icons.list-icons-style-3 li > .fa:first-child,
        html .list-quaternary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
        html .list-quaternary.list-icons.list-icons-style-3 li > .icons:first-child,
        html .list-quaternary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
            background-color: #383f48;
            color: #ffffff;
        }

        html .list-quaternary.list-ordened li:before {
            color: #383f48;
        }

        html .list-quaternary.list-ordened.list-ordened-style-3 li:before {
            background-color: #383f48;
            color: #ffffff;
        }

        html .list-dark.list-icons li > .fa:first-child,
        html .list-dark.list-icons li a:first-child > .fa:first-child,
        html .list-dark.list-icons li > .icons:first-child,
        html .list-dark.list-icons li a:first-child > .icons:first-child {
            color: #2e353e;
            border-color: #2e353e;
        }

        html .list-dark.list-icons.list-icons-style-3 li > .fa:first-child,
        html .list-dark.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
        html .list-dark.list-icons.list-icons-style-3 li > .icons:first-child,
        html .list-dark.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
            background-color: #2e353e;
            color: #ffffff;
        }

        html .list-dark.list-ordened li:before {
            color: #2e353e;
        }

        html .list-dark.list-ordened.list-ordened-style-3 li:before {
            background-color: #2e353e;
            color: #ffffff;
        }

        html .list-light.list-icons li > .fa:first-child,
        html .list-light.list-icons li a:first-child > .fa:first-child,
        html .list-light.list-icons li > .icons:first-child,
        html .list-light.list-icons li a:first-child > .icons:first-child {
            color: #ffffff;
            border-color: #ffffff;
        }

        html .list-light.list-icons.list-icons-style-3 li > .fa:first-child,
        html .list-light.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,
        html .list-light.list-icons.list-icons-style-3 li > .icons:first-child,
        html .list-light.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {
            background-color: #ffffff;
            color: #777777;
        }

        html .list-light.list-ordened li:before {
            color: #ffffff;
        }

        html .list-light.list-ordened.list-ordened-style-3 li:before {
            background-color: #ffffff;
            color: #777777;
        }

        .parallax blockquote i.fa-quote-left {
            color: ";
            // line 2694
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        section.video blockquote i.fa-quote-left {
            color: ";
            // line 2698
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .panel-group .panel-heading a {
            color: ";
            // line 2702
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .panel-group.panel-group-primary .panel-heading {
            background-color: ";
            // line 2706
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
        }

        html .panel-group.panel-group-primary .panel-heading a {
            color: #ffffff;
        }

        html .panel-group.panel-group-secondary .panel-heading {
            background-color: #e36159 !important;
        }

        html .panel-group.panel-group-secondary .panel-heading a {
            color: #ffffff;
        }

        html .panel-group.panel-group-tertiary .panel-heading {
            background-color: #2baab1 !important;
        }

        html .panel-group.panel-group-tertiary .panel-heading a {
            color: #ffffff;
        }

        html .panel-group.panel-group-quaternary .panel-heading {
            background-color: #383f48 !important;
        }

        html .panel-group.panel-group-quaternary .panel-heading a {
            color: #ffffff;
        }

        html .panel-group.panel-group-dark .panel-heading {
            background-color: #2e353e !important;
        }

        html .panel-group.panel-group-dark .panel-heading a {
            color: #ffffff;
        }

        html .panel-group.panel-group-light .panel-heading {
            background-color: #ffffff !important;
        }

        html .panel-group.panel-group-light .panel-heading a {
            color: #777777;
        }

        html .divider.divider-primary .fa,
        html .divider.divider-primary .icons {
            color: ";
            // line 2755
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .divider.divider-primary.divider-small hr {
            background: ";
            // line 2759
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .divider.divider-secondary .fa,
        html .divider.divider-secondary .icons {
            color: #e36159;
        }

        html .divider.divider-secondary.divider-small hr {
            background: #e36159;
        }

        html .divider.divider-tertiary .fa,
        html .divider.divider-tertiary .icons {
            color: #2baab1;
        }

        html .divider.divider-tertiary.divider-small hr {
            background: #2baab1;
        }

        html .divider.divider-quaternary .fa,
        html .divider.divider-quaternary .icons {
            color: #383f48;
        }

        html .divider.divider-quaternary.divider-small hr {
            background: #383f48;
        }

        html .divider.divider-dark .fa,
        html .divider.divider-dark .icons {
            color: #2e353e;
        }

        html .divider.divider-dark.divider-small hr {
            background: #2e353e;
        }

        html .divider.divider-light .fa,
        html .divider.divider-light .icons {
            color: #ffffff;
        }

        html .divider.divider-light.divider-small hr {
            background: #ffffff;
        }

        html .divider.divider-style-2.divider-primary .fa,
        html .divider.divider-style-2.divider-primary .icons {
            background: ";
            // line 2809
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: #ffffff;
        }

        html .divider.divider-style-2.divider-secondary .fa,
        html .divider.divider-style-2.divider-secondary .icons {
            background: #e36159;
            color: #ffffff;
        }

        html .divider.divider-style-2.divider-tertiary .fa,
        html .divider.divider-style-2.divider-tertiary .icons {
            background: #2baab1;
            color: #ffffff;
        }

        html .divider.divider-style-2.divider-quaternary .fa,
        html .divider.divider-style-2.divider-quaternary .icons {
            background: #383f48;
            color: #ffffff;
        }

        html .divider.divider-style-2.divider-dark .fa,
        html .divider.divider-style-2.divider-dark .icons {
            background: #2e353e;
            color: #ffffff;
        }

        html .divider.divider-style-2.divider-light .fa,
        html .divider.divider-style-2.divider-light .icons {
            background: #ffffff;
            color: #777777;
        }

        html .divider.divider-style-3.divider-primary .fa,
        html .divider.divider-style-3.divider-primary .icons {
            border-color: ";
            // line 2845
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .divider.divider-style-3.divider-secondary .fa,
        html .divider.divider-style-3.divider-secondary .icons {
            border-color: #e36159;
        }

        html .divider.divider-style-3.divider-tertiary .fa,
        html .divider.divider-style-3.divider-tertiary .icons {
            border-color: #2baab1;
        }

        html .divider.divider-style-3.divider-quaternary .fa,
        html .divider.divider-style-3.divider-quaternary .icons {
            border-color: #383f48;
        }

        html .divider.divider-style-3.divider-dark .fa,
        html .divider.divider-style-3.divider-dark .icons {
            border-color: #2e353e;
        }

        html .divider.divider-style-3.divider-light .fa,
        html .divider.divider-style-3.divider-light .icons {
            border-color: #ffffff;
        }

        #header .tip {
            background: ";
            // line 2874
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: #ffffff;
        }

        #header .tip:before {
            border-right-color: ";
            // line 2879
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html #header .tip-primary {
            background: ";
            // line 2883
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
            color: #ffffff !important;
        }

        html #header .tip-primary:before {
            border-right-color: ";
            // line 2888
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
        }

        html #header .tip-secondary {
            background: #e36159 !important;
            color: #ffffff !important;
        }

        html #header .tip-secondary:before {
            border-right-color: #e36159 !important;
        }

        html #header .tip-tertiary {
            background: #2baab1 !important;
            color: #ffffff !important;
        }

        html #header .tip-tertiary:before {
            border-right-color: #2baab1 !important;
        }

        html #header .tip-quaternary {
            background: #383f48 !important;
            color: #ffffff !important;
        }

        html #header .tip-quaternary:before {
            border-right-color: #383f48 !important;
        }

        html #header .tip-dark {
            background: #2e353e !important;
            color: #ffffff !important;
        }

        html #header .tip-dark:before {
            border-right-color: #2e353e !important;
        }

        html #header .tip-light {
            background: #ffffff !important;
            color: #777777 !important;
        }

        html #header .tip-light:before {
            border-right-color: #ffffff !important;
        }

        html[dir=\"rtl\"] #header .tip.skin:before {
            border-left-color: ";
            // line 2937
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        #header .header-btn-collapse-nav {
            background: ";
            // line 2941
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        @media (min-width: 992px) {
            #header .header-nav-main nav > ul > li.open > a,
            #header .header-nav-main nav > ul > li:hover > a {
                background: ";
            // line 2947
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav-main nav > ul > li.dropdown .dropdown-menu {
                border-top-color: ";
            // line 2951
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent transparent transparent ";
            // line 2955
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu {
                border-top-color: ";
            // line 2959
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent ";
            // line 2963
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent;
            }

            #header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu {
                border-top-color: ";
            // line 2967
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu li a {
                color: ";
            // line 2971
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a {
                color: ";
            // line 2975
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a.dropdown-toggle:after {
                border-color: ";
            // line 2979
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
            }

            #header .header-nav.header-nav-stripe nav > ul > li:hover > a {
                background-color: ";
            // line 2983
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav.header-nav-top-line nav > ul li.active > a,
            #header .header-nav.header-nav-top-line nav > ul li:hover > a {
                color: ";
            // line 2988
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav.header-nav-top-line nav > ul li.active > a:before,
            #header .header-nav.header-nav-top-line nav > ul li:hover > a:before {
                background: ";
            // line 2993
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav.header-nav-top-line nav > ul li.active > a.dropdown-toggle:after,
            #header .header-nav.header-nav-top-line nav > ul li:hover > a.dropdown-toggle:after {
                border-color: ";
            // line 2998
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
            }

            #header .header-nav.header-nav-dark-dropdown nav > ul li.active > a,
            #header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a {
                color: ";
            // line 3003
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav.header-nav-dark-dropdown nav > ul li.active > a.dropdown-toggle:after,
            #header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a.dropdown-toggle:after {
                border-color: ";
            // line 3008
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
            }

            html.side-header #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,
            html.side-header #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {
                border-left-color: ";
            // line 3013
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            html.side-header-right #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,
            html.side-header-right #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {
                border-right-color: ";
            // line 3018
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }
        }

        @media (min-width: 992px) {
            #header .header-nav-main nav > ul > li > a.dropdown-toggle:after {
                border-color: ";
            // line 3024
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
            }
            #header .header-nav-main nav > ul > li.dropdown > a:after {
                border-color: ";
            // line 3027
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
            }

            html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
            html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                border-color: ";
            // line 3032
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent transparent;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a {
                color: ";
            // line 3036
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a:focus,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a:hover {
                background: ";
            // line 3041
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary:hover > a {
                background: ";
            // line 3047
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu {
                border-top-color: ";
            // line 3052
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                background-color: ";
            // line 3053
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li a {
                color: #ffffff;
                border-bottom-color: ";
            // line 3058
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li:hover > a {
                background: ";
            // line 3062
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent transparent transparent #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-primary .dropdown-mega-sub-title {
                color: #ffffff;
                opacity: 0.70;
            }

            html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
            html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                border-color: #e36159 transparent transparent transparent;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a {
                color: #e36159;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a:focus,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a:hover {
                background: #e36159;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary:hover > a {
                background: #e36159;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu {
                border-top-color: #e36159;
                background-color: #e36159;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li a {
                color: #ffffff;
                border-bottom-color: #e7766f;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li:hover > a {
                background: #e7766f;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent transparent transparent #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-secondary .dropdown-mega-sub-title {
                color: #ffffff;
                opacity: 0.70;
            }

            html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
            html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                border-color: #2baab1 transparent transparent transparent;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a {
                color: #2baab1;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a:focus,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a:hover {
                background: #2baab1;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary:hover > a {
                background: #2baab1;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu {
                border-top-color: #2baab1;
                background-color: #2baab1;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li a {
                color: #ffffff;
                border-bottom-color: #30bec6;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li:hover > a {
                background: #30bec6;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent transparent transparent #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-tertiary .dropdown-mega-sub-title {
                color: #ffffff;
                opacity: 0.70;
            }

            html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
            html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                border-color: #383f48 transparent transparent transparent;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a {
                color: #383f48;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a:focus,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a:hover {
                background: #383f48;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary:hover > a {
                background: #383f48;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu {
                border-top-color: #383f48;
                background-color: #383f48;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li a {
                color: #ffffff;
                border-bottom-color: #434c56;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li:hover > a {
                background: #434c56;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent transparent transparent #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-quaternary .dropdown-mega-sub-title {
                color: #ffffff;
                opacity: 0.70;
            }

            html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
            html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                border-color: #2e353e transparent transparent transparent;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a {
                color: #2e353e;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a:focus,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a:hover {
                background: #2e353e;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark:hover > a {
                background: #2e353e;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu {
                border-top-color: #2e353e;
                background-color: #2e353e;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li a {
                color: #ffffff;
                border-bottom-color: #39424d;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li:hover > a {
                background: #39424d;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent transparent transparent #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-dark .dropdown-mega-sub-title {
                color: #ffffff;
                opacity: 0.70;
            }

            html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,
            html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {
                border-color: #ffffff transparent transparent transparent;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a {
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a:focus,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a:hover {
                background: #ffffff;
                color: #777777;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a,
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light:hover > a {
                background: #ffffff;
                color: #777777;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu {
                border-top-color: #ffffff;
                background-color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li a {
                color: #777777;
                border-bottom-color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li:hover > a {
                background: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent transparent transparent #777777;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-light .dropdown-mega-sub-title {
                color: #777777;
                opacity: 0.70;
            }

            html[dir=\"rtl\"] #header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {
                border-color: transparent ";
            // line 3295
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " transparent transparent;
            }
        }

        @media (max-width: 991px) {
            #header .header-nav-main nav > ul > li > a,
            #header .header-nav-main nav > ul > li > a:focus,
            #header .header-nav-main nav > ul > li > a:hover {
                color: ";
            // line 3303
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav-main nav > ul > li.active > a,
            #header .header-nav-main nav > ul > li.active > a:focus,
            #header .header-nav-main nav > ul > li.active > a:hover {
                background-color: ";
            // line 3309
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }
        }

        @media (max-width: 991px) {
            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary > a {
                color: ";
            // line 3315
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a {
                background: ";
            // line 3319
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary > a {
                color: #e36159;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a {
                background: #e36159;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary > a {
                color: #2baab1;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a {
                background: #2baab1;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary > a {
                color: #383f48;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a {
                background: #383f48;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark > a {
                color: #2e353e;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a {
                background: #2e353e;
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light > a {
                color: #ffffff;
            }

            html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a {
                background: #ffffff;
                color: #777777;
            }
        }

        html #header .header-top.header-top-primary {
            background: ";
            // line 3370
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-top-color: ";
            // line 3371
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html #header .header-top.header-top-primary .header-nav-top ul > li.open > a {
            background: ";
            // line 3375
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html #header .header-top.header-top-primary .header-nav-top ul > li > a:hover,
        html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:hover,
        html #header .header-top.header-top-primary .header-nav-top ul > li > a:focus,
        html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:focus {
            background: ";
            // line 3382
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html #header .header-top.header-top-primary .dropdown-menu {
            background: ";
            // line 3386
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 3387
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html #header .header-top.header-top-primary .dropdown-menu a:hover,
        html #header .header-top.header-top-primary .dropdown-menu a:focus {
            background: #00aaff !important;
        }

        html #header .header-top.header-top-secondary {
            background: #e36159;
            border-top-color: #df4c43;
        }

        html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a {
            background: #e7766f;
        }

        html #header .header-top.header-top-secondary .header-nav-top ul > li > a:hover,
        html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:hover,
        html #header .header-top.header-top-secondary .header-nav-top ul > li > a:focus,
        html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:focus {
            background: #e7766f;
        }

        html #header .header-top.header-top-secondary .dropdown-menu {
            background: #e7766f;
            border-color: #e7766f;
        }

        html #header .header-top.header-top-secondary .dropdown-menu a:hover,
        html #header .header-top.header-top-secondary .dropdown-menu a:focus {
            background: #ea8b85 !important;
        }

        html #header .header-top.header-top-tertiary {
            background: #2baab1;
            border-top-color: #26969c;
        }

        html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a {
            background: #30bec6;
        }

        html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:hover,
        html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:hover,
        html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:focus,
        html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:focus {
            background: #30bec6;
        }

        html #header .header-top.header-top-tertiary .dropdown-menu {
            background: #30bec6;
            border-color: #30bec6;
        }

        html #header .header-top.header-top-tertiary .dropdown-menu a:hover,
        html #header .header-top.header-top-tertiary .dropdown-menu a:focus {
            background: #3fc9d0 !important;
        }

        html #header .header-top.header-top-quaternary {
            background: #383f48;
            border-top-color: #2d323a;
        }

        html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a {
            background: #434c56;
        }

        html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:hover,
        html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:hover,
        html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:focus,
        html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:focus {
            background: #434c56;
        }

        html #header .header-top.header-top-quaternary .dropdown-menu {
            background: #434c56;
            border-color: #434c56;
        }

        html #header .header-top.header-top-quaternary .dropdown-menu a:hover,
        html #header .header-top.header-top-quaternary .dropdown-menu a:focus {
            background: #4e5865 !important;
        }

        html #header .header-top.header-top-dark {
            background: #2e353e;
            border-top-color: #23282f;
        }

        html #header .header-top.header-top-dark .header-nav-top ul > li.open > a {
            background: #39424d;
        }

        html #header .header-top.header-top-dark .header-nav-top ul > li > a:hover,
        html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:hover,
        html #header .header-top.header-top-dark .header-nav-top ul > li > a:focus,
        html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:focus {
            background: #39424d;
        }

        html #header .header-top.header-top-dark .dropdown-menu {
            background: #39424d;
            border-color: #39424d;
        }

        html #header .header-top.header-top-dark .dropdown-menu a:hover,
        html #header .header-top.header-top-dark .dropdown-menu a:focus {
            background: #444e5b !important;
        }

        html #header .header-top.header-top-light {
            background: #ffffff;
            border-top-color: #f2f2f2;
        }

        html #header .header-top.header-top-light .header-nav-top ul > li.open > a {
            background: #ffffff;
        }

        html #header .header-top.header-top-light .header-nav-top ul > li > a:hover,
        html #header .header-top.header-top-light .header-nav-top ul > li.open > a:hover,
        html #header .header-top.header-top-light .header-nav-top ul > li > a:focus,
        html #header .header-top.header-top-light .header-nav-top ul > li.open > a:focus {
            background: #ffffff;
        }

        html #header .header-top.header-top-light .dropdown-menu {
            background: #ffffff;
            border-color: #ffffff;
        }

        html #header .header-top.header-top-light .dropdown-menu a:hover,
        html #header .header-top.header-top-light .dropdown-menu a:focus {
            background: #ffffff !important;
        }

        @media (min-width: 992px) {
            html #header .header-nav-bar-primary {
                background: ";
            // line 3527
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
                color: #ffffff !important;
            }

            html #header .header-nav-bar-secondary {
                background: #e36159 !important;
                color: #ffffff !important;
            }

            html #header .header-nav-bar-tertiary {
                background: #2baab1 !important;
                color: #ffffff !important;
            }

            html #header .header-nav-bar-quaternary {
                background: #383f48 !important;
                color: #ffffff !important;
            }

            html #header .header-nav-bar-dark {
                background: #2e353e !important;
                color: #ffffff !important;
            }

            html #header .header-nav-bar-light {
                background: #ffffff !important;
                color: #777777 !important;
            }
        }

        @media (min-width: 992px) {
            #header .header-nav-main.header-nav-main-light nav > ul > li.open > a,
            #header .header-nav-main.header-nav-main-light nav > ul > li:hover > a {
                color: ";
            // line 3560
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }

            #header .header-nav-main.header-nav-main-light nav > ul > li.active > a {
                color: ";
            // line 3564
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            }
        }

        .testimonial blockquote {
            background: ";
            // line 3569
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .testimonial .testimonial-arrow-down {
            border-top-color: ";
            // line 3573
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .testimonial-primary blockquote {
            background: ";
            // line 3577
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .testimonial-primary .testimonial-arrow-down {
            border-top-color: ";
            // line 3581
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .testimonial-secondary blockquote {
            background: #e7766f;
        }

        html .testimonial-secondary .testimonial-arrow-down {
            border-top-color: #e7766f;
        }

        html .testimonial-tertiary blockquote {
            background: #30bec6;
        }

        html .testimonial-tertiary .testimonial-arrow-down {
            border-top-color: #30bec6;
        }

        html .testimonial-quaternary blockquote {
            background: #434c56;
        }

        html .testimonial-quaternary .testimonial-arrow-down {
            border-top-color: #434c56;
        }

        html .testimonial-dark blockquote {
            background: #39424d;
        }

        html .testimonial-dark .testimonial-arrow-down {
            border-top-color: #39424d;
        }

        html .testimonial-light blockquote {
            background: #ffffff;
        }

        html .testimonial-light .testimonial-arrow-down {
            border-top-color: #ffffff;
        }

        .circular-bar.only-icon .fa,
        .circular-bar.only-icon .icons {
            color: ";
            // line 3626
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .counters .counter-primary .fa,
        html .counters .counter-primary .icons,
        html .counters .counter-primary strong {
            color: ";
            // line 3632
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .counters .counter-secondary .fa,
        html .counters .counter-secondary .icons,
        html .counters .counter-secondary strong {
            color: #e36159;
        }

        html .counters .counter-tertiary .fa,
        html .counters .counter-tertiary .icons,
        html .counters .counter-tertiary strong {
            color: #2baab1;
        }

        html .counters .counter-quaternary .fa,
        html .counters .counter-quaternary .icons,
        html .counters .counter-quaternary strong {
            color: #383f48;
        }

        html .counters .counter-dark .fa,
        html .counters .counter-dark .icons,
        html .counters .counter-dark strong {
            color: #2e353e;
        }

        html .counters .counter-light .fa,
        html .counters .counter-light .icons,
        html .counters .counter-light strong {
            color: #ffffff;
        }

        .icon-featured {
            background-color: ";
            // line 3666
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .featured-box-primary .icon-featured {
            background-color: ";
            // line 3670
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .featured-box-primary .icon-featured:after {
            border-color: ";
            // line 3674
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .featured-box-primary h4 {
            color: ";
            // line 3678
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .featured-box-primary .box-content {
            border-top-color: ";
            // line 3682
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-box-primary .icon-featured {
            background-color: ";
            // line 3686
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-box-primary h4 {
            color: ";
            // line 3690
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-box-primary .box-content {
            border-top-color: ";
            // line 3694
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-box-secondary .icon-featured {
            background-color: #e36159;
        }

        html .featured-box-secondary h4 {
            color: #e36159;
        }

        html .featured-box-secondary .box-content {
            border-top-color: #e36159;
        }

        html .featured-box-tertiary .icon-featured {
            background-color: #2baab1;
        }

        html .featured-box-tertiary h4 {
            color: #2baab1;
        }

        html .featured-box-tertiary .box-content {
            border-top-color: #2baab1;
        }

        html .featured-box-quaternary .icon-featured {
            background-color: #383f48;
        }

        html .featured-box-quaternary h4 {
            color: #383f48;
        }

        html .featured-box-quaternary .box-content {
            border-top-color: #383f48;
        }

        html .featured-box-dark .icon-featured {
            background-color: #2e353e;
        }

        html .featured-box-dark h4 {
            color: #2e353e;
        }

        html .featured-box-dark .box-content {
            border-top-color: #2e353e;
        }

        html .featured-box-light .icon-featured {
            background-color: #ffffff;
        }

        html .featured-box-light h4 {
            color: #ffffff;
        }

        html .featured-box-light .box-content {
            border-top-color: #ffffff;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-primary .icon-featured {
            border-color: ";
            // line 3758
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: ";
            // line 3759
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-boxes-style-3 .featured-box.featured-box-secondary .icon-featured {
            border-color: #e36159;
            color: #e36159;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-tertiary .icon-featured {
            border-color: #2baab1;
            color: #2baab1;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-quaternary .icon-featured {
            border-color: #383f48;
            color: #383f48;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-dark .icon-featured {
            border-color: #2e353e;
            color: #2e353e;
        }

        html .featured-boxes-style-3 .featured-box.featured-box-light .icon-featured {
            border-color: #ffffff;
            color: #ffffff;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-primary .icon-featured {
            border-color: ";
            // line 3788
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: ";
            // line 3789
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-boxes-style-4 .featured-box.featured-box-secondary .icon-featured {
            border-color: #e36159;
            color: #e36159;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-tertiary .icon-featured {
            border-color: #2baab1;
            color: #2baab1;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-quaternary .icon-featured {
            border-color: #383f48;
            color: #383f48;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-dark .icon-featured {
            border-color: #2e353e;
            color: #2e353e;
        }

        html .featured-boxes-style-4 .featured-box.featured-box-light .icon-featured {
            border-color: #ffffff;
            color: #ffffff;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-primary .icon-featured {
            color: ";
            // line 3818
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-boxes-style-5 .featured-box.featured-box-secondary .icon-featured {
            color: #e36159;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-tertiary .icon-featured {
            color: #2baab1;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-quaternary .icon-featured {
            color: #383f48;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-dark .icon-featured {
            color: #2e353e;
        }

        html .featured-boxes-style-5 .featured-box.featured-box-light .icon-featured {
            color: #ffffff;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-primary .icon-featured {
            color: ";
            // line 3842
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-boxes-style-6 .featured-box.featured-box-secondary .icon-featured {
            color: #e36159;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-tertiary .icon-featured {
            color: #2baab1;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-quaternary .icon-featured {
            color: #383f48;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-dark .icon-featured {
            color: #2e353e;
        }

        html .featured-boxes-style-6 .featured-box.featured-box-light .icon-featured {
            color: #ffffff;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-primary .icon-featured {
            color: ";
            // line 3866
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-boxes-style-8 .featured-box.featured-box-secondary .icon-featured {
            color: #e36159;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-tertiary .icon-featured {
            color: #2baab1;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-quaternary .icon-featured {
            color: #383f48;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-dark .icon-featured {
            color: #2e353e;
        }

        html .featured-boxes-style-8 .featured-box.featured-box-light .icon-featured {
            color: #ffffff;
        }

        html .featured-box-effect-2.featured-box-primary .icon-featured:after {
            box-shadow: 0 0 0 3px ";
            // line 3890
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-box-effect-2.featured-box-secondary .icon-featured:after {
            box-shadow: 0 0 0 3px #e36159;
        }

        html .featured-box-effect-2.featured-box-tertiary .icon-featured:after {
            box-shadow: 0 0 0 3px #2baab1;
        }

        html .featured-box-effect-2.featured-box-quaternary .icon-featured:after {
            box-shadow: 0 0 0 3px #383f48;
        }

        html .featured-box-effect-2.featured-box-dark .icon-featured:after {
            box-shadow: 0 0 0 3px #2e353e;
        }

        html .featured-box-effect-2.featured-box-light .icon-featured:after {
            box-shadow: 0 0 0 3px #ffffff;
        }

        html .featured-box-effect-3.featured-box-primary .icon-featured:after {
            box-shadow: 0 0 0 10px ";
            // line 3914
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-box-effect-3.featured-box-primary:hover .icon-featured {
            background: ";
            // line 3918
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
        }

        html .featured-box-effect-3.featured-box-secondary .icon-featured:after {
            box-shadow: 0 0 0 10px #e36159;
        }

        html .featured-box-effect-3.featured-box-secondary:hover .icon-featured {
            background: #e36159 !important;
        }

        html .featured-box-effect-3.featured-box-tertiary .icon-featured:after {
            box-shadow: 0 0 0 10px #2baab1;
        }

        html .featured-box-effect-3.featured-box-tertiary:hover .icon-featured {
            background: #2baab1 !important;
        }

        html .featured-box-effect-3.featured-box-quaternary .icon-featured:after {
            box-shadow: 0 0 0 10px #383f48;
        }

        html .featured-box-effect-3.featured-box-quaternary:hover .icon-featured {
            background: #383f48 !important;
        }

        html .featured-box-effect-3.featured-box-dark .icon-featured:after {
            box-shadow: 0 0 0 10px #2e353e;
        }

        html .featured-box-effect-3.featured-box-dark:hover .icon-featured {
            background: #2e353e !important;
        }

        html .featured-box-effect-3.featured-box-light .icon-featured:after {
            box-shadow: 0 0 0 10px #ffffff;
        }

        html .featured-box-effect-3.featured-box-light:hover .icon-featured {
            background: #ffffff !important;
        }

        .feature-box .feature-box-icon {
            background-color: ";
            // line 3962
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-primary .feature-box-icon {
            background-color: ";
            // line 3966
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-secondary .feature-box-icon {
            background-color: #e36159;
        }

        html .feature-box-tertiary .feature-box-icon {
            background-color: #2baab1;
        }

        html .feature-box-quaternary .feature-box-icon {
            background-color: #383f48;
        }

        html .feature-box-dark .feature-box-icon {
            background-color: #2e353e;
        }

        html .feature-box-light .feature-box-icon {
            background-color: #ffffff;
        }

        .feature-box.feature-box-style-2 .feature-box-icon i.fa,
        .feature-box.feature-box-style-2 .feature-box-icon .icons {
            color: ";
            // line 3991
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-primary.feature-box-style-2 .feature-box-icon i.fa,
        html .feature-box-primary.feature-box-style-2 .feature-box-icon .icons {
            color: ";
            // line 3996
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-secondary.feature-box-style-2 .feature-box-icon i.fa,
        html .feature-box-secondary.feature-box-style-2 .feature-box-icon .icons {
            color: #e36159;
        }

        html .feature-box-tertiary.feature-box-style-2 .feature-box-icon i.fa,
        html .feature-box-tertiary.feature-box-style-2 .feature-box-icon .icons {
            color: #2baab1;
        }

        html .feature-box-quaternary.feature-box-style-2 .feature-box-icon i.fa,
        html .feature-box-quaternary.feature-box-style-2 .feature-box-icon .icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-2 .feature-box-icon i.fa,
        html .feature-box-dark.feature-box-style-2 .feature-box-icon .icons {
            color: #2e353e;
        }

        html .feature-box-light.feature-box-style-2 .feature-box-icon i.fa,
        html .feature-box-light.feature-box-style-2 .feature-box-icon .icons {
            color: #ffffff;
        }

        .feature-box.feature-box-style-3 .feature-box-icon {
            border-color: ";
            // line 4025
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .feature-box.feature-box-style-3 .feature-box-icon i.fa,
        .feature-box.feature-box-style-3 .feature-box-icon .icons {
            color: ";
            // line 4030
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-primary.feature-box-style-3 .feature-box-icon {
            border-color: ";
            // line 4034
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-primary.feature-box-style-3 .feature-box-icon i.fa,
        html .feature-box-primary.feature-box-style-3 .feature-box-icon .icons {
            color: ";
            // line 4039
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-secondary.feature-box-style-3 .feature-box-icon {
            border-color: #e36159;
        }

        html .feature-box-secondary.feature-box-style-3 .feature-box-icon i.fa,
        html .feature-box-secondary.feature-box-style-3 .feature-box-icon .icons {
            color: #e36159;
        }

        html .feature-box-tertiary.feature-box-style-3 .feature-box-icon {
            border-color: #2baab1;
        }

        html .feature-box-tertiary.feature-box-style-3 .feature-box-icon i.fa,
        html .feature-box-tertiary.feature-box-style-3 .feature-box-icon .icons {
            color: #2baab1;
        }

        html .feature-box-quaternary.feature-box-style-3 .feature-box-icon {
            border-color: #383f48;
        }

        html .feature-box-quaternary.feature-box-style-3 .feature-box-icon i.fa,
        html .feature-box-quaternary.feature-box-style-3 .feature-box-icon .icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-3 .feature-box-icon {
            border-color: #2e353e;
        }

        html .feature-box-dark.feature-box-style-3 .feature-box-icon i.fa,
        html .feature-box-dark.feature-box-style-3 .feature-box-icon .icons {
            color: #2e353e;
        }

        html .feature-box-light.feature-box-style-3 .feature-box-icon {
            border-color: #ffffff;
        }

        html .feature-box-light.feature-box-style-3 .feature-box-icon i.fa,
        html .feature-box-light.feature-box-style-3 .feature-box-icon .icons {
            color: #ffffff;
        }

        .feature-box.feature-box-style-4 .feature-box-icon i.fa,
        .feature-box.feature-box-style-4 .feature-box-icon .icons {
            color: ";
            // line 4089
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-primary.feature-box-style-4 .feature-box-icon i.fa,
        html .feature-box-primary.feature-box-style-4 .feature-box-icon .icons {
            color: ";
            // line 4094
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-secondary.feature-box-style-4 .feature-box-icon i.fa,
        html .feature-box-secondary.feature-box-style-4 .feature-box-icon .icons {
            color: #e36159;
        }

        html .feature-box-tertiary.feature-box-style-4 .feature-box-icon i.fa,
        html .feature-box-tertiary.feature-box-style-4 .feature-box-icon .icons {
            color: #2baab1;
        }

        html .feature-box-quaternary.feature-box-style-4 .feature-box-icon i.fa,
        html .feature-box-quaternary.feature-box-style-4 .feature-box-icon .icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-4 .feature-box-icon i.fa,
        html .feature-box-dark.feature-box-style-4 .feature-box-icon .icons {
            color: #2e353e;
        }

        html .feature-box-light.feature-box-style-4 .feature-box-icon i.fa,
        html .feature-box-light.feature-box-style-4 .feature-box-icon .icons {
            color: #ffffff;
        }

        .feature-box.feature-box-style-5 .feature-box-icon i.fa,
        .feature-box.feature-box-style-5 .feature-box-icon i.icons {
            color: ";
            // line 4124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-primary.feature-box-style-5 .feature-box-icon i.fa,
        html .feature-box-primary.feature-box-style-5 .feature-box-icon i.icons {
            color: ";
            // line 4129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.fa,
        html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.icons {
            color: #e36159;
        }

        html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.fa,
        html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.icons {
            color: #2baab1;
        }

        html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.fa,
        html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-5 .feature-box-icon i.fa,
        html .feature-box-dark.feature-box-style-5 .feature-box-icon i.icons {
            color: #2e353e;
        }

        html .feature-box-light.feature-box-style-5 .feature-box-icon i.fa,
        html .feature-box-light.feature-box-style-5 .feature-box-icon i.icons {
            color: #ffffff;
        }

        html .feature-box-primary.feature-box-style-6 .feature-box-icon i.fa,
        html .feature-box-primary.feature-box-style-6 .feature-box-icon i.icons {
            color: ";
            // line 4159
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.fa,
        html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.icons {
            color: #e36159;
        }

        html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.fa,
        html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.icons {
            color: #2baab1;
        }

        html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.fa,
        html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.icons {
            color: #383f48;
        }

        html .feature-box-dark.feature-box-style-6 .feature-box-icon i.fa,
        html .feature-box-dark.feature-box-style-6 .feature-box-icon i.icons {
            color: #2e353e;
        }

        html .feature-box-light.feature-box-style-6 .feature-box-icon i.fa,
        html .feature-box-light.feature-box-style-6 .feature-box-icon i.icons {
            color: #ffffff;
        }

        html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(1) .featured-box-full-primary {
            background-color: #006699;
        }

        html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(2) .featured-box-full-primary {
            background-color: ";
            // line 4192
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(3) .featured-box-full-primary {
            background-color: ";
            // line 4196
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(4) .featured-box-full-primary {
            background-color: ";
            // line 4200
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(5) .featured-box-full-primary {
            background-color: #00aaff;
        }

        html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(6) .featured-box-full-primary {
            background-color: #1ab2ff;
        }

        html .featured-boxes-full .featured-box-full-primary {
            background-color: ";
            // line 4212
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            color: #ffffff;
        }

        html .featured-boxes-full .featured-box-full-secondary {
            background-color: #e36159;
            color: #ffffff;
        }

        html .featured-boxes-full .featured-box-full-tertiary {
            background-color: #2baab1;
            color: #ffffff;
        }

        html .featured-boxes-full .featured-box-full-quaternary {
            background-color: #383f48;
            color: #ffffff;
        }

        html .featured-boxes-full .featured-box-full-dark {
            background-color: #2e353e;
            color: #ffffff;
        }

        html .featured-boxes-full .featured-box-full-light {
            background-color: #ffffff;
            color: #777777;
        }

        .pricing-table .most-popular {
            border-color: ";
            // line 4242
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .pricing-table .most-popular h3 {
            background-color: ";
            // line 4246
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " !important;
        }

        .pricing-table.princig-table-flat .plan h3 {
            background-color: ";
            // line 4250
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .pricing-table.princig-table-flat .plan h3 span {
            background: ";
            // line 4254
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .call-to-action.featured.featured-primary {
            border-top-color: ";
            // line 4258
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .call-to-action.call-to-action-primary {
            background: ";
            // line 4262
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .call-to-action.with-full-borders-primary {
            border-color: ";
            // line 4266
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .call-to-action.call-to-action-primary {
            background: ";
            // line 4270
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .call-to-action.call-to-action-primary h3,
        html .call-to-action.call-to-action-primary p {
            color: #ffffff;
        }

        html .call-to-action.featured.featured-secondary {
            border-top-color: #e36159;
        }

        html .call-to-action.call-to-action-secondary {
            background: #e36159;
        }

        html .call-to-action.with-full-borders-secondary {
            border-color: #e36159;
        }

        html .call-to-action.call-to-action-secondary {
            background: #e36159;
        }

        html .call-to-action.call-to-action-secondary h3,
        html .call-to-action.call-to-action-secondary p {
            color: #ffffff;
        }

        html .call-to-action.featured.featured-tertiary {
            border-top-color: #2baab1;
        }

        html .call-to-action.call-to-action-tertiary {
            background: #2baab1;
        }

        html .call-to-action.with-full-borders-tertiary {
            border-color: #2baab1;
        }

        html .call-to-action.call-to-action-tertiary {
            background: #2baab1;
        }

        html .call-to-action.call-to-action-tertiary h3,
        html .call-to-action.call-to-action-tertiary p {
            color: #ffffff;
        }

        html .call-to-action.featured.featured-quaternary {
            border-top-color: #383f48;
        }

        html .call-to-action.call-to-action-quaternary {
            background: #383f48;
        }

        html .call-to-action.with-full-borders-quaternary {
            border-color: #383f48;
        }

        html .call-to-action.call-to-action-quaternary {
            background: #383f48;
        }

        html .call-to-action.call-to-action-quaternary h3,
        html .call-to-action.call-to-action-quaternary p {
            color: #ffffff;
        }

        html .call-to-action.featured.featured-dark {
            border-top-color: #2e353e;
        }

        html .call-to-action.call-to-action-dark {
            background: #2e353e;
        }

        html .call-to-action.with-full-borders-dark {
            border-color: #2e353e;
        }

        html .call-to-action.call-to-action-dark {
            background: #2e353e;
        }

        html .call-to-action.call-to-action-dark h3,
        html .call-to-action.call-to-action-dark p {
            color: #ffffff;
        }

        html .call-to-action.featured.featured-light {
            border-top-color: #ffffff;
        }

        html .call-to-action.call-to-action-light {
            background: #ffffff;
        }

        html .call-to-action.with-full-borders-light {
            border-color: #ffffff;
        }

        html .call-to-action.call-to-action-light {
            background: #ffffff;
        }

        html .call-to-action.call-to-action-light h3,
        html .call-to-action.call-to-action-light p {
            color: #777777;
        }

        section.timeline .timeline-box.left:before,
        section.timeline .timeline-box.right:before {
            background: ";
            // line 4385
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            box-shadow: 0 0 0 3px #ffffff, 0 0 0 6px ";
            // line 4386
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        ul.history li .featured-box .box-content {
            border-top-color: ";
            // line 4390
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .recent-posts .date .month,
        article.post .post-date .month {
            background-color: ";
            // line 4395
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .recent-posts .date .day,
        article.post .post-date .day {
            color: ";
            // line 4400
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .slider .tp-bannertimer {
            background-color: ";
            // line 4404
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .home-concept strong {
            color: ";
            // line 4408
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .home-intro-primary {
            background: ";
            // line 4412
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .home-intro-secondary {
            background: #e36159;
        }

        html .home-intro-tertiary {
            background: #2baab1;
        }

        html .home-intro-quaternary {
            background: #383f48;
        }

        html .home-intro-dark {
            background: #2e353e;
        }

        html .home-intro-light {
            background: #ffffff;
        }

        .home-intro p em {
            color: #00aaff;
        }

        html .slider-container .tp-caption-overlay-primary {
            background: ";
            // line 4440
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html .slider-container .tp-caption-overlay-opacity-primary {
            background: rgba(0, 136, 204, 0.4);
        }

        html .slider-container .tp-caption-overlay-secondary {
            background: #e36159;
        }

        html .slider-container .tp-caption-overlay-opacity-secondary {
            background: rgba(227, 97, 89, 0.4);
        }

        html .slider-container .tp-caption-overlay-tertiary {
            background: #2baab1;
        }

        html .slider-container .tp-caption-overlay-opacity-tertiary {
            background: rgba(43, 170, 177, 0.4);
        }

        html .slider-container .tp-caption-overlay-quaternary {
            background: #383f48;
        }

        html .slider-container .tp-caption-overlay-opacity-quaternary {
            background: rgba(56, 63, 72, 0.4);
        }

        html .slider-container .tp-caption-overlay-dark {
            background: #2e353e;
        }

        html .slider-container .tp-caption-overlay-opacity-dark {
            background: rgba(46, 53, 62, 0.4);
        }

        html .slider-container .tp-caption-overlay-light {
            background: #ffffff;
        }

        html .slider-container .tp-caption-overlay-opacity-light {
            background: rgba(255, 255, 255, 0.4);
        }
        /* Arrows */
        .tparrows.tparrows-carousel.tp-leftarrow,
        .tparrows.tparrows-carousel.tp-rightarrow {
            color: #ffffff;
            background-color: ";
            // line 4490
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-color: ";
            // line 4491
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " #006699;
        }

        .tparrows.tparrows-carousel.tp-leftarrow:hover,
        .tparrows.tparrows-carousel.tp-rightarrow:hover {
            border-color: ";
            // line 4496
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 4497
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .tparrows.tparrows-carousel.tp-leftarrow:active,
        .tparrows.tparrows-carousel.tp-rightarrow:active,
        .tparrows.tparrows-carousel.tp-leftarrow:focus,
        .tparrows.tparrows-carousel.tp-rightarrow:focus,
        .tparrows.tparrows-carousel.tp-leftarrow:active:hover,
        .tparrows.tparrows-carousel.tp-rightarrow:active:hover,
        .tparrows.tparrows-carousel.tp-leftarrow:active:focus,
        .tparrows.tparrows-carousel.tp-rightarrow:active:focus {
            border-color: ";
            // line 4508
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            background-color: ";
            // line 4509
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .tparrows.tparrows-carousel.tp-leftarrow.dropdown-toggle,
        .tparrows.tparrows-carousel.tp-rightarrow.dropdown-toggle {
            border-left-color: ";
            // line 4514
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        .tparrows.tparrows-carousel.tp-leftarrow[disabled],
        .tparrows.tparrows-carousel.tp-rightarrow[disabled],
        .tparrows.tparrows-carousel.tp-leftarrow[disabled]:hover,
        .tparrows.tparrows-carousel.tp-rightarrow[disabled]:hover,
        .tparrows.tparrows-carousel.tp-leftarrow[disabled]:active,
        .tparrows.tparrows-carousel.tp-rightarrow[disabled]:active,
        .tparrows.tparrows-carousel.tp-leftarrow[disabled]:focus,
        .tparrows.tparrows-carousel.tp-rightarrow[disabled]:focus {
            border-color: #33bbff;
            background-color: #33bbff;
        }

        .shop ul.products li.product .onsale {
            background-color: ";
            // line 4530
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-bottom-color: #006da3;
        }

        .shop .star-rating span,
        .shop .cart-totals tr.total .amount {
            color: ";
            // line 4536
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        #footer .footer-ribbon {
            background: ";
            // line 4540
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        #footer .footer-ribbon:before {
            border-right-color: #005580;
            border-left-color: #005580;
        }

        #footer.light h1,
        #footer.light h2,
        #footer.light h3,
        #footer.light h4,
        #footer.light a {
            color: ";
            // line 4553
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        #footer.color {
            background: ";
            // line 4557
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-top-color: ";
            // line 4558
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        #footer.color .footer-ribbon {
            background: #006699;
        }

        #footer.color .footer-ribbon:before {
            border-right-color: #00334d;
        }

        #footer.color .footer-copyright {
            background: ";
            // line 4570
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-top-color: ";
            // line 4571
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html #footer.color-primary {
            background: ";
            // line 4575
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-top-color: ";
            // line 4576
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html #footer.color-primary .footer-ribbon {
            background: #006699;
        }

        html #footer.color-primary .footer-ribbon:before {
            border-right-color: #00334d;
        }

        html #footer.color-primary .footer-copyright {
            background: ";
            // line 4588
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
            border-top-color: ";
            // line 4589
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html #footer.color-secondary {
            background: #e36159;
            border-top-color: #e36159;
        }

        html #footer.color-secondary .footer-ribbon {
            background: #dc372d;
        }

        html #footer.color-secondary .footer-ribbon:before {
            border-right-color: #a1231b;
        }

        html #footer.color-secondary .footer-copyright {
            background: #df4c43;
            border-top-color: #df4c43;
        }

        html #footer.color-tertiary {
            background: #2baab1;
            border-top-color: #2baab1;
        }

        html #footer.color-tertiary .footer-ribbon {
            background: #218388;
        }

        html #footer.color-tertiary .footer-ribbon:before {
            border-right-color: #12474a;
        }

        html #footer.color-tertiary .footer-copyright {
            background: #26969c;
            border-top-color: #26969c;
        }

        html #footer.color-quaternary {
            background: #383f48;
            border-top-color: #383f48;
        }

        html #footer.color-quaternary .footer-ribbon {
            background: #22262b;
        }

        html #footer.color-quaternary .footer-ribbon:before {
            border-right-color: #000000;
        }

        html #footer.color-quaternary .footer-copyright {
            background: #2d323a;
            border-top-color: #2d323a;
        }

        html #footer.color-dark {
            background: #2e353e;
            border-top-color: #2e353e;
        }

        html #footer.color-dark .footer-ribbon {
            background: #181c21;
        }

        html #footer.color-dark .footer-ribbon:before {
            border-right-color: #000000;
        }

        html #footer.color-dark .footer-copyright {
            background: #23282f;
            border-top-color: #23282f;
        }

        html #footer.color-light {
            background: #ffffff;
            border-top-color: #ffffff;
        }

        html #footer.color-light .footer-ribbon {
            background: #e6e6e6;
        }

        html #footer.color-light .footer-ribbon:before {
            border-right-color: #bfbfbf;
        }

        html #footer.color-light .footer-copyright {
            background: #f2f2f2;
            border-top-color: #f2f2f2;
        }

        .sample-icon-list .sample-icon a:hover {
            background-color: ";
            // line 4683
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }

        html.boxed .body {
            border-top-color: ";
            // line 4687
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo ";
        }
        #mainNav > li.active > a,#mainNav > li.active > a.is-active { background: ";
            // line 4689
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["custom_color"] ?? null), "html", null, true));
            echo "; }

        </style>
    ";
        } else {
            // line 4693
            echo "        <link rel='stylesheet' href='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/skins/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["skin_option"] ?? null), "html", null, true));
            echo ".css' type='text/css' media='all' />
    ";
        }
        // line 4695
        echo "    ";
        if ((($context["rtl"] ?? null) == 1)) {
            // line 4696
            echo "        <link rel='stylesheet' href='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/rtl-theme.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 4697
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/rtl-theme-elements.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 4698
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/rtl-theme-blog.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 4699
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_root"] ?? null), "html", null, true));
            echo "/css/rtl-theme-shop.css' type='text/css' media='all' />
    ";
        }
        // line 4701
        echo "    ";
        if ( !twig_test_empty(($context["your_css"] ?? null))) {
            // line 4702
            echo "        <style>
            ";
            // line 4703
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["your_css"] ?? null)));
            echo "
        </style>
    ";
        }
        // line 4706
        echo "
    <js-placeholder token=\"";
        // line 4707
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
  </head>
  <body ";
        // line 4711
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo " ";
        if ((($context["arg"] ?? null) == "index-one-page")) {
            echo " class=\"one-page\" ";
        }
        echo " data-target=\"";
        if ((($context["arg"] ?? null) == "index-corporate-hosting")) {
            echo "#navSecondary";
        } else {
            echo "#header";
        }
        echo "\" data-spy=\"scroll\" data-offset=\"100\">
  ";
        // line 4712
        if ((($context["loader"] ?? null) == 1)) {
            // line 4713
            echo "  <div class=\"preloader\">
      <div class=\"status\">&nbsp;</div>
  </div>
  ";
        }
        // line 4717
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 4718
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    <div class=\"body\">
        ";
        // line 4721
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
        ";
        // line 4722
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
        ";
        // line 4723
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    </div>
    <js-bottom-placeholder token=\"";
        // line 4725
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5733 => 4725,  5728 => 4723,  5724 => 4722,  5720 => 4721,  5714 => 4718,  5711 => 4717,  5705 => 4713,  5703 => 4712,  5689 => 4711,  5682 => 4707,  5679 => 4706,  5673 => 4703,  5670 => 4702,  5667 => 4701,  5662 => 4699,  5658 => 4698,  5654 => 4697,  5649 => 4696,  5646 => 4695,  5638 => 4693,  5631 => 4689,  5626 => 4687,  5619 => 4683,  5522 => 4589,  5518 => 4588,  5503 => 4576,  5499 => 4575,  5492 => 4571,  5488 => 4570,  5473 => 4558,  5469 => 4557,  5462 => 4553,  5446 => 4540,  5439 => 4536,  5430 => 4530,  5411 => 4514,  5403 => 4509,  5395 => 4508,  5381 => 4497,  5373 => 4496,  5363 => 4491,  5359 => 4490,  5306 => 4440,  5275 => 4412,  5268 => 4408,  5261 => 4404,  5254 => 4400,  5246 => 4395,  5238 => 4390,  5231 => 4386,  5227 => 4385,  5109 => 4270,  5102 => 4266,  5095 => 4262,  5088 => 4258,  5081 => 4254,  5074 => 4250,  5067 => 4246,  5060 => 4242,  5027 => 4212,  5012 => 4200,  5005 => 4196,  4998 => 4192,  4962 => 4159,  4929 => 4129,  4921 => 4124,  4888 => 4094,  4880 => 4089,  4827 => 4039,  4819 => 4034,  4812 => 4030,  4804 => 4025,  4772 => 3996,  4764 => 3991,  4736 => 3966,  4729 => 3962,  4682 => 3918,  4675 => 3914,  4648 => 3890,  4621 => 3866,  4594 => 3842,  4567 => 3818,  4535 => 3789,  4531 => 3788,  4499 => 3759,  4495 => 3758,  4428 => 3694,  4421 => 3690,  4414 => 3686,  4407 => 3682,  4400 => 3678,  4393 => 3674,  4386 => 3670,  4379 => 3666,  4342 => 3632,  4333 => 3626,  4285 => 3581,  4278 => 3577,  4271 => 3573,  4264 => 3569,  4256 => 3564,  4249 => 3560,  4213 => 3527,  4070 => 3387,  4066 => 3386,  4059 => 3382,  4049 => 3375,  4042 => 3371,  4038 => 3370,  3984 => 3319,  3977 => 3315,  3968 => 3309,  3959 => 3303,  3948 => 3295,  3712 => 3062,  3705 => 3058,  3697 => 3053,  3693 => 3052,  3685 => 3047,  3676 => 3041,  3668 => 3036,  3661 => 3032,  3653 => 3027,  3647 => 3024,  3638 => 3018,  3630 => 3013,  3622 => 3008,  3614 => 3003,  3606 => 2998,  3598 => 2993,  3590 => 2988,  3582 => 2983,  3575 => 2979,  3568 => 2975,  3561 => 2971,  3554 => 2967,  3547 => 2963,  3540 => 2959,  3533 => 2955,  3526 => 2951,  3519 => 2947,  3510 => 2941,  3503 => 2937,  3451 => 2888,  3443 => 2883,  3436 => 2879,  3428 => 2874,  3396 => 2845,  3357 => 2809,  3304 => 2759,  3297 => 2755,  3245 => 2706,  3238 => 2702,  3231 => 2698,  3224 => 2694,  3091 => 2564,  3084 => 2560,  3076 => 2555,  3066 => 2548,  3062 => 2547,  3052 => 2540,  3045 => 2536,  3041 => 2535,  3034 => 2531,  3024 => 2524,  3020 => 2523,  3010 => 2516,  2998 => 2507,  2568 => 2080,  2556 => 2071,  2548 => 2066,  2536 => 2057,  2528 => 2052,  2510 => 2037,  2500 => 2030,  2496 => 2029,  2478 => 2014,  2468 => 2007,  2454 => 1996,  2450 => 1995,  2436 => 1984,  2422 => 1973,  2408 => 1962,  2394 => 1951,  2384 => 1944,  2380 => 1943,  2372 => 1938,  2362 => 1931,  2344 => 1916,  2337 => 1912,  2329 => 1911,  2319 => 1904,  2311 => 1903,  2302 => 1899,  2298 => 1898,  2290 => 1893,  2258 => 1864,  2251 => 1860,  2239 => 1851,  2188 => 1803,  2181 => 1799,  2174 => 1795,  2167 => 1791,  2160 => 1787,  2153 => 1783,  2066 => 1699,  2058 => 1694,  2054 => 1693,  2047 => 1689,  2043 => 1688,  2039 => 1687,  1905 => 1556,  1901 => 1555,  1893 => 1550,  1886 => 1546,  1632 => 1295,  1628 => 1294,  1601 => 1270,  1538 => 1210,  1519 => 1194,  1511 => 1189,  1503 => 1188,  1489 => 1177,  1481 => 1176,  1471 => 1171,  1467 => 1170,  1458 => 1164,  1454 => 1163,  1442 => 1154,  1430 => 1145,  1426 => 1144,  1414 => 1135,  1139 => 863,  1131 => 858,  1123 => 857,  1109 => 846,  1101 => 845,  1092 => 839,  1086 => 838,  1082 => 837,  1073 => 831,  1069 => 830,  696 => 460,  690 => 459,  662 => 434,  655 => 430,  647 => 429,  637 => 422,  629 => 421,  620 => 417,  616 => 416,  608 => 411,  601 => 407,  594 => 403,  567 => 379,  560 => 375,  553 => 371,  545 => 366,  413 => 237,  405 => 232,  398 => 228,  391 => 224,  384 => 220,  377 => 216,  370 => 212,  362 => 207,  355 => 203,  348 => 199,  321 => 175,  314 => 171,  287 => 147,  205 => 68,  193 => 59,  184 => 53,  177 => 49,  170 => 45,  163 => 41,  159 => 39,  156 => 38,  153 => 37,  148 => 34,  146 => 33,  141 => 32,  139 => 31,  134 => 30,  132 => 29,  127 => 28,  125 => 27,  120 => 26,  118 => 25,  113 => 24,  111 => 23,  106 => 22,  103 => 21,  101 => 20,  97 => 19,  91 => 16,  87 => 15,  54 => 12,  50 => 10,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/porto/templates/html.html.twig", "/home/yogabarre/public_html/themes/porto/templates/html.html.twig");
    }
}
