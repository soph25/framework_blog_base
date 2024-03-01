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

/* @shop/index.twig */
class __TwigTemplate_bf4ac971ff459aff34ad426d0f7856a0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "@shop/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  Boutique";
        if ((($context["page"] ?? null) > 1)) {
            echo ", page ";
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        }
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
  <h1>Boutique";
        // line 9
        if ((($context["page"] ?? null) > 1)) {
            echo ", page ";
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        }
        echo "</h1>

  <div class=\"row\">

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["products"] ?? null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            echo "      <div class=\"card-deck\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                echo "          <div class=\"card\">
            ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "              <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18), "html", null, true);
                    echo "\" style=\"width:100%;\">
            ";
                }
                // line 20
                echo "            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("shop.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">
                  ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "
                </a>
              </h4>
              <p class=\"card-text\">
                ";
                // line 27
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Framework\Twig\TextExtension']->excerpt(twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 27)), "html", null, true));
                echo "
              </p>
            </div>
            <div class=\"card-footer\">
              <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("shop.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                Voir le produit
              </a>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  </div>

  ";
        // line 41
        echo $this->extensions['Framework\Twig\PagerFantaExtension']->paginate(($context["products"] ?? null), "shop");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@shop/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 41,  141 => 39,  134 => 37,  122 => 31,  115 => 27,  108 => 23,  104 => 22,  100 => 20,  92 => 18,  90 => 17,  87 => 16,  83 => 15,  80 => 14,  76 => 13,  66 => 9,  63 => 8,  59 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@shop/index.twig", "C:\\xampp\\htdocs\\miseajour\\src\\Shop\\views\\index.twig");
    }
}
