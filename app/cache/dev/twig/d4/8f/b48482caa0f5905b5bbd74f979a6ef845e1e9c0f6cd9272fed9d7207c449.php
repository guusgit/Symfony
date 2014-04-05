<?php

/* EvryThingBlogBundle::layout.html.twig */
class __TwigTemplate_d48fb48482caa0f5905b5bbd74f979a6ef845e1e9c0f6cd9272fed9d7207c449 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythingblog/css/Accueil.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythingblog/css/Blog.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
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
\t\t<ul>\t\t
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "taille") == "petitG")) {
                // line 16
                echo "\t\t\t\t\t<li class=\"article petitG\">
\t\t\t\t\t\t<div class=\"artTitre\">
\t\t\t\t\t\t\t<h1 class=\"titre1\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"contenu\">
\t\t\t\t\t\t\t<img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")), "html", null, true);
                echo "\" alt=\"img";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\tpar ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
                echo ", le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "taille") == "petitD")) {
                // line 29
                echo "\t\t\t\t\t<li class=\"article petitD\">
\t\t\t\t\t\t<div class=\"artTitre\">
\t\t\t\t\t\t\t<h1 class=\"titre1\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"contenu\">
\t\t\t\t\t\t\t<img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")), "html", null, true);
                echo "\" alt=\"img";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\tpar ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
                echo ", le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t\t<li class=\"article grand\">
\t\t\t\t\t\t<div class=\"artTitre\">
\t\t\t\t\t\t\t<h1 class=\"titre1\">";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"contenu\">
\t\t\t\t\t\t\t<img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")), "html", null, true);
                echo "\" alt=\"img";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"test\">
\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("evry_thing_blog_ajouterArticle");
                echo "\">DE DETAILS</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "\t\t\t\t<!--<li>Pas (encore !) d'articles</li>-->
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t</ul>\t
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "EvryThingBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 58,  169 => 56,  164 => 55,  157 => 51,  151 => 48,  145 => 47,  139 => 44,  135 => 42,  126 => 38,  120 => 35,  114 => 34,  108 => 31,  104 => 29,  95 => 25,  89 => 22,  83 => 21,  77 => 18,  73 => 16,  70 => 15,  65 => 14,  61 => 12,  58 => 11,  51 => 9,  48 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
