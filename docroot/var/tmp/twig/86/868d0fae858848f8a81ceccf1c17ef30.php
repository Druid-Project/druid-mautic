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

/* @themes/attract/assets/icon3.png */
class __TwigTemplate_eb8d878b0559c667da450170fb69e4f7 extends Template
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
IHDR\000\000\000 \000\000\000 \000\000\000szz�\000\000\000sRGB\000���\000\000\000�IDATXG햱
�0E_�`�,AOA����
����%X�!@ْlp�� tW%����ߗ�5L���1\000)��\t�1t�y8���U���|�Rd����:�X��R��~�j��ꋇ
/�}�\t�g\000l=��n�w�K�a}ib�W���E5#Z�\000����hSO�
�1`�?��X6*;U�mh�޾�
�ٺ��vlQ��cT�ҍwT�X�x\000���!�[��\000\000\000\000IEND�B`�";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/attract/assets/icon3.png";
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
        return new Source("", "@themes/attract/assets/icon3.png", "/app/docroot/themes/attract/assets/icon3.png");
    }
}
