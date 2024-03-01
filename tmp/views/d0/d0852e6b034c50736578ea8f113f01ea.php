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

/* @blog/show.twig */
class __TwigTemplate_3f5e9f23da3d924d3428cd70db2dd2c9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "@blog/show.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

<p class=\"text-muted\">
  ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categoryId", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.category", ["slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categorySlug", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categoryName", [], "any", false, false, false, 11), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categoryName", [], "any", false, false, false, 11), "html", null, true);
            echo "</a>
  ";
        }
        // line 13
        echo "  ";
        echo $this->extensions['Framework\Twig\TimeExtension']->ago(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "createdAt", [], "any", false, false, false, 13));
        echo "
</p>

  <p>
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", [], "any", false, false, false, 17)) {
            // line 18
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "imageUrl", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\" style=\"width:100%;\">
    ";
        }
        // line 20
        echo "  </p>

  <p>
    ";
        // line 23
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 23), "html", null, true));
        echo "
  </p>

";
    }

    public function getTemplateName()
    {
        return "@blog/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  97 => 20,  89 => 18,  87 => 17,  79 => 13,  69 => 11,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@blog/show.twig", "C:\\xampp\\htdocs\\miseajour\\src\\Blog\\views\\show.twig");
    }
}
