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

/* planet/show.html.twig */
class __TwigTemplate_710971877b5eaf986f5cda4bbee40abe extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planet/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planet/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planet/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Planet";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"m-4 p-4 bg-gray-800 rounded-lg\">
    <h1 class=\"text-xl font-semibold text-white mb-4\">Planet</h1>

    <turbo-frame id=\"planet-info\">
        <table class=\"min-w-full bg-gray-800 text-white\">
            <tbody class=\"bg-gray-700 divide-y divide-gray-600\">
                <tr>
                    <th class=\"w-1/6 px-2 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Photo</th>
                    <td class=\"px-2 py-4\">
                        <img
                            class=\"flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full group-hover:bg-gray-500 transition duration-300 ease-in-out\"
                            src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["planet"]) || array_key_exists("planet", $context) ? $context["planet"] : (function () { throw new RuntimeError('Variable "planet" does not exist.', 17, $this->source); })()), "imageFilename", [], "any", false, false, false, 17))), "html", null, true);
        echo "\"
                            alt=\"Image of ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planet"]) || array_key_exists("planet", $context) ? $context["planet"] : (function () { throw new RuntimeError('Variable "planet" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
                        >
                    </td>
                </tr>
                <tr>
                    <th class=\"px-2 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Name</th>
                    <td class=\"px-2 py-4\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planet"]) || array_key_exists("planet", $context) ? $context["planet"] : (function () { throw new RuntimeError('Variable "planet" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th class=\"px-2 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Distance</th>
                    <td class=\"px-2 py-4 whitespace-nowrap\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planet"]) || array_key_exists("planet", $context) ? $context["planet"] : (function () { throw new RuntimeError('Variable "planet" does not exist.', 28, $this->source); })()), "lightYearsFromEarth", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"px-2 py-4\" colspan=\"2\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["planet"]) || array_key_exists("planet", $context) ? $context["planet"] : (function () { throw new RuntimeError('Variable "planet" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
        <div class=\"mt-2 turbo-frame:flex justify-between hidden\">
            <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Back</a>
            <a data-turbo-frame=\"_top\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planet_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["planet"]) || array_key_exists("planet", $context) ? $context["planet"] : (function () { throw new RuntimeError('Variable "planet" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\">Edit</a>
        </div>
    </turbo-frame>

    <div class=\"flex space-x-4 mt-4\">
        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planet_index");
        echo "\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700\">
            Back to list
        </a>

        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planet_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["planet"]) || array_key_exists("planet", $context) ? $context["planet"] : (function () { throw new RuntimeError('Variable "planet" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700\">
            Edit
        </a>

        ";
        // line 50
        echo twig_include($this->env, $context, "planet/_delete_form.html.twig");
        echo "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "planet/show.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  161 => 50,  154 => 46,  147 => 42,  139 => 37,  135 => 36,  127 => 31,  121 => 28,  114 => 24,  105 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Planet{% endblock %}

{% block body %}
<div class=\"m-4 p-4 bg-gray-800 rounded-lg\">
    <h1 class=\"text-xl font-semibold text-white mb-4\">Planet</h1>

    <turbo-frame id=\"planet-info\">
        <table class=\"min-w-full bg-gray-800 text-white\">
            <tbody class=\"bg-gray-700 divide-y divide-gray-600\">
                <tr>
                    <th class=\"w-1/6 px-2 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Photo</th>
                    <td class=\"px-2 py-4\">
                        <img
                            class=\"flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full group-hover:bg-gray-500 transition duration-300 ease-in-out\"
                            src=\"{{ asset('images/'~planet.imageFilename) }}\"
                            alt=\"Image of {{ planet.name }}\"
                        >
                    </td>
                </tr>
                <tr>
                    <th class=\"px-2 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Name</th>
                    <td class=\"px-2 py-4\">{{ planet.name }}</td>
                </tr>
                <tr>
                    <th class=\"px-2 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Distance</th>
                    <td class=\"px-2 py-4 whitespace-nowrap\">{{ planet.lightYearsFromEarth }}</td>
                </tr>
                <tr>
                    <td class=\"px-2 py-4\" colspan=\"2\">{{ planet.description }}</td>
                </tr>
            </tbody>
        </table>
        <div class=\"mt-2 turbo-frame:flex justify-between hidden\">
            <a href=\"{{ path('app_homepage') }}\">Back</a>
            <a data-turbo-frame=\"_top\" href=\"{{ path('app_planet_edit', { id: planet.id}) }}\">Edit</a>
        </div>
    </turbo-frame>

    <div class=\"flex space-x-4 mt-4\">
        <a href=\"{{ path('app_planet_index') }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700\">
            Back to list
        </a>

        <a href=\"{{ path('app_planet_edit', {'id': planet.id}) }}\" class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700\">
            Edit
        </a>

        {{ include('planet/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}
", "planet/show.html.twig", "/Users/heindiez/FROQ/Project/code-last-stack/start/templates/planet/show.html.twig");
    }
}
