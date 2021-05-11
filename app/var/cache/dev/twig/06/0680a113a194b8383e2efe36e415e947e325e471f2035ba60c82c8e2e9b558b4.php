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

/* default/_form.html.twig */
class __TwigTemplate_338070849a27239334b8df729c56059d1dd76b30342ff578b70c810f97f9ec34 extends Template
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
        // line 13
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/_form.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 16
        echo "    ";
        if (array_key_exists("page_title_param", $context)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 16, $this->source); })()), (isset($context["page_title_param"]) || array_key_exists("page_title_param", $context) ? $context["page_title_param"] : (function () { throw new RuntimeError('Variable "page_title_param" does not exist.', 16, $this->source); })())), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 16, $this->source); })())), "html", null, true);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    <h1>
        ";
        // line 22
        if (array_key_exists("page_title_param", $context)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 22, $this->source); })()), (isset($context["page_title_param"]) || array_key_exists("page_title_param", $context) ? $context["page_title_param"] : (function () { throw new RuntimeError('Variable "page_title_param" does not exist.', 22, $this->source); })())), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 22, $this->source); })())), "html", null, true);
        }
        // line 23
        echo "    </h1>

    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["method" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "method", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "method", [], "any", false, false, false, 25), "POST")) : ("POST")), "action" => twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 25, $this->source); })()), "action", [], "any", false, false, false, 25)]);
        echo "
    ";
        // line 26
        if ((0 === twig_compare(false, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "valid", [], "any", false, false, false, 26)))) {
            // line 27
            echo "        ";
            $this->loadTemplate("default/_single_flash_message.html.twig", "default/_form.html.twig", 27)->display(twig_array_merge($context, ["type" => "danger", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_form_error")]));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'widget');
        echo "
    <div class=\"form-group row float-sm-right\">
        <input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("submit_label", $context)) ? (_twig_default_filter((isset($context["submit_label"]) || array_key_exists("submit_label", $context) ? $context["submit_label"] : (function () { throw new RuntimeError('Variable "submit_label" does not exist.', 34, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_save"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_save"))), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
    </div>
    ";
        // line 36
        if (((array_key_exists("back_to_list_path", $context)) ? (_twig_default_filter((isset($context["back_to_list_path"]) || array_key_exists("back_to_list_path", $context) ? $context["back_to_list_path"] : (function () { throw new RuntimeError('Variable "back_to_list_path" does not exist.', 36, $this->source); })()), false)) : (false))) {
            // line 37
            echo "        <div class=\"form-group row float-sm-left\">
            <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["back_to_list_path"]) || array_key_exists("back_to_list_path", $context) ? $context["back_to_list_path"] : (function () { throw new RuntimeError('Variable "back_to_list_path" does not exist.', 38, $this->source); })()));
            echo "\" class=\"btn btn-primary \">
                ";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 43
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  140 => 39,  136 => 38,  133 => 37,  131 => 36,  126 => 34,  120 => 32,  117 => 31,  114 => 27,  112 => 26,  108 => 25,  104 => 23,  98 => 22,  94 => 20,  84 => 19,  69 => 16,  59 => 15,  36 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Default template for forms.

parameters:
    - page_title: page title
    - page_title_param: additional parameters for page title generation, e.g. record ID
    - attr:
        - method: method, e.g. POST, PUT, PATCH, DELETE
        - action: form action attribute value
    - form: form view variable
    - submit_label: label for submit button
#}
{% extends 'base.html.twig' %}

{% block title %}
    {% if page_title_param is defined %}{{ page_title|trans(page_title_param) }}{% else %}{{ page_title|trans }}{% endif %}
{% endblock %}

{% block body %}

    <h1>
        {% if page_title_param is defined %}{{ page_title|trans(page_title_param) }}{% else %}{{ page_title|trans }}{% endif %}
    </h1>

    {{ form_start(form, { method: attr.method|default('POST'), action: attr.action }) }}
    {% if false == form.vars.valid %}
        {% include 'default/_single_flash_message.html.twig' with {
            type: 'danger',
            message: 'message_form_error'|trans,
        }%}
    {% endif %}
    {{ form_widget(form) }}
    <div class=\"form-group row float-sm-right\">
        <input type=\"submit\" value=\"{{ submit_label|default('action_save'|trans) }}\" class=\"btn btn-primary\" />
    </div>
    {% if back_to_list_path|default(false) %}
        <div class=\"form-group row float-sm-left\">
            <a href=\"{{ url(back_to_list_path) }}\" class=\"btn btn-primary \">
                {{ 'action_back_to_list'|trans }}
            </a>
        </div>
    {% endif %}
    {{ form_end(form) }}

{% endblock %}", "default/_form.html.twig", "/home/epi/17_letnovska/blog-app/templates/default/_form.html.twig");
    }
}
