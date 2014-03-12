<?php

/* KronosUserReportingBundle:User:create-line.html.twig */
class __TwigTemplate_2d9018d2980e86623b7c973e2f0d93b08489a819f57ba66533a0bf223e10afef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KronosUserReportingBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KronosUserReportingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Create New Line";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "

    ";
        // line 9
        $this->env->loadTemplate("KronosUserReportingBundle::flash.html.twig")->display($context);
        // line 10
        echo "
        <h1 style=\"text-align:left\">Create New Line</h1>

        <form name=\"kronos_form_line_save\" method=\"post\" action=\"";
        // line 13
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
                </tr>
            </thead>
            <tbody>

            ";
        // line 33
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "KronosUserReportingBundle:Form:form_div_layout.html.twig"));
        // line 34
        echo "
            <tr>

                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "\t

            </tr>

                </tbody>
            </table>
            <!-- /Tables ֠Classing data -->\t
                
    <p>
            <button type=\"submit\" id=\"kronos_form_line_save\" name=\"kronos_form_line_save\" class=\"button-classic\">Submit</button>
    </p>

    </form>
        
";
    }

    public function getTemplateName()
    {
        return "KronosUserReportingBundle:User:create-line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 37,  74 => 34,  72 => 33,  49 => 13,  44 => 10,  42 => 9,  38 => 7,  35 => 6,  29 => 3,);
    }
}
