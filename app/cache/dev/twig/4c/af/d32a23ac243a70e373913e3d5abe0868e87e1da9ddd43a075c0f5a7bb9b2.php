<?php

/* EvryThingGalerieBundle:Galerie:carrousel.html.twig */
class __TwigTemplate_4cafd32a23ac243a70e373913e3d5abe0868e87e1da9ddd43a075c0f5a7bb9b2 extends Twig_Template
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
\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 18
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < twig_length_filter($this->env, (isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos"))))) {
                // line 19
                echo "\t\t\t\t\t\t\t\t<li><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("bundles/evrythinggalerie/images/" . (isset($context["album"]) ? $context["album"] : $this->getContext($context, "album"))) . "/") . (isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")))), "html", null, true);
                echo "\" alt=\"\" title=\"\" id=\"wows1_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 22
            echo "\t\t\t\t\t\t\t<li>Pas encore de photos</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<span class=\"wsl\"><a href=\"http://wowslider.com\">slideshow html</a> by WOWSlider.com v5.4</span>
\t\t\t\t<div class=\"ws_shadow\"></div>
\t\t\t</div>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/js/wowslider.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 30
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
        return "EvryThingGalerieBundle:Galerie:carrousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  124 => 29,  117 => 24,  110 => 22,  97 => 21,  89 => 19,  86 => 18,  68 => 17,  61 => 12,  58 => 11,  51 => 9,  48 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
