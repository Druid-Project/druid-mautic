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

/* @themes/creative/assets/layout-line.png */
class __TwigTemplate_46b9846b1cf8677dc7aaa6502677f795 extends Template
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
IHDR\000\000\000H\000\000\000H\000\000\000U�G\000\000\000sRGB\000���\000\000�IDATx^��J�@Eg��1��ؾR_D|�-��h�4��R1����M8}��v��ܙ�M��ߠ\t}�@ �B -�@A��\000i��sP�:l,�k3�����?S���y��\$\$P�n�fvp6m�=v����oT���U�`3�~�vM��9*P����n׸�
N�W���@ �}E-�z��%�!���W�\000����)����b\"Z���ŰX�N �L�*�>��Q�H1�AP�E�B��,���R�G���;
������B��� 茛U�U��A� r�����\\���QŨb�q��S�]P�)�M � �[����Y�c1,�Ŗi17��D�
:�(<~wz􏯿|,�S��r��A]�n��ٝ����I�)�z�����l��t�c���k��z��Jґ�����8Q\\*�� �\"���� � M���w^�X�RY�\000\000\000\000IEND�B`�";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/creative/assets/layout-line.png";
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
        return new Source("", "@themes/creative/assets/layout-line.png", "/app/docroot/themes/creative/assets/layout-line.png");
    }
}
