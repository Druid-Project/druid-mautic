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

/* @bundles/FormBundle/Config/services.php */
class __TwigTemplate_b1e4ac9723e9621b959e10abaa126d67 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\MauticCoreExtension;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'ProgressiveProfiling/DisplayCounter.php',
        'ProgressiveProfiling/DisplayManager.php',
    ];

    \$services->load('Mautic\\\\FormBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\FormBundle\\\\Entity\\\\', '../Entity/*Repository.php')
        ->tag(Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG);

    \$services->alias('mautic.form.model.action', Mautic\\FormBundle\\Model\\ActionModel::class);
    \$services->alias('mautic.form.model.field', Mautic\\FormBundle\\Model\\FieldModel::class);
    \$services->alias('mautic.form.model.form', Mautic\\FormBundle\\Model\\FormModel::class);
    \$services->alias('mautic.form.model.submission', Mautic\\FormBundle\\Model\\SubmissionModel::class);
    \$services->alias('mautic.form.model.submission_result_loader', Mautic\\FormBundle\\Model\\SubmissionResultLoader::class);
    \$services->alias('mautic.form.repository.form', Mautic\\FormBundle\\Entity\\FormRepository::class);
    \$services->alias('mautic.form.repository.submission', Mautic\\FormBundle\\Entity\\SubmissionRepository::class);
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Config/services.php";
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
        return new Source("", "@bundles/FormBundle/Config/services.php", "/app/docroot/app/bundles/FormBundle/Config/services.php");
    }
}
