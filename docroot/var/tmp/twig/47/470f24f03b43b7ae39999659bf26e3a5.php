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

/* @bundles/ConfigBundle/Form/DataTransformer/DsnTransformerFactory.php */
class __TwigTemplate_3fb922c25821dbf640a65706055e4dbd extends Template
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
        yield "<?php

declare(strict_types=1);

namespace Mautic\\ConfigBundle\\Form\\DataTransformer;

use Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class DsnTransformerFactory
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private EscapeTransformer \$escapeTransformer
    ) {
    }

    public function create(string \$configKey, bool \$allowEmpty): DsnTransformer
    {
        return new DsnTransformer(\$this->coreParametersHelper, \$this->escapeTransformer, \$configKey, \$allowEmpty);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ConfigBundle/Form/DataTransformer/DsnTransformerFactory.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/DataTransformer/DsnTransformerFactory.php", "/app/docroot/app/bundles/ConfigBundle/Form/DataTransformer/DsnTransformerFactory.php");
    }
}
