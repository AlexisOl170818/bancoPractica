<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_e7f57e6b262653066819166c244b13b9e9c31ff018b65202fe36357242b7ad0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
        $__internal_25a2bead3f0efd1bd7021d08eec754809685f24617addf9cb6c51d16f8ca14f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a2bead3f0efd1bd7021d08eec754809685f24617addf9cb6c51d16f8ca14f1->enter($__internal_25a2bead3f0efd1bd7021d08eec754809685f24617addf9cb6c51d16f8ca14f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_7298657c2de73cc4dd1cd0b743c3f45756576cce1c7d25390d47f6ae74f0ba9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7298657c2de73cc4dd1cd0b743c3f45756576cce1c7d25390d47f6ae74f0ba9d->enter($__internal_7298657c2de73cc4dd1cd0b743c3f45756576cce1c7d25390d47f6ae74f0ba9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a2bead3f0efd1bd7021d08eec754809685f24617addf9cb6c51d16f8ca14f1->leave($__internal_25a2bead3f0efd1bd7021d08eec754809685f24617addf9cb6c51d16f8ca14f1_prof);

        
        $__internal_7298657c2de73cc4dd1cd0b743c3f45756576cce1c7d25390d47f6ae74f0ba9d->leave($__internal_7298657c2de73cc4dd1cd0b743c3f45756576cce1c7d25390d47f6ae74f0ba9d_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37e8265a175b6c79375f47c71ac89999395ce4de99605a6fff92dc9f48280a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e8265a175b6c79375f47c71ac89999395ce4de99605a6fff92dc9f48280a6d->enter($__internal_37e8265a175b6c79375f47c71ac89999395ce4de99605a6fff92dc9f48280a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_750a5977a383aec83f76a9933ea3b5449c414eeda28bbf85139a94203e8ad0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750a5977a383aec83f76a9933ea3b5449c414eeda28bbf85139a94203e8ad0df->enter($__internal_750a5977a383aec83f76a9933ea3b5449c414eeda28bbf85139a94203e8ad0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) {
            // line 7
            ob_start();
            // line 8
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : ("yellow"));
            // line 9
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())))), "html", null, true);
            echo "</span>";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countwarnings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countwarnings", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        }
        
        $__internal_750a5977a383aec83f76a9933ea3b5449c414eeda28bbf85139a94203e8ad0df->leave($__internal_750a5977a383aec83f76a9933ea3b5449c414eeda28bbf85139a94203e8ad0df_prof);

        
        $__internal_37e8265a175b6c79375f47c71ac89999395ce4de99605a6fff92dc9f48280a6d->leave($__internal_37e8265a175b6c79375f47c71ac89999395ce4de99605a6fff92dc9f48280a6d_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe5320784b1c3402f60e1a45ff4f28fe7e61312e415419619859ff03d1c72359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5320784b1c3402f60e1a45ff4f28fe7e61312e415419619859ff03d1c72359->enter($__internal_fe5320784b1c3402f60e1a45ff4f28fe7e61312e415419619859ff03d1c72359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_236e79f45ddad449f786a2ef48cc1da0b3f6a19aa7216131a04f4a4350c38170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236e79f45ddad449f786a2ef48cc1da0b3f6a19aa7216131a04f4a4350c38170->enter($__internal_236e79f45ddad449f786a2ef48cc1da0b3f6a19aa7216131a04f4a4350c38170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : (((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) ? ("warning") : (""))));
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>";
        // line 38
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())))), "html", null, true);
            echo "</span>
            </span>";
        }
        // line 43
        echo "    </span>";
        
        $__internal_236e79f45ddad449f786a2ef48cc1da0b3f6a19aa7216131a04f4a4350c38170->leave($__internal_236e79f45ddad449f786a2ef48cc1da0b3f6a19aa7216131a04f4a4350c38170_prof);

        
        $__internal_fe5320784b1c3402f60e1a45ff4f28fe7e61312e415419619859ff03d1c72359->leave($__internal_fe5320784b1c3402f60e1a45ff4f28fe7e61312e415419619859ff03d1c72359_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cfa7d7b2ba631362b0f64c19bec23ce11614b1b8cabeb21f00d321e97f70c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfa7d7b2ba631362b0f64c19bec23ce11614b1b8cabeb21f00d321e97f70c1a->enter($__internal_9cfa7d7b2ba631362b0f64c19bec23ce11614b1b8cabeb21f00d321e97f70c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ef3756efc2064fb6c3a2aa709961e0dc49ab4a3ca36e8dd6621fa4c09fe1d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef3756efc2064fb6c3a2aa709961e0dc49ab4a3ca36e8dd6621fa4c09fe1d21->enter($__internal_0ef3756efc2064fb6c3a2aa709961e0dc49ab4a3ca36e8dd6621fa4c09fe1d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>";
        // line 49
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>";
        } else {
            // line 55
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 57
                if (($this->getAttribute($context["log"], "scream", array(), "any", true, true) &&  !$this->getAttribute($context["log"], "scream", array()))) {
                    // line 58
                    $context["deprecation_logs"] = twig_array_merge(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")), array(0 => $context["log"]));
                } elseif (($this->getAttribute(                // line 59
$context["log"], "scream", array(), "any", true, true) && $this->getAttribute($context["log"], "scream", array()))) {
                    // line 60
                    $context["silenced_logs"] = twig_array_merge(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")), array(0 => $context["log"]));
                } elseif (($this->getAttribute(                // line 61
$context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 62
                    $context["debug_logs"] = twig_array_merge(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")), array(0 => $context["log"]));
                } else {
                    // line 64
                    $context["info_and_error_logs"] = twig_array_merge(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")), array(0 => $context["log"]));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())) ? ("warning") : (""))));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (twig_length_filter($this->env, ($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs"))))), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">";
            // line 73
            if (twig_test_empty(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")))) {
                // line 74
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>";
            } else {
                // line 78
                echo $context["helper"]->getrender_table(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")), "info", true);
            }
            // line 80
            echo "                </div>
            </div>

            <div class=\"tab\">";
            // line 86
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">";
            // line 89
            if (twig_test_empty(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")))) {
                // line 90
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>";
            } else {
                // line 94
                echo $context["helper"]->getrender_table(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")), "deprecation", false, true);
            }
            // line 96
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 100
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["debug_logs"] ?? $this->getContext($context, "debug_logs"))), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">";
            // line 103
            if (twig_test_empty(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")))) {
                // line 104
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>";
            } else {
                // line 108
                echo $context["helper"]->getrender_table(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")), "debug");
            }
            // line 110
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced PHP Notices<span class=\"badge\">";
            // line 114
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">";
            // line 117
            if (twig_test_empty(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")))) {
                // line 118
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>";
            } else {
                // line 122
                echo $context["helper"]->getrender_table(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")), "silenced");
            }
            // line 124
            echo "                </div>
            </div>

        </div>";
        }
        
        $__internal_0ef3756efc2064fb6c3a2aa709961e0dc49ab4a3ca36e8dd6621fa4c09fe1d21->leave($__internal_0ef3756efc2064fb6c3a2aa709961e0dc49ab4a3ca36e8dd6621fa4c09fe1d21_prof);

        
        $__internal_9cfa7d7b2ba631362b0f64c19bec23ce11614b1b8cabeb21f00d321e97f70c1a->leave($__internal_9cfa7d7b2ba631362b0f64c19bec23ce11614b1b8cabeb21f00d321e97f70c1a_prof);

    }

    // line 131
    public function getrender_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ab603e6b503a83a253db2009f159698d0cca59743e62ca6ccace7d931fe3b550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ab603e6b503a83a253db2009f159698d0cca59743e62ca6ccace7d931fe3b550->enter($__internal_ab603e6b503a83a253db2009f159698d0cca59743e62ca6ccace7d931fe3b550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_f3fc647bb42fca52d675b81ab434ba49d2e2616723bc627a3cb5b3aa6bdc0540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f3fc647bb42fca52d675b81ab434ba49d2e2616723bc627a3cb5b3aa6bdc0540->enter($__internal_f3fc647bb42fca52d675b81ab434ba49d2e2616723bc627a3cb5b3aa6bdc0540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 132
            $context["helper"] = $this;
            // line 133
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? $this->getContext($context, "logs"))), "channel", array(), "any", true, true);
            // line 134
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 138
            echo ((($context["show_level"] ?? $this->getContext($context, "show_level"))) ? ("Level") : ("Time"));
            echo "</th>";
            // line 139
            if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                echo "<th>Channel</th>";
            }
            // line 140
            echo "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 146
                $context["css_class"] = ((($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) ? ("") : (((twig_in_filter($this->getAttribute(                // line 147
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((($this->getAttribute(                // line 148
$context["log"], "priorityName", array()) == "WARNING")) ? ("status-warning") : (""))))));
                // line 150
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? $this->getContext($context, "css_class")), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\" nowrap>";
                // line 152
                if (($context["show_level"] ?? $this->getContext($context, "show_level"))) {
                    // line 153
                    echo "                            <span class=\"colored text-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>";
                }
                // line 155
                echo "                        <span class=\"text-muted newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>";
                // line 158
                if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                    // line 159
                    echo "                        <td class=\"font-normal text-small text-bold\" nowrap>";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                    // line 161
                    if (($this->getAttribute($context["log"], "errorCount", array(), "any", true, true) && ($this->getAttribute($context["log"], "errorCount", array()) > 1))) {
                        // line 162
                        echo "                                <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "errorCount", array()), "html", null, true);
                        echo " times)</span>";
                    }
                    // line 164
                    echo "                        </td>";
                }
                // line 167
                echo "
                    <td class=\"font-normal\">";
                // line 168
                echo $context["helper"]->getrender_log_message(($context["category"] ?? $this->getContext($context, "category")), $this->getAttribute($context["loop"], "index", array()), $context["log"], ($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation")));
                echo "</td>
                </tr>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "        </tbody>
    </table>";
            
            $__internal_f3fc647bb42fca52d675b81ab434ba49d2e2616723bc627a3cb5b3aa6bdc0540->leave($__internal_f3fc647bb42fca52d675b81ab434ba49d2e2616723bc627a3cb5b3aa6bdc0540_prof);

            
            $__internal_ab603e6b503a83a253db2009f159698d0cca59743e62ca6ccace7d931fe3b550->leave($__internal_ab603e6b503a83a253db2009f159698d0cca59743e62ca6ccace7d931fe3b550_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getrender_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_38cde6ba104594e2974b1eb87da5d3444e376484158fd74138e4a5ce07d9b125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_38cde6ba104594e2974b1eb87da5d3444e376484158fd74138e4a5ce07d9b125->enter($__internal_38cde6ba104594e2974b1eb87da5d3444e376484158fd74138e4a5ce07d9b125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_2cc45b60838f033dcdf96eae622d528d794342f0aa8a972ccc75615b15d264dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2cc45b60838f033dcdf96eae622d528d794342f0aa8a972ccc75615b15d264dd->enter($__internal_2cc45b60838f033dcdf96eae622d528d794342f0aa8a972ccc75615b15d264dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 176
            if (($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) {
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()), "html", null, true);
                // line 179
                $context["context_id"] = ((("context-" . ($context["category"] ?? $this->getContext($context, "category"))) . "-") . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                // line 180
                echo "
        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 182
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>

            <div id=\"";
                // line 184
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">";
                // line 185
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()), "seek", array(0 => "exception"), "method"), "seek", array(0 => "\000Exception\000trace"), "method"), 2));
                echo "
            </div>
        </span>";
            } elseif (($this->getAttribute(            // line 188
($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array())))) {
                // line 189
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()), $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()));
                // line 191
                $context["context_id"] = ((("context-" . ($context["category"] ?? $this->getContext($context, "category"))) . "-") . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                // line 192
                echo "
        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 194
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>

             <div id=\"";
                // line 196
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">";
                // line 197
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()), 1));
                echo "
            </div>
        </span>";
            } else {
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()), "html", null, true);
            }
            
            $__internal_2cc45b60838f033dcdf96eae622d528d794342f0aa8a972ccc75615b15d264dd->leave($__internal_2cc45b60838f033dcdf96eae622d528d794342f0aa8a972ccc75615b15d264dd_prof);

            
            $__internal_38cde6ba104594e2974b1eb87da5d3444e376484158fd74138e4a5ce07d9b125->leave($__internal_38cde6ba104594e2974b1eb87da5d3444e376484158fd74138e4a5ce07d9b125_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 201,  497 => 197,  494 => 196,  489 => 194,  485 => 192,  483 => 191,  481 => 189,  479 => 188,  474 => 185,  471 => 184,  466 => 182,  462 => 180,  460 => 179,  458 => 177,  456 => 176,  435 => 175,  413 => 171,  397 => 168,  394 => 167,  391 => 164,  386 => 162,  384 => 161,  382 => 160,  380 => 159,  378 => 158,  373 => 155,  368 => 153,  366 => 152,  361 => 150,  359 => 148,  358 => 147,  357 => 146,  340 => 145,  334 => 140,  330 => 139,  327 => 138,  321 => 134,  319 => 133,  317 => 132,  296 => 131,  282 => 124,  279 => 122,  274 => 118,  272 => 117,  267 => 114,  261 => 110,  258 => 108,  253 => 104,  251 => 103,  246 => 100,  240 => 96,  237 => 94,  232 => 90,  230 => 89,  222 => 86,  217 => 80,  214 => 78,  209 => 74,  207 => 73,  200 => 70,  195 => 67,  188 => 64,  185 => 62,  183 => 61,  181 => 60,  179 => 59,  177 => 58,  175 => 57,  171 => 56,  169 => 55,  164 => 50,  162 => 49,  160 => 47,  151 => 46,  141 => 43,  136 => 40,  133 => 39,  131 => 38,  127 => 36,  121 => 35,  112 => 34,  101 => 30,  94 => 26,  84 => 21,  74 => 16,  70 => 14,  68 => 13,  64 => 10,  60 => 9,  58 => 8,  56 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : 'yellow' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations or collector.countwarnings ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.logs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {# sort collected logs in groups #}
        {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}
        {% for log in collector.logs %}
            {% if log.scream is defined and not log.scream %}
                {% set deprecation_logs = deprecation_logs|merge([log]) %}
            {% elseif log.scream is defined and log.scream %}
                {% set silenced_logs = silenced_logs|merge([log]) %}
            {% elseif log.priorityName == 'DEBUG' %}
                {% set debug_logs = debug_logs|merge([log]) %}
            {% else %}
                {% set info_and_error_logs = info_and_error_logs|merge([log]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' }}\">{{ collector.counterrors ?: info_and_error_logs|length }}</span></h3>

                <div class=\"tab-content\">
                    {% if info_and_error_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(info_and_error_logs, 'info', true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                {# 'deprecation_logs|length' is not used because deprecations are
                now grouped and the group count doesn't match the message count #}
                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span></h3>

                <div class=\"tab-content\">
                    {% if deprecation_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(deprecation_logs, 'deprecation', false, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">{{ debug_logs|length }}</span></h3>

                <div class=\"tab-content\">
                    {% if debug_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(debug_logs, 'debug') }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Silenced PHP Notices<span class=\"badge\">{{ collector.countscreams|default(0) }}</span></h3>

                <div class=\"tab-content\">
                    {% if silenced_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(silenced_logs, 'silenced') }}
                    {% endif %}
                </div>
            </div>

        </div>
    {% endif %}
{% endblock %}

{% macro render_table(logs, category = '', show_level = false, is_deprecation = false) %}
    {% import _self as helper %}
    {% set channel_is_defined = (logs|first).channel is defined %}

    <table class=\"logs\">
        <thead>
            <tr>
                <th>{{ show_level ? 'Level' : 'Time' }}</th>
                {% if channel_is_defined %}<th>Channel</th>{% endif %}
                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            {% for log in logs %}
                {% set css_class = is_deprecation ? ''
                    : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'
                    : log.priorityName == 'WARNING' ? 'status-warning'
                %}
                <tr class=\"{{ css_class }}\">
                    <td class=\"font-normal text-small\" nowrap>
                        {% if show_level %}
                            <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                        {% endif %}
                        <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
                    </td>

                    {% if channel_is_defined %}
                        <td class=\"font-normal text-small text-bold\" nowrap>
                            {{ log.channel }}
                            {% if log.errorCount is defined and log.errorCount > 1 %}
                                <span class=\"text-muted\">({{ log.errorCount }} times)</span>
                            {% endif %}
                        </td>

                    {% endif %}

                    <td class=\"font-normal\">{{ helper.render_log_message(category, loop.index, log, is_deprecation) }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_log_message(category, log_index, log, is_deprecation = false) %}
    {% if is_deprecation %}
        {{ log.message }}

        {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}

        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>

            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.seek('exception').seek('\\0Exception\\0trace'), maxDepth=2) }}
            </div>
        </span>
    {% elseif log.context is defined and log.context is not empty %}
        {{ profiler_dump_log(log.message, log.context) }}

        {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}

        <span class=\"metadata\">
             <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>

             <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context, maxDepth=1) }}
            </div>
        </span>
    {% else %}
        {{ log.message }}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "C:\\xampp\\htdocs\\symphony\\primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\logger.html.twig");
    }
}
