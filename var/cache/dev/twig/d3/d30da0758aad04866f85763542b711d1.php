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

/* @Pagerfanta/default.html.twig */
class __TwigTemplate_cbe1f2d812b9b05a913780e03400a498 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pager_widget' => [$this, 'block_pager_widget'],
            'pager' => [$this, 'block_pager'],
            'page_link' => [$this, 'block_page_link'],
            'current_page_link' => [$this, 'block_current_page_link'],
            'previous_page_link' => [$this, 'block_previous_page_link'],
            'previous_page_link_disabled' => [$this, 'block_previous_page_link_disabled'],
            'previous_page_message' => [$this, 'block_previous_page_message'],
            'next_page_link' => [$this, 'block_next_page_link'],
            'next_page_link_disabled' => [$this, 'block_next_page_link_disabled'],
            'next_page_message' => [$this, 'block_next_page_message'],
            'ellipsis' => [$this, 'block_ellipsis'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pagerfanta/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pagerfanta/default.html.twig"));

        // line 1
        $this->displayBlock('pager_widget', $context, $blocks);
        // line 7
        $this->displayBlock('pager', $context, $blocks);
        // line 75
        $this->displayBlock('page_link', $context, $blocks);
        // line 79
        $this->displayBlock('current_page_link', $context, $blocks);
        // line 83
        $this->displayBlock('previous_page_link', $context, $blocks);
        // line 87
        $this->displayBlock('previous_page_link_disabled', $context, $blocks);
        // line 91
        $this->displayBlock('previous_page_message', $context, $blocks);
        // line 99
        $this->displayBlock('next_page_link', $context, $blocks);
        // line 103
        $this->displayBlock('next_page_link_disabled', $context, $blocks);
        // line 107
        $this->displayBlock('next_page_message', $context, $blocks);
        // line 115
        $this->displayBlock('ellipsis', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_pager_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_widget"));

        // line 2
        echo "<nav class=\"pagination\">";
        // line 3
        $this->displayBlock("pager", $context, $blocks);
        // line 4
        echo "</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_pager($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager"));

        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 9, $this->source); })()), "hasPreviousPage", [], "method", false, false, false, 9)) {
            // line 10
            $context["path"] = twig_get_attribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 10, $this->source); })()), "route", [twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 10, $this->source); })()), "getPreviousPage", [], "method", false, false, false, 10)], "method", false, false, false, 10);
            // line 11
            $context["page"] = twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 11, $this->source); })()), "getPreviousPage", [], "method", false, false, false, 11);
            // line 12
            $this->displayBlock("previous_page_link", $context, $blocks);
        } else {
            // line 14
            $this->displayBlock("previous_page_link_disabled", $context, $blocks);
        }
        // line 18
        if (((isset($context["start_page"]) || array_key_exists("start_page", $context) ? $context["start_page"] : (function () { throw new RuntimeError('Variable "start_page" does not exist.', 18, $this->source); })()) > 1)) {
            // line 19
            $context["page"] = 1;
            // line 20
            $context["path"] = twig_get_attribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 20, $this->source); })()), "route", [(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })())], "method", false, false, false, 20);
            // line 21
            $this->displayBlock("page_link", $context, $blocks);
        }
        // line 25
        if (((isset($context["start_page"]) || array_key_exists("start_page", $context) ? $context["start_page"] : (function () { throw new RuntimeError('Variable "start_page" does not exist.', 25, $this->source); })()) == 3)) {
            // line 26
            $context["page"] = 2;
            // line 27
            $context["path"] = twig_get_attribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 27, $this->source); })()), "route", [(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 27, $this->source); })())], "method", false, false, false, 27);
            // line 28
            $this->displayBlock("page_link", $context, $blocks);
        }
        // line 32
        if (((isset($context["start_page"]) || array_key_exists("start_page", $context) ? $context["start_page"] : (function () { throw new RuntimeError('Variable "start_page" does not exist.', 32, $this->source); })()) > 3)) {
            // line 33
            $this->displayBlock("ellipsis", $context, $blocks);
        }
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["start_page"]) || array_key_exists("start_page", $context) ? $context["start_page"] : (function () { throw new RuntimeError('Variable "start_page" does not exist.', 37, $this->source); })()), (isset($context["end_page"]) || array_key_exists("end_page", $context) ? $context["end_page"] : (function () { throw new RuntimeError('Variable "end_page" does not exist.', 37, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            $context["path"] = twig_get_attribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 38, $this->source); })()), "route", [$context["page"]], "method", false, false, false, 38);
            // line 39
            if (($context["page"] == (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 39, $this->source); })()))) {
                // line 40
                $this->displayBlock("current_page_link", $context, $blocks);
            } else {
                // line 42
                $this->displayBlock("page_link", $context, $blocks);
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        if (((isset($context["end_page"]) || array_key_exists("end_page", $context) ? $context["end_page"] : (function () { throw new RuntimeError('Variable "end_page" does not exist.', 47, $this->source); })()) < ((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 47, $this->source); })()) - 2))) {
            // line 48
            $this->displayBlock("ellipsis", $context, $blocks);
        }
        // line 52
        if (((isset($context["end_page"]) || array_key_exists("end_page", $context) ? $context["end_page"] : (function () { throw new RuntimeError('Variable "end_page" does not exist.', 52, $this->source); })()) == ((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 52, $this->source); })()) - 2))) {
            // line 53
            $context["page"] = ((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 53, $this->source); })()) - 1);
            // line 54
            $context["path"] = twig_get_attribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 54, $this->source); })()), "route", [(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })())], "method", false, false, false, 54);
            // line 55
            $this->displayBlock("page_link", $context, $blocks);
        }
        // line 59
        if (((isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 59, $this->source); })()) > (isset($context["end_page"]) || array_key_exists("end_page", $context) ? $context["end_page"] : (function () { throw new RuntimeError('Variable "end_page" does not exist.', 59, $this->source); })()))) {
            // line 60
            $context["page"] = (isset($context["nb_pages"]) || array_key_exists("nb_pages", $context) ? $context["nb_pages"] : (function () { throw new RuntimeError('Variable "nb_pages" does not exist.', 60, $this->source); })());
            // line 61
            $context["path"] = twig_get_attribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 61, $this->source); })()), "route", [(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 61, $this->source); })())], "method", false, false, false, 61);
            // line 62
            $this->displayBlock("page_link", $context, $blocks);
        }
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 66, $this->source); })()), "hasNextPage", [], "method", false, false, false, 66)) {
            // line 67
            $context["path"] = twig_get_attribute($this->env, $this->source, (isset($context["route_generator"]) || array_key_exists("route_generator", $context) ? $context["route_generator"] : (function () { throw new RuntimeError('Variable "route_generator" does not exist.', 67, $this->source); })()), "route", [twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 67, $this->source); })()), "getNextPage", [], "method", false, false, false, 67)], "method", false, false, false, 67);
            // line 68
            $context["page"] = twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 68, $this->source); })()), "getNextPage", [], "method", false, false, false, 68);
            // line 69
            $this->displayBlock("next_page_link", $context, $blocks);
        } else {
            // line 71
            $this->displayBlock("next_page_link_disabled", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_page_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_link"));

        // line 76
        echo "<a class=\"pagination__item\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_current_page_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "current_page_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "current_page_link"));

        // line 80
        echo "<span class=\"pagination__item pagination__item--current-page\" aria-current=\"page\">";
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_previous_page_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_link"));

        // line 84
        echo "<a class=\"pagination__item pagination__item--previous-page\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\" rel=\"prev\">";
        $this->displayBlock("previous_page_message", $context, $blocks);
        echo "</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_previous_page_link_disabled($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_link_disabled"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_link_disabled"));

        // line 88
        echo "<span class=\"pagination__item pagination__item--previous-page pagination__item--disabled\">";
        $this->displayBlock("previous_page_message", $context, $blocks);
        echo "</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_previous_page_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_message"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "previous_page_message"));

        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "prev_message", [], "array", true, true, false, 92)) {
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 93, $this->source); })()), "prev_message", [], "array", false, false, false, 93), "html", null, true);
        } else {
            // line 95
            echo "Previous";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_next_page_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_link"));

        // line 100
        echo "<a class=\"pagination__item pagination__item--next-page\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "\" rel=\"next\">";
        $this->displayBlock("next_page_message", $context, $blocks);
        echo "</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_next_page_link_disabled($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_link_disabled"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_link_disabled"));

        // line 104
        echo "<span class=\"pagination__item pagination__item--next-page pagination__item--disabled\">";
        $this->displayBlock("next_page_message", $context, $blocks);
        echo "</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_next_page_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_message"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "next_page_message"));

        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "next_message", [], "array", true, true, false, 108)) {
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 109, $this->source); })()), "next_message", [], "array", false, false, false, 109), "html", null, true);
        } else {
            // line 111
            echo "Next";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_ellipsis($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ellipsis"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ellipsis"));

        // line 116
        echo "<span class=\"pagination__item pagination__item--separator\">&hellip;</span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@Pagerfanta/default.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  435 => 116,  425 => 115,  414 => 111,  411 => 109,  409 => 108,  399 => 107,  387 => 104,  377 => 103,  363 => 100,  353 => 99,  342 => 95,  339 => 93,  337 => 92,  327 => 91,  315 => 88,  305 => 87,  291 => 84,  281 => 83,  269 => 80,  259 => 79,  245 => 76,  235 => 75,  224 => 71,  221 => 69,  219 => 68,  217 => 67,  215 => 66,  212 => 62,  210 => 61,  208 => 60,  206 => 59,  203 => 55,  201 => 54,  199 => 53,  197 => 52,  194 => 48,  192 => 47,  177 => 42,  174 => 40,  172 => 39,  170 => 38,  153 => 37,  150 => 33,  148 => 32,  145 => 28,  143 => 27,  141 => 26,  139 => 25,  136 => 21,  134 => 20,  132 => 19,  130 => 18,  127 => 14,  124 => 12,  122 => 11,  120 => 10,  118 => 9,  108 => 7,  98 => 4,  96 => 3,  94 => 2,  84 => 1,  74 => 115,  72 => 107,  70 => 103,  68 => 99,  66 => 91,  64 => 87,  62 => 83,  60 => 79,  58 => 75,  56 => 7,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block pager_widget -%}
    <nav class=\"pagination\">
        {{- block('pager') -}}
    </nav>
{%- endblock pager_widget -%}

