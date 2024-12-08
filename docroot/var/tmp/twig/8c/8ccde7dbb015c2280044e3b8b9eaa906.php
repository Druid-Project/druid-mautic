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

/* @bundles/LeadBundle/Tests/Command/UpdateLeadListCommandFunctionalTest.php */
class __TwigTemplate_5d615c8b7b69df923e59c35c216f0b70 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Command\\UpdateLeadListsCommand;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use PHPUnit\\Framework\\Assert;

final class UpdateLeadListCommandFunctionalTest extends MauticMysqlTestCase
{
    public function testFailWhenSegmentDoesNotExist(): void
    {
        \$output = \$this->testSymfonyCommand(UpdateLeadListsCommand::NAME, ['--list-id' => 999999]);

        Assert::assertSame(1, \$output->getStatusCode());
        Assert::assertStringContainsString('Segment #999999 does not exist', \$output->getDisplay());
    }

    /**
     * @dataProvider provider
     */
    public function testCommandRebuildingAllSegments(callable \$getCommandParams, callable \$assert): void
    {
        \$contact = new Lead();
        \$contact->setEmail('halusky@bramborak.makovec');

        \$segment = new LeadList();
        \$segment->setName('Test segment');
        \$segment->setPublicName('Test segment');
        \$segment->setAlias('test-segment');
        \$segment->setFilters([
            [
                'glue'     => 'and',
                'field'    => 'email',
                'object'   => 'lead',
                'type'     => 'email',
                'filter'   => 'halusky@bramborak.makovec',
                'display'  => null,
                'operator' => 'eq',
            ],
        ]);

        \$longTimeAgo = new \\DateTime('2000-01-01 00:00:00');

        // The last built date is set on pre persist to 2000-01-01 00:00:00.
        // Setting it 1 year ago so we could assert that it is updated after the command runs.
        \$segment->setLastBuiltDate(\$longTimeAgo);

        \$this->em->persist(\$contact);
        \$this->em->persist(\$segment);
        \$this->em->flush();
        \$this->em->clear();

        Assert::assertEquals(\$longTimeAgo, \$segment->getLastBuiltDate());

        \$output = \$this->testSymfonyCommand(UpdateLeadListsCommand::NAME, \$getCommandParams(\$segment));

        /** @var LeadList \$segment */
        \$segment = \$this->em->find(LeadList::class, \$segment->getId());
        \$assert(\$segment, \$output->getDisplay());

        /** @var LeadListRepository \$leadListRepository */
        \$leadListRepository = \$this->em->getRepository(LeadList::class);

        Assert::assertSame(
            '1',
            \$leadListRepository->getLeadCount([\$segment->getId()])
        );
    }

    /**
     * @return iterable<array<callable>>
     */
    public static function Provider(): iterable
    {
        // Test that all segments will be rebuilt with no params set.
        yield [
            fn (): array => [],
            function (LeadList \$segment): void {
                Assert::assertGreaterThan(
                    new \\DateTime('2000-01-01 00:00:00'),
                    \$segment->getLastBuiltDate()
                );
                Assert::assertNotNull(\$segment->getLastBuiltTime());
            },
        ];

        // Test that it will work when we select a specific segment too.
        // Also testing the timing option = 0.
        yield [
            fn (LeadList \$segment): array => ['--list-id' => \$segment->getId()],
            function (LeadList \$segment, string \$output): void {
                Assert::assertGreaterThan(
                    new \\DateTime('2000-01-01 00:00:00'),
                    \$segment->getLastBuiltDate()
                );
                Assert::assertNotNull(\$segment->getLastBuiltTime());
                Assert::assertStringNotContainsString('Total time:', \$output);
            },
        ];

        // But the last built date will not update if we limit how many contacts to process.
        // Also testing the timing option = 1.
        yield [
            fn (): array => ['--max-contacts' => 1, '--timing' => 1],
            function (LeadList \$segment, string \$output): void {
                Assert::assertEquals(
                    new \\DateTime('2000-01-01 00:00:00'),
                    \$segment->getLastBuiltDate()
                );
                Assert::assertNull(\$segment->getLastBuiltTime());
                Assert::assertStringContainsString('Total time:', \$output);
                Assert::assertStringContainsString('seconds', \$output);
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
        return "@bundles/LeadBundle/Tests/Command/UpdateLeadListCommandFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Command/UpdateLeadListCommandFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Command/UpdateLeadListCommandFunctionalTest.php");
    }
}
