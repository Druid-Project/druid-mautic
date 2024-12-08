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

/* @bundles/PageBundle/Tests/Model/RedirectModelTest.php */
class __TwigTemplate_5b4d8fc74b77ad1d1a68669dd58b1437 extends Template
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

namespace Mautic\\PageBundle\\Tests\\Model;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Shortener\\Shortener;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\PageBundle\\Entity\\Redirect;
use Mautic\\PageBundle\\Event\\RedirectGenerationEvent;
use Mautic\\PageBundle\\Model\\RedirectModel;
use Mautic\\PageBundle\\PageEvents;
use Mautic\\PageBundle\\Tests\\PageTestAbstract;
use Psr\\Log\\LoggerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Routing\\Router;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class RedirectModelTest extends PageTestAbstract
{
    public function testCreateRedirectEntityWhenCalledReturnsRedirect(): void
    {
        \$redirectModel = \$this->getRedirectModel();
        \$entity        = \$redirectModel->createRedirectEntity('http://some-url.com');

        \$this->assertInstanceOf(Redirect::class, \$entity);
    }

    public function testGenerateRedirectUrlWhenCalledReturnsValidUrl(): void
    {
        \$redirect = new Redirect();
        \$redirect->setUrl('http://some-url.com');
        \$redirect->setRedirectId('redirect-id');

        \$redirectModel = \$this->getRedirectModel();
        \$url           = \$redirectModel->generateRedirectUrl(\$redirect);

        \$this->assertStringContainsString(\$url, 'http://some-url.com');
    }

    public function testRedirectGenerationEvent(): void
    {
        \$shortener = \$this
            ->getMockBuilder(Shortener::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$dispatcher = new EventDispatcher();

        \$url          = 'https://mautic.org';
        \$clickthrough = ['foo' => 'bar'];

        \$router = \$this->createMock(Router::class);
        \$router->expects(\$this->exactly(2))
            ->method('generate')
            ->willReturn(\$url);

        \$model = new RedirectModel(
            \$this->createMock(EntityManagerInterface::class),
            \$this->createMock(CorePermissions::class),
            \$dispatcher,
            \$router,
            \$this->createMock(Translator::class),
            \$this->createMock(UserHelper::class),
            \$this->createMock(LoggerInterface::class),
            \$this->createMock(CoreParametersHelper::class),
            \$shortener
        );

        \$redirect = new Redirect();
        \$redirect->setUrl(\$url);

        // URL should just have foo = bar in the CT
        \$url = \$model->generateRedirectUrl(\$redirect, \$clickthrough);
        \$this->assertEquals('https://mautic.org?ct=YToxOntzOjM6ImZvbyI7czozOiJiYXIiO30%3D', \$url);

        // Add the listener to append something else to the CT
        \$dispatcher->addListener(
            PageEvents::ON_REDIRECT_GENERATE,
            function (RedirectGenerationEvent \$event): void {
                \$event->setInClickthrough('bar', 'foo');
            }
        );
        \$url = \$model->generateRedirectUrl(\$redirect, \$clickthrough);
        \$this->assertEquals('https://mautic.org?ct=YToyOntzOjM6ImZvbyI7czozOiJiYXIiO3M6MzoiYmFyIjtzOjM6ImZvbyI7fQ%3D%3D', \$url);
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
        return "@bundles/PageBundle/Tests/Model/RedirectModelTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Model/RedirectModelTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Model/RedirectModelTest.php");
    }
}
