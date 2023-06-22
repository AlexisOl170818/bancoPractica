<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6e29ce9b88d8c4126f2fd70a666c4f050ee51ec8393e0f6b0e9fcdfa0e478674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79e7b2387baf0ce09db197fe9be0fa0e87412a0a05062dac8b7a889fe464fa8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e7b2387baf0ce09db197fe9be0fa0e87412a0a05062dac8b7a889fe464fa8e->enter($__internal_79e7b2387baf0ce09db197fe9be0fa0e87412a0a05062dac8b7a889fe464fa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9e1244c51e71373e31a625264bc5d26a07d93c32e31faafd9123814281d0b4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1244c51e71373e31a625264bc5d26a07d93c32e31faafd9123814281d0b4f6->enter($__internal_9e1244c51e71373e31a625264bc5d26a07d93c32e31faafd9123814281d0b4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e7b2387baf0ce09db197fe9be0fa0e87412a0a05062dac8b7a889fe464fa8e->leave($__internal_79e7b2387baf0ce09db197fe9be0fa0e87412a0a05062dac8b7a889fe464fa8e_prof);

        
        $__internal_9e1244c51e71373e31a625264bc5d26a07d93c32e31faafd9123814281d0b4f6->leave($__internal_9e1244c51e71373e31a625264bc5d26a07d93c32e31faafd9123814281d0b4f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5741303458d7ac38bc1c647776c58e217d51e7756b7efed30588902fc979c80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5741303458d7ac38bc1c647776c58e217d51e7756b7efed30588902fc979c80e->enter($__internal_5741303458d7ac38bc1c647776c58e217d51e7756b7efed30588902fc979c80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_669b606b1ab76aeea5a0a6faf5a58976e80d35eb85aad68be851cbb8e248fcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669b606b1ab76aeea5a0a6faf5a58976e80d35eb85aad68be851cbb8e248fcbc->enter($__internal_669b606b1ab76aeea5a0a6faf5a58976e80d35eb85aad68be851cbb8e248fcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>";
        }
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_669b606b1ab76aeea5a0a6faf5a58976e80d35eb85aad68be851cbb8e248fcbc->leave($__internal_669b606b1ab76aeea5a0a6faf5a58976e80d35eb85aad68be851cbb8e248fcbc_prof);

        
        $__internal_5741303458d7ac38bc1c647776c58e217d51e7756b7efed30588902fc979c80e->leave($__internal_5741303458d7ac38bc1c647776c58e217d51e7756b7efed30588902fc979c80e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d1423231ae7d5a9fa57298a53e1de6584b71f5c70c3053d4ef0172315923ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1423231ae7d5a9fa57298a53e1de6584b71f5c70c3053d4ef0172315923ac3->enter($__internal_1d1423231ae7d5a9fa57298a53e1de6584b71f5c70c3053d4ef0172315923ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d6cc58727ebb49fa36f4fa5ecc56bcbe3337b9fd8176e2e9410cbf9792e9fadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cc58727ebb49fa36f4fa5ecc56bcbe3337b9fd8176e2e9410cbf9792e9fadb->enter($__internal_d6cc58727ebb49fa36f4fa5ecc56bcbe3337b9fd8176e2e9410cbf9792e9fadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>";
        }
        // line 21
        echo "    </span>";
        
        $__internal_d6cc58727ebb49fa36f4fa5ecc56bcbe3337b9fd8176e2e9410cbf9792e9fadb->leave($__internal_d6cc58727ebb49fa36f4fa5ecc56bcbe3337b9fd8176e2e9410cbf9792e9fadb_prof);

        
        $__internal_1d1423231ae7d5a9fa57298a53e1de6584b71f5c70c3053d4ef0172315923ac3->leave($__internal_1d1423231ae7d5a9fa57298a53e1de6584b71f5c70c3053d4ef0172315923ac3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c12f63e55b0ef9536db24df95b73e74972df9f9efe584d31d46aaf767c29526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c12f63e55b0ef9536db24df95b73e74972df9f9efe584d31d46aaf767c29526->enter($__internal_9c12f63e55b0ef9536db24df95b73e74972df9f9efe584d31d46aaf767c29526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a29a10cfd307700f7c3f2a33b30ccf7162a375793c69fbf8059d8209be5bbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a29a10cfd307700f7c3f2a33b30ccf7162a375793c69fbf8059d8209be5bbde->enter($__internal_0a29a10cfd307700f7c3f2a33b30ccf7162a375793c69fbf8059d8209be5bbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>";
        }
        
        $__internal_0a29a10cfd307700f7c3f2a33b30ccf7162a375793c69fbf8059d8209be5bbde->leave($__internal_0a29a10cfd307700f7c3f2a33b30ccf7162a375793c69fbf8059d8209be5bbde_prof);

        
        $__internal_9c12f63e55b0ef9536db24df95b73e74972df9f9efe584d31d46aaf767c29526->leave($__internal_9c12f63e55b0ef9536db24df95b73e74972df9f9efe584d31d46aaf767c29526_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  123 => 32,  118 => 28,  116 => 27,  114 => 25,  105 => 24,  95 => 21,  90 => 17,  88 => 16,  84 => 14,  79 => 13,  70 => 12,  60 => 9,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
