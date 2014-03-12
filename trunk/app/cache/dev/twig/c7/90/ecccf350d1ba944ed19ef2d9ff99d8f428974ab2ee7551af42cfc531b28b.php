<?php

/* KronosUserReportingBundle:User:create-line-x.html.twig */
class __TwigTemplate_c790ecccf350d1ba944ed19ef2d9ff99d8f428974ab2ee7551af42cfc531b28b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KronosUserReportingBundle::ajax_layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KronosUserReportingBundle::ajax_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
        ";
        // line 6
        $this->env->loadTemplate("KronosUserReportingBundle::flash.html.twig")->display($context);
        // line 7
        echo "
        <h2 style=\"text-align:left\">Add New</h2>

        <form name=\"kronos_form_line\" id=\"kronos_form_line\" method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "action"), "html", null, true);
        echo "\">

        <!-- Tables ֠Classing data -->
        <table cellspacing=\"0\" cellpadding=\"0\" class=\"table table-empty-data\" summary=\"Titre du tableau\">
            <thead>
                <tr>
                    <th scope=\"col\">Activity</th>
                    <th scope=\"col\">Project</th>
                    <th scope=\"col\">Task</th>
                    <th scope=\"col\">Monday</th>
                    <th scope=\"col\">Tuesday</th>
                    <th scope=\"col\">Wednesday</th>
                    <th scope=\"col\">Thursday</th>
                    <th scope=\"col\">Friday</th>
                    <th scope=\"col\">Saturday</th>
                    <th scope=\"col\">Sunday</th>
                    <th scope=\"col\">Action</th>
                </tr>
            </thead>
            <tbody>

            ";
        // line 31
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "KronosUserReportingBundle:Form:form_div_layout.html.twig"));
        // line 32
        echo "
            <tr>

                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                
                <td>
                    <button type=\"submit\" id=\"kronos_form_line_x_save\" name=\"kronos_form_line_x_save\" class=\"button-classic\">Add new</button>
                </td>

            </tr>

                </tbody>
            </table>
            <!-- /Tables ֠Classing data -->\t

        </form>

";
    }

    public function getTemplateName()
    {
        return "KronosUserReportingBundle:User:create-line-x.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 35,  67 => 32,  65 => 31,  41 => 10,  36 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
