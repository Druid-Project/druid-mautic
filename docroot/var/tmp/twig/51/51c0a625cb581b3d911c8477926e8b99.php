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

/* @bundles/CampaignBundle/Tests/Executioner/ContactFinder/Limiter/ContactLimiterTest.php */
class __TwigTemplate_a1d5d5b40e7e1ddbf2c1c1292549d488 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\ContactFinder\\Limiter;

use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;

class ContactLimiterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetters(): void
    {
        \$limiter = new ContactLimiter(1, 2, 3, 4, [1, 2, 3]);

        \$this->assertEquals(1, \$limiter->getBatchLimit());
        \$this->assertEquals(2, \$limiter->getContactId());
        \$this->assertEquals(3, \$limiter->getMinContactId());
        \$this->assertEquals(4, \$limiter->getMaxContactId());
        \$this->assertEquals([1, 2, 3], \$limiter->getContactIdList());
    }

    public function testBatchMinContactIsReturned(): void
    {
        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);

        \$limiter->setBatchMinContactId(5);
        \$this->assertEquals(5, \$limiter->getMinContactId());
    }

    public function testNoContactsFoundExceptionThrownIfIdIsLessThanMin(): void
    {
        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$limiter->setBatchMinContactId(1);
    }

    public function testNoContactsFoundExceptionThrownIfIdIsMoreThanMax(): void
    {
        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$limiter->setBatchMinContactId(11);
    }

    public function testNoContactsFoundExceptionThrownIfIdIsTheSameAsLastBatch(): void
    {
        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$limiter->setBatchMinContactId(5);
        \$limiter->setBatchMinContactId(5);
    }

    public function testExceptionNotThrownIfIdEqualsMinSoThatItsIsIncluded(): void
    {
        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$this->assertSame(\$limiter, \$limiter->setBatchMinContactId(3));
    }

    public function testExceptionNotThrownIfIdEqualsMaxSoThatItsIsIncluded(): void
    {
        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$this->assertSame(\$limiter, \$limiter->setBatchMinContactId(10));
    }

    public function testExceptionThrownIfThreadIdLargerThanMaxThreads(): void
    {
        \$this->expectException(\\InvalidArgumentException::class);

        new ContactLimiter(1, null, null, null, [], 5, 3);
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
        return "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/Limiter/ContactLimiterTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/Limiter/ContactLimiterTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/ContactFinder/Limiter/ContactLimiterTest.php");
    }
}
