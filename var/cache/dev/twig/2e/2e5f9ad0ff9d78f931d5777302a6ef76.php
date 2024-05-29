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

/* planet/index.html.twig */
class __TwigTemplate_a07c231e245f4b09e86d26a11797e24a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planet/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planet/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "planet/index.html.twig", 1);
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

        echo "Manage Planets";
        
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
    <h1 class=\"text-xl font-semibold text-white mb-4\">Planets</h1>

    <table class=\"min-w-full bg-gray-800 text-white\">
        <thead class=\"border-b border-gray-700\">
            <tr>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Id</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Name</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Description</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">LightYearsFromEarth</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Actions</th>
            </tr>
        </thead>
        <tbody class=\"divide-y divide-gray-600\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planets"]) || array_key_exists("planets", $context) ? $context["planets"] : (function () { throw new RuntimeError('Variable "planets" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planet"]) {
            // line 21
            echo "            <tr class=\"even:bg-gray-700 odd:bg-gray-600\">
                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td class=\"px-6 py-4\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "lightYearsFromEarth", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td class=\"px-6 py-4 whitespace-nowrap\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planet_show", ["id" => twig_get_attribute($this->env, $this->source, $context["planet"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"text-blue-400 hover:text-blue-600\">show</a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["planet"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"ml-4 text-yellow-400 hover:text-yellow-600\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "            <tr>
                <td colspan=\"5\" class=\"px-6 py-4 whitespace-nowrap text-center text-gray-400\">No records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planet_new");
        echo "\" class=\"mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700\">
        Create new
    </a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "planet/index.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  156 => 39,  151 => 36,  142 => 32,  133 => 28,  129 => 27,  124 => 25,  120 => 24,  116 => 23,  112 => 22,  109 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Manage Planets{% endblock %}

{% block body %}
<div class=\"m-4 p-4 bg-gray-800 rounded-lg\">
    <h1 class=\"text-xl font-semibold text-white mb-4\">Planets</h1>

    <table class=\"min-w-full bg-gray-800 text-white\">
        <thead class=\"border-b border-gray-700\">
            <tr>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Id</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Name</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Description</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">LightYearsFromEarth</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Actions</th>
            </tr>
        </thead>
        <tbody class=\"divide-y divide-gray-600\">
        {% for planet in planets %}
            <tr class=\"even:bg-gray-700 odd:bg-gray-600\">
                <td class=\"px-6 py-4 whitespace-nowrap\">{{ planet.id }}</td>
                <td class=\"px-6 py-4 whitespace-nowrap\">{{ planet.name }}</td>
                <td class=\"px-6 py-4\">{{ planet.description }}</td>
                <td class=\"px-6 py-4 whitespace-nowrap\">{{ planet.lightYearsFromEarth }}</td>
                <td class=\"px-6 py-4 whitespace-nowrap\">
                    <a href=\"{{ path('app_planet_show', {'id': planet.id}) }}\" class=\"text-blue-400 hover:text-blue-600\">show</a>
                    <a href=\"{{ path('app_planet_edit', {'id': planet.id}) }}\" class=\"ml-4 text-yellow-400 hover:text-yellow-600\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\" class=\"px-6 py-4 whitespace-nowrap text-center text-gray-400\">No records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_planet_new') }}\" class=\"mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700\">
        Create new
    </a>
</div>
{% endblock %}
", "planet/index.html.twig", "/Users/heindiez/FROQ/Project/code-last-stack/start/templates/planet/index.html.twig");
    }
}
