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

/* main/_planet_list.html.twig */
class __TwigTemplate_b17f4bcb68a8cdb8fb2feb5d163eebc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/_planet_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/_planet_list.html.twig"));

        // line 1
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planets"]) || array_key_exists("planets", $context) ? $context["planets"] : (function () { throw new RuntimeError('Variable "planets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["planet"]) {
            // line 3
            echo "        <li class=\"mb-4 group\">
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planet_show", ["id" => twig_get_attribute($this->env, $this->source,             // line 5
$context["planet"], "id", [], "any", false, false, false, 5)]), "html", null, true);
            // line 6
            echo "\" class=\"block transform transition duration-300 ease-in-out hover:translate-x-1 hover:bg-gray-700 rounded\">
                <div class=\"flex justify-between items-start p-2\">
                    <div class=\"pr-3\">
                        <span class=\"text-white\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
                        <span class=\"block text-gray-400 text-sm\">";
            // line 10
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["planet"], "lightYearsFromEarth", [], "any", false, false, false, 10))), "html", null, true);
            echo " light years</span>
                    </div>
                    <img
                        class=\"flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full group-hover:bg-gray-500 transition duration-300 ease-in-out\"
                        src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["planet"], "imageFilename", [], "any", false, false, false, 14))), "html", null, true);
            echo "\"
                        alt=\"Image of ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
                    >
                </div>
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "main/_planet_list.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  88 => 21,  76 => 15,  72 => 14,  65 => 10,  61 => 9,  56 => 6,  54 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    {% for planet in planets %}
        <li class=\"mb-4 group\">
            <a href=\"{{ path('app_planet_show', {
                'id': planet.id,
            }) }}\" class=\"block transform transition duration-300 ease-in-out hover:translate-x-1 hover:bg-gray-700 rounded\">
                <div class=\"flex justify-between items-start p-2\">
                    <div class=\"pr-3\">
                        <span class=\"text-white\">{{ planet.name }}</span>
                        <span class=\"block text-gray-400 text-sm\">{{ planet.lightYearsFromEarth|round|number_format }} light years</span>
                    </div>
                    <img
                        class=\"flex-shrink-0 w-8 h-8 bg-gray-600 rounded-full group-hover:bg-gray-500 transition duration-300 ease-in-out\"
                        src=\"{{ asset('images/'~planet.imageFilename) }}\"
                        alt=\"Image of {{ planet.name }}\"
                    >
                </div>
            </a>
        </li>
    {% endfor %}
</ul>
", "main/_planet_list.html.twig", "/Users/heindiez/FROQ/Project/code-last-stack/start/templates/main/_planet_list.html.twig");
    }
}
