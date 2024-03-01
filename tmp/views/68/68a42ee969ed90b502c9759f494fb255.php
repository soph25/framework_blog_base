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

/* @blog/index.twig */
class __TwigTemplate_6fb5a08bae716c93dacdcabe4809d952 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.twig", "@blog/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        if (($context["category"] ?? null)) {
            // line 5
            echo "    Catégorie : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
            if ((($context["page"] ?? null) > 1)) {
                echo ", page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            }
            // line 6
            echo "  ";
        } else {
            // line 7
            echo "    Blog";
            if ((($context["page"] ?? null) > 1)) {
                echo ", page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            }
            // line 8
            echo "  ";
        }
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
  ";
        // line 13
        if (($context["category"] ?? null)) {
            // line 14
            echo "    <h1>Catégorie : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
            if ((($context["page"] ?? null) > 1)) {
                echo ", page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            }
            echo "</h1>
  ";
        } else {
            // line 16
            echo "    <h1>Bienvenue sur le blog";
            if ((($context["page"] ?? null) > 1)) {
                echo ", page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            }
            echo "</h1>
  ";
        }
        // line 18
        echo "  <div class=\"row\">
    <div class=\"col-md-9\">

      <div class=\"row\">

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["posts"] ?? null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "          <div class=\"card-deck\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 26
                echo "              <div class=\"card\">
                ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["post"], "categoryName", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                  <div class=\"card-header\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "categoryName", [], "any", false, false, false, 28), "html", null, true);
                    echo "</div>
                ";
                }
                // line 30
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 31), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 31), "html", null, true);
                    echo "\" style=\"width:100%;\">
                ";
                }
                // line 33
                echo "                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 35), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">
                      ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 36), "html", null, true);
                echo "
                    </a>
                  </h4>
                  <p class=\"card-text\">
                    ";
                // line 40
                echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Framework\Twig\TextExtension']->excerpt(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 40)), "html", null, true));
                echo "
                  </p>
                  <p class=\"text-muted\">";
                // line 42
                echo $this->extensions['Framework\Twig\TimeExtension']->ago(twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 42));
                echo "</p>
                </div>
                <div class=\"card-footer\">
                  <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 45), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                    Voir l'article
                  </a>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "      </div>

      ";
        // line 55
        if (($context["category"] ?? null)) {
            // line 56
            echo "        ";
            echo $this->extensions['Framework\Twig\PagerFantaExtension']->paginate(($context["posts"] ?? null), "blog.category", ["slug" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 56)]);
            echo "
      ";
        } else {
            // line 58
            echo "        ";
            echo $this->extensions['Framework\Twig\PagerFantaExtension']->paginate(($context["posts"] ?? null), "blog.index");
            echo "
      ";
        }
        // line 60
        echo "    </div>
    <div class=\"col-md-3\">
      <ul class=\"list-group\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 64
            echo "          <li class=\"list-group-item ";
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 64) == twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 64))) {
                echo "active";
            }
            echo "\">
            <a style=\"color:inherit;\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.category", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "      </ul>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "@blog/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 68,  222 => 65,  215 => 64,  211 => 63,  206 => 60,  200 => 58,  194 => 56,  192 => 55,  188 => 53,  181 => 51,  169 => 45,  163 => 42,  158 => 40,  151 => 36,  147 => 35,  143 => 33,  135 => 31,  132 => 30,  126 => 28,  124 => 27,  121 => 26,  117 => 25,  114 => 24,  110 => 23,  103 => 18,  94 => 16,  84 => 14,  82 => 13,  79 => 12,  75 => 11,  70 => 8,  64 => 7,  61 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@blog/index.twig", "C:\\xampp\\htdocs\\miseajour\\src\\Blog\\views\\index.twig");
    }
}
