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

/* @bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php */
class __TwigTemplate_e55e94c7b3eb04cc23e0580499c5923a extends Template
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

namespace Mautic\\MarketplaceBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Symfony\\Component\\Form\\FormBuilderInterface;

class MarketplacePermissions extends AbstractPermissions
{
    public const BASE                 = 'marketplace';

    public const PACKAGES             = 'packages';

    public const CAN_VIEW_PACKAGES    = self::BASE.':'.self::PACKAGES.':view';

    public const CAN_INSTALL_PACKAGES = self::BASE.':'.self::PACKAGES.':create';

    public const CAN_REMOVE_PACKAGES  = self::BASE.':'.self::PACKAGES.':remove';

    public function __construct(
        CoreParametersHelper \$coreParametersHelper,
        private Config \$config
    ) {
        parent::__construct(\$coreParametersHelper->all());
    }

    public function definePermissions(): void
    {
        \$this->addStandardPermissions(self::PACKAGES, false);
    }

    public function isEnabled(): bool
    {
        return \$this->config->marketplaceIsEnabled();
    }

    public function getName(): string
    {
        return self::BASE;
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields(self::BASE, self::PACKAGES, \$builder, \$data, false);
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
        return "@bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php", "/app/docroot/app/bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php");
    }
}
