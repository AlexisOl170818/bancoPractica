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
        $__internal_3adf2871cb57545b9f5014ec519a333ab280eb959259e60c1ac0dcf34d11651f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adf2871cb57545b9f5014ec519a333ab280eb959259e60c1ac0dcf34d11651f->enter($__internal_3adf2871cb57545b9f5014ec519a333ab280eb959259e60c1ac0dcf34d11651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaprimeraBundle:Default:index.html.twig"));

        $__internal_665e0c2fec044c044e2ffdabbc203751373434e8bf3f5e68beb3d998f290a085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665e0c2fec044c044e2ffdabbc203751373434e8bf3f5e68beb3d998f290a085->enter($__internal_665e0c2fec044c044e2ffdabbc203751373434e8bf3f5e68beb3d998f290a085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaprimeraBundle:Default:index.html.twig"));

        // line 2
        $context["asset_path"] = "resources/prueba/primeraBundle/";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3adf2871cb57545b9f5014ec519a333ab280eb959259e60c1ac0dcf34d11651f->leave($__internal_3adf2871cb57545b9f5014ec519a333ab280eb959259e60c1ac0dcf34d11651f_prof);

        
        $__internal_665e0c2fec044c044e2ffdabbc203751373434e8bf3f5e68beb3d998f290a085->leave($__internal_665e0c2fec044c044e2ffdabbc203751373434e8bf3f5e68beb3d998f290a085_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b46efacb93779db4210a250f7ff49e15a6a9ef132ecd113238ea2ae5bef15e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b46efacb93779db4210a250f7ff49e15a6a9ef132ecd113238ea2ae5bef15e3->enter($__internal_2b46efacb93779db4210a250f7ff49e15a6a9ef132ecd113238ea2ae5bef15e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6596bc4ce4858c57b7b7d2c779157f12168a1c0c5928c2bd6e7531cd95a84ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6596bc4ce4858c57b7b7d2c779157f12168a1c0c5928c2bd6e7531cd95a84ab1->enter($__internal_6596bc4ce4858c57b7b7d2c779157f12168a1c0c5928c2bd6e7531cd95a84ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"card \">
        <div class=\"card-content indigo lighten-4\">
            <h1 class=\"center\">OPCIONES</h1>
            <div class=\"row\">
                <form class=\"col s12\">
                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            <input  id=\"ncuenta\" type=\"text\" class=\"validate\">
                            <label for=\"ncuenta \" class=\"white-text\">Ingresa el numero de cuenta</label>
                            <a id=\"cargarInformacion\"class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">refresh</i>Cargar informacion</a>
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
                    <form class=\"col s12\">

                            <div class=\"input-field col  s12\">
                                <i class=\"material-icons prefix\">attach_money
                                </i>
                                <input id=\"importeRetiro\" type=\"number\" class=\"validate\">
                                <label for=\"importeRetiro\">Importe</label>
                            </div>
                        <a id=\"retirar\"class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">call_made</i>Retirar</a>

                    </form>
                </div>

            </div>
            <div id=\"deposito\">
                <div id=\"retiro\" class=\"background-white\"><h4>Depositar</h4>
                    <div class=\"row\">
                        <form class=\"col s12\" id=\"\">

                            <div class=\"input-field col  s12\">
                                <i class=\"material-icons prefix\">attach_money
                                </i>
                                <input id=\"importeAbono\" type=\"number\" class=\"validate\">
                                <label for=\"importeAbono\">Importe</label>
                            </div>
                            <a id=\"depositar\" class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">call_received</i>DEPOSITAR</a>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>";
        
        $__internal_6596bc4ce4858c57b7b7d2c779157f12168a1c0c5928c2bd6e7531cd95a84ab1->leave($__internal_6596bc4ce4858c57b7b7d2c779157f12168a1c0c5928c2bd6e7531cd95a84ab1_prof);

        
        $__internal_2b46efacb93779db4210a250f7ff49e15a6a9ef132ecd113238ea2ae5bef15e3->leave($__internal_2b46efacb93779db4210a250f7ff49e15a6a9ef132ecd113238ea2ae5bef15e3_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba3eca198b0f35622b247923f583e123fa1db89fd8ef9569f0731ea0fc294529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3eca198b0f35622b247923f583e123fa1db89fd8ef9569f0731ea0fc294529->enter($__internal_ba3eca198b0f35622b247923f583e123fa1db89fd8ef9569f0731ea0fc294529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f5b2d3b4fa9146ede7b7bb4e66e66834621db4a06b5131dc0583c4bc248a3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5b2d3b4fa9146ede7b7bb4e66e66834621db4a06b5131dc0583c4bc248a3b2->enter($__internal_7f5b2d3b4fa9146ede7b7bb4e66e66834621db4a06b5131dc0583c4bc248a3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["asset_path"] ?? $this->getContext($context, "asset_path")) . "js/primeraBundle.js")), "html", null, true);
        echo "\"></script>
    <script>
        var url_getMovimientos= \"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getMovimientos");
        echo "\"
        var url_doAbono= \"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doAbono");
        echo "\"
        var url_doRetiro= \"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doRetiro");
        echo "\"

    </script>";
        
        $__internal_7f5b2d3b4fa9146ede7b7bb4e66e66834621db4a06b5131dc0583c4bc248a3b2->leave($__internal_7f5b2d3b4fa9146ede7b7bb4e66e66834621db4a06b5131dc0583c4bc248a3b2_prof);

        
        $__internal_ba3eca198b0f35622b247923f583e123fa1db89fd8ef9569f0731ea0fc294529->leave($__internal_ba3eca198b0f35622b247923f583e123fa1db89fd8ef9569f0731ea0fc294529_prof);

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
        return array (  172 => 98,  168 => 97,  164 => 96,  159 => 94,  155 => 93,  146 => 92,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
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
        <div class=\"card-content indigo lighten-4\">
            <h1 class=\"center\">OPCIONES</h1>
            <div class=\"row\">
                <form class=\"col s12\">
                    <div class=\"row\">
                        <div class=\"input-field col s6\">
                            <input  id=\"ncuenta\" type=\"text\" class=\"validate\">
                            <label for=\"ncuenta \" class=\"white-text\">Ingresa el numero de cuenta</label>
                            <a id=\"cargarInformacion\"class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">refresh</i>Cargar informacion</a>
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
                    <form class=\"col s12\">

                            <div class=\"input-field col  s12\">
                                <i class=\"material-icons prefix\">attach_money
                                </i>
                                <input id=\"importeRetiro\" type=\"number\" class=\"validate\">
                                <label for=\"importeRetiro\">Importe</label>
                            </div>
                        <a id=\"retirar\"class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">call_made</i>Retirar</a>

                    </form>
                </div>

            </div>
            <div id=\"deposito\">
                <div id=\"retiro\" class=\"background-white\"><h4>Depositar</h4>
                    <div class=\"row\">
                        <form class=\"col s12\" id=\"\">

                            <div class=\"input-field col  s12\">
                                <i class=\"material-icons prefix\">attach_money
                                </i>
                                <input id=\"importeAbono\" type=\"number\" class=\"validate\">
                                <label for=\"importeAbono\">Importe</label>
                            </div>
                            <a id=\"depositar\" class=\"waves-effect waves-light btn\"><i class=\"material-icons left\">call_received</i>DEPOSITAR</a>

                        </form>
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
