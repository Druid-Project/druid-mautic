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

/* @bundles/CampaignBundle/Command/WriteCountTrait.php */
class __TwigTemplate_fd8541f55f77afb8f0900b6df1bf8933 extends Template
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

namespace Mautic\\CampaignBundle\\Command;

use Mautic\\CampaignBundle\\Executioner\\Result\\Counter;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

trait WriteCountTrait
{
    private function writeCounts(OutputInterface \$output, TranslatorInterface \$translator, Counter \$counter): void
    {
        \$output->writeln('');
        \$output->writeln(
            '<comment>'.\$translator->trans(
                'mautic.campaign.trigger.events_executed',
                ['%count%' => \$counter->getTotalExecuted()]
            )
            .'</comment>'
        );
        \$output->writeln(
            '<comment>'.\$translator->trans(
                'mautic.campaign.trigger.events_scheduled',
                ['%count%' => \$counter->getTotalScheduled()]
            )
            .'</comment>'
        );
        \$output->writeln('');
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
        return "@bundles/CampaignBundle/Command/WriteCountTrait.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/WriteCountTrait.php", "/app/docroot/app/bundles/CampaignBundle/Command/WriteCountTrait.php");
    }
}
