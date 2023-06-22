<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d1e92f4cdacbd9736a263565cad3ad7a61ebadb6f0c89cce94c888e82f3ef57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31a7c35a15c3c3af1562215f1fceb2cbf0901e2c4dafcbc985e5b043fd0dc9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a7c35a15c3c3af1562215f1fceb2cbf0901e2c4dafcbc985e5b043fd0dc9ed->enter($__internal_31a7c35a15c3c3af1562215f1fceb2cbf0901e2c4dafcbc985e5b043fd0dc9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_69be356f969f41064604d6707ef616260a49aef7d3da4c0cdf49b474d2526c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69be356f969f41064604d6707ef616260a49aef7d3da4c0cdf49b474d2526c96->enter($__internal_69be356f969f41064604d6707ef616260a49aef7d3da4c0cdf49b474d2526c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a7c35a15c3c3af1562215f1fceb2cbf0901e2c4dafcbc985e5b043fd0dc9ed->leave($__internal_31a7c35a15c3c3af1562215f1fceb2cbf0901e2c4dafcbc985e5b043fd0dc9ed_prof);

        
        $__internal_69be356f969f41064604d6707ef616260a49aef7d3da4c0cdf49b474d2526c96->leave($__internal_69be356f969f41064604d6707ef616260a49aef7d3da4c0cdf49b474d2526c96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_284f1c61317f45be2db3d35840fbb000fb04a276052817081838f5333a0cf4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284f1c61317f45be2db3d35840fbb000fb04a276052817081838f5333a0cf4c4->enter($__internal_284f1c61317f45be2db3d35840fbb000fb04a276052817081838f5333a0cf4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd306eaacc9a46a3215d92b8fe843bc7e8214c291b6edcff2a443bafaa718c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd306eaacc9a46a3215d92b8fe843bc7e8214c291b6edcff2a443bafaa718c3f->enter($__internal_fd306eaacc9a46a3215d92b8fe843bc7e8214c291b6edcff2a443bafaa718c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        
        $__internal_fd306eaacc9a46a3215d92b8fe843bc7e8214c291b6edcff2a443bafaa718c3f->leave($__internal_fd306eaacc9a46a3215d92b8fe843bc7e8214c291b6edcff2a443bafaa718c3f_prof);

        
        $__internal_284f1c61317f45be2db3d35840fbb000fb04a276052817081838f5333a0cf4c4->leave($__internal_284f1c61317f45be2db3d35840fbb000fb04a276052817081838f5333a0cf4c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  56 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
