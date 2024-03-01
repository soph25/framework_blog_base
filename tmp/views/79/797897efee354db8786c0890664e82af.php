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

/* layout.twig */
class __TwigTemplate_d6fc160ba7d6dba65f2e7a5bee71f0d1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\"
        integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css\">
  <style>
    body {
      padding-top: 5rem;
    }
  </style>
</head>
<body>

<nav class=\"navbar fixed-top navbar-expand-sm navbar-dark bg-dark\">
  <a class=\"navbar-brand\" href=\"/\">Mon super site</a>
  <ul class=\"navbar-nav mr-auto\">
    <li class=\"nav-item ";
        // line 20
        echo (($this->extensions['Framework\Router\RouterTwigExtension']->isSubPath("shop")) ? ("active") : (""));
        echo "\">
      <a class=\"nav-link\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("shop"), "html", null, true);
        echo "\">Boutique</a>
    </li>
    <li class=\"nav-item ";
        // line 23
        echo (($this->extensions['Framework\Router\RouterTwigExtension']->isSubPath("blog.index")) ? ("active") : (""));
        echo "\">
      <a class=\"nav-link\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("blog.index"), "html", null, true);
        echo "\">Blog</a>
    </li>
    <li class=\"nav-item ";
        // line 26
        echo (($this->extensions['Framework\Router\RouterTwigExtension']->isSubPath("contact")) ? ("active") : (""));
        echo "\">
      <a class=\"nav-link\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("contact"), "html", null, true);
        echo "\">Contact</a>
    </li>
  </ul>
  <div class=\"navbar-nav\">
    ";
        // line 31
        if ($this->extensions['App\Framework\Twig\ModuleExtension']->moduleEnabled("basket")) {
            // line 32
            echo "      <div class=\"nav-item\">
        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("basket"), "html", null, true);
            echo "\" class=\"nav-link\"><span class=\"oi oi-basket\"></span> Mon panier
          (";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getFunction('basket_count')->getCallable()(), "html", null, true);
            echo ")</a>
      </div>
    ";
        }
        // line 37
        echo "    ";
        if ($this->env->getFunction('current_user')->getCallable()()) {
            // line 38
            echo "
      ";
            // line 39
            if ($this->extensions['App\Framework\Twig\ModuleExtension']->moduleEnabled("basket")) {
                // line 40
                echo "        <div class=\"nav-item\">
          <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("basket.orders"), "html", null, true);
                echo "\" class=\"nav-link\">Mes commandes</a>
        </div>
      ";
            } else {
                // line 44
                echo "        <div class=\"nav-item\">
          <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("shop.purchases"), "html", null, true);
                echo "\" class=\"nav-link\">Mes achats</a>
        </div>
      ";
            }
            // line 48
            echo "      <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("auth.logout"), "html", null, true);
            echo "\">
        ";
            // line 49
            echo $this->extensions['Framework\Twig\CsrfExtension']->csrfInput();
            echo "
        <button class=\"btn btn-danger\">Se déconnecter</button>
      </form>
    ";
        } else {
            // line 53
            echo "      <div class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("auth.login"), "html", null, true);
            echo "\">Se connecter</a>
      </div>
      <div class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("account.signup"), "html", null, true);
            echo "\">S'inscrire</a>
      </div>
    ";
        }
        // line 60
        echo "  </div>
</nav>

<div class=\"container\">

  ";
        // line 65
        if ($this->extensions['Framework\Twig\FlashExtension']->getFlash("success")) {
            // line 66
            echo "    <div class=\"alert alert-success\">
      ";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Framework\Twig\FlashExtension']->getFlash("success"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 70
        echo "
  ";
        // line 71
        if ($this->extensions['Framework\Twig\FlashExtension']->getFlash("error")) {
            // line 72
            echo "    <div class=\"alert alert-danger\">
      ";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Framework\Twig\FlashExtension']->getFlash("error"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "
</div><!-- /.container -->

<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
        integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"
        integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.locales.min.js\"></script>
<script>
  timeago().render(document.querySelectorAll('.timeago'), 'fr')
</script>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon site ";
    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 77,  219 => 4,  197 => 78,  195 => 77,  192 => 76,  186 => 73,  183 => 72,  181 => 71,  178 => 70,  172 => 67,  169 => 66,  167 => 65,  160 => 60,  154 => 57,  148 => 54,  145 => 53,  138 => 49,  133 => 48,  127 => 45,  124 => 44,  118 => 41,  115 => 40,  113 => 39,  110 => 38,  107 => 37,  101 => 34,  97 => 33,  94 => 32,  92 => 31,  85 => 27,  81 => 26,  76 => 24,  72 => 23,  67 => 21,  63 => 20,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.twig", "C:\\xampp\\htdocs\\miseajour\\views\\layout.twig");
    }
}
