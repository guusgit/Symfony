<?php

/* EvryThingBlogBundle::layout.html.twig */
class __TwigTemplate_b07d13d64a83011f90e5513fd1338eb392bdc27c11e5a4acaf07e2befba95c44 extends Twig_Template
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
\t\t\t\t\t\t<div class=\"contenudur\">
                          
                          <input id=\"boutonP";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" type=\"button\" name=\"derouleur\" value=\"+ DE DETAILS\" onClick=\"derouler(this.id)\">
                          
                          <input id=\"boutonM";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" type=\"button\" style=\"display:none;\" name=\"enrouleur\" value=\"- DE DETAILS\" onClick=\"enrouler(this.id)\">
\t\t\t\t\t\t\t
                            <p class=\"contenudur\" style=\"display:none;\">
                              ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'
                          </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\tpar ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
                echo ", le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "taille") == "petitD")) {
                // line 43
                echo "\t\t\t\t\t<li class=\"article petitD\">
\t\t\t\t\t\t<div class=\"artTitre\">
\t\t\t\t\t\t\t<h1 class=\"titre1\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"contenu\">
\t\t\t\t\t\t\t<img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")), "html", null, true);
                echo "\" alt=\"img";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"contenudur\">
                          
                          <input id=\"boutonP";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" type=\"button\" name=\"derouleur\" value=\"+ DE DETAILS\" onClick=\"derouler(this.id)\">
                          
                          <input id=\"boutonM";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" type=\"button\" style=\"display:none;\" name=\"enrouleur\" value=\"- DE DETAILS\" onClick=\"enrouler(this.id)\">
\t\t\t\t\t\t\t
                            <p class=\"contenudur\" style=\"display:none;\">
                              ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'
                          </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\tpar ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
                echo ", le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t\t<li class=\"article grand\">
\t\t\t\t\t\t<div class=\"artTitre\">
\t\t\t\t\t\t\t<h1 class=\"titre1\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"contenu\">
\t\t\t\t\t\t\t<img src=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")), "html", null, true);
                echo "\" alt=\"img";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"contenudur\">
                          
                          <input id=\"boutonP";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" type=\"button\" name=\"derouleur\" value=\"+ DE DETAILS\" onClick=\"derouler(this.id)\">
                          
                          <input id=\"boutonM";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                echo "\" type=\"button\" style=\"display:none;\" name=\"enrouleur\" value=\"- DE DETAILS\" onClick=\"enrouler(this.id)\">
\t\t\t\t\t\t\t
                            <p class=\"contenudur\" style=\"display:none;\">
                              ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'
                                 ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'   ceci est le corps de l'article : ceci est le corps de l'article'
                          </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"test\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 96
            echo "\t\t\t";
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
            // line 97
            echo "\t\t\t\t<!--<li>Pas (encore !) d'articles</li>-->
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t</ul>\t
\t</div>
\t
\t\t<script>
    function derouler(idbutton) {

     ciblecontenu = document.getElementById(idbutton).nextElementSibling.nextElementSibling;
ciblecontenu.style.display='block';
      ciblebuttonmoins = document.getElementById(idbutton).nextElementSibling;
      ciblebuttonmoins.style.display='block';
      document.getElementById(idbutton).style.display='none';
  
   }

  function enrouler(idbutton){
    
    cachecontenu = document.getElementById(idbutton).nextElementSibling;
    
    cachecontenu.style.display='none';
    
    buttonplus = document.getElementById(idbutton).previousElementSibling;
    document.getElementById(idbutton).style.display='none';
    buttonplus.style.display='block';
    
  }
</script>
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
        return array (  253 => 99,  246 => 97,  233 => 96,  216 => 82,  211 => 80,  204 => 76,  198 => 75,  192 => 72,  188 => 70,  179 => 66,  165 => 55,  160 => 53,  153 => 49,  147 => 48,  141 => 45,  137 => 43,  128 => 39,  114 => 28,  109 => 26,  102 => 22,  96 => 21,  90 => 18,  86 => 16,  83 => 15,  65 => 14,  61 => 12,  58 => 11,  51 => 9,  48 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
