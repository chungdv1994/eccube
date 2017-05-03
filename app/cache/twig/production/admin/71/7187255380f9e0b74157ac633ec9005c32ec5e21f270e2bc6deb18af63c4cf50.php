<?php

/* __string_template__190fa7227b9d8d4b01b4236e534c574474fe29bc90d69204973f895424cdc4ef */
class __TwigTemplate_97d8faa495adb5f712f9f01cec7112451db3c6312312ff6f4263f179fa710845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__190fa7227b9d8d4b01b4236e534c574474fe29bc90d69204973f895424cdc4ef", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "customer_agreement");
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
        echo "利用規約管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"row\" id=\"aside_wrap\">
        <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\">
            ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
                <div id=\"detail_wrap\" class=\"col-md-9\">
                    <div id=\"detail_box\" class=\"box form-horizontal\">
                        <div id=\"detail_box__header\" class=\"box-header\">
                            <h3 class=\"box-title\">利用規約</h3>
                        </div><!-- /.box-header -->
                        <div id=\"detail_box__body\" class=\"box-body\">
                            <div id=\"detail_box__customer_agreement\" class=\"form-group\">
                                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer_agreement", array()), 'label');
        echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer_agreement", array()), 'widget', array("attr" => array("rows" => 20)));
        echo "
                                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customer_agreement", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"extra-form\">
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 50
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 51
                echo "                                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            }
            // line 53
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                <div class=\"col-md-3\" id=\"aside_column\">
                    <div id=\"common_box\" class=\"col_inner\">
                        <div id=\"common_button_box\" class=\"box no-header\">
                            <div id=\"common_button_box__body\" class=\"box-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div id=\"common_button_box__insert_button\" class=\"form-group\">
                                            <div class=\"row text-center\">
                                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                                    <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">規約を登録</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div><!-- /.col -->
            </div>

        <div class=\"btn-area\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__190fa7227b9d8d4b01b4236e534c574474fe29bc90d69204973f895424cdc4ef";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 54,  94 => 53,  88 => 51,  85 => 50,  81 => 49,  74 => 45,  70 => 44,  65 => 42,  54 => 34,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__190fa7227b9d8d4b01b4236e534c574474fe29bc90d69204973f895424cdc4ef", "");
    }
}
