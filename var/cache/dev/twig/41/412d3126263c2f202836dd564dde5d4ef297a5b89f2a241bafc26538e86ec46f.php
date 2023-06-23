<?php

/* PruebaprimeraBundle:Default:index.html.twig */
class __TwigTemplate_78c91b045db4c90eaa470e81d53763be0e9cfe41eeeeb34ed7177bed122ba049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PruebaprimeraBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9c3bb5980da4eacbda5a5a8d4e7e0d4f77be7e5a22aa62ef2920e2826c0feef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c3bb5980da4eacbda5a5a8d4e7e0d4f77be7e5a22aa62ef2920e2826c0feef->enter($__internal_e9c3bb5980da4eacbda5a5a8d4e7e0d4f77be7e5a22aa62ef2920e2826c0feef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaprimeraBundle:Default:index.html.twig"));

        $__internal_bfcd8515017035c8c96f1b06737ccf66bdfe371e9f45fc92f747eef4ad11cc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcd8515017035c8c96f1b06737ccf66bdfe371e9f45fc92f747eef4ad11cc67->enter($__internal_bfcd8515017035c8c96f1b06737ccf66bdfe371e9f45fc92f747eef4ad11cc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaprimeraBundle:Default:index.html.twig"));

        // line 2
        $context["asset_path"] = "resources/prueba/primeraBundle/";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9c3bb5980da4eacbda5a5a8d4e7e0d4f77be7e5a22aa62ef2920e2826c0feef->leave($__internal_e9c3bb5980da4eacbda5a5a8d4e7e0d4f77be7e5a22aa62ef2920e2826c0feef_prof);

        
        $__internal_bfcd8515017035c8c96f1b06737ccf66bdfe371e9f45fc92f747eef4ad11cc67->leave($__internal_bfcd8515017035c8c96f1b06737ccf66bdfe371e9f45fc92f747eef4ad11cc67_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e657a4ae662034e5650589a3e5e46751eecf99eeeecd8f8175304a5707cbc081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e657a4ae662034e5650589a3e5e46751eecf99eeeecd8f8175304a5707cbc081->enter($__internal_e657a4ae662034e5650589a3e5e46751eecf99eeeecd8f8175304a5707cbc081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_31cd9d76ac81a9a977fe472a797769e10d87510046ddc93ff9d0abefbdec0ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cd9d76ac81a9a977fe472a797769e10d87510046ddc93ff9d0abefbdec0ffe->enter($__internal_31cd9d76ac81a9a977fe472a797769e10d87510046ddc93ff9d0abefbdec0ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"card \">
        <div class=\"card-content indigo lighten-4 \">
            <h1 class=\"center\">OPCIONES</h1>
            <div class=\"row\">
                <form class=\"col s12\" id=\"#form-cuenta\">
                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            <input  id=\"ncuenta\" type=\"number\" class=\"validate\">
                            <label for=\"ncuenta \" class=\"white-text\">Ingresa el numero de cuenta</label>

                            <span id=\"errorCuenta\" class=\"error-message\"></span>

                        </div>

                    </div>
                    <div class=\"row\">
                        <div class=\"col\">
                            <a id=\"cargarInformacion\"class=\"waves-effect waves-light btn rounded-form\"><i class=\"material-icons left\">refresh</i>Cargar informacion</a>
                        </div>
                    </div>


                </form>
            </div>
            <h4 id=\"saldoDisponible\"></h4>
        </div>
        <div class=\"card-tabs \">
            <ul class=\"tabs tabs-fixed-width \">
                <li class=\"tab \"><a class=\"\" href=\"#movimientos\"><i class=\"material-icons\">view_headline</i>Historial de movimientos</a></li>
                <li class=\"tab\"><a class=\"active\" href=\"#retiro\"><i class=\"material-icons\">arrow_upward</i>Retirar</a></li>
                <li class=\"tab\"><a class=\"\" href=\"#deposito\"><i class=\"material-icons\">arrow_downward</i>Depositar</a></li>
            </ul>
        </div>
        <div class=\"card-content grey lighten-4\">
            <div id=\"movimientos\">
                <table class='table striped bordered hover' id=\"historyOfMoves\">
                    <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Numero de cuenta</th>
                        <th>Importe</th>
                        <th>Fecha</th>
                        <th>Tipo</th>

                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

            </div>
            <div id=\"retiro\" class=\"background-white\"><h4>Retira</h4>
                <div class=\"row\">
                    <form class=\"col s12\" id=\"form-retiro\">

                            <div class=\"input-field col  s12\">
                                <i class=\"material-icons prefix\">attach_money
                                </i>
                                <input id=\"importeRetiro\" type=\"number\" class=\"validate\" step=\"any\">
                                <label for=\"importeRetiro\">Importe</label>

                            </div>

                        <span id=\"errorRetiro\" class=\"error-message\"></span>
                    </form>

                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <a id=\"retirar\"class=\"waves-effect waves-light btn \"><i class=\"material-icons left\">call_made</i>Retirar</a>
                    </div>
                </div>

            </div>
            <div id=\"deposito\">
                <div id=\"retiro\" class=\"background-white\"><h4>Depositar</h4>
                    <div class=\"row\">
                        <form class=\"col s12\" id=\"form-abono\">

                            <div class=\"input-field col  s12\">
                                <i class=\"material-icons prefix\">attach_money
                                </i>
                                <input id=\"importeAbono\" type=\"number\" class=\"validate\" step=\"any\">
                                <label for=\"importeAbono\">Importe</label>

                            </div>
                            <span id=\"errorAbono\" class=\"error-message\"></span>
                        </form>
                    </div>
                    <div class=\"row\">
                        <div class=\"col\">
                            <a id=\"depositar\" class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">call_received</i>DEPOSITAR</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>";
        
        $__internal_31cd9d76ac81a9a977fe472a797769e10d87510046ddc93ff9d0abefbdec0ffe->leave($__internal_31cd9d76ac81a9a977fe472a797769e10d87510046ddc93ff9d0abefbdec0ffe_prof);

        
        $__internal_e657a4ae662034e5650589a3e5e46751eecf99eeeecd8f8175304a5707cbc081->leave($__internal_e657a4ae662034e5650589a3e5e46751eecf99eeeecd8f8175304a5707cbc081_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d66f6f2c73e476151f6091c27caed4ca84ba02788f0ab3d0d6891e64c2742294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66f6f2c73e476151f6091c27caed4ca84ba02788f0ab3d0d6891e64c2742294->enter($__internal_d66f6f2c73e476151f6091c27caed4ca84ba02788f0ab3d0d6891e64c2742294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_68de6dfe981fbbaaf0e52b08e5d5e5d8a3515ef0d074f108bc864111a6e50a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68de6dfe981fbbaaf0e52b08e5d5e5d8a3515ef0d074f108bc864111a6e50a68->enter($__internal_68de6dfe981fbbaaf0e52b08e5d5e5d8a3515ef0d074f108bc864111a6e50a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["asset_path"] ?? $this->getContext($context, "asset_path")) . "js/primeraBundle.js")), "html", null, true);
        echo "\"></script>
    <script>
        var url_getMovimientos= \"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getMovimientos");
        echo "\"
        var url_doAbono= \"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doAbono");
        echo "\"
        var url_doRetiro= \"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doRetiro");
        echo "\"

    </script>";
        
        $__internal_68de6dfe981fbbaaf0e52b08e5d5e5d8a3515ef0d074f108bc864111a6e50a68->leave($__internal_68de6dfe981fbbaaf0e52b08e5d5e5d8a3515ef0d074f108bc864111a6e50a68_prof);

        
        $__internal_d66f6f2c73e476151f6091c27caed4ca84ba02788f0ab3d0d6891e64c2742294->leave($__internal_d66f6f2c73e476151f6091c27caed4ca84ba02788f0ab3d0d6891e64c2742294_prof);

    }

    public function getTemplateName()
    {
        return "PruebaprimeraBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 119,  189 => 118,  185 => 117,  180 => 115,  176 => 114,  167 => 113,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% set asset_path = 'resources/prueba/primeraBundle/' %}

{% block content%}
<div class=\"container\">
    <div class=\"card \">
        <div class=\"card-content indigo lighten-4 \">
            <h1 class=\"center\">OPCIONES</h1>
            <div class=\"row\">
                <form class=\"col s12\" id=\"#form-cuenta\">
                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            <input  id=\"ncuenta\" type=\"number\" class=\"validate\">
                            <label for=\"ncuenta \" class=\"white-text\">Ingresa el numero de cuenta</label>

                            <span id=\"errorCuenta\" class=\"error-message\"></span>

                        </div>

                    </div>
                    <div class=\"row\">
                        <div class=\"col\">
                            <a id=\"cargarInformacion\"class=\"waves-effect waves-light btn rounded-form\"><i class=\"material-icons left\">refresh</i>Cargar informacion</a>
                        </div>
                    </div>


                </form>
            </div>
            <h4 id=\"saldoDisponible\"></h4>
        </div>
        <div class=\"card-tabs \">
            <ul class=\"tabs tabs-fixed-width \">
                <li class=\"tab \"><a class=\"\" href=\"#movimientos\"><i class=\"material-icons\">view_headline</i>Historial de movimientos</a></li>
                <li class=\"tab\"><a class=\"active\" href=\"#retiro\"><i class=\"material-icons\">arrow_upward</i>Retirar</a></li>
                <li class=\"tab\"><a class=\"\" href=\"#deposito\"><i class=\"material-icons\">arrow_downward</i>Depositar</a></li>
            </ul>
        </div>
        <div class=\"card-content grey lighten-4\">
            <div id=\"movimientos\">
                <table class='table striped bordered hover' id=\"historyOfMoves\">
                    <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Numero de cuenta</th>
                        <th>Importe</th>
                        <th>Fecha</th>
                        <th>Tipo</th>

                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

            </div>
            <div id=\"retiro\" class=\"background-white\"><h4>Retira</h4>
                <div class=\"row\">
                    <form class=\"col s12\" id=\"form-retiro\">

                            <div class=\"input-field col  s12\">
                                <i class=\"material-icons prefix\">attach_money
                                </i>
                                <input id=\"importeRetiro\" type=\"number\" class=\"validate\" step=\"any\">
                                <label for=\"importeRetiro\">Importe</label>

                            </div>

                        <span id=\"errorRetiro\" class=\"error-message\"></span>
                    </form>

                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <a id=\"retirar\"class=\"waves-effect waves-light btn \"><i class=\"material-icons left\">call_made</i>Retirar</a>
                    </div>
                </div>

            </div>
            <div id=\"deposito\">
                <div id=\"retiro\" class=\"background-white\"><h4>Depositar</h4>
                    <div class=\"row\">
                        <form class=\"col s12\" id=\"form-abono\">

                            <div class=\"input-field col  s12\">
                                <i class=\"material-icons prefix\">attach_money
                                </i>
                                <input id=\"importeAbono\" type=\"number\" class=\"validate\" step=\"any\">
                                <label for=\"importeAbono\">Importe</label>

                            </div>
                            <span id=\"errorAbono\" class=\"error-message\"></span>
                        </form>
                    </div>
                    <div class=\"row\">
                        <div class=\"col\">
                            <a id=\"depositar\" class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">call_received</i>DEPOSITAR</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

{%endblock%}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset(asset_path ~ 'js/primeraBundle.js') }}\"></script>
    <script>
        var url_getMovimientos= \"{{ path('getMovimientos') }}\"
        var url_doAbono= \"{{ path('doAbono') }}\"
        var url_doRetiro= \"{{ path('doRetiro') }}\"

    </script>


{% endblock %}


", "PruebaprimeraBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\src\\Prueba\\primeraBundle/Resources/views/Default/index.html.twig");
    }
}
