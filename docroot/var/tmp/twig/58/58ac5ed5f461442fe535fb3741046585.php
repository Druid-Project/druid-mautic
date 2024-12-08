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

/* @bundles/LeadBundle/Tests/Twig/DncReasonHelperTest.php */
class __TwigTemplate_24c31610ec8198ae8e93a8c018e107f3 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Twig;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Exception\\UnknownDncReasonException;
use Mautic\\LeadBundle\\Twig\\Helper\\DncReasonHelper;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DncReasonHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var array<int, string>
     */
    private \$reasonTo = [
        DoNotContact::IS_CONTACTABLE => 'mautic.lead.event.donotcontact_contactable',
        DoNotContact::UNSUBSCRIBED   => 'mautic.lead.event.donotcontact_unsubscribed',
        DoNotContact::BOUNCED        => 'mautic.lead.event.donotcontact_bounced',
        DoNotContact::MANUAL         => 'mautic.lead.event.donotcontact_manual',
    ];

    /**
     * @var array<string, string>
     */
    private \$translations = [
        'mautic.lead.event.donotcontact_contactable'  => 'a',
        'mautic.lead.event.donotcontact_unsubscribed' => 'b',
        'mautic.lead.event.donotcontact_bounced'      => 'c',
        'mautic.lead.event.donotcontact_manual'       => 'd',
    ];

    public function testToText(): void
    {
        foreach (\$this->reasonTo as \$reasonId => \$translationKey) {
            \$translationResult = \$this->translations[\$translationKey];

            \$translator = \$this->createMock(TranslatorInterface::class);
            \$translator->expects(\$this->once())
                ->method('trans')
                ->with(\$translationKey)
                ->willReturn(\$translationResult);

            \$dncReasonHelper = new DncReasonHelper(\$translator);

            \$this->assertSame(\$translationResult, \$dncReasonHelper->toText(\$reasonId));
        }

        \$translator      = \$this->createMock(TranslatorInterface::class);
        \$dncReasonHelper = new DncReasonHelper(\$translator);
        \$this->expectException(UnknownDncReasonException::class);
        \$dncReasonHelper->toText(999);
    }

    public function testGetName(): void
    {
        \$translator      = \$this->createMock(TranslatorInterface::class);
        \$dncReasonHelper = new DncReasonHelper(\$translator);
        \$this->assertSame('lead_dnc_reason', \$dncReasonHelper->getName());
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
        return "@bundles/LeadBundle/Tests/Twig/DncReasonHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Twig/DncReasonHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Twig/DncReasonHelperTest.php");
    }
}
