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

/* @bundles/LeadBundle/Tests/Services/ContactSegmentFilterDictionaryTest.php */
class __TwigTemplate_c2b6c2dc59eb2c94501ec34d5c7e4009 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Services;

use Mautic\\LeadBundle\\Event\\SegmentDictionaryGenerationEvent;
use Mautic\\LeadBundle\\Exception\\FilterNotFoundException;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ContactSegmentFilterDictionaryTest extends TestCase
{
    public function testWorkflow(): void
    {
        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dictionary = new ContactSegmentFilterDictionary(\$dispatcher);

        \$dispatcher->expects(\$this->once())
            ->method('hasListeners')
            ->with(LeadEvents::SEGMENT_DICTIONARY_ON_GENERATE)
            ->willReturn(true);

        // Subscribe new filter like a plugin would.
        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->callback(function (SegmentDictionaryGenerationEvent \$event) {
                \$event->addTranslation('plugin_key', ['type' => 'blah blah']);

                return true;
            }), LeadEvents::SEGMENT_DICTIONARY_ON_GENERATE);

        \$this->assertSame(['type' => 'mautic.lead.query.builder.special.dnc'], \$dictionary->getFilter('dnc_bounced'));
        \$this->assertSame('campaign_leads.manually_removed = 0', \$dictionary->getFilterProperty('campaign', 'where'));
        \$this->assertSame('blah blah', \$dictionary->getFilterProperty('plugin_key', 'type'));

        \$this->expectException(FilterNotFoundException::class);
        \$dictionary->getFilterProperty('unicorn', 'type');
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
        return "@bundles/LeadBundle/Tests/Services/ContactSegmentFilterDictionaryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Services/ContactSegmentFilterDictionaryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Services/ContactSegmentFilterDictionaryTest.php");
    }
}
