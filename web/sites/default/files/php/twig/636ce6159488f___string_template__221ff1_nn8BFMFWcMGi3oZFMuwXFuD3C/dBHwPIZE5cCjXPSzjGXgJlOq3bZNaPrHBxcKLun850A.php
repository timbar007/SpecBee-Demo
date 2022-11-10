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

/* __string_template__221ff128d0c1ce8b41b0ede94712d9a571cc6c45a137fd03a73f2ed9552f28dc */
class __TwigTemplate_a3d8fb72ea82d07c0f8ac98efc652509f8634ceb48449c0288f5087aae69f719 extends \Twig\Template
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
        echo "\t\t\t\t\t\t<img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null), 1, $this->source), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 1, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"card-star\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t<span class=\"card-price\"> <b>₹ ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_price"] ?? null), 3, $this->source), "html", null, true);
        echo "</b></span>
\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t<div class=\"col p-4\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\"><i class=\"fa fa-tags tag\" aria-hidden=\"true\"></i> ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_tags"] ?? null), 7, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\"> <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_e"] ?? null), 8, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\"> <i class=\"fa fa-map-marker red\" aria-hidden=\"true\"></i> ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_location"] ?? null), 9, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-footer card-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link card-download\"><i class=\"fa fa-cloud-download-alt\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link card-share\"><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link card-details\">View Details</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "__string_template__221ff128d0c1ce8b41b0ede94712d9a571cc6c45a137fd03a73f2ed9552f28dc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  61 => 8,  57 => 7,  53 => 6,  47 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__221ff128d0c1ce8b41b0ede94712d9a571cc6c45a137fd03a73f2ed9552f28dc", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
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
