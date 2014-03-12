<?php

/* KronosUserReportingBundle:User:index-x.html.twig */
class __TwigTemplate_8cb3a4b7cd5438b8e7b84a911330bbaf499d80ac2ea2e98da68ee446c1a900b2 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        <form name=\"kronos_form_line_save\" id=\"kronos_form_line_save\" method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "url"), "html", null, true);
        echo "\">
\t\t\t
                            
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")));
        foreach ($context['_seq'] as $context["formsArrayKey"] => $context["formsArray"]) {
            // line 9
            echo "            
        ";
            // line 10
            $context["firstForm"] = twig_first($this->env, (isset($context["formsArray"]) ? $context["formsArray"] : $this->getContext($context, "formsArray")));
            // line 11
            echo "
        <h2 style=\"text-align:left\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["firstForm"]) ? $context["firstForm"] : $this->getContext($context, "firstForm")), "form", array(), "array"), "createView", array(), "method"), "vars"), "value"), "getLineType", array(), "method"), "html", null, true);
            echo "</h2>
        
        <!-- Tables ֠Classing data -->
        <table cellspacing=\"0\" cellpadding=\"0\" class=\"table table-empty-data\" summary=\"Titre du tableau\" id=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), "html", null, true);
            echo "\">
            <thead>
                <tr>
                    <th scope=\"col\">Action</th>
                    <th scope=\"col\">Project</th>
                    <th scope=\"col\">Task</th>
                    <th scope=\"col\">Monday</th>
                    <th scope=\"col\">Tuesday</th>
                    <th scope=\"col\">Wednesday</th>
                    <th scope=\"col\">Thursday</th>
                    <th scope=\"col\">Friday</th>
                    <th scope=\"col\">Saturday</th>
                    <th scope=\"col\">Sunday</th>
                    <th scope=\"col\">Total</th>
                </tr>
            </thead>
            <tbody>

            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formsArray"]) ? $context["formsArray"] : $this->getContext($context, "formsArray")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["formArray"]) {
                // line 34
                echo "
                ";
                // line 35
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["formArray"]) ? $context["formArray"] : $this->getContext($context, "formArray")), "form", array(), "array"), "createView", array(), "method");
                // line 36
                echo "
                ";
                // line 37
                $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "KronosUserReportingBundle:Form:form_div_layout.html.twig"));
                // line 38
                echo "
                <tr";
                // line 39
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "", 1 => " class=even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
                echo ">
                    <td>
                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kronos_delete_line_datas", array("lineId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"), "getId", array(), "method"), "inWeek" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "inWeek"), "inYear" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "inYear"))), "html", null, true);
                echo "\" class=\"removeDatas\">Remove</a>
                    </td>

                    ";
                // line 44
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "

                    <td class=\"numerical-positive\">
                        ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formArray"]) ? $context["formArray"] : $this->getContext($context, "formArray")), "lineTotal", array(), "array"), "html", null, true);
                echo "
                    </td>

                </tr>

            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formArray'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\"><strong>Total&nbsp;:</strong></td>
                        <td class=\"numerical-positive left\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Mon", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Tue", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Wed", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Thu", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Fri", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Sat", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Sun", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "total", array(), "array"), "html", null, true);
            echo "</td>
                    </tr>
                </tfoot>
            </table>
            <!-- /Tables ֠Classing data -->

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['formsArrayKey'], $context['formsArray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            
    ";
        // line 72
        if ((twig_length_filter($this->env, (isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms"))) > 0)) {
            // line 73
            echo "                
    <p>
            <button type=\"submit\" id=\"kronos_form_line_save\" name=\"kronos_form_line_save\" class=\"button-classic\">Submit</button>
    </p>
    
    ";
        }
        // line 79
        echo "
    </form>

";
    }

    public function getTemplateName()
    {
        return "KronosUserReportingBundle:User:index-x.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 79,  198 => 73,  196 => 72,  193 => 71,  180 => 64,  176 => 63,  172 => 62,  168 => 61,  164 => 60,  160 => 59,  156 => 58,  152 => 57,  146 => 53,  126 => 47,  120 => 44,  114 => 41,  109 => 39,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  96 => 34,  79 => 33,  58 => 15,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
