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

/* voyage/index.html.twig */
class __TwigTemplate_26d5546f3929ebbb2cd06ed11cea70a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voyage/index.html.twig", 1);
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

        echo "Manage Voyages";
        
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
    <h1 class=\"text-xl font-semibold text-white mb-4\">Voyages</h1>

    <table class=\"min-w-full bg-gray-800 text-white\">
        <thead class=\"border-b border-gray-700\">
            <tr>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Id</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Purpose</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">LeaveAt</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Actions</th>
            </tr>
        </thead>
        <tbody class=\"divide-y divide-gray-600\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 20
            echo "                <tr class=\"even:bg-gray-700 odd:bg-gray-600\">
                    <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td class=\"px-6 py-4\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "purpose", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 23
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "leaveAt", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "leaveAt", [], "any", false, false, false, 23), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td class=\"px-6 py-4 whitespace-nowrap\">
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"text-blue-400 hover:text-blue-600\">show</a>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"ml-4 text-yellow-400 hover:text-yellow-600\">edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "                <tr>
                    <td colspan=\"4\" class=\"px-6 py-4 whitespace-nowrap text-center text-gray-400\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_new");
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
        return "voyage/index.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  151 => 37,  146 => 34,  137 => 30,  128 => 26,  124 => 25,  119 => 23,  115 => 22,  111 => 21,  108 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Manage Voyages{% endblock %}

{% block body %}
<div class=\"m-4 p-4 bg-gray-800 rounded-lg\">
    <h1 class=\"text-xl font-semibold text-white mb-4\">Voyages</h1>

    <table class=\"min-w-full bg-gray-800 text-white\">
        <thead class=\"border-b border-gray-700\">
            <tr>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Id</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Purpose</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">LeaveAt</th>
                <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider\">Actions</th>
            </tr>
        </thead>
        <tbody class=\"divide-y divide-gray-600\">
            {% for voyage in voyages %}
                <tr class=\"even:bg-gray-700 odd:bg-gray-600\">
                    <td class=\"px-6 py-4 whitespace-nowrap\">{{ voyage.id }}</td>
                    <td class=\"px-6 py-4\">{{ voyage.purpose }}</td>
                    <td class=\"px-6 py-4 whitespace-nowrap\">{{ voyage.leaveAt ? voyage.leaveAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td class=\"px-6 py-4 whitespace-nowrap\">
                        <a href=\"{{ path('app_voyage_show', {'id': voyage.id}) }}\" class=\"text-blue-400 hover:text-blue-600\">show</a>
                        <a href=\"{{ path('app_voyage_edit', {'id': voyage.id}) }}\" class=\"ml-4 text-yellow-400 hover:text-yellow-600\">edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" class=\"px-6 py-4 whitespace-nowrap text-center text-gray-400\">No records found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_voyage_new') }}\" class=\"mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700\">
        Create new
    </a>
</div>
{% endblock %}
", "voyage/index.html.twig", "/Users/heindiez/FROQ/Project/code-last-stack/start/templates/voyage/index.html.twig");
    }
}
