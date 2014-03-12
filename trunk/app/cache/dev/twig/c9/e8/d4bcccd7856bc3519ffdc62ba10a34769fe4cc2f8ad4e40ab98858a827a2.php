<?php

/* KronosUserReportingBundle::layout.html.twig */
class __TwigTemplate_c9e8d4bcccd7856bc3519ffdc62ba10a34769fe4cc2f8ad4e40ab98858a827a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
    <!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/css/general.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/css/gabarits.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/css/tableaux.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/css/formulaires.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/css/boutons.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/css/liens-internes-externes.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/css/messages-erreur-info.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/css/custom.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/js/custom.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"shortcut icon\" href=\"../../favicon.ico\">
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kronosuserreporting/images/favicon.png"), "html", null, true);
        echo "\">
                <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
                </head>
                <body>

                    <!-- Top links -->
                    <div id=\"toplinks\" style=\"background-color:#808080;\">
                        <div id=\"toplinks-inner\">
                            Links
                        </div>
                    </div>

                    <!-- Wrapper -->
                    <div id=\"wrapper\">

                        <!-- Container -->
                        <div id=\"container\">

                            <!-- Header -->
                            <div id=\"header\" class=\"clear compact\">


                                <!-- Logo -->
                                <div id=\"logo\">
                                    <div style=\"background-color:#808080; padding:3px; height:34px;\">Logo</div>
                                </div>

                                <!-- Navigation -->
                                <div id=\"navigation\">
                                    <div style=\"background-color:#808080; padding:3px;\">Navigation</div>
                                </div>
                                <!-- /Navigation -->

                            </div>
                            <!-- /Header -->

                            <!-- Content -->
                            <div id=\"content\">

                                <div>
                                    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "                                </div>

                            </div>
                            <!-- /Content -->\t

                        </div>
                        <!-- /Container -->

                    </div>
                    <!-- /Wrapper -->

                    <!-- Footer -->
                    <div id=\"footer\" style=\"background-color:#808080;\">
                        <div id=\"footer-inner\">
                            Footer
                        </div>
                    </div>
                    <!-- /Footer -->




                    <!-- Javascript -->
                    <!-- /Javascript -->

                </body>
                </html>";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "KronosUserReportingBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  147 => 18,  117 => 58,  115 => 57,  73 => 18,  69 => 17,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  21 => 1,);
    }
}
