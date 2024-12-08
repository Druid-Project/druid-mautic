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

/* @bundles/LeadBundle/EventListener/GeneratedColumnSubscriber.php */
class __TwigTemplate_37abf0b47a9b3d0adf78895c68b6e368 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Event\\GeneratedColumnsEvent;
use Mautic\\LeadBundle\\Event\\LeadListFiltersChoicesEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class GeneratedColumnSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private ListModel \$segmentModel,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::ON_GENERATED_COLUMNS_BUILD       => ['onGeneratedColumnsBuild', 0],
            LeadEvents::LIST_FILTERS_CHOICES_ON_GENERATE => ['onGenerateSegmentFilters', 0],
        ];
    }

    public function onGeneratedColumnsBuild(GeneratedColumnsEvent \$event): void
    {
        \$emailDomain = new GeneratedColumn(
            'leads',
            'generated_email_domain',
            'VARCHAR(255)',
            'SUBSTRING(email, LOCATE(\"@\", email) + 1)'
        );

        \$event->addGeneratedColumn(\$emailDomain);
    }

    public function onGenerateSegmentFilters(LeadListFiltersChoicesEvent \$event): void
    {
        \$event->addChoice('lead', 'generated_email_domain', [
            'label'      => \$this->translator->trans('mautic.email.segment.choice.generated_email_domain'),
            'properties' => ['type' => 'text'],
            'operators'  => \$this->segmentModel->getOperatorsForFieldType(
                [
                    'include' => [
                        '=',
                        '!=',
                        'empty',
                        '!empty',
                        'like',
                        '!like',
                        'regexp',
                        '!regexp',
                        'startsWith',
                        'endsWith',
                        'contains',
                    ],
                ]
            ),
            'object' => 'lead',
        ]);
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
        return "@bundles/LeadBundle/EventListener/GeneratedColumnSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/GeneratedColumnSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/GeneratedColumnSubscriber.php");
    }
}
