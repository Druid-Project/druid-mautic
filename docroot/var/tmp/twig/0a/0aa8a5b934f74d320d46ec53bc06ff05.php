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

/* @bundles/CoreBundle/Tests/Unit/Form/Type/DynamicListTypeTest.php */
class __TwigTemplate_a98f989e95b9c8139196e13f34688618 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\DynamicListType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

final class DynamicListTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&FormBuilderInterface<FormBuilderInterface>
     */
    private MockObject \$formBuilder;

    private DynamicListType \$form;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->formBuilder = \$this->createMock(FormBuilderInterface::class);
        \$this->form        = new DynamicListType();
    }

    public function testBuildFormWhenDataIsNull(): void
    {
        \$this->formBuilder->expects(\$this->once())
            ->method('addEventListener')
            ->with(
                FormEvents::PRE_SUBMIT,
                \$this->callback(function (\$formModifier) {
                    \$formEvent = \$this->createMock(FormEvent::class);

                    \$formEvent->expects(\$this->once())
                        ->method('getData')
                        ->willReturn(null);

                    \$formEvent->expects(\$this->never())
                        ->method('setData');

                    \$formModifier(\$formEvent);

                    return true;
                })
            );

        \$this->form->buildForm(\$this->formBuilder, []);
    }

    public function testBuildFormWhenDataIsArray(): void
    {
        \$this->formBuilder->expects(\$this->once())
            ->method('addEventListener')
            ->with(
                FormEvents::PRE_SUBMIT,
                \$this->callback(function (\$formModifier) {
                    \$formEvent = \$this->createMock(FormEvent::class);
                    \$data      = [['content' => 'dynamic slot content']];

                    \$formEvent->expects(\$this->once())
                        ->method('getData')
                        ->willReturn(\$data);

                    \$formEvent->expects(\$this->once())
                        ->method('setData')
                        ->with(\$data);

                    \$formModifier(\$formEvent);

                    return true;
                })
            );

        \$this->form->buildForm(\$this->formBuilder, []);
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
        return "@bundles/CoreBundle/Tests/Unit/Form/Type/DynamicListTypeTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Form/Type/DynamicListTypeTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Form/Type/DynamicListTypeTest.php");
    }
}
