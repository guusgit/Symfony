<?php

/* EvryThingGalerieBundle:Galerie:albums.html.twig */
class __TwigTemplate_77245fc4306adde6cd5105f7bf5c4b479a21a7af247846d2667dcc81c7a9011f extends Twig_Template
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
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "\t\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 9
    public function block_principal($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"principal\">
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) ? $context["albums"] : $this->getContext($context, "albums")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 12
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evry_thing_galerie_carrousel", array("album" => (isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythinggalerie/919850_10201457092254208_1844789856_o.jpg"), "html", null, true);
            echo "\" alt=\"test\" /></a>\t
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "\t\t\t<li>Pas (encore !) d'albums photo</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "EvryThingGalerieBundle:Galerie:albums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  71 => 14,  61 => 12,  56 => 11,  53 => 10,  50 => 9,  43 => 7,  40 => 6,  33 => 4,  30 => 3,);
    }
}
