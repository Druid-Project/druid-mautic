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

/* @bundles/UserBundle/Form/Type/PermissionsType.php */
class __TwigTemplate_dcc293d69becd56fa3ea4526d22fbeb4 extends Template
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

namespace Mautic\\UserBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Valid;

/**
 * @extends AbstractType<array<mixed>>
 */
class PermissionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        foreach (\$options['permissionsConfig'] as \$bundle => \$config) {
            \$builder->add(
                \$bundle,
                HiddenType::class,
                [
                    'data'   => 'newbundle',
                    'label'  => false,
                    'mapped' => false,
                ]
            );
            \$config['permissionObject']->buildForm(\$builder, \$options, \$config['data']);
        }

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'permissionsConfig' => [],
            'constraints'       => [new Valid()],
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
        return "@bundles/UserBundle/Form/Type/PermissionsType.php";
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
        return new Source("", "@bundles/UserBundle/Form/Type/PermissionsType.php", "/app/docroot/app/bundles/UserBundle/Form/Type/PermissionsType.php");
    }
}
