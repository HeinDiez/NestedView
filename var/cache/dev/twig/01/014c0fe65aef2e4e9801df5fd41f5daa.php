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

/* main/homepage.html.twig */
class __TwigTemplate_3acd6e2cf6165b308d2126c8c1530d6b extends Template
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
            'result_count' => [$this, 'block_result_count'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
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

        echo "Space Inviters!";
        
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
        echo "    <div class=\"flex\">
        <aside class=\"hidden md:block md:w-64 bg-gray-900 px-2 py-6\">
            <h2 class=\"text-xl text-white font-semibold mb-6 px-2\">Planets</h2>
            <turbo-frame id=\"planet-info\">
                ";
        // line 10
        echo twig_include($this->env, $context, "main/_planet_list.html.twig");
        echo "
            </turbo-frame>
        </aside>

        <section class=\"flex-1 ml-10\">
            <form
                method=\"GET\"
                action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\"
                class=\"mb-6 flex justify-between\"
                data-controller=\"autosubmit\"
                data-turbo-frame=\"planet-table\"
            >
                <input
                    type=\"search\"
                    name=\"query\"
                    value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["query"], "method", false, false, false, 25), "html", null, true);
        echo "\"
                    aria-label=\"Search voyages\"
                    placeholder=\"Search voyages\"
                    data-action=\"autosubmit#debouncedSubmit\"
                    class=\"w-1/3 px-4 py-2 rounded bg-gray-800 text-white placeholder-gray-400\"
                    autofocus
                >
                ";
        // line 32
        $this->displayBlock('result_count', $context, $blocks);
        // line 35
        echo "            </form>
            <turbo-frame id=\"planet-table\" data-turbo-action=\"advance\" class=\"aria-busy:opacity-50 aria-busy:blur-sm transition-all\">
                <div class=\"bg-gray-800 p-4 rounded\">
                    <table class=\"w-full text-white\">
                        <thead>
                            <tr>
                                <th class=\"text-left py-2\">
                                    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage", [...twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "query", [], "any", false, false, false, 43), "all", [], "method", false, false, false, 43), "sort" => "purpose", "sortDirection" => ((((        // line 45
(isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 45, $this->source); })()) == "purpose") && ((isset($context["sortDirection"]) || array_key_exists("sortDirection", $context) ? $context["sortDirection"] : (function () { throw new RuntimeError('Variable "sortDirection" does not exist.', 45, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        // line 46
        echo "\">
                                        Name
                                    </a>
                                </th>
                                <th class=\"text-left py-2 pr-4\">Planet</th>
                                <th class=\"text-left py-2\">Departing</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 55, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 56
            echo "                            <tr class=\"border-b border-gray-700 ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56) % 2 != 0)) {
                echo " bg-gray-800 ";
            } else {
                echo " bg-gray-700 ";
            }
            echo "\">
                                <td class=\"p-4\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "purpose", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                <td class=\"px-2 whitespace-nowrap\">
                                    <img
                                        src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voyage"], "planet", [], "any", false, false, false, 60), "imageFilename", [], "any", false, false, false, 60))), "html", null, true);
            echo "\"
                                        alt=\"Image of ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voyage"], "planet", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
            echo "\"
                                        class=\"inline-block w-8 h-8 rounded-full bg-gray-600 ml-2\"
                                    >
                                </td>
                                <td class=\"px-2 whitespace-nowrap\">";
            // line 65
            echo $this->env->getRuntime('Knp\Bundle\TimeBundle\DateTimeFormatter')->formatDiff(twig_get_attribute($this->env, $this->source, $context["voyage"], "leaveAt", [], "any", false, false, false, 65));
            echo "</td>
                            </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"flex items-center mt-6 space-x-4\">
                    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 72, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 72)) {
            // line 73
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Pagerfanta\Twig\Extension\PagerfantaRuntime')->getPageUrl((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 73, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 73, $this->source); })()), "previousPage", [], "any", false, false, false, 73)), "html", null, true);
            echo "\" class=\"block py-2 px-4 bg-gray-700 text-white rounded hover:bg-gray-600\">Previous</a>
                    ";
        }
        // line 75
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 75, $this->source); })()), "hasNextPage", [], "any", false, false, false, 75)) {
            // line 76
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Pagerfanta\Twig\Extension\PagerfantaRuntime')->getPageUrl((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 76, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 76, $this->source); })()), "nextPage", [], "any", false, false, false, 76)), "html", null, true);
            echo "\" class=\"block py-2 px-4 bg-gray-700 text-white rounded hover:bg-gray-600\">Next</a>
                    ";
        }
        // line 78
        echo "                    <div class=\"ml-4\">
                        Page ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 79, $this->source); })()), "currentPage", [], "any", false, false, false, 79), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 79, $this->source); })()), "nbPages", [], "any", false, false, false, 79), "html", null, true);
        echo "
                    </div>
                </div>
                <turbo-stream action=\"replace\" target=\"voyage-result-count\">
                    <template>
                        ";
        // line 84
        $this->displayBlock("result_count", $context, $blocks);
        echo "
                    </template>
                </turbo-stream>
            </turbo-frame>
        </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_result_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "result_count"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "result_count"));

        // line 33
        echo "                    <div id=\"voyage-result-count\" class=\"whitespace-nowrap m-2 mr-4\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 33, $this->source); })())), "html", null, true);
        echo " results</div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  275 => 33,  265 => 32,  248 => 84,  238 => 79,  235 => 78,  229 => 76,  226 => 75,  220 => 73,  218 => 72,  212 => 68,  195 => 65,  188 => 61,  184 => 60,  178 => 57,  169 => 56,  152 => 55,  141 => 46,  139 => 45,  138 => 43,  137 => 42,  128 => 35,  126 => 32,  116 => 25,  105 => 17,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Space Inviters!{% endblock %}

