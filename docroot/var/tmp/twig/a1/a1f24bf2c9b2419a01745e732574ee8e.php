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

/* @bundles/DashboardBundle/Factory/WidgetDetailEventFactory.php */
class __TwigTemplate_673afddca3a9696e324e9ce04848bc68 extends Template
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

namespace Mautic\\DashboardBundle\\Factory;

use Mautic\\CacheBundle\\Cache\\CacheProvider;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\Entity\\Widget;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class WidgetDetailEventFactory
{
    public function __construct(
        private TranslatorInterface \$translator,
        private CacheProvider \$cacheProvider,
        private CorePermissions \$corePermissions,
        private UserHelper \$userHelper,
        private CoreParametersHelper \$coreParametersHelper,
        private PathsHelper \$pathsHelper,
    ) {
    }

    public function create(Widget \$widget): WidgetDetailEvent
    {
        \$cacheDir = \$this->coreParametersHelper->get('cached_data_dir', \$this->pathsHelper->getSystemPath('cache', true));
        \$event    = new WidgetDetailEvent(\$this->translator, \$this->corePermissions, \$widget, \$this->cacheProvider);
        \$event->setCacheDir(\$cacheDir, \$this->userHelper->getUser()->getId());

        return \$event;
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
        return "@bundles/DashboardBundle/Factory/WidgetDetailEventFactory.php";
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
        return new Source("", "@bundles/DashboardBundle/Factory/WidgetDetailEventFactory.php", "/app/docroot/app/bundles/DashboardBundle/Factory/WidgetDetailEventFactory.php");
    }
}
