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

/* @contact/contact.twig */
class __TwigTemplate_a48fc8e2caf98d5fbb41a39bb6a5724e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout.twig", "@contact/contact.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  <h1>Nous contacter</h1>

  ";
        // line 7
        if ($this->extensions['Framework\Twig\FlashExtension']->getFlash("success")) {
            // line 8
            echo "    <div class=\"alert alert-success\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Framework\Twig\FlashExtension']->getFlash("success"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        if ($this->extensions['Framework\Twig\FlashExtension']->getFlash("error")) {
            // line 14
            echo "    <div class=\"alert alert-danger\">
      ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Framework\Twig\FlashExtension']->getFlash("error"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 18
        echo "
  <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Framework\Router\RouterTwigExtension']->pathFor("contact"), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 20
        echo $this->extensions['Framework\Twig\CsrfExtension']->csrfInput();
        echo "
    ";
        // line 21
        echo $this->extensions['Framework\Twig\FormExtension']->field($context, "name", null, "Votre nom");
        echo "
    ";
        // line 22
        echo $this->extensions['Framework\Twig\FormExtension']->field($context, "email", null, "Votre email");
        echo "
    ";
        // line 23
        echo $this->extensions['Framework\Twig\FormExtension']->field($context, "content", null, "Votre message", ["type" => "textarea"]);
        echo "
    <button class=\"btn btn-primary\">Envoyer</button>
  </form>

";
    }

    public function getTemplateName()
    {
        return "@contact/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  80 => 18,  74 => 15,  71 => 14,  69 => 13,  66 => 12,  60 => 9,  57 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@contact/contact.twig", "C:\\xampp\\htdocs\\miseajour\\src\\Contact\\contact.twig");
    }
}
