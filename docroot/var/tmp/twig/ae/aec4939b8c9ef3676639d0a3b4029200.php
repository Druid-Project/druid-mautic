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

/* @bundles/PluginBundle/Tests/ConfigFormTest.php */
class __TwigTemplate_e1bd7bf67fd3d12688a6ef90ba28c443 extends Template
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

namespace Mautic\\PluginBundle\\Tests;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\BundleHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\PluginBundle\\Entity\\IntegrationEntityRepository;
use Mautic\\PluginBundle\\Entity\\IntegrationRepository;
use Mautic\\PluginBundle\\Entity\\PluginRepository;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Mautic\\PluginBundle\\Model\\PluginModel;
use Symfony\\Bundle\\FrameworkBundle\\Test\\KernelTestCase;
use Twig\\Environment;

class ConfigFormTest extends KernelTestCase
{
    protected function setUp(): void
    {
        self::bootKernel();
    }

    public function testConfigForm(): void
    {
        \$plugins = \$this->getIntegrationObject()->getIntegrationObjects();

        foreach (\$plugins as \$name => \$s) {
            \$featureSettings = \$s->getFormSettings();

            \$this->assertArrayHasKey('requires_callback', \$featureSettings);
            \$this->assertArrayHasKey('requires_authorization', \$featureSettings);
            if (\$featureSettings['requires_callback']) {
                \$this->assertNotEmpty(\$s->getAuthCallbackUrl());
            }
        }
    }

    public function testOauth(): void
    {
        \$plugins    = \$this->getIntegrationObject()->getIntegrationObjects();
        \$url        = 'https://test.com';
        \$parameters = ['a' => 'testa', 'b' => 'testb'];
        \$method     = 'GET';
        \$authType   = 'oauth2';
        \$expected   = [
            [
                'a' => 'testa',
                'b' => 'testb',
                ''  => '',
            ], [
                'oauth-token: ',
                'Authorization: OAuth ',
            ],
        ];

        /** @var AbstractIntegration \$integration */
        foreach (\$plugins as \$integration) {
            \$this->assertSame(\$expected, \$integration->prepareRequest(\$url, \$parameters, \$method, [], \$authType));
        }
    }

    public function testAmendLeadDataBeforeMauticPopulate(): void
    {
        \$plugins = \$this->getIntegrationObject()->getIntegrationObjects();
        \$object  = 'company';
        \$data    = ['company_name' => 'company_name', 'email' => 'company_email'];

        /** @var AbstractIntegration \$integration */
        foreach (\$plugins as \$integration) {
            \$methodExists = method_exists(\$integration, 'amendLeadDataBeforeMauticPopulate');
            if (\$methodExists) {
                \$count = \$integration->amendLeadDataBeforeMauticPopulate(\$data, \$object);
                \$this->assertGreaterThanOrEqual(0, \$count);
            } else {
                \$this->assertFalse(\$methodExists, 'To make this test avoid the risky waring...');
            }
        }
    }

    public function getIntegrationObject()
    {
        // create an integration object
        \$pathsHelper          = \$this->getMockBuilder(PathsHelper::class)->disableOriginalConstructor()->getMock();
        \$bundleHelper         = \$this->getMockBuilder(BundleHelper::class)->disableOriginalConstructor()->getMock();
        \$pluginModel          = \$this->getMockBuilder(PluginModel::class)->disableOriginalConstructor()->getMock();
        \$coreParametersHelper = new CoreParametersHelper(self::\$kernel->getContainer());
        \$twig                 = \$this->getMockBuilder(Environment::class)->disableOriginalConstructor()->getMock();
        \$entityManager        = \$this
            ->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$pluginRepository = \$this
            ->getMockBuilder(PluginRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$registeredPluginBundles = static::getContainer()->getParameter('mautic.plugin.bundles');
        \$mauticPlugins           = static::getContainer()->getParameter('mautic.bundles');
        \$bundleHelper->expects(\$this->any())->method('getPluginBundles')->willReturn([\$registeredPluginBundles]);

        \$bundleHelper->expects(\$this->any())->method('getMauticBundles')->willReturn(array_merge(\$mauticPlugins, \$registeredPluginBundles));
        \$integrationEntityRepository = \$this
            ->getMockBuilder(IntegrationEntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$integrationRepository = \$this
            ->getMockBuilder(IntegrationRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$entityManager->expects(\$this
            ->any())
                ->method('getRepository')
                ->will(
                    \$this->returnValueMap(
                        [
                            [\\Mautic\\PluginBundle\\Entity\\Plugin::class, \$pluginRepository],
                            [\\Mautic\\PluginBundle\\Entity\\Integration::class, \$integrationRepository],
                            [\\Mautic\\PluginBundle\\Entity\\IntegrationEntity::class, \$integrationEntityRepository],
                        ]
                    )
                );

        \$integrationHelper = new IntegrationHelper(
            self::\$kernel->getContainer(),
            \$entityManager,
            \$pathsHelper,
            \$bundleHelper,
            \$coreParametersHelper,
            \$twig,
            \$pluginModel
        );

        return \$integrationHelper;
    }

    protected function tearDown(): void
    {
        parent::tearDown();
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
        return "@bundles/PluginBundle/Tests/ConfigFormTest.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/ConfigFormTest.php", "/app/docroot/app/bundles/PluginBundle/Tests/ConfigFormTest.php");
    }
}