{% block body %}
    <div class=\"flex\">
        <aside class=\"hidden md:block md:w-64 bg-gray-900 px-2 py-6\">
            <h2 class=\"text-xl text-white font-semibold mb-6 px-2\">Planets</h2>
            <turbo-frame id=\"planet-info\">
                {{ include('main/_planet_list.html.twig') }}
            </turbo-frame>
        </aside>

        <section class=\"flex-1 ml-10\">
            <form
                method=\"GET\"
                action=\"{{ path('app_homepage') }}\"
                class=\"mb-6 flex justify-between\"
                data-controller=\"autosubmit\"
                data-turbo-frame=\"planet-table\"
            >
                <input
                    type=\"search\"
                    name=\"query\"
                    value=\"{{ app.request.query.get('query') }}\"
                    aria-label=\"Search voyages\"
                    placeholder=\"Search voyages\"
                    data-action=\"autosubmit#debouncedSubmit\"
                    class=\"w-1/3 px-4 py-2 rounded bg-gray-800 text-white placeholder-gray-400\"
                    autofocus
                >
                {% block result_count %}
                    <div id=\"voyage-result-count\" class=\"whitespace-nowrap m-2 mr-4\">{{ voyages|length }} results</div>
                {% endblock %}
            </form>
            <turbo-frame id=\"planet-table\" data-turbo-action=\"advance\" class=\"aria-busy:opacity-50 aria-busy:blur-sm transition-all\">
                <div class=\"bg-gray-800 p-4 rounded\">
                    <table class=\"w-full text-white\">
                        <thead>
                            <tr>
                                <th class=\"text-left py-2\">
                                    <a href=\"{{ path('app_homepage', {
                                        ...app.request.query.all(),
                                        sort: 'purpose',
                                        sortDirection: sort == 'purpose' and sortDirection == 'asc' ? 'desc' : 'asc',
                                    }) }}\">
                                        Name
                                    </a>
                                </th>
                                <th class=\"text-left py-2 pr-4\">Planet</th>
                                <th class=\"text-left py-2\">Departing</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for voyage in voyages %}
                            <tr class=\"border-b border-gray-700 {% if loop.index is odd %} bg-gray-800 {% else %} bg-gray-700 {% endif %}\">
                                <td class=\"p-4\">{{ voyage.purpose }}</td>
                                <td class=\"px-2 whitespace-nowrap\">
                                    <img
                                        src=\"{{ asset('images/'~voyage.planet.imageFilename) }}\"
                                        alt=\"Image of {{ voyage.planet.name }}\"
                                        class=\"inline-block w-8 h-8 rounded-full bg-gray-600 ml-2\"
                                    >
                                </td>
                                <td class=\"px-2 whitespace-nowrap\">{{ voyage.leaveAt|ago }}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"flex items-center mt-6 space-x-4\">
                    {% if voyages.hasPreviousPage %}
                        <a href=\"{{ pagerfanta_page_url(voyages, voyages.previousPage) }}\" class=\"block py-2 px-4 bg-gray-700 text-white rounded hover:bg-gray-600\">Previous</a>
                    {% endif %}
                    {% if voyages.hasNextPage %}
                        <a href=\"{{ pagerfanta_page_url(voyages, voyages.nextPage) }}\" class=\"block py-2 px-4 bg-gray-700 text-white rounded hover:bg-gray-600\">Next</a>
                    {% endif %}
                    <div class=\"ml-4\">
                        Page {{ voyages.currentPage }}/{{ voyages.nbPages }}
                    </div>
                </div>
                <turbo-stream action=\"replace\" target=\"voyage-result-count\">
                    <template>
                        {{ block('result_count') }}
                    </template>
                </turbo-stream>
            </turbo-frame>
        </section>
    </div>
{% endblock %}
", "main/homepage.html.twig", "/Users/heindiez/FROQ/Project/code-last-stack/start/templates/main/homepage.html.twig");
    }
}
