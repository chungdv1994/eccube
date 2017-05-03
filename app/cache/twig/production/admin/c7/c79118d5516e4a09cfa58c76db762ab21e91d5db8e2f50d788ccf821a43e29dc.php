<?php

/* __string_template__797dbf41805c440412630bb30228afd097b749a4fc9481d364ed0d09e0bb702a */
class __TwigTemplate_c466f63412e2eee653738909a8df5eccf6c1735fa5e84eeb01f35d2987f2b1ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__797dbf41805c440412630bb30228afd097b749a4fc9481d364ed0d09e0bb702a", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "shop_mail");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "ショップ設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "メール管理";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "    <script>
        \$(function(){
            \$(\"#mail_template\").on(\"change\", function(){
                var id = \$(this).val()
                if (id) {
                    location.href= '";
        // line 37
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_mail");
        echo "/' + id;
                } else {
                    location.href= '";
        // line 39
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_mail");
        echo "';
                }
            });
        });
    </script>
";
    }

    // line 46
    public function block_main($context, array $blocks = array())
    {
        // line 47
        echo "
    <div class=\"row\" id=\"aside_wrap\">
        <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
            ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "

            <div id=\"mail_edit_box\" class=\"col-md-9\">
                <div id=\"mail_edit_box__body\" class=\"box\">
                    <div id=\"mail_edit_box__header\" class=\"box-header\">
                        <h3 class=\"box-title\">メールテンプレート編集</h3>
                    </div><!-- /.box-header -->
                    <div id=\"mail_edit_box__body_inner\" class=\"box-body\">

                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "template", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "subject", array()), 'row');
        echo "
                        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "header", array()), 'row');
        echo "
                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "footer", array()), 'row');
        echo "

                        <div class=\"extra-form\">
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 66
            echo "                                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 67
                echo "                                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                ";
            }
            // line 69
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        </div>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div>
            <div class=\"col-md-3\" id=\"aside_column\">
                <div id=\"common_box\" class=\"col_inner\">
                    <div id=\"common_button_box\" class=\"box no-header\">
                        <div id=\"common_button_box__body\" class=\"box-body\">
                            <div id=\"common_button_box__insert_button\" class=\"row text-center\">
                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                    <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">登録</button>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div><!-- /.col -->

        </form>
    </div>


";
    }

    public function getTemplateName()
    {
        return "__string_template__797dbf41805c440412630bb30228afd097b749a4fc9481d364ed0d09e0bb702a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 70,  124 => 69,  118 => 67,  115 => 66,  111 => 65,  105 => 62,  101 => 61,  97 => 60,  93 => 59,  81 => 50,  76 => 47,  73 => 46,  63 => 39,  58 => 37,  51 => 32,  48 => 31,  42 => 27,  36 => 26,  32 => 22,  30 => 29,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__797dbf41805c440412630bb30228afd097b749a4fc9481d364ed0d09e0bb702a", "");
    }
}
