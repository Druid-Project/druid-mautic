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

/* @bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerFunctionalTest.php */
class __TwigTemplate_8ce8b5e01da41b38ebbaed23c2b9db34 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller\\Api;

use Doctrine\\Common\\Annotations\\Annotation\\IgnoreAnnotation;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * @IgnoreAnnotation(\"covers\")
 */
final class FieldApiControllerFunctionalTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    protected function setUp(): void
    {
        \$this->configParams['create_custom_field_in_background'] = 'testFieldApiEndpointsWithBackgroundProcessingEnabled' === \$this->getName();

        parent::setUp();
    }

    public function testCreatingMultiselectField(): void
    {
        \$payload = [
            'label'               => 'Shops (TB)',
            'alias'               => 'shops',
            'type'                => 'multiselect',
            'isPubliclyUpdatable' => true,
            'isUniqueIdentifier'  => false,
            'properties'          => [
                'list' => [
                    ['label' => 'label1', 'value' => 'value1'],
                    ['label' => 'label2', 'value' => 'value2'],
                ],
            ],
        ];

        \$typeSafePayload = \$this->generateTypeSafePayload(\$payload);
        \$this->client->request(Request::METHOD_POST, '/api/fields/contact/new', \$typeSafePayload);
        \$clientResponse = \$this->client->getResponse();
        \$fieldResponse  = json_decode(\$clientResponse->getContent(), true);

        Assert::assertSame(Response::HTTP_CREATED, \$clientResponse->getStatusCode(), \$clientResponse->getContent());
        Assert::assertTrue(\$fieldResponse['field']['isPublished']);
        Assert::assertGreaterThan(0, \$fieldResponse['field']['id']);
        Assert::assertSame(\$payload['label'], \$fieldResponse['field']['label']);
        Assert::assertSame(\$payload['alias'], \$fieldResponse['field']['alias']);
        Assert::assertSame(\$payload['type'], \$fieldResponse['field']['type']);
        Assert::assertSame(\$payload['isPubliclyUpdatable'], \$fieldResponse['field']['isPubliclyUpdatable']);
        Assert::assertSame(\$payload['isUniqueIdentifier'], \$fieldResponse['field']['isUniqueIdentifier']);
        Assert::assertSame(\$payload['properties'], \$fieldResponse['field']['properties']);

        // Cleanup
        \$this->client->request(Request::METHOD_DELETE, '/api/fields/contact/'.\$fieldResponse['field']['id'].'/delete', \$payload);
        \$clientResponse = \$this->client->getResponse();
        Assert::assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode(), \$clientResponse->getContent());
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::saveEntity
     * @covers \\Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::newEntityAction
     * @covers \\Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::editEntityAction
     * @covers \\Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::deleteEntityAction
     * @covers \\Mautic\\LeadBundle\\Field\\Command\\CreateCustomFieldCommand::execute
     */
    public function testFieldApiEndpointsWithBackgroundProcessingEnabled(): void
    {
        \$alias   = uniqid('field');
        \$payload = \$this->getCreatePayload(\$alias);
        \$id      = \$this->assertCreateResponse(\$payload, Response::HTTP_ACCEPTED);

        // Test that the command will create the field
        \$commandTester = \$this->testSymfonyCommand('mautic:custom-field:create-column', ['--id' => \$id]);

        \$this->assertEquals(0, \$commandTester->getStatusCode());

        // Test fetching
        \$this->assertGetResponse(\$payload, \$id);

        // Test editing
        \$payload = \$this->getEditPayload(\$id);
        \$this->assertPatchResponse(\$payload, \$id, \$alias);

        // Test deleting
        \$this->assertDeleteResponse(\$payload, \$id, \$alias);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::saveEntity
     * @covers \\Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::newEntityAction
     * @covers \\Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::editEntityAction
     * @covers \\Mautic\\LeadBundle\\Controller\\Api\\FieldApiController::deleteEntityAction
     */
    public function testFieldApiEndpointsWithBackgroundProcessingDisabled(): void
    {
        \$alias   = uniqid('field');
        \$payload = \$this->getCreatePayload(\$alias);
        \$id      = \$this->assertCreateResponse(\$payload, Response::HTTP_CREATED);

        // Test fetching
        \$this->assertGetResponse(\$payload, \$id);

        // Test editing
        \$payload = \$this->getEditPayload(\$id);
        \$this->assertPatchResponse(\$payload, \$id, \$alias);

        // Test deleting
        \$this->assertDeleteResponse(\$payload, \$id, \$alias);
    }

    private function assertCreateResponse(array \$payload, int \$expectedStatusCode): int
    {
        // Test creating a new field

        \$typeSafePayload = \$this->generateTypeSafePayload(\$payload);
        \$this->client->request('POST', '/api/fields/contact/new', \$typeSafePayload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);

        // should be \"accepted\" if pushed to the background; otherwise \"created\"
        \$this->assertEquals(\$expectedStatusCode, \$clientResponse->getStatusCode());

        // Assert that the fields returned are what is expected
        foreach (\$payload as \$key => \$value) {
            \$this->assertTrue(isset(\$response['field'][\$key]));

            if (Response::HTTP_ACCEPTED === \$expectedStatusCode && 'isPublished' === \$key) {
                // This should be false because the background job publishes once ready
                \$this->assertEquals(false, \$response['field'][\$key]);
                continue;
            }

            \$this->assertEquals(\$value, \$response['field'][\$key]);
        }

        return \$response['field']['id'];
    }

    private function assertGetResponse(array \$payload, int \$id): void
    {
        // Test get and that the field was published
        \$this->client->request('GET', sprintf('/api/fields/contact/%s', \$id));
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);
        \$this->assertEquals(Response::HTTP_OK, \$clientResponse->getStatusCode());

        // Assert that the fields returned are what is expected and the field is now published
        foreach (\$payload as \$key => \$value) {
            \$this->assertTrue(isset(\$response['field'][\$key]));
            \$this->assertEquals(\$value, \$response['field'][\$key]);
        }
    }

    private function assertPatchResponse(array \$payload, int \$id, string \$alias): void
    {
        \$typeSafePayload = \$this->generateTypeSafePayload(\$payload);
        \$this->client->request('PATCH', sprintf('/api/fields/contact/%s/edit', \$id), \$typeSafePayload);
        \$clientResponse = \$this->client->getResponse();
        \$this->assertEquals(Response::HTTP_OK, \$clientResponse->getStatusCode());
        \$response = json_decode(\$clientResponse->getContent(), true);

        // Assert that the fields returned are what is expected noting that certain fields should not be editable
        foreach (\$payload as \$key => \$value) {
            \$this->assertTrue(isset(\$response['field'][\$key]));

            match (\$key) {
                'alias'  => \$this->assertEquals(\$alias, \$response['field'][\$key]),
                'object' => \$this->assertEquals('lead', \$response['field'][\$key]),
                'type'   => \$this->assertEquals('text', \$response['field'][\$key]),
                default  => \$this->assertEquals(\$value, \$response['field'][\$key]),
            };
        }
    }

    private function assertDeleteResponse(array \$payload, int \$id, string \$alias): void
    {
        // Test the field is deleted
        \$this->client->request('DELETE', sprintf('/api/fields/contact/%s/delete', \$id));
        \$clientResponse = \$this->client->getResponse();
        \$this->assertEquals(Response::HTTP_OK, \$clientResponse->getStatusCode());
        \$response = json_decode(\$clientResponse->getContent(), true);

        // Assert that the fields returned are what is expected
        foreach (\$payload as \$key => \$value) {
            // use array has key because ID will now be null
            \$this->assertArrayHasKey(\$key, \$response['field']);

            match (\$key) {
                'id'     => \$this->assertNull(\$response['field'][\$key]),
                'alias'  => \$this->assertEquals(\$alias, \$response['field'][\$key]),
                'object' => \$this->assertEquals('lead', \$response['field'][\$key]),
                'type'   => \$this->assertEquals('text', \$response['field'][\$key]),
                default  => \$this->assertEquals(\$value, \$response['field'][\$key]),
            };
        }
    }

    private function getCreatePayload(string \$alias): array
    {
        return [
            'isPublished'         => true,
            'label'               => 'New Field',
            'alias'               => \$alias,
            'type'                => 'text',
            'group'               => 'core',
            'object'              => 'lead',
            'defaultValue'        => 'foobar',
            'isRequired'          => true,
            'isPubliclyUpdatable' => true,
            'isUniqueIdentifier'  => true,
            'isVisible'           => false,
            'isListable'          => false,
            'properties'          => [],
        ];
    }

    private function getEditPayload(int \$id): array
    {
        return [
            'id'                  => \$id,
            'label'               => 'Foo Bar',
            'alias'               => 'should_not_change',
            'type'                => 'text',
            'group'               => 'core',
            'object'              => 'company',
            'defaultValue'        => 'foobar',
            'isRequired'          => false,
            'isPubliclyUpdatable' => false,
            'isUniqueIdentifier'  => false,
            'isVisible'           => true,
            'isListable'          => true,
            'properties'          => [],
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
        return "@bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/Api/FieldApiControllerFunctionalTest.php");
    }
}