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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/smoothness/images/ui-bg_glass_65_ffffff_1x400.png */
class __TwigTemplate_d01db3456a7093479b3b43b3c1a180ec extends Template
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
IHDR\000\000\000\000\000�\000\000\000\000G#7v\000\000\000gAMA\000\000���a\000\000\000 cHRM\000\000z&\000\000��\000\000�\000\000\000��\000\000u0\000\000�`\000\000:�\000\000p��Q<\000\000\000bKGD\000݊�\000\000\000tIME�\t
\"���!\000\000\000IDAT(�ch`��p�\000�h��4�i\000\000\000%tEXtdate:create\0002016-09-14T13:34:08-04:00_Dn�\000\000\000%tEXtdate:modify\0002016-09-14T13:34:08-04:00.�\000\000\000\000IEND�B`�";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/smoothness/images/ui-bg_glass_65_ffffff_1x400.png";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/smoothness/images/ui-bg_glass_65_ffffff_1x400.png", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/smoothness/images/ui-bg_glass_65_ffffff_1x400.png");
    }
}
