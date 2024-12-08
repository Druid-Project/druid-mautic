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

/* @bundles/NotificationBundle/Tests/Form/Type/MobileNotificationSendTypeTest.php */
class __TwigTemplate_7f7bd75e78e2d1ed1cfb93361edac111 extends Template
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

namespace Mautic\\NotificationBundle\\Tests\\Form\\Type;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Form\\Type\\EntityLookupType;
use Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationSendType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\PreloadedExtension;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Validation;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class MobileNotificationSendTypeTest extends TypeTestCase
{
    private RouterInterface \$router;

    private TranslatorInterface \$translator;

    private Connection \$connection;

    /**
     * @var ModelFactory<object>&MockObject
     */
    private ModelFactory \$modelFactory;

    protected function setUp(): void
    {
        \$this->router       = \$this->createMock(RouterInterface::class);
        \$this->translator   = \$this->createMock(TranslatorInterface::class);
        \$this->modelFactory = \$this->createMock(ModelFactory::class);
        \$this->connection   = \$this->createMock(Connection::class);

        parent::setup();
    }

    /**
     * @return array<mixed>
     */
    protected function getExtensions()
    {
        return [
            new ValidatorExtension(Validation::createValidator()),
            new PreloadedExtension([
                new MobileNotificationSendType(\$this->router),
                new EntityLookupType(\$this->modelFactory, \$this->translator, \$this->connection, \$this->router),
            ], []),
        ];
    }

    public function testSubmitValidData(): void
    {
        \$form = \$this->factory->create(MobileNotificationSendType::class);

        \$expected = [
            'notification' => '1',
        ];

        \$form->submit([
            'notification' => '1',
        ]);

        // This check ensures there are no transformation failures
        \$this->assertTrue(\$form->isSynchronized());

        // check that \$model was modified as expected when the form was submitted
        \$this->assertEquals(\$expected, \$form->getData());
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
        return "@bundles/NotificationBundle/Tests/Form/Type/MobileNotificationSendTypeTest.php";
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
        return new Source("", "@bundles/NotificationBundle/Tests/Form/Type/MobileNotificationSendTypeTest.php", "/app/docroot/app/bundles/NotificationBundle/Tests/Form/Type/MobileNotificationSendTypeTest.php");
    }
}
