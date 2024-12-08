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

/* @bundles/StageBundle/Form/Type/StageListType.php */
class __TwigTemplate_0d1a24b8db7d4f2ba4953a4bddcd4948 extends Template
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

namespace Mautic\\StageBundle\\Form\\Type;

use Mautic\\StageBundle\\Entity\\Stage;
use Mautic\\StageBundle\\Model\\StageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Stage>
 */
class StageListType extends AbstractType
{
    /**
     * @var array<string,int>
     */
    private array \$choices = [];

    public function __construct(private StageModel \$stageModel)
    {
        \$this->stageModel = \$stageModel;
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'choices'           => \$this->getStageChoices(),
            'expanded'          => false,
            'multiple'          => true,
            'required'          => false,
            'placeholder'       => 'mautic.core.form.chooseone',
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * @return array<string,int>
     */
    private function getStageChoices(): array
    {
        if (\$this->choices) {
            return \$this->choices;
        }

        \$stages = \$this->stageModel->getRepository()->getEntities([
            'filter' => [
                'force' => [
                    [
                        'column' => 's.isPublished',
                        'expr'   => 'eq',
                        'value'  => true,
                    ],
                ],
            ],
        ]);

        /** @var Stage \$stage */
        foreach (\$stages as \$stage) {
            \$this->choices[\$stage->getName()] = \$stage->getId();
        }

        // sort by language
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
        return "@bundles/StageBundle/Form/Type/StageListType.php";
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
        return new Source("", "@bundles/StageBundle/Form/Type/StageListType.php", "/app/docroot/app/bundles/StageBundle/Form/Type/StageListType.php");
    }
}
