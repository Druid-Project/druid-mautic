<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @themes/attract/assets/icon1.png */
class __TwigTemplate_b9b9c402410ae93961ff8b7d305682bf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "�PNG

\000\000\000
IHDR\000\000\000 \000\000\000 \000\000\000szz�\000\000\000sRGB\000���\000\000IDATXG��O�La���+BRJ�����,�l,�)D�\$(ek�,X�P��������BI���yJvR,�s�ܺ3�ܙ;��W��{�<�|�y��7Ϙ)�؀������g��x�\000[��~��ff�؍{�B�p��R�7�r/��ę,s<�ϡ�u�љ�u!�D�E�Ŀp\000��~�4�����ё���,�+3}�N<jɼ�1;��A��D�
`�bC&��m�ϫ��kp����؁�U�\000�!V����Xc�/�,�q؄���*�%�����j.�E\t�<�è>^�I�\000V�1���}��f�\"l^�BV(��u9O+�z���RP,��=/�g!m�/�2ϋe�X�WK��.������\\�\000X��%3Y�9��N�U\000|ě�<����7��#~X\000�sO+�?p�D[�t�ѩ�Y=���b
n`�0;��P\\G�۩\000��\000F��;P����V�
�
�m�u��'���\$��f�]~����Q�/
X�ux���ڤA�hfLy�T�y!����\000\000\000\000IEND�B`�";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/attract/assets/icon1.png";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/attract/assets/icon1.png", "/app/docroot/themes/attract/assets/icon1.png");
    }
}
