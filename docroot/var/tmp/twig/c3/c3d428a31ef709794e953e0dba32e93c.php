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

/* @bundles/PluginBundle/Tests/Integration/AbstractIntegrationTest.php */
class __TwigTemplate_f272acc54e71e755473118fb9192af81 extends Template
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

namespace Mautic\\PluginBundle\\Tests\\Integration;

use GuzzleHttp\\Client;
use GuzzleHttp\\Psr7\\Response;
use GuzzleHttp\\RequestOptions;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Http\\Message\\ResponseInterface;

class AbstractIntegrationTest extends AbstractIntegrationTestCase
{
    public function testPopulatedLeadDataReturnsIntAndNotDncEntityForMauticContactIsContactableByEmail(): void
    {
        /**
         * @var MockObject&AbstractIntegration
         */
        \$integration = \$this->getMockBuilder(AbstractIntegration::class)
            ->setConstructorArgs([
                \$this->dispatcher,
                \$this->cache,
                \$this->em,
                \$this->session,
                \$this->request,
                \$this->router,
                \$this->translator,
                \$this->logger,
                \$this->encryptionHelper,
                \$this->leadModel,
                \$this->companyModel,
                \$this->pathsHelper,
                \$this->notificationModel,
                \$this->fieldModel,
                \$this->integrationEntityModel,
                \$this->doNotContact,
            ])
            ->onlyMethods(['getName', 'getAuthenticationType', 'getAvailableLeadFields'])
            ->getMock();

        \$integration->method('getAvailableLeadFields')
            ->willReturn(
                [
                    'dnc' => [
                        'type'     => 'bool',
                        'required' => false,
                        'label'    => 'DNC',
                    ],
                ]
            );

        \$this->assertEquals(
            ['dnc' => 0],
            \$integration->populateLeadData(
                ['id' => 1],
                [
                    'leadFields' => [
                        'dnc' => 'mauticContactIsContactableByEmail',
                    ],
                ]
            )
        );
    }

    /**
     * @dataProvider requestProvider
     *
     * @param mixed[] \$parameters
     * @param mixed[] \$settings
     */
    public function testMakeRequest(string \$uri, array \$parameters, string \$method, array \$settings, object \$assertRequest): void
    {
        /**
         * @var MockObject&AbstractIntegration
         */
        \$integration = \$this->getMockBuilder(AbstractIntegration::class)
            ->setConstructorArgs([
                \$this->dispatcher,
                \$this->cache,
                \$this->em,
                \$this->session,
                \$this->request,
                \$this->router,
                \$this->translator,
                \$this->logger,
                \$this->encryptionHelper,
                \$this->leadModel,
                \$this->companyModel,
                \$this->pathsHelper,
                \$this->notificationModel,
                \$this->fieldModel,
                \$this->integrationEntityModel,
                \$this->doNotContact,
            ])
            ->onlyMethods(['getName', 'getAuthenticationType', 'makeHttpClient'])
            ->getMock();

        \$integration->method('makeHttpClient')
            ->willReturn(
                new class(\$assertRequest) extends Client {
                    public function __construct(
                        private object \$assertRequest
                    ) {
                    }

                    /**
                     * @param mixed[] \$options
                     */
                    public function request(string \$method, \$uri = '', array \$options = []): ResponseInterface
                    {
                        \$this->assertRequest->assert(\$method, \$uri, \$options);

                        return new Response();
                    }
                }
            );

        \$this->assertEquals([], \$integration->makeRequest(\$uri, \$parameters, \$method, \$settings));
    }

    /**
     * @return iterable<mixed[]>
     */
    public static function requestProvider(): iterable
    {
        // Test with JSON.
        yield [
            'https://some.uri',
            ['this will be' => 'encoded to json string'],
            'POST',
            [
                'ignore_event_dispatch' => true,
                'encode_parameters'     => 'json',
            ],
            new class() {
                /**
                 * @param mixed[] \$options
                 */
                public function assert(string \$method, string \$uri = '', array \$options = []): void
                {
                    Assert::assertSame('POST', \$method);
                    Assert::assertSame('https://some.uri', \$uri);
                    Assert::assertSame(
                        [
                            RequestOptions::BODY => '{\"this will be\":\"encoded to json string\"}',
                            'headers'            => ['Content-Type' => 'application/json'],
                            'timeout'            => 10,
                        ],
                        \$options
                    );
                }
            },
        ];

        // Test with form params.
        yield [
            'https://some.uri',
            ['this will be' => 'encoded to form array'],
            'POST',
            ['ignore_event_dispatch' => true],
            new class() {
                /**
                 * @param mixed[] \$options
                 */
                public function assert(string \$method, string \$uri = '', array \$options = []): void
                {
                    Assert::assertSame('POST', \$method);
                    Assert::assertSame('https://some.uri', \$uri);
                    Assert::assertSame(
                        [
                            RequestOptions::FORM_PARAMS => ['this will be' => 'encoded to form array'],
                            'headers'                   => [],
                            'timeout'                   => 10,
                        ],
                        \$options
                    );
                }
            },
        ];
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
        return "@bundles/PluginBundle/Tests/Integration/AbstractIntegrationTest.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/Integration/AbstractIntegrationTest.php", "/app/docroot/app/bundles/PluginBundle/Tests/Integration/AbstractIntegrationTest.php");
    }
}
