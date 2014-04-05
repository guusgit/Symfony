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
<meta charset=\"utf-8\">
<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " EvryThing</title>
";
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
\t\t\t\t\t<li><a href=\"bde.html\" class=\"navBleu\">GALERIE</a></li>
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/evrythingblog/css/Global.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
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
        return array (  118 => 33,  115 => 32,  111 => 31,  101 => 9,  98 => 8,  92 => 7,  82 => 41,  78 => 40,  74 => 39,  68 => 35,  63 => 30,  49 => 19,  44 => 17,  36 => 11,  34 => 8,  23 => 2,  176 => 58,  169 => 56,  164 => 55,  157 => 51,  151 => 48,  145 => 47,  139 => 44,  135 => 42,  126 => 38,  120 => 35,  114 => 34,  108 => 30,  104 => 29,  95 => 25,  89 => 22,  83 => 21,  77 => 18,  73 => 16,  70 => 15,  65 => 32,  61 => 12,  58 => 11,  51 => 9,  48 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 7,);
    }
}
