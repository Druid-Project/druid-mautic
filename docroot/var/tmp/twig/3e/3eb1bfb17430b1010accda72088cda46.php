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

/* @themes/attract/assets/icon4.png */
class __TwigTemplate_f130c4ef75f6436e36c30b50fa2aa4cf extends Template
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
IHDR\000\000\000 \000\000\000 \000\000\000szz�\000\000\000sRGB\000���\000\000<IDATXG�͑�0�?��\"h�#P7ZJ�����M�q�\00012#��q2�ė�`��OOO�yu2�O���X�X�`\000\\}9}\000n5�RM�S,��\000��5~c\000�\t\000\$v���/�>ַd�
y��Ȋ�.9d%�@ؘj�P卑��X�7��s��)\"l���sO��c��D&~!�Q�\$^|�2>
�L-�Ph\t�\000�)��sW��Cpe@ѹj#\"�V놙u����a�\000b4�Y\000�
��a�����@����˞d��e��o�����|�&S��3\t��W�ZW���M�cB�W�%h����!�'�\000\000\000\000IEND�B`�";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/attract/assets/icon4.png";
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
        return new Source("", "@themes/attract/assets/icon4.png", "/app/docroot/themes/attract/assets/icon4.png");
    }
}
