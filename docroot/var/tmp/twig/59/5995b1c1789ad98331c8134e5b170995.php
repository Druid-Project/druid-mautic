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

/* @bundles/LeadBundle/Tests/Provider/FieldChoicesProviderTest.php */
class __TwigTemplate_1bc3dea38444647d0807591835483a2f extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Provider;

use Mautic\\LeadBundle\\Event\\ListFieldChoicesEvent;
use Mautic\\LeadBundle\\Exception\\ChoicesNotFoundException;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Provider\\FieldChoicesProvider;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class FieldChoicesProviderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|EventDispatcherInterface
     */
    private MockObject \$dispatcher;

    private FieldChoicesProvider \$provider;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$this->provider   = new FieldChoicesProvider(\$this->dispatcher);
    }

    public function testGetChoicesForFieldThatDoesNotHaveAnyChoices(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(\$this->setSomeChoicesLikeASubscriber()),
                LeadEvents::COLLECT_FILTER_CHOICES_FOR_LIST_FIELD_TYPE
            );

        \$this->expectException(ChoicesNotFoundException::class);
        \$this->provider->getChoicesForField('text', 'email');
    }

    public function testGetChoicesForFieldThatHasTypeChoices(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(\$this->setSomeChoicesLikeASubscriber()),
                LeadEvents::COLLECT_FILTER_CHOICES_FOR_LIST_FIELD_TYPE
            );

        // Calling it twice to ensure the cache is working and the event is triggered only once.
        \$this->provider->getChoicesForField('country', 'country_field_a');
        \$choices = \$this->provider->getChoicesForField('country', 'country_field_a');

        \$this->assertSame(['Czech Republic' => 'Czech Republic'], \$choices);
    }

    public function testGetChoicesForFieldThatHasAliasChoices(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(\$this->setSomeChoicesLikeASubscriber()),
                LeadEvents::COLLECT_FILTER_CHOICES_FOR_LIST_FIELD_TYPE
            );

        // Calling it twice to ensure the cache is working and the event is triggered only once.
        \$this->provider->getChoicesForField('select', 'select_a');
        \$choices = \$this->provider->getChoicesForField('select', 'select_a');

        \$this->assertSame(['Choice A' => 'choice_a'], \$choices);
    }

    private function setSomeChoicesLikeASubscriber(): callable
    {
        return function (ListFieldChoicesEvent \$event) {
            \$event->setChoicesForFieldAlias(
                'select_a',
                ['Choice A' => 'choice_a']
            );

            \$event->setChoicesForFieldType(
                'country',
                ['Czech Republic' => 'Czech Republic']
            );

            return true;
        };
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
        return "@bundles/LeadBundle/Tests/Provider/FieldChoicesProviderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Provider/FieldChoicesProviderTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Provider/FieldChoicesProviderTest.php");
    }
}
