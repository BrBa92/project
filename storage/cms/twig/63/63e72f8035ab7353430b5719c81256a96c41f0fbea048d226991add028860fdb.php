<?php

/* /home/ubuntu/workspace/themes/final/layouts/default.htm */
class __TwigTemplate_fb8846577daa77700677d432e3e9e752e57b600ed6b346512da86756dc3e4bbb extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html><head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Your Landing Page Title</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">

\t<!--pageMeta-->

\t<!-- Lib CSS -->
\t<link href=\"//fonts.googleapis.com/css?family=Rancho|Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,700italic,800\" rel=\"stylesheet\">
\t<link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/minify/rgen_min.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/configstyle.css?rgEbp");
        echo "\" id=\"config_style\" rel=\"stylesheet\">
\t<link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\" rel=\"stylesheet\">
\t
\t<!-- my css -->
\t<link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/dopolnenie.css");
        echo "\" rel=\"stylesheet\">

\t<!-- Favicons -->
\t<link rel=\"icon\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicons/favicon.ico");
        echo "\">
\t<link rel=\"apple-touch-icon\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicons/apple-touch-icon.png");
        echo "\">
\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicons/apple-touch-icon-72x72.png");
        echo "\">
\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicons/apple-touch-icon-114x114.png");
        echo "\">

\t<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
\t<!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
\t<!--[if IE 9 ]><script src=\"js/ie-matchmedia.js\"></script><![endif]-->

</head>
<body>
<div id=\"page\">
\t\t
<!-- Navigation -->
<!-- /.nav-wrp --><!-- Slider -->
<!-- /.slider-section --><!-- Download section -->
<!-- /.download-section --><!-- Content -->
<!-- /.content-section --><!-- Content -->
<!-- /.content-section --><!-- Call to action-section -->
<!-- /.calltoaction-section --><!-- Content -->
<!-- /.content-section --><!-- Call to action-section -->
<!-- /.calltoaction-section --><!-- Footer section -->
<!-- ./Footer section --><!-- Navigation -->
<!-- /.nav-wrp --><!-- Slider -->
<!-- /.slider-section --><!-- Download section -->
<!-- /.download-section --><!-- Content -->
<!-- /.content-section --><!-- Content -->
<!-- /.content-section --><!-- Content -->
<!-- /.content-section --><!-- Content -->
<!-- /.content-section --><!-- Call to action-section -->
<!-- /.calltoaction-section --><!-- Footer section -->
<!-- ./Footer section --><!-- Navigation -->
    ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "    
    ";
        // line 58
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 59
        echo "    
    ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "    
</div>
<!-- /#page --> 

<!-- JavaScript --> 
<script src=\"";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/minify/rgen_min.js");
        echo "\"></script>
<script async=\"\" src=\"";
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/rgen.js");
        echo "\"></script>


</body></html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/final/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 67,  123 => 66,  116 => 61,  112 => 60,  109 => 59,  107 => 58,  104 => 57,  100 => 56,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  47 => 18,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html><head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Your Landing Page Title</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">

\t<!--pageMeta-->

\t<!-- Lib CSS -->
\t<link href=\"//fonts.googleapis.com/css?family=Rancho|Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,700italic,800\" rel=\"stylesheet\">
\t<link href=\"{{'assets/minify/rgen_min.css' | theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/configstyle.css?rgEbp' | theme}}\" id=\"config_style\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/custom.css' | theme}}\" rel=\"stylesheet\">
\t
\t<!-- my css -->
\t<link href=\"{{'assets/css/dopolnenie.css' | theme}}\" rel=\"stylesheet\">

\t<!-- Favicons -->
\t<link rel=\"icon\" href=\"{{'assets/images/favicons/favicon.ico' | theme}}\">
\t<link rel=\"apple-touch-icon\" href=\"{{'assets/images/favicons/apple-touch-icon.png' | theme}}\">
\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{'assets/images/favicons/apple-touch-icon-72x72.png' | theme}}\">
\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{'assets/images/favicons/apple-touch-icon-114x114.png' | theme}}\">

\t<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
\t<!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
\t<!--[if IE 9 ]><script src=\"js/ie-matchmedia.js\"></script><![endif]-->

</head>
<body>
<div id=\"page\">
\t\t
<!-- Navigation -->
<!-- /.nav-wrp --><!-- Slider -->
<!-- /.slider-section --><!-- Download section -->
<!-- /.download-section --><!-- Content -->
<!-- /.content-section --><!-- Content -->
<!-- /.content-section --><!-- Call to action-section -->
<!-- /.calltoaction-section --><!-- Content -->
<!-- /.content-section --><!-- Call to action-section -->
<!-- /.calltoaction-section --><!-- Footer section -->
<!-- ./Footer section --><!-- Navigation -->
<!-- /.nav-wrp --><!-- Slider -->
<!-- /.slider-section --><!-- Download section -->
<!-- /.download-section --><!-- Content -->
<!-- /.content-section --><!-- Content -->
<!-- /.content-section --><!-- Content -->
<!-- /.content-section --><!-- Content -->
<!-- /.content-section --><!-- Call to action-section -->
<!-- /.calltoaction-section --><!-- Footer section -->
<!-- ./Footer section --><!-- Navigation -->
    {% partial \"header\" %}
    
    {% page %}
    
    {% partial \"footer\" %}
    
</div>
<!-- /#page --> 

<!-- JavaScript --> 
<script src=\"{{'assets/minify/rgen_min.js' | theme}}\"></script>
<script async=\"\" src=\"{{'assets/js/rgen.js' | theme}}\"></script>


</body></html>", "/home/ubuntu/workspace/themes/final/layouts/default.htm", "");
    }
}
