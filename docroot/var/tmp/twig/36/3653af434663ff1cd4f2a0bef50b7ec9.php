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

/* @bundles/ConfigBundle/ConfigEvents.php */
class __TwigTemplate_aa9d7e9e724ac962205ed4c6fdb9a8c8 extends Template
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

namespace Mautic\\ConfigBundle;

/**
 * Events available for ConfigBundle.
 */
final class ConfigEvents
{
    /**
     * The mautic.config_on_generate event is thrown when the configuration form is generated.
     *
     * The event listener receives a
     * Mautic\\ConfigBundle\\Event\\ConfigGenerateEvent instance.
     *
     * @var string
     */
    public const CONFIG_ON_GENERATE = 'mautic.config_on_generate';

    /**
     * The mautic.config_pre_save event is thrown right before config data are saved.
     *
     * The event listener receives a Mautic\\ConfigBundle\\Event\\ConfigEvent instance.
     *
     * @var string
     */
    public const CONFIG_PRE_SAVE = 'mautic.config_pre_save';

    /**
     * The mautic.config_post_save event is thrown right after config data are saved.
     *
     * The event listener receives a Mautic\\ConfigBundle\\Event\\ConfigEvent instance.
     *
     * @var string
     */
    public const CONFIG_POST_SAVE = 'mautic.config_post_save';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ConfigBundle/ConfigEvents.php";
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
        return new Source("", "@bundles/ConfigBundle/ConfigEvents.php", "/app/docroot/app/bundles/ConfigBundle/ConfigEvents.php");
    }
}
