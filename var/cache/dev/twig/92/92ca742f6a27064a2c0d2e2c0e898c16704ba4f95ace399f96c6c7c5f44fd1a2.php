<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_f5126a689c1945800d465a7aa5fd2058b919c56b7f775b65760e185397996971 extends Twig_Template
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
        $__internal_5c80913a60d89315f7e071ace504235fb4d800c2297b67943bad8e3de6164b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c80913a60d89315f7e071ace504235fb4d800c2297b67943bad8e3de6164b39->enter($__internal_5c80913a60d89315f7e071ace504235fb4d800c2297b67943bad8e3de6164b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_03a565758d03c02f903a46cca2abcd03c12505e70ea0a82082e264ccc3b68a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a565758d03c02f903a46cca2abcd03c12505e70ea0a82082e264ccc3b68a94->enter($__internal_03a565758d03c02f903a46cca2abcd03c12505e70ea0a82082e264ccc3b68a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")";
        } else {
            // line 4
            echo "    at n/a";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
        }
        
        $__internal_5c80913a60d89315f7e071ace504235fb4d800c2297b67943bad8e3de6164b39->leave($__internal_5c80913a60d89315f7e071ace504235fb4d800c2297b67943bad8e3de6164b39_prof);

        
        $__internal_03a565758d03c02f903a46cca2abcd03c12505e70ea0a82082e264ccc3b68a94->leave($__internal_03a565758d03c02f903a46cca2abcd03c12505e70ea0a82082e264ccc3b68a94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  37 => 6,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
