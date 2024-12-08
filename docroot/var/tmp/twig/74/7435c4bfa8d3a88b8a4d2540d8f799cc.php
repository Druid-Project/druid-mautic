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

/* @bundles/EmailBundle/Tests/Stat/StatHelperTest.php */
class __TwigTemplate_b9e0e0d35aa25c267843d7316e7b737a extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Stat;

use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\Model\\EmailStatModel;
use Mautic\\EmailBundle\\Stat\\Exception\\StatNotFoundException;
use Mautic\\EmailBundle\\Stat\\StatHelper;
use Mautic\\LeadBundle\\Entity\\Lead;

class StatHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testStatsAreCreatedAndDeleted(): void
    {
        \$emailStatmodel     = \$this->createMock(EmailStatModel::class);
        \$mockStatRepository = \$this->createMock(StatRepository::class);

        \$emailStatmodel->method('getRepository')->willReturn(\$mockStatRepository);

        \$mockStatRepository->expects(\$this->once())
            ->method('deleteStats')
            ->withConsecutive([[1, 2, 3, 4, 5]]);

        \$statHelper = new StatHelper(\$emailStatmodel);

        \$mockEmail = \$this->getMockBuilder(Email::class)
            ->getMock();
        \$mockEmail->method('getId')
            ->willReturn(15);

        \$counter = 1;
        while (\$counter <= 5) {
            \$stat = \$this->getMockBuilder(Stat::class)
                ->getMock();

            \$stat->method('getId')
                ->willReturn(\$counter);

            \$stat->method('getEmail')
                ->willReturn(\$mockEmail);

            \$lead = \$this->getMockBuilder(Lead::class)
                ->getMock();

            \$lead->method('getId')
                ->willReturn(\$counter * 10);

            \$stat->method('getLead')
                ->willReturn(\$lead);

            \$emailAddress = \"contact{\$counter}@test.com\";
            \$statHelper->storeStat(\$stat, \$emailAddress);

            // Delete it
            try {
                \$reference = \$statHelper->getStat(\$emailAddress);
                \$this->assertEquals(\$reference->getLeadId(), \$counter * 10);
                \$statHelper->markForDeletion(\$reference);
            } catch (StatNotFoundException) {
                \$this->fail(\"Stat not found for \$emailAddress\");
            }

            ++\$counter;
        }

        \$statHelper->deletePending();
    }

    public function testExceptionIsThrownIfEmailAddressIsNotFound(): void
    {
        \$this->expectException(StatNotFoundException::class);

        \$statHelper = new StatHelper(\$this->createMock(EmailStatModel::class));

        \$statHelper->getStat('nada@nada.com');
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
        return "@bundles/EmailBundle/Tests/Stat/StatHelperTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Stat/StatHelperTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Stat/StatHelperTest.php");
    }
}
