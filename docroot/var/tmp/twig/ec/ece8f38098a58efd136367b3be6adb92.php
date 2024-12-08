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

/* @bundles/IntegrationsBundle/Tests/Unit/AbstractIntegrationTest.php */
class __TwigTemplate_3c91c4077c2e1dcc4dff5cc3e9e793f3 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\CoreBundle\\Helper\\EncryptionHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\LeadBundle\\Model\\DoNotContact as DoNotContactModel;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Mautic\\PluginBundle\\Model\\IntegrationEntityModel;
use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Routing\\Router;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class AbstractIntegrationTest extends TestCase
{
    public function testParseCallbackResponseWithUTF8StringThatContainsControlChars(): void
    {
        \$integrationDouble = \$this->buildAbstractIntegrationDouble();

        \$jsonString = <<<JSON
        {
          \"webinars\": [
            {
              \"topic\": \"【】 \"
            }
          ]
        }
JSON;

        \$json = \$integrationDouble->parseCallbackResponse(\$jsonString);
        self::assertArrayHasKey('webinars', \$json);
    }

    private function buildAbstractIntegrationDouble(): AbstractIntegration
    {
        // creating a double since we can't instantiate
        // we also need to expose some things for better unit test coverage
        return new class(\$this->createMock(EventDispatcherInterface::class), \$this->createMock(CacheStorageHelper::class), \$this->createMock(EntityManager::class), \$this->createMock(Session::class), \$this->createMock(RequestStack::class), \$this->createMock(Router::class), \$this->createMock(TranslatorInterface::class), \$this->createMock(Logger::class), \$this->createMock(EncryptionHelper::class), \$this->createMock(LeadModel::class), \$this->createMock(CompanyModel::class), \$this->createMock(PathsHelper::class), \$this->createMock(NotificationModel::class), \$this->createMock(FieldModel::class), \$this->createMock(IntegrationEntityModel::class), \$this->createMock(DoNotContactModel::class)) extends AbstractIntegration {
            public function getName(): string
            {
                return 'double';
            }

            public function getAuthenticationType(): string
            {
                return 'none';
            }
        };
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
        return "@bundles/IntegrationsBundle/Tests/Unit/AbstractIntegrationTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/AbstractIntegrationTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/AbstractIntegrationTest.php");
    }
}
