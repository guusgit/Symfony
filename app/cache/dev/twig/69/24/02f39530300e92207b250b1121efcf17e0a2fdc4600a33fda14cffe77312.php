<?php

/* EvryThingGalerieBundle::layout.html.twig */
class __TwigTemplate_692402f39530300e92207b250b1121efcf17e0a2fdc4600a33fda14cffe77312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'principal' => array($this, 'block_principal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "\t\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 11
    public function block_principal($context, array $blocks = array())
    {
        // line 12
        echo "\t<div id=\"principal\">
\t\t<!-- Start WOWSlider.com BODY section -->
\t\t\t<div id=\"wowslider-container1\">
\t\t\t\t<div class=\"ws_images\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/img_0029.jpg"), "html", null, true);
        echo "\" alt=\"IMG_0029\" title=\"IMG_0029\" id=\"wows1_0\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/img_0023.jpg"), "html", null, true);
        echo "\" alt=\"IMG_0023\" title=\"IMG_0023\" id=\"wows1_1\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/img_0024.jpg"), "html", null, true);
        echo "\" alt=\"IMG_0024\" title=\"IMG_0024\" id=\"wows1_2\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/img_0025.jpg"), "html", null, true);
        echo "\" alt=\"IMG_0025\" title=\"IMG_0025\" id=\"wows1_3\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/img_0026.jpg"), "html", null, true);
        echo "\" alt=\"IMG_0026\" title=\"IMG_0026\" id=\"wows1_4\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/img_0027.jpg"), "html", null, true);
        echo "\" alt=\"IMG_0027\" title=\"IMG_0027\" id=\"wows1_5\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/img_0028.jpg"), "html", null, true);
        echo "\" alt=\"IMG_0028\" title=\"IMG_0028\" id=\"wows1_6\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/imgp1253.jpg"), "html", null, true);
        echo "\" alt=\"IMGP1253\" title=\"IMGP1253\" id=\"wows1_7\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/imgp1247.jpg"), "html", null, true);
        echo "\" alt=\"IMGP1247\" title=\"IMGP1247\" id=\"wows1_8\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/imgp1248.jpg"), "html", null, true);
        echo "\" alt=\"IMGP1248\" title=\"IMGP1248\" id=\"wows1_9\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/imgp1249.jpg"), "html", null, true);
        echo "\" alt=\"IMGP1249\" title=\"IMGP1249\" id=\"wows1_10\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/imgp1251.jpg"), "html", null, true);
        echo "\" alt=\"IMGP1251\" title=\"IMGP1251\" id=\"wows1_11\"/></li>
\t\t\t\t\t\t<li><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/imgp1252.jpg"), "html", null, true);
        echo "\" alt=\"IMGP1252\" title=\"IMGP1252\" id=\"wows1_12\"/></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"ws_thumbs\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"#wows1_0\" title=\"IMG_0029\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/img_0029.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_1\" title=\"IMG_0023\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/img_0023.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_2\" title=\"IMG_0024\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/img_0024.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_3\" title=\"IMG_0025\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/img_0025.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_4\" title=\"IMG_0026\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/img_0026.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_5\" title=\"IMG_0027\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/img_0027.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_6\" title=\"IMG_0028\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/img_0028.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_7\" title=\"IMGP1253\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/imgp1253.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_8\" title=\"IMGP1247\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/imgp1247.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_9\" title=\"IMGP1248\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/imgp1248.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_10\" title=\"IMGP1249\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/imgp1249.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_11\" title=\"IMGP1251\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/imgp1251.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t<a href=\"#wows1_12\" title=\"IMGP1252\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/images/tooltips/imgp1252.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<span class=\"wsl\"><a href=\"http://wowslider.com\">slideshow html</a> by WOWSlider.com v5.4</span>
\t\t\t\t<div class=\"ws_shadow\"></div>
\t\t\t</div>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/js/wowslider.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/js/script.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- End WOWSlider.com BODY section -->
\t\t<ul>\t\t
\t\t</ul>\t
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "EvryThingGalerieBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 53,  181 => 52,  172 => 46,  168 => 45,  164 => 44,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  61 => 12,  58 => 11,  51 => 9,  48 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
