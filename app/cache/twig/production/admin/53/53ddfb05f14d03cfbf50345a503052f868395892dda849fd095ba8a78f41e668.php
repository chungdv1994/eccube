<?php

/* __string_template__8d5675dcd0749a849b58c0da3f7ae0e87fccb82f568a5456fee240e2aeb14d6b */
class __TwigTemplate_4e32c1bdc873bee1aba55ad2bfbb3a23ccab2eb8a3e6a5f87ebf209f93aace4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__8d5675dcd0749a849b58c0da3f7ae0e87fccb82f568a5456fee240e2aeb14d6b", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "shop_tax");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "基本情報設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "税率設定";
    }

    // line 31
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 32
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap-datetimepicker.min.css\">
";
    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        // line 36
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment.min.js\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment-ja.js\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap-datetimepicker.min.js\"></script>
<script>
\$(function() {

    \$('#tax_rule_apply_date').datetimepicker({
        locale: 'ja',
        format: 'YYYY-MM-DD HH:mm',
        useCurrent: false,
        showTodayButton: true
    });

});

    function fnChange(action) {
        document.form1.action = action;
        document.form1.submit();
        return false;
    }
</script>
";
    }

    // line 59
    public function block_main($context, array $blocks = array())
    {
        // line 60
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"";
        // line 61
        if ((null === $this->getAttribute(($context["TargetTaxRule"] ?? null), "id", array()))) {
            // line 62
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_tax_new");
        } else {
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_tax_edit", array("id" => $this->getAttribute(($context["TargetTaxRule"] ?? null), "id", array()))), "html", null, true);
        }
        // line 65
        echo "\">
        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
    <div id=\"tax_rule_wrap\" class=\"row\">
        <div id=\"tax_rule_box\" class=\"col-md-12\">
            ";
        // line 70
        echo "            <div id=\"tax_rule_box__body\" class=\"box\">
                <div id=\"tax_rule_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">個別税率設定</h3>
                </div><!-- /.box-header -->
                <div id=\"tax_rule_box__body_inner\" class=\"box-body\">
                    ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "option_product_tax_rule", array()), 'row');
        echo "
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div id=\"tax_rule_box__insert_button\" class=\"row btn_area2\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center\">
                    <button class=\"btn btn-primary btn-block btn-lg\"
                            onclick=\"fnChange('";
        // line 81
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_tax_edit_param");
        echo "'); return false;\">登録</button>

                </div>
            </div>

            ";
        // line 87
        echo "            <div id=\"tax_common_rule_box\" class=\"box\">
                <div id=\"tax_common_rule_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">共通税率設定</h3>
                </div><!-- /.box-header -->
                <div id=\"tax_common_rule_box__body\" class=\"box-body\">
                    ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tax_rate", array()), 'row');
        echo "
                    ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calc_rule", array()), 'row');
        echo "
                    ";
        // line 94
        if (($this->getAttribute(($context["TargetTaxRule"] ?? null), "default_tax_rule", array()) == false)) {
            // line 95
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "apply_date", array()), 'row');
            echo "
                    ";
        }
        // line 97
        echo "                    <div class=\"extra-form\">
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 99
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 100
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            }
            // line 102
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div id=\"tax_common_rule_box__insert_button\" class=\"row btn_area2\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center\">
                    <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">登録</button>
                </div>
            </div>

            ";
        // line 113
        echo "            <div id=\"tax_rule_list\" class=\"box\">
                <div id=\"tax_rule_list__header\" class=\"box-header\">
                    <h3 class=\"box-title\">税率一覧</h3>
                </div><!-- /.box-header -->
                <div id=\"tax_rule_list__body\" class=\"box-body\">
                    <div id=\"tax_rule_list__list\" class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr id=\"tax_rule_list__header\">
                                <th id=\"tax_rule_list__header_id\">ID</th>
                                <th id=\"tax_rule_list__header_tax_rate\">消費税率</th>
                                <th id=\"tax_rule_list__header_calc_rule\">課税規則</th>
                                <th id=\"tax_rule_list__header_default_tax_rule\">適用日時</th>
                                <th id=\"tax_rule_list__header_menu_box\">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TaxRules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TaxRule"]) {
            // line 131
            echo "                            <tr id=\"tax_rule_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">
                                <td id=\"tax_rule_list__id--";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "</td>
                                <td id=\"tax_rule_list__tax_rate--";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "tax_rate", array()), "html", null, true);
            echo "%</td>
                                <td id=\"tax_rule_list__calc_rule--";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "calc_rule", array()), "html", null, true);
            echo "</td>
                                <td id=\"tax_rule_list__default_tax_rule--";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["TaxRule"], "default_tax_rule", array())) ? ("基本税率設定") : (twig_date_format_filter($this->env, $this->getAttribute($context["TaxRule"], "apply_date", array()), "Y/m/d  H:i"))), "html", null, true);
            echo "</td>
                                <td id=\"tax_rule_list__menu_box--";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\" class=\"icon_edit\">
                                    <div id=\"tax_rule_list__menu_box_toggle\" class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                        <ul id=\"tax_rule_list__menu--";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["TaxRule"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_tax_edit", array("id" => $this->getAttribute($context["TaxRule"], "id", array()))), "html", null, true);
            echo "\">編集</a></li>
                                            ";
            // line 141
            if ($this->getAttribute($context["TaxRule"], "default_tax_rule", array())) {
                // line 142
                echo "                                                <li><a>削除</a></li>
                                            ";
            } else {
                // line 144
                echo "                                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_tax_delete", array("id" => $this->getAttribute($context["TaxRule"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">削除</a></li>
                                            ";
            }
            // line 146
            echo "                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TaxRule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                            </tbody>
                        </table>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__8d5675dcd0749a849b58c0da3f7ae0e87fccb82f568a5456fee240e2aeb14d6b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 151,  277 => 146,  269 => 144,  265 => 142,  263 => 141,  259 => 140,  255 => 139,  249 => 136,  243 => 135,  237 => 134,  231 => 133,  225 => 132,  220 => 131,  216 => 130,  197 => 113,  186 => 103,  180 => 102,  174 => 100,  171 => 99,  167 => 98,  164 => 97,  158 => 95,  156 => 94,  152 => 93,  148 => 92,  141 => 87,  133 => 81,  124 => 75,  117 => 70,  111 => 66,  108 => 65,  105 => 64,  102 => 62,  100 => 61,  98 => 60,  95 => 59,  71 => 38,  67 => 37,  62 => 36,  59 => 35,  52 => 32,  49 => 31,  43 => 27,  37 => 26,  33 => 22,  31 => 29,  29 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__8d5675dcd0749a849b58c0da3f7ae0e87fccb82f568a5456fee240e2aeb14d6b", "");
    }
}
