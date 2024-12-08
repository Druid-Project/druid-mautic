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

/* @bundles/CoreBundle/Update/Step/DeleteCacheStep.php */
class __TwigTemplate_b6800cf1e16c4deb718225199a04b412 extends Template
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

use Mautic\\CoreBundle\\Helper\\CacheHelper;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class DeleteCacheStep implements StepInterface
{
    public function __construct(
        private CacheHelper \$cacheHelper,
        private TranslatorInterface \$translator
    ) {
    }

    public function getOrder(): int
    {
        return 30;
    }

    public function shouldExecuteInFinalStage(): bool
    {
        return false;
    }

    public function execute(ProgressBar \$progressBar, InputInterface \$input, OutputInterface \$output): void
    {
        // Clear the dev and prod cache instances to reset the system
        \$progressBar->setMessage(\$this->translator->trans('mautic.core.update.clear.cache'));
        \$progressBar->advance();

        \$this->cacheHelper->nukeCache();
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
        return "@bundles/CoreBundle/Update/Step/DeleteCacheStep.php";
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
        return new Source("", "@bundles/CoreBundle/Update/Step/DeleteCacheStep.php", "/app/docroot/app/bundles/CoreBundle/Update/Step/DeleteCacheStep.php");
    }
}
