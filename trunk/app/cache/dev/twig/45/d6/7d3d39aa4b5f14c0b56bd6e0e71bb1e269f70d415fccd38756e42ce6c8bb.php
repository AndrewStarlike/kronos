<?php

/* KronosUserReportingBundle:User:get-table-of-lines-x.html.twig */
class __TwigTemplate_45d67d3d39aa4b5f14c0b56bd6e0e71bb1e269f70d415fccd38756e42ce6c8bb extends Twig_Template
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
        <!-- Tables ֠Classing data -->
        <table cellspacing=\"0\" cellpadding=\"0\" class=\"table table-empty-data\" id=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "lineTypeId"), "html", null, true);
        echo "\" summary=\"Titre du tableau\">
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
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")));
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
            // line 24
            echo "
                    ";
            // line 25
            $context["form"] = $this->getAttribute($this->getAttribute((isset($context["formArray"]) ? $context["formArray"] : $this->getContext($context, "formArray")), "form", array(), "array"), "createView", array(), "method");
            // line 26
            echo "
                    ";
            // line 27
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "KronosUserReportingBundle:Form:form_div_layout.html.twig"));
            // line 28
            echo "
                    <tr";
            // line 29
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "", 1 => " class=even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo ">
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kronos_delete_line_datas", array("lineId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"), "getId", array(), "method"), "inWeek" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "inWeek"), "inYear" => $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "inYear"))), "html", null, true);
            echo "\">Remove</a>
                        </td>

                        ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

                        <td class=\"numerical-positive\">
                            ";
            // line 37
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
        // line 43
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\"><strong>Total&nbsp;:</strong></td>
                        <td class=\"numerical-positive left\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), "Mon", array(), "array"), "html", null, true);
        echo "</td>
                        <td class=\"numerical-positive left\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), "Tue", array(), "array"), "html", null, true);
        echo "</td>
                        <td class=\"numerical-positive left\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), "Wed", array(), "array"), "html", null, true);
        echo "</td>
                        <td class=\"numerical-positive left\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), "Thu", array(), "array"), "html", null, true);
        echo "</td>
                        <td class=\"numerical-positive left\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), "Fri", array(), "array"), "html", null, true);
        echo "</td>
                        <td class=\"numerical-positive left\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), "Sat", array(), "array"), "html", null, true);
        echo "</td>
                        <td class=\"numerical-positive left\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), "Sun", array(), "array"), "html", null, true);
        echo "</td>
                        <td class=\"numerical-positive\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysTotal"]) ? $context["daysTotal"] : $this->getContext($context, "daysTotal")), "total", array(), "array"), "html", null, true);
        echo "</td>
                    </tr>
                </tfoot>
            </table>
        
";
    }

    public function getTemplateName()
    {
        return "KronosUserReportingBundle:User:get-table-of-lines-x.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 54,  152 => 53,  148 => 52,  144 => 51,  140 => 50,  136 => 49,  132 => 48,  128 => 47,  122 => 43,  102 => 37,  96 => 34,  90 => 31,  85 => 29,  82 => 28,  80 => 27,  77 => 26,  75 => 25,  72 => 24,  55 => 23,  35 => 6,  31 => 4,  28 => 3,);
    }
}
