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

/* @bundles/LeadBundle/Field/Settings/BackgroundSettings.php */
class __TwigTemplate_16d7fbfacb3c203dcb435968537cc98e extends Template
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

namespace Mautic\\LeadBundle\\Field\\Settings;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class BackgroundSettings
{
    public const CREATE_CUSTOM_FIELD_IN_BACKGROUND = 'create_custom_field_in_background';

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function shouldProcessColumnChangeInBackground(): bool
    {
        return (bool) \$this->coreParametersHelper->get(self::CREATE_CUSTOM_FIELD_IN_BACKGROUND, false);
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
        return "@bundles/LeadBundle/Field/Settings/BackgroundSettings.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Settings/BackgroundSettings.php", "/app/docroot/app/bundles/LeadBundle/Field/Settings/BackgroundSettings.php");
    }
}
