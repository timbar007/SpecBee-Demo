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

/* themes/custom/custom_sb/templates/views/views-view-unformatted--event--block_2.html.twig */
class __TwigTemplate_2884727b0cef2a7451c42aa592ba47a4e50795217e13bda2a11b4bd800e68153 extends \Twig\Template
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
        // line 18
        if (($context["title"] ?? null)) {
            // line 19
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 19, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 21
        echo "
<div id=\"s_profile\" class=\"carousel slide w-100\" data-bs-ride=\"carousel\">
                        
    <div class=\"carousel-inner w-100 slider-nav card-body\" role=\"listbox\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            echo "        <div class=\"carousel-item\">
          <div class=\"card col-lg-4 col-md-6 col-sm-12 col-\">
            ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
                        
    <a class=\"carousel-control-prev bg-transparent w-aut\" href=\"#s_profile\" role=\"button\" data-bs-slide=\"prev\">
      <i class=\"fa fa-chevron-left\" aria-label=\"Previous\"></i>
    </a>
    <a class=\"carousel-control-next bg-transparent w-aut\" href=\"#s_profile\" role=\"button\" data-bs-slide=\"next\">
      <i class=\"fa fa-chevron-right\" aria-hidden=\"true\" aria-label=\"Next\"></i>
    </a>
    
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_sb/templates/views/views-view-unformatted--event--block_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 32,  61 => 28,  57 => 26,  53 => 25,  47 => 21,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custom_sb/templates/views/views-view-unformatted--event--block_2.html.twig", "C:\\xampp\\htdocs\\Specbee\\specbee-test\\web\\themes\\custom\\custom_sb\\templates\\views\\views-view-unformatted--event--block_2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "for" => 25);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
