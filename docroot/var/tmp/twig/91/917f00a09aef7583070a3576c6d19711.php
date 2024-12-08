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

/* @bundles/IntegrationsBundle/Form/Type/Auth/Oauth1aTwoLeggedKeysTrait.php */
class __TwigTemplate_aa702d2cdd151e93422503c7b6127c71 extends Template
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

trait Oauth1aTwoLeggedKeysTrait
{
    use NotBlankIfPublishedConstraintTrait;

    private function addKeyFields(FormBuilderInterface \$builder): void
    {
        \$builder->add(
            'consumerKey',
            TextType::class,
            [
                'label'      => 'mautic.integration.oauth1a.consumer.key',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );

        \$builder->add(
            'consumerSecret',
            TextType::class,
            [
                'label'      => 'mautic.integration.oauth1a.consumer.secret',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );

        \$builder->add(
            'token',
            TextType::class,
            [
                'label'      => 'mautic.integration.oauth1a.token',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );

        \$builder->add(
            'tokenSecret',
            TextType::class,
            [
                'label'      => 'mautic.integration.oauth1a.token.secret',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
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
        return "@bundles/IntegrationsBundle/Form/Type/Auth/Oauth1aTwoLeggedKeysTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/Auth/Oauth1aTwoLeggedKeysTrait.php", "/app/docroot/app/bundles/IntegrationsBundle/Form/Type/Auth/Oauth1aTwoLeggedKeysTrait.php");
    }
}
