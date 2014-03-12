<?php

/* KronosUserReportingBundle:User:index.html.twig */
class __TwigTemplate_3110fb3d31a876f988a02f231b230b19242d6971f7a7441ecd54223a6bc99752 extends Twig_Template
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
        echo "User Time Report Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
        <p class=\"linklist_horizontal_html\">
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "previousUrl"), "html", null, true);
        echo "\">Previous</a>
                        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "currentWeek"), "html", null, true);
        echo "
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "nextUrl"), "html", null, true);
        echo "\">Next</a>
        </p>

        <h1 style=\"text-align:left\">User Time Report</h1>
        
        <div id=\"addNewTable\">
            ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("KronosUserReportingBundle:User:createLine", array("inWeek" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "inWeek"), "inYear" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "inYear"), "type" => "partial")));
        echo "
        </div>

        <form name=\"kronos_form_line_save\" id=\"kronos_form_line_save\" method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "url"), "html", null, true);
        echo "\">
\t\t\t
                            
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")));
        foreach ($context['_seq'] as $context["formsArrayKey"] => $context["formsArray"]) {
            // line 23
            echo "            
        ";
            // line 24
            $context["firstForm"] = twig_first($this->env, (isset($context["formsArray"]) ? $context["formsArray"] : $this->getContext($context, "formsArray")));
            // line 25
            echo "
        <h2 style=\"text-align:left\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["firstForm"]) ? $context["firstForm"] : $this->getContext($context, "firstForm")), "form", array(), "array"), "createView", array(), "method"), "vars"), "value"), "getLineType", array(), "method"), "html", null, true);
            echo "</h2>
        
        <!-- Tables ֠Classing data -->
        <table cellspacing=\"0\" cellpadding=\"0\" class=\"table table-empty-data\" summary=\"Titre du tableau\" id=\"";
            // line 29
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
            // line 47
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
                // line 48
                echo "
                ";
                // line 49
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["formArray"]) ? $context["formArray"] : $this->getContext($context, "formArray")), "form", array(), "array"), "createView", array(), "method");
                // line 50
                echo "
                ";
                // line 51
                $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "KronosUserReportingBundle:Form:form_div_layout.html.twig"));
                // line 52
                echo "
                <tr";
                // line 53
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "", 1 => " class=even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
                echo ">
                    <td>
                        <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kronos_delete_line_datas", array("lineId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"), "getId", array(), "method"), "inWeek" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "inWeek"), "inYear" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "inYear"))), "html", null, true);
                echo "\" class=\"removeDatas\">Remove</a>
                    </td>

                    ";
                // line 58
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "

                    <td class=\"numerical-positive\">
                        ";
                // line 61
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
            // line 67
            echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\"><strong>Total&nbsp;:</strong></td>
                        <td class=\"numerical-positive left\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Mon", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Tue", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Wed", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Thu", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Fri", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Sat", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive left\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), (isset($context["formsArrayKey"]) ? $context["formsArrayKey"] : $this->getContext($context, "formsArrayKey")), array(), "array"), "Sun", array(), "array"), "html", null, true);
            echo "</td>
                        <td class=\"numerical-positive\">";
            // line 78
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
        // line 85
        echo "            
    ";
        // line 86
        if ((twig_length_filter($this->env, (isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms"))) > 0)) {
            // line 87
            echo "                
    <p>
            <button type=\"submit\" id=\"kronos_form_line_save\" name=\"kronos_form_line_save\" class=\"button-classic\">Submit</button>
    </p>
    
    ";
        }
        // line 93
        echo "
    </form>

";
    }

    public function getTemplateName()
    {
        return "KronosUserReportingBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 93,  229 => 87,  227 => 86,  224 => 85,  211 => 78,  207 => 77,  203 => 76,  199 => 75,  195 => 74,  191 => 73,  187 => 72,  183 => 71,  177 => 67,  157 => 61,  151 => 58,  145 => 55,  140 => 53,  137 => 52,  135 => 51,  132 => 50,  130 => 49,  127 => 48,  110 => 47,  89 => 29,  83 => 26,  80 => 25,  78 => 24,  75 => 23,  71 => 22,  65 => 19,  59 => 16,  50 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
