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

/* @bundles/LeadBundle/Tests/Command/ImportCommandTest.php */
class __TwigTemplate_31a1b744eed7cd12a4b600c8270d85ae extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Command;

use Mautic\\CoreBundle\\ProcessSignal\\ProcessSignalService;
use Mautic\\LeadBundle\\Command\\ImportCommand;
use Mautic\\LeadBundle\\Entity\\Import;
use Mautic\\LeadBundle\\Model\\ImportModel;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Entity\\UserRepository;
use Mautic\\UserBundle\\Security\\UserTokenSetter;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ImportCommandTest extends TestCase
{
    public function testExecute(): void
    {
        // Translator
        \$translatorMock = \$this->createMock(TranslatorInterface::class);

        // Import entity
        \$importMock = \$this->createMock(Import::class);
        \$importMock->expects(\$this->once())
            ->method('getCreatedBy')
            ->willReturn(42);

        // Import Model Mock
        \$importModelMock = \$this->createMock(ImportModel::class);
        \$importModelMock->expects(\$this->once())
            ->method('getEntity')
            ->with(42)
            ->willReturn(\$importMock);

        // User Token Setter
        \$user               = new User();
        \$userRepositoryMock = \$this->createMock(UserRepository::class);
        \$userRepositoryMock->expects(\$this->once())
            ->method('getEntity')
            ->with(42)
            ->willReturn(\$user);
        \$tokenStorageMock   = \$this->createMock(TokenStorage::class);
        \$tokenStorageMock->expects(\$this->once())
            ->method('setToken');
        \$userTokenSetter  = new UserTokenSetter(\$userRepositoryMock, \$tokenStorageMock);

        \$importCommand =  new class(\$translatorMock, \$importModelMock, new ProcessSignalService(), \$userTokenSetter) extends ImportCommand {
            public function getExecute(InputInterface \$input, OutputInterface \$output): int
            {
                return \$this->execute(\$input, \$output);
            }
        };

        // InputInterface
        \$inputInterfaceMock = \$this->createMock(InputInterface::class);
        \$inputInterfaceMock->method('getOption')
            ->withConsecutive(['id'], ['limit'])
            ->willReturnOnConsecutiveCalls(42, 10);

        // OutputInterface
        \$outputInterfaceMock = \$this->createMock(OutputInterface::class);
        // Start test
        \$this->assertSame(0, \$importCommand->getExecute(\$inputInterfaceMock, \$outputInterfaceMock));
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
        return "@bundles/LeadBundle/Tests/Command/ImportCommandTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Command/ImportCommandTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Command/ImportCommandTest.php");
    }
}
