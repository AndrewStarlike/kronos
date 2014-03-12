<?php

/* KronosUserReportingBundle::flash.html.twig */
class __TwigTemplate_6f0f8bc1670370f47f8a7ae3ddc273453e62ee501f29460adf6d2601f53a37eb extends Twig_Template
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
        echo "<div id=\"errorsParent\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "        <div class=\"infobox_error\">
            <p><strong>";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</strong></p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "confirm"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"infobox_confirm\">
            <p><strong>";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</strong></p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "KronosUserReportingBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  49 => 12,  41 => 10,  26 => 4,  22 => 3,  19 => 2,  224 => 85,  211 => 78,  207 => 77,  203 => 76,  199 => 75,  195 => 74,  191 => 73,  187 => 72,  183 => 71,  177 => 67,  157 => 61,  151 => 58,  145 => 55,  140 => 53,  137 => 52,  135 => 51,  132 => 50,  130 => 49,  127 => 48,  110 => 47,  89 => 29,  83 => 26,  80 => 25,  78 => 24,  75 => 23,  71 => 22,  65 => 19,  59 => 16,  50 => 10,  46 => 11,  42 => 8,  38 => 8,  35 => 5,  29 => 5,);
    }
}
