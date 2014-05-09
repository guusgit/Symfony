<?php

/* EvryThingLoginBundle:Login:login.html.twig */
class __TwigTemplate_7087e25105dee387583d897e4a393ac7074068e81644124975bb5b5360542e14 extends Twig_Template
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
        // line 2
        echo "  \t<aside id=\"login\">
\t\t<h1 class=\"titre1\">
\t\t\tlogin
\t\t</h1>
\t\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</aside>";
    }

    public function getTemplateName()
    {
        return "EvryThingLoginBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  121 => 33,  118 => 32,  111 => 30,  101 => 8,  85 => 41,  81 => 40,  71 => 35,  68 => 32,  66 => 30,  55 => 22,  49 => 19,  44 => 17,  36 => 11,  34 => 8,  23 => 2,  176 => 58,  169 => 56,  164 => 55,  157 => 51,  151 => 48,  145 => 47,  139 => 44,  135 => 42,  126 => 38,  120 => 35,  114 => 31,  108 => 31,  104 => 9,  95 => 7,  89 => 22,  83 => 21,  77 => 39,  73 => 16,  70 => 15,  65 => 14,  61 => 12,  58 => 11,  51 => 9,  48 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 7,);
    }
}
