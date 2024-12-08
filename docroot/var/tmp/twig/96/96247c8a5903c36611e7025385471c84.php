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

/* @bundles/EmailBundle/Tests/Form/Type/FormSubmitActionUserEmailTypeTest.php */
class __TwigTemplate_f69cf87056dc3af272cb07d944df6ff7 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\EmailBundle\\Form\\Type\\EmailSendType;
use Mautic\\EmailBundle\\Form\\Type\\FormSubmitActionUserEmailType;
use Mautic\\StageBundle\\Model\\StageModel;
use Mautic\\UserBundle\\Form\\Type\\UserListType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class FormSubmitActionUserEmailTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|EntityManager
     */
    private \$entityManager;

    /**
     * @var MockObject|StageModel
     */
    private \$stageModel;

    /**
     * @var MockObject|FormBuilderInterface
     */
    private MockObject \$formBuilder;

    private FormSubmitActionUserEmailType \$form;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->formBuilder          = \$this->createMock(FormBuilderInterface::class);
        \$this->form                 = new FormSubmitActionUserEmailType();
        \$this->formBuilder->method('create')->willReturnSelf();
    }

    public function testBuildForm(): void
    {
        \$options = [];

        \$this->formBuilder->expects(\$this->exactly(2))
            ->method('add')
            ->withConsecutive(
                [
                    'useremail',
                    EmailSendType::class,
                    [
                        'label' => 'mautic.email.emails',
                        'attr'  => [
                            'class'   => 'form-control',
                            'tooltip' => 'mautic.email.choose.emails_descr',
                        ],
                        'update_select' => 'formaction_properties_useremail_email',
                    ],
                ],
                [
                    'user_id',
                    UserListType::class,
                    [
                        'label'      => 'mautic.email.form.users',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => [
                            'class'   => 'form-control',
                            'tooltip' => 'mautic.core.help.autocomplete',
                        ],
                        'required'    => true,
                        'constraints' => new NotBlank(
                            [
                                'message' => 'mautic.core.value.required',
                            ]
                        ),
                    ],
                ]
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);
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
        return "@bundles/EmailBundle/Tests/Form/Type/FormSubmitActionUserEmailTypeTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Form/Type/FormSubmitActionUserEmailTypeTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Form/Type/FormSubmitActionUserEmailTypeTest.php");
    }
}
