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

/* @themes/attract/assets/icon2.png */
class __TwigTemplate_2cfac687b8c78d9221391f5ac005b328 extends Template
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
IHDR\000\000\000 \000\000\000 \000\000\000szz�\000\000\000sRGB\000���\000\000�IDATXG��1kA��'(X)��(���\"�Ɣ*IB�\"X�������������l��lhc%\"Z�=0+㲻w3��;ͽ�Μ��3;�yL�_�s�/\\�{Y)�:f�7��o\000.\$ѯ��{��[�Q\000T�p��?���<�l���L�
V�D)�S\\L�q�8����\"^w����q�q6��p�Z[ǔDTEX�1�5��@��A�Ϲ#M\000�q;��k�)F�b!��X��۶�8��VH���ø�eJ/�\000n��j��M��E��/@��u�0�|7�Rn7Ra��@S�\000�rx'j�
l��SM���Mk�t9�>���%�C��>�T�@,�N���d*�ˈ��?�C�J:�N��R�D���KgA��|�a�~Q
�S0L��}�c��c�>��Q�)��-Ʈ>ǣ�����b׭1�|��h���d!�u1�\000\000\000\000IEND�B`�";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/attract/assets/icon2.png";
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
        return new Source("", "@themes/attract/assets/icon2.png", "/app/docroot/themes/attract/assets/icon2.png");
    }
}
