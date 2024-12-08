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

/* @bundles/EmailBundle/EventListener/DetermineWinnerSubscriber.php */
class __TwigTemplate_b5eb34d61388b2711b1893515ef85215 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Event\\DetermineWinnerEvent;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\PageBundle\\Entity\\Hit;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DetermineWinnerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EntityManagerInterface \$em,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::ON_DETERMINE_OPEN_RATE_WINNER         => ['onDetermineOpenRateWinner', 0],
            EmailEvents::ON_DETERMINE_CLICKTHROUGH_RATE_WINNER => ['onDetermineClickthroughRateWinner', 0],
        ];
    }

    /**
     * Determines the winner of A/B test based on open rate.
     */
    public function onDetermineOpenRateWinner(DetermineWinnerEvent \$event): void
    {
        \$parameters = \$event->getParameters();
        \$parent     = \$parameters['parent'];
        \$children   = \$parameters['children'];

        /** @var \\Mautic\\EmailBundle\\Entity\\StatRepository \$repo */
        \$repo = \$this->em->getRepository(Stat::class);
        /** @var Email \$parent */
        \$ids       = \$parent->getRelatedEntityIds();
        \$startDate = \$parent->getVariantStartDate();

        if (null != \$startDate && !empty(\$ids)) {
            // get their bounce rates
            \$counts = \$repo->getOpenedRates(\$ids, \$startDate);

            \$translator = \$this->translator;

            if (\$counts) {
                \$rates      = \$support      = \$data      = [];
                \$hasResults = [];

                \$parentId = \$parent->getId();
                foreach (\$counts as \$id => \$stats) {
                    if (\$id !== \$parentId && !array_key_exists(\$id, \$children)) {
                        continue;
                    }
                    \$name = (\$parentId === \$id) ? \$parent->getName()
                        : \$children[\$id]->getName();
                    \$support['labels'][]                                            = \$name.' ('.\$stats['readRate'].'%)';
                    \$rates[\$id]                                                     = \$stats['readRate'];
                    \$data[\$translator->trans('mautic.email.abtest.label.opened')][] = \$stats['readCount'];
                    \$data[\$translator->trans('mautic.email.abtest.label.sent')][]   = \$stats['totalCount'];
                    \$hasResults[]                                                   = \$id;
                }

                if (!in_array(\$parent->getId(), \$hasResults)) {
                    // make sure that parent and published children are included
                    \$support['labels'][] = \$parent->getName().' (0%)';

                    \$data[\$translator->trans('mautic.email.abtest.label.opened')][] = 0;
                    \$data[\$translator->trans('mautic.email.abtest.label.sent')][]   = 0;
                }

                foreach (\$children as \$c) {
                    if (\$c->isPublished()) {
                        if (!in_array(\$c->getId(), \$hasResults)) {
                            // make sure that parent and published children are included
                            \$support['labels'][]                                            = \$c->getName().' (0%)';
                            \$data[\$translator->trans('mautic.email.abtest.label.opened')][] = 0;
                            \$data[\$translator->trans('mautic.email.abtest.label.sent')][]   = 0;
                        }
                    }
                }
                \$support['data'] = \$data;

                // set max for scales
                \$maxes = [];
                foreach (\$support['data'] as \$data) {
                    \$maxes[] = max(\$data);
                }
                \$top                   = max(\$maxes);
                \$support['step_width'] = (ceil(\$top / 10) * 10);

                // put in order from least to greatest just because
                asort(\$rates);

                // who's the winner?
                \$max = max(\$rates);

                // get the page ids with the most number of downloads
                \$winners = (\$max > 0) ? array_keys(\$rates, \$max) : [];

                \$event->setAbTestResults([
                    'winners'         => \$winners,
                    'support'         => \$support,
                    'basedOn'         => 'email.openrate',
                    'supportTemplate' => '@MauticPage/SubscribedEvents/AbTest/bargraph.html.twig',
                ]);

                return;
            }
        }

        \$event->setAbTestResults([
            'winners' => [],
            'support' => [],
            'basedOn' => 'email.openrate',
        ]);
    }

    /**
     * Determines the winner of A/B test based on clickthrough rates.
     */
    public function onDetermineClickthroughRateWinner(DetermineWinnerEvent \$event): void
    {
        \$parameters = \$event->getParameters();
        \$parent     = \$parameters['parent'];
        \$children   = \$parameters['children'];

        /** @var \\Mautic\\PageBundle\\Entity\\HitRepository \$pageRepo */
        \$pageRepo = \$this->em->getRepository(Hit::class);
        /** @var \\Mautic\\EmailBundle\\Entity\\StatRepository \$emailRepo */
        \$emailRepo = \$this->em->getRepository(Stat::class);
        /** @var Email \$parent */
        \$ids = \$parent->getRelatedEntityIds();

        \$startDate = \$parent->getVariantStartDate();
        if (null != \$startDate && !empty(\$ids)) {
            // get their bounce rates
            \$clickthroughCounts = \$pageRepo->getEmailClickthroughHitCount(\$ids, \$startDate);
            \$sentCounts         = \$emailRepo->getSentCounts(\$ids, \$startDate);

            \$translator = \$this->translator;
            if (\$clickthroughCounts) {
                \$rates      = \$support      = \$data      = [];
                \$hasResults = [];

                \$parentId = \$parent->getId();
                foreach (\$clickthroughCounts as \$id => \$count) {
                    if (\$id !== \$parentId && !array_key_exists(\$id, \$children)) {
                        continue;
                    }
                    if (!isset(\$sentCounts[\$id])) {
                        \$sentCounts[\$id] = 0;
                    }

                    \$rates[\$id] = \$sentCounts[\$id] ? round((\$count / \$sentCounts[\$id]) * 100, 2) : 0;

                    \$name                = (\$parentId === \$id) ? \$parent->getName() : \$children[\$id]->getName();
                    \$support['labels'][] = \$name.' ('.\$rates[\$id].'%)';

                    \$data[\$translator->trans('mautic.email.abtest.label.clickthrough')][]     = \$count;
                    \$data[\$translator->trans('mautic.email.abtest.label.opened')][]           = \$sentCounts[\$id];
                    \$hasResults[]                                                             = \$id;
                }

                if (!in_array(\$parent->getId(), \$hasResults)) {
                    // make sure that parent and published children are included
                    \$support['labels'][] = \$parent->getName().' (0%)';

                    \$data[\$translator->trans('mautic.email.abtest.label.clickthrough')][] = 0;
                    \$data[\$translator->trans('mautic.email.abtest.label.opened')][]       = 0;
                }

                foreach (\$children as \$c) {
                    if (\$c->isPublished()) {
                        if (!in_array(\$c->getId(), \$hasResults)) {
                            // make sure that parent and published children are included
                            \$support['labels'][]                                                  = \$c->getName().' (0%)';
                            \$data[\$translator->trans('mautic.email.abtest.label.clickthrough')][] = 0;
                            \$data[\$translator->trans('mautic.email.abtest.label.opened')][]       = 0;
                        }
                    }
                }
                \$support['data'] = \$data;

                // set max for scales
                \$maxes = [];
                foreach (\$support['data'] as \$data) {
                    \$maxes[] = max(\$data);
                }
                \$top                   = max(\$maxes);
                \$support['step_width'] = (ceil(\$top / 10) * 10);

                // put in order from least to greatest just because
                asort(\$rates);

                // who's the winner?
                \$max = max(\$rates);

                // get the page ids with the most number of downloads
                \$winners = (\$max > 0) ? array_keys(\$rates, \$max) : [];

                \$event->setAbTestResults([
                    'winners'         => \$winners,
                    'support'         => \$support,
                    'basedOn'         => 'email.clickthrough',
                    'supportTemplate' => '@MauticPage/SubscribedEvents/AbTest/bargraph.html.twig',
                ]);

                return;
            }
        }

        \$event->setAbTestResults([
            'winners' => [],
            'support' => [],
            'basedOn' => 'email.clickthrough',
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
        return "@bundles/EmailBundle/EventListener/DetermineWinnerSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/DetermineWinnerSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/DetermineWinnerSubscriber.php");
    }
}
