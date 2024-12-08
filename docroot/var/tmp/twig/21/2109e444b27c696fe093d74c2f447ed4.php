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

/* @bundles/IntegrationsBundle/Form/Type/Auth/BasicAuthKeysTrait.php */
class __TwigTemplate_2d400886f7170f0cfab5fbc3c8c4c8c9 extends Template
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

namespace Mautic\\IntegrationsBundle\\Form\\Type\\Auth;

use Mautic\\IntegrationsBundle\\Form\\Type\\NotBlankIfPublishedConstraintTrait;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

trait BasicAuthKeysTrait
{
    use NotBlankIfPublishedConstraintTrait;

    /**
     * @param string \$usernameLabel
     * @param string \$passwordLabel
     */
    private function addKeyFields(FormBuilderInterface \$builder, \$usernameLabel = 'mautic.core.username', \$passwordLabel = 'mautic.core.password'): void
    {
        \$builder->add(
            'username',
            TextType::class,
            [
                'label'       => \$usernameLabel,
                'label_attr'  => ['class' => 'control-label'],
                'required'    => true,
                'attr'        => [
                    'class' => 'form-control',
                ],
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );

        \$builder->add(
            'password',
            PasswordType::class,
            [
                'label'       => \$passwordLabel,
                'label_attr'  => ['class' => 'control-label'],
                'required'    => true,
                'attr'        => [
                    'class' => 'form-control',
                ],
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );
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
        return "@bundles/IntegrationsBundle/Form/Type/Auth/BasicAuthKeysTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/Auth/BasicAuthKeysTrait.php", "/app/docroot/app/bundles/IntegrationsBundle/Form/Type/Auth/BasicAuthKeysTrait.php");
    }
}
