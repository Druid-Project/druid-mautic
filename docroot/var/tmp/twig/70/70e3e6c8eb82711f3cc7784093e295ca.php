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

/* @bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite@2x.png */
class __TwigTemplate_da6fb45ef40d1f8f3fd31430d9804fe7 extends Template
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
IHDR\000\000\000h\000\000\000J\000\000\000`��\000\000\000�PLTE���\000\000\000���������FFFFFFFFF���������������������FFF������������������������������������������������������������������������������������ttt���������UUU������������������������������������������������������FFF2�Ϡ\000\000\000BtRNS\000\000��00�``��Pp��� ���@ϰ����`�E��ݐ�ܖ���!)��f���ߋDJ��~��p\000\000\tIDATx^���n�0�a���b[��S6���{��;���E���¹���W�\000b4�8#��Q�
#U/�F�&5���Ó�z)vG{�=� 8`>�:�Dv\"X)8`B��g��@����a�L`#��*UK��f�6낶�[�T�Zv@�6e\000�~&������f9p�Ç�͢);���t�P���TW���Z�m=��--��2m��@v��n���AW2�1����a]7�s�zر^z�8V�8
j/%�H�/�L�\\'���N+L���L��u�a��7��� �Re=�:>B�N�:����TDVE�6�U�~Θй�H�X��:�A��\\�|x���㽨d,(7*��ghz�t#brT�����';т�\$}���kъ�J����
J_�ނ\t��XW��wu�ʻ�p]^��\"A����On�.����ťu�|݈�s�
�ݷ�?~���U󖪊�����1���>H��oe����N\"A!8�
��\"CA\"BA\"C�Ju���<���a+\000\000\000\000IEND�B`�";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite@2x.png";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite@2x.png", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite@2x.png");
    }
}