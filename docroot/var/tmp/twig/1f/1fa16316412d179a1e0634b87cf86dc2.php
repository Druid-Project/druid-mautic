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

/* @bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php */
class __TwigTemplate_cd892dadf8eae4057cafae3548ae51d7 extends Template
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

namespace Mautic\\CoreBundle\\Update\\Step;

use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class FinalizeUpdateStep implements StepInterface
{
    public function __construct(
        private TranslatorInterface \$translator,
        private PathsHelper \$pathsHelper,
        private Session \$session,
        private AppVersion \$appVersion
    ) {
    }

    public function getOrder(): int
    {
        return 60;
    }

    public function shouldExecuteInFinalStage(): bool
    {
        return true;
    }

    public function execute(ProgressBar \$progressBar, InputInterface \$input, OutputInterface \$output): void
    {
        \$progressBar->setMessage(\$this->translator->trans('mautic.core.update.step.wrapping_up'));
        \$progressBar->advance();

        // Clear the cached update data and the download package now that we've updated
        @unlink(\$this->pathsHelper->getRootPath().'/upgrade.php');
        @unlink(\$this->pathsHelper->getCachePath().'/lastUpdateCheck.txt');

        // Update successful
        \$progressBar->setMessage(
            \$this->translator->trans('mautic.core.update.update_successful', ['%version%' => \$this->appVersion->getVersion()]).\"\\n\\n\"
        );
        \$progressBar->finish();

        // Check for a post install message from migrations
        if (\$postMessage = \$this->session->get('post_upgrade_message')) {
            \$postMessage = strip_tags(\$postMessage);
            \$this->session->remove('post_upgrade_message');
            \$output->writeln(\"\\n\\n<info>\$postMessage</info>\");
        }
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
        return "@bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php";
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
        return new Source("", "@bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php", "/app/docroot/app/bundles/CoreBundle/Update/Step/FinalizeUpdateStep.php");
    }
}
