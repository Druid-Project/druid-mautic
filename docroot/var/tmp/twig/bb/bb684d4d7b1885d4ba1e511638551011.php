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

/* @bundles/LeadBundle/Tests/Entity/FrequencyRuleRepositoryTest.php */
class __TwigTemplate_bbf081243a22379b10036452d538b21e extends Template
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

use Doctrine\\ORM\\OptimisticLockException;
use Doctrine\\ORM\\ORMException;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\LeadBundle\\Entity\\FrequencyRule;
use Mautic\\LeadBundle\\Entity\\FrequencyRuleRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

class FrequencyRuleRepositoryTest extends MauticMysqlTestCase
{
    /**
     * @var FrequencyRuleRepository
     */
    private \$frequencyRuleRepository;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->frequencyRuleRepository = static::getContainer()->get('mautic.lead.repository.frequency_rule');
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function testCustomFrequencyRuleViolationsMethodReturnsCorrectData(): void
    {
        \$lead = new Lead();
        \$lead->setFirstname('Firstname');
        \$lead->setLastname('Lastname');
        \$lead->setEmail('test@test.com');
        \$lead->setPhone('555-666-777');

        \$this->em->persist(\$lead);

        \$frequencyRule = new FrequencyRule();
        \$frequencyRule->setFrequencyNumber(1);
        \$frequencyRule->setFrequencyTime('DAY');
        \$frequencyRule->setChannel('email');
        \$frequencyRule->setDateAdded(new \\DateTime());
        \$frequencyRule->setLead(\$lead);

        \$this->em->persist(\$frequencyRule);

        \$emailStats1 = new Stat();
        \$emailStats1->setLead(\$lead);
        \$emailStats1->setEmailAddress('testemail@test.test');
        \$emailStats1->setDateSent(new \\DateTime());
        \$emailStats1->setIsRead(true);
        \$emailStats1->setIsFailed(false);
        \$emailStats1->setViewedInBrowser(false);

        \$emailStats2 = new Stat();
        \$emailStats2->setLead(\$lead);
        \$emailStats2->setEmailAddress('testemail@test.test');
        \$emailStats2->setDateSent(new \\DateTime());
        \$emailStats2->setIsRead(true);
        \$emailStats2->setIsFailed(false);
        \$emailStats2->setViewedInBrowser(false);

        \$this->em->persist(\$emailStats1);
        \$this->em->persist(\$emailStats2);
        \$this->em->flush();

        \$violations         = \$this->frequencyRuleRepository->getAppliedFrequencyRules('email', [\$lead->getId()], 1, 'DAY');
        \$expectedViolations = [
            [
                'lead_id'          => (string) \$lead->getId(),
                'frequency_number' => '1',
                'frequency_time'   => 'DAY',
            ],
        ];
        Assert::assertSame(\$expectedViolations, \$violations);
    }

    public function testValidateDefaultParameters(): void
    {
        \$method = new \\ReflectionMethod(FrequencyRuleRepository::class, 'validateDefaultParameters');
        \$method->setAccessible(true);

        \$this->assertFalse(\$method->invoke(\$this->frequencyRuleRepository, false, false));
        \$this->assertFalse(\$method->invoke(\$this->frequencyRuleRepository, false, true));
        \$this->assertFalse(\$method->invoke(\$this->frequencyRuleRepository, true, false));
        \$this->assertTrue(\$method->invoke(\$this->frequencyRuleRepository, true, true));
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
        return "@bundles/LeadBundle/Tests/Entity/FrequencyRuleRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/FrequencyRuleRepositoryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/FrequencyRuleRepositoryTest.php");
    }
}
