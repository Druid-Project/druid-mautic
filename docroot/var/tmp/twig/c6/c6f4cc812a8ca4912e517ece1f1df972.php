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

/* @bundles/LeadBundle/Tests/Entity/ListLeadRepositoryTest.php */
class __TwigTemplate_486260adf18db6ff90e4bc322ee946d2 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\ListLead;
use Mautic\\LeadBundle\\Entity\\ListLeadRepository;

final class ListLeadRepositoryTest extends MauticMysqlTestCase
{
    private ListLeadRepository \$listLeadRepository;

    public function setUp(): void
    {
        parent::setUp();

        \$this->listLeadRepository = static::getContainer()->get(ListLeadRepository::class);
    }

    public function testGetContactsCountBySegment(): void
    {
        \$filters       = ['manually_removed' => 0];
        \$contact       = new Lead();
        \$segment       = new LeadList();
        \$segmentMember = new ListLead();

        \$segment->setName('A segment');
        \$segment->setPublicName('A segment');
        \$segment->setAlias('asegment');

        \$segmentMember->setLead(\$contact);
        \$segmentMember->setList(\$segment);
        \$segmentMember->setManuallyRemoved(false);
        \$segmentMember->setDateAdded(new \\DateTime());

        \$this->em->persist(\$contact);
        \$this->em->persist(\$segment);
        \$this->em->persist(\$segmentMember);
        \$this->em->flush();

        \$this->assertSame(1, \$this->listLeadRepository->getContactsCountBySegment(\$segment->getId(), \$filters));

        \$segmentMember->setManuallyRemoved(true);
        \$this->em->persist(\$segmentMember);
        \$this->em->flush();

        \$this->assertSame(0, \$this->listLeadRepository->getContactsCountBySegment(\$segment->getId(), \$filters));
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
        return "@bundles/LeadBundle/Tests/Entity/ListLeadRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/ListLeadRepositoryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/ListLeadRepositoryTest.php");
    }
}
