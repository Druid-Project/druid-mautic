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

/* @bundles/UserBundle/Form/Type/UserListType.php */
class __TwigTemplate_f2f393d94b6c7cb9c8abc4d8db75c61b extends Template
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

use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class UserListType extends AbstractType
{
    /**
     * @var array<string,int>
     */
    private array \$choices = [];

    public function __construct(
        private UserModel \$userModel
    ) {
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'choices'           => \$this->getUserChoices(),
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'placeholder'       => 'mautic.core.form.chooseone',
            ]
        );
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * @return array<string,int>
     */
    private function getUserChoices(): array
    {
        if (\$this->choices) {
            return \$this->choices;
        }

        \$users = \$this->userModel->getRepository()->getEntities(
            [
                'filter' => [
                    'force' => [
                        [
                            'column' => 'u.isPublished',
                            'expr'   => 'eq',
                            'value'  => true,
                        ],
                    ],
                ],
            ]
        );

        foreach (\$users as \$user) {
            \$this->choices[\$user->getName(true)] = \$user->getId();
        }

        // sort by user name
        ksort(\$this->choices);

        return \$this->choices;
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
        return "@bundles/UserBundle/Form/Type/UserListType.php";
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
        return new Source("", "@bundles/UserBundle/Form/Type/UserListType.php", "/app/docroot/app/bundles/UserBundle/Form/Type/UserListType.php");
    }
}
