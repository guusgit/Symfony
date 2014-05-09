<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'principal' => array($this, 'block_principal'),
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " EvryThing</title>
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body>
\t<div id=\"background\">
\t\t<header>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("evry_thing_blog_accueil", array("page" => 1));
        echo "\" class=\"navOrange\">ACTUALIT&EacuteS</a></li>
\t\t\t\t\t<li><a href=\"evry.html\" class=\"navBleu\">MIAGE &EacuteVRY</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("evry_thing_blog_modifierArticle", array("id" => 1));
        echo "\" class=\"navOrange\">BDE</a></li>
\t\t\t\t\t<li><a href=\"index.html.twig\" class=\"navBleu\">MIAGE CONNEXION</a></li>
\t\t\t\t\t<li><a href=\"evry.html\" class=\"navOrange\">&EacuteV&EgraveNEMENTS</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("evry_thing_galerie_albums", array("page" => 1));
        echo "\" class=\"navBleu\">GALERIE</a></li>
\t\t\t\t\t<li><a href=\"index.html.twig\" class=\"navOrange\">DOCUMENTS</a></li>
\t\t\t\t\t<li><a href=\"evry.html\" class=\"navBleu\">ADH&EacuteSIONS</a></li>
\t\t\t\t\t<li><a href=\"bde.html\" class=\"navOrange\">ESPACE ANCIEN</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
    \t<div id=\"centre\">
        \t";
        // line 30
        $this->displayBlock('principal', $context, $blocks);
        // line 32
        echo "\t\t\t";
        $this->displayBlock('login', $context, $blocks);
        // line 35
        echo "        </div>
\t\t<footer>
\t\t\t<p id=\"partenaire\">
\t\t\t\tPartenaires : 
\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythingblog/images/logoUEVE.jpg"), "html", null, true);
        echo "\" alt=\"logo UEVE\" />
\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythingblog/images/logoMiageCo.png"), "html", null, true);
        echo "\" alt=\"logo Miage Co\" />
\t\t\t\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythingblog/images/logoMozilla.png"), "html", null, true);
        echo "\" alt=\"logo UEVE\" />
\t\t\t</p>
\t\t</footer>
    </div>
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythingblog/css/Global.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t";
    }

    // line 30
    public function block_principal($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t";
    }

    // line 32
    public function block_login($context, array $blocks = array())
    {
        // line 33
        echo "\t\t\t\t";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EvryThingLoginBundle:Login:login"));
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  118 => 32,  114 => 31,  111 => 30,  104 => 9,  101 => 8,  95 => 7,  85 => 41,  81 => 40,  77 => 39,  71 => 35,  68 => 32,  66 => 30,  55 => 22,  49 => 19,  44 => 17,  36 => 11,  34 => 8,  30 => 7,  23 => 2,);
    }
}
