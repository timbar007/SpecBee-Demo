<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/custom_sb/templates/layout/page--front.html.twig */
class __TwigTemplate_813d3a99b7f801dd69525acdeb129ec396e30919757beb59b18031112726a065 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container mt-5\">
        
    <div class=\"text-center\">
        <h2>Lorem ipsum dolor. Ismet</h2>
        <p class=\"head\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
    </div>
    
   <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t<button class=\"nav-link active\" id=\"home-tab\" type=\"button\" >Featured Conferences <i class=\"fa fa-angle-down custom\" aria-hidden=\"true\"></i></button>
\t\t\t</li>
\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t<button class=\"nav-link\" id=\"profile-tab\" type=\"button\" >Recommended Conferences <i class=\"fa fa-angle-down custom\" aria-hidden=\"true\"></i></button>
\t\t\t</li>
\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t<button class=\"nav-link\" id=\"contact-tab\" type=\"button\">Past Conferences <i class=\"fa fa-angle-down custom\" aria-hidden=\"true\"></i></button>
\t\t\t</li>
\t\t</ul>
\t\t
\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t<div class=\"fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured"] ?? null), 23, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["recommended"] ?? null), 30, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["past"] ?? null), 37, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t</div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_sb/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  73 => 30,  63 => 23,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custom_sb/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\Specbee\\specbee-test\\web\\themes\\custom\\custom_sb\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
