<?php

/* :js:init.js.twig */
class __TwigTemplate_a57bb56d654bfe24859b63b03383faf27326ec06dfe235f4735475a2bb75f356 extends Twig_Template
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
        $__internal_0bc55d5f58b7675ee68cf8281da3241402fdd70a627a720abbcea2ff90c2a795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc55d5f58b7675ee68cf8281da3241402fdd70a627a720abbcea2ff90c2a795->enter($__internal_0bc55d5f58b7675ee68cf8281da3241402fdd70a627a720abbcea2ff90c2a795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":js:init.js.twig"));

        $__internal_3cd3446c7a84d113169fd910cd0d2b5fcd7e8ac2abed2f5fce44299bcdabc9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd3446c7a84d113169fd910cd0d2b5fcd7e8ac2abed2f5fce44299bcdabc9d7->enter($__internal_3cd3446c7a84d113169fd910cd0d2b5fcd7e8ac2abed2f5fce44299bcdabc9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":js:init.js.twig"));

        // line 1
        echo "<script>

        {
                \$(document).ready(function() {
                        \$('select').material_select();
                })

        }

</script>
";
        
        $__internal_0bc55d5f58b7675ee68cf8281da3241402fdd70a627a720abbcea2ff90c2a795->leave($__internal_0bc55d5f58b7675ee68cf8281da3241402fdd70a627a720abbcea2ff90c2a795_prof);

        
        $__internal_3cd3446c7a84d113169fd910cd0d2b5fcd7e8ac2abed2f5fce44299bcdabc9d7->leave($__internal_3cd3446c7a84d113169fd910cd0d2b5fcd7e8ac2abed2f5fce44299bcdabc9d7_prof);

    }

    public function getTemplateName()
    {
        return ":js:init.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>

        {
                \$(document).ready(function() {
                        \$('select').material_select();
                })

        }

</script>
", ":js:init.js.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\app/Resources\\views/js/init.js.twig");
    }
}
