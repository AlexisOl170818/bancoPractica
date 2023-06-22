<?php

/* base.html.twig */
class __TwigTemplate_9632f828f13b1fffd231950a1ca30213c1af9d5bfeca36705baa6c4299150f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b7b72f02bdd4c1a18ba90c740b8bfc28796f3f3ca64cf5312c2503eb25f86f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7b72f02bdd4c1a18ba90c740b8bfc28796f3f3ca64cf5312c2503eb25f86f0->enter($__internal_6b7b72f02bdd4c1a18ba90c740b8bfc28796f3f3ca64cf5312c2503eb25f86f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3e8c29adf6a5e1279472b360e05066983a80e3ba0a3534c59d5bf30112952147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8c29adf6a5e1279472b360e05066983a80e3ba0a3534c59d5bf30112952147->enter($__internal_3e8c29adf6a5e1279472b360e05066983a80e3ba0a3534c59d5bf30112952147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_6b7b72f02bdd4c1a18ba90c740b8bfc28796f3f3ca64cf5312c2503eb25f86f0->leave($__internal_6b7b72f02bdd4c1a18ba90c740b8bfc28796f3f3ca64cf5312c2503eb25f86f0_prof);

        
        $__internal_3e8c29adf6a5e1279472b360e05066983a80e3ba0a3534c59d5bf30112952147->leave($__internal_3e8c29adf6a5e1279472b360e05066983a80e3ba0a3534c59d5bf30112952147_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe44acee33cb378589a1eee12114b89de56cb782593adeb977ebea4cb4302e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe44acee33cb378589a1eee12114b89de56cb782593adeb977ebea4cb4302e8f->enter($__internal_fe44acee33cb378589a1eee12114b89de56cb782593adeb977ebea4cb4302e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fa0c066a5b4eb3fa962d7a5ab8bdd3baf5d6f1e433bd504e89fa03f4fd3cfd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa0c066a5b4eb3fa962d7a5ab8bdd3baf5d6f1e433bd504e89fa03f4fd3cfd5->enter($__internal_7fa0c066a5b4eb3fa962d7a5ab8bdd3baf5d6f1e433bd504e89fa03f4fd3cfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7fa0c066a5b4eb3fa962d7a5ab8bdd3baf5d6f1e433bd504e89fa03f4fd3cfd5->leave($__internal_7fa0c066a5b4eb3fa962d7a5ab8bdd3baf5d6f1e433bd504e89fa03f4fd3cfd5_prof);

        
        $__internal_fe44acee33cb378589a1eee12114b89de56cb782593adeb977ebea4cb4302e8f->leave($__internal_fe44acee33cb378589a1eee12114b89de56cb782593adeb977ebea4cb4302e8f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bce859dcd01ffc29bfb560d7d1460c8146ca9e2aa10c13587c7364f7684f2918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce859dcd01ffc29bfb560d7d1460c8146ca9e2aa10c13587c7364f7684f2918->enter($__internal_bce859dcd01ffc29bfb560d7d1460c8146ca9e2aa10c13587c7364f7684f2918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_54d77793046bab5ed790e717ea077b27ccb261a0b4c1948336a9b5884ce7597e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d77793046bab5ed790e717ea077b27ccb261a0b4c1948336a9b5884ce7597e->enter($__internal_54d77793046bab5ed790e717ea077b27ccb261a0b4c1948336a9b5884ce7597e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/general.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/css-dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">";
        
        $__internal_54d77793046bab5ed790e717ea077b27ccb261a0b4c1948336a9b5884ce7597e->leave($__internal_54d77793046bab5ed790e717ea077b27ccb261a0b4c1948336a9b5884ce7597e_prof);

        
        $__internal_bce859dcd01ffc29bfb560d7d1460c8146ca9e2aa10c13587c7364f7684f2918->leave($__internal_bce859dcd01ffc29bfb560d7d1460c8146ca9e2aa10c13587c7364f7684f2918_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba7be13eb1aa93099516deafbec69eca3b567cd68c84eca998cb4e123a2b9482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7be13eb1aa93099516deafbec69eca3b567cd68c84eca998cb4e123a2b9482->enter($__internal_ba7be13eb1aa93099516deafbec69eca3b567cd68c84eca998cb4e123a2b9482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b58ea1890605cb50fc5eab61e39ff5ca7e555ebead0ee8c87b1a6bdc27627a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b58ea1890605cb50fc5eab61e39ff5ca7e555ebead0ee8c87b1a6bdc27627a8->enter($__internal_9b58ea1890605cb50fc5eab61e39ff5ca7e555ebead0ee8c87b1a6bdc27627a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            <nav>
                <div class=\"nav-wrapper indigo lighten-4\" >
                    <a href=\"#!\" class=\"brand-logo center\">BANROQUE</a>
                    <ul class=\"left hide-on-med-and-down\">
                        <li class=\"active\"><a href=\"primera\">INICIO</a></li>

                    </ul>
                </div>


            </nav>";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_9b58ea1890605cb50fc5eab61e39ff5ca7e555ebead0ee8c87b1a6bdc27627a8->leave($__internal_9b58ea1890605cb50fc5eab61e39ff5ca7e555ebead0ee8c87b1a6bdc27627a8_prof);

        
        $__internal_ba7be13eb1aa93099516deafbec69eca3b567cd68c84eca998cb4e123a2b9482->leave($__internal_ba7be13eb1aa93099516deafbec69eca3b567cd68c84eca998cb4e123a2b9482_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_1d30e0971d04fb1d090fbda7192dac069754a9c8010b1b4e3dfffe4c66eb373f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d30e0971d04fb1d090fbda7192dac069754a9c8010b1b4e3dfffe4c66eb373f->enter($__internal_1d30e0971d04fb1d090fbda7192dac069754a9c8010b1b4e3dfffe4c66eb373f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_86744a573788e1bd685944bbffd2b4e1d2d8a01567d3ec1dd98d10c55acaaf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86744a573788e1bd685944bbffd2b4e1d2d8a01567d3ec1dd98d10c55acaaf02->enter($__internal_86744a573788e1bd685944bbffd2b4e1d2d8a01567d3ec1dd98d10c55acaaf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_86744a573788e1bd685944bbffd2b4e1d2d8a01567d3ec1dd98d10c55acaaf02->leave($__internal_86744a573788e1bd685944bbffd2b4e1d2d8a01567d3ec1dd98d10c55acaaf02_prof);

        
        $__internal_1d30e0971d04fb1d090fbda7192dac069754a9c8010b1b4e3dfffe4c66eb373f->leave($__internal_1d30e0971d04fb1d090fbda7192dac069754a9c8010b1b4e3dfffe4c66eb373f_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dcd04a57e7700a732f198e372c91fce5bed8269137721f97e98e61b0bb72dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcd04a57e7700a732f198e372c91fce5bed8269137721f97e98e61b0bb72dac->enter($__internal_0dcd04a57e7700a732f198e372c91fce5bed8269137721f97e98e61b0bb72dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b62c5742ad05a5e992fe4b74801fe14ed3af4272f097e92273ec90f7de13333a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62c5742ad05a5e992fe4b74801fe14ed3af4272f097e92273ec90f7de13333a->enter($__internal_b62c5742ad05a5e992fe4b74801fe14ed3af4272f097e92273ec90f7de13333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.7.0.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/DataTables.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/all.js"), "html", null, true);
        echo "\"></script>";
        // line 39
        $this->loadTemplate(":js:init.js.twig", "base.html.twig", 39)->display($context);
        
        $__internal_b62c5742ad05a5e992fe4b74801fe14ed3af4272f097e92273ec90f7de13333a->leave($__internal_b62c5742ad05a5e992fe4b74801fe14ed3af4272f097e92273ec90f7de13333a_prof);

        
        $__internal_0dcd04a57e7700a732f198e372c91fce5bed8269137721f97e98e61b0bb72dac->leave($__internal_0dcd04a57e7700a732f198e372c91fce5bed8269137721f97e98e61b0bb72dac_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 39,  180 => 38,  176 => 37,  172 => 36,  167 => 35,  158 => 34,  132 => 29,  120 => 17,  111 => 16,  99 => 9,  95 => 8,  90 => 7,  81 => 6,  63 => 5,  51 => 41,  49 => 34,  47 => 16,  41 => 13,  39 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('css/materialize.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('css/general.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{ asset('css/css-dataTables.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            <nav>
                <div class=\"nav-wrapper indigo lighten-4\" >
                    <a href=\"#!\" class=\"brand-logo center\">BANROQUE</a>
                    <ul class=\"left hide-on-med-and-down\">
                        <li class=\"active\"><a href=\"primera\">INICIO</a></li>

                    </ul>
                </div>


            </nav>

            {% block content %}

            {% endblock %}
        {% endblock %}

        {% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.7.0.js') }}\"></script>
            <script type=\"text/javascript\"  src=\"{{ asset('js/materialize.js') }}\"></script>
            <script type=\"text/javascript\"  src=\"{{ asset('js/DataTables.js') }}\"></script>
            <script type=\"text/javascript\"  src=\"{{ asset('js/all.js') }}\"></script>
            {% include ':js:init.js.twig' %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\app\\Resources\\views\\base.html.twig");
    }
}
