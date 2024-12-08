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

/* @bundles/CoreBundle/Tests/Unit/Security/Permissions/CorePermissionsTest.php */
class __TwigTemplate_295541ccad38930649f7d05069385270 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Security\\Permissions;

use Mautic\\ApiBundle\\Security\\Permissions\\ApiPermissions;
use Mautic\\AssetBundle\\Security\\Permissions\\AssetPermissions;
use Mautic\\CampaignBundle\\Security\\Permissions\\CampaignPermissions;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use MauticPlugin\\MauticFocusBundle\\Security\\Permissions\\FocusPermissions;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CorePermissionsTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|UserHelper
     */
    private MockObject \$userHelper;

    private CorePermissions \$corePermissions;

    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private MockObject \$coreParametersHelper;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->userHelper           = \$this->createMock(UserHelper::class);
        \$this->translator           = \$this->createMock(TranslatorInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->corePermissions      = new CorePermissions(
            \$this->userHelper,
            \$this->translator,
            \$this->coreParametersHelper,
            [
                \$this->mockBundleArray(ApiPermissions::class),
                \$this->mockBundleArray(AssetPermissions::class),
                \$this->mockBundleArray(CampaignPermissions::class),
            ],
            [
                \$this->mockBundleArray(FocusPermissions::class),
            ]
        );
    }

    public function testSettingPermissionObject(): void
    {
        \$this->coreParametersHelper->method('all')
            ->willReturn(['parameter_a' => 'value_a']);

        \$assetPermissions = new AssetPermissions(\$this->coreParametersHelper);
        \$this->corePermissions->setPermissionObject(\$assetPermissions);
        \$permissionObjects = \$this->corePermissions->getPermissionObjects();

        // Even though the AssetPermissions object was set upfront there are
        // still 4 objects available.
        // The other three were instantiated to keep BC.
        \$this->assertCount(4, \$permissionObjects);

        \$this->assertSame(\$assetPermissions, \$this->corePermissions->getPermissionObject('asset'));
        \$this->assertSame(\$assetPermissions, \$this->corePermissions->getPermissionObject(AssetPermissions::class));
        \$this->assertSame(\$permissionObjects['campaign'], \$this->corePermissions->getPermissionObject(CampaignPermissions::class));
    }

    private function mockBundleArray(string \$permissionClass): array
    {
        return ['permissionClasses' => [\$permissionClass => \$permissionClass]];
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
        return "@bundles/CoreBundle/Tests/Unit/Security/Permissions/CorePermissionsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Security/Permissions/CorePermissionsTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Security/Permissions/CorePermissionsTest.php");
    }
}