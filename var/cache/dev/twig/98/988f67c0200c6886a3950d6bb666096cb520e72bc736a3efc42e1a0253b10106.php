<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_01e7084e25287071b0abfd9c23e69bd90f8198c1c7034bcbfbf07a37b774f055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_76963b73d6adcafdc483bffac11c15ddde697f9ba009b2ab222b056e5119e6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76963b73d6adcafdc483bffac11c15ddde697f9ba009b2ab222b056e5119e6be->enter($__internal_76963b73d6adcafdc483bffac11c15ddde697f9ba009b2ab222b056e5119e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7c6d6367c08b70af6b75982feeec05ac25cc4ab922a897287e86ef45f6f256ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6d6367c08b70af6b75982feeec05ac25cc4ab922a897287e86ef45f6f256ea->enter($__internal_7c6d6367c08b70af6b75982feeec05ac25cc4ab922a897287e86ef45f6f256ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76963b73d6adcafdc483bffac11c15ddde697f9ba009b2ab222b056e5119e6be->leave($__internal_76963b73d6adcafdc483bffac11c15ddde697f9ba009b2ab222b056e5119e6be_prof);

        
        $__internal_7c6d6367c08b70af6b75982feeec05ac25cc4ab922a897287e86ef45f6f256ea->leave($__internal_7c6d6367c08b70af6b75982feeec05ac25cc4ab922a897287e86ef45f6f256ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_baa3fbdbeaf5fbb796cf235375ae34952fed7490a9166a65a5a54faa68af5a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa3fbdbeaf5fbb796cf235375ae34952fed7490a9166a65a5a54faa68af5a35->enter($__internal_baa3fbdbeaf5fbb796cf235375ae34952fed7490a9166a65a5a54faa68af5a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72087eb331600116d615c8597cc90bae4d5a22867e1b2c506ea2e0a37b525b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72087eb331600116d615c8597cc90bae4d5a22867e1b2c506ea2e0a37b525b91->enter($__internal_72087eb331600116d615c8597cc90bae4d5a22867e1b2c506ea2e0a37b525b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72087eb331600116d615c8597cc90bae4d5a22867e1b2c506ea2e0a37b525b91->leave($__internal_72087eb331600116d615c8597cc90bae4d5a22867e1b2c506ea2e0a37b525b91_prof);

        
        $__internal_baa3fbdbeaf5fbb796cf235375ae34952fed7490a9166a65a5a54faa68af5a35->leave($__internal_baa3fbdbeaf5fbb796cf235375ae34952fed7490a9166a65a5a54faa68af5a35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3650012e40a31dca1d40c00858e3ee1c4394787f7194048c6815100de0578a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3650012e40a31dca1d40c00858e3ee1c4394787f7194048c6815100de0578a3d->enter($__internal_3650012e40a31dca1d40c00858e3ee1c4394787f7194048c6815100de0578a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f01ba7bc396c8f8211418dbc65664ea06c50a99c1aef0718b32fbf617f87435a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01ba7bc396c8f8211418dbc65664ea06c50a99c1aef0718b32fbf617f87435a->enter($__internal_f01ba7bc396c8f8211418dbc65664ea06c50a99c1aef0718b32fbf617f87435a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>";
        
        $__internal_f01ba7bc396c8f8211418dbc65664ea06c50a99c1aef0718b32fbf617f87435a->leave($__internal_f01ba7bc396c8f8211418dbc65664ea06c50a99c1aef0718b32fbf617f87435a_prof);

        
        $__internal_3650012e40a31dca1d40c00858e3ee1c4394787f7194048c6815100de0578a3d->leave($__internal_3650012e40a31dca1d40c00858e3ee1c4394787f7194048c6815100de0578a3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0767ec06aab4fc941f9e447c68734d007ca2df8f77d533e736a1b283e838804d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0767ec06aab4fc941f9e447c68734d007ca2df8f77d533e736a1b283e838804d->enter($__internal_0767ec06aab4fc941f9e447c68734d007ca2df8f77d533e736a1b283e838804d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79a3e3a2cbd3ee00f65846a1d1748dee7c680146ac6d7265fa788396b11f43a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a3e3a2cbd3ee00f65846a1d1748dee7c680146ac6d7265fa788396b11f43a3->enter($__internal_79a3e3a2cbd3ee00f65846a1d1748dee7c680146ac6d7265fa788396b11f43a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        
        $__internal_79a3e3a2cbd3ee00f65846a1d1748dee7c680146ac6d7265fa788396b11f43a3->leave($__internal_79a3e3a2cbd3ee00f65846a1d1748dee7c680146ac6d7265fa788396b11f43a3_prof);

        
        $__internal_0767ec06aab4fc941f9e447c68734d007ca2df8f77d533e736a1b283e838804d->leave($__internal_0767ec06aab4fc941f9e447c68734d007ca2df8f77d533e736a1b283e838804d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
