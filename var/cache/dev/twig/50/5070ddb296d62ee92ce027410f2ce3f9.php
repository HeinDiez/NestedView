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

/* @TalesFromADevFlowbite/form/default.html.twig */
class __TwigTemplate_a5913ce90f3cdcc8670a7c88a3a6eccd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@TalesFromADevFlowbite/form/default.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'form_label' => [$this, 'block_form_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'switch_label' => [$this, 'block_switch_label'],
                'form_help' => [$this, 'block_form_help'],
                'form_row' => [$this, 'block_form_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'class_label' => [$this, 'block_class_label'],
                'class_input_radio_label' => [$this, 'block_class_input_radio_label'],
                'class_input_switch_label' => [$this, 'block_class_input_switch_label'],
                'class_input_switch_label_container' => [$this, 'block_class_input_switch_label_container'],
                'class_input_text' => [$this, 'block_class_input_text'],
                'class_input_range' => [$this, 'block_class_input_range'],
                'class_input_file' => [$this, 'block_class_input_file'],
                'class_input_radio' => [$this, 'block_class_input_radio'],
                'class_input_checkbox' => [$this, 'block_class_input_checkbox'],
                'class_input_switch' => [$this, 'block_class_input_switch'],
                'class_select' => [$this, 'block_class_select'],
                'class_textarea' => [$this, 'block_class_textarea'],
                'class_button' => [$this, 'block_class_button'],
                'class_submit' => [$this, 'block_class_submit'],
                'class_time_separator' => [$this, 'block_class_time_separator'],
                'class_addon' => [$this, 'block_class_addon'],
                'class_widget_addon_prepend' => [$this, 'block_class_widget_addon_prepend'],
                'class_widget_addon_append' => [$this, 'block_class_widget_addon_append'],
                'class_addon_prepend' => [$this, 'block_class_addon_prepend'],
                'class_addon_append' => [$this, 'block_class_addon_append'],
                'class_help_text' => [$this, 'block_class_help_text'],
                'class_label_error' => [$this, 'block_class_label_error'],
                'class_input_radio_label_error' => [$this, 'block_class_input_radio_label_error'],
                'class_input_switch_label_error' => [$this, 'block_class_input_switch_label_error'],
                'class_input_error' => [$this, 'block_class_input_error'],
                'class_text_error' => [$this, 'block_class_text_error'],
                'class_input_disabled' => [$this, 'block_class_input_disabled'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TalesFromADevFlowbite/form/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TalesFromADevFlowbite/form/default.html.twig"));

        // line 2
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 21
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 27
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 33
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 39
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 45
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 50
        $this->displayBlock('money_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 82
        $this->displayBlock('date_widget', $context, $blocks);
        // line 101
        $this->displayBlock('time_widget', $context, $blocks);
        // line 124
        $this->displayBlock('button_widget', $context, $blocks);
        // line 129
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 133
        echo "
";
        // line 136
        $this->displayBlock('form_label', $context, $blocks);
        // line 152
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('radio_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('switch_label', $context, $blocks);
        // line 206
        echo "
";
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('form_help', $context, $blocks);
        // line 218
        echo "
";
        // line 221
        $this->displayBlock('form_row', $context, $blocks);
        // line 237
        $this->displayBlock('form_errors', $context, $blocks);
        // line 247
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('class_label', $context, $blocks);
        // line 264
        echo "
";
        // line 265
        $this->displayBlock('class_input_radio_label', $context, $blocks);
        // line 268
        echo "
";
        // line 269
        $this->displayBlock('class_input_switch_label', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('class_input_switch_label_container', $context, $blocks);
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('class_input_text', $context, $blocks);
        // line 280
        echo "
";
        // line 281
        $this->displayBlock('class_input_range', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('class_input_file', $context, $blocks);
        // line 288
        echo "
";
        // line 289
        $this->displayBlock('class_input_radio', $context, $blocks);
        // line 292
        echo "
";
        // line 293
        $this->displayBlock('class_input_checkbox', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('class_input_switch', $context, $blocks);
        // line 300
        echo "
";
        // line 301
        $this->displayBlock('class_select', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('class_textarea', $context, $blocks);
        // line 308
        echo "
";
        // line 309
        $this->displayBlock('class_button', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('class_submit', $context, $blocks);
        // line 316
        echo "
";
        // line 317
        $this->displayBlock('class_time_separator', $context, $blocks);
        // line 320
        echo "
";
        // line 321
        $this->displayBlock('class_addon', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('class_widget_addon_prepend', $context, $blocks);
        // line 328
        echo "
";
        // line 329
        $this->displayBlock('class_widget_addon_append', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('class_addon_prepend', $context, $blocks);
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('class_addon_append', $context, $blocks);
        // line 340
        echo "
";
        // line 341
        $this->displayBlock('class_help_text', $context, $blocks);
        // line 344
        echo "
";
        // line 345
        $this->displayBlock('class_label_error', $context, $blocks);
        // line 348
        echo "
";
        // line 349
        $this->displayBlock('class_input_radio_label_error', $context, $blocks);
        // line 352
        echo "
";
        // line 353
        $this->displayBlock('class_input_switch_label_error', $context, $blocks);
        // line 356
        echo "
";
        // line 357
        $this->displayBlock('class_input_error', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('class_text_error', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('class_input_disabled', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })()), "text")) : ("text"));
        // line 7
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 7, $this->source); })()) == "hidden")) {
            // line 8
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 10
            $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (_twig_default_filter((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 10, $this->source); })()),             $this->renderBlock("class_input_text", $context, $blocks))) : (            $this->renderBlock("class_input_text", $context, $blocks)));
            // line 11
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 11, $this->source); })()) == "range")) {
                // line 12
                $context["attr_class"] =                 $this->renderBlock("class_input_range", $context, $blocks);
            } elseif ((            // line 13
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 13, $this->source); })()) == "file")) {
                // line 14
                $context["attr_class"] =                 $this->renderBlock("class_input_file", $context, $blocks);
            }
            // line 16
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 16, $this->source); })()), ["class" => twig_trim_filter((((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 16, $this->source); })()) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 16), "")) : (""))))]);
            // line 17
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 22
        $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (_twig_default_filter((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 22, $this->source); })()),         $this->renderBlock("class_textarea", $context, $blocks))) : (        $this->renderBlock("class_textarea", $context, $blocks)));
        // line 23
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 23, $this->source); })()), ["class" => twig_trim_filter((((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 23, $this->source); })()) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 23), "")) : (""))))]);
        // line 24
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 28
        $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (_twig_default_filter((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 28, $this->source); })()),         $this->renderBlock("class_select", $context, $blocks))) : (        $this->renderBlock("class_select", $context, $blocks)));
        // line 29
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 29, $this->source); })()), ["class" => twig_trim_filter((((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 29, $this->source); })()) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 29), "")) : (""))))]);
        // line 30
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 34
        $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (_twig_default_filter((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 34, $this->source); })()),         $this->renderBlock("class_input_checkbox", $context, $blocks))) : (        $this->renderBlock("class_input_checkbox", $context, $blocks)));
        // line 35
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()), ["class" => twig_trim_filter((((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 35, $this->source); })()) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "")) : (""))))]);
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 40
        $context["attr_class"] = ((array_key_exists("attr_class", $context)) ? (_twig_default_filter((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 40, $this->source); })()),         $this->renderBlock("class_input_radio", $context, $blocks))) : (        $this->renderBlock("class_input_radio", $context, $blocks)));
        // line 41
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), ["class" => twig_trim_filter((((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 41, $this->source); })()) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 41), "")) : (""))))]);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 46
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 46, $this->source); })()), ["class" => "sr-only peer"]);
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'label', ["widget" =>         $this->loadTemplate("form_div_layout.html.twig", "@TalesFromADevFlowbite/form/default.html.twig", 47)->renderBlock("checkbox_widget", $context)]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 51
        $context["prepend"] =  !(is_string($__internal_compile_0 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 51, $this->source); })())) && is_string($__internal_compile_1 = "{{") && str_starts_with($__internal_compile_0, $__internal_compile_1));
        // line 52
        $context["append"] =  !(is_string($__internal_compile_2 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 52, $this->source); })())) && is_string($__internal_compile_3 = "}}") && str_ends_with($__internal_compile_2, $__internal_compile_3));
        // line 53
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 53, $this->source); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new RuntimeError('Variable "append" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "<div class=\"flex\">";
            // line 55
            $context["attr_class"] = ((            $this->renderBlock("class_input_text", $context, $blocks) . " ") .             $this->renderBlock("class_widget_addon_prepend", $context, $blocks));
            // line 56
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 56, $this->source); })())) {
                // line 57
                $context["attr_class"] = ((                $this->renderBlock("class_input_text", $context, $blocks) . " ") .                 $this->renderBlock("class_widget_addon_append", $context, $blocks));
                // line 58
                echo "<span class=\"";
                echo twig_escape_filter($this->env, ((                $this->renderBlock("class_addon", $context, $blocks) . " ") .                 $this->renderBlock("class_addon_prepend", $context, $blocks)), "html", null, true);
                echo "\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 58, $this->source); })()));
                echo "</span>";
            }
            // line 60
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr_class" => (isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 60, $this->source); })())];
            if (!is_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 60, $this->getSourceContext());
            }
            $__internal_compile_5 = twig_to_array($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            $this->displayBlock("form_widget_simple", $context, $blocks);
            $context = $__internal_compile_4;
            // line 61
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new RuntimeError('Variable "append" does not exist.', 61, $this->source); })())) {
                // line 62
                echo "<span class=\"";
                echo twig_escape_filter($this->env, ((                $this->renderBlock("class_addon", $context, $blocks) . " ") .                 $this->renderBlock("class_addon_append", $context, $blocks)), "html", null, true);
                echo "\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 62, $this->source); })()));
                echo "</span>";
            }
            // line 64
            echo "</div>";
        } else {
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 71
        if ((isset($context["symbol"]) || array_key_exists("symbol", $context) ? $context["symbol"] : (function () { throw new RuntimeError('Variable "symbol" does not exist.', 71, $this->source); })())) {
            // line 72
            $context["attr_class"] = ((            $this->renderBlock("class_input_text", $context, $blocks) . " ") .             $this->renderBlock("class_widget_addon_prepend", $context, $blocks));
            // line 73
            echo "<div class=\"flex\">";
            // line 74
            $__internal_compile_6 = $context;
            $__internal_compile_7 = ["attr_class" => (isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 74, $this->source); })())];
            if (!is_iterable($__internal_compile_7)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 74, $this->getSourceContext());
            }
            $__internal_compile_7 = twig_to_array($__internal_compile_7);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
            $this->displayBlock("form_widget_simple", $context, $blocks);
            $context = $__internal_compile_6;
            // line 75
            echo "<span class=\"";
            echo twig_escape_filter($this->env, ((            $this->renderBlock("class_addon", $context, $blocks) . " ") .             $this->renderBlock("class_addon_append", $context, $blocks)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter((isset($context["symbol"]) || array_key_exists("symbol", $context) ? $context["symbol"] : (function () { throw new RuntimeError('Variable "symbol" does not exist.', 75, $this->source); })()), "%")) : ("%")), "html", null, true);
            echo "</span>
        </div>";
        } else {
            // line 78
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 83
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 83, $this->source); })()) == "single_text")) {
            // line 84
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 86
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 86, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 86)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 86), "flex")) : ("flex")))]);
            // line 87
            $context["attr_class_error"] = "";
            // line 88
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 88, $this->source); })())) {
                // line 89
                $context["attr_class_error"] = (" " .                 $this->renderBlock("class_input_error", $context, $blocks));
            }
            // line 91
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 92
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 92, $this->source); })()), ["{{ year }}" =>             // line 93
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "year", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => ((            $this->renderBlock("class_widget_addon_append", $context, $blocks) . " ") . $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((isset($context["attr_class_error"]) || array_key_exists("attr_class_error", $context) ? $context["attr_class_error"] : (function () { throw new RuntimeError('Variable "attr_class_error" does not exist.', 93, $this->source); })()))))]]), "{{ month }}" =>             // line 94
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "month", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => ((            $this->renderBlock("class_widget_addon_prepend", $context, $blocks) . " ") . $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((isset($context["attr_class_error"]) || array_key_exists("attr_class_error", $context) ? $context["attr_class_error"] : (function () { throw new RuntimeError('Variable "attr_class_error" does not exist.', 94, $this->source); })()))))]]), "{{ day }}" =>             // line 95
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "day", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter(("rounded-none" . (isset($context["attr_class_error"]) || array_key_exists("attr_class_error", $context) ? $context["attr_class_error"] : (function () { throw new RuntimeError('Variable "attr_class_error" does not exist.', 95, $this->source); })()))))]])]);
            // line 97
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 102
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 102, $this->source); })()) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 105, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 105)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 105), "flex")) : ("flex")))]);
            // line 106
            $context["attr_class_error"] = "";
            // line 107
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 107, $this->source); })())) {
                // line 108
                $context["attr_class_error"] = (" " .                 $this->renderBlock("class_input_error", $context, $blocks));
            }
            // line 110
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "hour", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((((((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 111, $this->source); })()) || (isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 111, $this->source); })()))) ? (            $this->renderBlock("class_widget_addon_prepend", $context, $blocks)) : ("")) . (isset($context["attr_class_error"]) || array_key_exists("attr_class_error", $context) ? $context["attr_class_error"] : (function () { throw new RuntimeError('Variable "attr_class_error" does not exist.', 111, $this->source); })()))))]]);
            // line 112
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 112, $this->source); })())) {
                // line 113
                echo "<span class=\"";
                $this->displayBlock("class_time_separator", $context, $blocks);
                echo "\">:</span>";
                // line 114
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "minute", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => ((((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 114, $this->source); })())) ? ("rounded-none") : (                $this->renderBlock("class_widget_addon_append", $context, $blocks))) . $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((isset($context["attr_class_error"]) || array_key_exists("attr_class_error", $context) ? $context["attr_class_error"] : (function () { throw new RuntimeError('Variable "attr_class_error" does not exist.', 114, $this->source); })()))))]]);
            }
            // line 116
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 116, $this->source); })())) {
                // line 117
                echo "<span class=\"";
                $this->displayBlock("class_time_separator", $context, $blocks);
                echo "\">:</span>";
                // line 118
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "second", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((                $this->renderBlock("class_widget_addon_append", $context, $blocks) . (isset($context["attr_class_error"]) || array_key_exists("attr_class_error", $context) ? $context["attr_class_error"] : (function () { throw new RuntimeError('Variable "attr_class_error" does not exist.', 118, $this->source); })()))))]]);
            }
            // line 120
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 124
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 125
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 125, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 125)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 125),         $this->renderBlock("class_button", $context, $blocks))) : (        $this->renderBlock("class_button", $context, $blocks))))]);
        // line 126
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 130
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 130, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 130)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 130),         $this->renderBlock("class_submit", $context, $blocks))) : (        $this->renderBlock("class_submit", $context, $blocks))))]);
        // line 131
        $this->displayParentBlock("submit_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 136
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 137
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 137, $this->source); })()) === false)) {
            // line 138
            $context["label_attr_class"] = (((((isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 138, $this->source); })())) ? (            $this->renderBlock("class_label", $context, $blocks)) : (            $this->renderBlock("class_label_error", $context, $blocks))) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 138)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 138), "")) : ("")));
            // line 139
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 139, $this->source); })()), ["class" => $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((isset($context["label_attr_class"]) || array_key_exists("label_attr_class", $context) ? $context["label_attr_class"] : (function () { throw new RuntimeError('Variable "label_attr_class" does not exist.', 139, $this->source); })())))]);
            // line 140
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 140, $this->source); })())) {
                // line 141
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 141, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 141, $this->source); })())]);
            }
            // line 143
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 143, $this->source); })())) {
                // line 144
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 144, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 144), "")) : ("")) . " required"))]);
            }
            // line 146
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 146, $this->source); })()), "label")) : ("label")), "html", null, true);
            $__internal_compile_8 = $context;
            $__internal_compile_9 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 146, $this->source); })())];
            if (!is_iterable($__internal_compile_9)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 146, $this->getSourceContext());
            }
            $__internal_compile_9 = twig_to_array($__internal_compile_9);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_8;
            echo ">";
            // line 147
            $this->displayBlock("form_label_content", $context, $blocks);
            // line 148
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 148, $this->source); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 152
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 154
        if (array_key_exists("widget", $context)) {
            // line 155
            if (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 155, $this->source); })()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "parent", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "valid", [], "any", false, false, false, 155) == false))) {
                // line 156
                $context["valid"] = false;
            }
            // line 158
            $context["label_attr_class"] = (((((isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 158, $this->source); })())) ? (            $this->renderBlock("class_input_radio_label", $context, $blocks)) : (            $this->renderBlock("class_input_radio_label_error", $context, $blocks))) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 158)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 158), "")) : ("")));
            // line 159
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 159, $this->source); })()), ["class" => $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((isset($context["label_attr_class"]) || array_key_exists("label_attr_class", $context) ? $context["label_attr_class"] : (function () { throw new RuntimeError('Variable "label_attr_class" does not exist.', 159, $this->source); })())))]);
            // line 160
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 160, $this->source); })())) {
                // line 161
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 161, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 161, $this->source); })())]);
            }
            // line 163
            echo "<div class=\"flex items-center mr-4\">
            ";
            // line 164
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 164, $this->source); })());
            echo "
            <label";
            // line 165
            $__internal_compile_10 = $context;
            $__internal_compile_11 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 165, $this->source); })())];
            if (!is_iterable($__internal_compile_11)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 165, $this->getSourceContext());
            }
            $__internal_compile_11 = twig_to_array($__internal_compile_11);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_10;
            echo ">";
            // line 166
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 166, $this->source); })()) === false)) {
                // line 167
                $this->displayBlock("form_label_content", $context, $blocks);
            }
            // line 169
            echo "</label>
        </div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 174
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 175
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 178
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 179
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 182
    public function block_switch_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_label"));

        // line 184
        if (array_key_exists("widget", $context)) {
            // line 185
            if (((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 185, $this->source); })()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "parent", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "valid", [], "any", false, false, false, 185) == false))) {
                // line 186
                $context["valid"] = false;
            }
            // line 188
            $context["label_attr_class"] = (((((isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 188, $this->source); })())) ? (            $this->renderBlock("class_input_switch_label", $context, $blocks)) : (            $this->renderBlock("class_input_switch_label_error", $context, $blocks))) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 188)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 188), "")) : ("")));
            // line 189
            $context["label_container_attr_class"] = ((            $this->renderBlock("class_input_switch_label_container", $context, $blocks) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["label_container_attr"] ?? null), "class", [], "any", true, true, false, 189)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_container_attr"] ?? null), "class", [], "any", false, false, false, 189), "")) : ("")));
            // line 190
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 190, $this->source); })()), ["class" => $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((isset($context["label_attr_class"]) || array_key_exists("label_attr_class", $context) ? $context["label_attr_class"] : (function () { throw new RuntimeError('Variable "label_attr_class" does not exist.', 190, $this->source); })())))]);
            // line 191
            $context["label_container_attr"] = twig_array_merge((isset($context["label_container_attr"]) || array_key_exists("label_container_attr", $context) ? $context["label_container_attr"] : (function () { throw new RuntimeError('Variable "label_container_attr" does not exist.', 191, $this->source); })()), ["class" => $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((isset($context["label_container_attr_class"]) || array_key_exists("label_container_attr_class", $context) ? $context["label_container_attr_class"] : (function () { throw new RuntimeError('Variable "label_container_attr_class" does not exist.', 191, $this->source); })())))]);
            // line 192
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 192, $this->source); })())) {
                // line 193
                $context["label_container_attr"] = twig_array_merge((isset($context["label_container_attr"]) || array_key_exists("label_container_attr", $context) ? $context["label_container_attr"] : (function () { throw new RuntimeError('Variable "label_container_attr" does not exist.', 193, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 193, $this->source); })())]);
            }
            // line 195
            echo "<label";
            $__internal_compile_12 = $context;
            $__internal_compile_13 = ["attr" => (isset($context["label_container_attr"]) || array_key_exists("label_container_attr", $context) ? $context["label_container_attr"] : (function () { throw new RuntimeError('Variable "label_container_attr" does not exist.', 195, $this->source); })())];
            if (!is_iterable($__internal_compile_13)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 195, $this->getSourceContext());
            }
            $__internal_compile_13 = twig_to_array($__internal_compile_13);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_13));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_12;
            echo ">
            ";
            // line 196
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 196, $this->source); })());
            echo "
            <div class=\"";
            // line 197
            $this->displayBlock("class_input_switch", $context, $blocks);
            echo "\"></div>";
            // line 198
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 198, $this->source); })()) === false)) {
                // line 199
                echo "<span";
                $__internal_compile_14 = $context;
                $__internal_compile_15 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 199, $this->source); })())];
                if (!is_iterable($__internal_compile_15)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 199, $this->getSourceContext());
                }
                $__internal_compile_15 = twig_to_array($__internal_compile_15);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_15));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_14;
                echo ">";
                // line 200
                $this->displayBlock("form_label_content", $context, $blocks);
                // line 201
                echo "</span>";
            }
            // line 203
            echo "</label>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 209
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 210
        if ( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 210, $this->source); })()))) {
            // line 211
            $context["help_attr_class"] = twig_trim_filter(((            $this->renderBlock("class_help_text", $context, $blocks) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 211)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 211), "")) : (""))));
            // line 212
            $context["help_attr"] = twig_array_merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 212, $this->source); })()), ["class" => (isset($context["help_attr_class"]) || array_key_exists("help_attr_class", $context) ? $context["help_attr_class"] : (function () { throw new RuntimeError('Variable "help_attr_class" does not exist.', 212, $this->source); })())]);
            // line 213
            echo "<p id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 213, $this->source); })()), "html", null, true);
            echo "_help\"";
            $__internal_compile_16 = $context;
            $__internal_compile_17 = ["attr" => (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 213, $this->source); })())];
            if (!is_iterable($__internal_compile_17)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 213, $this->getSourceContext());
            }
            $__internal_compile_17 = twig_to_array($__internal_compile_17);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_17));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_16;
            echo ">";
            // line 214
            $this->displayBlock("form_help_content", $context, $blocks);
            // line 215
            echo "</p>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 221
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 222
        $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 222, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 222)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 222), "mb-3")) : ("mb-3")))]);
        // line 223
        $context["widget_attr"] = [];
        // line 224
        if ( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 224, $this->source); })()))) {
            // line 225
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 225, $this->source); })()) . "_help")]];
        }
        // line 227
        echo "<div";
        $__internal_compile_18 = $context;
        $__internal_compile_19 = ["attr" => (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 227, $this->source); })())];
        if (!is_iterable($__internal_compile_19)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 227, $this->getSourceContext());
        }
        $__internal_compile_19 = twig_to_array($__internal_compile_19);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_19));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_18;
        echo ">";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), 'label');
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 229, $this->source); })()));
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), 'errors');
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), 'help');
        // line 232
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 237
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 238
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 238, $this->source); })())) > 0)) {
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 239, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 240
                echo "<p id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 240, $this->source); })()), "html", null, true);
                echo "_error_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"";
                $this->displayBlock("class_text_error", $context, $blocks);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 240), "html", null, true);
                echo "</p>";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 247
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 248
        $context["attr_class"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 248)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 248), "")) : (""));
        // line 249
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 249, $this->source); })())) {
            // line 250
            $context["attr_class"] = (((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 250, $this->source); })()) . " ") .             $this->renderBlock("class_input_error", $context, $blocks));
        }
        // line 252
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 252, $this->source); })())) {
            // line 253
            $context["attr_class"] = (((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 253, $this->source); })()) . " ") .             $this->renderBlock("class_input_disabled", $context, $blocks));
        }
        // line 255
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 255, $this->source); })()), ["class" => $this->env->getRuntime('TalesFromADev\Twig\Extra\Tailwind\TailwindRuntime')->merge(twig_trim_filter((isset($context["attr_class"]) || array_key_exists("attr_class", $context) ? $context["attr_class"] : (function () { throw new RuntimeError('Variable "attr_class" does not exist.', 255, $this->source); })())))]);
        // line 256
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 261
    public function block_class_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_label"));

        // line 262
        echo "block mb-2 text-sm font-medium text-gray-900 dark:text-white";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 265
    public function block_class_input_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_radio_label"));

        // line 266
        echo "ml-2 text-sm font-medium text-gray-900 dark:text-gray-300";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 269
    public function block_class_input_switch_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_switch_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_switch_label"));

        // line 270
        $this->displayBlock("class_input_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 273
    public function block_class_input_switch_label_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_switch_label_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_switch_label_container"));

        // line 274
        echo "relative inline-flex items-center cursor-pointer";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 277
    public function block_class_input_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_text"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_text"));

        // line 278
        echo "text-gray-900 bg-gray-50 rounded-lg text-sm block w-full p-2.5 border border-gray-300 focus:z-10 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 281
    public function block_class_input_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_range"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_range"));

        // line 282
        echo "w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 285
    public function block_class_input_file($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_file"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_file"));

        // line 286
        echo "block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 289
    public function block_class_input_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_radio"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_radio"));

        // line 290
        echo "w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 293
    public function block_class_input_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_checkbox"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_checkbox"));

        // line 294
        echo "rounded ";
        $this->displayBlock("class_input_radio", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 297
    public function block_class_input_switch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_switch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_switch"));

        // line 298
        echo "relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 dark:border-gray-600 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 301
    public function block_class_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_select"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_select"));

        // line 302
        $this->displayBlock("class_input_text", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 305
    public function block_class_textarea($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_textarea"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_textarea"));

        // line 306
        $this->displayBlock("class_input_text", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 309
    public function block_class_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_button"));

        // line 310
        echo "text-gray-900 bg-white font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 border border-gray-200 hover:text-blue-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 313
    public function block_class_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_submit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_submit"));

        // line 314
        echo "text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 317
    public function block_class_time_separator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_time_separator"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_time_separator"));

        // line 318
        echo "inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-x-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 321
    public function block_class_addon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_addon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_addon"));

        // line 322
        echo "inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 325
    public function block_class_widget_addon_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_widget_addon_prepend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_widget_addon_prepend"));

        // line 326
        echo "rounded-none rounded-l-lg";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 329
    public function block_class_widget_addon_append($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_widget_addon_append"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_widget_addon_append"));

        // line 330
        echo "rounded-none rounded-r-lg";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 333
    public function block_class_addon_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_addon_prepend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_addon_prepend"));

        // line 334
        echo "border-r-0 rounded-l-md";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 337
    public function block_class_addon_append($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_addon_append"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_addon_append"));

        // line 338
        echo "border-l-0 rounded-r-md";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 341
    public function block_class_help_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_help_text"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_help_text"));

        // line 342
        echo "mt-2 text-sm text-gray-500 dark:text-gray-400";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 345
    public function block_class_label_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_label_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_label_error"));

        // line 346
        echo "block mb-2 text-sm font-medium text-red-600 dark:text-red-500";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 349
    public function block_class_input_radio_label_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_radio_label_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_radio_label_error"));

        // line 350
        echo "ml-2 text-sm font-medium text-red-600 dark:text-red-500";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 353
    public function block_class_input_switch_label_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_switch_label_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_switch_label_error"));

        // line 354
        $this->displayBlock("class_input_radio_label_error", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 357
    public function block_class_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_error"));

        // line 358
        echo "bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:bg-red-100 dark:border-red-500 dark:text-red-500 dark:placeholder-red-500 focus:z-10 focus:ring-red-500 focus:border-red-500 dark:focus:ring-red-500 dark:focus:border-red-500";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 361
    public function block_class_text_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_text_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_text_error"));

        // line 362
        echo "mt-2 text-sm text-red-600 dark:text-red-500";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 365
    public function block_class_input_disabled($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_disabled"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_input_disabled"));

        // line 366
        echo "disabled:bg-gray-100 disabled:border-gray-300 disabled:cursor-not-allowed dark:disabled:text-gray-400";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@TalesFromADevFlowbite/form/default.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  1682 => 366,  1672 => 365,  1662 => 362,  1652 => 361,  1642 => 358,  1632 => 357,  1622 => 354,  1612 => 353,  1602 => 350,  1592 => 349,  1582 => 346,  1572 => 345,  1562 => 342,  1552 => 341,  1542 => 338,  1532 => 337,  1522 => 334,  1512 => 333,  1502 => 330,  1492 => 329,  1482 => 326,  1472 => 325,  1462 => 322,  1452 => 321,  1442 => 318,  1432 => 317,  1422 => 314,  1412 => 313,  1402 => 310,  1392 => 309,  1382 => 306,  1372 => 305,  1362 => 302,  1352 => 301,  1342 => 298,  1332 => 297,  1321 => 294,  1311 => 293,  1301 => 290,  1291 => 289,  1281 => 286,  1271 => 285,  1261 => 282,  1251 => 281,  1241 => 278,  1231 => 277,  1221 => 274,  1211 => 273,  1201 => 270,  1191 => 269,  1181 => 266,  1171 => 265,  1161 => 262,  1151 => 261,  1141 => 256,  1139 => 255,  1136 => 253,  1134 => 252,  1131 => 250,  1129 => 249,  1127 => 248,  1117 => 247,  1086 => 240,  1069 => 239,  1067 => 238,  1057 => 237,  1047 => 232,  1045 => 231,  1043 => 230,  1041 => 229,  1039 => 228,  1027 => 227,  1024 => 225,  1022 => 224,  1020 => 223,  1018 => 222,  1008 => 221,  997 => 215,  995 => 214,  981 => 213,  979 => 212,  977 => 211,  975 => 210,  965 => 209,  954 => 203,  951 => 201,  949 => 200,  937 => 199,  935 => 198,  932 => 197,  928 => 196,  915 => 195,  912 => 193,  910 => 192,  908 => 191,  906 => 190,  904 => 189,  902 => 188,  899 => 186,  897 => 185,  895 => 184,  885 => 182,  875 => 179,  865 => 178,  855 => 175,  845 => 174,  833 => 169,  830 => 167,  828 => 166,  817 => 165,  813 => 164,  810 => 163,  807 => 161,  805 => 160,  803 => 159,  801 => 158,  798 => 156,  796 => 155,  794 => 154,  784 => 152,  771 => 148,  769 => 147,  756 => 146,  753 => 144,  751 => 143,  748 => 141,  746 => 140,  744 => 139,  742 => 138,  740 => 137,  730 => 136,  720 => 131,  718 => 130,  708 => 129,  698 => 126,  696 => 125,  686 => 124,  675 => 120,  672 => 118,  668 => 117,  666 => 116,  663 => 114,  659 => 113,  657 => 112,  655 => 111,  651 => 110,  648 => 108,  646 => 107,  644 => 106,  642 => 105,  639 => 103,  637 => 102,  627 => 101,  616 => 97,  614 => 95,  613 => 94,  612 => 93,  611 => 92,  607 => 91,  604 => 89,  602 => 88,  600 => 87,  598 => 86,  595 => 84,  593 => 83,  583 => 82,  572 => 78,  564 => 75,  554 => 74,  552 => 73,  550 => 72,  548 => 71,  538 => 70,  527 => 66,  524 => 64,  517 => 62,  515 => 61,  505 => 60,  498 => 58,  496 => 57,  494 => 56,  492 => 55,  490 => 54,  488 => 53,  486 => 52,  484 => 51,  474 => 50,  464 => 47,  462 => 46,  452 => 45,  442 => 42,  440 => 41,  438 => 40,  428 => 39,  418 => 36,  416 => 35,  414 => 34,  404 => 33,  394 => 30,  392 => 29,  390 => 28,  380 => 27,  370 => 24,  368 => 23,  366 => 22,  356 => 21,  345 => 17,  343 => 16,  340 => 14,  338 => 13,  336 => 12,  334 => 11,  332 => 10,  329 => 8,  327 => 7,  325 => 6,  315 => 5,  305 => 365,  302 => 364,  300 => 361,  297 => 360,  295 => 357,  292 => 356,  290 => 353,  287 => 352,  285 => 349,  282 => 348,  280 => 345,  277 => 344,  275 => 341,  272 => 340,  270 => 337,  267 => 336,  265 => 333,  262 => 332,  260 => 329,  257 => 328,  255 => 325,  252 => 324,  250 => 321,  247 => 320,  245 => 317,  242 => 316,  240 => 313,  237 => 312,  235 => 309,  232 => 308,  230 => 305,  227 => 304,  225 => 301,  222 => 300,  220 => 297,  217 => 296,  215 => 293,  212 => 292,  210 => 289,  207 => 288,  205 => 285,  202 => 284,  200 => 281,  197 => 280,  195 => 277,  192 => 276,  190 => 273,  187 => 272,  185 => 269,  182 => 268,  180 => 265,  177 => 264,  175 => 261,  172 => 260,  170 => 247,  168 => 237,  166 => 221,  163 => 218,  161 => 209,  158 => 208,  155 => 206,  153 => 182,  150 => 181,  148 => 178,  145 => 177,  143 => 174,  140 => 173,  138 => 152,  136 => 136,  133 => 133,  131 => 129,  129 => 124,  127 => 101,  125 => 82,  123 => 70,  120 => 69,  118 => 50,  116 => 45,  114 => 39,  112 => 33,  110 => 27,  108 => 21,  106 => 5,  103 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    {%- if type == 'hidden' -%}
        {{- parent() -}}
    {%- else -%}
        {%- set attr_class = attr_class|default(block('class_input_text')) -%}
        {%- if type == 'range' -%}
            {%- set attr_class = block('class_input_range') -%}
        {%- elseif type == 'file' -%}
            {%- set attr_class = block('class_input_file') -%}
        {%- endif -%}
        {%- set attr = attr|merge({'class': (attr_class ~ ' ' ~ attr.class|default(''))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_widget_simple -%}

{%- block textarea_widget -%}
    {%- set attr_class = attr_class|default(block('class_textarea')) -%}
    {%- set attr = attr|merge({'class': (attr_class ~ ' ' ~ attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock textarea_widget -%}

{%- block choice_widget_collapsed -%}
    {%- set attr_class = attr_class|default(block('class_select')) -%}
    {%- set attr = attr|merge({'class': (attr_class ~ ' ' ~ attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed -%}

{%- block checkbox_widget -%}
    {%- set attr_class = attr_class|default(block('class_input_checkbox')) -%}
    {%- set attr = attr|merge({'class': (attr_class ~ ' ' ~ attr.class|default(''))|trim}) -%}
    {{- form_label(form, null, { widget: parent() }) -}}
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    {%- set attr_class = attr_class|default(block('class_input_radio')) -%}
    {%- set attr = attr|merge({'class': (attr_class ~ ' ' ~ attr.class|default(''))|trim}) -%}
    {{- form_label(form, null, { widget: parent() }) -}}
{%- endblock radio_widget -%}

{%- block switch_widget -%}
    {%- set attr = attr|merge({'class': 'sr-only peer'}) -%}
    {{- form_label(form, null, { widget: block('checkbox_widget', 'form_div_layout.html.twig') }) -}}
{%- endblock switch_widget -%}

{% block money_widget -%}
    {%- set prepend = not (money_pattern starts with '{{') -%}
    {%- set append = not (money_pattern ends with '}}') -%}
    {%- if prepend or append -%}
        <div class=\"flex\">
            {%- set attr_class = block('class_input_text') ~ ' ' ~ block('class_widget_addon_prepend') -%}
            {%- if prepend -%}
                {%- set attr_class = block('class_input_text') ~ ' ' ~ block('class_widget_addon_append') -%}
                <span class=\"{{ block('class_addon') ~ ' ' ~ block('class_addon_prepend') }}\">{{ money_pattern|form_encode_currency }}</span>
            {%- endif -%}
            {% with { attr_class: attr_class } %}{{- block('form_widget_simple') -}}{% endwith %}
            {%- if append -%}
                <span class=\"{{ block('class_addon') ~ ' ' ~ block('class_addon_append') }}\">{{ money_pattern|form_encode_currency }}</span>
            {%- endif -%}
        </div>
    {%- else -%}
        {{- block('form_widget_simple') -}}
    {%- endif -%}
{%- endblock money_widget %}

{% block percent_widget -%}
    {%- if symbol -%}
        {%- set attr_class = block('class_input_text') ~ ' ' ~ block('class_widget_addon_prepend') -%}
        <div class=\"flex\">
            {%- with { attr_class: attr_class } -%}{{- block('form_widget_simple') -}}{%- endwith -%}
            <span class=\"{{ block('class_addon') ~ ' ' ~ block('class_addon_append') }}\">{{ symbol|default('%') }}</span>
        </div>
    {%- else -%}
        {{- block('form_widget_simple') -}}
    {%- endif -%}
{%- endblock percent_widget %}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set attr = attr|merge({'class': attr.class|default('flex')|trim}) -%}
        {%- set attr_class_error = '' -%}
        {%- if not valid -%}
            {%- set attr_class_error = ' ' ~ block('class_input_error') -%}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year, { attr: { class: (block('class_widget_addon_append') ~ ' ' ~ attr_class_error|trim|tailwind_merge) }}),
                '{{ month }}': form_widget(form.month, { attr: { class: (block('class_widget_addon_prepend') ~ ' ' ~ attr_class_error|trim|tailwind_merge) }}),
                '{{ day }}':   form_widget(form.day, { attr: { class: ('rounded-none' ~ attr_class_error)|trim|tailwind_merge }}),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set attr = attr|merge({'class': attr.class|default('flex')|trim}) -%}
        {%- set attr_class_error = '' -%}
        {%- if not valid -%}
            {%- set attr_class_error = ' ' ~ block('class_input_error') -%}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_widget(form.hour, { attr: { class: ((with_minutes or with_seconds ? block('class_widget_addon_prepend') : '') ~ attr_class_error)|trim|tailwind_merge }}) -}}
            {%- if with_minutes -%}
                <span class=\"{{ block('class_time_separator') }}\">:</span>
                {{- form_widget(form.minute, { attr: { class: ((with_seconds ? 'rounded-none' : block('class_widget_addon_append')) ~ attr_class_error|trim|tailwind_merge) }}) -}}
            {%- endif -%}
            {%- if with_seconds -%}
                <span class=\"{{ block('class_time_separator') }}\">:</span>
                {{- form_widget(form.second, { attr: { class: (block('class_widget_addon_append') ~ attr_class_error)|trim|tailwind_merge }}) -}}
            {%- endif -%}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block button_widget -%}
    {%- set attr = attr|merge({'class': (attr.class|default(block('class_button')))|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{%- block submit_widget -%}
    {%- set attr = attr|merge({'class': (attr.class|default(block('class_submit')))|trim}) -%}
    {{- parent() -}}
{%- endblock submit_widget %}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {%- set label_attr_class = (valid ? block('class_label') : block('class_label_error')) ~ ' ' ~ label_attr.class|default('') -%}
        {%- set label_attr = label_attr|merge({'class': label_attr_class|trim|tailwind_merge}) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        <{{ element|default('label') }}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}>
        {{- block('form_label_content') -}}
        </{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- if checked and form.parent.vars.valid == false -%}
            {%- set valid = false -%}
        {%- endif -%}
        {%- set label_attr_class = (valid ? block('class_input_radio_label') : block('class_input_radio_label_error')) ~ ' ' ~ label_attr.class|default('') -%}
        {%- set label_attr = label_attr|merge({'class': label_attr_class|trim|tailwind_merge}) -%}
        {%- if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        <div class=\"flex items-center mr-4\">
            {{ widget|raw }}
            <label{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}>
                {%- if label is not same as(false) -%}
                    {{- block('form_label_content') -}}
                {%- endif -%}
            </label>
        </div>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block switch_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- if checked and form.parent.vars.valid == false -%}
            {%- set valid = false -%}
        {%- endif -%}
        {%- set label_attr_class = (valid ? block('class_input_switch_label') : block('class_input_switch_label_error')) ~ ' ' ~ label_attr.class|default('') -%}
        {%- set label_container_attr_class = block('class_input_switch_label_container') ~ ' ' ~ label_container_attr.class|default('') -%}
        {%- set label_attr = label_attr|merge({'class': label_attr_class|trim|tailwind_merge})  -%}
        {%- set label_container_attr = label_container_attr|merge({'class': label_container_attr_class|trim|tailwind_merge}) -%}
        {%- if not compound -%}
            {%- set label_container_attr = label_container_attr|merge({'for': id}) -%}
        {%- endif -%}
        <label{% with { attr: label_container_attr } %}{{ block('attributes') }}{% endwith %}>
            {{ widget|raw }}
            <div class=\"{{ block('class_input_switch') }}\"></div>
            {%- if label is not same as(false) -%}
                <span{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}>
                    {{- block('form_label_content') -}}
                </span>
            {%- endif -%}
        </label>
    {%- endif -%}
{%- endblock switch_label %}

{# Help #}

{% block form_help -%}
    {%- if help is not empty -%}
        {%- set help_attr_class = (block('class_help_text') ~ ' '~ help_attr.class|default(''))|trim -%}
        {%- set help_attr = help_attr|merge({'class': help_attr_class}) -%}
        <p id=\"{{ id }}_help\"{% with { attr: help_attr } %}{{ block('attributes') }}{% endwith %}>
            {{- block('form_help_content') -}}
        </p>
    {%- endif -%}
{%- endblock form_help %}

{# Rows #}

{%- block form_row -%}
    {%- set row_attr = row_attr|merge({'class': (row_attr.class|default('mb-3'))|trim}) -%}
    {%- set widget_attr = {} -%}
    {%- if help is not empty -%}
        {%- set widget_attr = {attr: {'aria-describedby': id ~\"_help\"}} -%}
    {%- endif -%}
    <div{% with {attr: row_attr} %}{{ block('attributes') }}{% endwith %}>
        {{- form_label(form) -}}
        {{- form_widget(form, widget_attr) -}}
        {{- form_errors(form) -}}
        {{- form_help(form) -}}
    </div>
{%- endblock form_row -%}

{# Misc #}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for key, error in errors -%}
            <p id=\"{{ id }}_error_{{ key }}\" class=\"{{ block('class_text_error') }}\">{{ error.message }}</p>
        {%- endfor -%}
    {%- endif -%}
{%- endblock form_errors -%}

{# Support #}

{%- block widget_attributes -%}
    {%- set attr_class = attr.class|default('') -%}
    {%- if not valid %}
        {%- set attr_class = attr_class ~ ' ' ~ block('class_input_error') -%}
    {% endif -%}
    {%- if disabled %}
        {%- set attr_class = attr_class ~ ' ' ~ block('class_input_disabled') -%}
    {% endif -%}
    {%- set attr = attr|merge({'class': attr_class|trim|tailwind_merge}) -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{# Class #}

{% block class_label -%}
    block mb-2 text-sm font-medium text-gray-900 dark:text-white
{%- endblock class_label %}

{% block class_input_radio_label -%}
    ml-2 text-sm font-medium text-gray-900 dark:text-gray-300
{%- endblock class_input_radio_label %}

{% block class_input_switch_label -%}
    {{ block('class_input_radio_label') }}
{%- endblock class_input_switch_label %}

{% block class_input_switch_label_container -%}
    relative inline-flex items-center cursor-pointer
{%- endblock class_input_switch_label_container %}

{% block class_input_text -%}
    text-gray-900 bg-gray-50 rounded-lg text-sm block w-full p-2.5 border border-gray-300 focus:z-10 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500
{%- endblock class_input_text %}

{% block class_input_range -%}
    w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700
{%- endblock class_input_range %}

{% block class_input_file -%}
    block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
{%- endblock class_input_file %}

{% block class_input_radio -%}
    w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600
{%- endblock class_input_radio %}

{% block class_input_checkbox -%}
    rounded {{ block('class_input_radio') }}
{%- endblock class_input_checkbox %}

{% block class_input_switch -%}
    relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 dark:border-gray-600 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600
{%- endblock class_input_switch %}

{% block class_select -%}
    {{ block('class_input_text') }}
{%- endblock class_select %}

{% block class_textarea -%}
    {{ block('class_input_text') }}
{%- endblock class_textarea %}

{% block class_button -%}
    text-gray-900 bg-white font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 border border-gray-200 hover:text-blue-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700
{%- endblock class_button %}

{% block class_submit -%}
    text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800
{%- endblock class_submit %}

{% block class_time_separator -%}
    inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-x-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600
{%- endblock class_time_separator %}

{% block class_addon -%}
    inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600
{%- endblock class_addon %}

{% block class_widget_addon_prepend -%}
    rounded-none rounded-l-lg
{%- endblock class_widget_addon_prepend %}

{% block class_widget_addon_append -%}
    rounded-none rounded-r-lg
{%- endblock class_widget_addon_append %}

{% block class_addon_prepend -%}
    border-r-0 rounded-l-md
{%- endblock class_addon_prepend %}

{% block class_addon_append -%}
    border-l-0 rounded-r-md
{%- endblock class_addon_append %}

{% block class_help_text -%}
    mt-2 text-sm text-gray-500 dark:text-gray-400
{%- endblock class_help_text %}

{% block class_label_error -%}
    block mb-2 text-sm font-medium text-red-600 dark:text-red-500
{%- endblock class_label_error %}

{% block class_input_radio_label_error -%}
    ml-2 text-sm font-medium text-red-600 dark:text-red-500
{%- endblock class_input_radio_label_error %}

{% block class_input_switch_label_error -%}
    {{ block('class_input_radio_label_error') }}
{%- endblock class_input_switch_label_error %}

{% block class_input_error -%}
    bg-red-50 border-red-500 text-red-900 placeholder-red-700 dark:bg-red-100 dark:border-red-500 dark:text-red-500 dark:placeholder-red-500 focus:z-10 focus:ring-red-500 focus:border-red-500 dark:focus:ring-red-500 dark:focus:border-red-500
{%- endblock class_input_error %}

{% block class_text_error -%}
    mt-2 text-sm text-red-600 dark:text-red-500
{%- endblock class_text_error %}

{% block class_input_disabled -%}
    disabled:bg-gray-100 disabled:border-gray-300 disabled:cursor-not-allowed dark:disabled:text-gray-400
{%- endblock class_input_disabled %}
", "@TalesFromADevFlowbite/form/default.html.twig", "/Users/heindiez/FROQ/Project/code-last-stack/start/vendor/tales-from-a-dev/flowbite-bundle/templates/form/default.html.twig");
    }
}
