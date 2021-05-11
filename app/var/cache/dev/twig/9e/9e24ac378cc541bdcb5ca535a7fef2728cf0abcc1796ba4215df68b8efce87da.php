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

/* post/delete.html.twig */
class __TwigTemplate_6452db1da0417627913532bf4583448ae9c131a39780af86d3f98da7eac65899 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/delete.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("default/_form2.html.twig", "post/delete.html.twig", 2)->display(twig_array_merge($context, ["page_title" => "title.post_delete", "page_title_param" => ["%id%" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)], "attr" => ["method" => "DELETE", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("post_delete", ["id" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)])], "back_to_list_path" => "post_index"]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "post/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  47 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'default/_form2.html.twig' with {
    page_title: 'title.post_delete',
    page_title_param: {'%id%': post.id},
    attr: {
        method: 'DELETE',
        action: url('post_delete', {'id': post.id}),
    },
    back_to_list_path: 'post_index',
} %}", "post/delete.html.twig", "/home/epi/17_letnovska/blog-app/templates/post/delete.html.twig");
    }
}
