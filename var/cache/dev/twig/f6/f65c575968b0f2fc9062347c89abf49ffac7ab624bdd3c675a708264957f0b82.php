<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_7ed2976bf8123234b4970dd0a0cb2d92663372411830e5318d4ad8fab9e1282d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0962ac098ca52da912d7e7dc86be8b95f06c8d3df8f2ef89d0c8c0a98cea3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0962ac098ca52da912d7e7dc86be8b95f06c8d3df8f2ef89d0c8c0a98cea3b3->enter($__internal_b0962ac098ca52da912d7e7dc86be8b95f06c8d3df8f2ef89d0c8c0a98cea3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_c166267e30b1a4b9d1856abd372b9fb99fe23e72ddaa7c4b69e736f546b613da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c166267e30b1a4b9d1856abd372b9fb99fe23e72ddaa7c4b69e736f546b613da->enter($__internal_c166267e30b1a4b9d1856abd372b9fb99fe23e72ddaa7c4b69e736f546b613da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" accesskey=\"D\">";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                $__internal_17455dfc75c641d9606de2180499a1f9ac0c105496f24e7f14f8fcfc98fa4b96 = array("collector" => $this->getAttribute(                // line 13
($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(                // line 15
($context["profile"] ?? $this->getContext($context, "profile")), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>                 // line 18
($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>                 // line 19
($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce")));
                if (!is_array($__internal_17455dfc75c641d9606de2180499a1f9ac0c105496f24e7f14f8fcfc98fa4b96)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_17455dfc75c641d9606de2180499a1f9ac0c105496f24e7f14f8fcfc98fa4b96);
                // line 21
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                $context = $context['_parent'];
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <a class=\"hide-button\" id=\"sfToolbarHideButton-";
        // line 26
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">";
        // line 27
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_b0962ac098ca52da912d7e7dc86be8b95f06c8d3df8f2ef89d0c8c0a98cea3b3->leave($__internal_b0962ac098ca52da912d7e7dc86be8b95f06c8d3df8f2ef89d0c8c0a98cea3b3_prof);

        
        $__internal_c166267e30b1a4b9d1856abd372b9fb99fe23e72ddaa7c4b69e736f546b613da->leave($__internal_c166267e30b1a4b9d1856abd372b9fb99fe23e72ddaa7c4b69e736f546b613da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  101 => 26,  98 => 25,  82 => 21,  75 => 19,  74 => 18,  73 => 17,  72 => 16,  71 => 15,  70 => 14,  69 => 13,  68 => 12,  66 => 11,  49 => 10,  46 => 9,  41 => 7,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar.html.twig");
    }
}
