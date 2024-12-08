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

/* @bundles/LeadBundle/Tests/Functional/Entity/LeadRepositoryTest.php */
class __TwigTemplate_a664ac37c8ec06329d715d213d0b59a3 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Functional\\Entity;

use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Bridge\\Doctrine\\DataCollector\\DoctrineDataCollector;
use Symfony\\Component\\HttpFoundation\\Request;

final class LeadRepositoryTest extends MauticMysqlTestCase
{
    public function setUp(): void
    {
        \$this->clientOptions = ['debug' => true];

        parent::setUp();
    }

    /**
     * @return array<int, array<string, array<string, bool>>>
     */
    public static function joinIpAddressesProvider(): array
    {
        return [
            ['' => []],
            ['' => ['joinIpAddresses' => true]],
            ['' => ['joinIpAddresses' => false]],
        ];
    }

    /**
     * @dataProvider joinIpAddressesProvider
     *
     * @param array<string, bool> \$args
     */
    public function testSaveIpAddressToContacts(\$args): void
    {
        \$contactRepo = \$this->em->getRepository(Lead::class);

        \$ipRepo = \$this->em->getRepository(IpAddress::class);

        \$ip      = new IpAddress('127.0.0.1');
        \$contact = new Lead();
        \$contact->addIpAddress(\$ip);
        \$this->em->persist(\$contact);
        \$this->em->persist(\$ip);
        \$this->em->flush();

        \$q       = \$contactRepo->getEntitiesOrmQueryBuilder('(CASE WHEN u.id=1 THEN 1 ELSE 2 END) AS HIDDEN ORD', \$args);
        \$results = \$q->getQuery()
        ->getResult();

        /** @var Lead \$r */
        foreach (\$results as \$r) {
            \$ipAddresses = \$r->getIpAddresses();
            \$ipAddress   = \$ipAddresses->first();
            \$this->assertEquals(\$ipAddress->getIpAddress(), '127.0.0.1');
        }

        \$this->client->enableProfiler();

        \$this->client->request(Request::METHOD_GET, '/s/contacts');

        \$profile = \$this->client->getProfile();
        /** @var DoctrineDataCollector \$dbCollector */
        \$dbCollector = \$profile->getCollector('db');
        \$queries     = \$dbCollector->getQueries();

        \$finalQueries = array_filter(
            \$queries['default'],
            fn (array \$query) => str_contains(\$query['sql'], 'SELECT (CASE WHEN t0_.id = 1 THEN 1 ELSE 2 END)')
        );

        foreach (\$finalQueries as \$query) {
            if (\$args['joinIpAddresses'] ?? true) {
                \$this->assertStringContainsString('LEFT JOIN test_ip_addresses', \$query['sql']);
            } else {
                \$this->assertStringNotContainsString('LEFT JOIN test_ip_addresses', \$query['sql']);
            }
        }
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
        return "@bundles/LeadBundle/Tests/Functional/Entity/LeadRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Functional/Entity/LeadRepositoryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Functional/Entity/LeadRepositoryTest.php");
    }
}