{%- block pager -%}
    {# Previous Page Link #}
    {%- if pagerfanta.hasPreviousPage() -%}
        {%- set path = route_generator.route(pagerfanta.getPreviousPage()) -%}
        {%- set page = pagerfanta.getPreviousPage() -%}
        {{- block('previous_page_link') -}}
    {%- else -%}
        {{- block('previous_page_link_disabled') -}}
    {%- endif -%}

    {# First Page Link #}
    {%- if start_page > 1 -%}
        {%- set page = 1 -%}
        {%- set path = route_generator.route(page) -%}
        {{- block('page_link') -}}
    {%- endif -%}

    {# Second Page Link, displays if we are on page 3 #}
    {%- if start_page == 3 -%}
        {%- set page = 2 -%}
        {%- set path = route_generator.route(page) -%}
        {{- block('page_link') -}}
    {%- endif -%}

    {# Separator, creates a \"...\" separator to limit the number of items if we are starting beyond page 3 #}
    {%- if start_page > 3 -%}
        {{- block('ellipsis') -}}
    {%- endif -%}

    {# Page Links #}
    {%- for page in range(start_page, end_page) -%}
        {%- set path = route_generator.route(page) -%}
        {%- if page == current_page -%}
            {{- block('current_page_link') -}}
        {%- else -%}
            {{- block('page_link') -}}
        {%- endif -%}
    {%- endfor -%}

    {# Separator, creates a \"...\" separator to limit the number of items if we are over 3 pages away from the last page #}
    {%- if end_page < (nb_pages - 2) -%}
        {{- block('ellipsis') -}}
    {%- endif -%}

    {# Second to Last Page Link, displays if we are on the third from last page #}
    {%- if end_page == (nb_pages - 2) -%}
        {%- set page = (nb_pages - 1) -%}
        {%- set path = route_generator.route(page) -%}
        {{- block('page_link') -}}
    {%- endif -%}

    {# Last Page Link #}
    {%- if nb_pages > end_page -%}
        {%- set page = nb_pages -%}
        {%- set path = route_generator.route(page) -%}
        {{- block('page_link') -}}
    {%- endif -%}

    {# Next Page Link #}
    {%- if pagerfanta.hasNextPage() -%}
        {%- set path = route_generator.route(pagerfanta.getNextPage()) -%}
        {%- set page = pagerfanta.getNextPage() -%}
        {{- block('next_page_link') -}}
    {%- else -%}
        {{- block('next_page_link_disabled') -}}
    {%- endif -%}
{%- endblock pager -%}

{%- block page_link -%}
    <a class=\"pagination__item\" href=\"{{- path -}}\">{{- page -}}</a>
{%- endblock page_link -%}

{%- block current_page_link -%}
    <span class=\"pagination__item pagination__item--current-page\" aria-current=\"page\">{{- page -}}</span>
{%- endblock current_page_link -%}

{%- block previous_page_link -%}
    <a class=\"pagination__item pagination__item--previous-page\" href=\"{{- path -}}\" rel=\"prev\">{{- block('previous_page_message') -}}</a>
{%- endblock previous_page_link -%}

{%- block previous_page_link_disabled -%}
    <span class=\"pagination__item pagination__item--previous-page pagination__item--disabled\">{{- block('previous_page_message') -}}</span>
{%- endblock previous_page_link_disabled -%}

{%- block previous_page_message -%}
    {%- if options['prev_message'] is defined -%}
        {{- options['prev_message'] -}}
    {%- else -%}
        Previous
    {%- endif -%}
{%- endblock previous_page_message -%}

{%- block next_page_link -%}
    <a class=\"pagination__item pagination__item--next-page\" href=\"{{- path -}}\" rel=\"next\">{{- block('next_page_message') -}}</a>
{%- endblock next_page_link -%}

{%- block next_page_link_disabled -%}
    <span class=\"pagination__item pagination__item--next-page pagination__item--disabled\">{{- block('next_page_message') -}}</span>
{%- endblock next_page_link_disabled -%}

{%- block next_page_message -%}
    {%- if options['next_message'] is defined -%}
        {{- options['next_message'] -}}
    {%- else -%}
        Next
    {%- endif -%}
{%- endblock next_page_message -%}

{%- block ellipsis -%}
    <span class=\"pagination__item pagination__item--separator\">&hellip;</span>
{%- endblock ellipsis -%}
", "@Pagerfanta/default.html.twig", "/Users/heindiez/FROQ/Project/code-last-stack/start/vendor/pagerfanta/twig/templates/default.html.twig");
    }
}
