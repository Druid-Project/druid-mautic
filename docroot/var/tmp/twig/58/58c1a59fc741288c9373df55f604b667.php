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

/* @bundles/UserBundle/Config/services.php */
class __TwigTemplate_302f64d319be0b51e1a8259c39aaf2ff extends Template
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
    ];

    \$services->load('Mautic\\\\UserBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\UserBundle\\\\Entity\\\\', '../Entity/*Repository.php')
        ->tag(Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG);

    \$services->alias(Mautic\\UserBundle\\Entity\\UserTokenRepositoryInterface::class, Mautic\\UserBundle\\Entity\\UserTokenRepository::class);

    \$services->alias('mautic.user.model.role', Mautic\\UserBundle\\Model\\RoleModel::class);
    \$services->alias('mautic.user.model.user', Mautic\\UserBundle\\Model\\UserModel::class);
    \$services->alias('mautic.user.repository.user_token', Mautic\\UserBundle\\Entity\\UserTokenRepository::class);
    \$services->alias('mautic.user.repository', Mautic\\UserBundle\\Entity\\UserRepository::class);
    \$services->alias('mautic.permission.repository', Mautic\\UserBundle\\Entity\\PermissionRepository::class);
    \$services->alias('mautic.user.model.password_strength_estimator', Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel::class);
    \$services->get(Mautic\\UserBundle\\Form\\Validator\\Constraints\\NotWeakValidator::class)->tag('validator.constraint_validator');
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Config/services.php";
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
        return new Source("", "@bundles/UserBundle/Config/services.php", "/app/docroot/app/bundles/UserBundle/Config/services.php");
    }
}
