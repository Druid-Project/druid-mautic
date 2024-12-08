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

/* @bundles/PageBundle/Tests/Entity/HitRepositoryTest.php */
class __TwigTemplate_c12cc0ac6423121cbd873d87cd0a0dd1 extends Template
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

namespace Mautic\\PageBundle\\Tests\\Entity;

use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\HitRepository;
use PHPUnit\\Framework\\Assert;

class HitRepositoryTest extends MauticMysqlTestCase
{
    private HitRepository \$hitRepository;

    private ?IpAddress \$ipAddress;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->hitRepository = \$this->em->getRepository(Hit::class);
    }

    public function testGetLatestHitDateByLead(): void
    {
        Assert::assertNull(\$this->hitRepository->getLatestHitDateByLead(1, 'someId'));
        Assert::assertNull(\$this->hitRepository->getLatestHitDateByLead(1));

        \$leadOne  = \$this->createLead();
        \$leadTwo  = \$this->createLead();
        \$this->createHit(\$leadOne, \$dateOne = new \\DateTime('-10 second'), 'one-first');
        \$this->createHit(\$leadOne, new \\DateTime('-20 second'), 'one-first');
        \$this->createHit(\$leadOne, \$dateThree = new \\DateTime('-5 second'), 'one-second');
        \$this->createHit(\$leadTwo, new \\DateTime('-50 second'), 'two-first');
        \$this->createHit(\$leadTwo, \$dateFive = new \\DateTime('-40 second'), 'two-first');
        \$this->em->flush();

        \$this->assertHitDate(\$dateOne, \$leadOne, 'one-first');
        \$this->assertHitDate(\$dateThree, \$leadOne, 'one-second');
        \$this->assertHitDate(\$dateFive, \$leadTwo, 'two-first');
        \$this->assertHitDate(\$dateThree, \$leadOne, null);
        \$this->assertHitDate(\$dateFive, \$leadTwo, null);

        Assert::assertNull(\$this->hitRepository->getLatestHitDateByLead((int) \$leadOne->getId(), 'two-first'));
        Assert::assertNull(\$this->hitRepository->getLatestHitDateByLead((int) \$leadTwo->getId(), 'one-second'));
    }

    private function createHit(Lead \$lead, \\DateTime \$dateHit, string \$trackingId): void
    {
        \$hit = new Hit();
        \$hit->setLead(\$lead);
        \$hit->setIpAddress(\$this->getIpAddress());
        \$hit->setDateHit(\$dateHit);
        \$hit->setTrackingId(\$trackingId);
        \$hit->setCode(200);
        \$this->em->persist(\$hit);
    }

    private function createLead(): Lead
    {
        \$lead = new Lead();
        \$this->em->persist(\$lead);

        return \$lead;
    }

    private function getIpAddress(): IpAddress
    {
        if (!isset(\$this->ipAddress)) {
            \$this->ipAddress = new IpAddress('127.0.0.1');
        }

        return \$this->ipAddress;
    }

    private function assertHitDate(\\DateTime \$expectedHitDate, Lead \$lead, ?string \$trackingId): void
    {
        \$hitDate = \$this->hitRepository->getLatestHitDateByLead((int) \$lead->getId(), \$trackingId);

        Assert::assertInstanceOf(\\DateTime::class, \$hitDate);
        Assert::assertSame(\$expectedHitDate->getTimestamp(), \$hitDate->getTimestamp());
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
        return "@bundles/PageBundle/Tests/Entity/HitRepositoryTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Entity/HitRepositoryTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Entity/HitRepositoryTest.php");
    }
}
